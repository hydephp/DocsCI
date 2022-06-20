<?php

namespace App\Commands;

use Hyde\Framework\Hyde;
use LaravelZero\Framework\Commands\Command;

class UpdateCommunityFiles extends Command
{
    protected $signature = 'download-community-files';
    protected $description = 'Download the latest community health files';

    public function handle()
    {
        $files = [
            'https://raw.githubusercontent.com/hydephp/develop/master/CHANGELOG.md' => 'changelog.md',
            'https://raw.githubusercontent.com/hydephp/.github/master/LICENSE.md' => 'license.md',
            'https://raw.githubusercontent.com/hydephp/.github/master/SECURITY.md' => 'security.md',
            'https://raw.githubusercontent.com/hydephp/.github/master/CONTRIBUTING.md' => 'contributing.md',
            'https://raw.githubusercontent.com/hydephp/.github/master/CODE_OF_CONDUCT.md' => 'code-of-conduct.md',
        ];

        foreach ($files as $url => $file) {
            $this->info("Downloading $url...");
            $contents = file_get_contents($url);
            file_put_contents(Hyde::path('_pages/'.$file), $contents);
        }
    }
}
