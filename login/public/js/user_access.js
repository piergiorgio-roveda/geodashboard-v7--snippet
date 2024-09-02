import { name__random } from './name.js';
import { dashboard__init } from './dashboard.js';
import { fake_terminal__init } from './fake_terminal.js';

let user__access__status = false;

export function user_access__isReady(){
  return user__access__status;
}

export async function user_access__init(){

  $('.main__body--container').empty();

  btn__main__access__set();

  $('.btn__main__access').on('click',_login_logout);

  // Check if localStorage.secretKey is set
  if(localStorage.getItem('secretKey')) {
    // _onsole.log('secretKey is set:', localStorage.getItem('secretKey'));
    // Add code here if secretKey is set
    await _secretkey__verify();
  } 
  else {
    // _onsole.log('secretKey is not set');
    // Add code here if secretKey is not set
    $('.main__body--container').html(`
      <div \
        class="login--container" \
        style="
          display:flex;
          flex-wrap:nowrap;
          align-items:center;
          justify-content:center;
          width: 100%;
        ">
        <div \
          class="login--box" \
          style="
            max-width: 300px;
            padding: 1rem 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
          ">
          <h1 style="font-size: xx-large;">Restricted area</h1>
        </div>
      </div>
    `);

    $('.login--box').append(`
      <div class="login--page login--no_access" style="display:block;">
        <p>\
          You do not have access to this area. Please enter your secret key:
        </p>
        <textarea \
          id="secretKeyInput" \
          style="width:100%;" \
          placeholder="Enter your secret key here"></textarea>
        <div class="login--no_access--btns" \
          style="display:flex;justify-content: flex-start;gap:0.5rem;">
          <button id="accessButton" class="btn btn-danger" \
            style="width: 100%;">\
            Try to Access</button>
          <button id="secretKey__add_new" class="btn btn-primary" \
            style="width: 38px;">\
            <i class="bi bi-person-plus-fill"></i></button>
        </div>
        <div class="login--no_access--btns-skip" \
          style="display:flex;justify-content: flex-start;gap:0.5rem;">
          <button id="secretKey__skip" class="btn btn btn-link" \
            style="width: 50%;">\
            SKIP</button>
          <button id="secretKey__it_is_free" class="btn btn btn-link" \
            style="width: 50;">\
            Is It Free?</button>
        </div>
      </div>
    `);

    $('.login--box').append(`
      <div class="login--page login--add_new" style="display:none;">
        <p>
          To access our platform, please create a new user account. \
          Simply fill in the details below, and you’ll be able \
          to explore all the features without limits or consequences\
        </p>
        <div class="login--add_new--secretkey" style="width:100%;text-align:center;">
          <pre><code class="">AAAA-BBBB-CCCC-DDDD</code></pre>
        </div>
        <input class="form-control login--add_new--nickname" \
          type="text" placeholder="Default input" aria-label="default input example">
        <div class="login--add_new--btns" \
          style="display:flex;justify-content: flex-start;gap:0.5rem;margin-top: 0.5rem;">
          <button id="secretKey__return_login" class="btn btn-primary" \
            style="width: 38px;">\
            <i class="bi bi-arrow-left"></i></button>
          <button id="secretKey__create" class="btn btn-danger" \
            style="width: 100%;">\
            <i class="bi bi-person-plus-fill"></i> CREATE</button>
        </div>
      </div>
    `);

    $('.login--box').append(`
      <div class="login--page login--it_is_free" style="display:none;">
        <p style="font-size:small;">
          <u>Create a New User Account is <b>FREE</b></u>\
          <br>Welcome! To access our platform, please create a new \
          user account. As a member of the Pixels community, you \
          have free access to this test application. \
          Data analytics are collected anonymously to \
          help improve our services. \
          <br><u>Already have an account?</u> \
          <br>Need help or have questions? \
          Contact us at lima.cityplanner[at]gmail.com.\
        </p>
        <div class="login--it_is_free--btns" \
          style="display:flex;justify-content: flex-start;gap:0.5rem;margin-top: 0.5rem;">
          <button id="it_is_free--Roger-That" class="btn btn-secondary" \
            style="width: 100%;">\
            Roger that</button>
        </div>
      </div>
    `);

    // Add an event listener to the button
    $('#accessButton').on('click', async function() {
      const secretKey = $('#secretKeyInput').val();
      if(secretKey) {
        // Store the secretKey in localStorage and try to access again
        localStorage.setItem('secretKey', secretKey);
        await _secretkey__verify();
        return;
        // _onsole.log('Trying to access with new secretKey...');
        // You might want to call _checkAccess() again or refresh the page
        // _checkAccess(); // Uncomment if you want to check access immediately
        // Or you can refresh the page to trigger the check again
        // location.reload(); // Uncomment if refreshing the page is desired
      } else {
        alert('Please enter a secret key.');
        return;
      }
    });

    $('#secretKey__add_new').on('click', function() {
      $('.login--page').hide();
      $('.login--add_new').show();
      let _new__secretkey = makeid(6)+'-'+makeid(6)+'-'+makeid(6)+'-'+makeid(6);
      $('.login--add_new--secretkey').html(`
        <pre><code class="">${_new__secretkey}</code></pre>
      `);
      $('.login--add_new--secretkey').attr(`new_secreteKey`,_new__secretkey);
      $('.login--add_new--nickname').val(name__random());
    });

    $('#secretKey__return_login').on('click', function() {
      $('.login--page').hide();
      $('.login--no_access').show();
    });

    $('#secretKey__create').on('click', async function() {

      const _new_nickname = $('.login--add_new--nickname').val();
      const _new_secreteKey = $('.login--add_new--secretkey').attr(`new_secreteKey`);

      // Store the secretKey in localStorage and try to access again
      localStorage.setItem('secretKey', _new_secreteKey);
      await _user__create({
        _new_nickname,
        _new_secreteKey
      });
      return;


    });

    $('#secretKey__skip').on('click', function() {
      $('.login--container').remove();
      $('.btn__main__access').prop('disabled', false);
      console.log('dashboard__init!');
      dashboard__init();
      fake_terminal__init();
    });

    $('#secretKey__it_is_free').on('click', function() {
      $('.login--page').hide();
      $('.login--it_is_free').show();
    });

    $('#it_is_free--Roger-That').on('click', function() {
      $('.login--page').hide();
      $('.login--no_access').show();
    });

  }

}

