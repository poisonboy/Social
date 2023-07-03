 
<div class="i-layout-content-main-page-menu">
    <div class="ivu-card   ivu-card-dis-hover i-menu-list i-menu-list-card">
        <!---->
        <!---->
        <div class="ivu-card-body" style="">

            <div class="ivu-cell-group i-menu-list-items ivu-mt">
                <div class="ivu-cell ivu-cell-with-link">
                    <a target="_self" class="ivu-cell-link {{ Route::is(['fresns.home']) ? 'ivu-cell-selected' : '' }}" href="{{ fs_route(route('fresns.home')) }}">
                        <div class="ivu-cell-item">
                            <div class="ivu-cell-icon"></div>
                            <div class="ivu-cell-main">
                                <div class="ivu-cell-title"><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1625 1.60145C10.4671 1.10473 9.53292 1.10473 8.83752 1.60145L2.83752 5.88716C2.31193 6.26258 2 6.86872 2 7.51463V16C2 17.1046 2.89543 18 4 18H16C17.1046 18 18 17.1046 18 16V7.51463C18 6.86872 17.6881 6.26258 17.1625 5.88716L11.1625 1.60145ZM4 7.51463L10 3.22891L16 7.51463V16H4L4 7.51463ZM7 12V14H13V12H7Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <h6 class="ivu-typography"><strong>{{ fs_lang('home') }}</strong>
                                        <!---->
                                    </h6>
                                </div>
                                <div class="ivu-cell-label"></div>
                            </div>
                            <div class="ivu-cell-footer"><span class="ivu-cell-extra"></span></div>
                        </div>
                    </a>
                    <div class="ivu-cell-arrow"><i class="ivu-icon ivu-icon-ios-arrow-forward"></i></div>
                </div>
                {{-- Portal or Post --}}

                @if (fs_db_config('default_homepage') == 'post')
                @if (fs_db_config('menu_portal_status'))
                <div class="ivu-cell ivu-cell-with-link">
                    <a target="_self" class="ivu-cell-link {{ Route::is('fresns.portal') ? 'ivu-cell-selected' : '' }}" href="{{ fs_route(route('fresns.portal')) }}">
                        <div class="ivu-cell-item">
                            <div class="ivu-cell-icon"></div>
                            <div class="ivu-cell-main">
                                <div class="ivu-cell-title"><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 2C2.89543 2 2 2.89543 2 4V7.5C2 8.60457 2.89543 9.5 4 9.5H7.5C8.60457 9.5 9.5 8.60457 9.5 7.5V4C9.5 2.89543 8.60457 2 7.5 2H4ZM4 4H7.5V7.5H4V4ZM12.5 2C11.3954 2 10.5 2.89543 10.5 4V7.5C10.5 8.60457 11.3954 9.5 12.5 9.5H16C17.1046 9.5 18 8.60457 18 7.5V4C18 2.89543 17.1046 2 16 2H12.5ZM12.5 4H16V7.5H12.5V4ZM2 12.5C2 11.3954 2.89543 10.5 4 10.5H7.5C8.60457 10.5 9.5 11.3954 9.5 12.5V16C9.5 17.1046 8.60457 18 7.5 18H4C2.89543 18 2 17.1046 2 16V12.5ZM7.5 12.5H4V16H7.5V12.5ZM12.5 10.5C11.3954 10.5 10.5 11.3954 10.5 12.5V16C10.5 17.1046 11.3954 18 12.5 18H16C17.1046 18 18 17.1046 18 16V12.5C18 11.3954 17.1046 10.5 16 10.5H12.5ZM12.5 12.5H16V16H12.5V12.5Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <h6 class="ivu-typography"><strong>{{ fs_db_config('menu_portal_name') }}</strong>
                                        <!---->
                                    </h6>
                                </div>
                                <div class="ivu-cell-label"></div>
                            </div>
                            <div class="ivu-cell-footer"><span class="ivu-cell-extra"></span></div>
                        </div>
                    </a>
                    <div class="ivu-cell-arrow"><i class="ivu-icon ivu-icon-ios-arrow-forward"></i></div>
                </div>
                @endif
                @else
                <div class="ivu-cell  ivu-cell-with-link">
                    <a target="_self" class="ivu-cell-link {{ Route::is('fresns.post.index') ? 'ivu-cell-selected' : '' }}" href="{{ fs_route(route('fresns.post.index')) }}">
                        <div class="ivu-cell-item">
                            <div class="ivu-cell-icon"></div>
                            <div class="ivu-cell-main">
                                <div class="ivu-cell-title"><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.75 3.1V1.5C10.75 1.08579 10.4142 0.75 10 0.75C9.58579 0.75 9.25 1.08579 9.25 1.5V3.1H7.25V1.5C7.25 1.08579 6.91421 0.75 6.5 0.75C6.08579 0.75 5.75 1.08579 5.75 1.5V3.11063C4.34781 3.23035 3.23034 4.34783 3.11062 5.75003H1.5C1.08579 5.75003 0.75 6.08581 0.75 6.50003C0.75 6.91424 1.08579 7.25003 1.5 7.25003H3.1V9.25002H1.5C1.08579 9.25002 0.75 9.58581 0.75 10C0.75 10.4142 1.08579 10.75 1.5 10.75H3.1V12.75H1.5C1.08579 12.75 0.75 13.0858 0.75 13.5C0.75 13.9142 1.08579 14.25 1.5 14.25H3.11063C3.23036 15.6522 4.34782 16.7696 5.75 16.8894V18.5C5.75 18.9142 6.08579 19.25 6.5 19.25C6.91421 19.25 7.25 18.9142 7.25 18.5V16.9H9.25V18.5C9.25 18.9142 9.58579 19.25 10 19.25C10.4142 19.25 10.75 18.9142 10.75 18.5V16.9H12.75V18.5C12.75 18.9142 13.0858 19.25 13.5 19.25C13.9142 19.25 14.25 18.9142 14.25 18.5V16.8894C15.6522 16.7696 16.7696 15.6522 16.8894 14.25H18.5C18.9142 14.25 19.25 13.9142 19.25 13.5C19.25 13.0858 18.9142 12.75 18.5 12.75H16.9V10.75H18.5C18.9142 10.75 19.25 10.4142 19.25 10C19.25 9.58579 18.9142 9.25 18.5 9.25H16.9V7.25H18.5C18.9142 7.25 19.25 6.91421 19.25 6.5C19.25 6.08579 18.9142 5.75 18.5 5.75H16.8894C16.7696 4.34781 15.6522 3.23035 14.25 3.11063V1.5C14.25 1.08579 13.9142 0.75 13.5 0.75C13.0858 0.75 12.75 1.08579 12.75 1.5V3.1H10.75ZM6 4.9C5.39249 4.9 4.9 5.39249 4.9 6V14C4.9 14.6075 5.39249 15.1 6 15.1H14C14.6075 15.1 15.1 14.6075 15.1 14V6C15.1 5.39249 14.6075 4.9 14 4.9H6ZM13 13V7H7V13H13ZM7 6C6.44772 6 6 6.44772 6 7V13C6 13.5523 6.44772 14 7 14H13C13.5523 14 14 13.5523 14 13V7C14 6.44772 13.5523 6 13 6H7Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <h6 class="ivu-typography"><strong>{{ fs_db_config('menu_post_name') }}</strong>
                                        <!---->
                                    </h6>
                                </div>
                                <div class="ivu-cell-label"></div>
                            </div>
                            <div class="ivu-cell-footer"><span class="ivu-cell-extra"></span></div>
                        </div>
                    </a>
                    <div class="ivu-cell-arrow"><i class="ivu-icon ivu-icon-ios-arrow-forward"></i></div>
                </div>
                @endif
                {{-- Group --}}
                @if (fs_db_config('menu_group_status'))
                <div class="ivu-cell ivu-cell-with-link">
                    <a target="_self" class="ivu-cell-link {{ Route::is(['fresns.group.index', 'fresns.group.detail'])? 'ivu-cell-selected' : '' }}" href="{{ fs_route(route('fresns.home')) }}">
                        <div class="ivu-cell-item">
                            <div class="ivu-cell-icon"></div>
                            <div class="ivu-cell-main">
                                <div class="ivu-cell-title"><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 2C2.89543 2 2 2.89543 2 4V16C2 17.1046 2.89543 18 4 18H16C17.1046 18 18 17.1046 18 16V4C18 2.89543 17.1046 2 16 2H4ZM4 4H16L16 6H4V4ZM4 8V16H16L16 8H4ZM5.79289 11.2929L7.79289 9.29289L9.20711 10.7071L7.91421 12L9.20711 13.2929L7.79289 14.7071L5.79289 12.7071L5.08579 12L5.79289 11.2929ZM12.2071 9.29289L14.2071 11.2929L14.9142 12L14.2071 12.7071L12.2071 14.7071L10.7929 13.2929L12.0858 12L10.7929 10.7071L12.2071 9.29289Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <h6 class="ivu-typography"><strong>{{ fs_db_config('menu_group_name') }}</strong>
                                        <!---->
                                    </h6>
                                </div>
                                <div class="ivu-cell-label"></div>
                            </div>
                            <div class="ivu-cell-footer"><span class="ivu-cell-extra"></span></div>
                        </div>
                    </a>
                    <div class="ivu-cell-arrow"><i class="ivu-icon ivu-icon-ios-arrow-forward"></i></div>
                </div>
                @endif
                {{-- Channels --}}
                <div class="ivu-cell ivu-cell-with-link">
                    <a target="_self" class="ivu-cell-link {{ Route::is(['fresns.group.index', 'fresns.group.detail']) ? 'ivu-cell-selected' : '' }}" href="{{ fs_route(route('fresns.group.index')) }}">
                        <div class="ivu-cell-item">
                            <div class="ivu-cell-icon"></div>
                            <div class="ivu-cell-main">
                                <div class="ivu-cell-title"><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 10C3.5 6.41015 6.41015 3.5 10 3.5C13.5899 3.5 16.5 6.41015 16.5 10C16.5 13.5899 13.5899 16.5 10 16.5C6.41015 16.5 3.5 13.5899 3.5 10ZM10 1.5C5.30558 1.5 1.5 5.30558 1.5 10C1.5 14.6944 5.30558 18.5 10 18.5C14.6944 18.5 18.5 14.6944 18.5 10C18.5 5.30558 14.6944 1.5 10 1.5ZM6.4453 11.8321L9.4453 13.8321L10 14.2019L10.5547 13.8321L13.5547 11.8321L12.4453 10.1679L10 11.7981L7.5547 10.1679L6.4453 11.8321Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <h6 class="ivu-typography"><strong>{{ fs_lang('discover') }}</strong>
                                        <!---->
                                    </h6>
                                </div>
                                <div class="ivu-cell-label"></div>
                            </div>
                            <div class="ivu-cell-footer"><span class="ivu-cell-extra"></span></div>
                        </div>
                    </a>
                    <div class="ivu-cell-arrow"><i class="ivu-icon ivu-icon-ios-arrow-forward"></i></div>
                </div>
                <div class="ivu-cell ivu-cell-with-link">
                    <a target="_self" class="ivu-cell-link {{ Route::is('fresns.custom.page', ['name' => 'channels'])  ? 'ivu-cell-selected' : '' }}" href="{{ fs_route(route('fresns.custom.page', ['name' => 'channels'])) }}">
                        <div class="ivu-cell-item">
                            <div class="ivu-cell-icon"></div>
                            <div class="ivu-cell-main">
                                <div class="ivu-cell-title"><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1281 3.28616L13.7071 1.70712L12.2929 0.292908L10 2.5858L7.70711 0.292908L6.29289 1.70712L7.87193 3.28616C4.48664 4.21799 2 7.31861 2 11V14.5C2 16.7092 3.79086 18.5 6 18.5H14C16.2091 18.5 18 16.7092 18 14.5V11C18 7.31861 15.5134 4.21799 12.1281 3.28616ZM10 8.43935L8.03033 6.46968L6.96967 7.53034L9.18934 9.75001H7V11.25H9.25V12.25H7V13.75H9.25V15.5H10.75V13.75H13V12.25H10.75V11.25H13V9.75001H10.8107L13.0303 7.53034L11.9697 6.46968L10 8.43935ZM4 11C4 7.68631 6.68629 5.00002 10 5.00002C13.3137 5.00002 16 7.68631 16 11V14.5C16 15.6046 15.1046 16.5 14 16.5H6C4.89543 16.5 4 15.6046 4 14.5V11Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <h6 class="ivu-typography"><strong>{{ fs_lang('discover') }}</strong>
                                        <!---->
                                    </h6><span class="ivu-badge i-universal-badge-important"> ¥ 1.1K+
                                        <!----></span>
                                </div>
                                <div class="ivu-cell-label"></div>
                            </div>
                            <div class="ivu-cell-footer"><span class="ivu-cell-extra"></span></div>
                        </div>
                    </a>
                    <div class="ivu-cell-arrow"><i class="ivu-icon ivu-icon-ios-arrow-forward"></i></div>
                </div>
                <div class="ivu-cell ivu-cell-with-link" data-report-click="{&quot;spm&quot;:&quot;3001.9263&quot;}" data-report-view="{&quot;spm&quot;:&quot;3001.9263&quot;}"><a href="/account" target="_self" class="ivu-cell-link">
                        <div class="ivu-cell-item">
                            <div class="ivu-cell-icon"></div>
                            <div class="ivu-cell-main">
                                <div class="ivu-cell-title"><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.58034 2C5.86262 2 5.19993 2.38457 4.84385 3.00772L1.41528 9.00772C1.06393 9.62259 1.06393 10.3774 1.41528 10.9923L4.84385 16.9923C5.19994 17.6154 5.86262 18 6.58034 18H13.4197C14.1374 18 14.8001 17.6154 15.1562 16.9923L18.5847 10.9923C18.9361 10.3774 18.9361 9.62259 18.5847 9.00772L15.1562 3.00772C14.8001 2.38457 14.1374 2 13.4197 2H6.58034ZM6.58034 4H13.4197L16.8483 10L13.4197 16H6.58034L3.15176 10L6.58034 4ZM8.50001 10C8.50001 9.17157 9.17159 8.5 10 8.5C10.8284 8.5 11.5 9.17157 11.5 10C11.5 10.8284 10.8284 11.5 10 11.5C9.17159 11.5 8.50001 10.8284 8.50001 10ZM10 6.5C8.06702 6.5 6.50001 8.067 6.50001 10C6.50001 11.933 8.06702 13.5 10 13.5C11.933 13.5 13.5 11.933 13.5 10C13.5 8.067 11.933 6.5 10 6.5Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <h6 class="ivu-typography"><strong>设置</strong>
                                        <!---->
                                    </h6>
                                </div>
                                <div class="ivu-cell-label"></div>
                            </div>
                            <div class="ivu-cell-footer"><span class="ivu-cell-extra"></span></div>
                        </div>
                    </a>
                    <div class="ivu-cell-arrow"><i class="ivu-icon ivu-icon-ios-arrow-forward"></i></div>
                </div>
            </div>
            <div class="ivu-ml ivu-mr">
                <div class="ivu-divider ivu-divider-horizontal ivu-divider-default">
                    <!---->
                </div>
            </div>
            <div class="i-menu-list-link"><a data-report-click="{&quot;spm&quot;:&quot;3001.9565&quot;}" data-report-view="{&quot;spm&quot;:&quot;3001.9565&quot;}" class="ivu-block" href="https://inscode.csdn.net/@inscode/Stable-Diffusion" target="_blank" title="Stable Diffusion 模型运行"><span class="i-vertical-middle">SD 模型运行</span><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color ivu-ml-8"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00001 1.5H9.7929L4.64645 6.64645L5.35356 7.35355L10.5 2.20711V5H11.5V0.5H7.00001V1.5ZM1.5 3C1.5 2.72386 1.72386 2.5 2 2.5H5.5V1.5H2C1.17157 1.5 0.5 2.17157 0.5 3V10C0.5 10.8284 1.17157 11.5 2 11.5H9C9.82843 11.5 10.5 10.8284 10.5 10V6.5H9.5V10C9.5 10.2761 9.27614 10.5 9 10.5H2C1.72386 10.5 1.5 10.2761 1.5 10V3Z" fill="black"></path>
                        </svg>
                    </span></a><a data-report-click="{&quot;spm&quot;:&quot;3001.9608&quot;}" data-report-view="{&quot;spm&quot;:&quot;3001.9608&quot;}" class="ivu-block ivu-mt" href="https://devpress.csdn.net/inscode/column/648c81272c870134744344a4" target="_blank" title="Stable Diffusion 图片分享"><span class="i-vertical-middle">SD 图片分享</span><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color ivu-ml-8"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00001 1.5H9.7929L4.64645 6.64645L5.35356 7.35355L10.5 2.20711V5H11.5V0.5H7.00001V1.5ZM1.5 3C1.5 2.72386 1.72386 2.5 2 2.5H5.5V1.5H2C1.17157 1.5 0.5 2.17157 0.5 3V10C0.5 10.8284 1.17157 11.5 2 11.5H9C9.82843 11.5 10.5 10.8284 10.5 10V6.5H9.5V10C9.5 10.2761 9.27614 10.5 9 10.5H2C1.72386 10.5 1.5 10.2761 1.5 10V3Z" fill="black"></path>
                        </svg>
                    </span></a><a data-report-click="{&quot;spm&quot;:&quot;3001.9609&quot;}" data-report-view="{&quot;spm&quot;:&quot;3001.9609&quot;}" class="ivu-block ivu-mt" href="https://devpress.csdn.net/inscode/648c7ce255c3e102e65f9878.html" target="_blank" title="用户反馈"><span class="i-vertical-middle">用户反馈</span><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color ivu-ml-8"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00001 1.5H9.7929L4.64645 6.64645L5.35356 7.35355L10.5 2.20711V5H11.5V0.5H7.00001V1.5ZM1.5 3C1.5 2.72386 1.72386 2.5 2 2.5H5.5V1.5H2C1.17157 1.5 0.5 2.17157 0.5 3V10C0.5 10.8284 1.17157 11.5 2 11.5H9C9.82843 11.5 10.5 10.8284 10.5 10V6.5H9.5V10C9.5 10.2761 9.27614 10.5 9 10.5H2C1.72386 10.5 1.5 10.2761 1.5 10V3Z" fill="black"></path>
                        </svg>
                    </span></a>
            </div>
        </div>
    </div>
</div>
