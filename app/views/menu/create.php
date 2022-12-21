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
      <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/menu">Menu</a></li>
      <li class="breadcrumb-item active" aria-current="page">Create Menu</li>
    </ol>
  </nav>
  <div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
      <h1 class="h4">Create Menu</h1>
      <p class="mb-0">Dozens of delicious foods made to provide energy, healthiness, powers, and more.</p>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 mb-4">
    <div class="card border-0 shadow components-section">
      <div class="card-body">
        <form action="<?= BASEURL; ?>/menu/store" method="POST" enctype="multipart/form-data">
          <div class="row mb-2">
            <div class="col-lg-6 col-sm-12">
              <div class="mb-3">
                <label for="nama_menu">Nama Menu</label>
                <input type="text" class="form-control" name="nama_menu" id="nama_menu" placeholder="Nama Menu" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label class="my-1 me-2" for="id_kategori">Kategori Menu</label>
                <select class="form-select" name="id_kategori" id="id_kategori" aria-label="Select Kategori" required>
                  <?php foreach ($data['kategori'] as $kat) : ?>
                    <option value="<?= $kat['id_kategori']; ?>"><?= $kat['nama_kategori']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="mb-0">
                <label class="my-1 me-2" for="id_jenis">Jenis Menu</label>
                <select class="form-select" name="id_jenis" id="id_jenis" aria-label="Select Jenis" required>
                  <?php foreach ($data['jenis'] as $jen) : ?>
                    <option value="<?= $jen['id_jenis']; ?>"><?= $jen['nama_jenis']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" placeholder="Deskripsi Menu" name="deskripsi" id="deskripsi" rows="5"></textarea>
              </div>
              <div class="row">
                <div class="col-lg-4 col-sm-12">
                  <div class="mb-0">
                    <label for="rating">Rating</label>
                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">
                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                      </span>
                      <input type="text" class="form-control" name="rating" id="rating" placeholder="Rating" aria-label="Rating" required>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                  <div class="mb-0">
                    <label for="harga">Harga</label>
                    <div class="input-group">
                      <span class="input-group-text" id="basic-addon1">
                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                      </span>
                      <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" aria-label="Harga" required>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                  <div class="mb-0">
                    <label for="formFile" class="form-label">Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="gambar">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg">
              <button class="btn btn-primary" type="submit">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>