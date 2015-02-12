<html>
<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/2013.03.11/hoverintent.min.js"></script>
  <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
  
  <body>
  <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">                      

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>      
    </div>
  </div>
  <script> 
jQuery(document).ready(function () {
  "use strict";
  var $ = jQuery.noConflict();
  
      function showMenu() {
      $(this).removeClass("drop-collapsed");
      $(this).addClass("open");
    }
    function hideMenu(){
      $(this).removeClass("open");
      var $dropdown = $(".dropdown");

      $dropdown.each(function () {
        $(this).addClass("drop-collapsed");
      });
    }
  
  
      var $dropdown = $(".dropdown");

      $dropdown.each(function () {
        var $this = $(this);

        var $dropmenu = $this.find(".dropdown-menu");
        $dropmenu.css("height", $dropmenu.outerHeight());
        $this.addClass("drop-collapsed");
      });


       // dropdown menu hover intent
      var hovsettings = {
          timeout:0,
          interval: 0,
          over: showMenu,
          out: hideMenu
      };

      $(".dropdown").hoverIntent(hovsettings);
  
  
  
});
</script>
</body>
</html>