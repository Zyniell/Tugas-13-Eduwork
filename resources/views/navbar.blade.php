<!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.html">TokoKu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="nav" class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Halaman Utama</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('produk') }}">Daftar Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('keranjang') }}">Halaman Keranjang</a></li>
        </ul>
      </div>
    </div>
  </nav>