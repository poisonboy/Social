@if ($followType == 1)
    <form action="{{ route('fresns.api.user.mark') }}" method="post" class="float-start me-2">
        @csrf
        <input type="hidden" name="interactionType" value="follow"/>
        <input type="hidden" name="markType" value="group"/>
        <input type="hidden" name="fsid" value="{{ $gid }}"/>
        @if ($interaction['followStatus'])
            <a class="btn btn-success btn-sm fs-mark" data-interaction-active="{{ $interaction['followStatus'] }}" data-bi="fa-regular fa-flag" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ fs_lang('cancel') }}">
                <i class="fa-solid fa-flag"></i>
                @if (fs_api_config('group_follower_count') && $count)
                    <span class="show-count">{{ $count }}</span>
                @endif
            </a>
        @else
            <a class="btn btn-outline-success btn-sm fs-mark" data-bi="fa-solid fa-flag" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $interaction['followName'] }}">
                <i class="fa-regular fa-flag"></i>
                @if (fs_api_config('group_follower_count') && $count)
                    <span class="show-count">{{ $count }}</span>
                @endif
            </a>
        @endif
    </form>
@elseif ($followType == 2)
    @if (! $interaction['followStatus'])
        <form class="float-start me-2">
            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#fresnsModal"
                data-type="group"
                data-scene="follow"
                data-post-message-key="fresnsFollow"
                data-gid="{{ $gid }}"
                data-title="{{ $interaction['followName'] }}: {{ $gname }}"
                data-url="{{ $followUrl }}">
                <i class="fa-regular fa-flag"></i>
                {{ $interaction['followName'] }}
                @if (fs_api_config('group_follower_count') && $count)
                    <span class="badge rounded-pill bg-success">{{ $count }}</span>
                @endif
            </button>
        </form>
    @endif
@endif
