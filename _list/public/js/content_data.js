let items__geojson = {
  type: 'FeatureCollection',
  features: []  // <--- no features
};

let _api = 'items';

export class content_data {

  // constructor() {
  //   this._items__available = _items__available;
  // }

  items__get(){
    return items__geojson;
  }

}

export async function content_data__init(){

  let _datastring;
  let _r;

  _datastring = {
    name:'items_list__get'
  }

  _r = await Promise.all([
    _request(_datastring)
  ]);

  items__geojson = _r[0];

}

async function _request(_datastring) {
  console.log(_datastring.name,`--START`);
  return new Promise((resolve, reject) => {
    axios
      .post(`${FLAT_URL__API}${_api}/`, _datastring)
      .then((response) => {
        console.log(_datastring.name,`--END`);
        if(parseInt(response.data.response, 10) !== 200){
          console.log(_datastring.name,`--ERROR-DATA`);
          return;
        }
        resolve(response.data); // Resolve the promise
      })
      .catch((error) => {
        console.log(_datastring.name,`--ERROR`);
        console.error(error);
        reject(error); // Reject the promise if there's an error
      })
  }); // Promise
}