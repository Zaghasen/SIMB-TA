<?php
require_once 'backend/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<style>
  .gambar {
    height: 670px;
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="frontend/Images/tanah longsor.png">
  <title>Tanah Longsor Warning Center</title>
  <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="frontend/styles/main.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

</head>

<body>

  <!-- Awal navbar-->
  <?php include 'frontend/header/navbar.php'; ?>
  <!-- akhir navbar -->


  <main>
    <script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/retina/retina.min.js"></script>
</body>

</html>


<!doctype html>
<html lang="en">

<head>
  <style>
    /* Menyesuaikan tinggi peta */
    #map {
      height: 600px;
      /* Tinggi map */
      width: 100%;
      /* Lebar penuh */
      margin-bottom: 20px;
      /* Jarak dengan elemen lain */
    }

    /* Layout container untuk data gempa */
    .data_gempa {
      margin-bottom: 20px;
      /* Jarak antar data */
    }

    /* Card styling */
    .card {
      margin-bottom: 20px;
      /* Memberikan jarak antar card */
    }

    /* Judul bagian */
    #judul h4 {
      text-align: center;
      font-weight: bold;
      padding: 20px 0;
      background-color: #226597;
      color: #f3f9fb;
    }

    .services .icon-box {
      padding: 60px 30px;
      transition: all ease-in-out 0.3s;
      background: #fefefe;
      box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
      border-radius: 18px;
      border-bottom: 5px solid #fff;
    }

    .services .icon-box .icon {
      width: 64px;
      height: 64px;
      background: #226597;
      border-radius: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
      transition: ease-in-out 0.3s;
      color: #fff;
    }

    .services .icon-box .icon i {
      font-size: 28px;
    }

    .services .icon-box h4 {
      font-weight: 700;
      margin-bottom: 15px;
      font-size: 24px;
    }

    .services .icon-box h4 a {
      color: #282828;
      transition: ease-in-out 0.3s;
    }

    .services .icon-box p {
      line-height: 24px;
      font-size: 14px;
      margin-bottom: 0;
    }

    .services .icon-box:hover {
      transform: translateY(-10px);
      border-color: #226597;
    }

    .services .icon-box:hover h4 a {
      color: #226597;
    }
  </style>

