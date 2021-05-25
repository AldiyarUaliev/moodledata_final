<?php

class __Mustache_cf1687a4a3282306cd6b12e7e0c9eac7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="topbar-backdrop hidden"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . 'document.addEventListener("DOMContentLoaded", function() {
';
        $buffer .= $indent . '  //The first argument are the elements to which the plugin shall be initialized
';
        $buffer .= $indent . '  //The second argument has to be at least a empty object or a object with your desired options
';
        $buffer .= $indent . '  OverlayScrollbars(document.querySelectorAll(\'#nav-drawer, .sidebar-accordion-body\'),
';
        $buffer .= $indent . '  {scrollbars :
';
        $buffer .= $indent . '      {
';
        $buffer .= $indent . '        visibility       : "auto",
';
        $buffer .= $indent . '        autoHide         : "l",
';
        $buffer .= $indent . '        autoHideDelay    : 800,
';
        $buffer .= $indent . '        dragScrolling    : true,
';
        $buffer .= $indent . '        clickScrolling   : false,
';
        $buffer .= $indent . '        touchSupport     : true
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '  });
';
        $buffer .= $indent . '  OverlayScrollbars(document.querySelectorAll(\'.region-main-settings-menu .dropdown-menu, .course-contacts-ext-content, .dropdown-scrollable\'),
';
        $buffer .= $indent . '  {scrollbars :
';
        $buffer .= $indent . '      {
';
        $buffer .= $indent . '        visibility       : "auto",
';
        $buffer .= $indent . '        autoHide         : "never",
';
        $buffer .= $indent . '        autoHideDelay    : 800,
';
        $buffer .= $indent . '        dragScrolling    : true,
';
        $buffer .= $indent . '        clickScrolling   : false,
';
        $buffer .= $indent . '        touchSupport     : true
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '  });
';
        $buffer .= $indent . '  OverlayScrollbars(document.querySelectorAll(\'.s-courses .course-box-content-desc, .form-description pre, .accordion-nav-content\'),
';
        $buffer .= $indent . '  {scrollbars :
';
        $buffer .= $indent . '      {
';
        $buffer .= $indent . '        visibility       : "auto",
';
        $buffer .= $indent . '        dragScrolling    : true,
';
        $buffer .= $indent . '        clickScrolling   : false,
';
        $buffer .= $indent . '        touchSupport     : true
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '  });
';
        $buffer .= $indent . '});
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '$(".course_category_tree").on("click", "[data-toggle=\'collapse\'], .collapseexpand, .content .subcategories .category .info, .course_category_tree .category.with_children>.info>.categoryname, .category.with_children:not(.collapsed), .category.with_children" ,function(){
';
        $buffer .= $indent . '  OverlayScrollbars(document.querySelectorAll(\'.course-contacts-ext-content, .course-box-content-desc\'),
';
        $buffer .= $indent . '  {scrollbars :
';
        $buffer .= $indent . '      {
';
        $buffer .= $indent . '        visibility       : "auto",
';
        $buffer .= $indent . '        autoHide         : "never",
';
        $buffer .= $indent . '        autoHideDelay    : 800,
';
        $buffer .= $indent . '        dragScrolling    : true,
';
        $buffer .= $indent . '        clickScrolling   : false,
';
        $buffer .= $indent . '        touchSupport     : true
';
        $buffer .= $indent . '      }
';
        $buffer .= $indent . '  });
';
        $buffer .= $indent . '});
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'window.onscroll = function() {stickyNav()};
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'var navbar = document.getElementById("topBarContainer");
';
        $buffer .= $indent . 'var navbarH = navbar.offsetHeight;
';
        $buffer .= $indent . 'var settingsBtn = document.getElementById("settingsMenu");
';
        $buffer .= $indent . 'var sticky = navbar.offsetTop + ';
        // 'topBarOffsetTop' section
        $value = $context->find('topBarOffsetTop');
        $buffer .= $this->section006aaec4437fc82655e4b0e008dea5bb($context, $indent, $value);
        // 'topBarOffsetTop' inverted section
        $value = $context->find('topBarOffsetTop');
        if (empty($value)) {
            
            $buffer .= '300';
        }
        $buffer .= ';
';
        $buffer .= $indent . '
';
        $buffer .= $indent . 'function stickyNav() {
';
        $buffer .= $indent . '  if (window.pageYOffset > sticky) {
';
        $buffer .= $indent . '    navbar.classList.add("sticky-nav");
';
        $buffer .= $indent . '    settingsBtn.classList.add("sticky");
';
        $buffer .= $indent . '    settingsBtn.style.top = 10 + navbarH + "px";
