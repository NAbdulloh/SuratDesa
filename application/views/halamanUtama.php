<!DOCTYPE html>
<html>
<head>
	<title>Form Pengurusan Surat</title>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
					<form class="align-self-center">
            <fieldset>
            	<h4>Form Pengurusan Surat</h4>
                            <div class="form-group">
                                <p><label for="telepon">Jenis Surat:</label><br></p>
                                <select class="form-control" name="jenkel" required>
                                    <option value="Laki-Laki">Pengantar SKCK</option>
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
                            <button type="button" class="btn btn-next btn-primary">Berikutnya <i class="fa fa-angle-right"></i></button>
            </fieldset>
			    </form>
			
		</table>
	
	</div>

</body>
</html>