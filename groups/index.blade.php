@extends('commons.fresns')

@section('title', fs_db_config('menu_group_title'))
@section('keywords', fs_db_config('menu_group_keywords'))
@section('description', fs_db_config('menu_group_description'))

@section('content')
    @if (fs_db_config('menu_group_type') == 'tree')
        {{-- Group Tree --}}
        @foreach($groupTree ?? [] as $tree)
            <h3 class="fs-5 p-3 border-bottom mb-0">
                @if ($tree['cover'])
                    <img src="{{ $tree['cover'] }}" loading="lazy" alt="{{ $tree['gname'] }}" width="20" height="20">
                @endif
                {{ $tree['gname'] }}
            </h3>
            <div class="mb-4">
                @foreach($tree['groups'] ?? [] as $group)
                    @component('components.group.list', compact('group'))@endcomponent
                @endforeach
            </div>
        @endforeach
    @else
        <div class="d-flex mx-3">
            @desktop
                <span class="me-2" style="margin-top:11px;">
                    <a class="btn btn-outline-secondary border-0 rounded-circle" href="javascript:goBack()" role="button"><i class="fa-solid fa-arrow-left"></i></a>
                </span>
            @enddesktop
            <h1 class="fs-5 my-3">{{ fs_db_config('menu_group_name') }}</h1>
        </div>

        {{-- Group List --}}
        <div class="clearfix " @if (fs_db_config('menu_group_query_state') != 1) id="fresns-list-container" @endif>
            @foreach($groups ?? [] as $group)
                @component('components.group.list', compact('group'))@endcomponent
            @endforeach
        </div>

        {{-- Pagination --}}
        @if (fs_db_config('menu_group_query_state') != 1)
            <div class="px-3 me-3 me-lg-0 mt-4 table-responsive d-none">
                {{ $groups->links() }}
            </div>

            {{-- Ajax Footer --}}
            @include('commons.ajax-footer')
        @endif
    @endif
@endsection
