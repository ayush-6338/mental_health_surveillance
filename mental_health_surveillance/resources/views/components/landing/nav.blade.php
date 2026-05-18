@php
    $links = [
        ['label' => 'Calm Corner', 'href' => '#calm-corner'],
        ['label' => 'Feelings Path', 'href' => '#journey'],
        ['label' => 'For Families', 'href' => '#families'],
    ];
@endphp

<header class="fixed inset-x-0 top-0 z-50 px-4 py-4 sm:px-6 lg:px-10">
    <nav class="mx-auto flex max-w-7xl items-center justify-between rounded-full border border-white/65 bg-white/45 px-4 py-3 shadow-[0_18px_55px_-35px_rgba(72,89,64,0.7)] backdrop-blur-xl">
        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <span class="grid h-10 w-10 place-items-center rounded-full bg-[#f9d994] shadow-inner shadow-white/70">
                <span class="h-4 w-4 rounded-full bg-[#7fa66d] shadow-[10px_2px_0_#a8c998,-7px_8px_0_#f5b981]"></span>
            </span>
            <span class="text-sm font-bold text-[#34442d] sm:text-base">Little Light Grove</span>
        </a>

        <div class="hidden items-center gap-2 md:flex">
            @foreach ($links as $link)
                <a href="{{ $link['href'] }}" class="rounded-full px-4 py-2 text-sm font-semibold text-[#506248] transition hover:bg-white/65 hover:text-[#273421]">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>

        <div class="flex items-center gap-2">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="rounded-full bg-[#3f6b4d] px-5 py-2 text-sm font-bold text-white shadow-lg shadow-[#3f6b4d]/20 transition hover:bg-[#345a40]">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="hidden rounded-full px-4 py-2 text-sm font-semibold text-[#506248] transition hover:bg-white/65 sm:inline-flex">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="rounded-full bg-[#3f6b4d] px-5 py-2 text-sm font-bold text-white shadow-lg shadow-[#3f6b4d]/20 transition hover:bg-[#345a40]">
                            Join gently
                        </a>
                    @endif
                @endauth
            @else
                <a href="#journey" class="rounded-full bg-[#3f6b4d] px-5 py-2 text-sm font-bold text-white shadow-lg shadow-[#3f6b4d]/20 transition hover:bg-[#345a40]">
                    Begin
                </a>
            @endif
        </div>
    </nav>
</header>
