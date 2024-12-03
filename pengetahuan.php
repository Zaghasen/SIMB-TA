<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="frontend/Images/tanah longsor.jpg">
    <title>Tanah Longsor Warning Center</title>

    <!-- Combined Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&family=Poppins:wght@300;400&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/styles/main.css">

    <style>
        .centered-image {
            display: block;
            /* Centering the image */
            margin: 0 auto;
            /* Auto margin for horizontal centering */
            border-radius: 15px;
            /* Rounded corners */
            max-width: 100%;
            /* Responsive image */
            height: auto;
            /* Maintain aspect ratio */
        }

        .content {
            margin-top: 20px;
        }
    </style>
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php include 'frontend/header/navbar.php'; ?>
    <!-- Akhir Navbar -->

    <!-- Main Content -->
    <div class="container content">
        <div class="badan-detail row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="frontend/Images/bnpb.jpg" class="card-img-top" alt="BNPB Image">
                    <div class="card-body">
                        <small>
                            Data UNISDR menyebutkan, dalam paparan terhadap penduduk atau jumlah manusia yang ada di
                            daerah yang mungkin kehilangan nyawa karena bencana, risiko bencana yang dihadapi Indonesia
                            sangatlah tinggi.
                        </small>
                        <br><br>
                        <small>
                            Riset World Risk Report (WRR) tahun 2023 mengklaim bahwa sejak tahun 2022 telah terjadi
                            total 421 bencana alam di seluruh dunia. Jumlah ini meningkat 23% dibandingkan tahun 2000.
                            Dari total seluruh bencana alam tersebut, 80% di antaranya tergolong tren bencana yang
                            berkaitan dengan perubahan iklim. Hal ini berdampak pada pola dan fenomena cuaca ekstrem
                            tidak menentu, menjadikan Indonesia negara yang paling rentan terhadap bencana alam
                            setelah Filipina.
                        </small>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-12">
                <img src="frontend/Images/crousel3.jpg" class="centered-image" alt="Carousel Image">
                <br>
                <h2>Definisi Bencana</h2>
                <p>Undang-undang Nomor 24 Tahun 2007 Tentang Penanggulangan Bencana menyebutkan definisi bencana sebagai
                    berikut:</p>
                <p><strong>Bencana</strong> adalah peristiwa atau rangkaian peristiwa yang mengancam dan mengganggu
                    kehidupan dan penghidupan masyarakat yang disebabkan oleh faktor alam, nonalam, atau manusia,
                    sehingga mengakibatkan korban jiwa, kerusakan lingkungan, kerugian harta benda, dan dampak
                    psikologis.</p>

                <h3>Jenis-jenis Bencana</h3>
                <p><strong>Bencana alam</strong> adalah bencana yang diakibatkan oleh peristiwa alam seperti gempa bumi,
                    tsunami, gunung meletus, banjir, kekeringan, angin topan, dan tanah longsor.</p>
                <p><strong>Bencana nonalam</strong> adalah bencana yang diakibatkan oleh peristiwa nonalam seperti gagal
                    teknologi, gagal modernisasi, epidemi, dan wabah penyakit.</p>
                <p><strong>Bencana sosial </strong> adalah bencana yang diakibatkan oleh peristiwa yang disebabkan oleh
                    manusia, termasuk konflik sosial antarkelompok atau antarkomunitas masyarakat, dan teror.</p>
                <h3>Tanah Longsor</h3>
                <p><strong>Tanah Longsor</strong> adalah gerakan massa tanah atau batuan yang menuruni atau keluar
                    lereng akibat terganggunya kestabilan tanah atau batuan penyusun lereng. Tanah longsor merupakan
                    bencana alam yang sering terjadi di Indonesia, baik di daerah dataran rendah maupun pegunungan.
                    Faktor-faktor penyebab tanah longsor meliputi geologi, geomorfologi, hidrologi, vegetasi, iklim,
                    manusia, dan gempa bumi.</p>
            </div>
        </div>
    </div>
    <!-- Akhir Main Content -->

    <!-- Footer -->
    <?php include 'frontend/header/footer.php'; ?>
    <!-- Akhir footer -->

    <script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/retina/retina.min.js"></script>
</body>

</html>