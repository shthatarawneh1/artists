<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/card.css">
   
<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-K5a5f5FYY7KwEVN52spBk4FcXBL5NpUed4lvEcDYacA2Y6KXMKYOv3S4K5rQ3WzZ+0d0BzJ8UBbmHl8wGhfHow==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Font Awesome CDN - Keep this one -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-vHkT2D2xM2UKk4Nx+VuF9S7rcHcoyIb0T0bIdPv4q0Dp9U3cSLF+VZCk3khBhlG+ShWHPF0IbGvjcLZME98Feg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css copy\normalize.css">
    <link rel="stylesheet" href="css copy\swiper-bundle.min.css">
    <link rel="stylesheet" href="css copy\vendor.css">

    <link rel="stylesheet" href="style2.css">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="">
    
</head>

<body>
    

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <img src="img\Logo.svg" alt="" width="170px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">Gallary</a>
                    <a href="service.html" class="nav-item nav-link">Artists</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Opportunities </a>
                        <div class="dropdown-menu m-0">
                            <a href="#courses" class="dropdown-item">courses</a>
                            <a href="#events" class="dropdown-item">events and Exhibitions</a>
                            <a href="#challenges" class="dropdown-item">Competitions</a>
                        </div>
                    </div>

                    <a href="contact.html" class="nav-item nav-link">About</a>
                </div>
                <button type="button" class="search-btn ms-3" data-bs-toggle="modal" data-bs-target="#searchModal" data-search-modal>
                    <a  class="aicon" href="#"><i class="fa fa-search"></i></a>
                  </button>
                  
                  <button type="button" class="cart-btn"  data-bs-toggle="modal" data-bs-target="#cartModal">
                    <a class ="aicon" href="#"><i class="fas fa-shopping-cart nav-cart"></i></a>
                </button>
                  
                <a href="signin.php" class="button button-primary  py-md-3 px-md-5 me-3 animated slideInLeft signinUp-button">Login / Register</a>
            </div>
        </nav>


<!-- cart update start -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartModalLabel">Your Art Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="cartItems">
                    <!-- Example cart item structure -->
                    <div class="cart-item">
                        <img src="artwork.jpg" class="img-thumbnail" width="80" alt="Artwork">
                        <div class="ms-3 flex-grow-1">
                            <h6 class="mb-1">Artwork Title</h6>
                            <small class="text-muted">Artist Name</small>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <div class="quantity-selector">
                                    <button class="btn btn-sm btn-outline-secondary">-</button>
                                    <span class="mx-2">1</span>
                                    <button class="btn btn-sm btn-outline-secondary">+</button>
                                </div>
                                <span class="text-primary">$450</span>
                            </div>
                        </div>
                    </div>
                    <!-- More cart items would go here -->
                </div>
                <div class="cart-total">
                    <h5>Total: $<span id="cartTotal">0</span></h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="enroll-btn-primary" data-bs-dismiss="modal">Continue Shopping</button>
                <button type="button" class="enroll-btn-secondry">Checkout</button>
            </div>
        </div>
    </div>
