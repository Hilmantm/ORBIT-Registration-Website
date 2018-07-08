<?php
    require_once('../../adminsite/resources/config.php');
    require_once('../../adminsite/resources/lib/function.php');
if(count($_POST)>0){
    $jurusan_val = $_POST['jurusan'];
    $rombel_val = $_POST['rombel'];
    $nama = test_input($_POST['NamaLengkap']);
    $gender = test_input($_POST['Gender']);
    $tgllahir = test_input($_POST['TglLahir']);
    $kelas = "X".$jurusan_val.$rombel_val;
    $agama = test_input($_POST['Agama']);
    $asal = test_input($_POST['Asal']);
    $alamat = test_input($_POST['Alamat']);
    $nohp = test_input($_POST['NoHP']);
    $sosmed = test_input($_POST['Sosmed']);
    $motivasi = test_input($_POST['Motivasi']);
    
    $sql = sprintf("INSERT tb_data_pendaftar SET 
    nama_lengkap='%s',
    jenis_kelamin='%s',
    tgl_lahir='%s',
    kelas='%s',
    agama='%s',
    asal_sekolah='%s',
    alamat='%s',
    no_hp='%s',
    sosmed='%s',
    motivasi='%s'",$nama,$gender,$tgllahir,$kelas,$agama,$asal,$alamat,$nohp,$sosmed,$motivasi);


    $query = $db->query($sql);
    if($query){
        echo " <script>alert('Registrasi SUKSES!');
                window.location.href='http://orbit.smkn4bdg.sch.id';
                </script>
            ";
    }else{
        echo " <script>alert('Registrasi GAGAL!, Harap isi data kembali dengan benar');
                window.location.href='http://orbit.smkn4bdg.sch.id';
                </script>
            ";
    }
    
    
}else{
        echo " <script>alert('Registrasi GAGAL!, Harap isi data kembali dengan benar');
                window.location.href='http://orbit.smkn4bdg.sch.id';
                </script>
            ";
}

?>