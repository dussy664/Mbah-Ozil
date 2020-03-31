<?php
echo color("green","[+] Token GOJEK Kamu Disini : ");
$token = trim(fgets(STDIN));
$secret = ''.$token.'';
$header = array();
$header[] = 'Content-Type: application/json';
$header[] = 'X-AppVersion: 3.46.2';
$header[] = "X-UniqueId: ".time()."57".mt_rand(1000,9999);
$header[] = 'X-Location: id_ID';
$header[] ='Authorization: Bearer '.$token;
$header[] = 'pin:'.$pin.'';
//CHECKER DETAIL AKUN
$info = curl('https://api.gojekapi.com/v1/chat/profile', null, $header);
    $verifs = json_decode($info[0]);
         $akun = $verifs->data->name;
         $nope = $verifs->data->phone;
   echo "\n";
   echo color("yellow","nama : ".$akun." \n");
   echo color("yellow","nomer : 0".$nope." \n");
//CHECKER SALDO GOPAY
$detail = curl('https://api.gojekapi.com/wallet/profile/detailed', null, $header);
         $saldoo = json_decode($detail[0]);
                $saldo = $saldoo->data->balance;
                    echo color("yellow","Sisa Saldo Gopay = $saldo \n");
//CHECKER VOUCHER YANG ADA
$detail_voucher = curl('https://api.gojekapi.com/gopoints/v3/wallet/vouchers?limit=10&page=1', null, $header);
     $vouchers = json_decode($detail_voucher[0]);
     $total_voucher = $vouchers->voucher_stats->total_vouchers;
     $nama_voucher = $vouchers->data[0]->title;
 $batas_voucher = $vouchers->data[0]->expiry_date;
 $nama_voucher1 = $vouchers->data[1]->title;
 $batas_voucher1 = $vouchers->data[1]->expiry_date;
 $nama_voucher2 = $vouchers->data[2]->title;
 $batas_voucher2 = $vouchers->data[2]->expiry_date;
 $nama_voucher3 = $vouchers->data[3]->title;
 $batas_voucher3 = $vouchers->data[3]->expiry_date;
 $nama_voucher4 = $vouchers->data[4]->title;
 $batas_voucher4 = $vouchers->data[4]->expiry_date;
 $nama_voucher5 = $vouchers->data[5]->title;
 $batas_voucher5 = $vouchers->data[5]->expiry_date;
 $nama_voucher6 = $vouchers->data[6]->title;
 $batas_voucher6 = $vouchers->data[6]->expiry_date;
 $nama_voucher7 = $vouchers->data[7]->title;
 $batas_voucher7 = $vouchers->data[7]->expiry_date;
 $nama_voucher8 = $vouchers->data[8]->title;
 $batas_voucher8 = $vouchers->data[8]->expiry_date;
 $nama_voucher9 = $vouchers->data[9]->title;
 $batas_voucher9 = $vouchers->data[9]->expiry_date;
 $nama_voucher10 = $vouchers->data[10]->title;
 $batas_voucher10 = $vouchers->data[10]->expiry_date;
 $nama_voucher11 = $vouchers->data[11]->title;
 $batas_voucher11 = $vouchers->data[11]->expiry_date;
 $nama_voucher12 = $vouchers->data[12]->title;
 $batas_voucher12 = $vouchers->data[12]->expiry_date;
 $nama_voucher13 = $vouchers->data[13]->title;
 $batas_voucher13 = $vouchers->data[13]->expiry_date;
 $nama_voucher14 = $vouchers->data[14]->title;
 $batas_voucher14 = $vouchers->data[14]->expiry_date;
       if ($vouchers->success == true) {
       echo "
";
       echo color("blue","Kamu Punya " . $total_voucher . " Voucher GOJEK
");
       echo "
";
       if ($total_voucher == 1) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 2) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 3) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 4) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 5) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 6) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 7) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 8) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
    } else {
    }
    if ($total_voucher == 9) {
        echo 'Voucher : ' . $nama_voucher . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher1 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher1 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher2 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher2 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher3 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher3 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher4 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher4 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher5 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher5 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher6 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher6 . '';
        echo "
";
        echo "
";
        echo 'Voucher : ' . $nama_voucher7 . '';
        echo "
";
        echo 'Kadaluarsa : ' . $batas_voucher7 . '';
        echo "
";
        echo "
";
