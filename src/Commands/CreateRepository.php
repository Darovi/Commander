<?php

namespace Darovi\Commander\Commands;

use Illuminate\Console\Command;

class CreateRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new repository class';

    /**
     * Create a new command instance.
     *
     * @return void
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
        $name = $this->argument('name');
        $fullPath = 'App/Repositories/';

        $stub = file_get_contents($this->getStub());

        $stub = $this->replaceNameSpace($stub, $this->getNamespace());

        $stub = $this->replaceClassName($stub, $name);

        $this->makeRepositoryFile($stub, $name, $fullPath);
    }

    /**
     * Creates the file.
     */
    public function makeRepositoryFile($stub, $name, $fullPath)
    {
        if (!is_dir($fullPath)) {
            // dir doesn't exist, make it
            mkdir($fullPath);
        }
        file_put_contents($fullPath.$name.'.php', $stub);
    }

    /**
     * Replaces the class name sent with the command.
     */
    public function replaceClassName($stub, $name)
    {
        return str_replace('{{class}}', $name, $stub);
    }

    /**
     * Replaces the namespace with the default namespace.
     */
    public function replaceNameSpace($stub, $namespace)
    {
        return str_replace('{{repositoryNamespace}}', $namespace, $stub);
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/../stubs/repository.stub';
    }

    /**
     * Get the namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getNamespace()
    {
        return 'App\Repositories';
    }
}
