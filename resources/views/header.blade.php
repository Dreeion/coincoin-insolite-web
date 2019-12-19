<header>
    <p class="title">{{ __('messages.slogan') }}</p>
    <div class="dl_div">
        <div class="dl_link">
            <a href="{{ asset('download/android.zip') }}">
                <p class="download">
                    <span>{{ __('messages.download_android') }}</span>
                    <span><img src="{{ asset('img/icon/download_white.png') }}" alt="download" class="download_button"></span>
                </p>
            </a>
        </div>
        <div class="dl_link2">
            <a href="{{ asset('download/ios.zip') }}">
                <p class="download">
                    <span>{{ __('messages.download_ios') }}</span>
                    <span><img src="{{ asset('img/icon/download_white.png') }}" alt="download" class="download_button"></span>
                </p>
            </a>
        </div>
    </div>
</header>
