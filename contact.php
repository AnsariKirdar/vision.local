<?php
include 'inc/config.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <link href="<?php echo  $BaseURL ?>/css/bootstrap.min.css" rel="stylesheet">
  <script src="<?php echo  $BaseURL ?>/js/fontawsome.js"></script>
  <link rel="stylesheet" href="<?php echo  $BaseURL ?>/css/style.css">
  <title>Hello, world!</title>
</head>

<body>
  <div class="mainBody">
    <section id="navBar">
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand text-primary fw-bold" href="<?php echo  $BaseURL ?>/index/"><span class="sig">Vision Technology</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo  $BaseURL ?>/index/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo  $BaseURL ?>/blogs/">Bolgs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo  $BaseURL ?>/gallery/">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo  $BaseURL ?>/service/">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo  $BaseURL ?>/portfolio/">Portfolio </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo  $BaseURL ?>/carrers/">Carrer's </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Client's </a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="<?php echo  $BaseURL ?>/about/">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-primary fw-bold active" href="<?php echo  $BaseURL ?>/contact/">Contact</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> -->
            </ul>
            <div>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#"><img src="<?php echo  $BaseURL ?>/img/common/icon/user_male.svg" width="33px" alt="Profile Picture"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </section>

    <section>
      <div class="banner">
        <img src="<?php echo  $BaseURL ?>/img/slider/white.jpg" width="100%" alt="">
      </div>
    </section>


    <section class="">
      <div class="py-5 px-2">
        <div class="container  shadow rounded-xlg mb-2 ">
          <h3 class="handWritting fw-bolder text-primary px-3 pt-2"> Website / Erp Making Process</h3>
        </div>
        <div class="container pb-4 pt-2 bg-white rounded-xlg shadow-lg">
          <div class="row justify-content-evenly">
            <div class="col-2 d-block d-md-none "></div>
            <div class="col-10 col-sm-6 col-md-6 col-lg-3 mt-4">
              <div class="p-2 rounded-xlg shadow p-3">
                <img src="<?php echo  $BaseURL ?>/img/common/icon/num1.svg" height="55px" alt=""><br>
                <h3 class="handWritting text-primary fw-bold">Research</h3>
                <p>Needs Assessment Target Market Goals & Objectives</p>
              </div>
            </div>

            <div class="col-10 col-sm-6 col-md-6 col-lg-3 mt-4">
              <div class="p-2 rounded-xlg shadow p-3">
                <img src="<?php echo  $BaseURL ?>/img/common/icon/num2.svg" height="55px" alt=""><br>
                <h3 class="handWritting text-primary fw-bold"> Protyping</h3>
                <p>Making Graphic User Interface With Interacting Links</p>
              </div>
            </div>
            <div class="col-2 d-block d-lg-none"></div>
            <div class="col-2 d-block d-md-none "></div>
            <div class="col-10 col-sm-6 col-md-6 col-lg-3 mt-4">
              <div class="p-2 rounded-xlg shadow p-3">
                <img src="<?php echo  $BaseURL ?>/img/common/icon/num3.svg" height="55px" alt=""><br>
                <h3 class="handWritting text-primary fw-bold">Coding</h3>
                <p>Getting Started With Coding Process and Development Begin</p>
              </div>
            </div>
            <div class="col-10 col-sm-6 col-md-6 col-lg-3 mt-4">
              <div class="p-2 rounded-xlg shadow p-3">
                <img src="<?php echo  $BaseURL ?>/img/common/icon/num4.svg" height="55px" alt=""><br>
                <h3 class="handWritting text-primary fw-bold">Launching</h3>
                <p>Selecting the Hosting Company and Deploy the Website / Erp</p>
              </div>
            </div>
            <div class="col-2 d-block d-md-none "></div>
          </div>
        </div>
      </div>

    </section>

    <section class="bgb-shade bg-primary">
      <div class="container text-center py-5 px-2">
        <h3 class="text-white"> Are you ready to take the big step towards growth?</h3>
        <h1 class="text-white fw-bolder">
          So Let's Talk <span class="handWritting">Business!</span>
        </h1>
        <a href="<?php echo  $BaseURL ?>/" target="_blank" rel="noopener noreferrer" class="btn btn-light px-5 fw-bold text-primary btn-lg mt-2"> Connect </a>
      </div>
    </section>

    <section class="">
      <div class="bgb-shade bg-white py-5 px-2">
        <div class="container  shadow rounded-xlg mb-2 ">
          <h3 class="handWritting fw-bolder text-primary px-3 pt-2">Project Gallery</h3>
        </div>

        <div class="container pb-5 pt-4 bg-white rounded-xlg shadow-lg">

          <nav class="mb-3 rounded-3 px-3">
            <div class="nav nav-fill border-0 nav-pills nav-tabs" id="nav-tab" role="tablist">
              <button class=" btn nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
              <button class=" btn nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Natures</button>
              <button class=" btn nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Cars</button>
              <button class=" btn nav-link" id="nav-people-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">people</button>
            </div>
          </nav>
          <div class="row" data-masonry="{&quot;percentPosition&quot;: true }">
            <div class="col-sm-6 col-lg-4 mb-4">
              <div class="card">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="https://picsum.photos/200/300" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                </svg>

                <div class="card-body">
                  <h5 class="card-title">Card title that wraps to a new line</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 nature">
              <div class="card p-3">
                <figure class="p-3 mb-0">
                  <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                  </blockquote>
                  <figcaption class="blockquote-footer mb-0 text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 cars">
              <div class="card">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                </svg>

                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 people">
              <div class="card bg-primary text-white text-center p-3">
                <figure class="mb-0">
                  <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                  </blockquote>
                  <figcaption class="blockquote-footer mb-0 text-white">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 cars">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has a regular title and short paragraph of text below it.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 nature">
              <div class="card">
                <svg class="bd-placeholder-img card-img" width="100%" height="260" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Card image" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Card image</text>
                </svg>

              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 nature">
              <div class="card p-3 text-end">
                <figure class="mb-0">
                  <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                  </blockquote>
                  <figcaption class="blockquote-footer mb-0 text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4 nature">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="">
      <div class="bgb-shade bg-primary py-5 px-2">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="px-2 px-sm-3 px-md-4 px-lg-4">
              <div class="bg-white rounded-xlg py-4">
                <h3 class="fw-bolder text-primary text-center">
                  Schedule Your <span class="handWritting">free consultation</span> Now!
                </h3>
                <hr>
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-6 p-2">
                      <input type="text" class="form-control form-control-lg" id="consultationName" name="consultationName" placeholder="Full Name" aria-label="Full Name">
                    </div>
                    <div class="col-6 p-2">
                      <input type="text" class="form-control form-control-lg" id="consultationPhone" name="consultationPhone" placeholder="Phone Number" aria-label="Phone Number">
                    </div>
                    <div class="col-6 p-2">
                      <input type="text" class="form-control form-control-lg" id="consultationEmail" name="consultationEmail" placeholder="Email Id" aria-label="Email Id">
                    </div>
                    <div class="col-6 p-2">
                      <select name="" class="form-control form-control-lg form-select" id="consultationService">
                        <option value="">Services Interested</option>
                        <option value="SEO">SEO</option>
                      </select>
                    </div>
                    <div class="col-12 p-2">
                      <textarea name="msg" id="consultationMSG" class="form-control form-control-lg " placeholder="Your Message" rows="3"></textarea>
                    </div>
                    <div class="col-12 p-2">
                      <p class="mb-0 text-center">
                        <button type="submit" class="btn btn-primary btn-lg px-5 sig fw-bold ">
                          Submit
                        </button>
                      </p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 d-flex align-items-center my-3 mt-5">
            <img src="<?php echo  $BaseURL ?>/img/profile/enquiry.png" class="enquiryPersonProfile" alt="Vision Technology Enquiry Person">
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-2"> </div>
        </div>
      </div>
    </section>

    <section>
      <div class="py-5 px-2">
        <div class="container pt-5">
          <p class="handWritting ">
            <span class=" handWritting text-primary"> Work with a Certified Google, Bing, Facebook, ... Partner</span>
            <br>
          </p>
          <p class="px-3 h5 fw-bolder">A Google, Bing, Facebook, ... partner can make all the difference.</p>
          <div class="row my-3 mt-4">
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/google-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/google-partner-logo.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/google-ad-words-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/google-analytics-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/google-map-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/google-search-console-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/youtube-patner.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/facebook-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/instagram-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/linked-in-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/bing-partner-logo.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/semrush-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/pinterest-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/twitter-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-3 d-flex align-items-center p-2 text-center">
              <img src="<?php echo  $BaseURL ?>/img/logo/ahrefs-icon.png" class="figure-img img-fluid rounded" alt="bing-partner">
            </div>
          </div>
        </div>
      </div>
      <hr>
    </section>

    <section id="footer">
      <footer class="bg-primary px-2 pt-5">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 py-2">
            <h3 class="fw-bold text-white ms-3">Follow Us On</h3>
            <div class="row">
              <div class="col-6">
                <div class="bg-white p-3 my-3 rounded">
                  hi
                </div>
              </div>
              <div class="col-6">
                <div class="bg-white p-3 my-3 rounded">
                  hi
                </div>
              </div>
              <div class="col-6">
                <div class="bg-white p-3 my-3 rounded">
                  hi
                </div>
              </div>
              <div class="col-6">
                <div class="bg-white p-3 my-3 rounded">
                  hi
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 py-2">
            <h3 class="fw-bold text-white ms-3 sig"><span class="">Follow</span> Us On</h3>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" target="_blank" href="https://www.facebook.com/visiontechnologymumbai"><img src="<?php echo  $BaseURL ?>/img/common/icon/facebook.svg" width="22px" alt="Vision Technology Facebook page"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" target="_blank" href="https://www.instagram.com/visiontechnologymumbai/?hl=en"><img src="<?php echo  $BaseURL ?>/img/common/icon/insta.svg" width="22px" alt="Vision Technology Linkedin Handle"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" target="_blank" href="https://wa.me/918850537174"><img src="<?php echo  $BaseURL ?>/img/common/icon/whatsapp.svg" width="22px" alt="Vision Technology Whatsapp Handle"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" target="_blank" href="https://twitter.com/Kirdarahmed"><img src="<?php echo  $BaseURL ?>/img/common/icon/twitter.svg" width="22px" alt="Vision Technology Twitter Handle"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" target="_blank" href="https://in.pinterest.com/ansarikirdar"><img src="<?php echo  $BaseURL ?>/img/common/icon/pinterest.svg" width="22px" alt="Vision Technology Twitter Handle"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" target="_blank" href="https://www.linkedin.com/in/ansarikirdar/"><img src="<?php echo  $BaseURL ?>/img/common/icon/linkedln.svg" width="22px" alt="Vision Technology Twitter Handle"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" target="_blank" href="https://www.youtube.com/channel/UCSVikbpWTnyQ8HnNqp0jizA"><img src="<?php echo  $BaseURL ?>/img/common/icon/youtube.svg" width="22px" alt="Vision Technology Twitter Handle"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" target="_blank" href="https://www.behance.net/ansarikirdar1"><img src="<?php echo  $BaseURL ?>/img/common/icon/behance.svg" width="22px" alt="Vision Technology Twitter Handle"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" target="_blank" href="https://dribbble.com/ansari-kirdar"><img src="<?php echo  $BaseURL ?>/img/common/icon/dribble.svg" width="22px" alt="Vision Technology Twitter Handle"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" target="_blank" href="https://github.com/ansari-kirdar"><img src="<?php echo  $BaseURL ?>/img/common/icon/git.svg" width="22px" alt="Vision Technology Twitter Handle"></a>
              </li>
            </ul>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" href="tel:918850537174"><img src="<?php echo  $BaseURL ?>/img/common/icon/phone.svg" width="20px" alt="vision Technology Phone Number 1"> +91-8850537174</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" href="tel:918652434063"><img src="<?php echo  $BaseURL ?>/img/common/icon/phone.svg" width="20px" alt="vision Technology Phone Number 2"> +91-8652434063</a>
              </li>
            </ul>
            <ul class="nav  mb-md-2 mb-lg-2">
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" target="_blank" href="https://www.google.com/maps/dir//Vision+Technology,+Plot+no+22,+Room+no+90,+Gate+No.+6+N.C.C,+Malvani,+Malad+West,+Mumbai,+Maharashtra+400095/@19.1871838,72.8196299,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3be7b781f405ea69:0xb26c9e6714a080ff!2m2!1d72.8218186!2d19.1871787!3e0"><img src="<?php echo  $BaseURL ?>/img/common/icon/location.svg" width="20px" alt="Location Pin"> Plot NO.22, Shop NO. 90, Gate No.6 Malad West, Mumbai 400095</a>
              </li>
            </ul>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" href="#">Branding</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" href="#">Website Design</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" href="#">SEO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" href="#">Social Media Marketing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" href="#">Performance Marketing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white fw-normal px-2" href="#">Ecommerce Development</a>
              </li>
            </ul>
          </div>
          <div class="col-12 pt-2 pb-1">
            <p class="mb-0 text-end text-white fw-normal sig" style="font-size: 55px;">
              The Vision Technology Team ...
            </p>
          </div>
          <div class="col-12 pt-2 pb-1">
            <p class="mb-0 text-center text-white fw-normal">
              Copyright © 2020. Vision Technology, All Right Reserved .
            </p>
          </div>
        </div>
      </footer>
    </section>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <script src="<?php echo  $BaseURL ?>/js/main.js"></script>
</body>

</html>