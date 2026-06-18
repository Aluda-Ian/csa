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
            <span>Categories</span>
          </h1>
          <ul class="list-inline breadcrumb-menu mb-3">
            <li class="list-inline-item"><a href="index.php"><i class="ti ti-home"></i> <span>Home</span></a></li>
            <li class="list-inline-item">• &nbsp; <a href="categories.php"><span>Categories</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row g-4 justify-content-center text-center">
      <div class="col-lg-4 col-sm-6">
        <a class="p-4 rounded bg-white d-block is-hoverable" href="categories-single.php">
          <span class="h3"><i class="ti ti-color-swatch mb-2"></i></span>
          <span class="h4 mt-2 mb-3 d-block"> AI</span>
          Total 2 posts
        </a>
      </div>

      <div class="col-lg-4 col-sm-6">
        <a class="p-4 rounded bg-white d-block is-hoverable" href="categories-single.php">
          <span class="h3"><i class="ti ti-color-swatch mb-2"></i></span>
          <span class="h4 mt-2 mb-3 d-block"> Earth</span>
          Total 3 posts
        </a>
      </div>

      <div class="col-lg-4 col-sm-6">
        <a class="p-4 rounded bg-white d-block is-hoverable" href="categories-single.php">
          <span class="h3"><i class="ti ti-color-swatch mb-2"></i></span>
          <span class="h4 mt-2 mb-3 d-block"> Tech</span>
          Total 4 posts
        </a>
      </div>
    </div>
  </div>


  <?php include 'partials/footer.php' ?>

  <?php include 'partials/footer-script.php' ?>

</body>

</html>