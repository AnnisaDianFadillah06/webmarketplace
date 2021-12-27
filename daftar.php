<?php include 'penghubung2.php' ?>

<div class="badandaftar">
	<div class="formdaftar blurdaftar"> 
		<h2>DAFTAR</h2>
		<form method="post">
            <div class="keterangan">
                <label>Nama Lengkap</label>
                    <input type="text" class="isian" name="nama" placeholder="Nama Lengkap" required>
                <label>Tanggal Lahir</label>
                    <input type="date" class="isian" name="tgllahir" required>
                <label>Password</label>
                    <input type="password" class="isian" name="password" placeholder="Minimal 6 karakter" required>
            </div>
            <div class="verifikasi">
                <label>Nomor Telepon</label>
                    <input type="text" class="isian" name="nomor" placeholder="Masukkan nomor telepon Anda " required>
                <label>Kode Verifikasi</label>
                    <input type="text" class="isian" name="verifikasi" placeholder="6 digits" required>
                    <input type="submit" name="daftar" value="Daftar" class="submit">
            </div>
		    <div class="remember">
			    <div class="daftar"><div class="Oroption"><label>ATAU</label></div></div>
				    <div class="links">
					    <div class="facebook">
						    <a href="#"><img src="Icon/LF.png" alt="Facebook Icon" /></a></div>
					    <div class="google">
						    <a href=""><img src="Icon/LG.png" alt="Google Icon" /></a></div>
				    </div>
				<div class="signup"> Sudah punya akun? <a href="index.php?page=login">Masuk</a></div>
            </div>
		</form>
        <?php
            if (isset($_POST['daftar'])){
                $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
                $tgllahir = filter_input(INPUT_POST, 'tgllahir', FILTER_SANITIZE_STRING);
                $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
                $nomor = filter_input(INPUT_POST, 'nomor', FILTER_SANITIZE_STRING);
                $verifikasi = filter_input(INPUT_POST, 'verifikasi', FILTER_SANITIZE_STRING);

                $sql = "INSERT INTO registerloginlogout (nama, tgllahir, password, nomor, verifikasi) 
                VALUES (:nama, :tgllahir, :password, :nomor, :verifikasi)";
                $stmt = $db->prepare($sql);

                $params = array(
                    ":nama" => $nama,
                    ":tgllahir" => $tgllahir,
                    ":password" => $password,
                    ":nomor" => $nomor,
                    ":verifikasi" => $verifikasi
                );
                $saved = $stmt->execute($params);

                if($saved) header("Location: index.php?page=login");
            }
        ?>
</div>
</div>