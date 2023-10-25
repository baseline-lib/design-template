<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= $root; ?>css/style.css?<?php date_default_timezone_set('Asia/Tokyo'); echo date('YmdHi'); ?>">
	<meta name=”robots” content="noindex, nofollow">
	<?php 
		if(!empty($pageTitle)){echo '<title>'.$pageTitle.' | '.PAGETITLE.'</title>'.PHP_EOL;
		}else{echo '<title>'.PAGETITLE.'</title>'.PHP_EOL;}
		if(!empty($description)){echo '<meta name="description" content="'.$description.' '.DESCRIPTION.'">'.PHP_EOL;
		}else{echo '<meta name="description" content="'.DESCRIPTION.'">';}
		if(!empty($keyword)){echo '<meta name="keywords" content="'.$keyword.','.KEYWORD.'" />'.PHP_EOL;
		}else{echo '<meta name="keywords" content="'.KEYWORD.'" />'.PHP_EOL;}
	?>
</head>
<body>