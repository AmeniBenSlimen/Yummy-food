<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yummy Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/bootstrap.min.css')}} " rel="stylesheet">
  <link href="{{ asset('bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.2.1
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .standard-btn {
  text-decoration:none;
  border: 2px solid #ec2727;
  padding:10px 20px 10px 20px;
  border-radius:2px;
  color:#ec2727;
  margin:5px;
}
.standard-btn-coloured {
  text-decoration:none;
  background:#ec2727;
  border: 2px solid #ec2727;
  padding:10px 20px 10px 20px;
  border-radius:2px;
  color:#FFFFFF;
  margin:5px;
}
.standard-btn:hover {
  color:#FFFFFF;
  background-color:#00acec;
}
.standard-btn-coloured:hover {
  color:#FFFFFF;
  background-color:#009FDB;
}

.btn-lg {
  padding: 15px 40px 15px 40px;
}
.hidden {
  display: none;
}

form > .row {
  margin-bottom: 20px;
}

form > .row:last-child {
  margin-bottom: 0;
}

form input.invalid {
  border-color: #dc3545;
}

form .invalid-feedback {
  color: #dc3545;
  font-size: 14px;
  line-height: 21px;
  margin-top: 4px;
  text-align: left;
}

        </style>
    </head>
   
   @extends('layouts.NavBarClient')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Profitez de votre santé<br>Nourriture délicieuse</h2>
          <p data-aos="fade-up" data-aos-delay="100">Manger sain et pas cher, il faut savoir choisir les bons aliments pour à la fois apporter suffisamment d’énergie à l’organisme, mais surtout les nutriments essentiels pour la bonne santé. .</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Réserver une table</a>
            <a href="{{asset('img/video1.mp4')}}" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Regarder la vidéo</span></a>
            <a href="{{asset('img/video2.mp4')}}" class="glightbox btn-watch-video d-flex align-items-center"></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{ asset('img/imgg.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>À propos de nous</h2>
          <p>Apprendre encore plus <span>À propos de nous</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url({{ asset('img/cap.png')}}) ; height:50px; width:550px" data-aos="fade-up" data-aos-delay="150">
          <a href="{{ asset('img/video.mp4')}}" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5" style="margin-bottom:150px">
              <p class="fst-italic"> 
              Au cœur de la tendance healthy, on retrouve de nombreux régimes et restrictions qui s’inscrivent dans ce mode de consommation. Produits bio, sans gluten, régime végétarien ou végan, tous ont pour but de restreindre l’impact de son alimentation sur l’environnement, mais également d’accorder une plus grande place à sa santé dans le choix de ses aliments.

              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Notre restaurant en vogue en ont fait leur force : qu’il s’agisse d’Hank et ses burgers vegan, du fast-food Copper Branch qui arrive bientôt en France ou de restaurants traditionnels qui incluent des recettes végétariennes ou sans gluten à leur carte, la tendance healthy est un nouveau marché à fort potentiel économique.</li>
                <li><i class="bi bi-check2-all"></i> Alors, simple tendance ou réelle prise de conscience Seul l’avenir nous le dira, en attendant, n’oubliez pas de vous régaler avant tout !</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Pourquoi choisir Slayta ?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Corporis voluptates officia eiusmod</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Ullamco laboris ladore pan</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Labore consequatur incidid dolore</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Notre Menu</h2>
          <p>Consultez notre <span>Slayta Menu</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Entrées</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Déjeuner</h4>
            </a><!-- End tab nav item -->

          

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Entrées</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <img src="{{ asset('img/img11.png')}}" class="menu-img img-fluid" alt="">
                <h4>Slayta viande séchée</h4>
                <p class="ingredients">
                Finally ✨ La viande séchée 🥓<br>
                Riche en fer et en goût.

                </p>
                <p class="price">
                  17 DT
                </p>
                <div id="form-template" class="hidden">
<form>
    <div class="row">
      <div class="col-sm-12">
        <input name="username" placeholder="Username" class="swal-content__input" type="text">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <input name="password" placeholder="Password" class="swal-content__input" type="password">
      </div>
    </div>
  </form>    
</div>
                <div class="container mt-3">
        <!-- Button trigger modal -->
  
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
     
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success">Login</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    
</div>
   </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <img src="{{ asset('img/img22.png')}}" class="menu-img img-fluid" alt="">
                <h4>Slayta protéines</h4>
                <p class="ingredients">
                Version pré-workout avec du Riz 🍚pour la bonne dose de carbs et de protéines.

                </p>
                <p class="price">
                  11 DT
                </p>
                
        <!-- Button trigger modal -->

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <img src="{{ asset('img/img33.png')}}" class="menu-img img-fluid" alt="">
                <h4>Slayta pêche 😉🍑</h4>
                <p class="ingredients">
                Version pré-workout avec du pêches pour garder le poid
                </p>
                <p class="price">
                  15 DT
                </p>
                

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-3.png')}}" class="glightbox"><img src="{{ asset('img/img55.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Slayta Quinoa & Grenade  🔥</h4>
                <p class="ingredients">
                Fresh and Colorful Quinoa Salad                
                </p>
                <p class="price">
                  25 DT
                </p>
                

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <img src="{{ asset('img/img44.png')}}" class="menu-img img-fluid" alt="">
                <h4>Slayta Exotique 🍍🍤</h4>
                <p class="ingredients">
                La fameuse Slayta Exotique avec le crevettes               
                </p>
                <p class="price">
                  35 DT
                </p>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <img src="{{ asset('img/img66.png')}}" class="menu-img img-fluid" alt="">
                <h4>Slayta crevettes 🍤🤤</h4>
                <p class="ingredients">
                
 salade Shrimplly  avec le crevettes               
                </p>
                <p class="price">
                  40 DT
                </p>

              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Déjeuner</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <img src="{{ asset('img/img77.png')}}" class="menu-img img-fluid" alt="">
                <h4>Plat Omlettes </h4>
                <p class="ingredients">
                
                Plat avec Omlettes, Avocat, Tomates              
                               </p>
                <p class="price">
                  8 DT
                </p>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <img src="{{ asset('img/img88.png')}}" class="menu-img img-fluid" alt="">
                <h4>Granola</h4>
                <p class="ingredients">
                
                   Plat avec Granola ou muesli            
                               </p>
                <p class="price">
                  10 DT
                </p>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <img src="{{ asset('img/img99.png')}}" class="menu-img img-fluid" alt="">
                <h4>Le Power Bowl</h4>
                <p class="ingredients">
                
              Salade avec le fruit secs et oranges               
                </p>
                <p class="price">
                 15 DT
                </p>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <img src="{{ asset('img/img111.png')}}" class="menu-img img-fluid" alt="">
                <h4>Bol de fruit Healthy</h4>
                <p class="ingredients">
                Salade Pêche et tomate cerise 
                              
                </p>
                <p class="price">
                  13 DT
                </p>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <img src="{{ asset('img/img10.png')}}" class="menu-img img-fluid" alt="">
                <h4> Bircher aux Flocones d'avoine</h4>
                <p class="ingredients">
                
                            Bol de Flocones d'avoine
                               </p>
                <p class="price">
                  11 DT
                </p>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <img src="{{ asset('img/img12.png')}}" class="menu-img img-fluid" alt="">
                <h4>Bol de courgettes et basilic</h4>
                <p class="ingredients">
                
                Salade de courgettes et basilic               
                               </p>
                <p class="price">
                 17 DT
                </p>
                <a href="#" class="standard-btn-coloured"  style="border-radius: 12px;color:white;">Click Me</a>

              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

         
          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Dinner</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-1.png')}}" class="glightbox"><img src="{{ asset('img/menu/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Magnam Tiste</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-2.png')}}" class="glightbox"><img src="{{ asset('img/menu/menu-item-2.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Aut Luia</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $14.95
                </p>
                <a href="#" class="standard-btn-coloured"  style="border-radius: 12px;color:white;">Click Me</a>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-3.png')}}" class="glightbox"><img src="{{ asset('img/menu/menu-item-3.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Est Eligendi</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $8.95
                </p>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-4.png')}}" class="glightbox"><img src="{{ asset('img/menu/menu-item-4.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-5.png')}}" class="glightbox"><img src="{{ asset('img/menu/menu-item-5.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Eos Luibusdam</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $12.95
                </p>
                <a href="#" class="standard-btn-coloured"  style="border-radius: 12px;color:white;">Click Me</a>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('img/menu/menu-item-6.png')}}" class="glightbox"><img src="{{ asset('img/menu/menu-item-6.png')}}" class="menu-img img-fluid" alt=""></a>
                <h4>Laboriosam Direva</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $9.95
                </p>

              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Que Disent-Ils <span>De Nous</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        tres tres bon accueil. qualite des plats excellente ainsi que la quantité. présentation des plats recherchee.serveuse attentive à la satisfaction des clients grand merci.                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jendoubi Nedra</h3>
                      <h4>Cliente</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('img/nedra.png')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Découverte du restaurant grâce à nos enfants. Cadre accueillant et chaleureux. Service de qualité effectué avec gentillesse. Plats très copieux, de très bonnes qualités superbement présentés. nous reviendrons                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Ben Khedher Mouna</h3>
                      <h4>Cliente</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('img/mouna.png')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Tout simplement excellent. Une des meilleure adresse des Pyrénées orientales. A midi ou le soir , sur l'ardoise ou à la carte toujours la même qualité de plats. L'accueil est impeccable .                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Boulila Aymen</h3>
                      <h4>Client</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('img/aymen.png')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Nous avons découvert ce restaurant grâce à des amis
