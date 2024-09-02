import { content_tabs__fill } from './content_tabs.js';

export function nav_tabs__init(){
  let _container = $('.main__header--box');

  _container.append(`
    <ul class="nav nav-tabs justify-content-center" style="width:100%;">
      <li class="nav-item">
        <button class="nav-link active" data-slug="equipment" aria-current="page">Equipment</button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-slug="stats" >Stats</button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-slug="skills" >Skills</button>
      </li>
      <li class="nav-item">
        <button class="nav-link disabled" aria-disabled="true" data-slug="quest" >Quest</button>
      </li>
    </ul>
  `);
  content_tabs__fill("equipment");
  _events();
}

function _events(){

  $('.nav-link').on('click', function(){
    $('.nav-link').removeClass('active');
    $(this).addClass('active');
    content_tabs__fill($(this).attr('data-slug'));
  });

}