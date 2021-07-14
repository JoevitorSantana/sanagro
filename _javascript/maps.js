/**
 * Drawing Library 
 */

const initDrawing = (map) => {
    new google.maps.drawing.DrawingManager({
        map: map
    });
};
async function initMap() {
    let map = new google.maps.Map(document.querySelector('#map'), {
        center: { lat: -3.726674649708012, lng: -38.53494220246682},
        zoom: 14
    });
    initDrawing(map)
}
