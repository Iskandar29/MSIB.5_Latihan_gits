<!DOCTYPE html>
<html>
<head>
	<style>
	body {
	background-image: url('iskandar.jpg'); 
	background-size: cover; 
	background-position: center;
	}
	nav {
            font-family: Cambria, Cochin, Georgia, Times, Times New Roman, serif;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10PX;
            background-color: black;
			color: white;
            border-bottom: 1px solid #513c28;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
        }

        .Teks {
            text-align: center;
            font-weight: bold; 
            padding-top: 70px;

        }

        .Teks1 {
            text-align: center;
            color:white;

        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }

        table {
            margin-left: auto;
            margin-right: auto;
            width: 450px;
            height: auto;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .5);
            border-radius: 20px;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .5);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        td {
            padding: 10px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
			color:blue;
            text-decoration: underline blue;
        }

.button {
  background-color: black ;
  border: none;
  color: black;
  padding: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {
	border-radius: 10px;
	width: auto;
		
}

footer{
	position: fixed; bottom: 0; left: 0; right: 0;
	font-weight: bold;
	height: 45px;
	backdrop-filter: blur(5px);
}
	</style>
</head>
 <body class="backgroun">
	<nav>		
    <?php		
			$text = "Iskandar|Kampus Merdeka | GITS Studi Independen 5 - Web Developer";
			echo "<p>".$text."</p>";
		?>

	</nav>

	<div class="Teks">		
    <?php
		$judul = "Biodata Diri";
		echo "<h1>".$judul."</h1>";
		 ?>
    </div>
    <div class="Teks1">		
    <?php
        $text = "Tugas pertemuan pertama";
			echo "<p>".$text."</p>";
            
		 ?>
    </div>
    <?php
echo '
	<table>
        <tr>
            <td><button class="button button1"><a> NAMA =</a></button></td>
            <td><button class="button button1"><a> ISKANDAR</a></button></td>
        </tr>
        <tr>
            <td><button class="button button1"><a> KULIAH =</a></button></td>
            <td><button class="button button1"><a> UNIVERSITAS MURIA KUDUS</a></button></td>
        </tr>
        <tr>
            <td><button class="button button1"><a> JURUSAN =</a></button></td>
            <td><button class="button button1"><a> SISTEM INFORMASI</a></button></td>
        </tr>
        <tr>
            <td><button class="button button1"><a> STUDI INDEPENDEN =</a></button></td>
            <td><button class="button button1"><a> Full Stack Web Developer</a></button></td>
        </tr>
    </table>
	<footer>
		<p style="text-align: center;">&copy; 2023 ISKANDAR. Hak Cipta Dilindungi Undang-Undang.</p>
	</footer>
</body>'?>

</html> 