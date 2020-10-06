<!DOCTYPE html>
<html lang="en">

<?php include "./includes/header.html" ?>


<div class="content-container" id="map-content-container">
    <header id="header-alt">
        <div class="crumbs">
            <div class="crumbs-items">
                <a href="index">Home</a> &gt; <a href="find">Find a Food Bank</a>
            </div>
    </header>

    <section class="content-1" id="map-content-1">
        <div class="map-container">
            <div class="map-title"><h1>Foodbanks near UCF Downtown</div>
            <div id="map" class="map-item1"></div>
            <script>

// The following example creates complex markers to indicate beaches near
// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
// to the base of the flagpole.

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: {lat: 28.5430218, lng: -81.3899435}
  });

  setMarkers(map);
  infoWindow1 = new google.maps.InfoWindow;

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow1.setPosition(pos);
      infoWindow1.setContent('Your location');
      infoWindow1.open(map);
       map.setZoom(8);
      map.setCenter(pos);
      
      
    }, function() {
      handleLocationError(true, infoWindow1, map.getCenter());
    });
  }
}

// Data for the markers consisting of a name, a LatLng and a zIndex for the
// order in which these markers should display on top of each other.
var beaches = [
  ['COALITION FOR THE HOMELESS', 28.5430218, -81.3899435, 4],
  ['EMMANUEL UNITED METHODIST CHURCH', 28.5514345, -81.3915969, 5],
  ['SALVATION ARMY MEN’S SHELTER', 28.5518683 ,-81.3866796, 3],
  ['CHRISTIAN SERVICE CENTER', 28.54169, -81.3931214, 2],
  ['CENTRAL FLORIDA HAVEN OF HOPE', 28.552385, -81.4002286, 2],
  ['SECOND HARVEST', 28.5481591 ,-81.4316323, 18],
  ['SHILOH BAPTIST CHURCH OF ORLANDO', 28.5390118, -81.3894282, 1]
];


function setMarkers(map) {
  // Adds markers to the map.

  // Marker sizes are expressed as a Size of X,Y where the origin of the image
  // (0,0) is located in the top left of the image.

  // Origins, anchor positions and coordinates of the marker increase in the X
  // direction to the right and in the Y direction down.
  var image = {
    url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(20, 32),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(0, 32)
  };
  // Shapes define the clickable region of the icon. The type defines an HTML
  // <area> element 'poly' which traces out a polygon as a series of X,Y points.
  // The final coordinate closes the poly by connecting to the first coordinate.
  var shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: 'poly'
  };

    var beach1 = beaches[0];
    var beach2 = beaches[1];
    var beach3 = beaches[2];
    var beach4 = beaches[2];
    var beach5 = beaches[4];
    var beach6 = beaches[5];
    var beach7 = beaches[6];
    
    var marker1 = new google.maps.Marker({
      position: {lat: beach1[1], lng: beach1[2]},
      map: map,
      icon: image
     
    });
     var infowindow1 = new google.maps.InfoWindow({
    content: beach1[0]
  });
  
  marker1.addListener('click', function() {
    infowindow1.open(map, marker1);
  });
  //-----
   var marker3 = new google.maps.Marker({
      position: {lat: beach3[1], lng: beach3[2]},
      map: map,
      icon: image
     
    });
     var infowindow3 = new google.maps.InfoWindow({
    content: beach3[0]
  });
  
  marker3.addListener('click', function() {
    infowindow3.open(map, marker3); });
    //----
     var marker4 = new google.maps.Marker({
      position: {lat: beach4[1], lng: beach4[2]},
      map: map,
      icon: image
     
    });
     var infowindow4 = new google.maps.InfoWindow({
    content: beach4[0]
  });
  
  marker4.addListener('click', function() {
    infowindow4.open(map, marker4); });
    //----
     var marker2 = new google.maps.Marker({
      position: {lat: beach2[1], lng: beach2[2]},
      map: map,
      icon: image
     
    });
     var infowindow2 = new google.maps.InfoWindow({
    content: beach4[0]
  });
  
  marker2.addListener('click', function() {
    infowindow2.open(map, marker2); });
    //----
    var marker5 = new google.maps.Marker({
      position: {lat: beach5[1], lng: beach5[2]},
      map: map,
      icon: image
     
    });
     var infowindow5 = new google.maps.InfoWindow({
    content: beach5[0]
  });
  
  marker5.addListener('click', function() {
    infowindow5.open(map, marker5); });
    //----
    var marker6 = new google.maps.Marker({
      position: {lat: beach6[1], lng: beach6[2]},
      map: map,
      icon: image
     
    });
     var infowindow6 = new google.maps.InfoWindow({
    content: beach6[0]
  });
  
  marker6.addListener('click', function() {
    infowindow6.open(map, marker6); });
    //----
    var marker7 = new google.maps.Marker({
      position: {lat: beach7[1], lng: beach7[2]},
      map: map,
      icon: image
     
    });
     var infowindow7 = new google.maps.InfoWindow({
    content: beach4[0]
  });
  
  marker7.addListener('click', function() {
    infowindow7.open(map, marker7); });
    //----
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjwpO9ZK0fwQoGD_I2F96PdtKHi1lgpEg&callback=initMap">
</script>
<div class="map-item2">
    <h4>1. Coalition for the Homeless</h4>
    <p>18 N Terry Ave, Orlando, FL 32801</p>
    <p>Phone: (407)-426-1250</p>

    <h4>2. Emmanuel United Methodist Church</h4>
    <p>701 Concord St, Orlando, FL 32805</p>
    <p>Phone: (321)-236-0500</p>

    <h4>3. Salvation Army Men’s Shelter</h4>
    <p>624 Lexington Ave, Orlando, FL 32801</p>
    <p>Phone: (407)-423-8581</p>

    <h4>4. Christian Service Center</h4>
    <p>808 W Central Blvd, Orlando, FL 32805</p>
    <p>Phone: (407)-425-2523</p>

    <h4>5. Shiloh Baptist Church of Orlando</h4>
    <p>604 Jackson St, Orlando, FL 32805</p>
    <p>Phone: (407)-422-9631</p>

    <h4>6. Central Florida Haven of Hope</h4>
    <p>1310 W Colonial Dr #25, Orlando, FL 32804</p>
    <p>Phone: (407)-298-2056</p>

    <h4>7. Second Harvest</h4>
    <p>411 Mercy Dr, Orlando, FL 32805</p>
    <p>Phone: (407)-295-1066</p>
