
var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('GoogleMap'), {
                      center: { lat: 6.4774424, lng: 3.3663476 },
                    zoom: 17,
                    mapTypeId: google.maps.MapTypeId.TERRAIN

                });


                var HopeHallLatLng = { lat: 6.4774424, lng: 3.3663476 };


                var marker = new google.maps.Marker({
                    position: HopeHallLatLng,
                    zoom: 30,
                    map: map,
                    title: 'RCCG HopeHall | Where Hope is Restored and Champions are raised'
                });
            }

