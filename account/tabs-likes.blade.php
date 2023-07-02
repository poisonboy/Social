<div class="d-flex mx-3">
    @desktop
        <span class="me-2" style="margin-top:11px;">
            <a class="btn btn-outline-secondary border-0 rounded-circle" href="javascript:goBack()" role="button"><i class="fa-solid fa-arrow-left"></i></a>
        </span>
    @enddesktop
    <h1 class="fs-5 my-3">{{ fs_db_config('menu_like_posts') }}</h1>
</div>

<nav class="nav nav-pills nav-fill nav-justified gap-2 p-1 small bg-white border rounded-pill shadow-sm m-3">
    <a class="nav-link rounded-pill {{ Route::is('fresns.post.likes') ? 'active' : '' }}" href="{{ fs_route(route('fresns.post.likes')) }}">{{ fs_db_config('post_name') }}</a>
    <a class="nav-link rounded-pill {{ Route::is('fresns.comment.likes') ? 'active' : '' }}" href="{{ fs_route(route('fresns.comment.likes')) }}">{{ fs_db_config('comment_name') }}</a>
</nav>
