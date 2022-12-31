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
      <li class="breadcrumb-item active" aria-current="page">Daftar Post</li>
    </ol>
  </nav>
  <div class="d-flex justify-content-between w-100 flex-wrap">
    <div class="mb-3 mb-lg-0">
      <h1 class="h4">Daftar Post</h1>
      <p class="mb-0">List Postingan Aktif untuk Blogspot Web</p>
    </div>
    <div class="d-flex align-items-center">
      <a href="<?= BASEURL; ?>/post/create" class="btn btn-outline-gray-600 d-inline-flex align-items-center">
        <svg class="icon icon-xs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg> New Post
      </a>
    </div>
  </div>
</div>

<div class="card border-0 shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-centered table-nowrap mb-0 rounded">
        <thead class="thead-light">
          <tr>
            <th class="border-0 rounded-start">#</th>
            <th class="border-0">Title</th>
            <th class="border-0">Excerpt</th>
            <th class="border-0">Admin</th>
            <th class="border-0">Tanggal Publish</th>
            <th class="border-0 rounded-end">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($data['data'] as $d) : ?>
            <tr>
              <td class="text-primary fw-bold"><?= $no++; ?></td>
              <td class="fw-bold"><?= $d['title']; ?></td>
              <td class="text-wrap"><?= $d['excerpt']; ?></td>
              <td><?= $d['admin']; ?></td>
              <?php if ($d['published_at'] == null) : ?>
                <td>Belum Diposting</td>
              <?php else : ?>
                <td><?= $d['published_at']; ?></td>
              <?php endif; ?>
              <td>
                <!-- Detail -->
                <a href="<?= BASEURL; ?>/menu/detail/<?= $d['id']; ?>" type="button" class="btn btn-info d-inline-flex align-items-center" title="Detail" data-bs-toggle="tooltip" data-bs-placement="top">
                  <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                  </svg>
                </a>
                <!-- Edit -->
                <a href="<?= BASEURL; ?>/menu/edit/<?= $d['id']; ?>" type="button" class="btn btn-warning d-inline-flex align-items-center" title="Edit" data-bs-toggle="tooltip" data-bs-placement="top">
                  <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                  </svg>
                </a>
                <!-- Destroy Modal -->
                <button type="button" class="btn btn-danger d-inline-flex align-items-center" data-href="<?= BASEURL; ?>/menu/destroy/<?= $d['id']; ?>" data-bs-toggle="modal" data-bs-target="#destroyMenu">
                  <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                  </svg>
                </button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal Content -->
<div class="modal fade" id="destroyMenu" tabindex="-1" role="dialog" aria-labelledby="modalTitleNotify" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="modalTitleNotify">Delete Menu</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="py-3 text-center">
          <svg class="icon icon-xl text-danger" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
          </svg>
          <h2 class="h4 modal-title my-3">Important message!</h2>
          <p>Do you sure want to delete this menu permanently?</p>
        </div>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-sm btn-primary btn-ok">Yes</a>
      </div>
    </div>
  </div>
</div>
<!-- End of Modal Content -->