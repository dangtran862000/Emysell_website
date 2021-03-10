var navigation = document.querySelectorAll('nav > .block-nav a');

window.addEventListener('scroll',() => {
  var position = window.scrollY;
  navigation.forEach( link => {
    var current = document.querySelector(link.hash);
    if(current.offsetTop <= position && current.offsetTop + current.offsetHeight > position){
      link.classList.add('active');
      console.log('asdasd');
    } else {
      link.classList.remove('active');
    }
  });
})
