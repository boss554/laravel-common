<?php

namespace Kody\Common\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateFolderStructure extends Command
{
    protected $signature = 'common:generate-folders';

    protected $description = 'Generate folder structure for common package';

    public function handle()
    {

        if ($this->confirm('Do you want to generate the folder structure for your project?')) {
            $this->generateFolderStructure();
        }
    }

    protected function generateFolderStructure()
    {
        $folders = [
            'resources/views/admin',
            'resources/views/admin/layouts',
            'resources/views/admin/layouts/elements',

            'public/admin_assets/css',
            'public/admin_assets/images',
            'public/admin_assets/js',
            'public/admin_assets/fonts',


            'resources/views/customer',
            'resources/views/customer/layouts',
            'resources/views/customer/layouts/elements',

            'public/customer_assets/css',
            'public/customer_assets/images',
            'public/customer_assets/js',
            'public/customer_assets/fonts',
        ];

        $files = [
            'resources/views/admin/app.blade.php',
            'resources/views/admin/layouts/elements/footer.blade.php',
            'resources/views/admin/layouts/elements/header.blade.php',
            'resources/views/admin/layouts/elements/sidebar.blade.php',

            'resources/views/customer/app.blade.php',
            'resources/views/customer/layouts/elements/footer.blade.php',
            'resources/views/customer/layouts/elements/header.blade.php',
            'resources/views/customer/layouts/elements/sidebar.blade.php',
        ];


        foreach ($folders as $folder) {
            if (!File::exists(base_path($folder))) {
                File::makeDirectory(base_path($folder), 0755, true);
                $this->info("Directory created: $folder");
            } else {
                $this->info("Directory already exists: $folder");
            }
        }


        foreach ($files as $file) {
            // Define the content for each file
            $fileContent = '';

            // Check if the file doesn't exist and create it
            if (!file_exists(base_path($file))) {
                // Attempt to create the file and write content
                $result = touch(base_path($file));
                if ($result !== false) {
                    echo "File created successfully: $file\n";
                } else {
                    echo "Failed to create file: $file\n";
                }
            } else {
                echo "File already exists: $file\n";
            }
        }

        $this->info('File structure generated successfully!');
    }
}
