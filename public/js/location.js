mapboxgl.accessToken =
    "pk.eyJ1IjoicmthciIsImEiOiJjazRzNTZwNTE0Z3lwM25td2U5b3l1emlhIn0.VFCYtJnrqzaP3j-LcKQe0w";
var map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/dark-v10",
    center: [95.854173, 21.380687],
    zoom: 4
});

map.on("load", function() {
    map.loadImage(
        "https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/KMD_Map.svg/200px-KMD_Map.svg.png",
        function(error, image) {
            if (error) throw error;
            map.addImage("logo", image);
            map.addLayer({
                id: "points",
                type: "symbol",
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [
                            {
                                type: "Feature",
                                geometry: {
                                    type: "Point",
                                    coordinates: [96.161841, 16.775762]
                                }
                            },
                            {
                                type: "Feature",
                                geometry: {
                                    type: "Point",
                                    coordinates: [96.135603, 16.809091]
                                }
                            },
                            {
                                type: "Feature",
                                geometry: {
                                    type: "Point",
                                    coordinates: [96.126068, 16.824897]
                                }
                            },
                            {
                                type: "Feature",
                                geometry: {
                                    type: "Point",
                                    coordinates: [96.129391, 16.827681]
                                }
                            },
                            {
                                type: "Feature",
                                geometry: {
                                    type: "Point",
                                    coordinates: [96.144514, 16.776938]
                                }
                            },
                            {
                                type: "Feature",
                                geometry: {
                                    type: "Point",
                                    coordinates: [96.161841, 16.775146]
                                }
                            },
                            {
                                type: "Feature",
                                geometry: {
                                    type: "Point",
                                    coordinates: [96.152823, 16.774415]
                                }
                            }
                        ]
                    }
                },
                layout: {
                    "icon-image": "logo",
                    "icon-size": 0.25
                }
            });
        }
    );
});
