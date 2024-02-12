@extends('layouts.admin')

@section('title', 'Halaman Dashboard')

@section('header', 'Dashboard')


@section('content')

<body>
    <div class="col-lg-12 mb-2 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-success"> Selamat Datang,</strong>
                </h5>
                <p class="text-dark mb-4">Kamu memiliki <span class="badge badge-success">
                    </span> keluhan hari ini. Klik view keluhan dibawah ini untuk
                  melihat.</p>
  
                <a href="" class="btn btn-sm btn-outline-success">
                  <strong>
                    View Keluhan
                    &raquo;
                  </strong>
                </a>
              </div>
            </div>
            <div class="col-sm-1 text-center text-sm-left">
              <div class="card-body pb-0 px-5 px-md-12">
                <img src="" height="160" alt="man">
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <div class="col-lg-12 mb-2 order-0">
      <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Cras justo odio
          </div>
          <span class="badge bg-primary rounded-pill">14</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Cras justo odio
          </div>
          <span class="badge bg-primary rounded-pill">14</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Subheading</div>
            Cras justo odio
          </div>
          <span class="badge bg-primary rounded-pill">14</span>
        </li>
      </ol>
    </div>
    
</body>

@endsection