Aucune fausse note du début à la fin Des plats aussi beau que bon pour un prix très raisonnable au regard de la qualité dans un décor très sympa et original
Avons passé un très bon moment à quatre Il est certain que nous reviendrons                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Ben Fathallah Omar</h3>
                      <h4>Client</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="{{ asset('img/omar.png')}}" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>ÉVÉNEMENTS</h2>
          <p>Partagez <span>Vos Moments</span> Dans Notre Restaurant</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('img/img13.png')}})">
              <h3>Custom Parties</h3>
              <div class="price align-self-start">$99</div>
              <p class="description">
                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('img/img17.png')}})">
              <h3>Private Parties</h3>
              <div class="price align-self-start">$289</div>
              <p class="description">
                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('img/img15.png')}})">
              <h3>Birthday Parties</h3>
              <div class="price align-self-start">$499</div>
              <p class="description">
                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Chefs</h2>
          <p>Notre <span>Chefs</span> Profesionnele</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{ asset('img/chef1.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ben Arfia Maroua</h4>
                <span>Master Chef</span>
                <p>Deux fois nommé Silver Winner dans la catégorie Best of Madison, French Food Category. Sa fameuse cuisine franco-méditerranéenne a été décrite comme «le meilleur repas que j'ai jamais mangé» par Mike Muckian.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" >
            <div class="chef-member">
              <div class="member-img">
                <img src="{{ asset('img/chef2.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Abidelli Farah</h4>
                <span>Patissier</span>
                <p>Cuisiner n'est pas toujours évident. Il faut trouver les recettes, les préparer, les adapter en fonction de vos ingrédients ou des goûts de chacun.. Cuisiner n'est pas toujours évident. Il faut trouver les recettes, les préparer, les adapter en fonction de vos ingrédients ou des goûts de chacun.</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="{{ asset('img/chef3.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Bargaoui Aymen</h4>
                <span>Cook</span>
                <p>« D’autres produits phares de la Tunisie, comme l’huile d’olive, les dattes et sardines vont également bénéficier de cette certification. C’est la meilleure option pour les marchés internationaux. »</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>RÉSERVER UNE TABLE</h2>
          <p>Réservez <span>Votre Séjour</span> Avec Vous</p>
        </div>

        <div class="row g-0">

          <div class="col-lg-4 reservation-img" style="background-image: url({{asset('img/capture1.png')}});" data-aos="zoom-out" data-aos-delay="200"></div>

          <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="{{route('Reservation')}}" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            @csrf  
            @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br />
@endif
            @if (Route::has('login'))
            @auth
            <div class="row gy-4">
           
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="nom" value="{{Auth::user()->name}}" disabled class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" value="{{Auth::user()->email}}" disabled name="mail" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email">
                 
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" required name="phone" id="phone" placeholder="Votre numéro de Téléphone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  
                </div>
                <div class="col-lg-4 col-md-6">
                  <input  name="date" class="form-control" required type="datetime-local" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" required name="personne" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" required name="message" rows="5" placeholder="Message"></textarea>
               
              </div>
              <br>
              <div class="text-center"><button type="submit">Réserver une Table</button></div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section>
                @else
                <div class="row gy-4">
                
							
                @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}  
</div><br />
@endif
                <div class="col-lg-4 col-md-6">
                  <input type="text" name="nom" class="form-control" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="email" class="form-control" name="mail" id="email" placeholder="Votre Email" data-rule="email" data-msg="Please enter a valid email">
                 
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="text" class="form-control" required name="phone" id="phone" placeholder="Votre numéro de Téléphone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  
                </div>
                <div class="col-lg-4 col-md-6">
                  <input  name="date" class="form-control" required type="datetime-local" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  
                </div>
                <div class="col-lg-4 col-md-6">
                  <input type="number" class="form-control" required name="personne" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control"  required name="message" rows="5" placeholder="Message"></textarea>
               
              </div>
              <br>
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit">Réserver une Table</button></div>
            </form>
          </div><!-- End Reservation Form -->

        </div>

      </div>
    </section><!-- End Book A Table Section -->
    @endauth
                @endif
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/c3.png')}}"><img src="{{ asset('img/c3.png')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/c4.png')}}"><img src="{{ asset('img/c4.png')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/c5.png')}}"><img src="{{ asset('img/c5.png')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/c4.png')}}"><img src="{{ asset('img/c4.png')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/c3.png')}}"><img src="{{ asset('img/c3.png')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/c4.png')}}"><img src="{{ asset('img/c4.png')}}" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Besoin d'aide? <span>Nous contacter</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Notre Adresse</h3>
                <p>Slayta Bar à Salade, avenue de l'environnement, Tunis</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>slayta.barasalade@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Téléphone</h3>
                <p>+216 50 152 191</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Horaires d'ouvertures</h3>
                <div><strong>Lundi - Dimanche:</strong> 08:30h - 23:00h
                  
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="" method="post" role="form" class="php-email-form p-3 p-md-4">
          @csrf
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="nom" class="form-control" id="name" placeholder="Votre Nom" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="mail" id="email" placeholder="Votre Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="sujet" id="subject" placeholder="Sujet" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
         
          <div class="text-center"><button type="submit" id="success">Envoyer le message</button></div>
        </form>
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Addresse</h4>
            <p>
            Slayta Bar à Salade, <br>
            avenue de l'environnement, Tunis<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Téléphone:</strong> +216 50 152 191<br>
              <strong>Email:</strong> slayta.barasal@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Horaires d'ouvertures</h4>
            <p>
              <strong>Lundi - Dimanche: 08:30h</strong> - 23:00h<br>
              
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Suivez nous</h4>
          <div class="social-links d-flex">
           
            <a href="https://www.facebook.com/slayta.barasalade" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="instagram.com/slayta.barasalade/?hl=fr" class="instagram"><i class="bi bi-instagram"></i></a>
           
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Slayta</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Ben Slimen Ameni</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('aos/aos.js')}}"></script>
  <script src="{{ asset('glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
