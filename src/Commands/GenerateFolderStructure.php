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

        if ($this->confirm('Do you want to generate the folder structure for your package?')) {
            $this->generateFolderStructure();
        }
    }

    protected function generateFolderStructure()
    {
        $folders = [
            'resources/views/admin',
            'resources/views/layouts/admin/app.blade.php',
            'resources/views/layouts/admin/elements/footer.blade.php',
            'resources/views/layouts/admin/elements/header.blade.php',
            'resources/views/layouts/admin/elements/sidebar.blade.php',

            'resources/views/customer',
            'resources/views/layouts/customer/app.blade.php',
            'resources/views/layouts/customer/elements/footer.blade.php',
            'resources/views/layouts/customer/elements/header.blade.php',
            'resources/views/layouts/customer/elements/sidebar.blade.php',


            'public/admin_assets/css',
            'public/admin_assets/images',
            'public/admin_assets/js',
            'public/admin_assets/fonts',


            'public/customer_assets/js/css',
            'public/customer_assets/images',
            'public/customer_assets/js',
            'public/customer_assets/fonts',
        ];

        foreach ($folders as $folder) {
            if (!File::exists(base_path($folder))) {
                File::makeDirectory(base_path($folder), 0755, true);
                $this->info("Directory created: $folder");
            } else {
                $this->info("Directory already exists: $folder");
            }
        }

        $this->info('Folder structure generated successfully!');
    }
}
