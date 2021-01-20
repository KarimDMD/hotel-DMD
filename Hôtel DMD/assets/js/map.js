var mymap = L.map('mapid').setView([48.894, 2.245], 15);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiZG1kcHJvZCIsImEiOiJjanp3b2NjNGQwMHc0M2NxcmdyMnd6ZzBnIn0.EfsAcN16RiX8-23NypFoBA'
}).addTo(mymap);
var marker = L.marker([48.894, 2.245]).addTo(mymap);
marker.bindPopup("<b>Hôtel DMD").openPopup();