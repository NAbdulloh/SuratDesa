<!DOCTYPE html>
<html>
<head>
	<title>Form Pengurusan Surat</title>
</head>
<body>
	<form>
                        
                        <fieldset>
                            <h4>Form Pengurusan Surat</h4>
                            <div class="form-group">
                                <p><label for="telepon">Jenis Surat:</label><br></p>
                                <select class="form-control" name="jenkel" required>
                                    <option value="Laki-Laki">Surat Keterangan Catatan Kepolisian</option>
                                    <option value="Perempuan">Surat Kematian</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <p><label for="nik">Nomor Induk Keluarga:</label><br></p>
                                <input type="number" name="nik" class="nik form-control" id="nik" style="width: 400px" required>
                            </div>
                            <div class="form-group">
                                <p><label for="nama">Nama Lengkap:</label></p>
                                <input type="text" name="nama" class="nama form-control" id="nama" required> 
                            </div>
                            <br>
                            <button type="button" class="btn btn-next">Berikutnya <i class="fa fa-angle-right"></i></button>
                        </fieldset>
                    </form>

</body>
</html>