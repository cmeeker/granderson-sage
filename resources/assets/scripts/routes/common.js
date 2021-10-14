/*eslint eqeqeq:0*/

// import Highway from '@dogstudio/highway'

export default {
  init() {
    // JavaScript to be fired on all pages


  //===== Nav Animation
  $(document).ready(function() {
    if ($(window).width() > 769) {
      // $('.topNavLogo').css('width', '100%')
      // $('.bottomNavLogo').css('width', '100%')
      // $('.topNavLogo, .bottomNavLogo').animate(
      //   {
      //     width: '100%',
      //   },
      //   800,
      // )
      // $('.ulineLeft, .ulineRight').animate(
      //   {
      //     transform: 'scaleX(1)',
      //   },
      //   800,
      // )
      $('.uline').addClass('transX')
      setTimeout(function() {
        $('.uline').hide()
        $('.topNav').addClass('slideTop')
        $('.topNav .innerNav').addClass('bdbg')
        $('.bottomNav').addClass('slideBottom bdtg')
      }, 1600)
      setTimeout(function() {
        $('.topNav').removeClass('translide')
        $('.bottomNav').removeClass('translide')
        $('.secNav').css('opacity', '1')
        $('.navItems').css('opacity', '1')
      }, 2600)
    }
    else {
      // $('.topNavLogo').css('width', '100%')
      // $('.bottomNavLogo').css('width', '100%')
      // $('.white, body').addClass('grey')
      // $('.topNavLogo, .bottomNavLogo').animate(
      //   {
      //     width: '100%',
      //   },
      //   800,
      // )
      $('.uline').addClass('transX')
      setTimeout(function() {
        $('.uline').hide()
        $('.topNav').addClass('slideTop bdbg')
        $('.bottomNav').addClass('slideBottom bdtg')
        
      }, 1200)
      setTimeout(function() {
        $('.topNav').removeClass('translide')
        $('.bottomNav').removeClass('translide')
        // $('.white, body').removeClass('grey')
        $('.secNav').css('opacity', '1')
        $('.navItems').css('opacity', '1')
      }, 2200)
    }
  })

  let vh = window.innerHeight * 0.01
  console.log(vh);
  // Then we set the value in the --vh custom property to the root of the document
  // document.documentElement.style.setProperty('--vh', `${vh}px`)

  $(window).resize(function() {
    let vh = window.innerHeight * 0.01
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`)
  })

},
finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
