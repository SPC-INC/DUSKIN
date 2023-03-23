/* global  */ // tUrl等のグローバル変数を宣言する

// import 'core-js/features/number/is-nan' // SwiperのIE対応
// import 'custom-event-polyfill' // SwiperのIE対応
// import { Autoplay, Controller, EffectFade, Navigation, Pagination, Swiper } from 'swiper'
import scrollLock from './functions/_scrollLock.js' // スクロールロック
// Swiper.use([Autoplay, Controller, EffectFade, Navigation, Pagination]) // Swiper宣言
// その他、Swiperで使う機能があったら上に追加で宣言する
// A11y, Autoplay, Controller, EffectCoverflow, EffectCube, EffectFade, EffectFlip, HashNavigation, History, Keyboard, Lazy, Mousewheel, Navigation, Pagination, Parallax, Scrollbar, Thumbs, Virtual, Zoom,

scrollLock('body', '#overlay')

$(function () {
  $('.js-ques-open').click(function () {
    $(this).toggleClass('open')
    $(this).next('.js-ques-content').slideToggle()
  })

  $('.js-form-tab').click(function () {
    let href = $(this).attr('href')
    $('.js-form-tab').removeClass('current')
    $(this).addClass('current')
    $('.js-form').removeClass('show')
    $('#form-' + href).addClass('show')
    return false
  })
})

$(function () {
  $('#closeModal , #modalBg').click(function () {
    $('#modalArea').fadeOut()
    $('#overlay').removeClass('active')
  })
})

let flg = window.performance.navigation.type
window.addEventListener('pageshow', () => {
  let list = ['first', 'reload', 'back']
  console.log(list[flg])
  if (list[flg] === 'reload') {
    window.location.href = './'
  }
  flg = 2
})
