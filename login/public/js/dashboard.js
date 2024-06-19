import { dashboard__ready__set } from './dashboardState.js';
import { default__class1 } from './default__classes.js';
import { d004__check_element__exist } from './d004__check_element__exist.js';

const _default__class1 = new default__class1();

export async function dashboard__init(){

  _default__class1.console_dev_mode({"msg":"mapbox__init"});

  let _ready = await d004__check_element__exist($('#mapid'));

  if(_ready == true){
    _prepare();
  }

}

async function _prepare(){

  _default__class1.console_dev_mode({"msg":"mapbox__prepare"});

  dashboard__ready__set(true);
  // $('.mainmap__loading').toggle();

  // $('#mapid').css('background-color','var(--kbd-bg)');


}