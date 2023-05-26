<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestingCommand extends Command
{
    protected $signature = 'app:test';

    protected $description = 'Command description';

    public function handle(): void
    {

        $this->components->twoColumnDetail('<fg=green;options=bold>Key</>' , 'Value');
        $this->components->alert('Some alert');
        $this->components->error('Some error');
        $this->components->warn('Some warning');
        $this->components->info('Some info.');
        $this->components->bulletList(['First' , 'Second' , 'Third']);


    }
}
