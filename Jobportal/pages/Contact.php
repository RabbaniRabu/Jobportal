<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/Contact.css">
    <style>
        .navbar-toggler-icon{
            background-color: black;
        }
    </style>
</head>
<body>
    <!-- Navbar -->  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../../index.php">
            <!-- Replace 'logo.png' with the path to your logo image -->
            <img src="../img/logo.png" alt="Logo" style="max-width: 100px; height: 50px; border-radius: 10px;"> 
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">
                        <i class="bi bi-house-door-fill"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/jobpages.php">
                        <i class="bi bi-card-list"></i> Find a Job
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/AboutUs.php">
                        <i class="bi bi-info-circle-fill"></i> About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Blog.php">
                        <i class="bi bi-journal-text"></i> Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/Contact.php">
                        <i class="bi bi-telephone-fill"></i> Contact
                    </a>
                </li>
            </ul>
        </div>
    </nav>
<br>
    <!-- ... (Your existing HTML content remains unchanged) ... -->

<div class="container-fluid d-flex justify-content-center align-items-center">
    <form id="registrationForm" method="post" action="Contactdb.php">
        <!-- Add 'name' attributes to your form fields -->
        <div class="form-group">
            <label for="name"><i class="bi bi-person-fill text-primary"></i> Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="email"><i class="bi bi-envelope-fill text-success"></i> Email address:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="Mobile"><i class="bi bi-phone-fill text-danger"></i> Mobile:</label>
            <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile" size="50%">
        </div>
        <center>
            <button type="submit" class="btn btn-success" style="width: 200px; height: 50px; border-radius: 10px;">
                <i class="bi bi-send"></i> Send
            </button>
        </center>
    </form>
</div>


    <br><br>
          <!--Footer-->
<footer class="text-white text-center text-lg-start bg-primary">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4" style="margin-top: 18px;">About company</h5>
  
          <p>
            Explore Mediateur Private Limited is a pioneering force in immigration and visas. We specialize in diverse visa services, making global education accessible. 
          </p>
  
          <p>
            We break down borders for personal and academic growth and facilitate business visas, promoting international collaboration. 
          </p>
  
          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="bi bi-facebook"></i></a>
            <!-- Dribbble -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="bi bi-twitter"></i></a>
            <!-- Twitter -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="bi bi-google"></i></a>
            <!-- Google + -->
            <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="bi bi-linkedin"></i></a>
            <!-- Linkedin -->
          </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1" style="margin-top: 18px; margin-left: 28px;">company location</h5>
  
  
          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fa fa-home" style="font-size:36px"></i></span><span class="ms-2">Ritesh Premier Towers, Rajiv Rahadari, Vasavi Nagar, Karkhana, Secunderabad, Telangana 500015.</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fa fa-envelope" style="font-size:24px"></i></span><span class="ms-1">info@exploremediateur.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fa fa-phone" style="font-size:24px"></i></span><span class="ms-1">+91 8712631203</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fa fa-phone" style="font-size:24px"></i></span><span class="ms-1">+91 8712631200</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4" style="margin-left: 90px; margin-top: 18px;">Working hours</h5>
  
          <table class="table text-center text-white">
            <tbody class="font-weight-normal">
              <tr>
                <td>Mon - Thu:</td>
                <td>9am - 6pm</td>
              </tr>
              <tr>
                <td>Fri - Sat:</td>
                <td>9am - 6pm</td>
              </tr>
              <tr>
                <td>Sunday:</td>
                <td>9am - 2pm</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-white" href="#">exploremediateurpvtltd.com</a>
    </div>
  </footer>

  
<!-- ... (Your HTML content remains unchanged) ... -->

<!-- ... (The rest of your HTML content remains unchanged) ... -->

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>