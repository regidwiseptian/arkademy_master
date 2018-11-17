<?php

function countChar($text, $word)
{
    echo "<script>alert('Jumlah Karakter String: ".substr_count($text, $word)."')</script>";    
  
    $string = str_replace("$word"," ","$text");
    echo "<script>alert('Replace Karakter String Baru: ".($string)."')</script>";
    
}


if (!empty($_GET['a']) && !empty($_GET['b'])) {
    countChar($_GET['a'], $_GET['b']);
}

?>

<!doctype html>
<html>
  <head>
    <title>5. Me-replace karakter dalam string</title>
  </head>
  <body>
					<form>
						<div class="form-group">
							<label for="a">Text/String</label>
							<input type="text" class="form-control" id="a" placeholder="Masukkan String" name="a">
						</div>
						<div class="form-group">
							<label for="b">Karakter</label>
							<input type="text" class="form-control" id="b" placeholder="Masukkan Karakter" name="b">
						</div>
						<button type="submit" class="btn btn-primary">Hitung</button>
          </form>
  </body>
</html>
