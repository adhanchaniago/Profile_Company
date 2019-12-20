<form action="<?php echo base_url('Admin/saveService') ?>" method="POST">
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" autocomplete="off" placeholder="Enter Title Career">
        </div>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
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
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
if($img) {
                foreach ($img as $key => $value) {  ?>
            <tr>
                <td><?php echo $value->title; ?></td>
                <td><?php echo $value->description; ?></td>
                <td><a href="<?php echo base_url('Admin/deleteService/'.$value->id) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
            </tr>
            <?php  }   
            }
        ?>
        </tbody>
    </table>
</div>