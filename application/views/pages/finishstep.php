<!-- Stepper -->
<!-- <div class="steps-form-2">
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
            <a type="button" class="btn btn-blue-grey btn-circle-3 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
            <h3>Selesai</h3>
        </div>
    </div>
</div> -->
<?php 
    foreach($main['id']->result() as $obj){
        $id = $obj->idbooking;
        $nama = $obj->nama;
        $email = $obj->email;
        $nohp = $obj->nohp;
    }
?>

<?php
$dbName = "klinikmy_dentist";
$user = "root";
$pwd = "";
$host = "localhost";
$cnn = new PDO('mysql:dbname='.$dbName.';host='.$host, $user, $pwd);
define('GOOGLE_API_KEY', 'AIzaSyDzEGaoLmCnqXKF7n_l0eNis2Qt39IRELc');//Replace with your Key

$pushStatus = '0';;

if(isset($_POST['submit'])) {
	$gcmRegIds = array();
    $sql = "SELECT TOKENID FROM Notifikasi";
    $result = $cnn->query($sql);
	while($row = $result->fetch(PDO::FETCH_ASSOC))
	{
		array_push($gcmRegIds, $row["TOKENID"]);
    }

    $pushMessage = "Booking Online";
    if(isset($gcmRegIds) && isset($pushMessage)) {
        $message = array('message' => $pushMessage);
        $pushStatus = sendPushNotification($gcmRegIds, $message);
    }   
}

function sendPushNotification($registration_ids, $message) {
            // Set POST variables
        $url = 'https://android.googleapis.com/gcm/send';
		$fields = array(
            'registration_ids' => $registration_ids,
            'data' => $message,
        );
        $headers = array(
            'Authorization: key=' . GOOGLE_API_KEY,
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();
 
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        // Close connection
        curl_close($ch);
		return $result;
}
?>

<!-- TEST -->
<div class="portlet-body por">
<div class="mt-element-step">
    <div class="row step-thin">
        <div class="col-lg-3 bg-grey mt-step-col active">
            <div class="mt-step-number first bg-white font-grey">1</div>
            <div class="mt-step-title uppercase font-grey-cascade">Isi Data</div>
            <div class="mt-step-content font-grey-cascade">Lengkapi Data Diri Anda</div>
        </div>
        <div class="col-lg-3 bg-grey mt-step-col active">
            <div class="mt-step-number bg-white font-grey">2</div>
            <div class="mt-step-title uppercase font-grey-cascade">Pilih Dokter</div>
            <div class="mt-step-content font-grey-cascade">Pilih cabang dan Dokter</div>
        </div>
        <div class="col-lg-3 bg-grey mt-step-col active">
            <div class="mt-step-number bg-white font-grey">3</div>
            <div class="mt-step-title uppercase font-grey-cascade">Pilih Waktu</div>
            <div class="mt-step-content font-grey-cascade">Tetapkan Waktu Pemesanan</div>
        </div>
        <div class="col-lg-3 bg-grey mt-step-col active">
            <div class="mt-step-number bg-white font-grey">4</div>
            <div class="mt-step-title uppercase font-grey-cascade">Selesai</div>
            <div class="mt-step-content font-grey-cascade">Reservasi Anda Berhasil</div>
        </div>
    </div>
</div>
</div>
<br>
<br>
<!-- END TEST -->

<!-- Finish Step -->
<br>
<br>
<div class="content">
<!-- START BOX -->
<div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                <i class="fa fa-gift"></i>Form Reservasi </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form class="form-horizontal" method="POST" action='' role="form">
                    <div class="form-body">

                    <?php echo $nama;?>
                                
                        <div class="row setup-content-2" id="step-4">
                        <div class="col-md-12">
                            <br>
                            <br>
                            <h2 class="text-center font-weight-bold my-4">Registration completed!</h2>
                            <center>
                              <button class="btn btn-primary nextBtn-2 " type="submit" name="submit" type="submit">SELESAI</button>
                            </center>
                            <br>
                            <br>
                            <p>
                            </p>
                        </div>
                        </div>
                        
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
      <!-- END BOX -->
<br>
</div>



