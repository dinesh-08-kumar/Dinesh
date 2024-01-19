<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>

.nav-link {
    color: rgb(250, 249, 249);
}

        .xyz{
            width: 100%;
            height: 300px;
        }
        .cx{
          width: 300px;
        }

        .cds{
          width: 100px;
          height: 40px;

        }
        .card-img-top{
            height: 50vh;

        }



        </style>
        </head>


    <body>


<header>
  <nav class="navbar navbar-expand-md navbar-danger fixed-top bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><button><img src="{{asset('images/delivery.png')}}"  style="height: 50px" width="50px"></button></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Share</a>
          </li>


          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Delivary address</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Delivary man trace</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Sign up</a>
        </li>
        </ul>
        <form class="d-flex">
         <button> <img src="{{asset('images/shopping-cart-add.svg')}}"></button>
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
  </nav>
</header>



<!-- carousel-->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/fruits.jpg')}}" class="xyz">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Fresh Fruits </h1>
            <p>Apple,grapes,mangoes,...Available now</p>
            <p><a class="btn btn-lg btn-primary" href="#">Get It</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/vege.jpg')}}" class="xyz">
        <div class="container">
          <div class="carousel-caption">
            <h1>Fresh Vegetables</h1>
            <p>onion,tomato,beetroot,....Available now</p>
            <p><a class="btn btn-lg btn-primary" href="#">Discount 25%</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/m.png')}}" class="xyz">
        <div class="container">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Meat</h1>
            <p>Chicken,Mutton,Fish.........Available now</p>
            <p><a class="btn btn-lg btn-primary" href="#">Discount 10%</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>









<!--main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="Quick buy">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/fruits.jpg')}}" class="xyz">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">offer ends soon</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" class="slide">
        <img src="{{asset('images/vege.jpg')}}" class="xyz">
         <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">buy it now</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" class="slide" >
        <img src="{{asset('images/meats.png')}}" class="xyz">
        <div class="container">
          <div class="carousel-caption">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">50% discout</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div-->



  <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Fruits Benifits
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Fruits</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>What is the main benefit of fruit?<br>
            Fruits are an excellent source of essential vitamins and minerals, and they are high in fiber. Fruits also provide a wide range of health-boosting antioxidants, including flavonoids. Eating a diet high in fruits and vegetables can reduce a person's risk of developing heart disease, cancer, inflammation, and diabetes</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrops">
    vegetables Benefits
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrops" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropsLabels">Vegetables</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p> What vegetables benefit?<br>
           <p>Lower Blood Pressure. Many green leafy vegetables like kale, spinach, and chard contain potassium. ...
            Lower Risk of Heart Disease. Green leafy vegetables also contain vitamin K, which is believed to prevent calcium from building up in your arteries. ...
            Diabetes Control</p></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>


  <!---card--->
  <div class="card-group row bg-danger card border-dark " >
    <div class="card border-3 border-dark">
      <img src={{asset('images/onion.webp')}} class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">ONION</h5>
        <p class="card-text">Available at Just --<b> 4$</b></p>

        <button type="button" class="btn btn-outline-success">Buy</button>
        <button type="button" class="btn btn-outline-info">add to cart</button>
            <div class="input-group w-auto justify-content-end align-items-center">
            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
            </div>

      </div>
    </div>

    <div class="card border-3 border-dark">
        <img src={{asset('images/tomato.jpg')}} class="card-img-top" >
        <div class="card-body">
            <h5 class="card-title">Tomato</h5>
            <p class="card-text">Available at Just --<b> 3$</b></p>
            <button type="button" class="btn btn-outline-success">Buy</button>
            <button type="button" class="btn btn-outline-info">add to cart</button>
            <div class="input-group w-auto justify-content-end align-items-center">
            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
            </div>
        </div>
    </div>

    <div class="card border-5 border-dark">
        <img src="{{asset('images/chicken.jpg')}}" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title">Chicken</h5>
        <p class="card-text">Available at Just --<b>3$</b></p>
        <button type="button" class="btn btn-outline-success">Buy</button>
        <button type="button" class="btn btn-outline-info">add to cart</button>
            <div class="input-group w-auto justify-content-end align-items-center">
            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
            </div>
    </div>
  </div>



  <div class="card-group">
    <div class="card border-5 border-dark">
      <img src={{asset('images/apple.jpg')}} class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Apple</h5>
        <p class="card-text">Available at Just --<b> 5$</b></p>
        <button type="button" class="btn btn-outline-success">Buy</button>
        <button type="button" class="btn btn-outline-info">add to cart</button>
            <div class="input-group w-auto justify-content-end align-items-center">
            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
        </div>
    </div>
    </div>

    <div class="card border-5 border-dark">
      <img src={{asset('images/mango.jpg')}} class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Mango</h5>
        <p class="card-text">Available at Just -- <b>5$</b></p>
        <button type="button" class="btn btn-outline-success">Buy</button>
        <button type="button" class="btn btn-outline-info">add to cart</button>
          <div class="input-group w-auto justify-content-end align-items-center">
          <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
          <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
          <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
          </div>
        </div>
  </div>
  <div class="card border-5 border-dark">
    <img src={{asset('images/papaya.jpg')}} class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Papaya</h5>
        <p class="card-text">Available at Just -- <b>3$</b></p>
        <button type="button" class="btn btn-outline-success">Buy</button>
        <button type="button" class="btn btn-outline-info">add to cart</button>
            <div class="input-group w-auto justify-content-end align-items-center">
            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 lh-0" data-field="quantity">
            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm lh-0" data-field="quantity">
            </div>
      </div>
    </div>
  </div>
<br>
  <div class=" more items" >
    <button type="button" class="btn btn-outline-success">See More</button>
    <button type="button" class="btn btn-outline-info">add to cart</button>
  </div>
<br>
<!--footer-->
<!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">fruits</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Nuts</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vegetables</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Meats</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
  </body>
</html>
