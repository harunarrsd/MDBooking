<!-- Stepper -->
<div class="steps-form-2">
    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
        <div class="steps-step-2">
            <a type="button" class="btn btn-amber btn-circle-3 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Basic Information"><i class="fa fa-folder-open-o" aria-hidden="true"></i></a>
            <h3>Isi Data</h3>
        </div>
        <div class="steps-step-2">
            <a type="button" class="btn btn-blue-grey btn-circle-3 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <h3>Pilih Pendaftaran</h3>
        </div>
        <div class="steps-step-2">
            <a type="button" class="btn btn-blue-grey btn-circle-3 waves-effect" data-toggle="tooltip" data-placement="top" title="Terms and Conditions"><i class="fa fa-photo" aria-hidden="true"></i></a>
            <h3>Pilih Waktu</h3>
        </div>
        <div class="steps-step-2">
            <a type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
            <h3>Selesai</h3>
        </div>
    </div>
</div>

<!-- Third Step -->
<?php echo form_open_multipart('stepthree/update_booking/');?>
<?php 
    foreach($main['id']->result() as $obj){
        $id = $obj->idbooking;
    }
?>
<input type="hidden" name="id" value="<?php echo $id;?>">

    <div class="content">
        <div class="row setup-content-2" id="step-2">
            <div class="col-md-14">
                <label for="sel1">Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
            </div>

            <div class="col-md-14">
                <br>
                <label for="sel1">Jam</label>
                <input type="time" class="form-control" name="jam">
                <br>
            </div>

            <div class="col-md-14">
                <!-- <button class="btn btn-primary prevBtn-2 " type="button">Previous</button> -->
                <button class="btn btn-primary nextBtn-2 " type="submit">Next</button>
            </div>
        </div>
    </div>
</form>