<script>
		$(document).on('click', '#success', function(e) {
			swal(
				'Success',
				'Votre message est envoyée avec <b style="color:green;">Succée</b>',
				'success'
			)
		});
    $(document).on('click', '#b7', function(e) {
			swal(
				'<b style="color:green;">Bien Reçu</b>',
				'Merci de rester disponible pour vous appeler 😊',
				'success'
			)
		});
    
// store form HTML markup in a JS variable
var formTemplate = $('#form-template > form').clone()[0];
$('#form-template').remove();

// prepare SweetAlert configuration
var swalConfig = {
  title: 'Demo Form',
  content: formTemplate,
  button: {
    text: 'Submit',
    closeModal: false
  }
};

// handle clicks on the "Click me" button
$('#click-me-btn').click(function () {
  swal(swalConfig);
});

// handle clicks on the "Submit" button of the modal form
$('body').on('click', '.swal-button--confirm', function() {
  simulateAjaxRequest();
});

// mock AJAX requests for this demo
var isFakeAjaxRequestSuccessfull = false;

function simulateAjaxRequest() {
  // "send" the fake AJAX request
  var fakeAjaxRequest = new Promise(function (resolve, reject) {
    setTimeout(function () {
      isFakeAjaxRequestSuccessfull ? resolve() : reject();
      isFakeAjaxRequestSuccessfull = !isFakeAjaxRequestSuccessfull;
      swal.stopLoading();
    }, 200);
  });
  
  // attach success and error handlers to the fake AJAX request
  fakeAjaxRequest.then(function () {
    // do this if the AJAX request is successfull:
    $('input.invalid').removeClass('invalid');
    $('.invalid-feedback').remove();
  }).catch(function () {
    // do this if the AJAX request fails:
    var errors = {
      username: 'Username is invalid',
      password: 'Password is invalid'
    };
    $.each(errors, function(key, value) {
      $('input[name="' + key + '"]').addClass('invalid').after('<div class="invalid-feedback">' + value + '</div>');
    });
  });
}
</script>