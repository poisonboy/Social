@extends('profile.profile')

@section('list')
    {{-- List --}}
    <div class="clearfix border-top" id="fresns-list-container">
        @foreach($groups as $group)
            @component('components.group.list', compact('group'))@endcomponent
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="px-3 me-3 me-lg-0 mt-4 table-responsive d-none">
        {{ $groups->links() }}
    </div>

    {{-- Ajax Footer --}}
    @include('commons.ajax-footer')
@endsection
