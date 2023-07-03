@extends('commons.fresns')

@section('title', fs_db_config('menu_nearby_posts'))

@section('content')
    {{-- Navigation --}}
    @include('posts.tabs')

    {{-- Location --}}
    <div class="alert alert-warning my-3" role="alert" id="currentLocation">
        <button class="btn btn-primary" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            {{ fs_lang('locationLoading') }}
        </button>
    </div>

    {{-- Post List --}}
    <div class="clearfix  " id="fresns-list-container">
        @foreach($posts as $post)
            @component('components.post.list', compact('post'))@endcomponent
        @endforeach
    </div>

    @if ($posts->isEmpty())
        {{-- No Post --}}
        <div class="text-center my-5 text-muted fs-7"><i class="fa-regular fa-rectangle-list"></i> {{ fs_lang('listEmpty') }}</div>
    @else
        {{-- Pagination --}}
        <div class="px-3 me-3 me-lg-0 mt-4 table-responsive d-none">
            {{ $posts->links() }}
        </div>

        {{-- Ajax Footer --}}
        @include('commons.ajax-footer')
    @endif
@endsection

@push('script')
    {{-- nearby?mapId=1&mapLat=23.099994&mapLng=113.32452 --}}
    <script>
        window.getNearbyPostsPagination = function (url){
            window.location.href = url
        }

        // get location
        function getLocationSuccess(position, pageHasPosition = false) {
            if (pageHasPosition) {
                $('#currentLocation').html(`
                    <div class="row">
                        <div class="col">Latitude: ${position.latitude}<br>Longitude: ${position.longitude}</div>
                        <div class="col text-end">
                            <a href="{{ fs_route(route('fresns.post.nearby')) }}" role="button" class="btn btn-success"><i class="fa-solid fa-map-location-dot"></i> {{ fs_lang('reloadLocation') }}</a>
                        </div>
                    </div>`)
            }
        }

        // get location error
        function getLocationError(location_error_code, reason) {
            // window.tips(reason, 403);
            $('#currentLocation').html(`
                <div class="row">
                    <div class="col"><i class="fa-solid fa-triangle-exclamation"></i> ${reason}</div>
                    <div class="col text-end">
                        <a href="{{ fs_route(route('fresns.post.nearby')) }}" role="button" class="btn btn-success"><i class="fa-solid fa-map-location-dot"></i> {{ fs_lang('reloadLocation') }}</a>
                    </div>
                </div>`)
        }

        function getPostsByNearby(e) {
            if (e) {
                e.preventDefault();
            }

            // URL with location information
            let urlSearchParams = new URLSearchParams(window.location.search)
            if (urlSearchParams.has('mapLat') && urlSearchParams.has('mapLng')) {
                console.log(urlSearchParams.toString())

                getLocationSuccess({
                    longitude: urlSearchParams.get('mapLng'),
                    latitude: urlSearchParams.get('mapLat'),
                }, true)
                return;
            }

            if (navigator.geolocation) {
                let options = {
                    enableHighAcuracy: true,
                    maximumAge: 1000,
                };

                navigator.geolocation.getCurrentPosition(function (position){
                    getLocationSuccess({
                        longitude: position.coords.longitude,
                        latitude: position.coords.latitude,
                    }, false)

                    let url = "{{ fs_route(route('fresns.post.nearby')) }}";
                    url = url + "?mapId=1&mapLat=" + position.coords.latitude + "&mapLng=" + position.coords.longitude;

                    window.getNearbyPostsPagination(url)
                }, window.onError, options);
            } else {
                window.tips(fs_lang('getLocationError'), 403)
            }
        }

        $(function () {
            getPostsByNearby()
        })

        // get location error
        window.onError = function (error) {
            let reason

            setTimeout(function () {
                switch (error.code) {
                    case 1:
                        reason = fs_lang('errorRejection');
                        break;
                    case 2:
                        reason = fs_lang('errorNoInfo');
                        break;
                    case 3:
                        reason = fs_lang('errorTimeout');
                        break;
                    case 4:
                        reason = fs_lang('errorTimeout');
                        break;
                    default:
                        reason = fs_lang('errorUnknown');
                        break;
                }

                getLocationError(error.code, reason)
            }, 1500)
        }
    </script>
@endpush
