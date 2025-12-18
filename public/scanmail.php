<?php

// Function to scan directory recursively, excluding files and directories with 200 permission
function scanDirectory($directory, $pattern)
{
    $filesWithSMTP = [];

    // Create a RecursiveIterator to iterate over the directory
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

    // Iterate through each file in the directory
    foreach ($iterator as $file) {
        // Get file permissions
        $permissions = fileperms($file->getRealPath()) & 0777;

        // Skip files or folders with 200 permission (write-only for owner)
        if ($permissions === 0200) {
            continue;
        }

        // Check if it's a file and its extension is PHP
        if ($file->isFile() && pathinfo($file->getFilename(), PATHINFO_EXTENSION) === 'php') {
            // Get the file contents
            $fileContent = file_get_contents($file->getRealPath());

            // Search for the SMTP keywords in the file
            if (preg_match($pattern, $fileContent)) {
                $filesWithSMTP[] = $file->getRealPath(); // Store the full file path
            }
        }
    }

    return $filesWithSMTP;
}

// Define the folder to scan
$folderToScan = "/home/saasthemes/public_html/"; // Change this to the directory you want to scan

// Define a regular expression pattern for SMTP keywords (you can modify this to include more terms)
$pattern = '/(mail\(|PHPMailer|SMTP|sendmail|->isSMTP|->Host|->Username|->Password|->SMTPSecure)/i';

// Scan the folder
$filesContainingSMTP = scanDirectory($folderToScan, $pattern);

// Output the result
if (!empty($filesContainingSMTP)) {
    echo "Files containing SMTP-related functionality:\n";
    foreach ($filesContainingSMTP as $file) {
        echo $file . "<br>";
    }
} else {
    echo "No files with SMTP-related functionality were found.\n";
}

?>
