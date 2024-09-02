import { content_data } from './content_data.js';

const _content_data = new content_data();

function timeout(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

export async function content_tabs__fill(slug){

  let _container = $('.main__body--container');
  _container.css('padding-top','1rem');
  _container.empty();

  switch(slug){
    case 'equipment':
      let _r = _content_data.items__get();
      if(_r.features.length === 0){
        await timeout(300);
        content_tabs__fill(slug);
        return;
      }
      _r.features.forEach(element => {
        let _p = element.properties;
        _container.append(`\
          <div class="main__row__box__grid" style="\
              grid-template-columns: 64px 1fr 32px;\
            " >
            <div style="text-align:center;"><span class="badge text-bg-primary">Primary</span></div>
            <div style="font-size: small;">${_p.page_label}</div>
            <div style="text-align:center;&quot;">
              <button slug="${_p.page_slug}" class="button--link widget__backpack__detail btn btn-sm btn-light">\
                <i class="bi bi-box-arrow-up-right"></i></button>
            </div>
          </div>
        `);
        $(`.button--link[slug="${_p.page_slug}"]`).on('click', function(){
          window.location.href = _p.page_url;
        });
      });
      fill__empty(_container);


      break;
    case 'stats':
      fill__empty(_container);
      break;
    case 'skills':
      fill__empty(_container);
      break;
    case 'quest':
      _container.html(`

      `);
      break;
  }

}

function fill__empty(_container){
  for (let index = 0; index < 25; index++) {
    _container.append(`\
      <div class="main__row__box__grid" style="\
          grid-template-columns: 64px 1fr 32px;\
        " >
        <div style="text-align:center;"><span class="badge text-bg-light">n/a</span></div>
        <div style="font-size: small;">{{empty}}</div>
        <div style="text-align:center;&quot;">
          <button slug="{{empty}}" \
            class="button--link widget__backpack__detail btn btn-sm btn-light" \
            disabled >\
            <i class="bi bi-box-arrow-up-right"></i></button>
        </div>
      </div>
    `);
  }
}