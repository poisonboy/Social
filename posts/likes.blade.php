@extends('commons.fresns')

@section('title', fs_db_config('menu_like_posts'))

@section('content')
    {{-- Navigation --}}
    @include('account.tabs-likes')

    {{-- Post List --}}
    <div class="clearfix " id="fresns-list-container">
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
