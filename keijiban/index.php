<!DOCTYPE html>
<html lang="ja">

	<head>
		<meta charset="UTF-8">
		<title>掲示板</title>
		<link rel = "stylesheet" type = "text/css" href= "style.css">
	</head>
	
	<body>

      <header>
            <img class="logo" src="./4eachblog_logo.jpg">
            <ul class="menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
      </header>        
        
      <main>

        <!--MainLeft-->
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php">
                <div class="form">
                    <h2>入力フォーム</h2>
                    <div class="element">
                        <label>ハンドルネーム</label>
                        <br><input type ="text" name="handlename" size="30">
                    </div>
                    <div class="element">
                        <label>タイトル</label>
                        <br><input type ="text" name="title" size="30">
                    </div>
                    <div class="element">
                        <br><label>コメント</label>
                        <br><textarea name="comments" rows="6" cols="60"></textarea>
                    </div>
                    <input class="toukou" type="submit"value="投稿する">
                </div>
            </form>
            <?php       
                mb_internal_encoding("utf8");
                $pdo=new PDO("mysql:dbname=kana;host=localhost;","root","mysql");
                $stmt = $pdo->query("select*from kana_keijiban");
            
                while($row=$stmt->fetch()){
                echo "<br>";
                echo "<div class='reaction_corner'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                echo "</div>";               
                }
            ?>
            <br>
            <br>
        </div>
        
        <!--MainRight-->
        <div class="right">
            <h2>人気の記事</h2>
            <ul>
                <li>PHP オススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>                    

            <div>
                <h2>オススメリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>                    
            </div>

            <div>
                <h2>カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>javaScript</li>
                </ul>                    
            </div>

        </div>
      </main>

      <footer>
          <p>copyright © internous|4each blog is
              the one which provides A to Z about programming
          </p>
      </footer>
	</body>
</html>