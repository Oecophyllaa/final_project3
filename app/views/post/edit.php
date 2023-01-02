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
      <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
    </ol>
  </nav>
  <div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
      <h1 class="h4">Edit Postingan</h1>
      <p class="mb-0">Suntingan postingan kamu agar lebih menarik.</p>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 mb-4">
    <div class="card border-0 shadow components-section">
      <div class="card-body">
        <form action="<?= BASEURL; ?>/post/update/<?= $data['post']['id']; ?>" method="post" enctype="multipart/form-data">
          <div class="row mb-2">
            <div class="col-lg-12 col-sm-12">
              <div class="mb-3">
                <label for="title">Judul Artikel</label>
                <input type="text" class="form-control" name="title" id="title" value="<?= $data['post']['title']; ?>" aria-describedby="emailHelp" autofocus onfocus="parseData()" required>
                <small id="emailHelp" class="form-text text-muted">Judul harus kurang dari 50 karakter.</small>
              </div>
              <div class="mb-3">
                <label for="body">Isi Artikel</label>
                <textarea class="form-control" name="body" id="body" rows="5" required><?= $data['post']['body']; ?></textarea>
              </div>
              <input type="hidden" name="excerpt" id="excerpt" value="">
              <div class="mb-0">
                <label for="gambar" class="form-label">Gambar Artikel</label>
                <input class="form-control" type="file" id="gambar" name="gambar">
                <small id="emailHelp" class="form-label text-muted">File harus kurang dari 5MB. (jpg, jpeg, png)</small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg">
              <button class="btn btn-info" type="submit" name="publish" value="<?= date("Y-m-d H:i:s"); ?>" onclick="formatInputs()">Publish Now</button>
              <button class="btn btn-gray-200" type="submit" name="publish" value="null" onclick="formatInputs()">Save Draft</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>