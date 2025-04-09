@extends('layouts.app')

@section('title', 'Detail Penginapan')

@section('content')

<section data-bs-version="5.1" class="news05 cid-uHAUEcrJox" id="news05-2p">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 mb-5 content-head">
        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
          <strong>{{ $penginapan->nama_penginapan }}</strong>
        </h3>
      </div>
    </div>

    <div class="row justify-content-center item features-without-image mb-5 active">
      <div class="col-12 col-lg-6">
        <img class="w-100 rounded shadow" src="{{ asset('storage/' . $penginapan->foto_penginapan) }}" alt="{{ $penginapan->nama_penginapan }}">
      </div>

      <div class="col-12 col-lg item-wrapper">
        <h5 class="mbr-card-title mbr-fonts-style mt-3 mb-3 display-5">
          <strong>{{ $penginapan->nama_penginapan }}</strong>
        </h5>

        <p class="mbr-text mbr-fonts-style mt-0 mb-3 display-7">
          {{ $penginapan->deskripsi_penginapan }}
        </p>

        <div class="mbr-section-btn">
          <a class="btn btn-success display-7" href="https://wa.me/{{ preg_replace('/^0/', '62', $penginapan->wa_penginapan) }}" target="_blank">
            Hubungi via WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
