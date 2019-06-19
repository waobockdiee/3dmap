<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css">
</head>
<body>
    <div id="map" style="height: 500px; width:1200px; "></div>
    <script type="text/javascript" src="https://cdn-webgl.eegeo.com/eegeojs/api/v0.1.780/eegeo.js"></script>
    <script>
        var map = L.eeGeo.map('map', 'ee8527b388ebd47db75a67d7caf519e6', {
            center: [40.7834282, -73.9662476],
            zoom: 14
        })
    </script>
</body>
</html>