<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>VENUE BOOKING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    *{
        font-family: 'Poppins' , sans-serif;
    }
    .h-font{
        font-family: 'Merienda', cursive;
    }
    input: :-webkit-outer-spin-button,
    input: :-webkit-inner-spin-button {

        -webkit-appearance: none;
        margin: 0;
    
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
    .custom-bg{
        background: color #2ec1ac;
    }

    .custom-bg:hover{
        background: color #279e8c;
    }
</style>    
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">VENUE Booking</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home-page</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Venue</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">About</a>
            </li>
            <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul>
                 class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>-->
            <!--</li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>-->
        </ul>
        <div class="d-flex">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
             login 
            </button>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
             Register 
            </button>
        </div>
        </div>
    </div>
    </nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
        </svg>
            User Login

        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">login number</label>
        <input type="test" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Gentle reminder to always maintain acadmic honesty .Any kind of malpractice will not be tolerated under any circumstances.

        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div>
            <button type="submit" class="btl b">Log-In</button>
            <a href="javascript: void(0)">Forgot Password</a>

        </div>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal_lg">
    <div class="modal-content">
        <form action="">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-hearts" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z"/>
        </svg>
            User Registration

        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Registration number</label>
        <input type="test" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div>
            <button type="submit" class="btl b">Register</button>
            <a href="javascript: void(0)">Confirm Password</a>

        </div>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- images -->

<div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <!--<img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.hire4event.com%2Fblogs%2Fbest-college-fest-and-school-event-organiser-in-delhi-noida-gurgaon%2F&psig=AOvVaw04ftRB7eoQefrt_SU-wNCU&ust=1726617191991000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCJDIkLXUyIgDFQAAAAAdAAAAABAE" class ="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH99_q-jrlYjI4tSpY02baaAIanGvin5W8Ew&s" class ="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQD_6XZsqpU6WZUGoxNO5MSfa5pMn2t_K3PqQ&s" class ="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-ofxFaReF9hG71tGOsoCmNd2TeFMMfOo7AA&s" class ="w-100 d-block" />
          </div>-->
          <div class="swiper-slide">
            <img src="https://i.pinimg.com/564x/7e/91/44/7e91449ba3c904e475a4994d6b942403.jpg" class ="w-100 d-block" />
          </div>
        </div>
      </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
      <script>
        var swiper = new Swiper(".swiper-container", {
          spaceBetween: 30,
          effect: "fade",
          loop: true,
          autoplay: {
            delay: 3500,
            disableOnInteraction: false,
          }
        });
      </script>

<div class= "container availability-form">
</div>

<!--Our Rooms-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="container">
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<div class="container">
  <div class="row justify_content_evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px">
      <h5 class="mt-3">Air conditioning</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px">
      <h5 class="mt-3">Projector</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px">
      <h5 class="mt-3">speakers/mic</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px">
      <h5 class="mt-3">good company</h5>
    </div>
  </div>
</div>


<br><br><br>
<br><br><br>


<!--check avaiability form -->
<div class = "container">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5>Check Booking Availability</h5>
        <form>
            <div class="row">
                <div class ="col-lg-3">
                    <label class = "form-label" style="font-weight: 500 ;"> Check-in </label>
                    <input type="date" class = "form-control shadow-none">
                </div>
                <div class ="col-lg-3">
                    <label class = "form-label" style="font-weight: 500 ;"> Check-out </label>
                    <input type="date" class = "form-control shadow-none">
                </div>

                <div class="col-lg-3">
                    <label class="form-label" style="font-weight: 500;">Students</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-lg-1">
                    <button type="submit" class="btn text-black shadow-none custom-bg">Submit</button>
                </div>
            </div>
        </form>      
    </div>
</div>


<div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
  
      </div>
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb=2 ">VENUE Booking</h3>
        <p>
          Gentle reminder to always maintain acadmic honesty .Any kind of malpractice will not be tolerated under any circumstances.
        </p>
      </div>
      <div class="col-lg-4 p-4">
        <h5class= "mb-3">links</h5>
        <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Home-page</a>
        <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Venue</a>
        <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a>
        <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a>
        <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
  
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>    
</html>