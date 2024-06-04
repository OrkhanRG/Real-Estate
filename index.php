<?php 

include 'header.php'; 

?>

<div role="main" class="main">


	<?php 

	if ($ayarcek['ayar_slider']==1) {
		include 'slider.php'; 
	}

	?>
	
	<div class="container">
		<div class="row pt-xlg mt-xlg">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">
						<h2 class="font-weight-normal mb-xs">
							<strong class="text-color-secondary font-weight-extra-bold">Satılığ</strong> <span class="font-weight-light">və ya</span> <strong class="text-color-secondary font-weight-extra-bold">Kiralığ</strong> evlər siyahılanır...
						</h2>
					</div>
				</div>
				<div class="row">
					<ul id="listingLoadMoreWrapper" class="properties-listing sort-destination p-none" data-total-pages="2">
						
						<?php 

						$emlaksor=$db->prepare("select * from emlak order by emlak_tarix DESC limit 25");
						$emlaksor->execute();

						while($emlakcek=$emlaksor->fetch(PDO::FETCH_ASSOC)){

							?>

							<!-- emlak-<?=seo($emlakcek['emlak_baslig'])."-".$emlakcek['emlak_id']?> -->


							<li class="col-md-4 col-sm-6 col-xs-12 p-md isotope-item">
								<div class="listing-item">
									<a href="emlak-detay.php?emlak_id=<?php echo $emlakcek['emlak_id']; ?>" class="text-decoration-none">
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper m-none">
												<img style="width: 100%; height: 165px" src="<?php echo $emlakcek['emlak_imgyol']; ?>" class="img-responsive" alt="">
												<span 

												<?php if ($emlakcek['emlak_status']=='Satılıq') {?>

													style="background-color: red !important;"

												<?php }?> 

												class="thumb-info-listing-type background-color-secondary text-uppercase text-color-light font-weight-semibold p-xs pl-md pr-md">

												<?php echo $emlakcek['emlak_status']; ?>

											</span>
										</span>
										<span class="thumb-info-price background-color-primary text-color-light text-lg p-sm pl-md pr-md">
											<?php echo $emlakcek['emlak_qiymet']; ?> AZN 
											<i class="fa fa-caret-right text-color-secondary pull-right"></i>
										</span>
										<span class="custom-thumb-info-title b-normal p-lg">
											<span class="thumb-info-inner text-md"><?php echo $emlakcek['emlak_baslig']; ?></span>


												<!-- <ul class="accommodations text-uppercase font-weight-bold p-none text-sm">
													<li>
														<span class="accomodation-title">
															Beds:
														</span>
														<span class="accomodation-value custom-color-1">
															3
														</span>
													</li>
													<li>
														<span class="accomodation-title">
															Baths:
														</span>
														<span class="accomodation-value custom-color-1">
															2
														</span>
													</li>
													<li>
														<span class="accomodation-title">
															Sq Ft:
														</span>
														<span class="accomodation-value custom-color-1">
															500
														</span>
													</li>
												</ul> -->

											</span>
										</span>
									</a>
								</div>
							</li>


						<?php } ?>

					</ul>

				</div>
				<hr class="dashed">

			</div>

			<?php include 'rightbar.php'; ?>

		</div>
	</div>

	<?php include 'footer.php'; ?>

