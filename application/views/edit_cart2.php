    <!-- start banner Area -->
    <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Cart Pesanan
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
 <!-- Start menu-area Area -->
<section class="content">
      <div class="row">
        <div class="ml-100 col-xs-12 justify-content-between align-items-center">
          <div class="box">

            <div class="box-body">
                 <?php $id = $this->uri->segment(3); ?>
        <form action="<?php echo base_url('editcart/update2/');?><?php echo $id;?>" method="post">
        <table id="example1" class="table table-bordered">
        <div class="box-body">
            <br>
            <!--<label>No Pembelian : <?php //echo $invoice['id_invoice']; ?></label>-->
                <thead>
                <tr>

                  <th>NO</th>
                  <th>Tipe Pesanan</th>
                  <th>Nama Pesanan</th>
                  <th>Harga Pesanan </th>
                  <th>Qty</th>
                  <th border="0">Simpan</th>
                </tr>
                </thead>
                <tbody>
        <?php $i = 1; ?>
        <?php foreach($test as $data) { ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td>Makanan</td>
          <td><?php echo $data['nama_minuman']; ?></td>
          <td><?php echo $data['harga_minuman']; ?></td>
          <td><input type="number" name ="qty" value="<?php echo $data['quantity']; ?>"></td>
          <td>&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></td>
          <!--<td><a href="<?php //echo base_url('cart/delete_data/');?><?php// echo $data['id_pembelian'];?>" onClick="return confirm('Apakah data akan dihapus?')" ><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td> -->
        </tr>
      <?php } ?>    
        </tbody>
        <!--<th colspan="6"><div class="pull box-tools">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;Jumlah Semua Harga &nbsp; : &nbsp;&nbsp;&nbsp;<?php //echo ($harga['total_harga'] + $hargaminuman['total_minuman']); ?></div>
        <th colspan="2"><a href="<?php //echo base_url('#');?>"><div class="pull box-tools">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-sm"><b>Bayar Pesanan</b></i></button></div> </a></th> -->
          </th> 
         </table>
</form>
        </div> 
       </div>
      </div>  
    </div>
    </section>
    <br>
    <!-- End menu-area Area -->