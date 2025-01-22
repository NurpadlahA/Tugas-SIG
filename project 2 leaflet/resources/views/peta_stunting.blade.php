<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
     <style>
        body {
            margin: 20px 80px;
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
            <h1>Peta Sebaran Kasus Stunting Anak Balita di Indonesia Tahun 2024</h1>
            <p class="source">Sumber : <a href="https://aksi.bangda.kemendagri.go.id/emonev/DashPrev" target="_blank">https://aksi.bangda.kemendagri.go.id/emonev/DashPrev</a></p>
        </div>
    
        <div id="map"></div>
        <script>
            var map = L.map('map').setView([-0.3155398750904368, 117.1371634207888], 5);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',{ maxZoom: 5,
              attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            var aoi = {
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Aceh",
        "Jumlah Balita": "394,129",
        "Stunting Pendek": "18,641",
        "Stunting Sangat Pendek": "5,962",
        "Kasus Stunting": "6,2%"
      },
      "geometry": {
        "coordinates": [
          95.31907187767246,
          5.552650163493553
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Sumatera Utara",
        "Jumlah Balita": "946,365",
        "Stunting Pendek": "19,631",
        "Stunting Sangat Pendek": "8,458",
        "Kasus Stunting": "3,0%"
      },
      "geometry": {
        "coordinates": [
          98.67385452173198,
          3.5937203738292425
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Riau",
        "Jumlah Balita": "368,260",
        "Stunting Pendek": "6,877",
        "Stunting Sangat Pendek": "2,301",
        "Kasus Stunting": "2,5%"
      },
      "geometry": {
        "coordinates": [
          100.37120048451351,
          -0.9190341418616157
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Sumatera Barat",
        "Jumlah Balita": "377,410",
        "Stunting Pendek": "23,481",
        "Stunting Sangat Pendek": "7,143",
        "Kasus Stunting": "8,1%"
      },
      "geometry": {
        "coordinates": [
          101.45214441446984,
          0.5855553818236814
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Jambi",
        "Jumlah Balita": "209,492",
        "Stunting Pendek": "4,058",
        "Stunting Sangat Pendek": "1,651",
        "Kasus Stunting": "2,7%"
      },
      "geometry": {
        "coordinates": [
          103.59985921907315,
          -1.5924111366601181
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Sumatera Selatan",
        "Jumlah Balita": "588,096",
        "Stunting Pendek": "5,818",
        "Stunting Sangat Pendek": "2,360",
        "Kasus Stunting": "1,4%"
      },
      "geometry": {
        "coordinates": [
          104.74410065148481,
          -2.906638054624054
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Bengkulu",
        "Jumlah Balita": "107,916",
        "Stunting Pendek": "3,386",
        "Stunting Sangat Pendek": "820",
        "Kasus Stunting": "3,9%"
      },
      "geometry": {
        "coordinates": [
          102.26761276094703,
          -3.783184807867144
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Lampung",
        "Jumlah Balita": "532,246",
        "Stunting Pendek": "11,047",
        "Stunting Sangat Pendek": "3,667",
        "Kasus Stunting": "2,8%"
      },
      "geometry": {
        "coordinates": [
          105.25830337371258,
          -5.42361879423585
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Kepulauan Bangka Belitung",
        "Jumlah Balita": "97,246",
        "Stunting Pendek": "2,363",
        "Stunting Sangat Pendek": "801",
        "Kasus Stunting": "3,3%"
      },
      "geometry": {
        "coordinates": [
          106.10970384637483,
          -2.110082313981451
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Kepulauan Riau",
        "Jumlah Balita": "118,145",
        "Stunting Pendek": "2,858",
        "Stunting Sangat Pendek": "1,787",
        "Kasus Stunting": "3,1%"
      },
      "geometry": {
        "coordinates": [
          104.44804398207776,
          0.9220697776750768
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "DKI Jakarta",
        "Jumlah Balita": "361,967",
        "Stunting Pendek": "3,858",
        "Stunting Sangat Pendek": "1,787",
        "Kasus Stunting": "1,6%"
      },
      "geometry": {
        "coordinates": [
          106.82062404794777,
          -6.161146365270739
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Jawa Barat",
        "Jumlah Balita": "3,087,692",
        "Stunting Pendek": "114,430",
        "Stunting Sangat Pendek": "37,878",
        "Kasus Stunting": "4,9%"
      },
      "geometry": {
        "coordinates": [
          107.59355513750086,
          -6.893387068849663
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Jawa Tengah",
        "Jumlah Balita": "1,940,103",
        "Stunting Pendek": "132,359",
        "Stunting Sangat Pendek": "34,875",
        "Kasus Stunting": "8,6%"
      },
      "geometry": {
        "coordinates": [
          110.42214837950081,
          -6.982709270383182
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "DI Yogyakarta",
        "Jumlah Balita": "163,458",
        "Stunting Pendek": "9,728",
        "Stunting Sangat Pendek": "28,803",
        "Kasus Stunting": "7,7%"
      },
      "geometry": {
        "coordinates": [
          110.36467054076496,
          -7.800065987695021
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Jawa Timur",
        "Jumlah Balita": "2,213,827",
        "Stunting Pendek": "99,776",
        "Stunting Sangat Pendek": "28,897",
        "Kasus Stunting": "5,8%"
      },
      "geometry": {
        "coordinates": [
          112.73656438094895,
          -7.244340261406521
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Banten",
        "Jumlah Balita": "760,984",
        "Stunting Pendek": "15,707",
        "Stunting Sangat Pendek": "6,303",
        "Kasus Stunting": "2,9%"
      },
      "geometry": {
        "coordinates": [
          106.15170752207365,
          -6.1175651348986975
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Bali",
        "Jumlah Balita": "176,827",
        "Stunting Pendek": "4,871",
        "Stunting Sangat Pendek": "1,282",
        "Kasus Stunting": "3,5%"
      },
      "geometry": {
        "coordinates": [
          115.21723961145995,
          -8.626392871138904
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Nusa Tenggara Barat",
        "Jumlah Balita": "441,000",
        "Stunting Pendek": "42,365",
        "Stunting Sangat Pendek": "13,445",
        "Kasus Stunting": "12,7%"
      },
      "geometry": {
        "coordinates": [
          116.11157357884446,
          -8.573868127655913
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Nusa Tenggara Timur",
        "Jumlah Balita": "421,957",
        "Stunting Pendek": "44,098",
        "Stunting Sangat Pendek": "18,348",
        "Kasus Stunting": "14,8%"
      },
      "geometry": {
        "coordinates": [
          123.60698150895018,
          -10.167443212701528
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Kalimantan Barat",
        "Jumlah Balita": "357,582",
        "Stunting Pendek": "22,686",
        "Stunting Sangat Pendek": "8,449",
        "Kasus Stunting": "8,7%"
      },
      "geometry": {
        "coordinates": [
          109.32465036630168,
          -0.026571975623227218
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Kalimantan Tengah",
        "Jumlah Balita": "113,911",
        "Stunting Pendek": "9,480",
        "Stunting Sangat Pendek": "3,114",
        "Kasus Stunting": "11,1%"
      },
      "geometry": {
        "coordinates": [
          113.90126366353621,
          -2.080131930947047
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Kalimantan Selatan",
        "Jumlah Balita": "259,313",
        "Stunting Pendek": "15,914",
        "Stunting Sangat Pendek": "5,286",
        "Kasus Stunting": "8,2%"
      },
      "geometry": {
        "coordinates": [
          114.5936603186114,
          -3.292933469952743
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Kalimantan Timur",
        "Jumlah Balita": "196,073",
        "Stunting Pendek": "13,151",
        "Stunting Sangat Pendek": "4,482",
        "Kasus Stunting": "9,0%"
      },
      "geometry": {
        "coordinates": [
          117.13783942454336,
          -0.4848862119176971
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Kalimantan Utara",
        "Jumlah Balita": "45,742",
        "Stunting Pendek": "2,222",
        "Stunting Sangat Pendek": "836",
        "Kasus Stunting": "6,7%"
      },
      "geometry": {
        "coordinates": [
          117.36835620408596,
          2.8410534122717763
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Sulawesi Utara",
        "Jumlah Balita": "131,656",
        "Stunting Pendek": "1,638",
        "Stunting Sangat Pendek": "566",
        "Kasus Stunting": "1,7%"
      },
      "geometry": {
        "coordinates": [
          124.84047414699182,
          1.4905975067096335
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Sulawesi Tengah",
        "Jumlah Balita": "167,399",
        "Stunting Pendek": "11,740",
        "Stunting Sangat Pendek": "5,658",
        "Kasus Stunting": "10,4%"
      },
      "geometry": {
        "coordinates": [
          119.86661229842667,
          -0.9044026140278589
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Sulawesi Selatan",
        "Jumlah Balita": "564,938",
        "Stunting Pendek": "30,222",
        "Stunting Sangat Pendek": "10,969",
        "Kasus Stunting": "7,3%"
      },
      "geometry": {
        "coordinates": [
          119.41253502355289,
          -5.130728737973797
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Kalimantan Utara",
        "Jumlah Balita": "157,178",
        "Stunting Pendek": "12,291",
        "Stunting Sangat Pendek": "3,852",
        "Kasus Stunting": "10,3%"
      },
      "geometry": {
        "coordinates": [
          122.5179299412809,
          -3.990256658894026
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Gorontalo",
        "Jumlah Balita": "84,718",
        "Stunting Pendek": "3,277",
        "Stunting Sangat Pendek": "1,262",
        "Kasus Stunting": "5,4%"
      },
      "geometry": {
        "coordinates": [
          123.054888983875,
          0.6390843420816452
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Sulawesi Barat",
        "Jumlah Balita": "89,718",
        "Stunting Pendek": "15,818",
        "Stunting Sangat Pendek": "5,614",
        "Kasus Stunting": "23,9%"
      },
      "geometry": {
        "coordinates": [
          118.8951455851518,
          -2.7021853940968015
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Maluku",
        "Jumlah Balita": "132,847",
        "Stunting Pendek": "5,561",
        "Stunting Sangat Pendek": "1,644",
        "Kasus Stunting": "5,4%"
      },
      "geometry": {
        "coordinates": [
          128.1780975768957,
          -3.6776737514920512
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Maluku Utara",
        "Jumlah Balita": "80,164",
        "Stunting Pendek": "5,335",
        "Stunting Sangat Pendek": "1,627",
        "Kasus Stunting": "8,7%"
      },
      "geometry": {
        "coordinates": [
          127.6319963487719,
          0.7598155368218045
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Papua Barat",
        "Jumlah Balita": "28,128",
        "Stunting Pendek": "1,926",
        "Stunting Sangat Pendek": "695",
        "Kasus Stunting": "9,3%"
      },
      "geometry": {
        "coordinates": [
          133.92451857619739,
          -0.8815415353446525
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Papua Pegunungan",
        "Jumlah Balita": "35,146",
        "Stunting Pendek": "895",
        "Stunting Sangat Pendek": "659",
        "Kasus Stunting": "4,4%"
      },
      "geometry": {
        "coordinates": [
          140.57369670746812,
          -4.84625185948417
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Papua",
        "Jumlah Balita": "51,254",
        "Stunting Pendek": "3,427",
        "Stunting Sangat Pendek": "1,013",
        "Kasus Stunting": "8,7%"
      },
      "geometry": {
        "coordinates": [
          140.65527800711283,
          -2.5143836412414515
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Papua Selatan",
        "Jumlah Balita": "24,201",
        "Stunting Pendek": "2,141",
        "Stunting Sangat Pendek": "921",
        "Kasus Stunting": "12,7%"
      },
      "geometry": {
        "coordinates": [
          140.3864559786391,
          -8.35519238084153
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Papua Tengah",
        "Jumlah Balita": "55,031",
        "Stunting Pendek": "3,877",
        "Stunting Sangat Pendek": "1,698",
        "Kasus Stunting": "10,1%"
      },
      "geometry": {
        "coordinates": [
          135.50082308218072,
          -3.372362248092287
        ],
        "type": "Point"
      }
    },
    {
      "type": "Feature",
      "properties": {
        "Provinsi": "Papua Barat Daya",
        "Jumlah Balita": "29,252",
        "Stunting Pendek": "1,591",
        "Stunting Sangat Pendek": "691",
        "Kasus Stunting": "7,8%"
      },
      "geometry": {
        "coordinates": [
          131.29710898634664,
          -0.8670738528969082
        ],
        "type": "Point"
      }
    }
  ]
};

// Tambahkan marker ke peta dari GeoJSON
L.geoJSON(aoi, {
            onEachFeature: function (feature, layer) {
                if (feature.properties) {
                    layer.bindPopup(`
                        <b>Provinsi:</b> ${feature.properties.Provinsi}<br>
                        <b>Jumlah Balita:</b> ${feature.properties["Jumlah Balita"]}<br>
                        <b>Stunting Pendek:</b> ${feature.properties["Stunting Pendek"]}<br>
                        <b>Stunting Sangat Pendek:</b> ${feature.properties["Stunting Sangat Pendek"]}<br>
                        <b>Kasus Stunting:</b> ${feature.properties["Kasus Stunting"]}
                    `);
                }
            }
        }).addTo(map);
        </script>
    </body>
    <footer style="margin-top: 20px; text-align: center; font-size: 14px; color: #888;">
    Dibuat dengan oleh Asma - Padlah - Sunar
</footer>

</html>