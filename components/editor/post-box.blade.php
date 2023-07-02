{{-- Publish Modal --}}
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    {{ fs_db_config('publish_post_name') }}
                    <a href="{{ fs_route(route('fresns.editor.index', ['type' => 'post'])) }}" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill ms-2">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        {{ fs_lang('editorFullFunctions') }}
                    </a>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-post-box" action="{{ route('fresns.api.editor.quick.publish', ['type' => 'post']) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="postGid" value="{{ fs_api_config('post_editor_group') ? $group ? $group['gid'] : '' : '' }}">
                    @if (fs_api_config('post_editor_group'))
                        <div class="shadow-sm">
                            <div class="d-grid">
                                <button class="rounded-0 border-0 list-group-item list-group-item-action d-flex justify-content-between align-items-center p-2" style="background-color: aliceblue;" type="button" data-bs-toggle="modal" data-bs-target="#post-box-fresns-group">
                                    <span class="py-2 ms-1">
                                        <i class="fa-solid fa-inbox me-2"></i>
                                        <span id="post-box-group">@if ($group) {{ $group['gname'] }} @else {{ fs_db_config('group_name') }}: {{ fs_lang('editorNoSelectGroup') }} @endif</span>
                                    </span>
                                    <span class="py-2"><i class="fa-solid fa-chevron-right"></i></span>
                                </button>
                            </div>
                        </div>
                    @endif
                    {{-- Content Start --}}
                    <div class="p-3">
                        {{-- Title --}}
                        @if (fs_api_config('post_editor_title'))
                            <div class="collapse @if (fs_api_config('post_editor_title_view') == 1) show @endif" id="quickTitleCollapse">
                                <input type="text" class="form-control form-control-lg rounded-0 border-0 ps-2"
                                    name="postTitle"
                                    placeholder="{{ fs_lang('editorTitle') }} (@if (fs_api_config('post_editor_title_required')) {{ fs_lang('editorRequired') }} @else {{ fs_lang('editorOptional') }} @endif)"
                                    maxlength="{{ fs_api_config('post_editor_title_length') }}"
                                    @if (fs_api_config('post_editor_title_required')) required @endif >
                                <hr>
                            </div>
                        @endif

                        {{-- Content --}}
                        <textarea class="form-control rounded-0 border-0 fresns-content" name="content" id="quick-publish-post-content" rows="10" placeholder="{{ fs_lang('editorContent') }}"></textarea>

                        {{-- Function Buttons --}}
                        <div class="d-flex mt-2">
                            {{-- Title --}}
                            @if (fs_api_config('post_editor_title') && fs_api_config('post_editor_title_view') == 2)
                                <button type="button" class="btn btn-outline-secondary me-2" data-bs-toggle="collapse" href="#quickTitleCollapse" aria-expanded="false" aria-controls="quickTitleCollapse"><i class="fa-solid fa-heading"></i></button>
                            @endif

                            {{-- Sticker --}}
                            @if (fs_api_config('post_editor_sticker'))
                                <div class="me-2">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="fa-regular fa-face-smile"></i>
                                    </button>
                                    {{-- Sticker List Start --}}
                                    <div class="dropdown-menu pt-0" aria-labelledby="stickers">
                                        <ul class="nav nav-tabs" role="tablist">
                                            @foreach(fs_stickers() as $sticker)
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link @if ($loop->first) active @endif" id="quick-sticker-{{ $loop->index }}-tab" data-bs-toggle="tab" data-bs-target="#quick-sticker-{{ $loop->index }}" type="button" role="tab" aria-controls="quick-sticker-{{ $loop->index }}" aria-selected="{{ $loop->first }}">{{ $sticker['name'] }}</button>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="tab-content p-2 fs-sticker">
                                            @foreach(fs_stickers() as $sticker)
                                                <div class="tab-pane fade @if ($loop->first) show active @endif" id="quick-sticker-{{ $loop->index }}" role="tabpanel" aria-labelledby="quick-sticker-{{ $loop->index }}-tab">
                                                    @foreach($sticker['stickers'] ?? [] as $value)
                                                        <a class="fresns-post-sticker btn btn-outline-secondary border-0" href="javascript:;" value="{{ $value['code'] }}" title="{{ $value['code'] }}" >
                                                            <img src="{{ $value['image'] }}" loading="lazy" alt="{{ $value['code'] }}" title="{{ $value['code'] }}">
                                                        </a>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- Sticker List End --}}
                                </div>
                            @endif

                            {{-- Upload Image --}}
                            @if (fs_api_config('post_editor_image'))
                                <div class="input-group">
                                    <label class="input-group-text" for="post-file">{{ fs_lang('editorImages') }}</label>
                                    <input type="file" class="form-control" accept="{{ fs_user_panel('fileAccept.images') ?? null }}" name="image" id="post-file">
                                </div>
                            @endif
                        </div>

                        {{-- Other Options --}}
                        <hr>
                        <div class="d-flex bd-highlight align-items-center">
                            <div class="bd-highlight me-auto">
                                <button type="submit" class="btn btn-success btn-lg">{{ fs_db_config('publish_post_name') }}</button>
                            </div>
                            @if (fs_api_config('post_editor_anonymous'))
                                <div class="bd-highlight">
                                    <div class="form-check">
                                        <input class="form-check-input" name="isAnonymous" type="checkbox" value="1" id="isAnonymous">
                                        <label class="form-check-label" for="isAnonymous">{{ fs_lang('editorAnonymous') }}</label>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- Form End --}}
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Group Modal --}}
<div class="modal fade" id="post-box-fresns-group" tabindex="-1" aria-labelledby="post-box-fresns-group" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ fs_db_config('group_name') }}</h5>
                <button type="button" class="btn-close" data-bs-target="#createModal" data-bs-toggle="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- Group List --}}
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-post-box-tab" role="tablist" aria-orientation="vertical">
                        @if (! fs_api_config('post_editor_group_required'))
                            <button type="button" id="post-box-not-select-group" class="btn btn-outline-secondary btn-sm mb-2 modal-close" data-bs-target="#createModal" data-bs-toggle="modal" aria-label="Close">{{ fs_lang('editorNoGroup') }}</button>
                        @endif
                        {{-- Group Categories --}}
                        @foreach(fs_groups('categories') as $groupCategory)
                            <button class="nav-link group-categories" data-page-size=15 data-page=1  data-action="{{ route('fresns.api.sub.groups', ['gid' => $groupCategory['gid']]) }}" id="v-pills-{{ $groupCategory['gid'] }}-post-box-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{ $groupCategory['gid'] }}-post-box" type="button" role="tab" aria-controls="v-pills-{{ $groupCategory['gid'] }}-post-box" aria-selected="false">
                                @if ($groupCategory['cover'])
                                    <img src="{{ $groupCategory['cover'] }}" loading="lazy" height="20">
                                @endif
                                {{ $groupCategory['gname'] }}
                            </button>
                        @endforeach
                    </div>

                    <div class="tab-content" id="v-pills-post-box-tabContent" style="width:70%;">
                        {{-- Group --}}
                        @foreach(fs_groups('categories') as $groupCategory)
                            <div class="tab-pane fade" id="v-pills-{{ $groupCategory['gid'] }}-post-box" role="tabpanel" aria-labelledby="v-pills-{{ $groupCategory['gid'] }}-post-box-tab" tabindex="0">
                                <div class="list-group"></div>
                                <div class="list-group-addmore text-center my-3"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- Group List --}}
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(".fresns-post-sticker").on('click',function (){
            $("#quick-publish-post-content").trigger('click').insertAtCaret("[" + $(this).attr('value') + "]");
        });

        function postBoxSelectGroup(obj) {
            var gid = $(obj).data('gid');
            var gname = $(obj).text();
            console.log(gname);
            $('#createModal #post-box-group').text(gname);
            $("#createModal input[name='postGid']").val(gid);
        }

        function boxAjaxGetGroupList(action, pageSize = 15, page = 1){
            let html = '';

            $('#v-pills-post-box-tabContent .tab-pane .list-group').append('<div class="text-center mt-4"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');

            $('#post-box-fresns-group .tab-pane.fade.active.show .list-group-addmore').empty().append("{{ fs_lang('loading') }}");

            $.get(action + "?page=" + page + "&pageSize=" + pageSize, function (data){
                let lists = data.list
                page = page + 1
                if (lists.length > 0) {
                    $.each(lists, function (i, list){
                        html += '<a href="javascript:void(0)" data-gid="'+ list.gid +'" data-bs-target="#createModal" data-bs-toggle="modal" onclick="postBoxSelectGroup(this)" class="list-group-item list-group-item-action';
                        if (list.publishRule.allowPost) {
                            html += '">';
                        } else {
                            html += ' disabled opacity-75">';
                        }
                        if (list.cover) {
                            html += '<img src="' + list.cover + '" height="20" class="me-1">';
                        }
                        html += list.gname + '</a>'
                    });
                }

                if (data.paginate.currentPage === 1){
                    $('#post-box-fresns-group .list-group').each(function (){
                        $(this).empty();
                        $(this).next().empty();
                    });
                }

                $('#post-box-fresns-group .tab-pane.fade.active.show .list-group').append(html);

                $('#post-box-fresns-group .tab-pane.fade.active.show .list-group-addmore').empty();
                if (data.paginate.currentPage < data.paginate.lastPage) {
                    let addMoreHtml = `<a href="javascript:void(0)"  class="add-more" onclick="boxAjaxGetGroupList('${action}', ${pageSize}, ${page})">{{ fs_lang('clickToLoadMore') }}</a>`;
                    $('#post-box-fresns-group .tab-pane.fade.active.show .list-group-addmore').append(addMoreHtml);
                }

                $("#post-box-fresns-group .group-categories").each(function (){
                    $(this).attr('disabled', false)
                })
            })
        }

        $(function (){
            $("#post-box-fresns-group .group-categories").on('click', function (){
                let obj = $(this),
                    pageSize = obj.data('page-size'),
                    page = obj.data('page'),
                    action = obj.data('action')

                $("#post-box-fresns-group .group-categories").each(function (){
                    $(this).attr('disabled', true)
                })

                $('#post-box-fresns-group .list-group').each(function (){
                    $(this).empty();
                    $(this).next().empty();
                });
                boxAjaxGetGroupList(action, pageSize, page)
            })

            $("#post-box-not-select-group").on('click', function (){
                $('#createModal #post-box-group').text("{{ fs_lang('editorNoSelectGroup') }}");
                $("#createModal input[name='postGid']").val("");
            })
        })
    </script>
@endpush
