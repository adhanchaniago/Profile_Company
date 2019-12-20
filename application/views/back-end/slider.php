<form action="<?php echo base_url('Admin/saveSlider') ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" autocomplete="off" name="title" placeholder="Title">
        </div>
    </div>

    <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="url_img" class="col-sm-2 col-form-label">Images</label>
        <div class="col-sm-10">
            <input class="btn btn-dark" type="file" id="url_img" autocomplete="off" name="url_img">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
        </div>
    </div>
</form>
<?php if ( $this->session->flashdata('success_msg')) { ?>
    <div class="alert alert-success animated fadeInDown" role="alert" id="alert" >
        <strong>Success !</strong>
        <?php echo $this->session->flashdata('success_msg'); ?>
    </div>
<?php } ?>
<?php if ( $this->session->flashdata('error_msg')) { ?>
    <div class="alert alert-danger animated fadeInDown" role="alert" id="alert" >
        <strong>Peringatan !</strong>
        <?php echo $this->session->flashdata('error_msg'); ?>
    </div>
<?php } ?>


    <div class="row">
        <?php
            if($img) {
                foreach ($img as $key => $value) {  ?>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php  echo base_url('assets/img/intro-carousel/').$value->url_img?>" alt="" style="width:18rem;height:10rem">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value->title; ?></h5>
                            <p class="card-text"><?php echo $value->description; ?></p>
                            <a href="<?php echo base_url('Admin/deleteSlider/'.$value->id) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        </div>
                    </div>
                </div>
                <?php  }   
            }
        ?>
    </div>
