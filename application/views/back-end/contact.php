<form action="<?php echo base_url('Admin/saveCompany') ?>" method="POST">
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Company Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" value="<?php if($data) echo $data->nama; ?>">
        </div>
    </div>
        <div class="form-group row">
        <label for="bidang" class="col-sm-2 col-form-label">Company Field</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="bidang" id="bidang" autocomplete="off" value="<?php if($data) echo $data->bidang; ?>" >
        </div>
    </div>
    <div class="form-group row">
        <label for="waktu" class="col-sm-2 col-form-label">Jam Operasional</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="jam_operasional" id="waktu" autocomplete="off" value="<?php if($data) echo $data->jam_operasional; ?>" placeholder="Jam operasional perusahaan">
        </div>
    </div>
    <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Adress</label>
        <div class="col-sm-10">
            <input type="hidden" name="tabel" id="tabel" value="tbl_company">
            <input type="hidden" name="page" id="page" value="contact">
            <input type="text" class="form-control" id="address" autocomplete="off" value="<?php if($data) echo $data->address; ?>" name="address" placeholder="Address">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" autocomplete="off" value="<?php if($data) echo $data->email; ?>" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="phone" name="phone" autocomplete="off" value="<?php if($data) echo $data->phone; ?>" placeholder="Phone">
        </div>
    </div>
    <div class="form-group row">
        <label for="instagram" class="col-sm-2 col-form-label">Instagram Account</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="instagram" name="instagram" autocomplete="off" value="<?php if($data) echo $data->instagram; ?>" placeholder="Instagram Account">
        </div>
    </div>
    <div class="form-group row">
        <label for="facebook" class="col-sm-2 col-form-label">Facebook Account</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="facebook" name="facebook" autocomplete="off" value="<?php if($data) echo $data->facebook; ?>" placeholder="Facebook Account">
        </div>
    </div>
    <div class="form-group row">
        <label for="twitter" class="col-sm-2 col-form-label">Twitter Account</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="twitter" name="twitter" autocomplete="off" value="<?php if($data) echo $data->twitter; ?>" placeholder="Twitter Account">
        </div>
    </div>
    <div class="form-group row">
        <label for="google" class="col-sm-2 col-form-label">Google Plus Account</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="google" name="google" autocomplete="off" value="<?php if($data) echo $data->google; ?>" placeholder="Google Plus Account">
        </div>
    </div>
    <div class="form-group row">
        <label for="linked" class="col-sm-2 col-form-label">Linkedin Account</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="linked" name="linked" autocomplete="off" value="<?php if($data) echo $data->linked; ?>" placeholder="Linkedin Account">
        </div>
    </div>
    <div class="form-group row">
        <label for="video" class="col-sm-2 col-form-label">URL Video Profile on Youtube</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="video" name="video" autocomplete="off" value="<?php if($data) echo $data->video; ?>" placeholder="Put your video profile company on youtube into your website">
        </div>
    </div>
    <div class="form-group">
        <label for="summary">Summary</label>
        <textarea class="form-control" name="motto" id="summary" rows="3" placeholder="50 Karakter"><?php if($data) echo $data->motto; ?></textarea>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"><?php if($data) echo $data->description; ?></textarea>
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