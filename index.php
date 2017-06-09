<?php
//je declare une variable avec le nom array (tableau) puis je scan avec scandir mon dossier post
$array = scandir('post', SCANDIR_SORT_NONE);
//suppression des point point
$posts = [];
foreach ($array as $file) {
    if ($file === '.') {
        continue;
}
    if ($file === '..') {
        continue;
}
    $files[] = $file;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Octuple Blog </h1>
    <p> \[°.°]/ </p>
    <nav><a href="create.html"> New post </a></nav>
    
<?php foreach ($files as $file) { ?>
    <article>
        <h2><?php echo basename($file, '.txt');?></h2>
        <p><?php echo file_get_contents('post/'.$file);?></p>
        </article>
<?php } ?>

</html>