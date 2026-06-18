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
            <span>Privacy Policy</span>
          </h1>
          <ul class="list-inline breadcrumb-menu mb-3">
            <li class="list-inline-item"><a href="index.php"><i class="ti ti-home"></i> <span>Home</span></a></li>
            <li class="list-inline-item">• &nbsp; <a href="privacy.php"><span>Privacy</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="content">
            <p><strong>Last updated on December 25, 2021</strong></p>
            <p>Below are our dummy <a href="#!">Privacy &amp; Policy</a>, which outline a lot of legal goodies, but the bottom line is it’s our aim to always take care of both you, as a customer, or as a seller on our platform.</p>

            <h3 id="licensing-policy">Licensing Policy</h3>
            <p>By visiting and/or taking any action on our template, you confirm that you are in agreement with and bound by the terms outlined below. These terms apply to the website, emails, or any other communication.</p>

            <h4 id="here-are-terms-of-our-standard-license">Here are terms of our Standard License:</h4>
            <ul>
              <li>The Standard License grants you a non-exclusive right to make use of template you have purchased.</li>
              <li>You are licensed to use the Item to create one End Product for yourself or for one client (a “single application”), and the End Product can be distributed for Free.</li>
            </ul>

            <h4 id="if-you-opt-for-an-extended-license">If you opt for an Extended License:</h4>
            <ul>
              <li>You are licensed to use the Item to create one End Product for yourself or for one client (a “single application”), and the End Product maybe sold or distributed for free.</li>
            </ul>

            <h3 id="additional-policy">Additional Policy</h3>
            <p>By visiting and/or taking any action on our template, you confirm that you are in agreement with and bound by the terms outlined below. These terms apply to the website, emails, or any other communication.</p>
            <ul>
              <li>You have 2 days to evaluate your purchase. If your purchase fails to meet expectations set by the seller, or is critically flawed in some way, contact Bootstrap Themes and we will issue a full refund pending a review.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include 'partials/footer.php' ?>

  <?php include 'partials/footer-script.php' ?>

</body>

</html>