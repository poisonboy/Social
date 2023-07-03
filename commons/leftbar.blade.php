 <div class="i-layout-content-main-page-menu d-none d-sm-block">
     <div class="ivu-card   ivu-card-dis-hover i-menu-list i-menu-list-card">
     
     
         <div class="ivu-card-body" style="">

             <div class="ivu-cell-group i-menu-list-items ivu-mt">
                 <div class="ivu-cell ivu-cell-with-link">
                     <a target="_self" class="ivu-cell-link {{ Route::is(['fresns.home']) ? 'ivu-cell-selected' : '' }}" href="{{ fs_route(route('fresns.home')) }}">
                         <div class="ivu-cell-item">
                             <div class="ivu-cell-icon"></div>
                             <div class="ivu-cell-main">
                                 <div class="ivu-cell-title">
                                     <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color">
                                         <svg width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M9 18V42H39V18L24 6L9 18Z" fill="none" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M19 29V42H29V29H19Z" fill="none" stroke="#000" stroke-width="4" stroke-linejoin="round" />
                                             <path d="M9 42H39" stroke="#000" stroke-width="4" stroke-linecap="round" /></svg>
                                     </span>
                                     <h6 class="ivu-typography"><strong>{{ fs_lang('home') }}</strong>
                                     
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
                                 <div class="ivu-cell-title">
                                     <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color">
                                        <svg width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23 20L23 6L6 6L6 20L23 20Z" fill="none" stroke="#000" stroke-width="4" stroke-linejoin="round"/><path d="M42 42V28L25 28L25 42H42Z" fill="none" stroke="#000" stroke-width="4" stroke-linejoin="round"/><path d="M31 6V20H42V6H31Z" fill="none" stroke="#000" stroke-width="4" stroke-linejoin="round"/><path d="M6 28L6 42H17V28H6Z" fill="none" stroke="#000" stroke-width="4" stroke-linejoin="round"/></svg>
                                     </span>
                                     <h6 class="ivu-typography"><strong>{{ fs_db_config('menu_portal_name') }}</strong>
                                     
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
                                 <div class="ivu-cell-title">
                                     <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color">
                                         <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M10.75 3.1V1.5C10.75 1.08579 10.4142 0.75 10 0.75C9.58579 0.75 9.25 1.08579 9.25 1.5V3.1H7.25V1.5C7.25 1.08579 6.91421 0.75 6.5 0.75C6.08579 0.75 5.75 1.08579 5.75 1.5V3.11063C4.34781 3.23035 3.23034 4.34783 3.11062 5.75003H1.5C1.08579 5.75003 0.75 6.08581 0.75 6.50003C0.75 6.91424 1.08579 7.25003 1.5 7.25003H3.1V9.25002H1.5C1.08579 9.25002 0.75 9.58581 0.75 10C0.75 10.4142 1.08579 10.75 1.5 10.75H3.1V12.75H1.5C1.08579 12.75 0.75 13.0858 0.75 13.5C0.75 13.9142 1.08579 14.25 1.5 14.25H3.11063C3.23036 15.6522 4.34782 16.7696 5.75 16.8894V18.5C5.75 18.9142 6.08579 19.25 6.5 19.25C6.91421 19.25 7.25 18.9142 7.25 18.5V16.9H9.25V18.5C9.25 18.9142 9.58579 19.25 10 19.25C10.4142 19.25 10.75 18.9142 10.75 18.5V16.9H12.75V18.5C12.75 18.9142 13.0858 19.25 13.5 19.25C13.9142 19.25 14.25 18.9142 14.25 18.5V16.8894C15.6522 16.7696 16.7696 15.6522 16.8894 14.25H18.5C18.9142 14.25 19.25 13.9142 19.25 13.5C19.25 13.0858 18.9142 12.75 18.5 12.75H16.9V10.75H18.5C18.9142 10.75 19.25 10.4142 19.25 10C19.25 9.58579 18.9142 9.25 18.5 9.25H16.9V7.25H18.5C18.9142 7.25 19.25 6.91421 19.25 6.5C19.25 6.08579 18.9142 5.75 18.5 5.75H16.8894C16.7696 4.34781 15.6522 3.23035 14.25 3.11063V1.5C14.25 1.08579 13.9142 0.75 13.5 0.75C13.0858 0.75 12.75 1.08579 12.75 1.5V3.1H10.75ZM6 4.9C5.39249 4.9 4.9 5.39249 4.9 6V14C4.9 14.6075 5.39249 15.1 6 15.1H14C14.6075 15.1 15.1 14.6075 15.1 14V6C15.1 5.39249 14.6075 4.9 14 4.9H6ZM13 13V7H7V13H13ZM7 6C6.44772 6 6 6.44772 6 7V13C6 13.5523 6.44772 14 7 14H13C13.5523 14 14 13.5523 14 13V7C14 6.44772 13.5523 6 13 6H7Z" fill="black"></path>
                                         </svg>
                                     </span>
                                     <h6 class="ivu-typography"><strong>{{ fs_db_config('menu_post_name') }}</strong>
                                     
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
                     <a target="_self" class="ivu-cell-link {{ Route::is(['fresns.group.index', 'fresns.group.detail'])? 'ivu-cell-selected' : '' }}" href="{{ fs_route(route('fresns.group.index')) }}">
                         <div class="ivu-cell-item">
                             <div class="ivu-cell-icon"></div>
                             <div class="ivu-cell-main">
                                 <div class="ivu-cell-title">
                                     <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color">
                                         <svg width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M24 40C32.8366 40 40 32.8366 40 24C40 15.1634 32.8366 8 24 8C15.1634 8 8 15.1634 8 24C8 32.8366 15.1634 40 24 40Z" fill="none" stroke="#000" stroke-width="4" stroke-linejoin="round" />
                                             <path d="M37.5641 15.5098C41.7833 15.878 44.6787 17.1724 45.2504 19.306C46.3939 23.5737 37.8068 29.5827 26.0705 32.7274C14.3343 35.8721 3.89316 34.9617 2.74963 30.694C2.1505 28.458 4.22245 25.744 8.01894 23.2145" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" /></svg> </span>
                                     <h6 class="ivu-typography"><strong>{{ fs_db_config('menu_group_name') }}</strong>
                                     
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

                 {{-- User --}}
                 @if (fs_api_config('menu_user_list_status'))
                 <div class="ivu-cell ivu-cell-with-link">
                     <a target="_self" href="{{ fs_route(route('fresns.user.list')) }}" class="ivu-cell-link {{ Route::is('fresns.user.list') ? 'ivu-cell-selected' : '' }}">
                         <div class="ivu-cell-item">
                             <div class="ivu-cell-icon"></div>
                             <div class="ivu-cell-main">
                                 <div class="ivu-cell-title">
                                     <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color">
                                         <svg width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M24 20C27.866 20 31 16.866 31 13C31 9.13401 27.866 6 24 6C20.134 6 17 9.13401 17 13C17 16.866 20.134 20 24 20Z" fill="none" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M12 7.25488C10.1865 8.51983 9 10.6214 9 13.0002C9 15.5465 10.3596 17.7753 12.3924 19.0002" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M36 7.25488C37.8135 8.51983 39 10.6214 39 13.0002C39 15.3789 37.8135 17.4806 36 18.7455" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M12 40V42H36V40C36 36.2725 36 34.4087 35.391 32.9385C34.5791 30.9783 33.0217 29.4209 31.0615 28.609C29.5913 28 27.7275 28 24 28C20.2725 28 18.4087 28 16.9385 28.609C14.9783 29.4209 13.4209 30.9783 12.609 32.9385C12 34.4087 12 36.2725 12 40Z" fill="none" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M43.9999 42.0001V40.8001C43.9999 36.3197 43.9999 34.0795 43.128 32.3682C42.361 30.8629 41.1371 29.6391 39.6318 28.8721" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                             <path d="M4.00009 42.0001V40.8001C4.00009 36.3197 4.00009 34.0795 4.87204 32.3682C5.63902 30.8629 6.86287 29.6391 8.36816 28.8721" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                         </svg>
                                     </span>
                                     <h6 class="ivu-typography"><strong>{{ fs_db_config('menu_user_list_name') }}</strong>
                                     
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
                 {{-- Hashtag --}}
                 @if (fs_api_config('menu_hashtag_list_status'))
                 <div class="ivu-cell ivu-cell-with-link">
                     <a target="_self" href="{{ fs_route(route('fresns.hashtag.list')) }}" class="ivu-cell-link {{ Route::is('fresns.hashtag.list') ? 'ivu-cell-selected' : '' }}">
                         <div class="ivu-cell-item">
                             <div class="ivu-cell-icon"></div>
                             <div class="ivu-cell-main">
                                 <div class="ivu-cell-title">
                                     <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color">
                                         <svg width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M8 44L8 6C8 4.89543 8.89543 4 10 4H38C39.1046 4 40 4.89543 40 6V44L24 35.7273L8 44Z" fill="none" stroke="#000" stroke-width="4" stroke-linejoin="round" />
                                             <path d="M16 18H32" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                     </span>
                                     <h6 class="ivu-typography"><strong> {{ fs_db_config('menu_hashtag_list_name') }}</strong>
                                     
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
                 {{-- Comment --}}
                 @if (fs_api_config('menu_comment_list_status'))
                 <div class="ivu-cell ivu-cell-with-link">
                     <a target="_self" href="{{ fs_route(route('fresns.comment.list')) }}" class="ivu-cell-link {{ Route::is('fresns.comment.list') ? 'ivu-cell-selected' : '' }}">
                         <div class="ivu-cell-item">
                             <div class="ivu-cell-icon"></div>
                             <div class="ivu-cell-main">
                                 <div class="ivu-cell-title">
                                     <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color">
                                        <svg width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M44 6H4V36H13V41L23 36H44V6Z" fill="none" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 19.5V22.5" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M24 19.5V22.5" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M34 19.5V22.5" stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                     </span>
                                     <h6 class="ivu-typography"><strong> {{ fs_db_config('menu_comment_list_name') }}</strong>
                                     
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
                 {{-- User Center --}}
                 <div class="ivu-cell ivu-cell-with-link">
                     <a target="_self" class="ivu-cell-link {{ Route::is('fresns.account.index') ? 'ivu-cell-selected' : '' }}" href="{{ fs_route(route('fresns.account.index')) }}">
                         <div class="ivu-cell-item">
                             <div class="ivu-cell-icon"></div>
                             <div class="ivu-cell-main">
                                 <div class="ivu-cell-title"><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 10C3.5 6.41015 6.41015 3.5 10 3.5C13.5899 3.5 16.5 6.41015 16.5 10C16.5 13.5899 13.5899 16.5 10 16.5C6.41015 16.5 3.5 13.5899 3.5 10ZM10 1.5C5.30558 1.5 1.5 5.30558 1.5 10C1.5 14.6944 5.30558 18.5 10 18.5C14.6944 18.5 18.5 14.6944 18.5 10C18.5 5.30558 14.6944 1.5 10 1.5ZM6.4453 11.8321L9.4453 13.8321L10 14.2019L10.5547 13.8321L13.5547 11.8321L12.4453 10.1679L10 11.7981L7.5547 10.1679L6.4453 11.8321Z" fill="black"></path>
                                         </svg>
                                     </span>
                                     <h6 class="ivu-typography"><strong> {{ fs_lang('userMy') }}</strong>
                                     
                                     </h6>
                                 </div>
                                 <div class="ivu-cell-label"></div>
                             </div>
                             <div class="ivu-cell-footer"><span class="ivu-cell-extra"></span></div>
                         </div>
                     </a>
                     <div class="ivu-cell-arrow"><i class="ivu-icon ivu-icon-ios-arrow-forward"></i></div>
                 </div>

                 <div class="ivu-cell ivu-cell-with-link {{ Route::is('fresns.account.settings') ? 'ivu-cell-selected' : '' }}">
                     <a href="/account/settings" target="_self" class="ivu-cell-link">
                         <div class="ivu-cell-item">
                             <div class="ivu-cell-icon"></div>
                             <div class="ivu-cell-main">
                                 <div class="ivu-cell-title"><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color">
                                         <svg width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M18.2838 43.1713C14.9327 42.1736 11.9498 40.3213 9.58787 37.867C10.469 36.8227 11 35.4734 11 34.0001C11 30.6864 8.31371 28.0001 5 28.0001C4.79955 28.0001 4.60139 28.01 4.40599 28.0292C4.13979 26.7277 4 25.3803 4 24.0001C4 21.9095 4.32077 19.8938 4.91579 17.9995C4.94381 17.9999 4.97188 18.0001 5 18.0001C8.31371 18.0001 11 15.3138 11 12.0001C11 11.0488 10.7786 10.1493 10.3846 9.35011C12.6975 7.1995 15.5205 5.59002 18.6521 4.72314C19.6444 6.66819 21.6667 8.00013 24 8.00013C26.3333 8.00013 28.3556 6.66819 29.3479 4.72314C32.4795 5.59002 35.3025 7.1995 37.6154 9.35011C37.2214 10.1493 37 11.0488 37 12.0001C37 15.3138 39.6863 18.0001 43 18.0001C43.0281 18.0001 43.0562 17.9999 43.0842 17.9995C43.6792 19.8938 44 21.9095 44 24.0001C44 25.3803 43.8602 26.7277 43.594 28.0292C43.3986 28.01 43.2005 28.0001 43 28.0001C39.6863 28.0001 37 30.6864 37 34.0001C37 35.4734 37.531 36.8227 38.4121 37.867C36.0502 40.3213 33.0673 42.1736 29.7162 43.1713C28.9428 40.752 26.676 39.0001 24 39.0001C21.324 39.0001 19.0572 40.752 18.2838 43.1713Z" fill="none" stroke="#000" stroke-width="4" stroke-linejoin="round" />
                                             <path d="M24 31C27.866 31 31 27.866 31 24C31 20.134 27.866 17 24 17C20.134 17 17 20.134 17 24C17 27.866 20.134 31 24 31Z" fill="none" stroke="#000" stroke-width="4" stroke-linejoin="round" /></svg>
                                     </span>
                                     <h6 class="ivu-typography"><strong>设置</strong>
                                     
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
                  
                 </div>
             </div>
             <div class="i-menu-list-link">
                 <a class="ivu-block" href="https://f.xcxgy.cn/" target="_blank" title="加入我们">
                     <span class="i-vertical-middle">加入我们</span><span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color ivu-ml-8">
                         <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00001 1.5H9.7929L4.64645 6.64645L5.35356 7.35355L10.5 2.20711V5H11.5V0.5H7.00001V1.5ZM1.5 3C1.5 2.72386 1.72386 2.5 2 2.5H5.5V1.5H2C1.17157 1.5 0.5 2.17157 0.5 3V10C0.5 10.8284 1.17157 11.5 2 11.5H9C9.82843 11.5 10.5 10.8284 10.5 10V6.5H9.5V10C9.5 10.2761 9.27614 10.5 9 10.5H2C1.72386 10.5 1.5 10.2761 1.5 10V3Z" fill="black"></path>
                         </svg>
                     </span>
                 </a>

             </div>
         </div>
     </div>
 </div>
