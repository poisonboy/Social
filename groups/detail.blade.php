@extends('commons.fresns')

@section('title', $items['title'] ?? $group['gname'])
@section('keywords', $items['keywords'])
@section('description', $items['description'] ?? $group['description'])

@section('content')
    <div class="ivu-card  i-work-card shadow-sm py-3 ">
        @component('components.group.detail', compact('group'))@endcomponent
    </div>

    {{-- extensions --}}
    <div class="clearfix mb-3">
        @foreach($items['extensions'] as $extension)
            <div class="float-start mt-3" style="width:20%">
                <a class="text-decoration-none" data-bs-toggle="modal" href="#fresnsModal"
                    data-type="group"
                    data-scene="groupExtension"
                    data-post-message-key="fresnsGroupExtension"
                    data-title="{{ $extension['name'] }}"
                    data-url="{{ $extension['url'] }}">
                    <div class="position-relative mx-auto" style="width:52px">
                        <img src="{{ $extension['icon'] }}" loading="lazy" class="rounded" height="52">
                        @if ($extension['badgeType'])
                            <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-1">
                                {{ $extension['badgeType'] == 1 ? '' : $extension['badgeValue'] }}
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        @endif
                    </div>
                    <p class="mt-1 mb-0 fs-7 text-center text-nowrap">{{ $extension['name'] }}</p>
                </a>
            </div>
        @endforeach
    </div>

    {{-- Sticky Posts --}}
    @if (fs_sticky_posts($group['gid']))
        <div class="list-group rounded-0 mb-3">
            @foreach(fs_sticky_posts($group['gid']) as $sticky)
                @component('components.post.sticky', compact('sticky'))@endcomponent
            @endforeach
        </div>
    @endif

    {{-- Post List --}}
    <div class="clearfix ">
        {{-- Can View Content --}}
        @if ($group['canViewContent'])
            {{-- List --}}
            @switch($type)
                {{-- Post List --}}
                @case('posts')
                    <div class="clearfix" id="fresns-list-container">
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
                @break

                {{-- Comment List --}}
                @case('comments')
                    <div class="clearfix" id="fresns-list-container">
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
                @break

                @default
                    <div class="text-center my-5 text-muted fs-7"><i class="fa-regular fa-rectangle-list"></i> {{ fs_lang('listEmpty') }}</div>
            @endswitch
        @else
            <div class="text-center py-5 text-danger">
                <i class="fa-solid fa-circle-info"></i> {{ fs_code_message('37103') }}
            </div>
        @endif
    </div>
@endsection
