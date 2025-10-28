@extends('layout')
@section('title', 'TokoKu - Keranjang Belanja')

@section('content')
  <!-- Header -->
  <header class="py-4 bg-primary-subtle">
    <div class="container">
      <h1 class="h3 mb-0">Keranjang Belanja</h1>
    </div>
  </header>

  <!-- Tabel keranjang -->
  <main class="py-5">
    <div class="container">
      <div class="table-responsive">
        <table class="table align-middle">
          <thead class="table-light">
            <tr>
              <th>Produk</th>
              <th class="text-center" style="width: 120px;">Qty</th>
              <th class="text-end" style="width: 150px;">Harga</th>
              <th class="text-end" style="width: 150px;">Subtotal</th>
              <th style="width: 60px;"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-3">
                  <img src="https://picsum.photos/seed/produk1/80/80" class="rounded" alt="Kaos Basic" width="60" height="60">
                  <div>
                    <div class="fw-semibold">Kaos Basic</div>
                    <small class="text-muted">Ukuran M</small>
                  </div>
                </div>
              </td>
              <td class="text-center">
                <input type="number" class="form-control form-control-sm text-center" value="1" min="1">
              </td>
              <td class="text-end">Rp79.000</td>
              <td class="text-end">Rp79.000</td>
              <td class="text-end">
                <button class="btn btn-sm btn-outline-danger" aria-label="Hapus">
                  &times;
                </button>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-3">
                  <img src="https://picsum.photos/seed/produk2/80/80" class="rounded" alt="Headset Wireless" width="60" height="60">
                  <div>
                    <div class="fw-semibold">Headset Wireless</div>
                    <small class="text-muted">Hitam</small>
                  </div>
                </div>
              </td>
              <td class="text-center">
                <input type="number" class="form-control form-control-sm text-center" value="1" min="1">
              </td>
              <td class="text-end">Rp399.000</td>
              <td class="text-end">Rp399.000</td>
              <td class="text-end">
                <button class="btn btn-sm btn-outline-danger" aria-label="Hapus">
                  &times;
                </button>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3" class="text-end">Total</th>
              <th class="text-end">Rp478.000</th>
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>

      <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('produk') }}" class="btn btn-outline-secondary">Lanjut Belanja</a>
        <a href="#" class="btn btn-primary">Lanjut ke Pembayaran</a>
      </div>
    </div>
  </main>
@endsection