function btn__main__access__set(){

  if(user__access__status == true){
    $('.btn__main__access').prop('disabled', false);
    $('.btn__main__access').removeClass('btn-danger');
    $('.btn__main__access').addClass('btn-dark');
    $('.btn__main__access').html(`<i class="bi bi-box-arrow-left"></i>`);
  }
  else{
    $('.btn__main__access').prop('disabled', true);
    $('.btn__main__access').addClass('btn-danger');
    $('.btn__main__access').removeClass('btn-dark');
    $('.btn__main__access').html(`<i class="bi bi-key-fill"></i>`);
  }

}

async function _secretkey__verify(){

  let _url = './api/users/';

  let _collection = `verify`;
  // Your search logic here
  let datastring = {
    name:_collection,
    secreteKey:localStorage.getItem('secretKey')
  } 

  let _send = () => {
    axios
      .post(_url, datastring)
      .then((response) => {

        const _r = response;
        // _onsole.log(_r);
        if(parseInt(_r.data.response) != 200){
          _logout();
        }
        else{
          _access__enabled();
        }
        // resolve(); // Resolve the promise

      })
      .catch((error) => {
        console.error(error);
        // reject(error); // Reject the promise if there's an error
      })
  }
  _send();

}

async function _user__create(optIn){

  const {
    _new_nickname,
    _new_secreteKey
  } = optIn;

  let _url = './api/users/';

  let _collection = `create`;
  // Your search logic here
  let datastring = {
    name:_collection,
    new_nickname:_new_nickname,
    new_secreteKey:_new_secreteKey
  } 

  let _send = () => {
    axios
      .post(_url, datastring)
      .then((response) => {

        const _r = response;
        // _onsole.log(_r);
        _access__enabled();
        // resolve(); // Resolve the promise

      })
      .catch((error) => {
        console.error(error);
        // reject(error); // Reject the promise if there's an error
      })
  }
  _send();

}

function _login_logout(){

  if(user__access__status == true){
    localStorage.removeItem('secretKey');

    let _url = './api/users/';
    let session__end = () => {
      axios
        .post(_url, {
          name:'session__end'
        })
        .then((response) => {

          const _r = response;
          // _onsole.log(_r);
          user__access__status = false; // Not useful but ..
          location.reload();
          // resolve(); // Resolve the promise

        })
        .catch((error) => {
          console.error(error);
          // reject(error); // Reject the promise if there's an error
        })
    }
    session__end();
  }
  else{
    user_access__init();
  }

}

function _access__enabled(){

  let _url = './api/users/';

  user__access__status = true;

  let session__set = () => {
    axios
      .post(_url, {
        name:'session__set',
        secreteKey:localStorage.getItem('secretKey'),
      })
      .then((response) => {

        const _r = response;
        // _onsole.log(_r);
        session__get();
        // resolve(); // Resolve the promise

      })
      .catch((error) => {
        console.error(error);
        // reject(error); // Reject the promise if there's an error
      })
  }
  session__set();

  let session__get = () => {
    axios
      .post(_url, {
        name:'session__get'
      })
      .then((response) => {

        const _r = response;

        $('.login--container').remove();

        btn__main__access__set();

        console.log('dashboard__init!');
        dashboard__init();
        fake_terminal__init();

      })
      .catch((error) => {
        console.error(error);
        // reject(error); // Reject the promise if there's an error
      })
  }


}

function makeid(length) {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    let counter = 0;
    while (counter < length) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
      counter += 1;
    }
    return result;
}
