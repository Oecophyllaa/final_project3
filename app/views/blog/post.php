<main id="main">
  <section id="blog" class="mt-4">
    <div class="container">
      <div class="section-header">
        <p><?= $data['post']['title']; ?></p>
        <h2>Published at <?= $data['post']['published_at']; ?> by <?= $data['post']['admin']; ?></h2>
      </div>

      <div class="row gy-2">
        <div class="text-center">
          <img src="<?= BASEURL; ?>/img/uploads/artikel/<?= $data['post']['gambar']; ?>" class="img-thumbnail w-50 mt-0 mb-3" alt="gambar-post">
        </div>
        <div class="text-justify">
          <?= $data['post']['body']; ?>
        </div>
        <div class="row">
          <div class="col">
            <a href="<?= BASEURL; ?>/blog" class="btn btn-gray-200 float-end" type="button">Back</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>