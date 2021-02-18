<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">
 
<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>
 
<main>
<h2>Practice</h2>
<pre>
<?php
  require('require.php'); 
 
  if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
    $id = $_REQUEST['id'];
 
    $statement = $db->prepare('DELETE FROM memos WHERE id=?');
    $statement->execute(array($id));
  }
?>
メモを削除しました。
</pre>
 
<p><a href="index.php">戻る</a>
</main>
</body>    
</html>