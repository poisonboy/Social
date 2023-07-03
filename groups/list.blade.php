@extends('commons.fresns')

@section('title', fs_db_config('menu_group_list_title'))
@section('keywords', fs_db_config('menu_group_list_keywords'))
@section('description', fs_db_config('menu_group_list_description'))

@section('content')
    <div class="d-flex mx-3">
        @desktop
            <span class="me-2" style="margin-top:11px;">
                <a class="btn btn-outline-secondary border-0 rounded-circle" href="javascript:goBack()" role="button"><i class="fa-solid fa-arrow-left"></i></a>
            </span>
        @enddesktop
        <h1 class="fs-5 my-3">{{ fs_db_config('menu_group_list_name') }}</h1>
    </div>

    {{-- Group List --}}
    <div class="clearfix " @if (fs_db_config('menu_group_list_query_state') != 1) id="fresns-list-container" @endif>
        @foreach($groups ?? [] as $group)
            @component('components.group.list', compact('group'))@endcomponent
        @endforeach
    </div>

    {{-- Pagination --}}
    @if (fs_db_config('menu_group_list_query_state') != 1)
        <div class="px-3 me-3 me-lg-0 mt-4 table-responsive d-none">
            {{ $groups->links() }}
        </div>

        {{-- Ajax Footer --}}
        @include('commons.ajax-footer')
    @endif
@endsection
