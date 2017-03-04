<body ng-app="myApp" class="container">
  <div id="wrapper">
    <div id="header" ng-controller="NavigationController">
        <div id="menu">
          <?php MainMenuItemsDisplay();
              DisplayWidgetPosition("submenu");
          ?>
        </div>
        <div id="logo"><h2>SingePage Framework</h2></div>
    </div>




      <div id="content">
      	<!-- Import page views -->
        <div ng-view></div>
      </div>

<br><br><br><br><br><br>

 <?php DisplayWidgetPosition("left"); ?>



    <div id="footer">
      FOOTER
    </div>


  </div> <!-- Wrapper end -->
</body>
