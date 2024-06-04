<?php 

include 'header.php'; 

$emlaksor=$db->prepare("SELECT * from emlak WHERE emlak_id=:emlak_id");
$emlaksor->execute(array(
	'emlak_id' => $_GET['emlak_id']
));
$emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC);

$user_id=$emlakcek['user_id'];
?>

<div role="main" class="main">

	<section class="page-header page-header-light page-header-more-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php echo $emlakcek['emlak_baslig']; ?><span><?php echo $emlakcek['emlak_adres']; ?> - <a href="#map" data-hash data-hash-offset="100">(Xəritə Məkanı)</a></span></h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container">

		<div class="row pb-xl pt-md">
			<div class="col-md-9">

				<div class="row">
					<div class="col-md-7">

						<span

						<?php if ($emlakcek['emlak_status']=='Satılıq') {?>

							style="background-color: red !important;"

						<?php }?> 

						class="thumb-info-listing-type thumb-info-listing-type-detail background-color-secondary text-uppercase text-color-light font-weight-semibold p-sm pl-md pr-md">
						<?php echo $emlakcek['emlak_status']; ?>
					</span>

					<div class="thumb-gallery">
						<div class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
							<div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">


								<div>
									<a href="<?php echo $emlakcek['emlak_imgyol']; ?>">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
											<span class="thumb-info-wrapper font-size-xl">
												<img alt="Property Detail" src="<?php echo $emlakcek['emlak_imgyol']; ?>" class="img-responsive">
												<span class="thumb-info-title font-size-xl">
													<span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>


							</div>
						</div>

						<div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">


							<div>
								<img alt="Property Detail" src="<?php echo $emlakcek['emlak_imgyol']; ?>" class="img-responsive cur-pointer">
							</div>


						</div>
					</div>

				</div>
				<div class="col-md-5">

					<table class="table table-striped">
						<colgroup>
							<col width="35%">
							<col width="65%">
						</colgroup>
						<tbody>
							<tr>
								<td class="background-color-secondary text-light pt-md">
									Elan Tarixi
								</td>
								<td class="font-size-xl font-weight pt-sm pb-sm background-color-secondary text-light">
									<?php echo $emlakcek['emlak_tarix']; ?>
								</td>
							</tr>
							<tr>
								<td class="background-color-primary text-light pt-md">
									Qiymət
								</td>
								<td class="font-size-xl font-weight-bold pt-sm pb-sm background-color-primary text-light">
									<?php echo $emlakcek['emlak_qiymet']; ?> AZN
								</td>
							</tr>
							<tr>
								<td>
									Elan №
								</td>
								<td>
									#<?php echo $emlakcek['emlak_id']; ?>
								</td>
							</tr>
							<tr>
								<td>
									Elan Adresi
								</td>
								<td>
									<?php echo $emlakcek['emlak_adres']; ?><br><a href="#map" class="font-size-sm" data-hash data-hash-offset="100">(Xəritə Məkanı)</a>
								</td>
							</tr>
							<tr>
								<td>
									Status
								</td>
								<td>
									<?php echo $emlakcek['emlak_status']; ?>
								</td>
							</tr>

						</tbody>
					</table>

				</div>
			</div>

			<div class="row">
				<div class="col-md-12">

					<h4 class="mt-md mb-md">Elan Açığlaması</h4>
					<p><?php echo $emlakcek['emlak_detay']; ?></p>

					<hr class="solid tall">

					<h4 class="mt-md mb-md">Features</h4>

					<ul class="list list-icons list-secondary row m-none">
						<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Air conditioning <a href="#" data-plugin-tooltip data-toggle="tooltip" data-placement="top" title="+ Central Heating"><i class="fa fa-info-circle"></i></a></li>
						<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Home Theater</li>
						<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Central Heating</li>
						<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Laundry</li>
						<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Balcony</li>
						<li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Storage</li>
						<li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Garage</li>
						<li class="col-sm-6 col-md-4 custom-list-item-disabled"><i class="fa fa-check"></i> Yard</li>
						<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Electric Water Heater</li>
						<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Deck</li>
						<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Gym</li>
						<li class="col-sm-6 col-md-4"><i class="fa fa-check"></i> Ocean View</li>
					</ul>

					<hr class="solid tall">

					<h4 class="mt-md mb-md" id="map">Xəritə Məkan</h4>
					<div id="googlemaps" class="google-map m-none mb-xlg">	
						<iframe
						width="100%"
						height="100%"
						style="border:0"
						loading="lazy"
						allowfullscreen
						referrerpolicy="no-referrer-when-downgrade"
						src="https://www.google.com/maps/embed/v1/place?key=<?php echo $ayarcek['ayar_googlemap']; ?>
						&q=<?php echo $emlakcek['emlak_adres']; ?>">
						<!--My key -> AIzaSyBrAvbMpFpYovsE6fCEUT21yR3D1dQaDJE -->
					</iframe>


				</div>



			</div>
		</div>

	</div>

	<?php include 'sidebar.php'; ?>

</div>

</div>


<?php include 'footer.php'; ?>
