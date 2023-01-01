<!-- Breadcrumb -->
<div class="py-4">
  <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
      <li class="breadcrumb-item">
        <a href="<?= BASEURL; ?>">
          <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
        </a>
      </li>
      <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/post">Post</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Post</li>
    </ol>
  </nav>
  <div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
      <h1 class="h4">Detail Postingan</h1>
      <p class="mb-0">Detail Postingan Web Blogspot.</p>
    </div>
  </div>
</div>
<!-- / Breadcrumb -->

<div class="row">
  <div class="col-12 col-lg-12">
    <div class="card border-0 shadow">
      <div class="card-body">
        <article>
          <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
              <div class="text-center">
                <h3 class="mb-3"><?= $data['data']['title']; ?></h3>
                <img src="<?= BASEURL; ?>/img/menu/ramen.jpg" class="img-thumbnail w-50 mt-0 mb-3" alt="gambar-post">
              </div>
              <div class="text-justify">
                <?= $data['data']['body']; ?>
              </div>
              <blockquote class="blockquote text-end">
                <h6 class="mb-0">Published at: <?= $data['data']['published_at']; ?></h6>
                <footer class="blockquote-footer mt-0 text-primary"><?= $data['data']['admin']; ?></footer>
              </blockquote>
              <div class="row">
                <div class="col">
                  <a href="<?= BASEURL; ?>/post" class="btn btn-gray-200 float-end" type="button">Back</a>
                  <button class="btn btn-warning float-end me-2" type="button">Edit</button>
                </div>
              </div>
            </div>
            <div class="col-2"></div>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>