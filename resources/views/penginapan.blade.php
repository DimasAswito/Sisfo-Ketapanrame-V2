@extends('layouts.app')

@section('title', 'Tempat Wisata')

@section('content')

<section data-bs-version="5.1" class="features4 start cid-uHvR0hc2RS" id="features04-2j">
	
	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 content-head">
				<div class="mbr-section-head mb-5">
					<h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
						<strong>Penginapan</strong></h4>
					<h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-4 display-7">Desa Ketapanrame juga memiliki penginapan yang dapat dimanfaatkan wisatawan untuk menikmati keindahan desa dan kesegaran udara pegunungan. Menginap di area pegunungan merupakan hal efektif untuk sejenak menenangkan pikiran.</h5>
					
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($penginapans as $penginapan)
					<div class="item features-image col-12 col-md-6 col-lg-4">
						<a href="{{ route('penginapan.show', $penginapan->id_penginapan) }}" class="text-decoration-none text-dark">
							<div class="item-wrapper">
									<div class="item-img">
											<img src="{{ asset('storage/' . $penginapan->foto_penginapan) }}" alt="{{ $penginapan->nama_penginapan }}">
									</div>
									<div class="item-content">
											<h5 class="item-title mbr-fonts-style display-5">
													<strong>{{ $penginapan->nama_penginapan }}</strong>
											</h5>
											<p class="mbr-text mbr-fonts-style display-7">
													{{ $penginapan->deskripsi_penginapan }}
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

