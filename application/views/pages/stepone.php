<!-- Stepper -->
<div class="steps-form-2">
    <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
        <div class="steps-step-2">
            <a href="#step-1" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Basic Information"><i class="fa fa-folder-open-o" aria-hidden="true"></i></a>
            <h3>Isi Data</h3>
        </div>
        <div class="steps-step-2">
            <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <h3>Pilih Pendaftaran</h3>
        </div>
        <div class="steps-step-2">
            <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Terms and Conditions"><i class="fa fa-photo" aria-hidden="true"></i></a>
            <h3>Pilih Waktu</h3>
        </div>
        <div class="steps-step-2">
            <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
            <h3>Selesai</h3>
        </div>
    </div>
</div>

<!-- First Step -->
<?php echo form_open_multipart('main/create_booking/');?>
    <div class="content">
        <div class="row setup-content-2" id="step-1">
        <p>Harap masukan data diri anda terlebih dahulu untuk melanjutkan melakukan pemesanan</p>
        <br>
        <br>    
            <div class="col-md-14">
                    <label for="yourEmail-2" data-error="wrong" data-success="right">Nama</label>
                    <input id="yourEmail-2" type="text" name="nama" required="required" class="form-control validate">
                    <br>
            </div>
            <div class="col-md-14">
                    <label for="yourUsername-2" data-error="wrong" data-success="right">Email</label>
                    <input id="yourUsername-2" type="email" name="email" required="required" class="form-control validate">
                    <br>
            </div>
            <div class="col-md-14">
                    <label for="yourUsername-2" data-error="wrong" data-success="right">No Hp</label>
                    <input id="yourUsername-2" type="number" name="nohp" required="required" class="form-control validate">
                    <br>
            </div>
            <div class="col-md-14">
                <button class="btn btn-primary nextBtn-2" type="submit" href="#step-2">Next</button>
            </div>
            
        </div>
    </div>
</form>