</head>
<main style="margin-top:0%;">
  <div class="container">
    <div id="judul">
      <H4>BENCANA TANAH LONGSOR</H4>
    </div>
    <div class="row align-items-center my-5">
      <div class="col-md-6">
        <video class="vid-fluid rounded shadow" controls style="width: 100%; height: auto;">
          <source src="frontend/Images/TTT.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
      <!-- ... rest of your code ... -->
      <div class="col-md-6">
        <div class="p-4" style="background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
          <h5 class="mb-3" style="color: #226597; font-weight: bold;">Penyebab dan Tanda - Tanda Terjadinya Tanah
            Longsor</h5>
          <p style="text-align: justify; line-height: 1.6; color: #333;">
            Bagaimana bencana Tanah Longsor dapat terjadi, apa yang melatarbelakangi hal tersebut dan bagaimana
            tanda tanda akan terjadinya bencana Tanah Longsor. <a href="pengetahuan.php">Baca selengkapnya...</a></p>

          <h5 class="mb-3" style="color: #226597; font-weight: bold;">Dampak Dan Penanggulangan Tanah Longsor</h5>
          <p style="text-align: justify; line-height: 1.6; color: #333;">
            Bagaimana dampak dari terjadinya bencana Tanah Longsor dan bagaimana cara menanggulangi dampak
            tersebut. <a href="penanggulangan.php">Baca selengkapnya...</a></p>

          <h5 class="mb-3" style="color: #226597; font-weight: bold;">Mitigasi Bencana Tanah Longsor</h5>
          <p style="text-align: justify; line-height: 1.6; color: #333;">
            Bagaimana cara mitigasi bencana Tanah Longsor dengan benar agar bisa meminialisir kerugian yang ada. <a
              href="Tentang_Longsor.php">Baca selengkapnya...</a></p>
        </div>
      </div>
    </div>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <main style="margin-top:0%;">
          <div class="container">
            <div id="judul">
              <H4>BERITA TERKINI</H4>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                  <div class="icon"><i class="bx bxl-dribbble"></i></div>
                  <h4><a href="indexberita1.php">Longsor Timpa Rumah Warga di Boyolali</a></h4>
                  <p>Boyolali - Hujan deras yang melanda wilayah Boyolali Kota mengakibatkan bencana tanah longsor.</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4><a href="indexberita2.php">Ibu-Anak di Jateng Tertimbun Longsor</a></h4>
                  <p>Kebumen - Kedua korban ditemukan saling berpelukan dalam kondisi meninggal dunia.</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-tachometer"></i></div>
                  <h4><a href="indexberita3.php">Longsor Timbun Akses Jalan di Muara Enim</a></h4>
                  <p>Muara Enim - Material tanah, batu, dan pepohonan menutup akses jalan penghubung dua desa.</p>
                </div>
              </div>
              <br><br>
              <h4><a href="berita.php">Lihat selengkapnya...</a></h4>
            </div>

          </div>
    </section><!-- End Services Section -->
  </div>
  <div class="container">
    <div id="judul">
      <h4>SARAN DAN KELUHAN</h4>
    </div>

    <div class="row mb-5">
      <!-- Form Column -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header"
            style="background-color:#226597; color:#f3f9fb; text-align:center; font-weight:bold;">
            Sampaikan Saran dan Keluhan Anda
          </div>
          <div class="card-body" style="background-color: #f8f9fa;">
            <form action="process_feedback.php" method="POST">
              <div class="mb-3">
                <div class="form-group">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="noTelp" class="form-label">Nomor Telepon</label>
                  <input type="tel" class="form-control" id="noTelp" name="noTelp">
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="kategori" class="form-label">Kategori</label>
                  <select class="form-select" id="kategori" name="kategori" required>
                    <option value="" selected disabled>Pilih Kategori</option>
                    <option value="saran">Saran</option>
                    <option value="keluhan">Keluhan</option>
                    <option value="lainnya">Lainnya</option>
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="rating" class="form-label">Rating</label>
                  <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5" required>
                    <label for="star5">★</label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4">★</label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3">★</label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2">★</label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1">★</label>
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label for="lampiran" class="form-label">Lampiran (opsional)</label>
                  <input type="file" class="form-control" id="lampiran" name="lampiran">
                  <div class="form-text">Format yang didukung: JPG, PNG, PDF (Max. 2MB)</div>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary px-5" style="background-color: #226597; border: none;">
                  Kirim
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Reviews Column -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header"
            style="background-color:#226597; color:#f3f9fb; text-align:center; font-weight:bold;">
            Review dan Rating Terbaru
          </div>
          <div class="card-body" style="background-color: #f8f9fa;">
            <!-- Overall Rating -->
            <div class="text-center mb-4">
              <h5>Rating Keseluruhan</h5>
              <div class="display-4" style="color: #226597;">4.5</div>
              <div class="h3" style="color: #ffd700;">★★★★½</div>
              <p class="text-muted">Dari 100.001 Review</p>
            </div>

            <!-- Individual Reviews -->
            <div class="review-list" style="max-height: 500px; overflow-y: auto;">
              <!-- Review 1 -->
              <div class="border-bottom pb-3 mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <h6 class="mb-1">Rio Wicaksono</h6>
                  <div style="color: #ffd700;">★</div>
                </div>
                <small class="text-muted">2 hari yang lalu</small>
                <p class="mt-2 mb-0">Kenapa nama saya terpampang di daftar pencarian, saya tidak hilang.</p>
              </div>

              <!-- Review 2 -->
              <div class="border-bottom pb-3 mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <h6 class="mb-1">Riza Rahardian</h6>
                  <div style="color: #ffd700;">★★★★</div>
                </div>
                <small class="text-muted">1 minggu yang lalu</small>
                <p class="mt-2 mb-0">Data yang disajikan selalu update dan akurat. Sangat membantu untuk monitoring
                  daerah rawan longsor.</p>
              </div>

              <!-- Review 3 -->
              <div class="border-bottom pb-3 mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <h6 class="mb-1">Haidar Prapcoyo</h6>
                  <div style="color: #ffd700;">★★★★★</div>
                </div>
                <small class="text-muted">2 minggu yang lalu</small>
                <p class="mt-2 mb-0">Respon cepat dari tim support ketika ada pertanyaan. Informasi yang diberikan
                  jelas dan mudah dipahami.</p>
              </div>

              <!-- Add more reviews as needed -->
            </div>

            <!-- Show More Button -->
            <div class="text-center mt-3">
              <button class="btn btn-outline-primary" style="color: #226597; border-color: #226597;">
                Lihat Review Lainnya
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    .rating {
      display: flex;
      flex-direction: row-reverse;
      justify-content: flex-end;
    }

    .rating input {
      display: none;
    }

    .rating label {
      cursor: pointer;
      font-size: 30px;
      color: #ddd;
      padding: 5px;
    }

    .rating input:checked~label,
    .rating label:hover,
    .rating label:hover~label {
      color: #ffd700;
    }

    .review-list::-webkit-scrollbar {
      width: 6px;
    }

    .review-list::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    .review-list::-webkit-scrollbar-thumb {
      background: #226597;
      border-radius: 3px;
    }

    .review-list::-webkit-scrollbar-thumb:hover {
      background: #1a4d72;
    }
  </style>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
  integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="">
  </script>
<script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
<script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
<script src="frontend/libraries/retina/retina.min.js"></script>
</body>

</html>