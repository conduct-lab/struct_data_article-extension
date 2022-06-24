<?php namespace BehaviorLab\StructDataArticleExtension;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use BehaviorLab\StructDataArticleExtension\Author\AuthorModel;
use BehaviorLab\StructDataArticleExtension\Data\DataModel;
use BehaviorLab\StructDataArticleExtension\Publisher\PublisherModel;
use BehaviorLab\StructDataArticleExtension\Setting\Contract\SettingRepositoryInterface;
use BehaviorLab\StructDataArticleExtension\Setting\SettingRepository;
use Anomaly\Streams\Platform\Model\StructDataArticle\StructDataArticleSettingsEntryModel;
use BehaviorLab\StructDataArticleExtension\Setting\SettingModel;
use Illuminate\Routing\Router;

class StructDataArticleExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/struct_data/extensions/struct_data_article/edit/{id}' => 'BehaviorLab\StructDataArticleExtension\Http\Controller\Admin\SettingsController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //BehaviorLab\StructDataArticleExtension\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    BehaviorLab\StructDataArticleExtension\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //BehaviorLab\StructDataArticleExtension\Event\ExampleEvent::class => [
        //    BehaviorLab\StructDataArticleExtension\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => BehaviorLab\StructDataArticleExtension\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        StructDataArticleDataEntryModel::class => DataModel::class,
        StructDataArticleSettingsEntryModel::class => SettingModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        SettingRepositoryInterface::class => SettingRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}