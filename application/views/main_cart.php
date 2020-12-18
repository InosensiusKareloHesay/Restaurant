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
        <table id="example1" class="table table-bordered">
        <div class="box-body">
            <br>
            <label>No Pembelian : <?php echo $invoice['id_invoice']; ?></label>
                <thead>
                <tr>

                  <th>NO</th>
                  <th>Tipe Pesanan</th>
                  <th>Nama Pesanan</th>
                  <th>Harga Pesanan </th>
                  <th>Qty</th>
                  <th>Total</th>
                  <th>Ubah</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                <tbody>
        <?php $i = 1; ?>
        <?php foreach($test as $data) { ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td>Makanan</td>
          <td><?php echo $data['nama_makanan']; ?></td>
          <td><?php echo $data['harga_makanan']; ?></td>
          <td><?php echo $data['quantity']; ?></td>
          <td><?php echo ($data['harga_makanan'] * $data['quantity']); ?></td>
          <td><a href="<?php echo base_url('editcart/edit_data/');?><?php echo $data['id_makanan'];?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td><a href="<?php echo base_url('cart/delete_data/');?><?php echo $data['id_pembelian'];?>" onClick="return confirm('Apakah data akan dihapus?')" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
        </tr>
      <?php } ?>
            <?php foreach($coba as $data2) { ?>  
        <tr>
          <td><?php echo $i++; ?></td>
          <td>Minuman</td>
          <td><?php echo $data2['nama_minuman']; ?></td>
          <td><?php echo $data2['harga_minuman']; ?></td>
          <td><?php echo $data2['quantity']; ?></td>
          <td><?php echo ($data2['harga_minuman'] * $data2['quantity']); ?> </td>
          <td><a href="<?php echo base_url('editcart/edit_data2/');?><?php echo $data2['id_minuman'];?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td><a href="<?php echo base_url('cart/delete_data/');?><?php echo $data2['id_pembelian'];?>" onClick="return confirm('Apakah data akan dihapus?')" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
        </tr>
      <?php } ?>         
        </tbody>
        <th colspan="6"><div class="pull box-tools">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            &emsp;&emsp;&emsp;&emsp;&emsp;Jumlah Semua Harga &nbsp; : &nbsp;&nbsp;&nbsp;<?php echo ($harga['total_harga'] + $hargaminuman['total_minuman']); ?></div>
        <th colspan="2"><a href="<?php echo base_url('kode/');?>"><div class="pull box-tools">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-sm"><b>Bayar Pesanan</b></i></button></div> </a></th> 
          </th>
         </table>

        </div> 
       </div>
      </div>  
    </div>
        <div class="ml-100">
    <a href="<?php echo base_url('restaurant/');?>"><div class="pull box-tools"><button type="button" class="btn btn-info btn-sm"><b>Tambah Pesanan</b>&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></button></div> </a></div>
    </section>
    <br>
    <!-- End menu-area Area -->