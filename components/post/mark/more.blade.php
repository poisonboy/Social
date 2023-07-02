<ul class="dropdown-menu interaction-more" aria-labelledby="more">
    {{-- Edit --}}
    @if ($editControls['isMe'] && $editControls['canEdit'])
        <li>
            <a class="dropdown-item py-2 web-request-link" href="#" data-action="{{ fs_route(route('fresns.editor.store', ['type' => 'post', 'fsid' => $pid])) }}">
                <i class="fa-regular fa-pen-to-square"></i>
                {{ fs_lang('edit') }}
            </a>
        </li>
    @endif

    {{-- Delete --}}
    @if ($editControls['isMe'] && $editControls['canDelete'])
        <li><a class="dropdown-item py-2" data-bs-toggle="modal" href="#delete-{{ $pid }}"><i class="fa-regular fa-trash-can"></i> {{ fs_lang('delete') }}</a></li>
    @endif

    {{-- Follow --}}
    @if ($interaction['followSetting'])
        <li>
            @component('components.post.mark.follow', [
                'pid' => $pid,
                'interaction' => $interaction,
                'count' => $followCount,
            ])@endcomponent
        </li>
    @endif

    {{-- Block --}}
    @if ($interaction['blockSetting'])
        <li>
            @component('components.post.mark.block', [
                'pid' => $pid,
                'interaction' => $interaction,
                'count' => $blockCount,
            ])@endcomponent
        </li>
    @endif

    {{-- Manages --}}
    @if ($manages)
        @foreach($manages as $plugin)
            <li>
                <a class="dropdown-item py-2" data-bs-toggle="modal" href="#fresnsModal"
                    data-type="post"
                    data-scene="manage"
                    data-post-message-key="fresnsPostManage"
                    data-pid="{{ $pid }}"
                    data-uid="{{ $uid }}"
                    data-title="{{ $plugin['name'] }}"
                    data-url="{{ $plugin['url'] }}">
                    @if ($plugin['icon'])
                        <img src="{{ $plugin['icon'] }}" loading="lazy" width="20" height="20">
                    @endif
                    {{ $plugin['name'] }}
                </a>
            </li>
        @endforeach
    @endif
</ul>

{{-- Delete Secondary Confirmation --}}
@if ($editControls['isMe'] && $editControls['canDelete'])
    <div class="modal fade" id="delete-{{ $pid }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete-{{ $pid }}Label" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5">{{ fs_lang('delete') }}?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ fs_lang('cancel') }}</button>
                    <a class="btn btn-danger api-request-link" href="#" role="button" data-method="DELETE" data-id="{{ $pid }}" data-action="{{ route('fresns.api.content.delete',  ['type' => 'post', 'fsid' => $pid]) }}" data-bs-dismiss="modal">{{ fs_lang('delete') }}</a>
                </div>
            </div>
        </div>
    </div>
@endif
