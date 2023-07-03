 <div class="ivu-row ivu-row-middle ivu-row-space-between ivu-row-no-wrap">
     <div class="ivu-col" style="flex: 1 1 auto;">
         <div class="ivu-radio-group ivu-radio-group-large ivu-radio-large ivu-radio-group-button i-universal-radio-button">
             <a class="ivu-radio-wrapper ivu-radio-group-item {{ Route::is('fresns.post.index') ? 'ivu-radio-wrapper-checked' : '' }} @if (request()->url() === rtrim(fs_route(route('fresns.home')), '/')) ivu-radio-wrapper-checked @endif  ivu-radio-default" href="{{ fs_route(route('fresns.post.index')) }}">
                 <div class="">最新</div>
             </a>
             <a class="ivu-radio-wrapper ivu-radio-group-item ivu-radio-default{{ Route::is('fresns.follow.all.posts') ? 'ivu-radio-wrapper-checked' : '' }}" href="{{ fs_route(route('fresns.follow.all.posts')) }}">
                 <div>关注</div>
             </a>
             <a class="ivu-radio-wrapper ivu-radio-group-item ivu-radio-default {{ Route::is('fresns.post.nearby') ? 'ivu-radio-wrapper-checked' : '' }}" href="{{ fs_route(route('fresns.post.nearby')) }}">
                 <div>附近</div>
             </a>
         </div>
     </div>
     <div class="ivu-col">
         <button class="ivu-btn ivu-btn-primary ivu-btn-large i-universal-button-block ivu-text-center" type="button">
             <span>
                 <span class="i-svg-icon i-svg-icon-middle i-svg-icon-inherit-color">
                     <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M6.58579 0.585787C7.36684 -0.195264 8.63316 -0.195261 9.41421 0.585787L12.7071 3.87868L11.2929 5.29289L9 3V11H7V3L4.70711 5.29289L3.29289 3.87868L6.58579 0.585787ZM1 7.99999H3V13H13V7.99999H15V13C15 14.1046 14.1046 15 13 15H3C1.89543 15 1 14.1046 1 13V7.99999Z" fill="white"></path>
                     </svg>
                 </span>


                 <a class="ivu-typography ivu-ml-8" href="{{ fs_route(route('fresns.editor.index', ['type' => 'post'])) }}"><strong>立即发布</strong></a>


             </span>
         </button>
     </div>
 </div>
