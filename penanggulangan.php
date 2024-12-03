<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="frontend/Images/tsunami.png">
    <title>Tanah Longsor Warning Center</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .grid-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .grid-container .text {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .grid-container .text h5 {
            color: #007BFF;
            margin-bottom: 10px;
        }

        .grid-container .text p {
            line-height: 1.6;
        }

        /* Grid Item Customization */
        .grid-container .reverse {
            display: contents;
            /* Allow custom order */
        }

        .grid-container .reverse .text {
            order: 1;
        }

        .grid-container .reverse img {
            order: 2;
        }

        /* Efek Hover pada Gambar */
        .grid-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .grid-container img:hover {
            transform: scale(1.05);
            /* Membesar sedikit saat di-hover */
            box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2);
            /* Shadow lebih intens */
        }

        /* Efek Hover pada Teks */
        .grid-container .text {
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .grid-container .text h5:hover {
            color: #0056b3;
            /* Warna lebih gelap */
            text-decoration: underline;
            /* Tambahkan underline */
        }

        .grid-container .text p:hover {
            color: #333;
            /* Ubah warna teks saat di-hover */
        }

        /* Animasi Slide-in */
        .grid-container .text,
        .grid-container img {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease forwards;
        }

        /* Delay Animasi untuk Elemen yang Berbeda */
        .grid-container .text:nth-child(2n) {
            animation-delay: 0.2s;
        }

        .grid-container img:nth-child(2n) {
            animation-delay: 0.4s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Efek Hover pada Section */
        .grid-container:hover {
            transition: background-color 0.3s ease;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>

    <!-- Awal navbar-->
    <?php include 'frontend/header/navbar.php'; ?>
    <!-- akhir navbar -->

    <!-- main -->
    <div class="container">
        <h3 class="text-center mt-4">Sistem Penanggulangan Bencana</h3>
        <div class="grid-container">

            <!-- Grid Item 1 -->
            <img src="frontend/Images/bnpb2.jpg" alt="Kegiatan Penanggulangan Bencana" style="height: 300px">
            <div class="text">
                <h5>Kelembagaan</h5>
                <p>
                    Secara formal, focal point lembaga pemerintah di tingkat pusat untuk penanggulangan bencana adalah
                    Badan Nasional Penanggulangan Bencana (BNPB).
                </p>
                <p>
                    Sedangkan focal point penanggulangan bencana di tingkat provinsi dan kabupaten atau kota adalah
                    Badan Penanggulangan Bencana Daerah (BPBD).
                </p>
                <p>
                    Dari sisi non formal, forum-forum baik di tingkat nasional dan lokal dibentuk untuk memperkuat
                    penyelenggaraan penanggulangan bencana di Indonesia.

                </p>
                <p>
                    Di tingkat nasional, terbentuk Platform Nasional (Planas) yang terdiri dari unsur masyarakat sipil,
                    dunia usaha, perguruan tinggi, media dan lembaga internasional.
                </p>
            </div>

            <!-- Grid Item 2 -->
            <div class="text">
                <h5>Legislasi</h5>
                <p>
                    Pemerintah telah menyusun Undang-Undang Nomor 24 Tahun 2007 tentang Penanggulangan Bencana yang
                    dilengkapi dengan
                    berbagai regulasi pendukung untuk memastikan kesiapan menghadapi bencana. Selain itu, terdapat
                    produk
                    hukum lain di bawah UU tersebut antara lain Peraturan Pemerintah, Peraturan Presiden, Peraturan
                    Kepala Badan serta peraturan daerah.
                </p>
                <p>
                    UU Penanggulangan Bencana

                    Undang-undang terkait penanggulangan bencana di Indonesia antara lain:
                <ul>
                    <li>
                        UU No. 24 Tahun 2007 tentang Penanggulangan Bencana.
                    </li>
                    <li>
                        UU No. 26 Tahun 2007 tentang Penataan Ruang.
                    </li>
                    <li>
                        UU No. 27 Tahun 2007 tentang Pengelolaan Wilayah Pesisir dan Pulau-pulau kecil.
                    </li>
                </ul>
                </p>
            </div>
            <img src="frontend/Images/legislasi.jpg" alt="Undang-Undang Penanggulangan Bencana" style="height: 300px;">


            <!-- Grid Item 3 -->
            <img src="frontend/Images/pendanaan.jpg" alt="Pendanaan Penanggulangan Bencana" style="height: 300px">
            <div class="text">
                <h5>Pendanaan</h5>
                <p>
                    Dengan berbagai kemungkinan yanng dapat terjadi dalam penanggulangan bencana, diperlukan dana yang
                    siap dipakai. Oleh karena itu, baik pemerintah, LSM, maupun masyarakat perlu mempersiapkan dana yang
                    cukup untuk
                    penanggulangan bencana.
                </p>
                <ul>
                    Berikut ini beberapa pendanaan yang terkait denan penanggulangan bencana di Indonesia:
                    <li>
                        Dana DIPA (APBN atau APBD)
                    </li>
                    <li>
                        Dana Kontijensi
                    </li>
                    <li>
                        Dana On-call
                    </li>
                    <li>
                        Dana Bantuan Sosial Berpola Hibah
                    </li>
                    <li>
                        Dana yang bersumber dari masyarakat
                    </li>
                    <li>
                        Dana dukungan komunitas internasional
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- akhir main -->

    <!-- Awal footer -->
    <?php include 'frontend/header/footer.php'; ?>
    <!-- akhir footer -->

    <script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/retina/retina.min.js"></script>
</body>

</html>