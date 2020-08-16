// import 'jquery'
import 'bootstrap'
import dialogPolyfill from 'dialog-polyfill'
import Cookies from 'js-cookie'

var dialogDark = document.getElementById('dialog-dark')
// var dialogDarkBtn = document.getElementById('dialog-dark-btn')
var dialogDarkDismiss = document.getElementById('dialog-dark-dismiss-btn')

var bodyElem = document.getElementsByTagName('body')

// register the dialog to polyfill
dialogPolyfill.registerDialog(dialogDark)

// add event listener for hiding dialogDark
dialogDarkDismiss.addEventListener('click', function () {
  bodyElem[0].setAttribute('style', 'overflow: unset;')
  Cookies.set('warningShown', 1)
  console.log('closing dialogDark')
})

// Show warning dialog for first time
window.setTimeout(function () {
  console.log('warningShown = ' + Cookies.get('warningShown'))
  if (Cookies.get('warningShown') === '1' && typeof Cookies.get('warningShown') !== 'undefined') {
    console.log('already shown..')
  } else {
    bodyElem[0].setAttribute('style', 'overflow: hidden;')
    dialogDark.showModal()
  }
}, 1500)

console.log('File `app.js` loaded')
