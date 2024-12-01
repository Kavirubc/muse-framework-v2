<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../public/assets/css/community_ambassador/event-details.css">

</head>
<body>
<div class="sidebar">
<?php include 'adminsidebar.php'; ?>
    </div>


    <div class="container">
        <div class="event-info">
            <h1>Event Details</h1>
            <p><strong>Event Name:</strong> Book Community Meetup</p>
            <p><strong>Date:</strong> 3rd December 2024, 10:00 AM</p>
            <p><strong>Location:</strong> 56 Davion Mission Suite 157, Colombo</p>
            <p><strong>Description:</strong> Join us for a community gathering to discuss our latest reads and upcoming projects. Let's meet, chat, and plan future events together!</p>
        </div>

        <!-- Interactive Map -->
        <div id="map"></div>

    </div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Initialize the map centered on Colombo (example coordinates)
        var map = L.map('map').setView([6.927079, 79.861244], 15); // Colombo coordinates

        // Add OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker to the map at the event location
        L.marker([6.927079, 79.861244]).addTo(map)
            .bindPopup("Event Location: 56 Davion Mission Suite 157, Colombo")
            .openPopup();
    </script>

</body>
</html>
