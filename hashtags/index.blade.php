@extends('commons.fresns')

@section('title', fs_db_config('menu_hashtag_title'))
@section('keywords', fs_db_config('menu_hashtag_keywords'))
@section('description', fs_db_config('menu_hashtag_description'))

@section('content')
    <div class="d-flex mx-3">
        @desktop
            <span class="me-2" style="margin-top:11px;">
                <a class="btn btn-outline-secondary border-0 rounded-circle" href="javascript:goBack()" role="button"><i class="fa-solid fa-arrow-left"></i></a>
            </span>
        @enddesktop
        <h1 class="fs-5 my-3">{{ fs_db_config('menu_hashtag_name') }}</h1>
    </div>

    {{-- Hashtag List --}}
    <div class="clearfix " @if (fs_db_config('menu_hashtag_query_state') != 1) id="fresns-list-container" @endif>
        @foreach($hashtags as $hashtag)
            @component('components.hashtag.list', compact('hashtag'))@endcomponent
        @endforeach
    </div>

    {{-- Pagination --}}
    @if (fs_db_config('menu_hashtag_query_state') != 1)
        <div class="px-3 me-3 me-lg-0 mt-4 table-responsive d-none">
            {{ $hashtags->links() }}
        </div>

        {{-- Ajax Footer --}}
        @include('commons.ajax-footer')
    @endif
@endsection
