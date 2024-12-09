<?php

function searchFilesWithExtension($dir, $extension) {
    $directoryIterator = new RecursiveDirectoryIterator($dir);
    $iterator = new RecursiveIteratorIterator($directoryIterator);

    foreach ($iterator as $file) {
        // Skip directories
        if ($file->isDir()) {
            continue;
        }

        // Check if the file has the specified extension
        if (pathinfo($file->getFilename(), PATHINFO_EXTENSION) === $extension) {
            $filePath = $file->getRealPath();  // Get the full file path            
            // Use file_get_contents to read the file content
            $neueVariablen = file_get_contents($filePath);
			echo $filePath;
			include "deployment/rezeptcreator2.php";
			$neueVariablen = file_get_contents($filePath);
			include "allrecipesintohtml.php";
        }
    }
}

// Usage example:
$directory = 'recipes';  // This ensures the path is based on the script's directory
$extension = 'json'; // Example extension
searchFilesWithExtension($directory, $extension);
?>