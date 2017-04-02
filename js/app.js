/**
 * Created by ilida on 31.03.2017.
 */

// utility functions
function forEach(array, callback) {
    var i, n;
    for (i = 0, n = array.length; i < n; i++) {
        callback(array[i], i, array);
    }
}



// MOBILE BUTTON MODULE
var MobileButton = function (btn, menu, options) {
    options = options || {};
    options = {
        activeClass: 'main_menu_active'
        , darkClass: options.darkClass || 'main_menu__dark'
    };
    var changeState = function () {
        if (!menu.classList.contains(options.activeClass)) {
            menu.classList.add(options.activeClass);
            // document.body.style.overflow = 'hidden';
        } else {
            menu.classList.remove(options.activeClass);
            // document.body.style.overflow = '';
        }

    }
        , dark = menu.getElementsByClassName(options.darkClass)[0];
    btn.addEventListener('click', changeState);
    dark.addEventListener('click', changeState);
};
// end MOBILE BUTTON MODULE

// WINDOW LOAD
window.addEventListener('load', function () {

//for MobileButton-module
    forEach(document.getElementsByClassName('menu-button'), function (el) {
        MobileButton(el, document.getElementsByClassName('main_menu')[0]);
    });
    //-----------------------
});