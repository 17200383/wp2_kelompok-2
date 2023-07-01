
<nav class="navbar navbar-expand-lg bg-primary bg-body-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#"><strong><?= $title ?></strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <?= form_open('dashboard/logout') ?>
      <button class="btn btn-outline-warning" type="submit">Logout</button>
      <?= form_close() ?>
      </form>
    </div>
  </div>
</nav>