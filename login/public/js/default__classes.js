export class default__class1 {


  console_dev_mode(optIn) {
    // if DEV MODE ON ...
    if(localStorage['Dev-Mode']=='On'){
      console.log('%c'+optIn.msg, 'color: green; font-weight: bold;');
    }
  }

  // HELP
  help() {
    console.clear();

    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      console.log('Dark mode is enabled');
    } else {
      console.log('Dark mode is not enabled');
    }

    console.log('Dev-Mode', localStorage['Dev-Mode']);
    if(localStorage['Dev-Mode']=='On'){
      console.log('Disable `Dev-Mode`', 'localStorage.setItem(\'Dev-Mode\',\'Off\')');
    }
    else{
      console.log('Enable `Dev-Mode`', 'localStorage.setItem(\'Dev-Mode\',\'On\')');
    }

    console.log('%cApplication Help Guide', 'color: blue; font-size: 16px;');
    console.log('%cAvailable Functions:', 'color: green; font-weight: bold;');

    // List of available functions with descriptions
    const functions = [
        { name: 'functionOne()', description: 'Does something interesting.' },
        { name: 'functionTwo()', description: 'Performs another task.' },
        // Add more functions as needed
    ];

    functions.forEach(func => {
        console.log(`%c${func.name}`, 'color: navy; font-weight: bold;', `- ${func.description}`);
    });

    console.log('%cUsage:', 'color: green; font-weight: bold;');
    console.log('Call any function directly from the console. For example, type functionOne()');

    console.log('To execute Pipeline', 'run_pipeline()');

  }

}