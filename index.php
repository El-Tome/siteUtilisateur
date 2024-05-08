<?php
// Chemin du dossier à explorer
$dossier = "./"; // Mettez le chemin approprié

// Fonction récursive pour explorer les dossiers et fichiers
function explorerDossier($dossier){
    echo "<ul>";

    // Liste des fichiers dans le dossier
    $elements = scandir($dossier);

    foreach ($elements as $element) {
        if ($element != "." && $element != ".." && $element != ".git") {
            $chemin = $dossier . '/' . $element;

            echo "<li>";

            if (is_dir($chemin)) {
                // Si c'est un dossier, explorer récursivement
                echo "<strong>$element</strong>";
                explorerDossier($chemin);
            } else {
                // Si c'est un fichier, afficher le lien
                echo "<a href=\"$chemin\">$element</a>";
            }

            echo "</li>";
        }
    }

    echo "</ul>";
}

// Appel initial pour démarrer l'exploration
explorerDossier($dossier);
?>