</div>
</div>

    </section>

    
</div>

<div class="map-search">
    <div class="map-search-header">
<h1>Food Banks of Central Florida</h1>
</div>
<div class="map-search-block1">
<p><a href="https://studentunion.ucf.edu/knights-pantry/" target=_blank>Knights Helping Knights Pantry</a></p>
<p>4133 Pyxis Ln, Orlando, FL 32816</p>
<p>(407) 823-3663</p>

<p><a href="https://www.feedhopenow.org/site/SPageServer/" target=_blank>feedhSecond Harvest Food Bank</a></p>
<p> 411 Mercy Dr, Orlando, FL 32805</p>
<p>(407) 295-1066</p>

<p><a href="https://www.christianservicecenter.org/" target=_blank >Christian Service Center</a></p>
<p>808 W Central Blvd, Orlando, FL 32805</p>
<p>(407) 425-2523</p>
</div>

<div class="map-search-block2">
<p><a href="http://iscf.org/social-services-2/seeds-of-paradise-food-pantry/" target=_blank >Seeds Of Paradise Food Pantry</a></p>
<p>1460 N Goldenrod Rd, Orlando, FL 32807</p>
<p>(407) 250-5882</p>

<p><a href="https://www.cflhavenofhope.com/" target=_blank>Central Florida Haven of Hope</a></p>
<p>1310 W Colonial Dr #25, Orlando, FL 32804</p>
<p>(407) 298-2056</p>

<p><a href="https://unitedagainstpoverty.org/" target=_blank>United Against Poverty</a></p>
<p>150 W Michigan St, Orlando, FL 32806</p>
<p>(407) 650-0774</p>
</div>

<div class="map-search-block3">
<p><a href="http://sbcorlando.org/" target=_blank>Shiloh Baptist Church of Orlando</a></p>
<p>604 Jackson St, Orlando, FL 32805</p>
<p>(407) 422-9631</p>

<p><a href="https://cflcc.org/mission-market-orlando/" target=_blank>Orlando Mission Market</a></p>
<p>1771 N Semoran Blvd, Orlando, FL 32807</p>
<p>(407) 658-1818</p>

<p><a href="https://www.oneheartforwomenandchildren.org/" target=_blank>One Heart For Women And Children</a></p>
<p> 2040 N Rio Grande Ave, Orlando, FL 32804</p>
<p>(321) 299-4594</p>
</div>

</div>
<?php include "./includes/footer.html" ?>


</div>
</body>
</html>