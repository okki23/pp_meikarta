<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 
 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="icon" href="<?php echo base_url('assets/images/rp_logo.png'); ?>" type="image/x-icon">
  <title><?php echo $judul; ?></title>
  <meta name="description" 
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap-theme.css">
  <link href="<?php echo base_url(); ?>assets/frontend/css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.css">
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

  <!-- skin -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/skin/default.css">
  <!-- =======================================================
    Theme Name: Green
    Theme URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
 <style>
 
.social {
    position: fixed;
    top: 550px;
    right:20px;
	
}

.social ul {
  padding: 0px;
  -webkit-transform: translate(270px, 0);
  -moz-transform: translate(270px, 0);
  -ms-transform: translate(270px, 0);
  -o-transform: translate(270px, 0);
  transform: translate(270px, 0);
}

.social ul li {
    display: block;
    margin: 3px;
    background: rgba(171, 219, 209, 0.36);
    width: 300px;
    text-align: left;
    padding: 5px;
    -webkit-border-radius: 30px 0 0 30px;
    -moz-border-radius: 30px 0 0 30px;
    border-radius: 30px 0 0 30px;
    -webkit-transition: all 1s;
    -moz-transition: all 1s;
    -ms-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
}

.social ul li:hover {
  -webkit-transform: translate(-110px, 0);
  -moz-transform: translate(-110px, 0);
  -ms-transform: translate(-110px, 0);
  -o-transform: translate(-110px, 0);
  transform: translate(-240px, 0);
  background: rgba(173, 178, 177, 0.4);
}

.social ul li:hover a {
  color: #000;
}

.social ul li:hover i {
  color: #fff;
  background: #16a085;
}

.social ul li i {
  margin-right: 10px;
  color: #000;
  background: #fff;
  padding: 10px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  width: 40px;
  height: 40px; 
  font-size: 20px;
  background: #ffffff;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);

}
 </style>
</head>

