<footer class="bg-white rounded shadow p-5 mb-4 mt-4">
  <div class="row">
    <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
      <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Oecophylla</a></p>
    </div>
    <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
      <!-- List -->
      <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
        <li class="list-inline-item px-0 px-sm-2">
          <a href="https://themesberg.com/about">About</a>
        </li>
        <li class="list-inline-item px-0 px-sm-2">
          <a href="https://themesberg.com/blog">Blog</a>
        </li>
        <li class="list-inline-item px-0 px-sm-2">
          <a href="https://themesberg.com/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
</main>

<!-- Core -->
<script src="<?= BASEURL; ?>/vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="<?= BASEURL; ?>/vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="<?= BASEURL; ?>/vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Smooth scroll -->
<script src="<?= BASEURL; ?>/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Charts -->
<script src="<?= BASEURL; ?>/vendor/chartist/dist/chartist.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Sweet Alerts 2 -->
<script src="<?= BASEURL; ?>/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Notyf -->
<script src="<?= BASEURL; ?>/vendor/notyf/notyf.min.js"></script>
<?php Flasher::flash(); ?>

<!-- Simplebar -->
<script src="<?= BASEURL; ?>/vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="<?= BASEURL; ?>/js/volt.js"></script>

<!-- Modal Confirmation Delete -->
<script src="<?= BASEURL; ?>/js/jquery.min.js"></script>
<script>
  $('#destroyMenu').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  });
</script>
</body>

</html>