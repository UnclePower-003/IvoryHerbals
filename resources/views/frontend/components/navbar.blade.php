<!-- PROMO BAR -->
<div class="bg-lightBg py-3">
    <div
        class="max-w-7xl mx-auto px-6 flex flex-wrap items-center justify-center gap-6 text-sm font-medium text-primary">
        <p>Stock up and save 25%</p>
        <div class="flex items-center gap-2">
            <span>Code: IvoryHerbs</span>
            <img src="{{ asset('images/vector-14.svg') }}" class="w-4 h-4" alt="" />
        </div>
        <p>Ends in 1d 12h 30m</p>
        <a href="#" class="underline">Shop now</a>
    </div>
</div>

<!-- LOGO -->
<nav class="w-full bg-white">
    <div class="max-w-7xl mx-auto px-6 py-2 flex justify-between items-center">
        <div class="shrink-0">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo-10-1-15.png') }}" alt="Ivory Logo"
                    class="h-12 md:h-16 w-auto object-contain" />
            </a>
        </div>

        <div class="uppercase flex items-center gap-2 md:gap-10">
            <a href="{{ route('co-packing') }}"
                class="text-[12px] md:text-[15px] font-medium text-darkText hover:text-primary transition-colors duration-300 tracking-wide">
                Co-Packing
            </a>
            <a href="{{ route('contact') }}"
                class="text-[12px] md:text-[15px] font-medium text-darkText hover:text-primary transition-colors duration-300 tracking-wide">
                Contact Us
            </a>
        </div>
    </div>
</nav>
