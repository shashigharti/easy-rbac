<?php

namespace Robustit\EasyRBAC\Console\Commands;

use Illuminate\Console\Command;


/**
 * Class MigrateAll
 * @package Robustit\EasyRBAC\Console\Commands
 */
class Migrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'easy-rbac:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It executes all the migration  files';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("\n=============================================");
        $this->info("== Migrating");
        $this->info("=============================================");

        $executeMigrations = $this->confirm("Would you like to execute your migrations? [y|N]", false);
        if ($executeMigrations) {
            $this->info("Executing migration");
            $this->call("migrate", ["--path" => "packages/robustit/easy-rbac/database/migrations"]);
        }
    }
}
