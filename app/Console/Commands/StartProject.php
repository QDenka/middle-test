<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class StartProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:project';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Автоматически создает migrations, seeders, key-generate';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('key:generate');
        $this->info('Ключ приложения сгенерирован');
        Artisan::call('migrate');
        $this->info('Миграции успешно выполнены');
        Artisan::call('db:seed');
        $this->info('Тестовые данные успешно заполнены');
    }
}
