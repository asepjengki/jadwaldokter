<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PUSDATIN</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">

  <?php include 'header.php'; ?>

  <!-- Banner -->
  <section class="bg-cover bg-center h-64" style="background-image: url('https://herminahospitals.com/assets/img/hero/kemayoran.jpg');">
    <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
      <h2 class="text-white text-3xl font-bold">Selamat Datang di PUSDATIN</h2>
    </div>
  </section>

  <!-- Profil -->
  <section id="profil" class="py-8 container mx-auto px-4">
    <h3 class="text-2xl font-semibold mb-4">Profil Pusat Data & Informasi</h3>
    <p>
      PUSDATIN adalah pusat data dan informasi kesehatan yang mendukung layanan rumah sakit dan fasilitas kesehatan lainnya dengan menyediakan informasi yang akurat, real-time, dan bermanfaat.
    </p>
  </section>

  <!-- Layanan -->
  <section id="layanan" class="py-8 bg-white container mx-auto px-4">
    <h3 class="text-2xl font-semibold mb-4">Layanan Unggulan</h3>
    <ul class="list-disc pl-6">
      <li>Data & Informasi Jadwal Dokter</li>
      <li>Monitoring Layanan Kesehatan</li>
      <li>Dashboard Informasi RS</li>
      <li>Integrasi Sistem Rumah Sakit</li>
    </ul>
  </section>

  <!-- Jadwal Dokter -->
  <?php include 'jadwal.php'; ?>

  <!-- Kontak -->
<!-- Kontak -->
<section id="kontak" class="py-8 container mx-auto px-4">
  <h3 class="text-2xl font-semibold mb-4">Kontak & Lokasi</h3>
  <p>Alamat: Gedung Dinas Kesehatan Kota Jakarta Pusat, Jl. Tanah Abang I No.1, Petojo Selatan, Gambir, Jakarta Pusat</p>
  <p>Telepon: (021) 3865680</p>
  <p>Email: dinkesjakpus@jakarta.go.id</p>
  <div class="mt-4">
    <iframe
      class="w-full h-64"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6924402074346!2d106.81209137355361!3d-6.171918760478753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f67f2f3cbb8f%3A0x135bc1b4fe75b74!2sDinas%20Kesehatan%20Provinsi%20DKI%20Jakarta!5e0!3m2!1sid!2sid!4v1745994570111!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    ></iframe>
  </div>
</section>


  <?php include 'footer.php'; ?>

</body>
</html>
