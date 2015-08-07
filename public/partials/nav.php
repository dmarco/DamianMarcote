
  <header class="center-align pink darken-2">
    <img src="http://webonise.co.uk/images/avatar-me.jpg" alt="" class="circle responsive-img">
    <h1>Parminder Klair</h1>
    <p>Senior Web Developer</p>
  </header>

  <ul class="tabs" ng-controller="MenuCtrl">
    <li class="tab col s3" ng-repeat="menu in menus track by menu.name">
      <a href="<% menu.url %>" class="<% menu.status %>"><i class="small material-icons"><% menu.icon %></i></a>
    </li>
  </ul> 

  <!-- <div class="row" ng-controller="MenuCtrl">
    <div class="col s3" ng-repeat="menu in menus track by menu.name">
      <a 
      href="<% menu.url %>"
      class="waves-effect waves-light btn-large"
       
      >
        <i class="material-icons"><% menu.icon %></i>
      </a>
    </div>
  </div>-->