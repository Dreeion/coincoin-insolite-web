<section class="content_phone">
    <div class="text">
        <h4 class="title">{{ __('messages.join') }}</h4>
        <div class="buttons_download">
            <div class="button_margin">
                <a href="{{ asset('download/android.zip') }}">
                    <p class="button">
                        <span class="button-text">{{ __('messages.download_android') }}</span>
                        <span><img src="{{ asset('img/icon/download_black.png') }}" alt="download" class=""></span>
                    </p>
                </a>
            </div>
            <div class="">
                <a href="{{ asset('download/ios.zip') }}">
                    <p class="button">
                        <span class="button-text">{{ __('messages.download_ios') }}</span>
                        <span><img src="{{ asset('img/icon/download_black.png') }}" alt="download" class=""></span>
                    </p>
                </a>
            </div>
        </div>
    </div>
    <span class="phone"><img src="{{ asset("/img/phone.png") }}" alt="phone"></span>
</section>