@extends('commons.fresns')

@section('title', fs_db_config('menu_dislike_comments'))

@section('content')
    {{-- Navigation --}}
    @include('account.tabs-dislikes')

    {{-- Comment List --}}
    <div class="clearfix border-top" id="fresns-list-container">
        @foreach($comments as $comment)
            @component('components.comment.list', [
                'comment' => $comment,
                'detailLink' => true,
                'sectionAuthorLiked' => false,
            ])@endcomponent
        @endforeach
    </div>

    @if ($comments->isEmpty())
        {{-- No Comments --}}
        <div class="text-center my-5 text-muted fs-7"><i class="fa-regular fa-comment-dots"></i> {{ fs_lang('listEmpty') }}</div>
    @else
        {{-- Pagination --}}
        <div class="px-3 me-3 me-lg-0 mt-4 table-responsive d-none">
            {{ $comments->links() }}
        </div>

        {{-- Ajax Footer --}}
        @include('commons.ajax-footer')
    @endif
@endsection
