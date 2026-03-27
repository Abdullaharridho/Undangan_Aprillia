<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Undangan Pernikahan</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Alpine -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at top, #1a1a1a, #000000);
      color: #e5e5e5;
      overflow-x: hidden;
      scroll-behavior: smooth;
    }

    .mafia-font {
      font-family: 'Cinzel Decorative', cursive;
      letter-spacing: 3px;
    }

    .glass {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 0, 0, 0.2);
    }

    .fade-section {
      opacity: 0;
      transform: translateY(50px);
      transition: all 1s ease;
    }

    .fade-section.show {
      opacity: 1;
      transform: translateY(0);
    }

    .glow {
      text-shadow: 0 0 10px rgba(255,0,0,0.7);
    }

  </style>
</head>

<body x-data="{ showPopup: true, guestName: '' }">

  <!-- POPUP -->
  <div x-show="showPopup" class="fixed inset-0 bg-black/90 flex items-center justify-center z-50" x-transition>
    <div class="glass p-8 rounded-2xl text-center w-80 shadow-2xl">
      <h2 class="text-2xl mafia-font mb-4 glow">Undangan Untuk</h2>
      <input type="text" x-model="guestName" placeholder="Masukkan nama..."
        class="w-full px-4 py-2 mb-4 rounded bg-black/40 border border-red-500 text-white focus:ring-2 focus:ring-red-600">
      <button @click="if(guestName.trim()) showPopup=false"
        class="bg-red-700 hover:bg-red-900 px-6 py-2 rounded-full transition">
        Buka
      </button>
    </div>
  </div>

  <!-- SCRIPT ANIMASI -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const sections = document.querySelectorAll(".fade-section");
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) entry.target.classList.add("show");
        });
      }, { threshold: 0.2 });
      sections.forEach(sec => observer.observe(sec));
    });
  </script>

  <!-- HERO -->
  <section class="h-screen flex flex-col justify-center items-center text-center fade-section">

    <template x-if="guestName">
      <p class="text-gray-400 italic mb-2">
        Kepada Yth. <span class="text-red-500 font-semibold" x-text="guestName"></span>
      </p>
    </template>

    <h1 class="text-5xl md:text-7xl mafia-font glow mb-4">
      The Wedding
    </h1>

    <p class="text-xl text-gray-400 mb-6">We Are Getting Married</p>

    <div class="text-3xl md:text-4xl font-semibold">
      Muhammad Abdullah Arridho
      <br>
      <span class="text-red-600 text-2xl">&</span>
      <br>
      Aprillia Pusvita Sari
    </div>

    <div class="mt-6 text-red-600 text-5xl animate-pulse">
      <i class="fa-solid fa-heart"></i>
    </div>

  </section>

  <!-- QUOTE -->
  <section class="py-20 text-center px-6 fade-section">
    <div class="glass max-w-2xl mx-auto p-6 rounded-xl">
      <p class="italic text-lg">
        "Cinta bukan tentang menemukan seseorang untuk hidup bersama,
        tapi menemukan seseorang yang tidak bisa kamu hidup tanpanya."
      </p>
    </div>
  </section>

  <!-- TANGGAL -->
  <section class="py-20 text-center fade-section">
    <h2 class="text-4xl mafia-font mb-6 glow">Save The Date</h2>

    <div class="glass inline-block px-10 py-6 rounded-xl">
      <p class="text-xl">Minggu</p>
      <p class="text-3xl font-bold text-red-500">7 Juni 2026</p>
      <p class="text-lg mt-2">10.00 WIB - Selesai</p>
    </div>
  </section>

  <!-- LOKASI -->
  <section class="py-20 text-center px-6 fade-section">
    <h2 class="text-3xl mafia-font mb-4">Lokasi Acara</h2>
    <p class="text-gray-400 mb-6">Desa Patalan, Kecamatan Wonomerto, Kabupaten Probolinggo</p>

    <!-- EMBED GOOGLE MAPS -->
    <div class="w-full max-w-3xl mx-auto rounded-xl overflow-hidden border border-red-800">
      <a href="https://www.google.com/maps?q=-7.750700,113.473917" target="_blank">
        <iframe
          src="https://www.google.com/maps?q=-7.835551, 113.147522&hl=id&z=15&output=embed"
          class="w-full h-80 border-0"
          allowfullscreen=""
          loading="lazy">
        </iframe>
      </a>
    </div>

    <!-- BUTTON MAPS -->
    <a href="https://www.google.com/maps/dir/?api=1&destination=-7.750700,113.473917"
      target="_blank"
      class="inline-block mt-6 bg-red-700 hover:bg-red-900 px-6 py-3 rounded-full transition">
      <i class="fa-solid fa-map-location-dot mr-2"></i>Lihat Rute di Google Maps
    </a>
  </section>

  <!-- RSVP -->
  <section class="py-20 text-center fade-section">
    <h2 class="text-3xl mafia-font mb-6">Konfirmasi Kehadiran</h2>

    <a href="https://wa.me/6287734197664"
      class="bg-green-600 hover:bg-green-700 px-6 py-3 rounded-full inline-flex items-center gap-2 transition">
      <i class="fa-brands fa-whatsapp"></i>
      RSVP via WhatsApp
    </a>
  </section>

  <!-- FOOTER -->
  <footer class="py-10 text-center text-gray-500 text-sm">
    © 2026 Abdullah & Aprillia ❤️
  </footer>

</body>
</html>
