<html>
<head>
	<title>Parse</title>
	<style type="text/css">
		pre{
			padding: 20px;
			background-color: #fafafa;
			max-width: 100%;
		}
	</style>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-67554554-1', 'auto');
	  ga('send', 'pageview');
	
	</script>
</head>
<body>

	<?php
	include 'simple_html_dom.php';//remove .txt extension
	echo '<h2>Parse Iconic icons class array</h2>';
	$arr = '';
	// Create DOM from URL or file
	$html = file_get_html('http://ionicons.com/');	
	// Find all links
	foreach($html->find('#icons li') as $element)
	       $arr .=  "'{$element->class}' , " ; 
   	file_put_contents('ionicons.txt', 'array( '.$arr.' )');
   	echo '<a href="ionicons.txt">Download ionicons.txt</a><br><br>';

   	echo '<h2>Parse fortawesome icons class array</h2>';
	$arr = '';
	$html = file_get_html('http://fortawesome.github.io/Font-Awesome/icons/');
	foreach($html->find('.fontawesome-icon-list a i') as $element)
	       $arr .=  "'{$element->class}', " ; 
   file_put_contents('fortawesome.txt', 'array( '.$arr.' )');
   echo '<a href="fortawesome.txt">Download fortawesome.txt</a><br><br>';

   echo '<h2>Parse genericons class array</h2>';
  	$arr = '';
	$html = file_get_html('http://genericons.com/');
	foreach($html->find('#iconlist .genericon') as $element)
	       $arr .=  "'{$element->class}', " ; 
   file_put_contents('genericons.txt', 'array( '.$arr.' )'); 
   echo '<a href="genericons.txt">Download genericons.txt</a><br><br>';

   echo '<h2>Parse Linear icon class array</h2>';
  	$arr = '';
	$html = file_get_html('https://linearicons.com/free');
	foreach($html->find('#cheat-sheet section .mtl svg') as $element)
	       $arr .=  "'{$element->class}', " ; 
   file_put_contents('LinearIcons.txt', 'array( '.$arr.' )'); 
   echo '<a href="genericons.txt">Download LinearIcons.txt</a><br><br>';

   ?>
   <br><br><p>Created by <a target="_blank" href="themeperch.net">ThemePerch</a></p>
</body>
</html>
