<div class="container">
  <div class="row">
    <div class="col l6 s12">
      <h5 class="white-text">Footer Content</h5>
      <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
    </div>
    <div class="col l4 offset-l2 s12">
      <h5 class="white-text">Links</h5>
      <ul ng-controller="MenuCtrl">
        <li ng-repeat="menu in menus track by menu.name">
          <a href="<% menu.name %>" class="grey-text text-lighten-3"><% menu.name %></a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="footer-copyright grey darken-3">
  <div class="container">
    <span class="grey-text text-lighten-4 right">© 2014 Copyright Text</span>
  </div>
</div>