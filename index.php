<html>
<head>
    <title>DIANSaa</title>
    <!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">

    <!-- menghubungkan dengan file jquery -->
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<div class="wrap">
        <div class="atas">
            <div class="mobile">
                <ul>
                    <li><a href="#"><img src="Icon/Mobile.png" width="17" height="21"></a></li>
                    <li><b id="text">Download DIANSaa App</b></li>
                </ul>
            </div>
            <div class="ikuti-text">
                <ul>
                    <li><b>Ikuti kami di</b></li>
                </ul>
            </div>
            <div class="ikuti">
                <ul>
                    <li><a href="https://www.instagram.com/invites/contact/?i=ayjl9axn5v5f&utm_content=1mnhg4w"><img src="Icon/IGM.png" width="20" height="20"></a></li>
                    <li><a href="#"><img src="Icon/FBK.png" width="20" height="20"></a></li>
                </ul>
            </div>
        </div>
		<div class="header">
            <ul>			
			    <li id="logo">DIANSaa</li>
                <li id="search">
                    <form action="" method="get">
                    <input type="text" name="search_text" id="search_text" placeholder="Search"/>
                    <a href="#"><input type="image"  src="Icon/IconS.jpg" name="search_button" id="search_button"></a>
                </form></li>
                <li>
                    <a class="mt tombol-login" href="index.php?page=login">Log In</a>
                </li>
                <li>
                    <a class="mt tombol-daftar" href="index.php?page=daftar">Daftar</a>
                </li>
            </ul>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php?page=home">Home</a></li>
				<li><a href="index.php?page=produk">Produk</a></li>
				<li><a href="index.php?page=kontak">Kontak</a></li>			
			</ul>
		</div>
		<div class="badan">
                <?php
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                        switch ($page) {
                            case 'home':
                                include "halaman/home.php";
                                break;

                            case 'produk':
                                include "halaman/produk.php";
                                break;

                            case 'kontak':
                                include "halaman/kontak.php";
                                break;
                            
                            case 'login':
                                include "login.php";
                                break;
                            case 'login':
                                include "index.php";
                                break;
                                                            
                            case 'daftar':
                                include "daftar.php";
                                break;
                                
                            case 'transaksi':
                                include "halaman/transaksi.php";
                                break;

                            case 'timeline':
                                include "timeline.php";
                                break;

                            default:
                                echo "<center><h3>Maaf. Halaman tidak di temukan!</h3></center>";
                                break;
                        }
                    }
                    else{
                        include "halaman/home.php";
                    }
                ?>  			
		</div>
        <div class="clear"></div>
		<div class="footer">
            Copyright © 2021 Annisa Dian Fadillah
		</div>
	</div>
</body>
</html>