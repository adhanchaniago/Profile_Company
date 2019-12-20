<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php $no = 1; if($slider) foreach ($slider as $key => $value) { ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="$no" class="<?php if($no == 1) echo 'active' ?>"></li>
      <?php $no++; } ?>
    </ol>
    <div class="carousel-inner">
      <?php $no = 1; if($slider) foreach ($slider as $key => $value) { ?>
        <div class="carousel-item <?php if($no == 1) echo 'active' ?>">
          <img class="d-block w-100" src="<?php echo base_url('assets/img/intro-carousel/'.$value->url_img);?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
<!--             <h1><?=$value->title?></h1>
            <p class="lead"><?=$value->description?></p> -->
          </div>
        </div>
        <?php $no++; } ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- service-area-start -->
    <div class="service-area">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="section-title text-center mb-65">
            <span>OUR SERVICES</span>
            <h3>We provide all of your <br>
            industrial solution</h3>
          </div>
        </div>
        <div class="row">
          <?php foreach ($project as $key => $value) { ?>
            <div class="col-xl-4 col-md-4">
              <div class="single-service">
                <div class="service-thumb">
                  <img src="<?= base_url('assets/img/events/').$value->url_img?>" alt="">
                </div>
                <h3><?= $value->title?></h3>
                <p><?= $value->description?></p>
                <a href="<?= base_url('web/service')?>" class="read-more">Read More</a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <!-- service-area-end -->

    <!-- location-area-start -->
    <div class="addres-area black-bg section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-4">
            <div class="single-address text-center">
              <div class="addres-icon">
                <img src="<?= base_url('template/img/')?>icon/1.png" alt="">
              </div>
              <h3>Our Location</h3>
              <p><?= $company->nama?> <br>
                <?= $company->address?></p>
                <button class="btn btn-warning" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Get Direction</button>
              </div>
            </div>
            <div class="col-xl-4 col-md-4">
              <div class="single-address text-center">
                <div class="addres-icon">
                  <img src="<?= base_url('template/img/')?>icon/2.png" alt="">
                </div>
                <h3>Opening hour</h3>
                <p><?= $company->jam_operasional?><br>
                </div>
              </div>
              <div class="col-xl-4 col-md-4">
                <div class="single-address text-center">
                  <div class="addres-icon">
                    <img src="<?= base_url('template/img/')?>icon/3.png" alt="">
                  </div>
                  <h3>Send a message</h3>
                  <p><?= $company->email?> <br>
                    <?= $company->phone?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- location-area-end -->
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              <figure class="figure">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5293188896403!2d106.56990144977321!3d-6.19366886238091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fe50696e2683%3A0x9f65e75c78c4d86!2sPT.%20Zhong%20Lian%20Dian%20Qi!5e0!3m2!1sid!2sid!4v1576078996520!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </figure>
            </div>
          </div>