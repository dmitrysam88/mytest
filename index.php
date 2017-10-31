<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<? 
		require_once('tag.php');
	?>
	<h1>My syte</h1>
	<?$tag = new tag('a');
	$tag2  = new tag('p');
    echo $tag->setText($tag2->setText('text')->show())->addArgument('href','#')->addArgument('target','_blank')->show(); ?>
    <?//echo "<a href='#'>my text</a>";?>
</body>
</html>