@extends('layouts.app')

@section('title', 'Tempat Wisata')

@section('content')

<section data-bs-version="5.1" class="features6 start cid-uHvQ1fiv3F" id="features06-2e">
	
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 content-head">
				<div class="mbr-section-head mb-5">
					<h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
						<strong>Tempat Wisata</strong></h4>
					<h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-4 display-7">Saat mengunjungi Desa Ketapanrame tak hanya bisa menikmati keindahan alamnya saja, namun wisatawan dapat menikmati wisata edukasi yang ditawarkan warga desa pengelola. Wisata edukasi yang ditawarkan seperti, belajar gamelan, edukasi pertanian dan juga menjelajahi kebun kopi.</h5>
					
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($wisatas as $wisata)
					<div class="item features-image col-12 col-md-6 col-lg-4">
						<a href="{{ route('wisata.show', $wisata->id_wisata) }}" class="text-decoration-none text-dark">
							<div class="item-wrapper">
								<div class="item-img">
									<img src="{{ asset('storage/' . $wisata->foto_wisata) }}" alt="{{ $wisata->nama_wisata }}">
								</div>
								<div class="item-content">
									<h5 class="item-title mbr-fonts-style display-5">
										<strong>{{ $wisata->nama_wisata }}</strong>
									</h5>
									<p class="mbr-text mbr-fonts-style display-7">
										{{ $wisata->deskripsi_wisata }}
									</p>
								</div>
							</div>
						</a>						
					</div>
			@endforeach
	</div>
	
	</div>
</section>

@endsection