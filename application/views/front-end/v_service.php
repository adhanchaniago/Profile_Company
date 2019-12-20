<!-- service-area-start -->
<div class="service-area">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="section-title text-center mb-65">
                <span>OUR SERVICES</span>
                <h3>We provide all of your <br>
                    industrial solution
                </h3>
            </div>
        </div>
    </div>
</div>
<hr>
<!-- service-area-end -->
<!-- project-review-area-start -->
<?php foreach ($project as $key => $value) {?>

<?php if ($value->id %2) { ?>
<div class="project-review-area section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-6">
                <div class="single-review">
                    <h2>Service overview</h2>
                    <p>
                        <?= $value->title?>
                    </p>
                    <p>
                        <?= $value->description?>
                    </p>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="review-thumb">
                    <img src="<?= base_url('assets/img/events/').$value->url_img?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<?php } else { ?>
<div class="project-review-area section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-6">
                <div class="review-thumb">
                    <img src="<?= base_url('assets/img/events/').$value->url_img?>" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="single-review">
                    <h2>Service overview</h2>
                    <p>
                        <?= $value->title?>
                    </p>
                    <p>
                        <?= $value->description?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<?php } ?>

<?php } ?>
    <!-- project-review-area-end -->