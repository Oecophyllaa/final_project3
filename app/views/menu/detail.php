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
      <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/menu">Menu</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Menu</li>
    </ol>
  </nav>
  <div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
      <h1 class="h4">Detail Menu</h1>
      <p class="mb-0">Dozens of delicious foods made to provide energy, healthiness, powers, and more.</p>
    </div>
  </div>
</div>
<!-- / Breadcrumb -->

<div class="row">
  <!-- Detail Menu -->
  <div class="col-12 col-lg-7">
    <div class="card border-0 shadow">
      <div class="card-body">
        <div class="row d-block d-xl-flex align-items-center">
          <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
            <img src="<?= BASEURL; ?>/img/menu/spaghetti.jpg" class="img-fluid" alt="ramen">
            <div class="d-sm-none">
              <h2 class="fw-extrabold h5"> Bounce Rate</h2>
              <h3 class="mb-1">50.88%</h3>
            </div>
          </div>
          <div class="col-12 col-xl-7 px-xl-0">
            <div class="d-none d-sm-block">
              <h2 class="h6 text-gray-400 mb-0"><?= $data['menu']['nama_kategori']; ?> | <?= $data['menu']['nama_jenis']; ?></h2>
              <h3 class="fw-extrabold mb-2"><?= $data['menu']['nama_menu']; ?></h3>
            </div>
            <small class="text-gray-500">
              <?= $data['menu']['deskripsi']; ?>
            </small>
            <div class="small d-flex mt-1">
              <div>
                <svg class="icon icon-xs text-warning" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
                <span class="text-light fw-bolder"><?= $data['menu']['rating']; ?></span>
              </div>
            </div>
            <div class="small d-flex mt-1">
              <div>
                <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-light fw-bolder"><?= $data['menu']['harga']; ?>K</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Detail Menu -->

  <!-- Persentase -->
  <div class="col-12 col-lg-5">
    <div class="card border-0 shadow">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between border-bottom pb-3">
          <div>
            <div class="h6 mb-0 d-flex align-items-center">
              <svg class="icon icon-xs text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path>
              </svg>
              Penjualan
            </div>
          </div>
          <div>
            <a href="#" class="d-flex align-items-center fw-bold">
              #755
              <svg class="icon icon-xs text-gray-500 ms-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between border-bottom py-3">
          <div>
            <div class="h6 mb-0 d-flex align-items-center">
              <svg class="icon icon-xs text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
              </svg>
              Pencarian
            </div>
            <div class="small card-stats">
              Gofood
              <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
              </svg>
            </div>
          </div>
          <div>
            <a href="#" class="d-flex align-items-center fw-bold">
              #32
              <svg class="icon icon-xs text-gray-500 ms-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-between pt-3">
          <div>
            <div class="h6 mb-0 d-flex align-items-center">
              <svg class="icon icon-xs text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd"></path>
                <path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z"></path>
              </svg>
              Category Rank
            </div>
            <div class="small card-stats">
              <?= $data['menu']['nama_kategori']; ?> > <?= $data['menu']['nama_jenis']; ?>
              <svg class="icon icon-xs text-success" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
              </svg>
            </div>
          </div>
          <div>
            <a href="#" class="d-flex align-items-center fw-bold">
              #11
              <svg class="icon icon-xs text-gray-500 ms-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Persentase -->
</div>