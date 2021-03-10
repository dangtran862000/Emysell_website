let navigation = document.querySelectorAll("nav > div > a");

window.addEventListener("scroll", () => {
  let top = window.scrollY;
  navigation.forEach(link => {
    let section = document.querySelector(link.hash);
    if (section.offsetTop <= top && section.offsetTop + section.offsetHeight > top){
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
});
