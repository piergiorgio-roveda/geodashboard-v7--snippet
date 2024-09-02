import { mymap__ready__set,mymap__set } from './mapState.js';

export async function mapbox__init(){

  mapbox__prepare();

}

async function mapbox__prepare(){

  let options = {
    container: 'mapid', // container ID
    center: [0,0],
    zoom: 1,
    maxZoom: 22,
    minZoom: 1,
    style: 'https://tiles.basemaps.cartocdn.com/gl/voyager-gl-style/style.json', // style URL
  }

  let _mymap = new maplibregl.Map(options);
  mymap__set(_mymap);

  _mymap.on('load', () => {

    //   mymap.setCenter([9,45]);
    //   mymap.setZoom(12);
    mymap__ready__set(true);
    _mymap.resize();

  });

}