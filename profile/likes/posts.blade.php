@extends('profile.profile')

@section('list')
    {{-- List --}}
    <div class="clearfix " id="fresns-list-container">
        @foreach($posts as $post)
            @component('components.post.list', compact('post'))@endcomponent
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="px-3 me-3 me-lg-0 mt-4 table-responsive d-none">
        {{ $posts->links() }}
    </div>

    {{-- Ajax Footer --}}
    @include('commons.ajax-footer')
@endsection
