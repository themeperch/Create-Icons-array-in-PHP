# Create-Icons-array-in-PHP

Step 1: At first you need to download simple_html_dom.php file & include it.

<?php include 'simple_html_dom.php'; ?>

 Step 2: Now we parse Font Awesome Icons class as array:

Connect with Font Awesome Icons site

// Create DOM from URL or file
$html = file_get_html('http://fortawesome.github.io/Font-Awesome/icons/');

Now we parse class from DOM

$arr = '';
foreach($html->find('.fontawesome-icon-list a i') as $element){
           $arr .=  "'{$element->class}', " ;
}

Step 3: Finally write data into a file

file_put_contents('fontawesome.txt', 'array( '.$arr.' )');

Data will be save like

array( 'fa fa-glass', 'fa fa-music', 'fa fa-search', 'fa fa-envelope-o', 'fa fa-heart', 'fa fa-star', 'fa fa-star-o', 'fa fa-user', 'fa fa-film', 'fa fa-th-large', 'fa fa-th', ...........................................'fa fa-wheelchair',  )

Read more details in here http://themeperch.net/2015/07/create-icons-array-in-php/
