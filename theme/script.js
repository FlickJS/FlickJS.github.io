document.addEventListener( 'DOMContentLoaded', function () {
var splide = new Splide( '.splide', {
    type   : 'loop',
    perPage: 3,
    gap: '20px',
    
  } );
  
  splide.mount();
  
} );