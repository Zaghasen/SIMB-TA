<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="frontend/Images/tsunami.png">
    <title>Disaster Statistics</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map {
            height: 600px;
            width: 100%;
            margin-top: 20px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <!-- Navbar -->
    <?php include 'frontend/header/navbar.php'; ?>

    <div class="main-item container border-bottom">
        <div class="row align-items-center pt-4">
            <div class="col-auto text-gray-500 font-weight-light">
                <h3><b>Data Bencana Alam di Indonesia</b></h3>
            </div>
        </div>
    </div>
    <br>

    <!-- Year Filter -->
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <label for="yearFilter">Filter by Year:</label>
                <select id="yearFilter" class="form-control">
                    <option value="all">All Years</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>

                    <!-- Add more years as needed -->
                </select>
            </div>
            <div id="map"></div>
        </div>
    </div>
    <br>

    <!-- Map Section -->

    <br>

    <!-- Disaster Data Table Section -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-15">
                    <div class="card card-outline card-danger">
                        <div class="card-header">
                            <strong>Statistik Bencana Alam</strong>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Wilayah</th>
                                            <th>Bencana</th>
                                            <th>Meninggal</th>
                                            <th>Hilang</th>
                                            <th>Terluka</th>
                                            <th>Menderita</th>
                                            <th>Mengungsi</th>
                                            <th>Rumah Rusak Berat</th>
                                            <th>Rumah Rusak Sedang</th>
                                            <th>Rumah Rusak Ringan</th>
                                            <th>Rumah Terendam</th>
                                            <th>Fasilitas Pendidikan</th>
                                            <th>Fasilitas Kesehatan</th>
                                            <th>Fasilitas Peribadatan</th>
                                            <th>Fasilitas Umum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $disasterData = [
                                            ["2024", "Aceh", 1, 4, 0, 0, 31, 35, 9, 10, 0, 0, 0, 0, 0, 0],
                                            ["2024", "Sumatera Utara", 4, 5, 0, 13, 1115, 173, 4, 0, 0, 0, 0, 0, 0, 0],
                                            ["2024", "Sumatera Barat", 6, 8, 0, 10, 60, 3608, 8, 0, 5, 0, 0, 0, 0, 0],
                                            ["2024", "Sumatera Selatan", 1, 0, 0, 0, 67, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                                            ["2024", "Kepulauan Riau", 1, 0, 0, 0, 170, 0, 1, 0, 0, 0, 0, 0, 0, 0],
                                            ["2024", "Jawa Barat", 38, 10, 0, 13, 3390, 688, 57, 107, 157, 0, 1, 0, 5, 0],
                                            ["2024", "Jawa Tengah", 17, 15, 12, 10, 2224, 530, 104, 48, 51, 0, 1, 0, 2, 0],
                                            ["2024", "Jawa Timur", 6, 10, 0, 2, 6695, 210, 21, 16, 17, 0, 0, 0, 0, 0],
                                            ["2024", "Banten", 2, 0, 0, 0, 69, 0, 5, 2, 6, 0, 0, 0, 0, 0],
                                            ["2024", "Bali", 3, 3, 0, 4, 10, 0, 0, 0, 0, 0, 1, 0, 0, 0],
                                            ["2024", "Nusa Tenggara Barat", 1, 0, 0, 0, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                                            ["2024", "Nusa Tenggara Timur", 4, 9, 0, 0, 885, 0, 2, 1, 0, 0, 0, 0, 0, 0],
                                            ["2024", "Kalimantan Utara", 1, 0, 0, 0, 1166, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                                            ["2024", "Sulawesi Tengah", 1, 0, 0, 0, 84, 90, 0, 0, 0, 0, 0, 0, 0, 0],
                                            ["2024", "Sulawesi Selatan", 4, 28, 0, 16, 109, 104, 9, 1, 24, 0, 0, 0, 1, 0],
                                            ["2024", "Gorontalo", 2, 28, 15, 8, 325, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                                            ["2024", "Sulawesi Barat", 2, 0, 0, 1, 6390, 289, 46, 24, 173, 0, 0, 0, 0, 0],
                                            ["2024", "Maluku", 1, 0, 0, 0, 143, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                                            ["2024", "Papua Barat", 1, 4, 0, 1, 0, 1080, 8, 0, 0, 0, 0, 0, 0, 0],
                                            ["2024", "Papua Pegunungan", 3, 0, 0, 0, 3021, 1659, 1146, 0, 44, 0, 21, 5, 1, 0],

                                            ["2023", "Aceh", 9, 1, 3, 0, 121, 21, 1, 2, 1, 0, 1, 0, 0, 0],
                                            ["2023", "Sumatera Utara", 19, 6, 2, 25, 136, 18, 8, 4, 4, 0, 0, 0, 0, 0],
                                            ["2023", "Sumatera Barat", 14, 3, 0, 615, 1245, 271, 19, 0, 229, 0, 3, 1, 2, 0],
                                            ["2023", "Riau", 3, 0, 0, 0, 28, 0, 8, 0, 13, 0, 0, 0, 1, 0],
                                            ["2023", "Jambi", 4, 0, 0, 0, 0, 0, 7, 0, 1, 0, 0, 0, 0, 0],
                                            ["2023", "Sumatera Selatan", 3, 0, 0, 0, 13, 0, 8, 0, 1, 0, 0, 0, 0, 0],
                                            ["2023", "Bengkulu", 6, 1, 0, 0, 10, 0, 0, 1, 0, 0, 0, 0, 0, 0],
                                            ["2023", "Lampung", 3, 3, 6, 0, 0, 0, 0, 1, 3, 0, 0, 0, 0, 0],
                                            ["2023", "Kepulauan Bangka Belitung", 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                                            ["2023", "Kepulauan Riau", 2, 44, 4, 4, 0, 2385, 100, 0, 0, 0, 0, 0, 0, 0],
                                            ["2023", "DKI Jakarta", 7, 1, 0, 2, 2, 0, 7, 2, 0, 0, 0, 0, 0, 0],
                                            ["2023", "Jawa Barat", 185, 24, 1, 37, 4700, 1202, 149, 358, 337, 0, 9, 1, 7, 60],
                                            ["2023", "Jawa Tengah", 125, 15, 1, 52, 1778, 730, 66, 71, 128, 0, 1, 0, 3, 0],
                                            ["2023", "DI Yogyakarta", 24, 0, 0, 0, 148, 59, 1, 19, 41, 0, 0, 0, 1, 0],
                                            ["2023", "Jawa Timur", 5, 2, 0, 2, 213, 0, 28, 4, 9, 0, 0, 0, 1, 0],
                                            ["2023", "Banten", 1, 0, 0, 0, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0],
                                            ["2023", "Bali", 23, 8, 0, 11, 10, 6, 16, 17, 4, 0, 1, 1, 7, 0],
                                            ["2023", "Nusa Tenggara Barat", 24, 1, 0, 0, 177, 0, 7, 20, 8, 0, 0, 0, 1, 0],
                                            ["2023", "Nusa Tenggara Timur", 10, 1, 0, 2, 161, 4, 2, 0, 18, 0, 0, 0, 1, 0],
                                            ["2023", "Kalimantan Barat", 2, 0, 0, 0, 185, 0, 0, 0, 1, 0, 0, 0, 0, 0],
                                            ["2023", "Kalimantan Tengah", 3, 0, 0, 0, 13, 0, 3, 0, 0, 0, 0, 0, 0, 0],
                                            ["2023", "Kalimantan Selatan", 8, 0, 0, 0, 257, 2, 2, 2, 9, 0, 0, 0, 0, 0],
                                            ["2023", "Kalimantan Timur", 26, 1, 0, 0, 137, 0, 17, 10, 9, 0, 0, 0, 0, 0],
                                            ["2023", "Kalimantan Utara", 14, 0, 0, 0, 186, 10, 0, 8, 6, 0, 0, 0, 0, 0],
                                            ["2023", "Sulawesi Tengah", 5, 10, 0, 4, 2, 0, 0, 1, 0, 0, 0, 0, 0, 0],
                                            ["2023", "Sulawesi Selatan", 32, 0, 0, 3, 2747, 143, 29, 4, 11, 0, 1, 0, 0, 0],
                                            ["2023", "Sulawesi Barat", 17, 2, 0, 1, 0, 184, 2, 11, 28, 0, 0, 0, 0, 0],
                                            ["2023", "Maluku", 9, 0, 0, 0, 183, 5, 1, 0, 18, 0, 0, 0, 0, 0],
                                            ["2023", "Maluku Utara", 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0],
                                            ["2023", "Papua", 2, 0, 0, 0, 10, 8, 0, 0, 2, 0, 0, 0, 0, 0],
                                            ["2023", "Papua Barat", 1, 0, 0, 0, 5, 0, 0, 1, 0, 0, 0, 0, 0, 0],
                                            ["2023", "Papua Pegunungan", 1, 3, 0, 6, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0],

                                            ["2022", "Aceh", 9, 2, 0, 0, 1058, 15, 7, 5, 6, 0, 0, 1, 0, 0],
                                            ["2022", "Sumatera Utara", 6, 1, 0, 0, 40, 0, 1, 0, 4, 0, 1, 0, 0, 0],
                                            ["2022", "Sumatera Barat", 7, 0, 0, 1, 107, 0, 3, 1, 0, 0, 1, 0, 0, 0],
                                            ["2022", "Riau", 6, 0, 0, 0, 240, 0, 15, 0, 19, 0, 0, 0, 0, 0],
                                            ["2022", "Sumatera Selatan", 9, 0, 0, 4, 135, 0, 8, 4, 14, 0, 0, 0, 0, 0],
                                            ["2022", "Bengkulu", 2, 0, 0, 0, 5350, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                                            ["2022", "Lampung", 7, 4, 0, 0, 10, 0, 2, 1, 3, 0, 0, 0, 0, 0],
                                            ["2022", "DKI Jakarta", 3, 0, 0, 0, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                                            ["2022", "Jawa Barat", 305, 22, 0, 43, 7790, 897, 233, 383, 371, 0, 3, 1, 8, 5],
                                            ["2022", "Jawa Tengah", 141, 13, 0, 18, 6599, 2119, 199, 224, 255, 0, 10, 0, 6, 6],
                                            ["2022", "DI Yogyakarta", 4, 0, 0, 2, 37, 0, 0, 0, 1, 0, 0, 0, 0, 0],
                                            ["2022", "Jawa Timur", 56, 4, 0, 6, 17188, 272, 19, 40, 70, 0, 0, 0, 1, 1],
                                            ["2022", "Banten", 2, 0, 0, 0, 12, 70, 0, 0, 38, 0, 0, 0, 0, 0],
                                            ["2022", "Bali", 15, 7, 0, 9, 175, 0, 6, 4, 1, 0, 0, 0, 2, 0],
                                            ["2022", "Nusa Tenggara Barat", 2, 0, 0, 1, 5, 0, 0, 2, 0, 0, 0, 0, 0, 0],
                                            ["2022", "Nusa Tenggara Timur", 3, 0, 0, 3, 99, 0, 1, 0, 2, 0, 0, 0, 0, 0],
                                            ["2022", "Kalimantan Barat", 2, 0, 0, 0, 46, 0, 0, 0, 1, 0, 0, 0, 0, 0],
                                            ["2022", "Kalimantan Selatan", 3, 9, 2, 7, 11, 0, 10, 3, 0, 0, 0, 0, 0, 0],
                                            ["2022", "Kalimantan Timur", 10, 0, 0, 0, 135, 0, 0, 1, 8, 0, 0, 0, 0, 0],
                                            ["2022", "Kalimantan Utara", 5, 1, 0, 0, 2201, 0, 7, 0, 0, 0, 0, 0, 0, 0],
                                            ["2022", "Sulawesi Utara", 7, 1, 0, 0, 251, 0, 2, 2, 2, 0, 0, 0, 0, 0],
                                            ["2022", "Sulawesi Tengah", 2, 0, 0, 0, 11, 0, 1, 0, 0, 0, 0, 0, 0, 0],
                                            ["2022", "Sulawesi Selatan", 19, 16, 5, 2, 1487, 173, 19, 9, 17, 22, 1, 0, 0, 0],
                                            ["2022", "Sulawesi Barat", 17, 2, 0, 1, 0, 184, 2, 11, 28, 0, 0, 0, 0, 0],
                                            ["2022", "Maluku", 9, 0, 0, 0, 183, 5, 1, 0, 18, 0, 0, 0, 0, 0],
                                            ["2022", "Maluku Utara", 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0],
                                        ];



                                        // Variabel untuk menyimpan tahun yang difilter (default: semua tahun).
                                        $filterYear = isset($_GET['year']) ? $_GET['year'] : null;

                                        // Array untuk menyimpan data gabungan.
                                        $aggregatedData = [];

                                        // Proses penggabungan data.
                                        foreach ($disasterData as $row) {
                                            $year = $row[0];
                                            $region = $row[1];

                                            // Abaikan data jika tahun tidak sesuai filter.
                                            if ($filterYear && $filterYear != $year) {
                                                continue;
                                            }

                                            // Jika wilayah belum ada, tambahkan data awalnya.
                                            if (!isset($aggregatedData[$region])) {
                                                $aggregatedData[$region] = $row;
                                            } else {
                                                // Lakukan penjumlahan untuk kolom selain tahun dan wilayah.
                                                for ($i = 2; $i < count($row); $i++) {
                                                    $aggregatedData[$region][$i] += $row[$i];
                                                }
                                            }
                                        }

                                        // Tampilkan data dalam tabel.
                                        foreach ($aggregatedData as $region => $data) {
                                            echo "<tr data-year='{$data[0]}'>";
                                            for ($i = 1; $i < count($data); $i++) {
                                                echo "<td>{$data[$i]}</td>";
                                            }
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container my-4">
        <h1>Disaster Statistics by Province</h1>

        <!-- Dropdown for year selection -->
        <label>Select Year:</label><br>
        <input type="radio" id="all" name="year" value="all" onclick="updateChart()" checked>
        <label for="all">All Year</label>

        <input type="radio" id="2024" name="year" value="2024" onclick="updateChart()">
        <label for="2024">2024</label>

        <input type="radio" id="2023" name="year" value="2023" onclick="updateChart()">
        <label for="2023">2023</label>

        <input type="radio" id="2022" name="year" value="2022" onclick="updateChart()">
        <label for="2022">2022</label><br><br>


        <!-- Chart canvas -->
        <canvas id="dataChart" width="500" height="200" class="mt-8"></canvas>
    </div>

    <!-- Footer -->
    <footer class="section-footer mt-4 mb-4 border-top">
        <div class="container-fluid border-top">
            <div class="row justify-content-center align-items-center pt-3">
                <div class="col-auto text-gray-500 font-weight-light">
                    <a href="https://www.bmkg.go.id/"><b>Sumber Data : BNPB</b></a>
                </div>
                <div class="row justify-content-center align-items-center pt-4">
                    <div class="col-auto text-gray-500 font-weight-light">
                        2022 Copyright Tanah Longsor Center • All rights reserved • Made in Yogyakarta
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="frontend/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/retina/retina.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Initialize map
        var map = L.map('map').setView([-2.5489, 118.0149], 5);  // Center of Indonesia

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Disaster data with coordinates for each region
        var disasterLocations = [
            { year: "2024", name: "Sumatera Utara", coords: [3.5852, 98.6756], count: 3, dead: 4, lost: 0, luka: 13 },
            { year: "2024", name: "Sumatera Barat", coords: [-0.9471, 100.4172], count: 4, dead: 6, lost: 0, luka: 10 },
            { year: "2024", name: "Sumatera Selatan", coords: [-3.3194, 104.9147], count: 1, dead: 0, lost: 0, luka: 0 },
            { year: "2024", name: "Jawa Barat", coords: [-6.9039, 107.6186], count: 36, dead: 11, lost: 0, luka: 1 },
            { year: "2024", name: "Jawa Tengah", coords: [-7.566, 110.831], count: 12, dead: 12, lost: 2, luka: 5 },
            { year: "2024", name: "Jawa Timur", coords: [-7.2504, 112.7688], count: 12, dead: 27, lost: 0, luka: 6 },
            { year: "2024", name: "Banten", coords: [-6.4058, 106.0640], count: 2, dead: 0, lost: 0, luka: 0 },
            { year: "2024", name: "Bali", coords: [-8.3405, 115.0920], count: 2, dead: 3, lost: 0, luka: 3 },
            { year: "2024", name: "Nusa Tenggara Barat", coords: [-8.6529, 117.3616], count: 1, dead: 0, lost: 0, luka: 0 },
            { year: "2024", name: "Nusa Tenggara Timur", coords: [-10.1772, 123.6070], count: 8, dead: 17, lost: 0, luka: 0 },
            { year: "2024", name: "Kalimantan Utara", coords: [3.5932, 117.6325], count: 20, dead: 1, lost: 0, luka: 0 },
            { year: "2024", name: "Sulawesi Tengah", coords: [-0.8984, 119.8707], count: 1, dead: 0, lost: 0, luka: 0 },
            { year: "2024", name: "Sulawesi Selatan", coords: [-5.1477, 119.4327], count: 8, dead: 71, lost: 0, luka: 26 },
            { year: "2024", name: "Gorontalo", coords: [0.6994, 122.4467], count: 4, dead: 30, lost: 15, luka: 8 },
            { year: "2024", name: "Sulawesi Barat", coords: [-2.7278, 119.3644], count: 4, dead: 0, lost: 0, luka: 1 },
            { year: "2024", name: "Maluku", coords: [-3.2385, 130.1453], count: 1, dead: 0, lost: 0, luka: 0 },
            { year: "2024", name: "Papua Barat", coords: [-2.5, 133.8], count: 1, dead: 4, lost: 0, luka: 0 },
            { year: "2024", name: "Papua Pegunungan", coords: [-4.2699, 138.0804], count: 4, dead: 0, lost: 0, luka: 0 },//
            { year: "2023", name: "Aceh", coords: [4.6951, 96.7494], count: 9, dead: 1, lost: 3, luka: 0 },
            { year: "2023", name: "Sumatera Utara", coords: [3.5852, 98.6756], count: 19, dead: 6, lost: 2, luka: 25 },
            { year: "2023", name: "Sumatera Barat", coords: [-0.9471, 100.4172], count: 14, dead: 3, lost: 0, luka: 615 },
            { year: "2023", name: "Riau", coords: [0.5071, 101.4478], count: 3, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Jambi", coords: [-1.4852, 102.4381], count: 4, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Sumatera Selatan", coords: [-3.3194, 104.9147], count: 3, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Bengkulu", coords: [-3.7928, 102.2668], count: 6, dead: 1, lost: 0, luka: 0 },
            { year: "2023", name: "Lampung", coords: [-4.5586, 105.4068], count: 3, dead: 3, lost: 6, luka: 0 },
            { year: "2023", name: "Kepulauan Bangka Belitung", coords: [-2.7410, 106.4406], count: 1, dead: 1, lost: 0, luka: 0 },
            { year: "2023", name: "Kepulauan Riau", coords: [3.9901, 108.1881], count: 2, dead: 44, lost: 4, luka: 4 },
            { year: "2023", name: "DKI Jakarta", coords: [-6.2088, 106.8456], count: 7, dead: 1, lost: 0, luka: 2 },
            { year: "2023", name: "Jawa Barat", coords: [-6.9039, 107.6186], count: 185, dead: 24, lost: 1, luka: 37 },
            { year: "2023", name: "Jawa Tengah", coords: [-7.566, 110.831], count: 125, dead: 15, lost: 1, luka: 52 },
            { year: "2023", name: "Daerah Istimewa Yogyakarta", coords: [-7.7972, 110.3695], count: 24, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Jawa Timur", coords: [-7.2504, 112.7688], count: 5, dead: 2, lost: 0, luka: 2 },
            { year: "2023", name: "Banten", coords: [-6.4058, 106.0640], count: 1, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Bali", coords: [-8.3405, 115.0920], count: 23, dead: 8, lost: 0, luka: 11 },
            { year: "2023", name: "Nusa Tenggara Barat", coords: [-8.6529, 117.3616], count: 24, dead: 1, lost: 0, luka: 0 },
            { year: "2023", name: "Nusa Tenggara Timur", coords: [-10.1772, 123.6070], count: 10, dead: 1, lost: 0, luka: 2 },
            { year: "2023", name: "Kalimantan Barat", coords: [-0.3152, 109.4785], count: 2, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Kalimantan Tengah", coords: [-1.6815, 113.3824], count: 3, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Kalimantan Selatan", coords: [-3.0926, 115.2838], count: 8, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Kalimantan Timur", coords: [0.5387, 116.4194], count: 4, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Kalimantan Utara", coords: [3.5932, 117.6325], count: 14, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Sulawesi Utara", coords: [1.3968, 124.9375], count: 2, dead: 5, lost: 0, luka: 3 },
            { year: "2023", name: "Sulawesi Tengah", coords: [-0.8984, 119.8707], count: 5, dead: 10, lost: 0, luka: 4 },
            { year: "2023", name: "Sulawesi Selatan", coords: [-5.1477, 119.4327], count: 32, dead: 0, lost: 0, luka: 3 },
            { year: "2023", name: "Sulawesi Barat", coords: [-2.7278, 119.3644], count: 17, dead: 2, lost: 0, luka: 1 },
            { year: "2023", name: "Maluku", coords: [-3.2385, 130.1453], count: 9, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Maluku Utara", coords: [0.8, 127.8358], count: 1, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Papua", coords: [-4.2699, 138.0804], count: 2, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Papua Barat", coords: [-2.5, 133.8], count: 1, dead: 0, lost: 0, luka: 0 },
            { year: "2023", name: "Papua Pegunungan", coords: [-4.1361, 139.1747], count: 1, dead: 3, lost: 0, luka: 6 },

            { year: "2022", name: "Aceh", coords: [4.6951, 96.7494], count: 9, dead: 2, lost: 0, luka: 0 },
            { year: "2022", name: "Sumatera Utara", coords: [3.5852, 98.6756], count: 6, dead: 1, lost: 0, luka: 0 },
            { year: "2022", name: "Sumatera Barat", coords: [-0.9471, 100.4172], count: 7, dead: 0, lost: 0, luka: 1 },
            { year: "2022", name: "Riau", coords: [0.5071, 101.4478], count: 6, dead: 0, lost: 0, luka: 0 },
            { year: "2022", name: "Sumatera Selatan", coords: [-1.4852, 102.4381], count: 9, dead: 0, lost: 0, luka: 4 },
            { year: "2022", name: "Bengkulu", coords: [-3.7928, 102.2668], count: 2, dead: 0, lost: 0, luka: 0 },
            { year: "2022", name: "Lampung", coords: [-4.5586, 105.4068], count: 7, dead: 4, lost: 0, luka: 0 },
            { year: "2022", name: "DKI Jakarta", coords: [-6.2088, 106.8456], count: 3, dead: 0, lost: 0, luka: 0 },
            { year: "2022", name: "Jawa Barat", coords: [-6.9039, 107.6186], count: 305, dead: 22, lost: 0, luka: 43 },
            { year: "2022", name: "Jawa Tengah", coords: [-7.566, 110.831], count: 141, dead: 13, lost: 0, luka: 18 },
            { year: "2022", name: "Daerah Istimewa Yogyakarta", coords: [-7.7972, 110.3695], count: 4, dead: 0, lost: 0, luka: 2 },
            { year: "2022", name: "Jawa Timur", coords: [-7.2504, 112.7688], count: 56, dead: 4, lost: 0, luka: 6 },
            { year: "2022", name: "Banten", coords: [-6.4058, 106.0640], count: 2, dead: 0, lost: 0, luka: 0 },
            { year: "2022", name: "Bali", coords: [-8.3405, 115.0920], count: 15, dead: 7, lost: 0, luka: 9 },
            { year: "2022", name: "Nusa Tenggara Barat", coords: [-8.6529, 117.3616], count: 2, dead: 0, lost: 0, luka: 1 },
            { year: "2022", name: "Nusa Tenggara Timur", coords: [-10.1772, 123.6070], count: 3, dead: 0, lost: 0, luka: 3 },
            { year: "2022", name: "Kalimantan Barat", coords: [-0.3152, 109.4785], count: 2, dead: 0, lost: 0, luka: 0 },
            { year: "2022", name: "Kalimantan Selatan", coords: [-3.0926, 115.2838], count: 3, dead: 9, lost: 2, luka: 7 },
            { year: "2022", name: "Kalimantan Timur", coords: [0.5387, 116.4194], count: 10, dead: 0, lost: 0, luka: 0 },
            { year: "2022", name: "Kalimantan Utara", coords: [3.5932, 117.6325], count: 5, dead: 1, lost: 0, luka: 0 },
            { year: "2022", name: "Sulawesi Utara", coords: [1.3968, 124.9375], count: 7, dead: 1, lost: 0, luka: 0 },
            { year: "2022", name: "Sulawesi Tengah", coords: [-0.8984, 119.8707], count: 2, dead: 0, lost: 0, luka: 0 },
            { year: "2022", name: "Sulawesi Selatan", coords: [-5.1477, 119.4327], count: 19, dead: 16, lost: 5, luka: 2 },
            { year: "2022", name: "Sulawesi Tenggara", coords: [-4.1299, 122.0883], count: 1, dead: 0, lost: 0, luka: 0 },
            { year: "2022", name: "Sulawesi Barat", coords: [-2.7278, 119.3644], count: 4, dead: 2, lost: 0, luka: 13 },
            { year: "2022", name: "Maluku", coords: [-3.2385, 130.1453], count: 1, dead: 0, lost: 0, luka: 0 },
            { year: "2022", name: "Maluku Utara", coords: [0.8, 127.8358], count: 2, dead: 0, lost: 0, luka: 0 },

        ];


        // Variable to hold marker references
        var markers = [];

        // Function to update map markers
        function updateMapMarkers(selectedYear) {
            // Remove existing markers
            markers.forEach(marker => map.removeLayer(marker));
            markers = [];

            // Prepare filtered and combined data
            let filteredData = disasterLocations;

            if (selectedYear !== "all") {
                filteredData = disasterLocations.filter(location => location.year === selectedYear);
            } else {
                // Combine data for "all" years
                const combinedData = {};
                disasterLocations.forEach(location => {
                    if (!combinedData[location.name]) {
                        combinedData[location.name] = {
                            name: location.name,
                            coords: location.coords,
                            count: 0,
                            dead: 0,
                            lost: 0,
                            luka: 0
                        };
                    }
                    combinedData[location.name].count += location.count;
                    combinedData[location.name].dead += location.dead;
                    combinedData[location.name].lost += location.lost;
                    combinedData[location.name].luka += location.luka;
                });

                // Convert object to array
                filteredData = Object.values(combinedData);
            }

            // Add markers to the map
            filteredData.forEach(location => {
                const marker = L.circleMarker(location.coords, {
                    color: 'red',
                    fillColor: '#f03',
                    fillOpacity: 0.5,
                    radius: 7
                }).addTo(map).bindPopup(
                    `<b>${location.name}</b>
            <br>Total Bencana: ${location.count}
            <br>Jumlah Korban: ${location.dead + location.lost + location.luka}
            <br>Korban Meninggal: ${location.dead}
            <br>Korban Hilang: ${location.lost}
            <br>Korban Terluka: ${location.luka}`
                );

                // Add marker to markers array
                markers.push(marker);
            });
        }

        // Initial load of all markers
        updateMapMarkers("all");

        // Event listener for year filter dropdown
        document.getElementById('yearFilter').addEventListener('change', function () {
            const selectedYear = this.value;

            // Update table rows based on selected year
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach(row => {
                if (selectedYear === 'all' || row.getAttribute('data-year') === selectedYear) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });

            // Update map markers based on selected year
            updateMapMarkers(selectedYear);
        });

    </script>
    <script>
        const data2024 = [
            { wilayah: "Sumatera Utara", bencana: 3, meninggal: 4, hilang: 0, terluka: 13, mengungsi: 0, rusakBerat: 1, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sumatera Barat", bencana: 4, meninggal: 6, hilang: 0, terluka: 10, mengungsi: 50, rusakBerat: 6, rusakSedang: 0, rusakRingan: 5, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sumatera Selatan", bencana: 1, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Jawa Barat", bencana: 36, meninggal: 11, hilang: 0, terluka: 1, mengungsi: 365, rusakBerat: 60, rusakSedang: 125, rusakRingan: 237, pendidikan: 1, kesehatan: 0, peribadatan: 7, umum: 0 },
            { wilayah: "Jawa Timur", bencana: 12, meninggal: 27, hilang: 0, terluka: 6, mengungsi: 420, rusakBerat: 31, rusakSedang: 32, rusakRingan: 34, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Banten", bencana: 2, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 5, rusakSedang: 2, rusakRingan: 6, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "bali", bencana: 2, meninggal: 3, hilang: 0, terluka: 3, mengungsi: 0, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Nusa Tenggara barat", bencana: 1, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Nusa Tenggara Timur", bencana: 8, meninggal: 17, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 4, rusakSedang: 1, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sulawesi Tengah", bencana: 1, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 90, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sulawesi Selatan", bencana: 8, meninggal: 71, hilang: 0, terluka: 26, mengungsi: 282, rusakBerat: 25, rusakSedang: 2, rusakRingan: 48, pendidikan: 0, kesehatan: 0, peribadatan: 2, umum: 0 },
            { wilayah: "Gorontalo", bencana: 4, meninggal: 30, hilang: 15, terluka: 8, mengungsi: 0, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sulawesi Barat", bencana: 4, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 289, rusakBerat: 46, rusakSedang: 24, rusakRingan: 173, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Maluku", bencana: 1, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Papua barat", bencana: 1, meninggal: 4, hilang: 0, terluka: 1, mengungsi: 1080, rusakBerat: 8, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Papua Pegunungan", bencana: 4, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 1659, rusakBerat: 2279, rusakSedang: 0, rusakRingan: 44, pendidikan: 21, kesehatan: 5, peribadatan: 1, umum: 0 },


            // Continue for all provinces...
        ];
        const data2023 = [

            { wilayah: "Aceh", bencana: 9, meninggal: 1, hilang: 3, terluka: 0, mengungsi: 121, rusakBerat: 21, rusakSedang: 1, rusakRingan: 2, pendidikan: 1, kesehatan: 0, peribadatan: 1, umum: 0 },
            { wilayah: "Sumatera Utara", bencana: 19, meninggal: 6, hilang: 2, terluka: 25, mengungsi: 136, rusakBerat: 18, rusakSedang: 8, rusakRingan: 4, pendidikan: 4, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sumatera Barat", bencana: 14, meninggal: 3, hilang: 0, terluka: 615, mengungsi: 1245, rusakBerat: 271, rusakSedang: 19, rusakRingan: 0, pendidikan: 229, kesehatan: 0, peribadatan: 3, umum: 1 },
            { wilayah: "Riau", bencana: 3, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 28, rusakBerat: 0, rusakSedang: 8, rusakRingan: 0, pendidikan: 13, kesehatan: 0, peribadatan: 0, umum: 1 },
            { wilayah: "Jambi", bencana: 4, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 0, rusakSedang: 7, rusakRingan: 0, pendidikan: 1, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sumatera Selatan", bencana: 3, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 13, rusakBerat: 0, rusakSedang: 8, rusakRingan: 0, pendidikan: 1, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Bengkulu", bencana: 6, meninggal: 1, hilang: 0, terluka: 0, mengungsi: 10, rusakBerat: 0, rusakSedang: 0, rusakRingan: 1, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Lampung", bencana: 3, meninggal: 3, hilang: 6, terluka: 0, mengungsi: 0, rusakBerat: 0, rusakSedang: 0, rusakRingan: 1, pendidikan: 3, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Kepulauan Bangka Belitung", bencana: 1, meninggal: 1, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Kepulauan Riau", bencana: 2, meninggal: 44, hilang: 4, terluka: 4, mengungsi: 0, rusakBerat: 2385, rusakSedang: 100, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "DKI Jakarta", bencana: 7, meninggal: 1, hilang: 0, terluka: 2, mengungsi: 2, rusakBerat: 0, rusakSedang: 7, rusakRingan: 2, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Jawa Barat", bencana: 185, meninggal: 24, hilang: 1, terluka: 37, mengungsi: 4700, rusakBerat: 1202, rusakSedang: 149, rusakRingan: 358, pendidikan: 337, kesehatan: 0, peribadatan: 9, umum: 1 },
            { wilayah: "Jawa Tengah", bencana: 125, meninggal: 15, hilang: 1, terluka: 52, mengungsi: 1778, rusakBerat: 730, rusakSedang: 66, rusakRingan: 71, pendidikan: 128, kesehatan: 0, peribadatan: 1, umum: 0 },
            { wilayah: "DI Yogyakarta", bencana: 24, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 148, rusakBerat: 59, rusakSedang: 1, rusakRingan: 19, pendidikan: 41, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Jawa Timur", bencana: 5, meninggal: 2, hilang: 0, terluka: 2, mengungsi: 213, rusakBerat: 0, rusakSedang: 28, rusakRingan: 4, pendidikan: 9, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Banten", bencana: 1, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 14, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Bali", bencana: 23, meninggal: 8, hilang: 0, terluka: 11, mengungsi: 10, rusakBerat: 6, rusakSedang: 16, rusakRingan: 17, pendidikan: 4, kesehatan: 0, peribadatan: 1, umum: 1 },
            { wilayah: "Nusa Tenggara Barat", bencana: 24, meninggal: 1, hilang: 0, terluka: 0, mengungsi: 177, rusakBerat: 0, rusakSedang: 7, rusakRingan: 20, pendidikan: 8, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Nusa Tenggara Timur", bencana: 10, meninggal: 1, hilang: 0, terluka: 2, mengungsi: 161, rusakBerat: 4, rusakSedang: 2, rusakRingan: 0, pendidikan: 18, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Kalimantan Barat", bencana: 2, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 185, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 1, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Kalimantan Tengah", bencana: 3, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 13, rusakBerat: 0, rusakSedang: 3, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Kalimantan Selatan", bencana: 8, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 257, rusakBerat: 2, rusakSedang: 2, rusakRingan: 2, pendidikan: 9, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Kalimantan Timur", bencana: 26, meninggal: 1, hilang: 0, terluka: 0, mengungsi: 137, rusakBerat: 0, rusakSedang: 17, rusakRingan: 10, pendidikan: 9, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Kalimantan Utara", bencana: 14, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 186, rusakBerat: 10, rusakSedang: 0, rusakRingan: 8, pendidikan: 6, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sulawesi Tengah", bencana: 5, meninggal: 10, hilang: 0, terluka: 4, mengungsi: 2, rusakBerat: 0, rusakSedang: 0, rusakRingan: 1, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sulawesi Selatan", bencana: 32, meninggal: 0, hilang: 0, terluka: 3, mengungsi: 2747, rusakBerat: 143, rusakSedang: 29, rusakRingan: 4, pendidikan: 11, kesehatan: 0, peribadatan: 1, umum: 0 },
            { wilayah: "Sulawesi Barat", bencana: 17, meninggal: 2, hilang: 0, terluka: 1, mengungsi: 0, rusakBerat: 184, rusakSedang: 2, rusakRingan: 11, pendidikan: 28, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Maluku", bencana: 9, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 183, rusakBerat: 5, rusakSedang: 1, rusakRingan: 0, pendidikan: 18, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Maluku Utara", bencana: 1, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 0, rusakSedang: 1, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Papua", bencana: 2, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 10, rusakBerat: 8, rusakSedang: 0, rusakRingan: 0, pendidikan: 2, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Papua Barat", bencana: 1, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 5, rusakBerat: 0, rusakSedang: 0, rusakRingan: 1, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Papua Pegunungan", bencana: 1, meninggal: 3, hilang: 0, terluka: 6, mengungsi: 60, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 }
        ];
        const data2022 = [
            { wilayah: "Aceh", bencana: 9, meninggal: 2, hilang: 0, terluka: 0, mengungsi: 1058, rusakBerat: 15, rusakSedang: 7, rusakRingan: 5, pendidikan: 6, kesehatan: 0, peribadatan: 0, umum: 1 },
            { wilayah: "Sumatera Utara", bencana: 6, meninggal: 1, hilang: 0, terluka: 0, mengungsi: 40, rusakBerat: 0, rusakSedang: 1, rusakRingan: 0, pendidikan: 4, kesehatan: 0, peribadatan: 1, umum: 0 },
            { wilayah: "Sumatera Barat", bencana: 7, meninggal: 0, hilang: 0, terluka: 1, mengungsi: 107, rusakBerat: 0, rusakSedang: 3, rusakRingan: 1, pendidikan: 0, kesehatan: 0, peribadatan: 1, umum: 0 },
            { wilayah: "Riau", bencana: 6, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 240, rusakBerat: 0, rusakSedang: 15, rusakRingan: 0, pendidikan: 19, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sumatera Selatan", bencana: 9, meninggal: 0, hilang: 0, terluka: 4, mengungsi: 135, rusakBerat: 0, rusakSedang: 8, rusakRingan: 4, pendidikan: 14, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Bengkulu", bencana: 2, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 5350, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Lampung", bencana: 7, meninggal: 4, hilang: 0, terluka: 0, mengungsi: 10, rusakBerat: 0, rusakSedang: 2, rusakRingan: 1, pendidikan: 3, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "DKI Jakarta", bencana: 3, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 25, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Jawa Barat", bencana: 305, meninggal: 22, hilang: 0, terluka: 43, mengungsi: 7790, rusakBerat: 897, rusakSedang: 233, rusakRingan: 383, pendidikan: 371, kesehatan: 0, peribadatan: 3, umum: 1 },
            { wilayah: "Jawa Tengah", bencana: 141, meninggal: 13, hilang: 0, terluka: 18, mengungsi: 6599, rusakBerat: 2119, rusakSedang: 199, rusakRingan: 224, pendidikan: 255, kesehatan: 0, peribadatan: 10, umum: 0 },
            { wilayah: "DI Yogyakarta", bencana: 4, meninggal: 0, hilang: 0, terluka: 2, mengungsi: 37, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 1, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Jawa Timur", bencana: 56, meninggal: 4, hilang: 0, terluka: 6, mengungsi: 17188, rusakBerat: 272, rusakSedang: 19, rusakRingan: 40, pendidikan: 70, kesehatan: 0, peribadatan: 0, umum: 1 },
            { wilayah: "Banten", bencana: 2, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 12, rusakBerat: 70, rusakSedang: 0, rusakRingan: 0, pendidikan: 38, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Bali", bencana: 15, meninggal: 7, hilang: 0, terluka: 9, mengungsi: 175, rusakBerat: 0, rusakSedang: 6, rusakRingan: 4, pendidikan: 1, kesehatan: 0, peribadatan: 0, umum: 2 },
            { wilayah: "Nusa Tenggara Barat", bencana: 2, meninggal: 0, hilang: 0, terluka: 1, mengungsi: 5, rusakBerat: 0, rusakSedang: 0, rusakRingan: 2, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Nusa Tenggara Timur", bencana: 3, meninggal: 0, hilang: 0, terluka: 3, mengungsi: 99, rusakBerat: 0, rusakSedang: 1, rusakRingan: 0, pendidikan: 2, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Kalimantan Barat", bencana: 2, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 46, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 1, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Kalimantan Selatan", bencana: 3, meninggal: 9, hilang: 2, terluka: 7, mengungsi: 11, rusakBerat: 0, rusakSedang: 10, rusakRingan: 3, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Kalimantan Timur", bencana: 10, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 135, rusakBerat: 0, rusakSedang: 0, rusakRingan: 1, pendidikan: 8, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Kalimantan Utara", bencana: 5, meninggal: 1, hilang: 0, terluka: 0, mengungsi: 2201, rusakBerat: 0, rusakSedang: 7, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sulawesi Utara", bencana: 7, meninggal: 1, hilang: 0, terluka: 0, mengungsi: 251, rusakBerat: 0, rusakSedang: 2, rusakRingan: 2, pendidikan: 2, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sulawesi Tengah", bencana: 2, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 11, rusakBerat: 0, rusakSedang: 1, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sulawesi Selatan", bencana: 19, meninggal: 16, hilang: 5, terluka: 2, mengungsi: 1487, rusakBerat: 173, rusakSedang: 19, rusakRingan: 9, pendidikan: 17, kesehatan: 22, peribadatan: 1, umum: 0 },
            { wilayah: "Sulawesi Barat", bencana: 17, meninggal: 2, hilang: 0, terluka: 1, mengungsi: 0, rusakBerat: 184, rusakSedang: 2, rusakRingan: 11, pendidikan: 28, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Maluku", bencana: 9, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 183, rusakBerat: 5, rusakSedang: 1, rusakRingan: 0, pendidikan: 18, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Maluku Utara", bencana: 1, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 0, rusakSedang: 1, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
        ];



        const datasets = {
            '2024': data2024,
            '2023': data2023,
            '2022': data2022
        };
        function mergeAllYears(datasets) {
            const allData = Object.values(datasets).flat();
            const mergedData = allData.reduce((acc, item) => {
                const wilayah = item.wilayah;
                if (!acc[wilayah]) {
                    acc[wilayah] = { ...item };
                } else {
                    for (let key in item) {
                        if (key !== "wilayah") acc[wilayah][key] += item[key];
                    }
                }
                return acc;
            }, {});
            return Object.values(mergedData);
        }

        const allYearData = mergeAllYears(datasets);

        let chart;

        function createChart(data) {
            const ctx = document.getElementById('dataChart').getContext('2d');
            const labels = data.map(item => item.wilayah);

            chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [
                        { label: 'Bencana', data: data.map(item => item.bencana), backgroundColor: 'rgba(54, 162, 235, 0.6)' },
                    ]
                },
                options: {
                    responsive: true,
                    indexAxis: 'x',
                    scales: {
                        y: { stacked: true, title: { display: true, text: 'Count' }, beginAtZero: true },
                        x: { stacked: true, title: { display: true, text: 'Province' } }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                labelColor: function (context) {
                                    return {
                                        backgroundColor: context.dataset.backgroundColor,
                                        borderColor: context.dataset.backgroundColor
                                    };
                                },
                                label: function (tooltipItem) {
                                    const index = tooltipItem.dataIndex;
                                    const provinceData = data[index];
                                    return [
                                        `${provinceData.wilayah}`,
                                        `Bencana: ${provinceData.bencana}`,
                                        `Meninggal: ${provinceData.meninggal}`,
                                        `Hilang: ${provinceData.hilang}`,
                                        `Terluka: ${provinceData.terluka}`,
                                        `Mengungsi: ${provinceData.mengungsi}`,
                                        `Rusak Berat: ${provinceData.rusakBerat}`,
                                        `Rusak Sedang: ${provinceData.rusakSedang}`,
                                        `Rusak Ringan: ${provinceData.rusakRingan}`,
                                        `Pendidikan: ${provinceData.pendidikan}`,
                                        `Kesehatan: ${provinceData.kesehatan}`,
                                        `Peribadatan: ${provinceData.peribadatan}`
                                    ];
                                }
                            }
                        }
                    }
                }
            });
        }

        function updateChart() {
            const selectedYear = document.querySelector('input[name="year"]:checked').value;

            let data;
            if (selectedYear === "all") {
                data = allYearData;
            } else {
                data = datasets[selectedYear];
            }

            const canvas = document.getElementById('dataChart');
            canvas.height = data.length * 6;

            if (chart) chart.destroy();
            createChart(data);
        }

        window.onload = () => updateChart();
    </script>

</body>

</html>