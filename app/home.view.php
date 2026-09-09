<x-base :title="Tempest\env('APP_TITLE', default: 'Werkswind')" :logo="Tempest\env('APP_LOGO')">
  <main class="bg-werkswind-bg w-screen h-screen overflow-hidden">
    <div class="isolate relative flex flex-col justify-center items-center px-6 lg:px-8 h-full">
      <!-- Background gradient -->
      <div class="-top-40 sm:-top-80 -z-10 absolute inset-x-0 blur-3xl overflow-hidden transform-gpu pointer-events-none" aria-hidden="true">
        <div
            class="left-[calc(50%-11rem)] sm:left-[calc(50%-30rem)] relative bg-gradient-to-tr from-werkswind-gradient-from to-werkswind-gradient-to opacity-20 w-[36.125rem] sm:w-[72.1875rem] aspect-[1155/678] rotate-[30deg] -translate-x-1/2"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
        ></div>
      </div>
      <!-- Bottom gradient -->
      <div class="top-[calc(100%-13rem)] sm:top-[calc(100%-30rem)] -z-10 absolute inset-x-0 blur-3xl overflow-hidden transform-gpu pointer-events-none" aria-hidden="true">
        <div class="left-[calc(50%+3rem)] sm:left-[calc(50%+36rem)] relative bg-gradient-to-tr from-werkswind-gradient-from to-werkswind-gradient-to opacity-20 w-[36.125rem] sm:w-[72.1875rem] aspect-[1155/678] -translate-x-1/2" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <!-- Hero section -->
      <div class="mx-auto py-32 sm:py-48 lg:py-56 max-w-2xl">
        <div class="text-center">
          <img :if="$logo" src="{{ $logo }}" alt="{{ $title }}" class="mx-auto mb-0 w-48 sm:w-56 h-48 sm:h-56 object-contain">
          <!-- Text -->
          <h1 class="font-semibold text-werkswind-text text-5xl sm:text-7xl text-balance tracking-tight">{{ $title }}</h1>
          <p class="mt-8 font-medium text-werkswind-muted text-lg sm:text-xl/8 text-pretty">Following the wind of change.</p>
        </div>
      </div>
    </div>
  </main>
</x-base>
