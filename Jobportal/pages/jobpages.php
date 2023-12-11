<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/jobpages.css">
    <style>
       
    </style>
</head>
<body>

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../../index1.php">
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
                    <a class="nav-link" href="../../index1.php">
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
    <div class="container">
        <input type="text" id="jobFilter" placeholder="Search by job title" oninput="filterJobs()">
        <button onclick="filterJobs()">Search</button>  

        <label for="experienceRange">Experience Range:</label>
        <input type="range" id="experienceRange" min="0" max="10" step="1" value="0" oninput="filterJobsByExperience()">
        <span id="experienceValue">0 Years</span>

                <!--==================job 1=============-->
                <div class="card text-center" onclick="navigateToPage('soft.php')" data-experience="0">
                    <div class="card-body">
                        <h5 class="card-title">Software Engineer</h5>
                        <p class="card-text">
                            Swedbank Estonia · Tartu, Tartumaa, Estonia
                            <span class="rating"><i class="bi bi-star-fill" style="color: gold;"></i>4.2 </span> 
                            <span class="review-count">| 60 reviews</span>
                        </p>
                        <p class="card-text">
                            <span><i class="bi bi-briefcase"></i> 0-1 Yrs</span> |
                            <span>&euro; 3,444- &euro; 5,277 Per Month</span> |
                            <span> <i class="bi bi-geo-alt"></i> Swedbank Estonia</span>
                        </p>
                        <p class="card-text">
                            <i class="bi bi-file-earmark-text-fill"></i>
                            <span> software  Engineering....</span>
                        </p>
                        <p class="card-text">C-Sharp and .NET Git</p>
                        
                    </div>
                </div>
                <!--==================job 2=============-->
                <div class="card text-center" onclick="navigateToPage('productE.php')" data-experience="2">
                    <div class="card-body">
                        <h5 class="card-title">Product Engineer</h5>
                        <p class="card-text">
                            Company Name 
                            <span class="rating"><i class="bi bi-star-fill" style="color: gold;"></i>4.2 </span> 
                            <span class="review-count">| 20 reviews</span>
                        </p>
                        <p class="card-text">
                            <span><i class="bi bi-briefcase"></i> 0-2 Yrs</span> |
                            <span>&#8377;2-3 LPA</span> |
                            <span> <i class="bi bi-geo-alt"></i> chennai</span>
                        </p>
                        <p class="card-text">
                            <i class="bi bi-file-earmark-text-fill"></i>
                            <span>Product Engineer</span>
                        </p>
                        <p class="card-text">java . javascript . Node.Js . React.js . PHP . HTML . CSS</p>
                        
                    </div>
                </div>
        <!--==================job 3=============-->
                <div class="card text-center" onclick="navigateToPage('SeniorManufacturingE.php')" data-experience="2">
                    <div class="card-body">
                        <h5 class="card-title">Senior Manufacturing Engineering</h5>
                        <p class="card-text">
                            Criswell Singapore Pte Ltd , Singapore
                            <span class="rating"><i class="bi bi-star-fill" style="color: gold;"></i>4.2 </span> 
                            <span class="review-count">| 60 reviews</span>
                        </p>
                        <p class="card-text">
                            <span><i class="bi bi-briefcase"></i> 3 Yrs</span> |
                            <span>&#8377;2-3 LPA</span> |
                            <span> <i class="bi bi-geo-alt"></i> Singapore</span>
                        </p>
                        <p class="card-text">
                            <i class="bi bi-file-earmark-text-fill"></i>
                            <span>Senior Manufacturing Engineering....</span>
                        </p>
                        <p class="card-text">java . javascript . Node.Js . React.js . PHP . HTML . CSS</p>
                        
                    </div>
                </div>
                 <!--==================job 4=============-->
                <div class="card text-center" onclick="navigateToPage('ENTERPRISEARCHITECTD.php')" data-experience="4">
                    <div class="card-body">
                        <h5 class="card-title">ENTERPRISE ARCHITECT DEVLOPER</h5>
                        <p class="card-text">
                            A Smart Dubai Initiative.,UAE
                            <span class="rating"><i class="bi bi-star-fill" style="color: gold;"></i>4.2 </span> 
                            <span class="review-count">| 20 reviews</span>
                        </p>
                        <p class="card-text">
                            <span><i class="bi bi-briefcase"></i> 1-4 Yrs</span> |
                            <span>&#8377;2-3 LPA</span> |
                            <span> <i class="bi bi-geo-alt"></i> chennai</span>
                        </p>
                        <p class="card-text">
                            <i class="bi bi-file-earmark-text-fill"></i>
                            <span>ENTERPRISE ARCHITECT DEVLOPER</span>
                        </p>
                        <p class="card-text">java . javascript . Node.Js . React.js . PHP . HTML . CSS</p>
                        
                    </div>
                </div>
              <!--==================job 5=============-->
                <div class="card text-center" onclick="navigateToPage('ARCHITECTInteriorDesigner.php')" data-experience="5">
                    <div class="card-body">
                        <h5 class="card-title">ARCHITECT /Interior Designer</h5>
                        <p class="card-text">
                            Company Name 
                            <span class="rating"><i class="bi bi-star-fill" style="color: gold;"></i>4.2 </span> 
                            <span class="review-count">| 20 reviews</span>
                        </p>
                        <p class="card-text">
                            <span><i class="bi bi-briefcase"></i> 0-5 Yrs</span> |
                            <span>&#8377;2-3 LPA</span> |
                            <span> <i class="bi bi-geo-alt"></i> chennai</span>
                        </p>
                        <p class="card-text">
                            <i class="bi bi-file-earmark-text-fill"></i>
                            <span>ARCHITECT /Interior Designer......</span>
                        </p>
                        <p class="card-text">java . javascript . Node.Js . React.js . PHP . HTML . CSS</p>
                        
                    </div>
                </div>


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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script src="../script/jobpages.js">
      
    </script>
</body>
</html>
