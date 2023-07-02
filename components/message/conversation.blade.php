<a href="{{ fs_route(route('fresns.messages.conversation', ['conversationId' => $conversation['id']])) }}" class="list-group-item list-group-item-action border-end-0 border-start-0 d-flex justify-content-between position-relative">
    @if ($conversation['user']['status'])
        <img src="{{ $conversation['user']['avatar'] }}" loading="lazy" class="conversation-list-avatar rounded-circle">
    @else
        <img src="{{ fs_db_config('deactivate_avatar') }}" loading="lazy" class="conversation-list-avatar rounded-circle">
    @endif

    <div class="flex-fill ms-2">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">
                @if ($conversation['user']['status'])
                    {{ $conversation['user']['nickname'] }}

                    @if ($conversation['user']['verifiedStatus'])
                        @if ($conversation['user']['verifiedIcon'])
                            <img src="{{ $conversation['user']['verifiedIcon'] }}" loading="lazy" class="conversation-user-verified" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $conversation['user']['verifiedDesc'] }}">
                        @else
                            <img src="/assets/themes/Social/images/icon-verified.png" loading="lazy" class="conversation-user-verified" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $conversation['user']['verifiedDesc'] }}">
                        @endif
                    @endif

                    <span class="conversation-user-name text-secondary">{{ '@' . $conversation['user']['username'] }}</span>
                @else
                    {{ fs_lang('userDeactivate') }}
                @endif
            </h5>
            <small class="text-muted pt-1">{{ $conversation['latestMessage']['datetimeFormat'] }}</small>
        </div>

        {{-- Notification Brief --}}
        <div class="conversation-brief text-break mt-1">
            @if ($conversation['latestMessage']['type'] == 1)
                {{ $conversation['latestMessage']['message'] }}
            @else
                {{ '['.$conversation['latestMessage']['message'].']' }}
            @endif
        </div>
    </div>

    {{-- Unread Count --}}
    @if ($conversation['unreadCount'] > 0)
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ $conversation['unreadCount'] }}</span>
    @endif
</a>
