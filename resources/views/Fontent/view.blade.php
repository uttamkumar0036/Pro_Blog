<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<title>Highway</title>


        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{asset('Pro_image/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('Pro_image/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('Pro_image/css/fontAwesome.css')}}">
        <link rel="stylesheet" href="{{asset('Pro_image/css/light-box.css')}}">
        <link rel="stylesheet" href="{{asset('Pro_image/css/templatemo-style.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="{{asset('Pro_image/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

<body>

    <nav>
        <div class="logo">
            <a href="index.html">High<em>Way</em></a>
        </div>
        <div class="menu-icon">
        <span></span>
      </div>
    </nav>

    <div id="video-container">
        <div class="video-overlay"></div>
        <video autoplay="" loop="" muted>
        	<source src="{{asset('Pro_image/highway-loop.mp4')}}" type="video/mp4" />
        </video>
    </div>


    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="Pro_image/img/big_portfolio_item_4.jpg" data-lightbox="image-1"><div class="thumb">
                        <div class="image">
                            <img src="Pro_image/img/portfolio_item_4.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="Pro_image/img/2.jpg" data-lightbox="image-1"><div class="thumb">
                        <div class="image">
                            <img src="Pro_image/img/portfolio_item_2.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="Pro_image/img/3.jpg" data-lightbox="image-1"><div class="thumb">
                        <div class="image">
                            <img src="Pro_image/img/portfolio_item_3.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="Pro_image/img/4.jpg" data-lightbox="image-1"><div class="thumb">
                        <div class="image">
                            <img src="Pro_image/img/portfolio_item_1.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="Pro_image/img/12.jpg" data-lightbox="image-1"><div class="thumb">
                        <div class="image">
                            <img src="Pro_image/img/portfolio_item_5.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="Pro_image/img/5.jpg" data-lightbox="image-1"><div class="thumb">
                         <div class="image">
                            <img src="Pro_image/img/portfolio_item_6.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="Pro_image/img/7.jpg" data-lightbox="image-1"><div class="thumb">
                       <div class="image">
                            <img src="Pro_image/img/portfolio_item_7.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="Pro_image/img/8.jpg" data-lightbox="image-1"><div class="thumb">
                        <div class="image">
                            <img src="Pro_image/img/portfolio_item_8.png">
                        </div>
                    </div></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
            	<div class="portfolio-item">
                	<a href="Pro_image/img/15.jpg" data-lightbox="image-1"><div class="thumb">
                        <div class="image">
                            <img src="Pro_image/img/portfolio_item_9.png">
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2018 Company Name 
    
    | Designed by TemplateMo</p>
            </div>
        </div>
    </footer>


      <!-- Modal button -->
    <div class="popup-icon">
      <button id="modBtn" class="modal-btn"><img src="Pro_image/img/contact-icon.png" alt=""></button>
    </div>  

    <!-- Modal -->
    <div id="modal" class="modal">
      <!-- Modal Content -->
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="header-title">Say hello to <em>Highway</em></h3>
          <div class="close-btn"><img src="Pro_image/img/close_contact.png" alt=""></div>    
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <div class="col-md-6 col-md-offset-3">
            <form id="contact" action="" method="post">
                <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                      </fieldset>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset('Pro_image/js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>

    <script src="{{asset('Pro_image/js/vendor/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('Pro_image/js/plugins.js')}}"></script>
    <script src="{{asset('Pro_image/js/main.js')}}"></script>

    
</body>
</html>