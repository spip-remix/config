<?php

namespace SpipRemix\Config;

class Reader
{
    public function list(array $directories): array
    {
        $files = [];

        foreach ($directories as $directory) {
            if (!is_string($directory)) {
                trigger_error('Directories list contains a non string entry.');
            }
            elseif (empty($directory)) {
                trigger_error('Directories list contains an empty string entry.');
            }
            elseif (file_exists($directory . '/config.php')) {
                $files[] = $directory . '/config.php';
            }
        }

        return $files;
    }
}
