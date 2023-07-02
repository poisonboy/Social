<div class="editor-file-image editor-file-image-{{ count($files['images']) }} mt-3 clearfix">
    @if ($files['images'] ?? null)
        @foreach($files['images'] as $image)
            <div class="position-relative">
                <img src="{{ $image['imageSquareUrl'] }}" loading="lazy" class="img-fluid">
                <div class="position-absolute top-0 end-0 editor-btn-delete"><button type="button" class="btn btn-outline-dark btn-sm rounded-0 border-0" title="{{ fs_lang('delete') }}" data-fid="{{ $image['fid'] }}" onclick="deleteFile(this)"><i class="fa-regular fa-trash-can"></i></button></div>
            </div>
        @endforeach
    @endif
</div>

<div class="editor-file-video mt-3 clearfix">
    @if ($files['videos'] ?? null)
        @foreach($files['videos'] as $video)
            <div class="position-relative">
                @if ($video['videoPosterUrl'])
                    <img src="{{ $video['videoPosterUrl'] }}" loading="lazy" class="img-fluid">
                @else
                    <svg class="bd-placeholder-img rounded" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect>
                    </svg>
                @endif

                <div class="position-absolute top-0 end-0 editor-btn-delete">
                    <button type="button" class="btn btn-outline-dark btn-sm rounded-0 border-0" data-fid="{{ $video['fid'] }}" onclick="deleteFile(this)" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ fs_lang('delete') }}"><i class="fa-regular fa-trash-can"></i></button>
                </div>
                <div class="position-absolute top-50 start-50 translate-middle">
                    <button type="button" class="btn btn-light editor-btn-video-play" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="{{ fs_lang('editorVideoPlay') }}" title="{{ fs_lang('editorVideoPlay') }}"><i class="fa-solid fa-play"></i></button>
                </div>
            </div>
        @endforeach
    @endif
</div>

<div class="editor-file-audio mt-3 clearfix">
    @if ($files['audios'] ?? null)
        @foreach($files['audios'] as $audio)
            <div class="position-relative">
                <audio src="{{ $audio['audioUrl'] }}" controls="controls" preload="meta" controlsList="nodownload" oncontextmenu="return false">
                    Your browser does not support the audio element.
                </audio>
                <div class="position-absolute top-0 end-0 editor-btn-delete"><button type="button" class="btn btn-outline-dark btn-sm rounded-0 border-0"  data-fid="{{ $audio['fid'] }}" onclick="deleteFile(this)" title="{{ fs_lang('delete') }}"><i class="fa-regular fa-trash-can"></i></button></div>
            </div>
        @endforeach
    @endif
</div>

<div class="editor-file-document mt-3 clearfix">
    @if ($files['documents'] ?? null)
        @foreach($files['documents'] as $doc)
            <div class="position-relative">
                <div class="editor-document-box">
                    <div class="editor-document-icon"><i class="fa-regular fa-file-word"></i></div>
                    <div class="editor-document-name text-nowrap overflow-hidden">{{ $doc['name'] }}</div>
                </div>
                <div class="position-absolute top-0 end-0 editor-btn-delete"><button type="button" class="btn btn-outline-dark btn-sm rounded-0 border-0" data-fid="{{ $doc['fid'] }}" onclick="deleteFile(this)" title="{{ fs_lang('delete') }}"><i class="fa-regular fa-trash-can"></i></button></div>
            </div>
        @endforeach
    @endif
</div>
