<!-- <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <span class="ml-2 mr-2 text-gray-700">{{ $locale_name }}</span>
        @else
            <a class="ml-1 underline ml-2 mr-2" href="language/{{ $available_locale }}">
                <span>{{ $locale_name }}</span>
            </a>
        @endif
    @endforeach
</div> -->

<div class="dropdown">
    <button class="btn dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <!-- {{ $current_locale }} -->
        <i class="fi fi-{{ $current_locale == 'en' ? 'gb' : $current_locale}} fis"></i>
    </button>
    <div class="dropdown-menu" style="min-width:40px;" aria-labelledby="languageDropdown">
        @foreach($available_locales as $locale_name => $available_locale)
        <a class="dropdown-item" href="language/{{ $available_locale }}">
            <i class="fi fi-{{ $available_locale == 'en' ? 'gb' : $available_locale}} fis"></i>
        </a>
        @endforeach
    </div>
</div>