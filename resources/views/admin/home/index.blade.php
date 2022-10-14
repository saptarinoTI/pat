<x-app-layout>
  <x-slot name="name">Dashboard</x-slot>

  <div class="container">
    @if (auth()->user()->level == 'admin' or auth()->user()->level == 'perawat')
    <div class="row">
      <div class="col-lg-4 col-md-12 col-12 p-3">
        <!-- card -->
        <div class="card bg-danger ">
          <!-- card body -->
          <div class="card-body">
            <!-- heading -->
            <div class="d-flex justify-content-between align-items-center
              mb-3">
              <div>
                <h5 class="mb-0 text-white">Data Pasien</h5>
              </div>
              <div class="icon-shape icon-md bg-light-success text-success
                rounded-2 border-none">
                <i class="bi bi-people fs-4"></i>
              </div>
            </div>
            <!-- project number -->
            <div>
              <h1 class="fw-bold text-white">{{ count($pasien) }}</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-12 p-3">
        <!-- card -->
        <div class="card bg-warning">
          <!-- card body -->
          <div class="card-body">
            <!-- heading -->
            <div class="d-flex justify-content-between align-items-center
              mb-3">
              <div>
                <h5 class="mb-0 text-white">Traveling Dialisis</h5>
              </div>
              <div class="icon-shape icon-md bg-light-success text-success
              rounded-2 border-none">
                <i class="bi bi-sliders fs-4"></i>
              </div>
            </div>
            <!-- project number -->
            <div>
              <h1 class="fw-bold text-white">{{ count($traveling) }}</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-12 p-3">
        <!-- card -->
        <div class="card bg-primary">
          <!-- card body -->
          <div class="card-body">
            <!-- heading -->
            <div class="d-flex justify-content-between align-items-center
              mb-3">
              <div>
                <h5 class="mb-0 text-white">Dialisis Book</h5>
              </div>
              <div class="icon-shape icon-md bg-light-success text-success
              rounded-2 border-none">
                <i class="bi bi-book fs-4"></i>
              </div>
            </div>
            <!-- project number -->
            <div>
              <h1 class="fw-bold text-white">{{ count($dialisis) }}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif

    @if (auth()->user()->level == 'pasien')
    <div class="row">
      <div class="col-lg-8 col-md-12 col-12 p-3 d-flex flex-column justify-content-center align-items-center">
        <h5 style="font-weight: 400;">{{ ucwords(strtolower('SELAMAT DATANG DI RSUD TAMAN HUSADA BONTANG')) }}</h5>
        <h2 class="pb-5">Sistem Pelayanan Pasien Hemodialisa</h2>
        <figcaption class="blockquote-footer">
          <i>Anda login dengan akun pasien.</i>
        </figcaption>
      </div>
      <div class="col-lg-4 col-md-12 col-12 p-3">
        <!-- card -->
        <div class="card bg-primary">
          <!-- card body -->
          <div class="card-body">
            <!-- heading -->
            <div class="d-flex justify-content-between align-items-center
              mb-3">
              <div>
                <h5 class="mb-0 text-white">Dialisis Book</h5>
              </div>
              <div class="icon-shape icon-md bg-light-success text-success
              rounded-2 border-none">
                <i class="bi bi-sliders fs-4"></i>
              </div>
            </div>
            <!-- project number -->
            <div>
              <h1 class="fw-bold text-white">{{ count($dialisis) }}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif

  </div>

</x-app-layout>