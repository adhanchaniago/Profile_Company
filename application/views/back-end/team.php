<form action="<?php echo base_url('Admin/saveTeam') ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" autocomplete="off" name="name" placeholder="Name">
        </div>
    </div>

    <div class="form-group row">
        <label for="job" class="col-sm-2 col-form-label">Job</label>
        <div class="col-sm-10">
        <input class="form-control" name="job" id="job" rows="3" placeholder="Job"></input>
        </div>
    </div>

    <div class="form-group row">
        <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
        <div class="col-sm-10">
        <input class="form-control" name="twitter" id="twitter" rows="3" placeholder="Twitter Account"></input>
        </div>
    </div>

    <div class="form-group row">
        <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
        <div class="col-sm-10">
        <input class="form-control" name="facebook" id="job" rows="3" placeholder="Facebook Account"></input>
        </div>
    </div>

    <div class="form-group row">
        <label for="google" class="col-sm-2 col-form-label">Google</label>
        <div class="col-sm-10">
        <input class="form-control" name="google" id="google" rows="3" placeholder="Google Account"></input>
        </div>
    </div>

    <div class="form-group row">
        <label for="linked" class="col-sm-2 col-form-label">Linkedin Google</label>
        <div class="col-sm-10">
        <input class="form-control" name="linked" id="linked" rows="3" placeholder="Linkedin Account"></input>
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
                        <img src="<?php  echo base_url('assets/img/team/').$value->url_img?>" alt="" style="width:18rem;height:10rem">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value->name; ?> as <?php echo $value->job; ?></h5>
                            <p class="card-text"><?php echo $value->google; ?></p>
                            <a href="<?php echo base_url('Admin/deleteTeam/'.$value->id) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        </div>
                    </div>
                </div>
                <?php  }   
            }
        ?>
    </div>
