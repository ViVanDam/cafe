$(document).ready(function () {
  $(window).scroll(function () {
    let lastScrollPosition = window.scrollY;
    setTimeout(() => {
      const currentScrollPosition = window.scrollY;
      if (currentScrollPosition > lastScrollPosition) {
        $("header").addClass("hidden");
      } else if (currentScrollPosition < lastScrollPosition) {
        $("header").removeClass("hidden");
      } else {
      }
      lastScrollPosition = currentScrollPosition;
    }, 500);
  });
});
