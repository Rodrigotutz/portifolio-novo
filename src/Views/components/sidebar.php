<!-- Button trigger modal -->
<button type="button" class="btn" style="position: fixed;" data-bs-toggle="modal" data-bs-target="#sidebar">
<i class="bi bi-list text-white fs-4"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="sidebar" tabindex="-1" aria-labelledby="sidebar" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen" style="width: 200px;">
    <div class="modal-content">
      <div class="modal-header" style="border:none;">
        <h5 class="modal-title text-muted fw-bold">Rodrigo Tutz</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
      <div class="modal-body d-flex flex-column text-dark">
        <ul class="navbar-nav navbar-dark gap-1">
            <li class="nav-item bg-dark text-white rounded-3 container">
                <a href="<?= $router->route('web.index')?>" class="nav-link <?= $home ?? "" ?> fs-6"><i class="bi bi-house"></i> Inicio</a>
            </li>
            <li class="nav-item bg-dark rounded-3 container">
                <a href="<?= $router->route('web.apps') ?>" class="nav-link <?= $apps ?? "" ?> fs-6"><i class="bi bi-terminal"></i> Apps</a>
            </li>
            <li class="nav-item bg-dark rounded-3 container">
                <a href="<?= $router->route('web.certifieds') ?>" class="nav-link <?= $certifieds ?? "" ?> fs-6"><i class="bi bi-patch-check"></i> Cerficados</a>
            </li>
            <li class="nav-item bg-dark rounded-3 container">
                <a href="<?= $router->route('web.contact') ?>" class="nav-link <?= $contact ?? "" ?> fs-6"><i class="bi bi-telephone"></i> Contato</a>
            </li>
        </ul>
      </div>
      <div class="container mb-2">
        <ul class="navbar-nav navbar-dark">
          <li class="nav-item bg-dark text-white rounded-3 container">
              <small><a href="https://github.com/rodrigotutz" target="_blank" class="nav-link active"><i class="bi bi-github"></i> Github  </a></small>
          </li>
          <li class="nav-item text-center text-muted mt-2 rounded-3">
              <small style="font-size: 12px;">&copy; 2024 - Rodrigo Tutz</small>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>