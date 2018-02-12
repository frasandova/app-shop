// Nuestro código irá aquí

var arregloPines = [];

// Funcion para agregar pines
/*
function agregarMarcador(location){

  var pin = new google.maps.Marker({
    position: location,
    map: map
    //animation: google.maps.Animation.DROP
  });

  console.log("Latitud: ", location.lat() );
  console.log("Longitud: ", location.lng() );

  
  for(var i in arregloPines){
    arregloPines[i].setMap(null);
  }
  arregloPines.push(pin);
  
}
*/

function cargar_mapa(){

 var myOptions = {
     zoom:17,
     scrollwheel: false,
     /*center: new google.maps.LatLng(-33.580683, -70.592434),*/
     /*center: new google.maps.LatLng(-33.57582834833459,-70.59534430503845),*/
     center: new google.maps.LatLng(-33.5836517,-70.5971029), 
     mapTypeId: google.maps.MapTypeId.ROADMAP
 };

map = new google.maps.Map( document.getElementById('gmap_canvas'), myOptions )

/*
  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      'Aboriginal people of the area. It has many springs, waterholes, '+
      'rock caves and ancient paintings. Uluru is listed as a World '+
      'Heritage Site.</p>'+
      '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      '(last visited June 22, 2009).</p>'+
      '</div>'+
      '</div>';

*/
/*var url = "https://www.google.cl/maps/place/33%C2%B034'33.0%22S+70%C2%B035'43.2%22W/@-33.5836517,-70.5971029,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-33.5758283!4d-70.5953443";*/
var url = "https://www.google.cl/maps/place/Av.+Ejercito+Libertador+3101,+Puente+Alto,+Regi%C3%B3n+Metropolitana/@-33.583605,-70.59777,19z/data=!3m1!4b1!4m5!3m4!1s0x9662d73f5ca8a749:0xa6b402e327dea74d!8m2!3d-33.5836061!4d-70.5972215";

var contentString = '<a href = '+ url + ' target="_blank">' + 
                    'Delicious Gourmet, Av. Ejercito Libertador 3101, Puente Alto!'+
                    '</a>';


var pin = new google.maps.Marker({
  /*position: new google.maps.LatLng(-33.57582834833459,-70.59534430503845),*/
  position: new google.maps.LatLng(-33.5836517,-70.5971029),
  map: map,
  snippet: "Population: 4,137,400",
  title: "Mapa Delicious Gourmet"

});

 var infowindow = new google.maps.InfoWindow({ 
  content: contentString
}); 
infowindow.open(map, pin);  

//'Juan de Dios malebran 3744!'


//arregloPines.push(pin);


// Agregar Listener Click
map.addListener('click', function(event){

  console.log(event);
  //agregarMarcador(event.latLng);
  infowindow.open(map, pin);

});


}
