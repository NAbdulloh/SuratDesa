<!DOCTYPE html>
<html>
<head>
	<title>Form Pengurusan Surat</title>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
	<script type="text/javascript">
        function yesnoCheck(that) {
            if (that.value == "skck") {
                document.getElementById("skck").style.display = "block";
            } else {
                document.getElementById("skck").style.display = "none";
            }
            if (that.value == "ktp") {
                document.getElementById("ktp").style.display = "block";
            } else {
                document.getElementById("ktp").style.display = "none";
            }
            if (that.value == "domisili") {
                document.getElementById("domisili").style.display = "block";
            } else {
                document.getElementById("domisili").style.display = "none";
            }
            if (that.value == "kkBaru") {
                document.getElementById("kkBaru").style.display = "block";
            } else {
                document.getElementById("kkBaru").style.display = "none";
            }
            if (that.value == "takMampu") {
                document.getElementById("takMampu").style.display = "block";
            } else {
                document.getElementById("takMampu").style.display = "none";
            }
        }
    </script>
</head>
<body>

	<div class="container">
		<form class="col align-self-center" style="padding-top: 50px">
            <fieldset>
            	<h4>Form Pengurusan Surat</h4>
                            <div class="form-group">
                                <p><label for="jenSur">Jenis Surat:</label><br></p>
                                <select class="form-control" name="jenSur" onchange="yesnoCheck(this);" required>
                                	<option></option>
                                    <option value="skck">Pengantar SKCK</option>
                                    <option value="ktp">Permohonan KTP</option>
                                    <option value="kelahiran">Surat Keterangan Kelahiran</option>
                                    <option value="kematian">Surat Keterangan Kematian</option>
                                    <option value="domisili">Surat Keterangan Domisili</option>
                                    <option value="kkBaru">Permohonan KK Baru</option>
                                    <option value="takMampu">Surat Keterangan Tidak Mampu</option>
                                </select>
                            </div>
                            <div class="container-fluid" id="skck">
                            <div class="form-group" >
                                <p><label for="nik"><b>Nomor Induk Keluarga:</b></label><br></p>
                                <input type="number" name="nik" class="nik form-control" id="nik" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="nama"><b>Nama Lengkap:</b></label></p>
                                <input type="text" name="nama" class="nama form-control" id="nama" required>
                            </div>
                            </div>

                            <div class="container-fluid" id="ktp">
                            <div class="form-group" >
                                <p><label for="nik"><b>Nomor Induk Keluarga:</b></label><br></p>
                                <input type="number" name="nik" class="nik form-control" id="nik" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="nama"><b>Nama Lengkap:</b></label></p>
                                <input type="text" name="nama" class="nama form-control" id="nama" required>
                            </div>
                            </div>


                            <div class="container-fluid" id="domisili">
                            <div class="form-group">
                                <p><label for="nama"><b>Nama Lengkap:</b></label></p>
                                <input type="text" name="nama" class="nama form-control" id="nama" required>
                            </div>
                            <div class="form-group">
                                <p><label for="ttl"><b>Tempat & Tanggal Lahir:</b></label><br></p>
                                <input type="text" name="ttl" class="ttl form-control" id="ttl" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="agama"><b>Agama:</b></label><br></p>
                                <input type="text" name="agama" class="agama form-control" id="agama" style="width: 200px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="jenkel"><b>Jenis Kelamin:</b></label><br></p>
                                <select class="form-control" style="width: 400px" required>
                                    <option value="l">Laki-Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <p><label for="pekerjaan"><b>Pekerjaan:</b></label><br></p>
                                <input type="text" name="pekerjaan" class="pekerjaan form-control" id="pekerjaan" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="alamat"><b>Alamat:</b></label><br></p>
                                <input type="text" name="alamat" class="alamat form-control" id="alamat" required>
                            </div>
                            </div>

                            <div class="container-fluid" id="kkBaru">
                            <div class="form-group" >
                                <p><label for="kec"><b>Kecamatan:</b></label><br></p>
                                <input type="text" name="kec" class="kec form-control" id="kec" style="width: 400px" required>
                            </div>
                            <div class="form-group" >
                                <p><label for="kel"><b>Kelurahan/Desa:</b></label><br></p>
                                <input type="text" name="kel" class="kel form-control" id="kel" style="width: 400px" required>
                            </div>
                            <div class="form-group" >
                                <p><label for="nik"><b>Nomor Induk Keluarga Pemohon:</b></label><br></p>
                                <input type="number" name="nik" class="nik form-control" id="nik" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="nama"><b>Nama Lengkap Pemohon:</b></label></p>
                                <input type="text" name="nama" class="nama form-control" id="nama" required>
                            </div>
                            <div class="form-group">
                                <p><label for="kkSemula"><b>No. KK Semula:</b></label></p>
                                <input type="number" name="kkSemula" class="kkSemula form-control" id="kkSemula" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="alamat"><b>Alamat Pemohon:</b></label><br></p>
                                <label>Desa/Kelurahan:</label>
                                <input type="text" name="kel1" class="kel1 form-control" id="kel1" style="width: 400px" required>
                                <label>Kecamatan:</label>
                                <input type="text" name="kec1" class="kec1 form-control" id="kec1" style="width: 400px" required>
                                <label>Kabupaten/Kota:</label>
                                <input type="text" name="kab1" class="kab1 form-control" id="kab1" style="width: 400px" required>
                                <label>Propinsi:</label>
                                <input type="text" name="prop1" class="prop1 form-control" id="prop1" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="pos"><b>Kode Pos:</b></label></p>
                                <input type="number" name="pos" class="pos form-control" id="pos" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="telepon"><b>No. Telepon:</b></label></p>
                                <input type="number" name="telepon" class="telepon form-control" id="telepon" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="alasan"><b>Alasan Permohonan:</b></label><br></p>
                                <select class="form-control" style="width: 400px" required>
                                    <option value="1">Karena Membentuk Rumah Tangga Baru</option>
                                    <option value="2">Karena Kartu Keluarga Hilang/Rusak</option>
                                    <option value="3">Lainnya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <p><label for="jumkel"><b>Jumlah Anggota Keluarga:</b></label></p>
                                <input type="number" name="jumkel" class="jumkel form-control" id="jumkel" style="width: 50px" required><p><b>Orang</b></p>
                            </div>
                            <div class="form-group">
                                <p><label for="alamat"><b>Daftar Anggota Keluarga Pemohon (hanya diisi anggota keluarga saja):</b></label><br></p>
                                <center>
                                <table class="table table-striped" align="center">
                                    <tr>
                                        <td align="center"><b>No.</b></td>
                                        <td align="center"><b>NIK</b></td>
                                        <td align="center"><b>Nama Lengkap</b></td>
                                        <td align="center"><b>SDHK*)</b></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="n1" class="n1 form-control" id="n1" style="width: 50px" required></td>
                                        <td><input type="number" name="nik1" class="nik1 form-control" id="nik1" style="width: 400px" required></td>
                                        <td><input type="text" name="nm1" class="nm1 form-control" id="nm1" style="width: 400px" required></td>
                                        <td><input type="number" name="s1" class="s1 form-control" id="s1" style="width: 50px" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="n2" class="n2 form-control" id="n2" style="width: 50px"></td>
                                        <td><input type="number" name="nik2" class="nik2 form-control" id="nik2" style="width: 400px"></td>
                                        <td><input type="text" name="nm2" class="nm2 form-control" id="nm2" style="width: 400px"></td>
                                        <td><input type="number" name="s2" class="s2 form-control" id="s2" style="width: 50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="n3" class="n3 form-control" id="n3" style="width: 50px"></td>
                                        <td><input type="number" name="nik3" class="nik3 form-control" id="nik3" style="width: 400px"></td>
                                        <td><input type="text" name="nm3" class="nm3 form-control" id="nm3" style="width: 400px"></td>
                                        <td><input type="number" name="s3" class="s3 form-control" id="s3" style="width: 50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="n4" class="n4 form-control" id="n4" style="width: 50px"></td>
                                        <td><input type="number" name="nik4" class="nik4 form-control" id="nik4" style="width: 400px"></td>
                                        <td><input type="text" name="nm4" class="nm4 form-control" id="nm4" style="width: 400px"></td>
                                        <td><input type="number" name="s4" class="s4 form-control" id="s4" style="width: 50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="n5" class="n5 form-control" id="n5" style="width: 50px"></td>
                                        <td><input type="number" name="nik5" class="nik5 form-control" id="nik5" style="width: 400px"></td>
                                        <td><input type="text" name="nm5" class="nm5 form-control" id="nm5" style="width: 400px"></td>
                                        <td><input type="number" name="s5" class="s5 form-control" id="s5" style="width: 50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="n6" class="n6 form-control" id="n6" style="width: 50px"></td>
                                        <td><input type="number" name="nik6" class="nik6 form-control" id="nik6" style="width: 400px"></td>
                                        <td><input type="text" name="nm6" class="nm6 form-control" id="nm6" style="width: 400px"></td>
                                        <td><input type="number" name="s6" class="s6 form-control" id="s6" style="width: 50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="n7" class="n7 form-control" id="n7" style="width: 50px"></td>
                                        <td><input type="number" name="nik7" class="nik7 form-control" id="nik7" style="width: 400px"></td>
                                        <td><input type="text" name="nm7" class="nm7 form-control" id="nm7" style="width: 400px"></td>
                                        <td><input type="number" name="s7" class="s7 form-control" id="s7" style="width: 50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="n8" class="n8 form-control" id="n8" style="width: 50px"></td>
                                        <td><input type="number" name="nik8" class="nik8 form-control" id="nik8" style="width: 400px"></td>
                                        <td><input type="text" name="nm8" class="nm8 form-control" id="nm8" style="width: 400px"></td>
                                        <td><input type="number" name="s8" class="s8 form-control" id="s8" style="width: 50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="n9" class="n9 form-control" id="n9" style="width: 50px"></td>
                                        <td><input type="number" name="nik9" class="nik9 form-control" id="nik9" style="width: 400px"></td>
                                        <td><input type="text" name="nm9" class="nm9 form-control" id="nm9" style="width: 400px"></td>
                                        <td><input type="number" name="s9" class="s9 form-control" id="s9" style="width: 50px"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="n10" class="n10 form-control" id="n10" style="width: 50px"></td>
                                        <td><input type="number" name="nik10" class="nik10 form-control" id="nik10" style="width: 400px"></td>
                                        <td><input type="text" name="nm10" class="nm10 form-control" id="nm10" style="width: 400px"></td>
                                        <td><input type="number" name="s10" class="s10 form-control" id="s10" style="width: 50px"></td>
                                    </tr>
                                </table>
                                </center>
                            </div>
                            </div>

                            <div class="container-fluid" id="takMampu">
                            <div class="form-group">
                                <p><label for="nama"><b>Nama Lengkap:</b></label></p>
                                <input type="text" name="nama" class="nama form-control" id="nama" required>
                            </div>
                            <div class="form-group">
                                <p><label for="umur"><b>Umur:</b></label><br></p>
                                <input type="text" name="umur" class="umur form-control" id="umur" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="agama"><b>Agama:</b></label><br></p>
                                <input type="text" name="agama" class="agama form-control" id="agama" style="width: 200px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="pekerjaan"><b>Pekerjaan:</b></label><br></p>
                                <input type="text" name="pekerjaan" class="pekerjaan form-control" id="pekerjaan" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="alamat"><b>Alamat:</b></label><br></p>
                                <input type="text" name="alamat" class="alamat form-control" id="alamat" required>
                            </div>
                            </div>

                            <br>
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalLong">Berikutnya <i class="fa fa-angle-right"></i></button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Detail Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Hasil Input</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <b>Nama Lengkap</b>
                                            </div>
                                            <div class="col-sm-7">
                                                : 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <b>No. NIK</b>
                                            </div>
                                            <div class="col-sm-7">
                                                : 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <b>Alamat</b>
                                            </div>
                                            <div class="col-sm-7">
                                                : 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <b>Tempat dan Tanggal Lahir</b>
                                            </div>
                                            <div class="col-sm-7">
                                                : 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <b>Usia</b>
                                            </div>
                                            <div class="col-sm-7">
                                                : 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <b>Pekerjaan</b>
                                            </div>
                                            <div class="col-sm-7">
                                                : 
                                            </div>
                                        </div>

                                        <hr>

                                        <h5>Data Sudah Benar?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TIDAK</button>
                                        <a class="btn btn-primary" href="<?= base_url('C_list/lihatListSurat');?>">YA</a>                                    </div>
                                    </div>
                                </div>
                            </div>
            </fieldset>
		</form>
	
	</div>

</body>
<script src="bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>