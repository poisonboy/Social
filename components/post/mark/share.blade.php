<span class="d-none" id="{{ $pid.'-url' }}">{{ $url }}</span>

<ul class="dropdown-menu" aria-labelledby="share">
    <li><span class="dropdown-item-text fw-bolder">{{ fs_lang('share') }}:</span></li>
    <li><a class="dropdown-item py-2" href="#" onclick="copyToClipboard('#{{ $pid.'-url' }}')"><i class="fa-solid fa-link"></i> {{ fs_lang('copyLink') }}</a></li>
</ul>
