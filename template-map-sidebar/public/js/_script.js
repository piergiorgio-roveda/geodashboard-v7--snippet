import { mapbox__init } from './mapbox__init.js';
import { widget__bottomright_expandible__init } from './widget__bottomright_expandible.js';
import { widget__stars__init } from './widget__stars.js';
import { widget__infozoom__init } from './widget__infozoom.js';


function _init(){

  mapbox__init();
  widget__bottomright_expandible__init();
  widget__stars__init();
  widget__infozoom__init();

}

_init();
