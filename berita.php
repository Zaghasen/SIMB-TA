<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="frontend/Images/tanah longsor.jpg">
    <title>Tanah Longsor Warning Center</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <style>
        /* Menjamin semua elemen box-sizing */
        * {
            box-sizing: border-box;
        }

        /* Styling untuk card */
        .card img {
            object-fit: cover;
            width: 100%;
            /* Mengisi seluruh container */
            height: 100%;
            /* Mengisi seluruh container */
        }

        .card {
            overflow: hidden;
            /* Mencegah elemen teks keluar */
        }

        .main-item {
            padding-bottom: 80px;
            /* Sesuaikan dengan tinggi footer */
        }

        footer {
            padding: 10px 0;
            /* Kurangi padding agar footer lebih kecil */
        }

        footer {
            position: static;
            bottom: 0;
            background: #fff;
            z-index: 10;
            /* Pastikan ada prioritas */
        }
    </style>
</head>

<!-- navbar -->
<?php include 'frontend/header/navbar.php'; ?>
<!-- akhir navbar -->

<!-- main -->
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/news1.jpg" class="rounded" width="215px" height="224" alt="news1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a
                                href="https://www.detik.com/sulsel/berita/d-7637615/jalan-poros-toraja-mamasa-di-tadokalua-lumpuh-akibat-tanah-longsor ">
                                <h5 class="card-title"><b>Jalan poros Toraja-Mamasa di Tadokalua Lumpuh Akibat Tanah
                                        Longsor</b></h5>
                            </a>
                            <p class="card-text">Jalan Poros Toraja-Mamasa lumpuh akibat tanah longsor di Desa
                                Tadokalua. Material longsor setinggi 2 meter menutup jalan. Warga diimbau
                                waspada.Kejadian ini di Desa Tadokalua pada tanggal 14 November 2024, pukul 03.00 WITA.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/news2.jpg" class="rounded" width="215px" height="224" alt="news2">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a
                                href="https://www.detik.com/jateng/berita/d-7633521/longsor-timpa-rumah-warga-tutup-jalan-desa-di-karanggeneng-boyolali">
                                <h5 class="card-title"><b>Longsor Timpa Rumah Warga-Tutup Jalan Desa
                                        di Karanggeneng Boyolali</b></h5>
                            </a>
                            <p class="card-text">Hujan deras yang melanda wilayah Boyolali mengakibatkan bencana tanah
                                longsor. Akibatnya tanah longsor menimpa rumah warga dan menutup jalan desa. Kejadian
                                tanah longsor ini terjadi pada tanggal 11 November 2024, pukul 15.30  WIB.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/news3.jpg" class="rounded" width="215px" height="224" alt="news3">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a
                                href="https://news.detik.com/berita/d-7630676/tanah-longsor-di-sukaraja-bogor-jalan-penghubung-2-desa-ditutup">
                                <h5 class="card-title"><b>Tanah Longsor di Sukaraja Bogor, Jalan Penghubung 2 Desa
                                        Ditutup</b></h5>
                            </a>
                            <p class="card-text">Tanah longsor terjadi di jalan penghubung Desa Nagrak dan Desa
                                Sukatani, Bogor. Longsor disebabkan hujan deras dengan durasi waktu yang cukup lama pada
                                tanggal 9 November 2024, pukul 16.30 WIB.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/news4.jpg" class="rounded" width="215px" height="224" alt="news4">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a
                                href="https://www.detik.com/sumut/berita/d-7631605/ibu-anak-di-jateng-tertimbun-longsor-ditemukan-meninggal-berpelukan">
                                <h5 class="card-title"><b>Ibu-Anak di Jateng Tertimbun Longsor, Ditemukan Meninggal
                                        Berpelukan</b></h5>
                            </a>
                            <p class="card-text">Ibu dan anak tertimbun longsor di Kecamatan Pejagoan, Kebumen, Jawa
                                Tengah pada tanggal 10 November 2024, pukul 21.57 WIB.</p>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/news5.jpg" class="rounded" width="215px" height="224" alt="news5">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a
                                href="https://www.detik.com/sumbagsel/berita/d-7628763/longsor-timbun-akses-jalan-penghubung-2-desa-di-muara-enim">
                                <h5 class="card-title"><b>Longsor Timbun Akses Jalan Penghubung 2 Desa di Muara Enim</b>
                                </h5>
                            </a>
                            <p class="card-text">Tanah longsor di Muara Enim, Sumsel, menutup akses jalan antara dua
                                desa. Proses pembersihan masih berlangsung setelah hujan lebat. Kejadian ini terjadi
                                pada tanggal 8 November 2024, pukul 06.00 WIB.</p>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/news6.jpg" class="rounded" width="215px" height="224" alt="news6">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a
                                href="https://www.detik.com/bali/berita/d-7616121/tanah-longsor-di-jembrana-akses-jalan-warga-terputus">
                                <h5 class="card-title"><b>Tanah Longsor di Jembrana, Akses Jalan Warga Terputus</b></h5>
                            </a>
                            <p class="card-text">Hujan deras di Pekutatan, Jembrana, menyebabkan tanah longsor yang
                                memutuskan akses jalan. Beruntung tidak ada korban, warga diminta waspada terhadap
                                bencana. Tanah longsor ini terjadi pada tanggal 31 Oktober 2024, pukul 19.00 WITA.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/news7.jpg" class="rounded" width="215px" height="224" alt="news7">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a
                                href="https://www.detik.com/jabar/berita/d-7633729/tebing-20-meter-longsor-di-sukabumi-timbun-mobil-tutup-akses-jalan">
                                <h5 class="card-title"><b>Tebing 20 Meter Longsor di Sukabumi, Timbun Mobil-Tutup Akses
                                        Jalan</b></h5>
                            </a>
                            <p class="card-text">Hujan deras di Sukabumi menyebabkan longsor menutup akses jalan. Tim
                                BPBD dan relawan evakuasi material, waspada longsor susulan. Tanah longsor ini terjadi
                                pada tanggal 11 November 2024, pukul 20.30 WIB.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/news8.jpg" class="rounded" width="215px" height="224" alt="news8">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a
                                href="https://www.detik.com/sumbagsel/berita/d-7628415/tanah-longsor-di-oku-satu-rumah-warga-nyaris-roboh">
                                <h5 class="card-title"><b>Tanah Longsor di OKU, Satu Rumah Warga Nyaris Roboh</b></h5>
                            </a>
                            <p class="card-text">Satu rumah di bantaran Sungai Ogan, Desa Kedondong, Dusun II, Kecamatan
                                Peninjauan, Kabupaten OKU terdampak longsor. Kejadian ini terjadi pada tanggal 7
                                November 2024, pukul 21.30 WIB.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/news9.jpg" class="rounded" width="215px" height="224" alt="news9">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a
                                href="https://www.detik.com/jateng/berita/d-7627339/tebing-100-meter-longsor-tutup-jalan-desa-lembur-pekalongan">
                                <h5 class="card-title"><b>Tebing 100 Meter Longsor Tutup Jalan Desa Lembur
                                        Pekalongan</b></h5>
                            </a>
                            <p class="card-text">Tebing di Desa Lembur Pekalongan longsor saat hujan deras mengguyur
                                wilayah tersebut. Material longsor kini menutupi akses jalan di Desa Lembur pada tanggal
                                7 November, pukul 12.00 WIB.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="frontend/Images/news10.jpg" class="rounded" width="215px" height="224" alt="news10">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a
                                href="https://www.detik.com/jabar/berita/d-7624581/banjir-longsor-terjang-4-kecamatan-di-sukabumi-jalan-rumah-warga-rusak">
                                <h5 class="card-title"><b>Banjir-Longsor Terjang 4 Kecamatan di Sukabumi, Jalan-Rumah
                                        Warga Rusak</b></h5>
                            </a>
                            <p class="card-text">Hujan deras yang mengguyur sejumlah wilayah di Kabupaten Sukabumi pada
                                tanggal 5 November 2024, mengakibatkan banjir hingga longsor di empat kecamatan.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- akhir main -->

<!-- Awal Footer -->
<?php include 'frontend/header/footer.php'; ?>
<!-- Akhir Footer -->

<script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
<script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
<script src="frontend/libraries/retina/retina.min.js"></script>
</body>

</html>