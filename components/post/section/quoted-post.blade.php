@if ($quotedPost['author'] ?? null)
    <section class="comment-post my-2 mx-3 position-relative">
        <div class="d-flex">
            <div class="flex-shrink-0"><img src="{{ $quotedPost['author']['avatar'] }}" loading="lazy" alt="{{ $quotedPost['author']['nickname'] }}" class="rounded"></div>
            <div class="flex-grow-1">
                @if (isset($quotedPost['author']['status']) && ! $quotedPost['author']['status'])
                    {{ fs_lang('userDeactivate') }}:
                @elseif (! $quotedPost['author']['fsid'])
                    {{ fs_lang('contentAuthorAnonymous') }}:
                @else
                    {{ $quotedPost['author']['nickname'] }}:
                @endif

                {!! Str::limit(strip_tags($quotedPost['content']), 140) !!}
            </div>
        </div>

        @if ($quotedPost['group'])
            <div class="comment-post-group  text-secondary">{{ $quotedPost['group']['gname'] }}</div>
        @endif

        <a href="{{ fs_route(route('fresns.post.detail', ['pid' => $quotedPost['pid']])) }}" class="text-decoration-none stretched-link"></a>
    </section>
@endif
