<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu Tugas | 5026241097</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
      .card-menu {
          border-radius: 0.5rem;
          transition: transform 0.2s ease, background-color 0.2s ease;
      }
      .card-menu:hover {
          transform: translateY(-0.25rem);
          background-color: #495057 !important;
      }
  </style>
</head>

<body class="bg-dark text-white">

<div class="container mt-5">
  <div class="text-center mb-5">
      <h1>Menu Tugas</h1>
      <p>5026241097 - Raden Muhammad Raissa Wirabuwana</p>
  </div>

  <div class="row">

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('pertemuan1') }}" class="text-white text-decoration-none">
              <div class="card bg-secondary card-menu h-100 text-center p-3 border-0">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <h5 class="card-title m-0">Pertemuan 1 - Intro HTML</h5>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('pertemuan2') }}" class="text-white text-decoration-none">
              <div class="card bg-secondary card-menu h-100 text-center p-3 border-0">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <h5 class="card-title m-0">Pertemuan 2 - Web Berita</h5>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('pertemuan3') }}" class="text-white text-decoration-none">
              <div class="card bg-secondary card-menu h-100 text-center p-3 border-0">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <h5 class="card-title m-0">Pertemuan 3 - Responsive</h5>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('task-tm3') }}" class="text-white text-decoration-none">
              <div class="card bg-secondary card-menu h-100 text-center p-3 border-0">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <h5 class="card-title m-0">Task TM 3</h5>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('pertemuan4') }}" class="text-white text-decoration-none">
              <div class="card bg-secondary card-menu h-100 text-center p-3 border-0">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <h5 class="card-title m-0">Pertemuan 4 - Page Client</h5>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('pertemuan5') }}" class="text-white text-decoration-none">
              <div class="card bg-secondary card-menu h-100 text-center p-3 border-0">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <h5 class="card-title m-0">Pertemuan 5 - BS Arsha</h5>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('linktree-home') }}" class="text-white text-decoration-none">
              <div class="card bg-secondary card-menu h-100 text-center p-3 border-0">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <h5 class="card-title m-0">Tugas Linktree</h5>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('dosen') }}" class="text-white text-decoration-none">
              <div class="card bg-secondary card-menu h-100 text-center p-3 border-0">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <h5 class="card-title m-0">DosenController</h5>
                  </div>
              </div>
          </a>
      </div>

      <div class="col-md-4 col-sm-6 mb-4">
          <a href="{{ url('biodata') }}" class="text-white text-decoration-none">
              <div class="card bg-secondary card-menu h-100 text-center p-3 border-0">
                  <div class="card-body d-flex align-items-center justify-content-center">
                      <h5 class="card-title m-0">Biodata</h5>
                  </div>
              </div>
          </a>
      </div>

  </div>
</div>

</body>
</html>
