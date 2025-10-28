@extends('layout')
@section('title', 'TokoKu - Daftar Produk')

@section('content')
  <!-- Header -->
  <header class="py-4 bg-primary-subtle">
    <div class="container">
      <h1 class="h3 mb-0">Daftar Produk</h1>
    </div>
  </header>

  <!-- Filter & Grid -->
  <main class="py-5">
    <div class="container">
      <form class="row g-3 mb-4">
        <div class="col-md-6">
          <input class="form-control" type="search" placeholder="Cari produk…">
        </div>
        <div class="col-md-3">
          <select class="form-select">
            <option selected>Semua Kategori</option>
            <option>Pakaian</option>
            <option>Elektronik</option>
            <option>Peralatan Rumah</option>
          </select>
        </div>
        <div class="col-md-3 d-grid">
          <button class="btn btn-primary" type="button">Terapkan</button>
        </div>
      </form>

      <div class="row g-4">
        <!-- Card contoh 1 -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100">
            <img src="https://picsum.photos/seed/produk1/600/400" class="card-img-top" alt="Produk 1">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Kaos Basic</h5>
              <p class="card-text text-muted mb-2">Nyaman dipakai sehari-hari.</p>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <span class="fw-semibold">Rp79.000</span>
                <a href="{{ route('keranjang') }}" class="btn btn-outline-primary btn-sm">Tambah ke Keranjang</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card contoh 2 -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100">
            <img src="https://picsum.photos/seed/produk2/600/400" class="card-img-top" alt="Produk 2">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Headset Wireless</h5>
              <p class="card-text text-muted mb-2">Suara jernih dengan baterai tahan lama.</p>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <span class="fw-semibold">Rp399.000</span>
                <a href="{{ route('keranjang') }}" class="btn btn-outline-primary btn-sm">Tambah ke Keranjang</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card contoh 3 -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100">
            <img src="https://picsum.photos/seed/produk3/600/400" class="card-img-top" alt="Produk 3">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Blender Mini</h5>
              <p class="card-text text-muted mb-2">Praktis untuk jus harian.</p>
              <div class="mt-auto d-flex justify-content-between align-items-center">
                <span class="fw-semibold">Rp249.000</span>
                <a href="{{ route('keranjang') }}" class="btn btn-outline-primary btn-sm">Tambah ke Keranjang</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>
@endsection