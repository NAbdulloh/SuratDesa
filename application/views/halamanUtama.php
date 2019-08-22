<!DOCTYPE html>
<html>
<head>
	<title>Form Pengurusan Surat</title>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
	<script type="text/javascript">
        function yesnoCheck(that) {
            if (that.value == "skck") {
                document.getElementById("skck").style.display = "block";
            } else if (that.value == "ktp") {
                document.getElementById("ktp").style.display = "block";
            } else {
                document.getElementById("skck").style.display = "none";
            }
             else {
                document.getElementById("skck").style.display = "none";
            }
        }
    </script>
</head>
<body>

	<div class="container">
		<form class="col align-self-center">
            <fieldset>
            	<h4>Form Pengurusan Surat</h4>
                            <div class="form-group">
                                <p><label for="telepon">Jenis Surat:</label><br></p>
                                <select class="form-control" name="jenSur" onchange="yesnoCheck(this);" required>
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
                            <div class="form-group">
                                <p><label for="nik">Nomor Induk Keluarga:</label><br></p>
                                <input type="number" name="nik" class="nik form-control" id="nik" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="nama">Nama Lengkap:</label></p>
                                <input type="text" name="nama" class="nama form-control" id="nama" required>
                            </div>
                            </div>

                            <div class="container-fluid" id="ktp">
                            <div class="form-group">
                                <p><label for="nik">Nomor Induk Keluarga:</label><br></p>
                                <input type="number" name="nik" class="nik form-control" id="nik" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="nama">Nama Lengkap:</label></p>
                                <input type="text" name="nama" class="nama form-control" id="nama" required>
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