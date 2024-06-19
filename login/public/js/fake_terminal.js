// import treeify from 'path/to/treeify/esm/version'; // Adjust the path based on actual availability

let scanlines;
let tv;
let term;
let cmd;

export async function fake_terminal__init(){

  terminal__add_new();

  // var treeify = require('treeify');
  console.log(
    treeify.asTree({
        apples: 'gala',      //  ├─ apples: gala
        oranges: 'mandarin'  //  └─ oranges: mandarin
    }, true)
  );

}

function terminal__add_new() {

  $('.main__body--container').html(`
      <div class="tv" style="height:100%;">
          <div id="terminal" style="height:100%;"></div>
          <div class="collection external terminal">
              See Also: <a href="https://codepen.io/jcubic/pen/JjpzzOr" target="top">Red version</a>, or <a href="https://codepen.io/collection/AeGGxz" target="top">Vintage Screen Effects</a>, <a href="https://codepen.io/collection/Mgrkmw"  target="top">Terminal Things</a>, and <a href="https://codepen.io/collection/LPjoaW" target="top">other jQuery Terminal demos</a>.
          </div>
          <div class="flicker"></div>
          <div class="scanlines"></div>
          <div class="noise"></div>
      </div>
      <button class="term__enable">ENABLE CONSOLE</button>
  `);
  $(`.term__enable`).toggle();

  scanlines = $('.scanlines');
  tv = $('.tv');
  // ref: https://stackoverflow.com/q/67322922/387194
  var __EVAL = (s) => eval(`void (__EVAL = ${__EVAL}); ${s}`);

  term = $('#terminal').terminal(function(command, term) {
    cmd = $.terminal.parse_command(command);
    if (cmd.name === 'exit') {
        exit();
    } 
    else if (cmd.name === 'echo') {
        term.echo(cmd.rest);
    } 
    else if (cmd.name === 'help') {
        term.echo(`[[!guib;#000000;#fff700]Something happens ...]`);
        term.echo(`Complete list of commands are available at: https://terminal.jcubic.pl/api_reference.php#extended_commands`);
    } 
    else if (command !== '') {
      try {
          var result = __EVAL(command);
          if (result && result instanceof $.fn.init) {
              term.echo('<#jQuery>');
          } else if (result && typeof result === 'object') {
              tree(result);
          } else if (result !== undefined) {
              term.echo(new String(result));
          }
      } catch(e) {
          term.error(new String(e));
      }
    }
  },
  {
    name: 'js_demo',
    onResize: set_size,
    exit: false,
    // detect iframe codepen preview
    enabled: $('body').attr('onload') === undefined,
    onInit: function() {
      set_size();
      this.echo('Type [[b;#fff;]exit] to see turn off terminal.');
      this.echo('Type [[b;#fff;]help] for more stuff.');
    },
    onClear: function() {
        console.log(this.find('video').length);
        this.find('video').map(function() {
            console.log(this.src);
            return this.src;
        });
    },
    prompt: 'js> '
  });
  // for codepen preview
  if (!term.enabled()) {
    term.find('.cursor').addClass('blink');
  }

  // cssVars(); // ponyfill

}

function exit() {

  // $('.tv').addClass('collapse');
  // term.disable();
  $(`.term__enable`).toggle();
  $('.main__body--container').html(`
      <button class="term__enable">ENABLE CONSOLE</button>
  `);
  $('.term__enable').on('click', function() {
    $('.tv').removeClass('collapse');
    // term.enable();
    terminal__add_new();
  });

}

function set_size() {
  // for window height of 170 it should be 2s
  var height = $(window).height();
  var width = $(window).width()
  var time = (height * 2) / 170;
  scanlines[0].style.setProperty("--time", time);
  tv[0].style.setProperty("--width", width);
  tv[0].style.setProperty("--height", height);
}

function tree(obj) {
    term.echo(treeify.asTree(obj, true, true));
}

function camera() {
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        term.pause();
        var media = navigator.mediaDevices.getUserMedia(constraints);
        media.then(function(mediaStream) {
            term.resume();
            var stream;
            if (!acceptStream) {
                stream = window.URL.createObjectURL(mediaStream);
            } else {
                stream = mediaStream;
            }
            term.echo('<video data-play="true" class="self"></video>', {
                raw: true,
                onClear: function() {
                    if (!acceptStream) {
                        URL.revokeObjectURL(stream);
                    }
                    mediaStream.getTracks().forEach(track => track.stop());
                },
                finalize: function(div) {
                    var video = div.find('video');
                    if (!video.length) {
                        return;
                    }
                    if (acceptStream) {
                        video[0].srcObject = stream;
                    } else {
                        video[0].src = stream;
                    }
                    if (video.data('play')) {
                        video[0].play();
                    }
                }
            });
        });
    }
}

function pause() {
  term.find('video').each(function() {
      this.pause(); 
  });
}

function grab() {
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        term.pause();
        var media = navigator.mediaDevices.getUserMedia(constraints);
        media.then(function(mediaStream) {
            const mediaStreamTrack = mediaStream.getVideoTracks()[0];
            const imageCapture = new ImageCapture(mediaStreamTrack);
            return imageCapture.takePhoto();
        }).then(function(blob) {
            term.echo('<img src="' + URL.createObjectURL(blob) + '" class="self"/>', {
                raw: true,
                finialize: function(div) {
                    div.find('img').on('load', function() {
                        URL.revokeObjectURL(this.src);
                    });
                }
            }).resume();
        }).catch(function(error) {
            term.error('Device Media Error: ' + error);
        });
    }
}

async function pictuteInPicture() {
    var [video] = $('video');
    try {
        if (video) {
            if (video !== document.pictureInPictureElement) {
                await video.requestPictureInPicture();
            } else {
                await document.exitPictureInPicture();
            }
        }
  } catch(error) {
      term.error(error);
  }
}

function clear() {
  term.clear();
}

