// mapState.js
let dashboard__ready = false;

export function dashboard__ready__set(value) {
    dashboard__ready = value;
}

export function dashboard__isReady() {
    return dashboard__ready;
}
