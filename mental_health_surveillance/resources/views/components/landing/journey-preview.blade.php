@php
    $checkpoints = [
        ['title' => 'Name the feeling', 'body' => 'Children begin with gentle mood moments that feel like play, not a test.'],
        ['title' => 'Rest in Calm Corner', 'body' => 'Breathing, affirmations, and quiet activities help the day slow down.'],
        ['title' => 'Grow with support', 'body' => 'Families and counselors can notice patterns without making children feel watched.'],
    ];
@endphp

<section id="journey" class="relative overflow-hidden bg-[linear-gradient(180deg,#f8f1df_0%,#edf3d9_48%,#f8f1df_100%)] px-5 py-24 sm:px-6 lg:px-10">
    <div aria-hidden="true" class="journey-hill journey-hill-left"></div>
    <div aria-hidden="true" class="journey-hill journey-hill-right"></div>
    <div aria-hidden="true" class="journey-mist"></div>

    <div class="relative z-20 mx-auto grid max-w-7xl gap-12 lg:grid-cols-[0.95fr_1.05fr] lg:items-start">
        <div class="max-w-xl">
            <p class="text-sm font-bold uppercase tracking-[0.16em] text-[#7b8e64]">A countryside path for emotional growth</p>
            <h2 class="mt-4 text-4xl font-bold leading-tight text-[#33402c] sm:text-5xl">A calm journey, one small step at a time.</h2>
            <p class="mt-5 text-lg leading-8 text-[#64705a]">
                The experience keeps the soft walking path going as children move through mood check-ins, tiny journals, and peaceful wellness activities.
            </p>
        </div>

        <div class="grid gap-4 md:grid-cols-3">
            @foreach ($checkpoints as $checkpoint)
                <article class="rounded-[2rem] border border-white/70 bg-white/52 p-5 shadow-[0_22px_70px_-45px_rgba(72,89,64,0.85)] backdrop-blur-md">
                    <span class="mb-5 block h-2 w-14 rounded-full bg-[#f5b981]"></span>
                    <h3 class="text-lg font-bold text-[#34442d]">{{ $checkpoint['title'] }}</h3>
                    <p class="mt-3 text-sm leading-6 text-[#64705a]">{{ $checkpoint['body'] }}</p>
                </article>
            @endforeach
        </div>
    </div>

    <div id="calm-corner" class="relative z-20 mx-auto mt-16 max-w-7xl rounded-[2rem] border border-white/70 bg-[#dcebd2]/60 p-6 shadow-[0_30px_90px_-55px_rgba(72,89,64,0.85)] backdrop-blur-md sm:p-8">
        <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-sm font-bold uppercase tracking-[0.16em] text-[#7b8e64]">Calm Corner</p>
                <h2 class="mt-3 text-3xl font-bold text-[#33402c]">A quiet pause for young hearts.</h2>
            </div>
            <a href="#" class="inline-flex items-center justify-center rounded-full bg-white/75 px-6 py-3 text-sm font-bold text-[#405539] transition hover:bg-white">
                Visit the calm space
            </a>
        </div>
    </div>
</section>
