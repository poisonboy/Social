<form action="{{ route('fresns.api.user.mark') }}" method="post" class="float-start me-2">
    @csrf
    <input type="hidden" name="interactionType" value="block"/>
    <input type="hidden" name="markType" value="group"/>
    <input type="hidden" name="fsid" value="{{ $gid }}"/>
    @if ($interaction['blockStatus'])
        <a class="btn btn-success btn-sm fs-mark" data-interaction-active="{{ $interaction['blockStatus'] }}" data-bi="fa-regular fa-circle-xmark" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ fs_lang('cancel') }}">
            <i class="fa-solid fa-circle-xmark"></i>
            @if (fs_api_config('group_blocker_count') && $count)
                <span class="show-count">{{ $count }}</span>
            @endif
        </a>
    @else
        <a class=" " id="fs-mark-block-{{ $gid }}" data-bs-toggle="collapse" href="#collapse-{{ $gid }}" aria-expanded="false" aria-controls="collapse-{{ $gid }}">
            <i class="fa-regular fa-circle-xmark"></i>
            @if (fs_api_config('group_blocker_count') && $count)
                <span class="show-count">{{ $count }}</span>
            @endif
        </a>

        <div class="collapse" id="collapse-{{ $gid }}">
            <div class="card card-body my-1">
                <h5 class="card-title fs-6">{{ $interaction['blockName'] }}?</h5>
                <a class="btn btn-danger btn-sm fs-mark" role="button" data-id="fs-mark-block-{{ $gid }}" data-collapse-id="collapse-{{ $gid }}" data-bi="fa-solid fa-circle-xmark" data-name="{{ $interaction['blockName'] }}" href="javascript:void(0)">{{ fs_lang('confirm') }}</a>
            </div>
        </div>
    @endif
</form>
