<!DOCTYPE html>
<html lang="en-US">

<head>
  <?php include 'partials/title-meta.php' ?>

  <?php include 'partials/head-css.php' ?>
</head>

<body>

  <div class="header-height-fix"></div>

  <?php include 'partials/navbar.php' ?>

  <div class="search-block">
    <div data-toggle="search-close">
      <span class="ti ti-x text-primary"></span>
    </div>

    <input type="text" id="js-search-input" placeholder="Type to search blog.." aria-label="search-query">

    <div class="mt-4 card-meta">
      <p class="h4 mb-3">See posts by tags</p>
      <ul class="card-meta-tag list-inline">
        <li class="list-inline-item me-1 mb-2">
          <a class="small" href="tag-single.php">Life</a>
        </li>
        <li class="list-inline-item me-1 mb-2">
          <a class="small" href="tag-single.php">Lifestyle</a>
        </li>
        <li class="list-inline-item me-1 mb-2">
          <a class="small" href="tag-single.php">Lighting</a>
        </li>
        <li class="list-inline-item me-1 mb-2">
          <a class="small" href="tag-single.php">Machine</a>
        </li>
        <li class="list-inline-item me-1 mb-2">
          <a class="small" href="tag-single.php">Startups</a>
        </li>
        <li class="list-inline-item me-1 mb-2">
          <a class="small" href="tag-single.php">Work</a>
        </li>
      </ul>
    </div>

    <div class="mt-4 card-meta">
      <p class="h4 mb-3">See posts by categories</p>
      <ul class="card-meta-tag list-inline">
        <li class="list-inline-item me-1 mb-2">
          <a class="small" href="categories-single.php">AI</a>
        </li>
        <li class="list-inline-item me-1 mb-2">
          <a class="small" href="categories-single.php">Earth</a>
        </li>
        <li class="list-inline-item me-1 mb-2">
          <a class="small" href="categories-single.php">Tech</a>
        </li>
      </ul>
    </div>
  </div>

  <section class="page-header section-sm">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="section-title h2 mb-3">
            <span>Contact</span>
          </h1>
          <ul class="list-inline breadcrumb-menu mb-3">
            <li class="list-inline-item"><a href="index.php"><i class="ti ti-home"></i> <span>Home</span></a></li>
            <li class="list-inline-item">• &nbsp; <a href="contact.php"><span>Contact</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row gy-5 justify-content-center">

        <div class="col-lg-5 col-md-10 ms-lg-auto me-lg-0 me-auto">
          <div class="mb-5">
            <h2 class="h3 mb-3">Contact Qurno</h2>
            <p class="mb-0">I&rsquo;m here to help and answer any question you might have. I look forward to hearing from you</p>
          </div>
          <div>
            <h2 class="h4 mb-3">Hate forms? <br> Write an email or make a call</h2>
            <p class="mb-2 content">
              <i class="ti ti-mail-forward me-2 d-inline-block mb-0" style="transform:translateY(2px)"></i> <a href="mailto:contact@qurno.com">contact@qurno.com</a>
            </p>
            <p class="mb-0 content"><i class="ti ti-phone me-2"></i> +98 02 296 4902</p>
          </div>
        </div>

        <div class="col-lg-5 me-lg-auto ms-lg-0 ms-auto">
          <h2 class="h3 mb-4">Contact form</h2>

          <form class="row g-4" action="#!" method="post">
            <div class="col-md-12">
              <textarea class="form-control" placeholder="Ask question or just say Hi" rows="4" name="message" required></textarea>
            </div>
            <div class="col-md-12">
              <input type="email" class="form-control" placeholder="Email address" name="email" required>
            </div>
            <div class="col-md-12">
              <input type="text" class="form-control" placeholder="Your name here" name="name" required>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary" aria-label="Send Message">Send <i class="ti ti-brand-telegram ms-1"></i></button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>


  <?php include 'partials/footer.php' ?>

  <?php include 'partials/footer-script.php' ?>

</body>

</html>