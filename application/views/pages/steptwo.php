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
            <a type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Terms and Conditions"><i class="fa fa-photo" aria-hidden="true"></i></a>
            <h3>Pilih Waktu</h3>
        </div>
        <div class="steps-step-2">
            <a type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
            <h3>Selesai</h3>
        </div>
    </div>
</div>

<!-- Second Step -->
<?php echo form_open_multipart('steptwo/update_booking/');?>
<?php 
    foreach($main['id']->result() as $obj){
        $id = $obj->idbooking;
        $nama = $obj->nama;
        $email = $obj->email;
        $nohp = $obj->nohp;
    }
?>
<input type="hidden" name="id" value="<?php echo $id;?>">

    <div class="content">
        <div class="row setup-content-2" id="step-2">
            <div class="alert alert-info alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Halo!</strong> <?php echo $nama;?>, Email Anda : <?php echo $email;?> dan No.HP : <?php echo $nohp;?>.
            </div>
            <div class="col-md-14">
                <label for="sel1">Pilih Cabang</label>
                <select class="form-control" id="sel1" name="cabang">
                    <option value="">Pilih Cabang</option>
                    <option value="1">Klinik MD Margonda</option>
                    <option value="2">Klinik MD ARH</option>
                </select>
                <br>
            </div>

            <div class="col-md-14">
                <label for="me">Atau</label>
            </div>

            <div class="col-md-14">
                <br>
                <label for="sel1">Pilih Dokter</label>
                <select class="form-control" id="sel1" name="dokter">
                    <option value="">Pilih Dokter</option>
                    <?php foreach ($main['iddokter']->result() as $obj) {
                        echo "<option value='".$obj->id."'>
                        ".$obj->name."
                        </option>";
                        }
                    ?>
                </select>
                <br>
            </div>

            <div class="col-md-14">
                <!-- <button class="btn btn-primary prevBtn-2 " type="button">Previous</button> -->
                <button class="btn btn-primary nextBtn-2 " type="submit">Next</button>
            </div>
        </div>
    </div>
</form>