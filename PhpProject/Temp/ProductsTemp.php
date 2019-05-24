<!DOCTYPE HTML>
<html>
  <head>
    <title>LifeStyle Store</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <style>
        .rowimp{
            padding-top:60px;
        }footer{
    background-color:rgb(0,0,0);   
        
       border-color: #080808;  
       min-height: 50px; 
       border: 1px solid ;
       
    margin:auto;
    padding: 13px 10px 10px 10px;
    color: whitesmoke;
    text-align:center;
    font-weight: bold; 
}
.pad{
    margin:0% 10% 0% 40%;
}
    </style>
  <body>
       <?php
        include 'includes/Header.php';
        ?>
    <div class="container">
        <div class="jumbotron text-center " style="margin-top:80px;">
            <h1>Welcome to our Lifestyle!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
        </div>
    </div>
      <div class="container">
      <div class="row">
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="cameras/camera1.jpg" alt="camera1-thumbnail">
                  <div class="caption text-center">
                      <h3>Cannon EOS</h3>
                      <p>Price: Rs 36000\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="cameras/camera2.jpg" alt="camera2-thumbnail">
                  <div class="caption text-center">
                      <h3>Sony DSLR</h3>
                      <p>Price: Rs 40000\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="cameras/camera3.jpg" alt="camera3-thumbnail">
                  <div class="caption text-center">
                      <h3>Sony DSLR 2.0</h3>
                      <p>Price: Rs 50000\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="cameras/camera4.jpg" alt="camera4-thumbnail">
                  <div class="caption text-center">
                      <h3>Olympus DSLR</h3>
                      <p>Price: Rs 90000\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
      </div>
      </div> 
      <div class="container">
      <div class="row">
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="watches/watch1.jpg" alt="watch1-thumbnail">
                  <div class="caption text-center">
                      <h3>Titan model #301</h3>
                      <p>Price: Rs 3699\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="watches/watch2.jpg" alt="watch2-thumbnail">
                  <div class="caption text-center">
                      <h3>Titan Model #201</h3>
                      <p>Price: Rs 1999\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="watches/watch3.jpg" alt="watch3-thumbnail">
                  <div class="caption text-center">
                      <h3>HMT Milan</h3>
                      <p>Price: Rs 3000\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="watches/watch4.jpg" alt="watch4-thumbnail">
                  <div class="caption text-center">
                      <h3>Faber Luba #11</h3>
                      <p>Price: Rs 15000\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
      </div>
      </div>
       <div class="container">
      <div class="row">
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="shirts/shirt1.jpg" alt="shirt1-thumbnail">
                  <div class="caption text-center">
                      <h3>H&W</h3>
                      <p>Price: Rs 3600\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="shirts/shirt2.jpg" alt="shirt2-thumbnail">
                  <div class="caption text-center">
                      <h3>Luis Phil</h3>
                      <p>Price: Rs 4000\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="shirts/shirt3.jpg" alt="shirt3-thumbnail">
                  <div class="caption text-center">
                      <h3>Jhalkani</h3>
                      <p>Price: Rs 5000\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="shirts/shirt4.jpg" alt="shirt4-thumbnail">
                  <div class="caption text-center">
                      <h3>Gucci</h3>
                      <p>Price: Rs 9000\-</p>
                      <button class="btn btn-primary">Add to cart</button>
                  </div>
              </div>
          </div>
      </div>
      </div>  
    
      <?php
        include 'includes/Footer.php';
        ?>
    
  </body>
</html>