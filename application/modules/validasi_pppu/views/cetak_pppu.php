<h1 align="center"> Tanda Penegasan & Persetujuan Pemesanan Unit (PPPU) </h1>
 <div align="center">
    <img src="<?php echo base_url('upload/logo-fix.gif'); ?>" style="width: 150px; height: 50px;">
    </div>
<br>
<table width="100%" cellpadding="0" cellspacing="3" >
    
     <tr>
        <td style="width: 20%;"> Nama Customer </td>
        <td style="width: 5%;"> : </td>
        <td style="width: 30%;"> <?php  echo $trans->nama_customer; ?> </td>

        <td style="width: 20%;"> Kode Pelanggan </td>
        <td style="width: 5%;"> : </td>
        <td style="width: 30%;"> <?php  echo $trans->kode_pelanggan; ?> X Angsuran </td>
    </tr>

     <tr>
        <td style="width: 20%;"> Alamat </td>
        <td style="width: 5%;"> : </td>
        <td style="width: 30%;"> <?php  echo $trans->alamat; ?> </td>

        <td style="width: 20%;"> No HP </td>
        <td style="width: 5%;"> : </td>
        <td style="width: 30%;"> <?php  echo $trans->no_hp; ?> </td>
    </tr>
    <tr>
        <td colspan="6"> <h3> Sales  : <?php echo $trans->nik . " - ". $trans->nama_sales; ?>  </h3></td> 
    </tr>
     
    
      
   
   
</table>