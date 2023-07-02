@extends('commons.fresns')

@section('title', fs_db_config('menu_editor_drafts'))

@section('content')
    <div class="card border-0">
        {{-- Menus --}}
        <div class="card-header">
            <div class="d-flex">
                @desktop
                    <span class="me-2 mb-2" style="margin-top:3px;">
                        <a class="btn btn-outline-secondary border-0 rounded-circle" href="javascript:goBack()" role="button"><i class="fa-solid fa-arrow-left"></i></a>
                    </span>
                @enddesktop
                <h1 class="fs-5 mt-2">{{ fs_db_config('menu_editor_drafts') }}</h1>
            </div>
            <ul class="nav nav-tabs card-header-tabs">
                {{-- posts --}}
                <li class="nav-item">
                    <a class="nav-link @if ($type == 'posts') active @endif" href="{{ fs_route(route('fresns.editor.drafts', ['type' => 'posts'])) }}">
                        {{ fs_db_config('post_name') }}

                        @if (fs_user_panel('draftCount.posts') > 0)
                            <span class="badge bg-danger">{{ fs_user_panel('draftCount.posts') }}</span>
                        @endif
                    </a>
                </li>
                {{-- comments --}}
                <li class="nav-item">
                    <a class="nav-link @if ($type == 'comments') active @endif" href="{{ fs_route(route('fresns.editor.drafts', ['type' => 'comments'])) }}">
                        {{ fs_db_config('comment_name') }}

                        @if (fs_user_panel('draftCount.comments') > 0)
                            <span class="badge bg-danger">{{ fs_user_panel('draftCount.comments') }}</span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>

        {{-- Draft List --}}
        <div class="card-body">
            @component('components.editor.draft-list', [
                'type' => $type,
                'drafts' => $drafts,
            ])@endcomponent
        </div>
    </div>
@endsection