';
        $buffer .= $indent . '  } else {
';
        $buffer .= $indent . '    navbar.classList.remove("sticky-nav");
';
        $buffer .= $indent . '    settingsBtn.classList.remove("sticky");
';
        $buffer .= $indent . '    settingsBtn.style.top = "-15px";
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionC1b0afdc8a15331980ce83760cad250f($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script src="';
        $value = $this->resolveValue($context->find('siteurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '/theme/space/addons/bootstrapnavbar/bootstrap-4-navbar.min.js"></script>
';
        $buffer .= $indent . '
';
        // 'herovideoenabled' section
        $value = $context->find('herovideoenabled');
        $buffer .= $this->section57436d1e2aa5051449cffb52979fd370($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->find('additionalfooterhtml'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }

    private function section006aaec4437fc82655e4b0e008dea5bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{topBarOffsetTop}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('topBarOffsetTop'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1b0afdc8a15331980ce83760cad250f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {

  var searchbar = $("#searchField"),
      searchbox = $(".search-box"),
      searchbarToggle = $("#searchBtn"),
      searchbarClose = $("#searchBtnClose");

  searchbarToggle.on("click", function(e) {
     e.preventDefault();
     searchbar.toggleClass("show");
     searchbox.toggleClass("active");
  });

  searchbarClose.on("click", function(e) {
     searchbar.removeClass("show");
     searchbox.removeClass("active");
  });

  var mobileTopBar = $(".s-top-container"),
      mobileTopBarBtn = $("#showMobileTopBar");
      mobileTopBarToggle = $("#mobileTopBarBtn, #mobileTopBarCloseBtn, .topbar-backdrop");

  mobileTopBarBtn.on("click", function(e) {
     e.preventDefault();
     mobileTopBar.toggleClass("show");
     mobileTopBarToggle.toggleClass("hidden");
  });

  var sidebar = $("#nav-drawer"),
      sidebarToggle = $(".sidebar-btn, .sidebar-btn--close");
      pageWrapper = $("#page-wrapper, #page-footer .c-container");
      topBarWrapper = $(".s-top");

  /*
   * Bootstrap Cookie Alert by Wruczek
   * https://github.com/Wruczek/Bootstrap-Cookie-Alert
   * Released under MIT license
   */
  (function () {
      "use strict";

      var customAlert = document.querySelector("#customAlert");
      var closeCustomAlert = document.querySelector("#customAlertClose");

      if (!customAlert) {
         return;
      }

      customAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

      // Show the alert if we cant find the "closeCustomAlert" cookie
      if (!getCookie("closeCustomAlert")) {
          customAlert.classList.add("show");
      }

      // When clicking on the agree button, create a 1 year
      // cookie to remember user\'s choice and close the banner
      closeCustomAlert.addEventListener("click", function () {
          setCookie("closeCustomAlert", true, 1);
          customAlert.classList.remove("show");
      });

      // Cookie functions from w3schools
      function setCookie(cname, cvalue, exdays) {
          var d = new Date();
          d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
          var expires = "expires=" + d.toUTCString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
      }

      function getCookie(cname) {
          var name = cname + "=";
          var decodedCookie = decodeURIComponent(document.cookie);
          var ca = decodedCookie.split(\';\');
          for (var i = 0; i < ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0) === \' \') {
                  c = c.substring(1);
              }
              if (c.indexOf(name) === 0) {
                  return c.substring(name.length, c.length);
              }
          }
          return "";
      }
  })();


});

';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  var searchbar = $("#searchField"),
';
                $buffer .= $indent . '      searchbox = $(".search-box"),
';
                $buffer .= $indent . '      searchbarToggle = $("#searchBtn"),
';
                $buffer .= $indent . '      searchbarClose = $("#searchBtnClose");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  searchbarToggle.on("click", function(e) {
';
                $buffer .= $indent . '     e.preventDefault();
';
                $buffer .= $indent . '     searchbar.toggleClass("show");
';
                $buffer .= $indent . '     searchbox.toggleClass("active");
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  searchbarClose.on("click", function(e) {
';
                $buffer .= $indent . '     searchbar.removeClass("show");
';
                $buffer .= $indent . '     searchbox.removeClass("active");
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  var mobileTopBar = $(".s-top-container"),
';
                $buffer .= $indent . '      mobileTopBarBtn = $("#showMobileTopBar");
';
                $buffer .= $indent . '      mobileTopBarToggle = $("#mobileTopBarBtn, #mobileTopBarCloseBtn, .topbar-backdrop");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  mobileTopBarBtn.on("click", function(e) {
';
                $buffer .= $indent . '     e.preventDefault();
';
                $buffer .= $indent . '     mobileTopBar.toggleClass("show");
';
                $buffer .= $indent . '     mobileTopBarToggle.toggleClass("hidden");
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  var sidebar = $("#nav-drawer"),
';
                $buffer .= $indent . '      sidebarToggle = $(".sidebar-btn, .sidebar-btn--close");
';
                $buffer .= $indent . '      pageWrapper = $("#page-wrapper, #page-footer .c-container");
';
                $buffer .= $indent . '      topBarWrapper = $(".s-top");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '  /*
';
                $buffer .= $indent . '   * Bootstrap Cookie Alert by Wruczek
';
                $buffer .= $indent . '   * https://github.com/Wruczek/Bootstrap-Cookie-Alert
';
                $buffer .= $indent . '   * Released under MIT license
';
                $buffer .= $indent . '   */
';
                $buffer .= $indent . '  (function () {
';
                $buffer .= $indent . '      "use strict";
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      var customAlert = document.querySelector("#customAlert");
';
                $buffer .= $indent . '      var closeCustomAlert = document.querySelector("#customAlertClose");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      if (!customAlert) {
';
                $buffer .= $indent . '         return;
';
                $buffer .= $indent . '      }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      customAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      // Show the alert if we cant find the "closeCustomAlert" cookie
';
                $buffer .= $indent . '      if (!getCookie("closeCustomAlert")) {
';
                $buffer .= $indent . '          customAlert.classList.add("show");
';
                $buffer .= $indent . '      }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      // When clicking on the agree button, create a 1 year
';
                $buffer .= $indent . '      // cookie to remember user\'s choice and close the banner
';
                $buffer .= $indent . '      closeCustomAlert.addEventListener("click", function () {
';
                $buffer .= $indent . '          setCookie("closeCustomAlert", true, 1);
';
                $buffer .= $indent . '          customAlert.classList.remove("show");
';
                $buffer .= $indent . '      });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      // Cookie functions from w3schools
';
                $buffer .= $indent . '      function setCookie(cname, cvalue, exdays) {
';
                $buffer .= $indent . '          var d = new Date();
';
                $buffer .= $indent . '          d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
';
                $buffer .= $indent . '          var expires = "expires=" + d.toUTCString();
';
                $buffer .= $indent . '          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
';
                $buffer .= $indent . '      }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '      function getCookie(cname) {
';
                $buffer .= $indent . '          var name = cname + "=";
';
                $buffer .= $indent . '          var decodedCookie = decodeURIComponent(document.cookie);
';
                $buffer .= $indent . '          var ca = decodedCookie.split(\';\');
';
                $buffer .= $indent . '          for (var i = 0; i < ca.length; i++) {
';
                $buffer .= $indent . '              var c = ca[i];
';
                $buffer .= $indent . '              while (c.charAt(0) === \' \') {
';
                $buffer .= $indent . '                  c = c.substring(1);
';
                $buffer .= $indent . '              }
';
                $buffer .= $indent . '              if (c.indexOf(name) === 0) {
';
                $buffer .= $indent . '                  return c.substring(name.length, c.length);
';
                $buffer .= $indent . '              }
';
                $buffer .= $indent . '          }
';
                $buffer .= $indent . '          return "";
';
                $buffer .= $indent . '      }
';
                $buffer .= $indent . '  })();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57436d1e2aa5051449cffb52979fd370(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script src="{{siteurl}}/theme/space/addons/vidbg/vidbg.js"></script>
<script>
var instance = new vidbg(\'.c-hero-container--video\', {
  mp4: \'{{{ herovideomp4 }}}\',
  webm: \'{{{ herovideowebm }}}\',
  poster: \'{{{ heroimg }}}\',
})
</script>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<script src="';
                $value = $this->resolveValue($context->find('siteurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/theme/space/addons/vidbg/vidbg.js"></script>
';
                $buffer .= $indent . '<script>
';
                $buffer .= $indent . 'var instance = new vidbg(\'.c-hero-container--video\', {
';
                $buffer .= $indent . '  mp4: \'';
                $value = $this->resolveValue($context->find('herovideomp4'), $context);
                $buffer .= $value;
                $buffer .= '\',
';
                $buffer .= $indent . '  webm: \'';
                $value = $this->resolveValue($context->find('herovideowebm'), $context);
                $buffer .= $value;
                $buffer .= '\',
';
                $buffer .= $indent . '  poster: \'';
                $value = $this->resolveValue($context->find('heroimg'), $context);
                $buffer .= $value;
                $buffer .= '\',
';
                $buffer .= $indent . '})
';
                $buffer .= $indent . '</script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
