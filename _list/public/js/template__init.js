import { nav_tabs__init} from './nav_tabs.js';

export async function template__init(){

    let _container = $('.main__header--box');
    let _logo = `${FLAT_URL__ASSETS}images/logo-webapp-geodashboard-2024.png`;
    _container.append(`
      <img src="${_logo}" \
        style="width: auto;max-height: 100%;">
    `);

    nav_tabs__init();

    _container = $('.main__footer--box');

    _container.append(`
      <div  style="min-width: 15rem;" 
        class="btn-group btn-group-sm" role="group" aria-label="Basic example">
        <button type="button" class="btn__refresh btn btn-outline-secondary"><i class="bi bi-arrow-clockwise"></i></button>
        <button type="button" class="btn__home btn btn-outline-secondary"><i class="bi bi-house"></i></button>
        <button type="button" class="btn__main__toggle btn btn-outline-secondary" disabled>\
          <i class="bi bi-box-arrow-left"></i></button>
      </div>
    `);

    $('.btn__refresh').on('click', function(){
      location.reload();
    });

    $('.btn__home').on('click', function(){
      window.location.href = `${DOMAIN_URL}`;
    });

    $(`.btn__main__toggle`).on('click', function(){
      $('main').toggle();
    });

}
