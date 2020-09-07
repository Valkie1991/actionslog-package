<?php namespace henri\actionslog\Console;

use Illuminate\Console\Command;

class Install extends Command {
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'install-Model-with-log';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Automatisch activitie log to models';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle() {
		// $this->call('vendor:publish', [
        //     '--tag' => 'config'
        // ]);
        // $this->info('Download the config file (config/medialibrary.php) to your project');

        // $this->call('migrate');
        // $this->call('db:seed', [
        //     '--class' => 'Idesign\\MediaLibrary\\Database\\Seeds\\MediaRoutesSeeder'
        // ]);
        // $this->call('route:clear');
        // $this->call('config:clear');
	}
}
