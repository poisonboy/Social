@extends('commons.fresns')

@section('title', fs_lang('discover'))

@section('content')
    <div class="text-bg-light p-2 mb-3">
        @if (! fs_db_config('fs_search_method'))
            <form action="{{ fs_route(route('fresns.search.index')) }}" method="get">
                <input type="hidden" name="searchType" value="post"/>
                <input class="form-control rounded-pill bg-light py-2 px-3" name="searchKey" value="{{ request('searchKey') }}" placeholder="{{ fs_lang('search') }}" aria-label="Search">
            </form>
        @else
            @php
                $siteDomain = \App\Helpers\StrHelper::extractDomainByUrl(fs_api_config('site_url'));
            @endphp

            <form id="searchForm" action="https://www.google.com/search" method="get" target="_blank">
                <input type="text" id="searchInput" name="userSearch" placeholder="{{ fs_lang('search') }}" class="form-control rounded-pill bg-light py-2 px-3">
                <input type="hidden" id="hiddenSearch" name="q">
            </form>
            <script>
                document.getElementById('searchForm').addEventListener('submit', function(e) {
                    const searchInput = document.getElementById('searchInput');
                    const hiddenSearch = document.getElementById('hiddenSearch');
                    hiddenSearch.value = 'site:{{ $siteDomain }} ' + searchInput.value;
                });
            </script>
        @endif

        {{-- Sticky Posts --}}
        @if (fs_sticky_posts())
            <div class="mt-2">
                @foreach(fs_sticky_posts() as $sticky)
                    @component('components.post.sticky', compact('sticky'))@endcomponent
                @endforeach
            </div>
        @endif
    </div>

    <div class="list-group rounded-0 my-3">
        {{-- User --}}
        @if (fs_api_config('menu_user_list_status'))
            <a href="{{ fs_route(route('fresns.user.list')) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <span class="py-2"><i class="fa-regular fa-circle-user me-2"></i> {{ fs_db_config('menu_user_list_name') }}</span>
                <span class="py-2 text-black-50"><i class="fa-solid fa-chevron-right"></i></span>
            </a>
        @endif
        {{-- Group --}}
        @if (fs_api_config('menu_group_list_status'))
            <a href="{{ fs_route(route('fresns.group.list')) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <span class="py-2"><i class="fa-regular fa-building me-2"></i> {{ fs_db_config('menu_group_list_name') }}</span>
                <span class="py-2 text-black-50"><i class="fa-solid fa-chevron-right"></i></span>
            </a>
        @endif
        {{-- Hashtag --}}
        @if (fs_api_config('menu_hashtag_list_status'))
            <a href="{{ fs_route(route('fresns.hashtag.list')) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <span class="py-2"><i class="fa-solid fa-hashtag me-2"></i> {{ fs_db_config('menu_hashtag_list_name') }}</span>
                <span class="py-2 text-black-50"><i class="fa-solid fa-chevron-right"></i></span>
            </a>
        @endif
        {{-- Post --}}
        @if (fs_api_config('menu_post_list_status'))
            <a href="{{ fs_route(route('fresns.post.list')) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <span class="py-2"><i class="fa-regular fa-newspaper me-2"></i> {{ fs_db_config('menu_post_list_name') }}</span>
                <span class="py-2 text-black-50"><i class="fa-solid fa-chevron-right"></i></span>
            </a>
        @endif
        {{-- Comment --}}
        @if (fs_api_config('menu_comment_list_status'))
            <a href="{{ fs_route(route('fresns.comment.list')) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <span class="py-2"><i class="fa-regular fa-comment-dots me-2"></i> {{ fs_db_config('menu_comment_list_name') }}</span>
                <span class="py-2 text-black-50"><i class="fa-solid fa-chevron-right"></i></span>
            </a>
        @endif
    </div>

    @if (fs_channels())
        <div class="list-group rounded-0 my-3">
            @foreach(fs_channels() as $channel)
                <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-start"
                    data-bs-toggle="modal"
                    data-fs-height="100%"
                    href="#fresnsModal"
                    data-type="account"
                    data-scene="fresnsChannel"
                    data-post-message-key="fresnsChannel"
                    data-title="{{ $channel['name'] }}"
                    data-url="{{ $channel['url'] }}">
                    <span class="py-2">
                        @if ($channel['icon'])
                            <img src="{{ $channel['icon'] }}" loading="lazy" class="rounded me-1" height="24">
                        @endif
                        {{ $channel['name'] }}
                    </span>
                    <span class="py-2 text-black-50">
                        @if ($channel['badgeType'])
                            <span class="badge border border-light rounded-circle bg-danger @if ($channel['badgeType'] == 1) p-1 @endif">
                                {{ $channel['badgeType'] == 1 ? '' : $channel['badgeValue'] }}
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        @endif
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </a>
            @endforeach
        </div>
    @endif
@endsection
