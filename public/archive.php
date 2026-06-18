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
            <span>Archive</span>
          </h1>
          <ul class="list-inline breadcrumb-menu mb-3">
            <li class="list-inline-item"><a href="index.php"><i class="ti ti-home"></i> <span>Home</span></a></li>
            <li class="list-inline-item">• &nbsp; <a href="archive.php"><span>Archive</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="archive-block">
            <h2><i class="ti ti-archive"></i>2021</h2>
            <p class="archive-post-item">05 Dec<span>•</span><a href="blog-single.php">The AGI hype train is running out of steam</a></p>
            <p class="archive-post-item">17 Nov<span>•</span><a href="blog-single.php">Creating an object that travels at 1% the speed of light?</a></p>
            <p class="archive-post-item">16 Nov<span>•</span><a href="blog-single.php">Everything you wanted to know about the metaverse</a></p>
            <p class="archive-post-item">15 Nov<span>•</span><a href="blog-single.php">How to hire a developer straight out of bootcamp — without getting burned</a></p>

            <h2><i class="ti ti-archive"></i>2020</h2>
            <p class="archive-post-item">12 Oct<span>•</span><a href="blog-single.php">Why developers are so divided over WordPress</a></p>
            <p class="archive-post-item">14 Sep<span>•</span><a href="blog-single.php">Why everyone is talking about ‘green steel’ at COP26</a></p>
            <p class="archive-post-item">12 Aug<span>•</span><a href="blog-single.php">I work 5 hours a day, and I’ve never been more productive</a></p>

            <h2><i class="ti ti-archive"></i>2019</h2>
            <p class="archive-post-item">09 Feb<span>•</span><a href="blog-single.php">Gig startups want you to believe they can replace your job — don’t fall for it</a></p>
            <p class="archive-post-item">10 Jan<span>•</span><a href="blog-single.php">3 reasons why sodium-ion batteries may dethrone lithium</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include 'partials/footer.php' ?>

  <?php include 'partials/footer-script.php' ?>

</body>

</html>