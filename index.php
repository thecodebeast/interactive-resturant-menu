<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Touchscreen Menu Template</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="menuList" class="container-fluid">
      <div class="divide20"></div>
      
      <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img1.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>

     <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img2.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>

      <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img1.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>

      <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img2.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>
      <div class="clearfix"></div>

      <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img1.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>

      <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img2.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>

     <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img1.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>

     <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img2.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>
      <div class="clearfix"></div>

      <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img1.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>

      <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img2.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>

     <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img1.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>

      <div class="col-md-3 menuItem">
        <img class="rounded" src="img/food/img2.jpg" width="100%">
        <h3>FOOD ITEM</h3>
      </div>
      <div class="clearfix"></div>

   
    </div>

    <div id="theMenu" class="container-fluid" style="display:none;">
      <div class="divide20"></div>
      <div class="col-md-12">
        <div id="goBack"><i class="fa fa-arrow-circle-o-left"></i> GO BACK</div>
      </div>
      <div class="clearfix"></div>
      <div class="divide20"></div>
      <div class="col-md-6">
        <div id="video">
          <iframe id="theFrame" width="560" height="315" src="https://www.youtube.com/embed/AmC9SmCBUj4?wmode=opaque&autoplay=0&HD=1;rel=0;showinfo=0;controls=0" frameborder="0" allowfullscreen></iframe>
          <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/AmC9SmCBUj4?wmode=opaque&autoplay=1&HD=1;rel=0;showinfo=0;controls=0" frameborder="0" allowfullscreen></iframe> -->
        </div>
      </div>
       <div class="col-md-6">
        <h2 class="chunk">MENU ITEM 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>
        </p>
      </div>
      
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fluidvids.min.js"></script>
    <script type="text/javascript">
      function hideList(){
        $('#menuList').hide();
        $('#theMenu').show();
      }

      function hideMenu(){
        $('#theMenu').hide();
        $('#menuList').show();
      }

       $( document ).ready(function() {
        
        $( ".menuItem" ).click(function() {

            $('#theMenu').removeClass('fadeOut');
            $('#menuList').removeClass('slideInLeft');
            $('#menuList').addClass('animated fadeOut');
            $('#menuList').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', hideList);
            $('#theMenu').addClass('animated slideInRight');
            $( "#theFrame" ).attr( 'src' , 'https://www.youtube.com/embed/AmC9SmCBUj4?wmode=opaque&autoplay=1&HD=1;rel=0;showinfo=0;controls=0');
        });

         $( "#goBack" ).click(function() {
            $( "#theFrame" ).attr( 'src' , '');
            $('#menuList').removeClass('fadeOut');
            $('#theMenu').removeClass('slideInRight');
            $('#theMenu').addClass('animated fadeOut');
            $('#theMenu').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', hideMenu);
            $('#menuList').addClass('animated slideInLeft');
        });



      });


    </script>
    <script>
    fluidvids.init({
      selector: 'iframe',
      players: ['www.youtube.com', 'player.vimeo.com']
    });
    </script>
  </body>
</html>