<body>


  <div class="header">
    <section id="header" class="appear">

      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-bars color-white"></span>
                    </button>
          <h1><a class="navbar-brand" href="<?php echo base_url(); ?>" data-0="line-height:90px;" data-300="line-height:50px;">Ranty Pesta
                    </a></h1>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
            <li><a href="#index">Home</a></li>
            <li><a href="#section-about">About</a></li>
            <li><a href="#services">Service</a></li>
            <li><a href="#client">Klien</a></li>
            <li><a href="#section-price_list">Price List Item</a></li>
            <li><a href="#line-pricing">Pricing</a></li>
            <li><a href="#section-works">Portfolio</a></li>
            <li><a href="#section-contact">Hubungi Kami</a></li>
            <li><a href="<?php echo base_url('news_list'); ?>" target="_blank">News</a></li>
            <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse -->
      </div>


    </section>
  </div>


  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
         <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <?php
          foreach($slideshow as $k => $v){
            echo '<li data-target="#carousel-slider" data-slide-to="'.$v->seq_no.'"></li>';
          }
          ?>
  
        </ol>

        <div class="carousel-inner">
          <?php
          foreach ($slideshow as $key => $value) {
              if($value->seq_no == '1'){
                //echo "active";
                echo '<div class="item active">
                       <img src="file_manager_dir/'.$value->foto_url.'" class="img-responsive" alt="">
                        <div class="carousel-caption">
                          <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2><span>'.$value->caption_a.'</span></h2>
                          </div>
                          <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                              <p>'.$value->caption_b.'</p>
                            </div>
                          </div>
                          <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            
                          </div>
                        </div>
                      </div>';
              }else{
         
                echo '<div class="item">
                        <img src="file_manager_dir/'.$value->foto_url.'" class="img-responsive" alt="">
                        <div class="carousel-caption">
                          <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                             <h2><span>'.$value->caption_a.'</span></h2>
                          </div>
                          <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                              <p>'.$value->caption_b.'</p>
                            </div>
                          </div>
                          <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                            
                          </div>
                        </div>
                      </div>';
              }
          }
          ?>



        </div>
        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
	
	<nav class="social">
          <ul>
             
              <li><a href="https://web.whatsapp.com/send?phone=6283892563770&text=Hallo..Ranty Pesta !" target="_blank"><i class="fa fa-whatsapp"></i><b>Whatsapp Langsung Disini !</b></a></li>
          </ul> 
      </nav>
	  
  </div>
  <!--/#slider-->

  <!--about-->
  <section id="section-about">
    <div class="container">
      <div class="about">
        <div class="row ">
          <div class="col-lg-12">
            <div class="title">
              <div class="wow bounceIn">

                <h2 class="section-heading animated" data-animation="bounceInUp">About</h2>
                <br>
 
              </div>
            
            </div>
          </div>
        </div>
        <div class="row">
         <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial  clearfix">
           <?php
           echo $about->deskripsi;
           ?>
              <br/>
              
            </div>

          </div>
        </div>
        
        </div>

      </div>

    </div>
  </section>
  <section id="section-price_list">
    <div class="container">
      <div class="about">
        <div class="row ">
          <div class="col-lg-12">
            <div class="title">
              <div class="wow bounceIn">

                <h2 class="section-heading animated" data-animation="bounceInUp">Price List Per Item</h2>
                <br>
 
              </div>
            
            </div>
          </div>
        </div>
        <div class="row">
         <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial  clearfix">
          <div class="table-responsive">
                 <table class="table table-bordered table-striped table-hover js-basic-example" id="table_id" >
                  <thead>
                    <tr>
                      <th style="width:5%;">No</th>
                                            <th style="width:5%;">Foto URL</th>  
                      <th style="width:5%;">Caption A</th>  
                      <th style="width:5%;">Caption B</th> 
                      <th style="width:5%;">Seq No</th> 
                      <th style="width:15%;">Opsi</th> 
                    </tr>
                  </thead> 
                </table> 
                            </div>
            </div>

          </div>
        </div>
        
        </div>

      </div>

    </div>
  </section>
  <!--/about-->

  <!-- spacer section:testimonial -->
  <section id="testimonials-3" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
                                                Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
                                            </h5>
              <br/>
              <span class="author">&mdash; Jouse Manuel <a href="#">www.jouse-manuel.com</a></span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- services -->
  <section id="services" class="section pad-bot5 bg-white">
    <div class="container">
      <div class="row mar-bot5">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn" data-animation-delay="7.8s">

              <h2 class="section-heading animated">Our Service</h2>
              <h4>Neque porro quisquam est, qui dolorem ipsum quia dolor.</h4>

            </div>
          </div>
        </div>
      </div>
      <div class="row mar-bot40">
        <div class="col-lg-4">
          <div class="wow bounceIn">
            <div class="align-center">

              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                    <figure><i class="fa fa-cog"></i></figure>
                  </div>
                  <h2><a href="#">Easy to Customize</a></h2>
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">

              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                    <figure><i class="fa fa-desktop"></i></figure>
                  </div>
                  <h2><a href="#">Responsive Layout</a></h2>
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">
              <div class="service-col">
                <div class="service-icon">
                  <figure><i class="fa fa-dropbox"></i></figure>
                </div>
                <h2><a href="#">Ready to Use</a></h2>
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!--/services-->

  <!-- spacer section:testimonial -->
  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
                                                Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
                                            </h5>
              <br/>
              <span class="author">&mdash; Jouse Manuel / www.jouse-manuel.com</span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- client --> <!--client-->
 
  <section id="client" class="client-section appear clearfix"> 
    <div class="container">
      <div class="about">
        <div class="row ">
          <div class="col-lg-12">
            <div class="title">
              <div class="wow bounceIn">

                <h2 class="section-heading animated" data-animation="bounceInUp">Klien</h2>
                <br>
 
              </div>
            
            </div>
          </div>
        </div>
        <div class="row">
         <div class="col-lg-12">
          <div align="justify">
            <div class="testimonial  clearfix">
            
            <?php
             echo $client->deskripsi;
            ?>
            
            </div>

          </div>
        </div>
        
        </div>

      </div>

    </div>
  </section>
 
  <!-- /client -->

  <!-- spacer section:stats -->
  <section id="parallax1" class="section pad-top40 pad-bot40 mar-bot20" data-stellar-background-ratio="0.5">
    <div class="container ">
      <div class="align-center pad-top40 pad-bot40">
        <h4 class="color-white pad-top50">Indoctum accusamus comprehensam</h4>
        <p class="color-white">Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Fusce dapibus, tellus ac cursus etiam porta sem malesuada magna mollis euismod. commodo, Faccibus mollis interdum. Morbi leo risus, porta ac, vestibulum at eros.Feugiat
          accumsan Suspendisse eget Duis faucibus tempus pede pede augue pede. Dapibus mollis dignissim suscipit porta justo nisl amet Nunc quis semper.</p>
      </div>
    </div>
  </section>
  <section id="line-pricing" class="line-section line-center">
    <div class="container pad-top50">
      <div class="row mar-bot10 ">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn">

              <h2 class="section-heading animated" data-animation="bounceInUp">Pricing Table</h2>
              <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>

            </div>
          </div>
        </div>
      </div>
      <div class="line-wrap">
        <div class="line-pricing-table">
          <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.3s">
            <ul>
              <li class="line-head-row">
                Free
              </li>
              <li class="line-price-row">
                <p>
                  <span class="symbol">$</span>
                  <span>0</span>
                </p>
                <small>Ideal for beginners</small>
              </li>
              <li>
                1 theme included
              </li>
              <li>
                1 year of theme updates
              </li>
              <li>
                20% off future purchases
              </li>
              <li class="line-btn-row">
                <a href="" class="line-btn light">Get Started</a>
              </li>
            </ul>
          </div>
          <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.5s">
            <ul class="line-highlight">
              <li class="line-head-row">
                Premium
              </li>
              <li class="line-price-row">
                <p>
                  <span class="symbol">$</span>
                  <span>300</span>
                </p>
                <small>Per user / month</small>
              </li>
              <li>
                24 themes included
              </li>
              <li>
                Lifetime of premium support
              </li>
              <li>
                Access all new themes
              </li>
              <li class="line-btn-row">
                <a href="" class="line-btn green">Get Started</a>
              </li>
            </ul>
          </div>
          <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.7s">
            <ul>
              <li class="line-head-row">
                Standard
              </li>
              <li class="line-price-row">
                <p>
                  <span class="symbol">$</span>
                  <span>150</span>
                </p>
                <small>Per user / month</small>
              </li>
              <li>
                12 themes included
              </li>
              <li>
                1 year of theme updates
              </li>
              <li>
                Access all new themes
              </li>
              <li class="line-btn-row">
                <a href="" class="line-btn light">Get Started</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- spacer section:testimonial -->
  <section id="testimonials-2" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
                                                Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
                                            </h5>
              <br/>
              <span class="author">&mdash; Jouse Manuel / www.jouse-manuel.com</span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Portfolio</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Web Design</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".photography">Photography</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".print">Print</a></li>
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/portfolio/1.jpg" alt="welcome" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 1</a></h5>
                      <a href="<?php echo base_url(); ?>assets/frontend/img/portfolio/1.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/portfolio/2.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 2</a></h5>
                      <a href="<?php echo base_url(); ?>assets/frontend/img/portfolio/2.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>


              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/portfolio/3.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 3</a></h5>
                      <a href="<?php echo base_url(); ?>assets/frontend/img/portfolio/3.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/portfolio/4.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 4</a></h5>
                      <a href="<?php echo base_url(); ?>assets/frontend/img/portfolio/4.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/portfolio/5.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 5</a></h5>
                      <a href="<?php echo base_url(); ?>assets/frontend/img/portfolio/5.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/portfolio/6.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 6</a></h5>
                      <a href="<?php echo base_url(); ?>assets/frontend/img/portfolio/6.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/portfolio/7.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 7</a></h5>
                      <a href="<?php echo base_url(); ?>assets/frontend/img/portfolio/7.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/portfolio/8.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 8</a></h5>
                      <a href="<?php echo base_url(); ?>assets/frontend/img/portfolio/8.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/portfolio/9.jpg" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 9</a></h5>
                      <a href="<?php echo base_url(); ?>assets/frontend/img/portfolio/9.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>
            </div>

          </div>


        </div>
      </div>

    </div>
  </section>
  <section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
    <div class="align-center pad-top40 pad-bot30">
      <h4 class="color-white pad-top50">The middle of that asteroid field</h4>
      <p class="color-white">We can repair any dings and scrapes to your spacecraft and support,Planning a time travel trip to the middle ages Feugiat accumsan Suspendisse eget Duis faucibus tempus pede pede augue pede.Dapibus mollis dignissim suscipit porta justo nisl amet
        Nunc quis semper.</p>
    </div>
  </section>

  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Hubungi Kami</h2>
            <p>Silahkan tinggalkan pesan anda di kolom pesan dibawah ini.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
			
			

            <div class="text-center"><button type="submit" class="line-btn green">Kirim Pesan</button></div>
          </form>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>
   

  <!-- map -->
  <section id="section-map" class="clearfix">
    <div class="col-md-12"> 
        
     <?php
 
  echo str_replace('width="600" height="450"','width="100%" height="450"',$maps->url_map);
  ?>

     
      <br>
      <hr>
      </div> 
  </section>

  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
		   <li><a href="https://web.whatsapp.com/send?phone=6283892563770&text=Hallo..Ranty Pesta ! " target="_blank" class="icowa" title="wa"><i class="fa fa-whatsapp"></i></a></li>
		  
  
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>&copy; 2018 Ranty Pesta</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Green
            -->
        
          </div>
        </div>
      </div>
    </div>

  </section>
 
 
    <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="<?php echo base_url(); ?>assets/frontend/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
 
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.isotope.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/skrollr.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.scrollTo.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.localScroll.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/stellar.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/responsive-slider.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.appear.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/grid.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/wow.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready( function () {
    $('#pricelist_item').DataTable();
} );
    wow = new WOW({}).init();
  </script>
  <script src="<?php echo base_url(); ?>assets/frontend/contactform/contactform.js"></script>

</body>

</html>
