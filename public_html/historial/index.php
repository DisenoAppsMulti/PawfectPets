<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Historial Médico</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/list-groups/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 1rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="list-groups.css" rel="stylesheet">
  </head>
  <body style="background-color: #F3F5F7;">

<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
      <img src="images/usuario.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
      <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
          <h6 class="mb-0">alex</h6>
          <p class="mb-0 opacity-75">PawParent</p>
        </div>
      </div>
    </a>
  </div>
</div>

<div class="b-example-divider"></div>

<table style="margin-left: auto; margin-right: auto;">
  <tr>
    <td style="vertical-align: top;">
<div class="d-flex flex-column p-4 gap-4 py-md-5 align-items-center justify-content-center">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
      <img src="images/pata.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
      <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
          <h6 class="mb-0">Micho</h6>
          <p class="mb-0 opacity-75">Edad: 2 años</p>
          <p class="mb-0 opacity-75">Raza: Desconocida</p>
          <p class="mb-0 opacity-75">Color: Negro y Blanco</p>
          <p class="mb-0 opacity-75">Peso: 5 Kg.</p>
          <p class="mb-0 opacity-75">Sexo: Macho</p>
          <p class="mb-0 opacity-75">Personalidad: Flojo, cariñoso</p>
        </div>
      </div>
    </a>
    <label class="list-group-item d-flex gap-2">
      <span>Esterilizado:</span><br>
      <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios1" value="" checked disabled>
      <span>
        <small class="d-block text-body-secondary">Si</small>
      </span>
      <input class="form-check-input flex-shrink-0" type="radio" name="listGroupRadios" id="listGroupRadios1" value="">
      <span>
        <small class="d-block text-body-secondary">No</small>
      </span>
    </label>
    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
      <img src="images/desparasitar.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
      <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
          <h6 class="mb-0">Última desparasitación</h6>
          <p class="mb-0 opacity-75">Jarabe</p>
          <p class="mb-0 opacity-75">29/11/2023</p>
        </div>
      </div>
    </a>
    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
      <img src="images/cirugia.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
      <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
          <h6 class="mb-0">Cirugías anteriores</h6>
          <p class="mb-0 opacity-75">Ninguna</p>
        </div>
      </div>
    </a>
    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
      <img src="images/salud.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
      <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
          <h6 class="mb-0">Problemas de salud actuales</h6>
          <p class="mb-0 opacity-75">Ninguno</p>
        </div>
      </div>
    </a>
    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
      <img src="images/tratamiento.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
      <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
          <h6 class="mb-0">Tratamientos actuales</h6>
          <p class="mb-0 opacity-75">Ninguno</p>
        </div>
      </div>
    </a>
  </div>
</div>
    </td>
    <td style="vertical-align: top">
      <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
      <img src="images/vacunas.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
      <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
          <h6 class="mb-0">Vacunas</h6>
          <label class="list-group-item d-flex gap-2">
      <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked disabled>
      <span>
        <small>Parvovirus VVM</small>
        <small class="d-block text-body-secondary">Fecha</small>
      </span>
    </label>
    <label class="list-group-item d-flex gap-2">
      <input class="form-check-input flex-shrink-0" type="checkbox" value="">
      <span>
        <small>Distemper Vr, VVM</small>
        <small class="d-block text-body-secondary">Fecha</small>
      </span>
    </label>
    <label class="list-group-item d-flex gap-2">
      <input class="form-check-input flex-shrink-0" type="checkbox" value="">
      <span>
        <small>Hepatitis infecciosa canina (AVC-2) VVM</small>
        <small class="d-block text-body-secondary">Fecha</small>
      </span>
    </label>
    <label class="list-group-item d-flex gap-2">
      <input class="form-check-input flex-shrink-0" type="checkbox" value="">
      <span>
        <small>Leptospirosis B</small>
        <small class="d-block text-body-secondary">Fecha</small>
      </span>
    </label>
    <label class="list-group-item d-flex gap-2">
      <input class="form-check-input flex-shrink-0" type="checkbox" value="">
      <span>
        <small>Rabia VM</small>
        <small class="d-block text-body-secondary">Fecha</small>
      </span>
    </label>
    <label class="list-group-item d-flex gap-2">
      <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked disabled>
      <span>
        <small>Triple felina (PVF + HVF-1 + CVF) VM</small>
        <small class="d-block text-body-secondary">Fecha</small>
      </span>
    </label>
    <label class="list-group-item d-flex gap-2">
      <input class="form-check-input flex-shrink-0" type="checkbox" value="">
      <span>
        <small>VLeF Vr</small>
        <small class="d-block text-body-secondary">Fecha</small>
      </span>
    </label>
        </div>
      </div>
    </a>
    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
      <img src="images/notas.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
      <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
          <h6 class="mb-0">Notas</h6>
          <p class="mb-0 opacity-75">Tranquilo para las vacunas</p>
        </div>
      </div>
    </a>
  </div>
</div>
    </td>
  </tr>
</table>


<div class="b-example-divider"></div>

<script src="assets/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
