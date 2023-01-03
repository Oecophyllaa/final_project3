<main id="main">
  <section id="blog" class="mt-4">
    <div class="container">
      <div class="section-header">
        <h2>Blogpost</h2>
        <p>Enyokitchenette <span>Blogpost</span></p>
      </div>

      <div class="row gy-2">
        <?php foreach ($data['posts'] as $post) : ?>
          <article>
            <h2><a href="<?= BASEURL; ?>/blog/post/<?= $post['slug']; ?>"><?= $post['title']; ?></a></h2>
            <p><?= $post['excerpt']; ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>