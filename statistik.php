<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="frontend/Images/tsunami.png">
    <title>Disaster Statistics</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <<style>
    #map {
        height: calc(600px + data.length * 20px); /* Adjust height based on the number of provinces */
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

    <div class="container my-4">
        <h1>Disaster Statistics by Province</h1>
        
        <!-- Dropdown for year selection -->
        <label for="year">Select Year:</label>
        <select id="year" onchange="updateChart()">
            <option value="2024">2024</option>
            <option value="2023">2023</option>
        </select>

        <!-- Reset Filter Button -->
        <button onclick="resetFilter()" class="btn btn-secondary ml-2">Reset Filter</button>

        <!-- Chart canvas -->
        <canvas id="dataChart" width="800" height="400" class="mt-4"></canvas>
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
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Chart Script -->
    <script>
        const data2024 = [
            { wilayah: "Sumatera Utara", bencana: 3, meninggal: 4, hilang: 0, terluka: 13, mengungsi: 0, rusakBerat: 1, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sumatera Barat", bencana: 4, meninggal: 6, hilang: 0, terluka: 10, mengungsi: 50, rusakBerat: 6, rusakSedang: 0, rusakRingan: 5, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Sumatera Selatan", bencana: 1, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 0, rusakSedang: 0, rusakRingan: 0, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Jawa Barat", bencana: 36, meninggal: 11, hilang: 0, terluka: 1, mengungsi: 365, rusakBerat: 60, rusakSedang: 125, rusakRingan: 237, pendidikan: 1, kesehatan: 0, peribadatan: 7, umum: 0 },
            { wilayah: "Jawa Timur", bencana: 12, meninggal: 27, hilang: 0, terluka: 6, mengungsi: 420, rusakBerat: 31, rusakSedang: 32, rusakRingan: 34, pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
            { wilayah: "Banten", bencana: 2, meninggal: 0, hilang: 0, terluka: 0, mengungsi: 0, rusakBerat: 5, rusakSedang: 2, rusakRingan: 6 , pendidikan: 0, kesehatan: 0, peribadatan: 0, umum: 0 },
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
            { wilayah: "Aceh", bencana: 52, meninggal: 1, hilang: 0, terluka: 0,  mengungsi: 1048, rusakBerat: 88, rusakSedang: 13, rusakRingan: 51, pendidikan: 5, kesehatan: 3, peribadatan: 0, umum: 0 },
            { wilayah: "Sumatera Utara", bencana: 64, meninggal: 10, hilang: 0, terluka: 16, mengungsi: 288, rusakBerat: 110, rusakSedang: 215, rusakRingan: 430, pendidikan: 3979, kesehatan: 5, peribadatan: 0, umum: 3 },
            // Continue for all provinces...
        ];
        const datasets = {
            '2024': data2024,
            '2023': data2023
        };

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
                        x: { stacked: true, title: { display: true, text: 'Count' }, beginAtZero: true },
                        y: { stacked: true, title: { display: true, text: 'Province' } }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                labelColor: function(context) {
                                    return {
                                        backgroundColor: context.dataset.backgroundColor,
                                        borderColor: context.dataset.backgroundColor
                                    };
                                },
                                label: function(tooltipItem) {
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
    const selectedYear = document.getElementById('year').value;
    const data = datasets[selectedYear];

    // Adjust canvas height based on number of data points (provinces)
    const canvas = document.getElementById('dataChart');
    canvas.height = data.length * 20; // Set 40px per province, adjust as needed

    if (chart) chart.destroy(); // Destroy existing chart to avoid overlap
    createChart(data); // Create a new chart with updated data
}

        function resetFilter() {
            document.getElementById('year').value = '2024';
            updateChart();
        }

        window.onload = () => updateChart();
    </script>
</body>

</html>
