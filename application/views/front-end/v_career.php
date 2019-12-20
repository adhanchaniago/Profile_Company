<!-- Start Sample Area -->
<?php foreach ($career as $key => $value) {?>
<section class="sample-text-area">
	<div class="container box_1170">
		<h3 class="text-heading"><?= $value->title?></h3>
		<p class="sample-text">
			<?= $value->description?>
		</p>
	</div>
</section>
<?php } ?>
<!-- End Sample Area -->
<hr>
<div class="text-center">
	<p>
  <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Send Curriculum Vitae
  </button>
</p>
<div class="text-centercollapse" id="collapseExample">
  <div class="card card-body">
   <p>Send your cv to <b><?=$company->email?></b> with subject position</p>
  </div>
</div>
</div>