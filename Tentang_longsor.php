<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="frontend/Images/tanah longsor.jpg">
    <title>Tanah Longsor Warning Center</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.min.css">

    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;600&family=Poppins:wght@300;400;500&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="frontend/styles/main.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
        }

        .card-title {
            color: #2c3e50;
        }

        .card-body ul li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .card-body ul li i {
            font-size: 1.2rem;
            color: #17a2b8;
            margin-right: 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Awal navbar -->
    <?php include 'frontend/header/navbar.php'; ?>
    <!-- akhir navbar -->

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm">
                    <img src="frontend/Images/poster_mitigasi 2.jpg" class="card-img-top" alt="tanah longsor">
                    <div class="card-body">
                        <h5 class="card-title"><b>Lakukan Ini Jika Terjadi Tanah Longsor!</b></h5>
                        <p>Jika terjadi tanah longsor, segera lakukan langkah-langkah berikut:</p>
                        <ul>
                            <li><i class="fas fa-bullhorn"></i> Tetap tenang dan jangan panik.</li>
                            <li><i class="fas fa-table"></i> Berlindung di tempat yang aman, seperti di bawah meja.</li>
                            <li><i class="fas fa-tree"></i> Jauhi tempat berbahaya seperti tebing atau pohon besar.</li>
                            <li><i class="fas fa-window-close"></i> Hindari jendela atau pintu kaca.</li>
                            <li><i class="fas fa-level-up-alt"></i> Cari tempat yang lebih tinggi dan aman.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm">
                    <img src="frontend/Images/zzz.jpg" class="img-fluid" alt="Tsunami Warning">
                    <div class="card-body">
                        <p>
                            Dalam masa pra-Tanah Longsor, BMKG memberikan informasi peringatan dini yang dapat
                            mengurangi
                            risiko tanah longsor.
                            Getaran diklasifikasikan dengan skala MMI (<i>Modified Mercalli Intensity</i>):
                        </p>
                        <ul>
                            <li><b>Skala SIG BMKGI I:</b> Tidak dirasakan, hanya terekam oleh alat.</li>
                            <li><b>Skala SIG BMKGI II:</b> Dirasakan oleh banyak orang, tanpa kerusakan.</li>
                            <li><b>Skala SIG BMKGI III:</b> Kerusakan ringan seperti retak rambut pada dinding.</li>
                            <li><b>Skala SIG BMKGI IV:</b> Kerusakan signifikan pada bangunan sederhana.</li>
                            <li><b>Skala SIG BMKGI V:</b> Kerusakan berat pada struktur bangunan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Main Content -->

    <!-- Awal navbar -->
    <?php include 'frontend/header/footer.php'; ?>
    <!-- akhir navbar -->

    <!-- Scripts -->
    <script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/libraries/retina/retina.min.js"></script>
</body>

</html>