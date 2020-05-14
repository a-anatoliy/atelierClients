<?php
session_start();
define('ROOT_DIR'   , __DIR__ );

require ROOT_DIR . '/bin/starter.php';
require ROOT_DIR . '/core/visitor_class.php';
$user = new Visitor();
$user->countIt();

?>
<!doctype html><html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="x-ua-compatible" content="IE=edge,chrome=1" http_equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-tap-highlight" content="no">

    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="robots" content="index"/>
    <meta name="author" content="Yukai">
    <meta property="fb:app_id" content="453526095028535" />
    <meta property="og:url" content="https://lucky-dress.eu" />
    <meta property="og:type" content="website" />
    <meta property="article:author" content="Lucky DRESS" />
    <meta property="article:publisher" content="https://www.facebook.com/luckydresskrakow/" />
    <meta property="og:title" content="Lucky DRESS - Atelier" />
    <meta property="og:description" content="Wedding, evening and cocktail dresses" />
    <meta property="og:image" content="http://www.luckydress.eu/i/aboutus03.jpg" />
    <meta property="og:image:secure_url" content="http://www.luckydress.eu/i/aboutus03.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="361" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:locale:alternate" content="pl_PL" />
    <meta property="og:site_name" content="Fashion" />
    <meta itemprop="name" content="Lucky DRESS - Atelier" />
    <meta itemprop="description" content="Wedding, evening and cocktail dresses" />
    <meta itemprop="image" content="http://www.luckydress.eu/i/aboutus03.jpg" />

    <!-- Bootstrap CSS -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/animate.css">
    <title>Lucky DRESS four steps to order</title>
</head>

<body>

