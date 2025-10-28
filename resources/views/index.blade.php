@extends('layout')
@section('title', 'TokoKu - Beranda')

@section('content')
  <!-- Hero -->
  <header class="py-5 bg-primary-subtle">
    <div class="container text-center">
      <h1 class="display-5 fw-bold">Selamat datang di TokoKu</h1>
      <p class="lead mb-4">Belanja mudah, cepat, dan aman. Lihat koleksi terbaik kami!</p>
      <a href="{{ route('produk') }}" class="btn btn-primary btn-lg">Belanja Sekarang</a>
    </div>
  </header>

  <!-- Fitur singkat -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Harga Terbaik</h5>
              <p class="card-text">Promo dan diskon menarik setiap minggu.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Pengiriman Cepat</h5>
              <p class="card-text">Kirim ke seluruh Indonesia dengan cepat.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Dukungan Pelanggan</h5>
              <p class="card-text">Tim kami siap membantu 24/7.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection