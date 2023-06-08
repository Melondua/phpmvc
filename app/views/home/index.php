<div class="container">
	<div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="false">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?= BASEURL; ?>/img/1.png" class="d-block w-100" alt="akatsuki">
				<div class="carousel-caption d-none d-md-block">
					<h5>Awan Akatsuki</h5>
					<p>Some representative placeholder content for the first slide <?= $data['nama']; ?>.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= BASEURL; ?>/img/2.png" class="d-block w-100" alt="uciha">
				<div class="carousel-caption d-none d-md-block">
					<h5>Clans Uciha</h5>
					<p>Some representative placeholder content for the second slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= BASEURL; ?>/img/3.png" class="d-block w-100" alt="lufi">
				<div class="carousel-caption d-none d-md-block">
					<h5>Bajak Laut</h5>
					<p>Some representative placeholder content for the third slide.</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>


	</div>
</div>