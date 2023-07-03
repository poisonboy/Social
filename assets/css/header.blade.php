<div class="ivu-layout-header i-layout-header i-layout-header-color-light i-layout-header-fix i-layout-header-stick">
    <div class="i-layout-header-content i-layout-header-content-desktop">
        <div class="i-layout-header-content-main">
            <a target="_self" class="i-link i-link-color i-layout-header-logo i-layout-header-logo-stick" href="{{ fs_route(route('fresns.home')) }}">
                <img src="{{ fs_db_config('site_logo') }}" alt="{{ fs_db_config('site_name') }}" height="36">
            </a>
            <div class="i-layout-header-search">
                <div style="    border-radius: 6px;    overflow: hidden;" class="ivu-input-wrapper ivu-input-wrapper-large ivu-input-type-text ivu-input-group ivu-input-group-large ivu-input-group-with-append ivu-input-hide-icon i-layout-header-search-input">
                    <i class="ivu-icon ivu-icon-ios-loading ivu-load-loop ivu-input-icon ivu-input-icon-validate"></i>
                    @if (! fs_db_config('fs_search_method'))
                    <form action="{{ fs_route(route('fresns.search.index')) }}" method="get">
                        <input type="hidden" name="searchType" value="post" />
                        <input class="ivu-input ivu-input-large" name="searchKey" value="{{ request('searchKey') }}" placeholder="{{ fs_lang('search') }}" aria-label="Search">
                    </form>
                    @else
                    @php
                    $siteDomain = \App\Helpers\StrHelper::extractDomainByUrl(fs_api_config('site_url'));
                    @endphp

                    <form id="searchForm" action="https://www.google.com/search" method="get" target="_blank">
                        <input type="text" id="searchInput" name="userSearch" placeholder="{{ fs_lang('search') }}" class="ivu-input ivu-input-large">
                        <input type="hidden" id="hiddenSearch" name="q">
                    </form>
                    <script>
                        document.getElementById('searchForm').addEventListener('submit', function(e) {
                            const searchInput = document.getElementById('searchInput');
                            const hiddenSearch = document.getElementById('hiddenSearch');
                            hiddenSearch.value = 'site:{{ $siteDomain }} ' + searchInput.value;
                        });
                    </script>
                    @endif
                    <div class="ivu-input-group-append" style="">
                        <div><span class="ivu-typography"><kbd>⌘</kbd></span>
                            <span class="ivu-typography"><kbd>k</kbd></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="i-layout-header-right">

            {{-- Language --}}
                <span class="i-layout-header-trigger i-layout-header-trigger-min i-layout-header-trigger-in">
                    <a class="ivu-notifications i-layout-header-notice i-layout-header-notice-not-mobile " href="{{ fs_route(route('fresns.messages.index')) }}">
                        <div class="ivu-dropdown">
                            <div class="ivu-dropdown-rel">
                                <div class="ivu-notifications-rel">
                                    <span class="ivu-badge">
                                        <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color i-color-title" id="translate">
                                          

                                        </span>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </a>
                </span>

                {{-- PWA --}}
                <!-- <span class="i-layout-header-trigger i-layout-header-trigger-min i-layout-header-trigger-in">
                    <a class="ivu-notifications i-layout-header-notice i-layout-header-notice-not-mobile " href="{{ fs_route(route('fresns.messages.index')) }}">
                        <div class="ivu-dropdown">
                            <div class="ivu-dropdown-rel">
                                <div class="ivu-notifications-rel">
                                    <span class="ivu-badge">
                                        <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color i-color-title">
                                            <svg width="22" height="22" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M41 13.9997L24 4L7 13.9997V33.9998L24 44L41 33.9998V13.9997Z" fill="none" stroke="#333" stroke-width="4" stroke-linejoin="round" />
                                                <path d="M16 18.9976L23.9932 24.0002L31.9951 18.9976" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M24 24V33" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                        </span>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </a>
                </span> -->

                {{-- Messages --}}
                @if (fs_api_config('conversation_status'))
                <span class="i-layout-header-trigger i-layout-header-trigger-min i-layout-header-trigger-in">
                    <a class="ivu-notifications i-layout-header-notice i-layout-header-notice-not-mobile " href="{{ fs_route(route('fresns.messages.index')) }}">
                        <div class="ivu-dropdown">
                            <div class="ivu-dropdown-rel">
                                <div class="ivu-notifications-rel">
                                    <span class="ivu-badge">
                                        <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color i-color-title">
                                            <svg width="22" height="22" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 6H44V36H29L24 41L19 36H4V6Z" fill="none" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M23 21H25.0025" stroke="#333" stroke-width="4" stroke-linecap="round" />
                                                <path d="M33.001 21H34.9999" stroke="#333" stroke-width="4" stroke-linecap="round" />
                                                <path d="M13.001 21H14.9999" stroke="#333" stroke-width="4" stroke-linecap="round" />
                                            </svg>
                                            @if (fs_user_panel('conversations.unreadMessages') > 0)
                                            <i class="toolbar-msg-count">{{ fs_user_panel('conversations.unreadMessages') }}</i>
                                            @endif
                                        </span>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </a>
                </span>
                @endif
                {{-- Notifications --}}
                <span class="i-layout-header-trigger i-layout-header-trigger-min i-layout-header-trigger-in">
                    <a class="ivu-notifications i-layout-header-notice i-layout-header-notice-not-mobile  " href="{{ fs_route(route('fresns.notifications.index')) }}">
                        <div class="ivu-dropdown">
                            <div class="ivu-dropdown-rel">
                                <div class="ivu-notifications-rel">
                                    <span class="ivu-badge">
                                        <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color i-color-title">
                                            <svg width="22" height="22" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24 4C16.268 4 10 10.268 10 18V38H38V18C38 10.268 31.732 4 24 4Z" fill="none" />
                                                <path d="M10 38V18C10 10.268 16.268 4 24 4C31.732 4 38 10.268 38 18V38M4 38H44" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M24 44C26.7614 44 29 41.7614 29 39V38H19V39C19 41.7614 21.2386 44 24 44Z" fill="none" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            @if (fs_user()->check())
                                            @if (array_sum(fs_user_panel('unreadNotifications')) > 0)
                                            <i class="toolbar-msg-count">{{ array_sum(fs_user_panel('unreadNotifications')) }}</i>
                                            @endif
                                            @endif
                                        </span>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </a>
                </span>
                {{-- Aria --}}
                <span class="i-layout-header-trigger i-layout-header-trigger-min i-layout-header-trigger-in">
                    <div class="ivu-notifications i-layout-header-notice i-layout-header-notice-not-mobile "  >
                        <div class="ivu-dropdown">
                            <div class="ivu-dropdown-rel">
                                <div class="ivu-notifications-rel">
                                    <span class="ivu-badge">
                                      
                                        <a id="wzayd" title="盲人朋友在线浏览按住Alt+g键" href="javascript:;"  class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color i-color-title wzayd" accesskey="g"> 
                                            <svg width="22" height="22" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.6219 35.0001C28.2898 40.1757 23.5915 44 18 44C11.3726 44 6 38.6275 6 32.0001C6 27.1571 8.86894 22.9841 13 21.0881" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M18 12L20 30L35 29L38 40H41" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M22 8C22 10.2091 20.2091 12 18 12C15.7909 12 14 10.2091 14 8C14 5.79086 15.7909 4 18 4C20.2091 4 22 5.79086 22 8Z" fill="none" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M25 20H33" stroke="#333" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            </a>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </span>

                {{-- Account --}}
                <div class="i-layout-header-trigger i-layout-header-trigger-min i-layout-header-trigger-in" style="padding-left:12px ;">
                    @if (fs_user()->check())
                    <button type="button" class="btn   d-flex py-2" data-bs-toggle="dropdown" aria-expanded="false">
                        <a class="nav-avatar ms-1  {{ Route::is('fresns.account.*') ? 'active' : '' }}" href="{{ fs_route(route('fresns.account.index')) }}"><img src="{{ fs_user('detail.avatar') }}" class="rounded-circle"></a>
                        <div class="text-start ms-2">
                            <div class="nav-nickname">{{ fs_user('detail.nickname') }}</div>
                            <div class="text-secondary  " style="font-size: 12px;margin-top:-3px;">{{ '@'.fs_user('detail.username') }}</div>
                        </div>
                        <div class="text-secondary ms-4 pt-2 me-1" style="padding-top: 10px"><i class="fa-solid fa-ellipsis"></i></div>
                    </button>
                    <ul class="dropdown-menu">
                        {{-- Switch Languages --}}
                        @if (fs_api_config('language_status'))
                        <li><a class="dropdown-item py-3" href="#translate" data-bs-toggle="modal"><i class="fa-solid fa-language me-2"></i> {{ fs_lang('optionLanguage') }}</a></li>
                        @endif
                        {{-- Switch Users --}}
                        @if (count(fs_account('detail.users')) > 1)
                        <li><a class="dropdown-item py-3" href="#userAuth" id="switch-user" data-bs-toggle="modal"><i class="fa-solid fa-users me-2"></i> {{ fs_lang('optionUser') }}</a></li>
                        @endif
                        {{-- Logout --}}
                        <li><a class="dropdown-item py-3" href="{{ fs_route(route('fresns.account.logout', ['redirectURL' => request()->fullUrl()])) }}"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i> {{ fs_lang('accountLogout') }}</a></li>
                    </ul>
                    @else
                    <a class="ivu-btn ivu-btn-primary" href="{{ fs_route(route('fresns.account.login', ['redirectURL' => request()->fullUrl()])) }}" role="button">{{ fs_lang('accountLogin') }}</a>

                    @if (fs_api_config('site_public_status'))
                    @if (fs_api_config('site_public_service'))
                    <button class="ivu-btn ivu-btn-primary   " type="button" data-bs-toggle="modal" data-bs-target="#fresnsModal" data-type="account" data-scene="join" data-post-message-key="fresnsJoin" data-title="{{ fs_lang('accountRegister') }}" data-url="{{ fs_api_config('site_public_service') }}">
                        {{ fs_lang('accountRegister') }}
                        @else
                        <a class="ivu-btn ivu-btn-primary ivu-btn-ghost  " href="{{ fs_route(route('fresns.account.register', ['redirectURL' => request()->fullUrl()])) }}" role="button">{{ fs_lang('accountRegister') }}</a>
                    </button>
                    @endif

                    @endif
                    @endif
                </div>



            </div>
        </div>
    </div>
</div>