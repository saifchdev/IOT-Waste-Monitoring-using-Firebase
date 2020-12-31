// [START maps_custom_markers]

let map;
var distance_g;
// Get a reference to the database service
  // on() method


function initMap() {

  let dist;
const rootRef = firebase.database().ref().child("Distance");
rootRef.on('value', (snapshot) =>{
   dist = snapshot.val();
   console.log(dist);  
   distance_g=dist;
   mapView();

  
});
 

function mapView(){
  map = new google.maps.Map(document.getElementById("map"), {
    center: new google.maps.LatLng(-33.91722, 151.23064),
    zoom: 16,
    
    styles:
    [
      {
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#212121"
          }
        ]
      },
      {
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "elementType": "labels.icon",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "color": "#212121"
          }
        ]
      },
      {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "administrative.country",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "administrative.locality",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#bdbdbd"
          }
        ]
      },
      {
        "featureType": "administrative.neighborhood",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#181818"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "color": "#1b1b1b"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
          {
            "color": "#2c2c2c"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#8a8a8a"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#373737"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#3c3c3c"
          }
        ]
      },
      {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#4e4e4e"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "featureType": "transit",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#000000"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#3d3d3d"
          }
        ]
      }
    ]
  });
  
  const iconBase =
    "../img/";
  const icons = {
    empty: {
      icon: iconBase + "bin_green.png",
    },
    medium: {
      icon: iconBase + "bin_yellow.png",
    },
    full: {
      icon: iconBase + "bin_red.png",
    },
  };
  
  const features = [
    {
      position: new google.maps.LatLng(-33.91721, 151.2263),
      type: "full",
      address:  dist,

    },
    {
      position: new google.maps.LatLng(-33.91539, 151.2282),
      type: "full",
      address: "Sai Sanshra CHS",
    },
    {
      position: new google.maps.LatLng(-33.91747, 151.22912),
      type: "medium",
      address: "Manukamna CHS",
    },
    {
      position: new google.maps.LatLng(-33.9191, 151.22907),
      type: "medium",
      address: "Murti CHS",
    },
    {
      position: new google.maps.LatLng(-33.91725, 151.23011),
      type: "full",
      address: "PolyStar CHS",
    },
    {
      position: new google.maps.LatLng(-33.91872, 151.23089),
      type: "full",
      address: "Simran Heights",
    },
    {
      position: new google.maps.LatLng(-33.91784, 151.23094),
      type: "full",
      address: "Khushboo Complex",
    },
    {
      position: new google.maps.LatLng(-33.91682, 151.23149),
      type: "full",
      address: "Fatima APrtments",
    },
    {
      position: new google.maps.LatLng(-33.9179, 151.23463),
      type: "full",
      address: "Manohar CHS",
    },
    {
      position: new google.maps.LatLng(-33.91666, 151.23468),
      type: "full",
      address: "Webster CHS",
    },
    {
      position: new google.maps.LatLng(-33.916988, 151.23364),
      type: "full",
      address: "Launcher CHS",
    },
    {
      position: new google.maps.LatLng(-33.91662347903106, 151.22879464019775),
      type: "empty",
      address: "MErwaniCHS",
    },
    
    {
      position: new google.maps.LatLng(-33.91851096391805, 151.2344058214569),
      type: "empty",
      address: "Galaxy Apartmens",

    },
    
    {
      position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
      type: "medium",
      address: "Taj Palace",

    },
  ];

   if (dist>120){
    features[0].type="empty";

  }
  else if(dist<30){
    features[0].type="full";
  }
  else if (dist>30){
    features[0].type="medium";

  }
  
  
markers();


  function markers(){

  function closeOtherInfo(){
    if(infoObj.length>0){
    infoObj[0].set("market,null");
    infoObj[0].close();
    infoObj[0].length=0;
    }
  }
  
  
  // Create markers.
  for (let i = 0; i < features.length; i++) {
        const marker = new google.maps.Marker({
          position: features[i].position,
          icon: icons[features[i].type].icon,
          map: map,      
    });
  
             const infowindow = new google.maps.InfoWindow({
              content: features[i].address,
              });
             
              marker.addListener("click", () => {
        
              infowindow.open(map, marker);
    });

  }
 
}
}
}
// [END maps_custom_markers]