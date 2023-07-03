 <!-- 首页 -->

 {{-- Sticky Posts --}}
 @if (fs_sticky_posts())
 <aside class="ivu-card   mb-3 pb-2">
     <h5 class=" ivu-typography px-3 pt-3">{{ fs_lang('contentSticky') }}</h5>
     @foreach(fs_sticky_posts() as $sticky)
     @component('components.post.sticky', compact('sticky'))@endcomponent
     @endforeach
 </aside>
 @endif
 <!-- weather -->
 <iframe scrolling="no" class="ivu-card   mb-3 py-3" src="https://tianqiapi.com/api.php?style=tg&skin=baidu&column=1" frameborder="0" width="298" height="75" allowtransparency="true"></iframe>

 {{-- Digest Posts --}}
 <aside class="ivu-card   mb-3 pb-3 ">
     <h5 class=" ivu-typography px-3 pt-3">{{ fs_lang('contentHotList') }}</h5>
     @foreach(fs_list('posts') as $topPost)
     <a href="{{ fs_route(route('fresns.post.detail', ['pid' => $topPost['pid']])) }}" class="list-group-item list-group-item-action text-break px-3 px-3 pt-1 mb-2" >

         {{ $topPost['title'] ?? Str::limit(strip_tags($topPost['content']), 60) }}
     </a>
     @endforeach
 </aside>

 {{-- Recommend Users --}}
 <aside class="ivu-card   mb-3 pb-2">
     <h5 class=" ivu-typography px-3 pt-3">{{ fs_lang('contentRecommend') }}</h5>
     @foreach(fs_index_list('users') as $topUser)
     @component('components.user.sidebar-list', compact('topUser'))@endcomponent
     @endforeach
 </aside>