<section id="jadwal" class="py-8 container mx-auto px-4">
  <h3 class="text-2xl font-semibold mb-4">Daftar Rumah Sakit dan Jadwal Dokter</h3>

  <?php
  $rumah_sakit = [
    "RS Umum Daerah Tarakan" => [
      ["nama" => "dr. Andi Wijaya", "spesialis" => "Penyakit Dalam", "hari" => "Senin - Rabu", "jam" => "08:00 - 12:00"],
      ["nama" => "dr. Lestari Dewi", "spesialis" => "Anak", "hari" => "Kamis - Jumat", "jam" => "09:00 - 13:00"],
    ],
    "RS Umum Daerah Sawah Besar" => [
      ["nama" => "dr. Budi Hartono", "spesialis" => "Bedah", "hari" => "Selasa & Kamis", "jam" => "10:00 - 14:00"],
    ],
    "RS Umum Daerah Kemayoran" => [
      ["nama" => "dr. Siti Aminah", "spesialis" => "Kandungan", "hari" => "Senin - Jumat", "jam" => "08:00 - 11:00"],
    ],
    // Tambahkan rumah sakit lain sesuai daftar, contoh:
    "RS Umum Daerah Cempaka Putih" => [],
    "RS Umum Daerah Johar Baru" => [],
    "RS Umum Daerah Tanah Abang" => [],
    "RS Umum Daerah Koja" => [],
    "RS Umum Daerah Tugu Koja" => [],
    "RS Umum Daerah Pademangan" => [],
    "RS Umum Daerah Cilincing" => [],
    "RS Umum Daerah Tanjung Priok" => [],
    "RS Umum Daerah Cengkareng" => [],
    "RS Umum Daerah Kembangan" => [],
    "RS Umum Daerah Kalideres" => [],
    "RS Umum Daerah Taman Sari" => [],
    "RS Umum Daerah Tebet" => [],
    "RS Umum Daerah Pesanggrahan" => [],
    "RS Umum Daerah Jagakarsa" => [],
    "RS Umum Daerah Mampang Prapatan" => [],
    "RS Umum Daerah Pasar Minggu" => [],
    "RS Umum Daerah Jati Padang" => [],
    "RS Umum Daerah Kebayoran Baru" => [],
    "RS Umum Daerah Kebayoran Lama" => [],
    "RS Umum Daerah Budhi Asih" => [],
    "RS Umum Daerah Pasar Rebo" => [],
    "RS Khusus Daerah Duren Sawit" => [],
    "RS Umum Daerah Kramat Jati" => [],
    "RS Umum Daerah Ciracas" => [],
    "RS Umum Daerah Cipayung" => [],
    "RS Umum Daerah Matraman" => [],
    "RS Umum Daerah Kepulauan Seribu" => [],
  ];

  foreach ($rumah_sakit as $nama_rs => $dokters) {
    echo "<div class='mb-6'>";
    echo "<h4 class='text-xl font-semibold mb-2 text-green-700'>{$nama_rs}</h4>";
    if (count($dokters) > 0) {
      echo "<table class='min-w-full bg-white border border-gray-300 mb-4'>";
      echo "<thead class='bg-gray-200'><tr>
              <th class='p-2 border'>Nama Dokter</th>
              <th class='p-2 border'>Spesialis</th>
              <th class='p-2 border'>Hari</th>
              <th class='p-2 border'>Jam</th>
            </tr></thead><tbody>";
      foreach ($dokters as $d) {
        echo "<tr>
                <td class='p-2 border'>{$d['nama']}</td>
                <td class='p-2 border'>{$d['spesialis']}</td>
                <td class='p-2 border'>{$d['hari']}</td>
                <td class='p-2 border'>{$d['jam']}</td>
              </tr>";
      }
      echo "</tbody></table>";
    } else {
      echo "<p class='text-gray-500 italic'>Belum ada jadwal dokter.</p>";
    }
    echo "</div>";
  }
  ?>
</section>
