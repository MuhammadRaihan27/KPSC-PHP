<?php 
    
    if(isset($_POST["whatsapp"])) {

        $forPhone = "6281310362664";
        $perusahaan = $_POST["perusahaan"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $pesan = $_POST["pesan"];
        header("location: https://api.whatsapp.com/send?phone=$forPhone&text=Nama:%20$perusahaan%20%0DEmail:%20$email%20%0DPhone:%20%$phone%20%0DPesan:%20$pesan");
    } 
 
    if(isset($_POST["Email"])) {

        $to = "r41h4n.mrn@gmail.com";
        $subject = $_POST["perusahaan"];
        // $txt = "Nama Perusahaan : ". $_POST["perusahaan"]."\n" ."Alamat : ". $_POST["address"]."\n" . "Email : " . $_POST["email"]."\n" . "Phone : " . $_POST["phone"]."\n" . "Pesan : " . $_POST["pesan"] ;
        $txt = "Helli World";
        $headers = "From: " . $_POST["perusahaan"] . "\r\n";

        mail($to,$subject,$txt,$headers);
    } 
 
 ?>