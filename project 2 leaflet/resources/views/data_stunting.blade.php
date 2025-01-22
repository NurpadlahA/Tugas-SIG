<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
     <style>
        body {
            margin: 10px 80px;
            font-family: 'Poppins', sans-serif;
        }

        #map {
            height: 500px;
            border-radius: 10px; /* Membuat ujung peta rounded */
            overflow: hidden; /* Mencegah isi peta meluber keluar */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Opsional, menambah efek bayangan */
        }

        .header {
            text-align: left;
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #333;
        }

        .header h {
            font-size: 14px;
            color: #777;
        }
    </style>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
    <body>
        <!-- Header Section -->
        <div class="header">
            <h1>DataSebaran Kasus Stunting Anak Balita di Indonesia</h1>
            <p class="source">Sumber : <a href="https://aksi.bangda.kemendagri.go.id/emonev/DashPrev" target="_blank">https://aksi.bangda.kemendagri.go.id/emonev/DashPrev</a></p>
        </div>
    </body>
    <footer style="margin-top: 20px; text-align: center; font-size: 14px; color: #888;">
    Dibuat dengan oleh Asma - Padlah - Sunar
</footer>

</html>