</div>
<!-- cart update ends -->

    <!-- Navbar & Carousel End -->

    <br><br><br><br>

    <!--  Artists' Card start -->
    <div class="container">
      <div class="row gx-4 gy-4">
        <!-- Card 1 -->
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
          <div class="artist-card">
            <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
              <i class="fa fa-user"></i>  
            </button>
            
            
            <div class="banner">
              <img src="img/download (2).jfif" alt="Banner">
            </div>
            <div class="profile">
              <img src="img/team-2.jpg" alt="Avatar">
            </div>
            <div class="artist-name">Layla Ahmad</div>
            <div class="artworks">
              <img src="img/pexels-didsss-2911545.jpg" alt="Art1">
              <img src="img/europeana-SMWPYQhVRuY-unsplash.jpg" alt="Art2">
            </div>
          </div>
        </div>
    
        <!-- Repeat the same structure for the other cards -->
    
        <!-- Card 2 -->
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
          <div class="artist-card">
            <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
              <i class="fa fa-user"></i>  
            </button>
            
            
            <div class="banner">
              <img src="img/pexels-dom-j-7304-310436.jpg" alt="Banner">
            </div>
            <div class="profile">
              <img src="img/team-3.jpg" alt="Avatar">
            </div>
            <div class="artist-name">Kareem Salim</div>
            <div class="artworks">
              <img src="img/europeana-5TK1F5VfdIk-unsplash.jpg" alt="Art1">
              <img src="img/europeana-00SzLJ6yQOk-unsplash.jpg" alt="Art2">
            </div>
          </div>
        </div>
    
        <!-- Card 3 -->
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
          <div class="artist-card">
            <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
              <i class="fa fa-user"></i>  
            </button>
            
            
            <div class="banner">
              <img src="img/image.png" alt="Banner">
            </div>
            <div class="profile">
              <img src="img/team-1.jpg" alt="Avatar">
            </div>
            <div class="artist-name">Mohammad Mahmoud</div>
            <div class="artworks">
              <img src="img/europeana--kUYkiWWM6E-unsplash.jpg" alt="Art1">
              <img src="img/pexels-reneterp-1589279.jpg" alt="Art2">
            </div>
          </div>
        </div>
    
        <!-- Card 4 -->
        <div class="col-lg-3 col-md-4 col-sm-12 mb-4">
          <div class="artist-card">
            <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
              <i class="fa fa-user"></i>  
            </button>
            
            
            <div class="banner">
              <img src="img/mayur-deshpande-zZPeoLxLRyM-unsplash.jpg" alt="Banner">
            </div>
            <div class="profile">
              <img src="img/avatar1.jpg" alt="Avatar">
            </div>
            <div class="artist-name">Jade Mikell</div>
            <div class="artworks">
              <img src="img/pexels-shkrabaanthony-4442000.jpg" alt="Art1">
              <img src="img/pexels-photo-2892606.webp" alt="Art2">
            </div>
          </div>
        </div>
      </div>
    </div>
    

      <br><br><br>

      <div class="container">
        <div class="row gx-4 gy-4">
          <!-- Card 5 -->
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="artist-card">
              <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
                <i class="fa fa-user"></i>  
              </button>
              
              
              <div class="banner">
                <img src="img/pexels-photo-16037756.webp" alt="Banner">
              </div>
              <div class="profile">
                <img src="img/testimonial-4.jpg" alt="Avatar">
              </div>
              <div class="artist-name">Sara Jilkel</div>
              <div class="artworks">
                <img src="img/pexels-photo-16037756.webp" alt="Art1">
                <img src="img/pexels-dom-j-7304-297494.jpg" alt="Art2">
              </div>
            </div>
          </div>
      
          <!-- Card 6 -->
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="artist-card">
              <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
                <i class="fa fa-user"></i>  
              </button>
              
              
              <div class="banner">
                <img src="img/pexels-andrew-2123337.jpg" alt="Banner">
              </div>
              <div class="profile">
                <img src="img/images.jpg" alt="Avatar">
              </div>
              <div class="artist-name">Salim Ayman</div>
              <div class="artworks">
                <img src="img/adrianna-geo-1rBg5YSi00c-unsplash.jpg" alt="Art1">
                <img src="img/1660799231561_IMG_20200705_200212__28342.jpg" alt="Art2">
              </div>
            </div>
          </div>
      
          <!-- Card 7 -->
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="artist-card">
              <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
                <i class="fa fa-user"></i>  
              </button>
              
              
              <div class="banner">
                <img src="img/Flux_Dev_A_vibrant_and_imaginative_scene_representing_creativi_1.jpg" alt="Banner">
              </div>
              <div class="profile">
                <img src="img/IMG3.jpg" alt="Avatar">
              </div>
              <div class="artist-name">Mahmoud Ahmad</div>
              <div class="artworks">
                <img src="img/Flux_Dev_A_vibrant_highresolution_digital_artwork_titled_Your__1.jpg" alt="Art1">
                <img src="img/download (1).jfif" alt="Art2">
              </div>
            </div>
          </div>
      
          <!-- Card 8 -->
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="artist-card">
              <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
                <i class="fa fa-user"></i>  
              </button>
              
              
              <div class="banner">
                <img src="img/Flux_Dev_A_dreamy_handpainted_illustration_of_an_open_golden_o_3.jpg" alt="Banner">
              </div>
              <div class="profile">
                <img src="img/IMG4.jpg" alt="Avatar">
              </div>
              <div class="artist-name">Ahmad Reda</div>
              <div class="artworks">
                <img src="img/pexels-shkrabaanthony-4442000.jpg" alt="Art1">
                <img src="img/birmingham-museums-trust-KfRUve5NtO8-unsplash.jpg" alt="Art2">
              </div>
            </div>
          </div>
        </div>
      </div>
      

    
    <br><br><br>
    <div class="container">
      <div class="row gx-4 gy-4">
        <!-- Card 9 -->
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="artist-card">
            <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
              <i class="fa fa-user"></i>  
            </button>
            
            
            <div class="banner">
              <img src="img/download (2).jfif" alt="Banner">
            </div>
            <div class="profile">
              <img src="img/team-2.jpg" alt="Avatar">
            </div>
            <div class="artist-name">Jade Mikell</div>
            <div class="artworks">
              <img src="img/pexels-didsss-2911545.jpg" alt="Art1">
              <img src="img/europeana-SMWPYQhVRuY-unsplash.jpg" alt="Art2">
            </div>
          </div>
        </div>
    
        <!-- Card 10 -->
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="artist-card">
            <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
              <i class="fa fa-user"></i>  
            </button>
            
            
            <div class="banner">
              <img src="img/pexels-dom-j-7304-310436.jpg" alt="Banner">
            </div>
            <div class="profile">
              <img src="img/team-3.jpg" alt="Avatar">
            </div>
            <div class="artist-name">Kareem Salim</div>
            <div class="artworks">
              <img src="img/europeana-5TK1F5VfdIk-unsplash.jpg" alt="Art1">
              <img src="img/europeana-00SzLJ6yQOk-unsplash.jpg" alt="Art2">
            </div>
          </div>
        </div>
    
        <!-- Card 11 -->
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="artist-card">
            <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
              <i class="fa fa-user"></i>  
            </button>
            
            
            <div class="banner">
              <img src="img/image.png" alt="Banner">
            </div>
            <div class="profile">
              <img src="img/team-1.jpg" alt="Avatar">
            </div>
            <div class="artist-name">Sara Jilkel</div>
            <div class="artworks">
              <img src="img/europeana--kUYkiWWM6E-unsplash.jpg" alt="Art1">
              <img src="img/pexels-reneterp-1589279.jpg" alt="Art2">
            </div>
          </div>
        </div>
    
        <!-- Card 12 -->
        <div class="col-lg-3 col-md-4 col-sm-12">
          <div class="artist-card">
            <button class="add-friend-btn" id="addFriendBtn" onclick="toggleFriendStatus(this)"> 
              <i class="fa fa-user"></i>  
            </button>
            
            
            <div class="banner">
              <img src="img/mayur-deshpande-zZPeoLxLRyM-unsplash.jpg" alt="Banner">
            </div>
            <div class="profile">
              <img src="img/avatar1.jpg" alt="Avatar">
            </div>
            <div class="artist-name">Layla Ahmad</div>
            <div class="artworks">
              <img src="img/pexels-shkrabaanthony-4442000.jpg" alt="Art1">
              <img src="img/Flux_Dev_A_vibrant_highresolution_digital_artwork_titled_Your__1.jpg" alt="Art2">
            </div>
          </div>
        </div>
      </div>
    </div>
    
  <!--  Artists' Card end -->
