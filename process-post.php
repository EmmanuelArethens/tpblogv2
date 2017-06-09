<?php
// on définit une variable pour le titre et le contenu qu'on va récupérer avec la method post
$title = $_POST['title'];
$content = $_POST['content'];
echo "wp u creat a post";
echo "<p>title : ".$title." </p>";
echo "<p>content : ".$content." </p>";

echo "<a href='index.php'> Retour a index </a>";

//on vérifie que le dossier post existe et si il n'éxiste pas créé un dossier post
if (!is_dir('post')){
mkdir('post');
}


// on définit une variable $file qui créé un fichier dans le dossier post  
// avec comme parametre la variable du titre + l'extension + un parametre qui permet l'ecriture sur un fichier
$file = fopen('post/' . $title . '.txt', 'w');
    
// on écrit sur le fichier txt qu'on créer avec le contenu de $content' 
fwrite($file, $content);

// on ferme le fichier
fclose($file)

?>