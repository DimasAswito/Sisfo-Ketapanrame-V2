@extends('layouts.app')

@section('title', 'Tempat Wisata')

@section('content')

<section data-bs-version="5.1" class="features6 start cid-uHvRduGi8c" id="features06-2m">
	
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 content-head">
				<div class="mbr-section-head mb-5">
					<h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
						<strong>Tempat Makan</strong></h4>
					<h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-4 display-7">Desa Ketapanrame banyak sekali ditemui wisata kuliner yang dapat menemani liburan para wisatawan. Salah satu hal yang dicari pada saat wisata adalah kuliner, pada desa Ketapanrame memiliki berbagai jenis wisata kuliner yang dapat dikunjungi. Dari mulai rumah makan, resto, cafe, dan masih banyak yang lainnya.</h5>
					
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($tempatMakans as $tempatMakan)
					<div class="item features-image col-12 col-md-6 col-lg-4">
							<div class="item-wrapper">
									<div class="item-img">
											<img src="{{ asset('storage/' . $tempatMakan->foto_tempatMakan) }}" alt="{{ $tempatMakan->nama_tempatMakan }}">
									</div>
									<div class="item-content">
											<h5 class="item-title mbr-fonts-style display-5">
													<strong>{{ $tempatMakan->nama_tempatMakan }}</strong>
											</h5>
											<p class="mbr-text mbr-fonts-style display-7">
													{{ $tempatMakan->deskripsi_tempatMakan }}
											</p>
									</div>
							</div>
					</div>
			@endforeach
	</div>
	
	</div>
</section>

@endsection