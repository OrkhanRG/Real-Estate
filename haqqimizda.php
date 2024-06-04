<?php 
include 'header.php'; 

$haqqimizdasor=$db->prepare("select * from haqqimizda where haqqimizda_id=?");
$haqqimizdasor->execute(array(0));
$haqqimizdacek=$haqqimizdasor->fetch(PDO::FETCH_ASSOC);

?>

<div role="main" class="main">
	<div class="container">
		<div class="row pt-xl">
			<div class="col-md-7">
				<h1 class="mt-xl mb-none"><?php echo $haqqimizdacek['haqqimizda_baslig']; ?></h1>
				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>
				
				<p><?php echo $haqqimizdacek['haqqimizda_mezmun']; ?></p>

			</div>
			<div class="col-md-4 col-md-offset-1">

				<h4 class="mt-xl mb-none">Video Təqdimat</h4>
				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>

				<div class="embed-responsive embed-responsive-16by9 mb-xl">
					<iframe src="https://www.youtube.com/embed/<?php echo $haqqimizdacek['haqqimizda_video'] ?>" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
				</div>

				<h4 class="mt-xlg">Vizionumuz</h4>

				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>

				<blockquote class="blockquote-secondary">
					<p class="font-size-lg">"<?php echo $haqqimizdacek['haqqimizda_vizyon']; ?>"</p>
					<footer>Vizionumuz</cite></footer>
				</blockquote>

				<h4 class="mt-xlg">Missiyamız</h4>

				<div class="divider divider-primary divider-small mb-xl">
					<hr>
				</div>

				<blockquote class="blockquote-secondary">
					<p class="font-size-lg">"<?php echo $haqqimizdacek['haqqimizda_missiya']; ?>"</p>
					<footer>Missiyamız</cite></footer>
				</blockquote>

				

			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>