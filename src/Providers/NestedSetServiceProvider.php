<?php

declare(strict_types=1);

namespace SamJurriaans\NestedSetLaravel\Providers;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider;

final class NestedSetServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        AboutCommand::add('My Package', fn () => ['Version' => '1.0.0']);

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
