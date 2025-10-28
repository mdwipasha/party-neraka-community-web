# Party Neraka Community Web 🔥  
Website (fan-made) komunitas **Party Neraka**.

## ⚠️ Disclaimer  
Proyek ini **bukan web resmi Party Neraka**.  
Semua konten, logo, atau elemen yang terinspirasi dari komunitas Party Neraka hanya digunakan **untuk tujuan pembelajaran dan portofolio pribadi**.  Tidak ada afiliasi, kerja sama dari pihak terkait.  
Kalau sewaktu-waktu pihak komunitas minta takedown, web ini akan dihapus tanpa masalah. 🙏

## 💡 Deskripsi Singkat  
Website ini adalah website community hub yang menampilkan info, event, dan live now dari member Party Neraka.  

## 🎯 Fitur Utama  
- **Homepage Dinamis:** menampilkan semua konten termasuk member,merch dan event langsung dari database yang bisa dikelola dipanel admin.  
- **Live Now Section:** otomatis muncul kalau ada member yang lagi **live di YouTube** (pakai YouTube Data API v3).  
- **Member Showcase:** daftar member Party Neraka lengkap dengan profil, channel, dan sosial media mereka.
- **Merch Showcase:** daftar merch yang disediakan Party Neraka lengkap dengan Foto merch, Jenis merch, dan Link menuju marketplace.  
- **Event Page:** informasi event komunitas, gathering, atau project kolaborasi.  
- **Admin Dashboard:** buat kelola konten, tambah event, tambah merch, update profil member, dll.

## 🧩 Teknologi yang Digunakan  
- **Frontend:** Tailwind v3.  
- **Backend:** Laravel 11.
- **Admin Panel:** Filament v3.  
- **API Integration:** YouTube Data API v3 buat deteksi member yang lagi live.  

## ⚙️ Cara Setup  
1. Clone repo ini:  
   ```bash
   git clone https://github.com/mdwipasha/party-neraka-community-web.git
   cd party-neraka-community-web
   ```  
2. Copy `.env.example` ke `.env` dan isi data koneksi database + API key YouTube.  
   ```bash
   YOUTUBE_API_KEY="ISI API YOUTUBE V3 DISINI" #TAMBAHKAN INI DI FILE .env PALING BAWAH
   ```  
3. Install dependencies:  
   ```bash
   composer update
   npm install && npm run build
   php artisan key:generate
   ```  
4. Jalankan migrasi database:  
   ```bash
   php artisan migrate --seed
   ```  
5. Jalankan server lokal:  
   ```bash
   php artisan serve
   ```  
6. Buka `http://localhost:8000` buat lihat hasilnya.  

## 🚀 Fitur yang Akan Datang  
- Forum mini atau sistem komentar.   

## 👥 Tentang Party Neraka  
Party Neraka bukan sekadar komunitas — ini tempat di mana **kreativitas liar, humor absurd, dan semangat chaos** jadi satu.  

---

Enjoy coding & semangat terus! Kalau butuh tambahan fitur atau ada ide lain, tinggal kabarin aja. 🚀
