
<div class="nav-wrapper container">

  <a id="logo-container" href="/" class="brand-logo">Logo</a>
  <ul class="right hide-on-med-and-down" ng-controller="MenuCtrl">
    <li ng-repeat="menu in menus track by menu.name"><a href="<% menu.url %>"><% menu.name %></a></li>
  </ul>

  <a 
  href="#" 
  class="button-collapse show-on-med" 
  data-activates="slide-out" 
  data-sidenav="left" 
  data-menuwidth="300" 
  data-closeonclick="true">
    <i class="mdi-navigation-menu grey-text text-lighten-2"></i>
  </a>

</div>

<ul id="slide-out" class="side-nav" ng-controller="MenuCtrl">
  <li ng-repeat="menu in menus track by menu.name"><a href="<% menu.name %>"><% menu.name %></a></li>
</ul>