    <?php if(!empty($team)) { ?>
    <!-- about start -->
    <div class="about-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-12 col-lg-6">
                    <div class="about-thumb">
                        <img src="<?= base_url('assets/img/team/').$team->url_img?>" alt="">
                        <a class="video-icon popup-video" href="<?= $company->video?>">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-md-12 col-lg-6">
                    <div class="section-title mb-65">
                        <span>About Company</span>
                        <h3><?= $company->bidang?></h3>
                        <p class="para-text">
                            <?= $company->description ?>
                        </p>
                        <div class="name">
                            <p class="lead"><?= $team->name?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->
    <?php } else { ?>
    <div class="about-area section-padding">
        <div class="container">
        </div>
    </div>
    <?php } ?>

        <!-- team-start -->
    <div class="team-area section-padding gray-bg">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="section-title text-center mb-65">
                    <span>OUR INDUSTRIAL EXPERTS</span>
                    <h3>Meet with our Industrial experts</h3>
                </div>
            </div>
            <div class="row">
            <?php foreach ($list_team as $key => $value) { ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="<?= base_url('assets/img/team/').$value->url_img?>" alt="">
                            <div class="team-hover">
                                <div class="team-link">
                                    <ul>
                                        <li><a href="<?= $value->facebook?>"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="<?= $value->twitter?>"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="<?= $value->linked?>"> <i class="fa fa-linkedin"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-center">
                            <h3><?= $value->name?></h3>
                            <p><?= $value->job?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    <!-- team-end -->