
<head>
  <title>Siswa - Data Induk</title>
</head>

<body>

<form>

<div class ="container">
  <div class="row">
  <div class="col m10"> 
    <div class="card">
      <div class="card-image">
      <h4 align="center">FORM PENGISIAN DATA SISWA</h4>
        <div class="input-field col s3">
        <label for="">NISN</label>
        <input type="number" name="nisn">
        </div>

        <div class="input-field col s9">
        <label>Nama Siswa</label>
        <input type="text" name="name">
        </div>

        <div class="input-field col s4">
        <select>
          <option value="" disabled selected>Pilih Jenis Kelamin :</option>
          <option value="1">Laki-Laki</option>
          <option value="2">Perempuan</option>
        </select>
        <label>Jenis Kelamin</label>

        </div>

        <div class="input-field col s4">
        <label>Tempat Lahir</label>
        <input type="text" name="tmptlhr">
        </div>

        <div class="input-field col s4">
        <input type="date" class="datepicker">
        <label>Tanggal Lahir</label>
        </div>

        <div class="input-field col s4">
          <select>
          <option value="" disabled selected>Pilih Agama Anda :</option>
          <option value="1">Islam</option>
          <option value="2">Kristen</option>
          <option value="3">Katolik</option>
          <option value="3">Hindu</option>
          <option value="3">Budha</option>
        </select>
        <label>Agama</label>
        </div>

        <div class="input-field col s4">
        <label>Telp</label>
        <input type="number" name="telp">
        </div>

        <div class="input-field col s4">
        <label>Kewarganegaraan</label>
        <input type="text" name="kwrg">
        </div>

        <div class="input-field col s4">
        <label>Anak-Ke</label>
        <input type="number" name="ak">
        </div>

        <div class="input-field col s4">
        <label>Saudara Kandung</label>
        <input type="number" name="sk">
        </div>

        <div class="input-field col s4">
        <label>Saudara Tiri</label>
        <input type="number" name="st">
        </div>

        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Alamat</label>
        </div>
    </div>
  </div>
</div>
</div>
<button class="btn waves-effect waves-light" type="submit" name="action">Submit
  <i class="material-icons right">send</i>
  </button>
</div>
    

    <script>
      $(document).ready(function() {
      $('select').material_select();});
      $('select').material_select('destroy');
      $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 100 // Creates a dropdown of 15 years to control year
  });
      
    </script>
</form>

  <div class="row">
   <div class="col s12 m12">
    <div class="card">
      <div class="card-image">
          <h3 align="center">Data Siswa</h3>
          <table class="centered responsive-table highlight bordered">
            <thead>
            <tr>
              <th data-field="nis">NISN</th>
              <th data-field="name">Nama</th>
              <th data-field="jk">Jenis Kelamin</th>
              <th data-field="tl">Tempat Lahir</th>
              <th data-field="agm">Agama</th>
              <th data-field="tlp">Telp</th>
              <th data-field="almt">Alamat</th>
              <th data-field="kwrg">Kewarganegaraan</th>
              <th data-field="ak">Anak-ke</th>
              <th data-field="jsk">Jumlah Saudara Kandung</th>
              <th data-field="jst">Jumlah Saudara Tiri</th>
              <th data-field="tglhr">Tanggal Lahir</th>
              </tr>
              </thead>
              <?php
              if ($ambil->num_rows()>0) {
                foreach ($ambil->result() as $row) 
                {
                  ?>
              <tbody>
                  <tr>
                  <td><?php echo $row->NISN; ?></td>
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->Jenis_kelamin; ?></td>
                  <td><?php echo $row->Tempat_lahir; ?></td>
                  <td><?php echo $row->agama; ?></td>
                  <td><?php echo $row->telp; ?></td>
                  <td><?php echo $row->alamat; ?></td>
                  <td><?php echo $row->kwarganegaraan; ?></td>
                  <td><?php echo $row->anak_ke; ?></td>
                  <td><?php echo $row->jml_saudara_kandung; ?></td>
                  <td><?php echo $row->jml_saudara_tiri; ?></td>
                  <td><?php echo $row->tanggal_lahir; ?></td>
                  </tr>
              </tbody>
                  <?php
                }
              }
              else 
              {
              ?>
              <?php
            }
            ?>
          </table>
        </div>
  </div>
  </div>
  </div>



</body>
</html>
 