<div class="container">

  <div class="row menu-border myhdr">
    <div class="col-7 text-left">
      <nav class="navbar navbar-expand-lg navbar-light font-weight-bold navbar-expand-md">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <img src="/i/goldLeftLogo.png" style="padding-right: 10px;" >&nbsp;
            <div class="navbar-nav">
              <a class="nav-item nav-link main-nav ml-2 mr-2 page-scroll" href="#sketch">Sketch</a>
              <a class="nav-item nav-link main-nav page-scroll" href="#customOrder">Custom Order</a>
              <a class="nav-item nav-link main-nav page-scroll" href="#Measurements">Measurements</a>
              <a class="nav-item nav-link main-nav page-scroll" href="#Payments">Payments</a>
              <a class="nav-item nav-link main-nav page-scroll" href="#Contact">Contact</a>
            </div>
        </div>
      </nav>
    </div>
    <div class="col-md-2 d-none d-lg-block align-middle text-center text-sm-center align-self-center">
      <a title="Lucky DRESS EU Web Page" target="_blank" href="https://www.lucky-dress.eu/"><i class="fa fa-globe" aria-hidden="true"></i></a>
      <a title="Lucky DRESS EU on Etsy" target="_blank" href="https://www.etsy.com/shop/AtelierLuckyDress"><i class="fa fa-etsy pl-1" aria-hidden="true"></i></a>
      <a title="Lucky DRESS EU on Facebook" target="_blank" href="https://www.facebook.com/luckydresskrakow/"><i class="fa fa-facebook pl-1" aria-hidden="true"></i></a>
      <a title="Lucky DRESS EU on Instagram" target="_blank" href="https://www.instagram.com/lucky_dress_atelier"><i class="fa fa-instagram pl-1" aria-hidden="true"></i></a>
      <a title="Lucky DRESS EU on Pinterest" target="_blank" href="https://www.pinterest.com/ldressatelier/"><i class="fa fa-pinterest-p pl-1" aria-hidden="true"></i></i></a>
    </div>
    <div class="col-md-3 col-5 align-middle text-center align-self-center">
      <div class="main-logo fancy">LUCKY DRESS</div>
      <!-- <div class="main-logo-small">atelier</div> -->
    </div>
  </div>

  <div class="row cntn mt-1 pb-4">
    <div class="col-12 col-md-7"><h1 class="pl-5 animated bounceInLeft shadow-effect main-fnt main-headers brand-heading">How to order your lucky dress.</h1></div>
    <div class="col-md-5 text-center d-none d-md-block align-top align-self-center">
      <div class="main-headers thanks">Thank you for your interest in our shop!</div>
    </div>
  </div>

  <div class="row cntn">
    <div class="col-md-3 d-none d-md-block text-center about">
      <img class="rounded img-fluid img-thumbnail" src="/i/aboutus01.jpg">
    </div>
    <div class="col-md-9 col-12 main-fnt main-fnt-size d-flex align-self-center">
      <ul class="animated bounceInRight">
        <li>We offer women and girls to choose stunning dresses for the happiest moments in life. Our professional dressmakers with many years of experience in the manufacture attentive to every detail. We use Italian fabric.</li>
        <li>Many years of our successful experience backed by the trust of women.</li>
        <li>In the "Lucky Dress" you will find a wedding dresses and dresses for special events like rout or party.</li>
        <li>And if you have a non-standard shape or You know how should look like Your Lucky Dress - we are ready to realize your vision.</li>
        <li>Once you agree with the design, lace/fabric and all of other details, it's time to create a custom order </li>
      </ul>
    </div>
  </div>

  <div class="row cntn"><div class="col-12 full-width-div brdr-cntr">&nbsp;</div></div>

  <div class="row cntn text-center pt-5">
    <div class="col-4"><img class="img-fluid rounded pt-3 pb-3" src="/i/first.jpg" height="190"></div>
    <div class="col-4"><img class="img-fluid rounded pt-3 pb-3" src="/i/second.jpg" height="190"></div>
    <div class="col-4"><img class="img-fluid rounded pt-3 pb-3" src="/i/third.jpg" height="190"></div>
  </div>

  <div class="row cntn"><div class="col-12 full-width-div brdr-cntr">&nbsp;</div></div>

  <div class="row mb-1 pb-4 cntn pt-5" id="sketch">
    <div class="col-md-9 col-12 main-fnt main-fnt-size about">
      <h3 class="main-headers"># Sketch.</h3>
      <div>On your request we can prepare a detailed <b>sketch</b> of the dress.<br>It will include an example of the lace and fabric that might be used during makind of your dress.<br>Once you like it and approve the fabric, we're ready for further steps.<br>Also, please do not hesitate to contact us in case of any questions.<br>We're open to discuss any of details related to your future dress, just keep in mind this process might took a lot of additional time(same as realisation of additional ideas)</div>
    </div>
    <div class="col-md-3 text-center d-none d-md-block align-top align-self-center"><img class="sketch rounded img-fluid" src="/i/fourth.jpg"></div>
  </div>

  <div class="row mb-1" id="customOrder">
    <div class="col-12 cntn main-fnt main-fnt-size about pt-3 pb-3">
      <h3 class="main-headers"># Custom Order.</h3>
      <div>After agreeing all the details related to project: lace, fabric, style, dates, price, shapes ... whatever, we're ready to create a <b>"Custom order"</b>.</div>
      <div>Come to our page on the etsy: <a style="text-decoration: underline;" target="_blank" href="https://www.etsy.com/shop/AtelierLuckyDress">AtelierLuckyDress</a> and follow instruction below.</div>
      <div>During creation please describe (<b>in a nutshell</b>) your order. (you can even add your picture) and set the date that you wish to get your dress </div>
      <figure class="figure">
        <img src="/i/customorder.png" class="figure-img img-fluid rounded sketch order" alt="How to create a Custom order.">
        <figcaption class="figure-caption text-right">How to request Custom order.</figcaption>
      </figure>
    </div>
  </div>

    <div class="row mb-1" id="Measurements">
        <div class="col-12 cntn main-fnt main-fnt-size about pt-3 pb-3">
            <h3 class="main-headers"># Measurements.</h3>
            <div>If you’ve done any online shopping, you’ve probably wondered how to ensure that the garment will fit…. <br> &nbsp;
              maybe you’ve looked at those sizing charts and guessed your measurements.</div>
            <div class="pt-2">It is important that you take your measurements accurately to be sure the garment will fit you.</div>
            <div class="pb-2">If you’re going to start sewing garments, knowing your measurements is EVERYTHING.</div>
            <div>Fortunately, it’s super simple, and necessary even if you don’t sew.</div>
            <p class="text-danger mt-3">
              Please round your metric measurements to whole numbers (e.g. 102 cm).<br>
              Don't round measurements in inches though, or you'll end up 1.27 cm over or short your actual measurement.
            </p>
            <div>Also it would be very helpful for us to
              <ul>
                <li>get your photo, front a back in leggings and stretchy shirt</li>
                <li>to know your standing height</li>
              </ul>
            </div>
            <div class="text-center"> <a style="text-decoration: underline; font-weight: 700;" target="_blank" href="/i/How-to-take-the-measure.pdf">How to Take Your own Measurements</a> </div>
            <!-- <div><iframe src="/i/How-to-take-the-measure.pdf" style="width:100%; height:300px;"></iframe></div> -->

        </div>
    </div>

    <div class="row mb-1" id="Payments">
        <div class="col-12 cntn main-fnt main-fnt-size about pt-3 pb-3">
            <h3 class="main-headers"># Payments.</h3>
            <div>About the payment. <br>According to Etsy policy it has to be a single transaction.</div>
            <div>Etsy care very carefully about implementation of regulations. And it works in both direction, seller/byer.</div>
        </div>
    </div>

    <div class="row" id="Contact">
        <div class="col-12 cntn main-fnt main-fnt-size about pt-4">
            <h3 class="main-headers"># Contact.</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 cntn main-fnt main-fnt-size about pb-5 mb-4" id="form-div">
            <form role="form" id="contactForm" class="animated shake needs-validation">
                <div class="form-row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><div class="input-group-text"><span class="fa fa-user"></div></div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><div class="input-group-text"><span class="fa fa-envelope"></span></div></div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="6" cols="25" required="required" placeholder="message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group pb-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="agree" id="agree" required="required" >
                        <label class="form-check-label text-left" for="agree">
                            * <i>I agree to the processing of my personal data</i>
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 form-group">
                        <div class="clearfix">
                            <button type="submit" id="form-submit" class="btn btn-secondary contact-button float-left"> send </button>
                            &nbsp; <button type="reset" value="reset" accesskey="r" id="form-reset" class="btn btn-secondary contact-button" onclick="formReset()"> reset </button>
                            <div id="msgSubmit" class="float-lg-right hidden"></div>
                        </div>
                    </div>
                </div>
            </form>
            <div id="loader" class="text-center align-middle align-self-center">
                <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                <span class="sr-only">...loading...</span>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="container main-fnt">Copyright &copy; Yukai, 2020</div>
</footer>

<a id="back-to-top"
   href="#"
   class="btn btn-outline-secondary btn-sm back-to-top"
   role="button" title="TOP"
   data-toggle="tooltip" data-placement="left">
    <span class="fa fa-chevron-up"></span>
</a>

<!-- Bootstrap core JavaScript -->
<script src="/js/popper.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/app.js"></script>

<script src="/js/some.js"></script>

</body>
</html>
