<?php
session_start();

if(isset($_SESSION['id_user'])){

	//koneksi terpusat
	
	   $_mysqli = new mysqli("localhost","root","","tour");
	
    // get the HTML
    ob_start();	
	$comot=$_mysqli->query("SELECT * FROM tbl_pesan, tbl_paket, tbl_hotel, tbl_user WHERE tbl_pesan.id_user=tbl_user.id_user AND
						tbl_pesan.id_paket=tbl_paket.id_paket AND tbl_pesan.id_hotel=tbl_hotel.id_hotel AND id_pesan=".$_GET['id']);
	$isi_tbl=mysqli_fetch_array($comot);
	
	$total_harga = $isi_tbl['harga_paket']+$isi_tbl['harga'];
    $num = 'BT00'.$isi_tbl['id_pesan'].' - ('.$isi_tbl['tgl_pesan'].')';
    $nom = $isi_tbl['nama_user'];
    $date = date("d M Y");
?>
<style type="text/css">
<!--
    div.zone { border: none; border-radius: 6mm; background: #FFFFFF; border-collapse: collapse; padding:3mm; font-size: 2.7mm;}
    h1 { padding: 0; margin: 0; color: #DD0000; font-size: 7mm; }
    h2 { padding: 0; margin: 0; color: #222222; font-size: 5mm; position: relative; }
-->
</style>
<page format="105x200" orientation="L" backcolor=" #800000 " style="font: arial;">
    <div style="rotate: 90; position: absolute; width: 100mm; height: 4mm; left: 195mm; top: 0; font-style: italic; font-weight: normal; text-align: center; font-size: 2.5mm;">
        
    </div>
    <table style="width: 99%;border: none;" cellspacing="4mm" cellpadding="0">
        <tr>
            <td colspan="2" style="width: 100%">
                <div class="zone" style="height: 34mm;position: relative;font-size: 5mm;">
                    <div style="position: absolute; right: 3mm; top: 3mm; text-align: right; font-size: 4mm; ">
                        <b><?php echo $nom; ?></b><br>
                    </div>
                    <div style="position: absolute; right: 3mm; bottom: 3mm; text-align: right; font-size: 4mm; ">
                        Jenis Paket : <b><?php echo $isi_tbl['nama_paket']; ?></b><br>
                        Total Biaya : <b><?php echo $total_harga; ?> IDR</b><br>
                        Code Booking : <b><?php echo $num; ?></b><br>
                        Tanggal Tour : <b><?php echo $isi_tbl['tgl_tour']; ?></b><br>
                    </div>
                    <img src="images/be.png" width="100" height="99" />
					<span style="position: absolute; left: 32mm; top: 10mm; font-size: 28px; color: red">Blitar Tourism</span><br />
                    <span style="position: absolute; left: 32mm; top: 18mm; font-size: 16px;">Blitar, <?php echo $date; ?></span>
                	
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 25%;">
                <div class="zone" style="height: 40mm;vertical-align: middle;text-align: center;">
                    <qrcode value="<?php echo $num."\n".$nom."\n".$date; ?>" ec="Q" style="width: 37mm; border: none;" ></qrcode>
                </div>
            </td>
            <td style="width: 75%">
                <div class="zone" style="height: 40mm;vertical-align: middle; text-align: justify">
                    <b>Ketentuan :</b><br>
					1. Perubahan Peket dan Penginapan silahkan hubungi contact person kami yang ada pada website, dan hanya bisa dilakukan 5 hari sebelum hari keberangkatan tour. Kurang dari itu perubahan tidak bisa dilakukan.<br>
					2. Pembatalan booking dapat dilakukan 7 hari sebelum tanggal keberangkatan tour yang telah di booking. Biaya yang telah ditranfer akan dikembalikan dengan potongan 10% dari total biaya dan harus melakukan konfirmasi terlebih dahulu melalui contact person kami.<br>
				
                </div>
            </td>
        </tr>
    </table>
</page>
<?php
     $content = ob_get_clean();

    // convert
    require_once(dirname(__FILE__).'./html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', 0);
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('ticket00'.$isi_tbl['id_pesan'].'-'.date('Y/m/d').'.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

}else{
	session_destroy();
	header('Location:formRegistrasi.php?status=Silahkan Login');
}
?>