<br><br><br>
    

<!-- Footer -->
<footer class="artistic-footer bg-dark text-light py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Brand & Social -->
            <div class="col-lg-4">
                <div class="footer-brand mb-4">
                    <h3 class=" mb-3">Artistic</h3>
                    <p class="small">Where creativity meets community</p>
                </div>
                <div class="social-grid">
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-behance"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-dribbble"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-artstation"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-6">
                <h5 class="text-primary mb-4">Create</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-light">Challenges</a></li>
                    <li class="mb-2"><a href="#" class="text-light">Tutorials</a></li>
                    <li class="mb-2"><a href="#" class="text-light">Resources</a></li>
                    <li class="mb-2"><a href="#" class="text-light">Workshops</a></li>
                </ul>
            </div>

            <!-- Community -->
            <div class="col-lg-2 col-6">
                <h5 class="text-primary mb-4">Community</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-light">Gallery</a></li>
                    <li class="mb-2"><a href="#" class="text-light">Forum</a></li>
                    <li class="mb-2"><a href="#" class="text-light">Events</a></li>
                    <li class="mb-2"><a href="#" class="text-light">Blog</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-lg-4 col-6">
                <h5 class="text-primary mb-4">Contact</h5>
                <div class="mb-3">
                    <p class="small mb-1"><i class="fas fa-map-marker-alt me-2"></i>123 Art Street, Creative City</p>
                    <p class="small mb-1"><i class="fas fa-envelope me-2"></i>contact@arthub.com</p>
                    <p class="small"><i class="fas fa-phone me-2"></i>+1 (555) ART-HUB</p>
                </div>
                <div class="art-gallery">
                    <div class="row g-2">
                        <div class="col-4"><img src="img\pexels-pixabay-159862.jpg" class="img-fluid rounded" alt="Artwork"></div>
                        <div class="col-4"><img src="img\pexels-tiana-18128-2956376.jpg" class="img-fluid rounded" alt="Artwork"></div>
                        <div class="col-4"><img src="img\pexels-andrew-2123337.jpg" class="img-fluid rounded" alt="Artwork"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-top pt-4 mt-5 text-center">
            <p class="small mb-0 text-muted">
                &copy 24.3.2025- <?php echo date("d.m.Y")?> ArtHub. All rights reserved. 
                <a href="#" class="text-muted">Privacy</a> | 
                <a href="#" class="text-muted">Terms</a> | 
                <a href="#" class="text-muted">FAQs</a>
            </p>
        </div>
    </div>
</footer>

<!-- back to top start -->
<button 
  id="backToTopBtn" 
  class="back-top-btn" 
  title="Go to top"
  aria-label="Scroll to top of page"
>
  ▲
</button>
<!-- back to top end -->




<!-- Search Modal -->
<div class="search-modal">
    <div class="search-modal-overlay"></div>
    <div class="search-modal-content">
        <span class="close-search-modal">&times;</span>
        <h3 class="search-modal-title">Advanced Search</h3>
        <div class="search-modal-body">
            <!-- Dynamic content will be inserted here -->
        </div>
    </div>
</div>
<!-- search popup end -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
  
    <!-- Template Javascript -->
    <script src="js/main.js"></script>

   
    
    <script src="js/card.js" defer></script>

    

    
</body>

</html>