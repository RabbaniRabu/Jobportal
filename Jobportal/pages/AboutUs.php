<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style/style.css">
    <style>
        /* Additional CSS styles can be added here for responsiveness */
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="../../index1.php">
            <!-- Replace 'logo.png' with the path to your logo image -->
            <img src="../img/logo.png" alt="Logo" style="max-width: 100px; height: 50px;"> 
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
  
<!--AboutUs--> 
<div class="about_section layout_padding bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about_taital_main">
            <div class="about_taital" style="color: black;">About Us</div>
            <p class="about_text" id="aboutText" style="color:#fff">
              Explore Mediateur Private Limited is a pioneering force in immigrations and Visas.
              At Explore Mediateur, we stand as advocates for the transformative power of education and global experiences. We deeply understand and appreciate the profound impact that these experiences can have on individuals. Our mission is to guide and support individuals in realizing their dreams of studying abroad, thereby dismantling barriers for personal and academic growth.
            </p>
            <p class="about_text" id="additionalContent" style="color:#fff">
              Our commitment to excellence and innovation is mirrored in every facet of our operations. As a frontrunner
              in the field of immigration and visas, we specialize in a wide array of visa services tailored to meet
              diverse needs. At Explore Mediateur, we recognize the transformative power of education and global
              experiences. We are dedicated to assisting individuals in realizing their dreams of studying abroad,
              breaking down borders for personal and academic growth. Our expertise extends to facilitating business
              visas, recognizing the importance of international collaborations in today's interconnected world. In a
              world that is rapidly evolving, Explore Mediateur Private Limited serves as a steadfast partner, providing
              expert visa solutions that bridge aspirations with reality.
            </p>
            <div class="read_bt"><a href="javascript:void(0);" onclick="toggleContent()" style="border-radius: 10px;">Read More</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="about_img" style="margin-top: 80px;">
            <img src="../img/aboutus_img.jpg" style="max-height: 1000px; width: 100%; object-fit: cover;">
          </div>
        </div>
        <hr>
      </div>
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

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function toggleContent() {
            var aboutText = document.getElementById('aboutText');
            var additionalContent = document.getElementById('additionalContent');
            var readMoreButton = document.querySelector('.read_bt a');

            if (additionalContent.style.display === 'none') {
                additionalContent.style.display = 'block';
                aboutText.style.display = 'none'; // Hide the short text
                readMoreButton.textContent = 'Read Less';
            } else {
                additionalContent.style.display = 'none';
                aboutText.style.display = 'block'; // Show the short text
                readMoreButton.textContent = 'Read More';
            }
        }
    </script>
</body>
</html>
