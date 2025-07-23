<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event - Party Neraka</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  .nav-links li a {
    color: #f58b11 !important;
    transition: color 0.3s;
  }
  
  .nav-links li a:hover {
    color: #cc7715 !important;
  }

  .menu-toggle .bar {
    color: #f58b11 !important;
    background-color: #f58b11 !important;
    }

  section {
    margin-top: 5rem;
  }

  section h2 {
    color: #f58b11
  }

  .footer .footer-logo {
    display: flex; 
    justify-content: center;
    align-items: center;
    text-align: center;
    flex: 1 1 100%;
}

  .footer  a {
        text-decoration: underline;
    }
</style>
<body>
    <x-header></x-header>
    <section class="bg-white-100 min-h-screen py-12 px-6">
        <div class="max-w-7xl mx-auto">
          <h2 class="text-5xl font-bold text-center mb-10">Event Page</h2>
          
           <!-- Event Card -->
           <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
              @foreach ($events as $index => $event)
              @php
                  $startDate = Carbon\Carbon::parse($event->start_date)->translatedFormat('d F Y');
                  $endDate = Carbon\Carbon::parse($event->end_date)->translatedFormat('d F Y');
              @endphp
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                <img src="{{ $event->image ? Storage::url($event->image) : asset('assets/image/no-image.jpg') }}" alt="{{ $event->title }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">{{ $event->title }}</h3>
                    <p class="text-sm text-gray-600 mb-1">📍 {{ $event->location }}</p>
                    <p class="text-sm text-gray-600 mb-3">🗓️ {{ $startDate }} - {{ $endDate }}</p>
                    <p class="text-sm text-gray-700 mb-4">{{ Str::limit($event->description, 95, '...') }}</p>
                    <button onclick="toggleModal()" class="bg-orange-400 text-white px-4 py-2 rounded hover:bg-orange-500">Lihat Detail</button>
                </div>
                </div>
              @endforeach
            </div>
            @if ($events->isEmpty())
                  <p class="text-xl font-extralight text-gray-400 mb-2 text-center">Belum ada Event</p>
            @endif
        </div>
        {{-- pagination --}}
        <div class="mt-6">
            {{ $events->links() }}
        </div>
      </section>
      
    <!-- Modal Detail Event -->
    @foreach ($events as $index => $event)
      <div id="eventModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white w-full max-w-xl p-6 rounded-lg shadow-xl relative">
          <button onclick="toggleModal()" class="absolute top-2 right-2 text-gray-600 hover:text-black text-2xl">&times;</button>
          <h3 class="text-2xl font-bold text-orange-400 mb-2">{{ $event->title }}</h3>
          <p class="text-sm text-gray-600 mb-4">📍 {{ $event->location }} | 🗓️ {{ $startDate }} - {{ $endDate }} | ⏰ {{ $event->time }} WIB</p>

          <p class="text-gray-700 mb-4">
            {{ $event->description }}
          </p>

        </div>
      </div>
  @endforeach

    <x-footer></x-footer>

<script>
    function toggleModal() {
      const modal = document.getElementById('eventModal');
      modal.classList.toggle('hidden');
    }
</script>
</body>
</html>