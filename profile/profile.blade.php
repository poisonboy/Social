@extends('commons.fresns')

@section('title', $items['title'] ?? $profile['nickname'])
@section('keywords', $items['keywords'])
@section('description', $items['description'] ?? $profile['bio'])

@section('content')
    <header class="profile-header position-relative text-center">
        @component('components.user.detail', compact('profile', 'followersYouFollow'))@endcomponent

        {{-- Menus --}}
        @if ($items['manages'])
            <div class="position-absolute top-0 end-0 dropdown">
                <button class="btn btn-outline-secondary rounded-circle mt-2 me-2" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis"></i></button>
                <ul class="dropdown-menu">
                    @foreach($items['manages'] as $plugin)
                        <li>
                            <a class="dropdown-item" data-bs-toggle="modal" href="#fresnsModal"
                                data-type="profile"
                                data-scene="manage"
                                data-post-message-key="fresnsPostManage"
                                data-uid="{{ $profile['uid'] }}"
                                data-title="{{ $plugin['name'] }}"
                                data-url="{{ $plugin['url'] }}">
                                @if ($plugin['icon'])
                                    <img src="{{ $plugin['icon'] }}" loading="lazy" width="20" height="20">
                                @endif
                                {{ $plugin['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </header>

    @include('profile.navbar')

    <div class="profile-list">
        @yield('list')
    </div>
@endsection
