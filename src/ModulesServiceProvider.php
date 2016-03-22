<?php
namespace Sroutier\L51ESKModules;

use Illuminate\Support\ServiceProvider;

class ModulesServiceProvider extends ServiceProvider
{
	/**
	 * @var bool $defer Indicates if loading of the provider is deferred.
	 */
	protected $defer = false;

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../config/modules.php' => config_path('modules.php'),
		], 'config');

		$modules = $this->app['modules'];

		$modules->register();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__.'/../config/modules.php', 'modules'
		);

		$this->app->register('Sroutier\L51ESKModules\Providers\RepositoryServiceProvider');

		$this->app->register('Sroutier\L51ESKModules\Providers\MigrationServiceProvider');

		$this->app->register('Sroutier\L51ESKModules\Providers\ConsoleServiceProvider');

		$this->app->register('Sroutier\L51ESKModules\Providers\GeneratorServiceProvider');

		$this->app->singleton('modules', function ($app) {
			$repository = $app->make('Sroutier\L51ESKModules\Contracts\RepositoryInterface');

			return new \Sroutier\L51ESKModules\Modules($app, $repository);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return string
	 */
	public function provides()
	{
		return ['modules'];
	}
}
