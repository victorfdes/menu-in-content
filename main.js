(function () {
  var toggles = document.querySelectorAll('.advanced-menu-plugin .advanced-menu-toggle');
  toggles.forEach(function (toggle) {
    toggle.addEventListener('click', function (e) {
      e.currentTarget.parentElement.classList.toggle('open');
    })
  })

  var subMenus = document.querySelectorAll('.advanced-menu-plugin .sub-menu')
  subMenus.forEach(function (sub) {
    sub.style.maxHeight = sub.scrollHeight + 'px'
  })
})();
