<div class="pagination mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="list-line">
            <li class="list-line-item">
              <a href="contact.php"><i class="fa-solid fa-arrow-left"></i></a>
            </li>
            <li class="list-line-item">
              <a href="about.php">1</a>
            </li>
            <li class="list-line-item">
              <a href="contact.php">2</a>
            </li>
            <li class="list-line-item">
              <a href="article.php">3</a>
            </li>
            <li class="list-line-item">
              <a href="index.php">
                <i class="fa-solid fa-arrow-right"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
   </div>

   <!-- footer strat -->
   <div class="footer section-padding gray-bg pb-5">
    <div class="container">
      <div class="row justify-contant-center text-center">
        <div class="col-md-12 mt-5">
          <h1 class="text-center mt-5 mx-auto">Subscribe Newsletter</h1>
        </div>
        <div class="form-group">
          <p class="mt-3">Subscribe my Newsletter for new blog posts , tips and info.</p>
        </div>
        <div class="form-group form-row align-item-center mb-0">
          <div class="col-sm-9 col-lg-4 mx-auto">
            <input type="email" class="form-control" placeholder="Email Address">
          </div>
        </div>
        <div class="col-sm-3 mx-auto mt-4">
          <a href="" class="btn btn-dark">Subscribe</a>
        </div>
        <hr class="heding_row mt-5">
        <div class="col-lg-12 mx-auto mt-5">
          <ul class="list-inline text-center d-flex">
            <li class="list-line-item"><a href="">Privacy Policy</a></li>
            <li class="list-line-item"><a href="">Support</a></li>
            <li class="list-line-item"><a href="about.php">About</a></li>
            <li class="list-line-item"><a href="contact.php">Contact</a></li>
            <li class="list-line-item"><a href="article.php">Category</a></li>
          </ul>
        </div>
        <div class="col-lg-6 mx-auto pb-5">
          <div class="footer-btm">
            <a href="">@"sameharahim952@gmail.com"@-2023</a>
          </div>
      </div>
    </div>
   </div>
  
   <!-- footer end -->
   
    <div id="preloader">
     <div class="line"></div>
    </div>
     

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/JS.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
      var preloader = document.getElementById('preloader');
      function myfuntion(){
        preloader.style.display = 'none';
      }
      
    </script>
    <script>
      $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    center:true,
    nav:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,

        },
        600:{
            items:3,
        },
        1000:{
            items:3,

        }
    }
})
      })
    </script>

  </body>
</html>
