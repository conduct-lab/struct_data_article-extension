<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use ConductLab\StructDataArticleExtension\StructDataArticleExtension;
use ConductLab\StructDataModule\Extension\ExtensionModel;

class BehaviorLabExtensionStructDataArticleCreateSettingsStream extends Migration
{

    /**
     * This migration creates the stream.
     * It should be deleted on rollback.
     *
     * @var bool
     */
    protected $delete = true;

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'settings',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
//        'type' => [
//            'translatable' => false,
//            'required' => true,
//        ],
//        'headline' => [
//            'translatable' => true,
//            'required' => true,
//        ],
//        'image' => [
//            'translatable' => false,
//            'required' => true,
//        ],
//        'date_published' => [
//            'translatable' => true,
//            'required' => true,
//        ],
//        'date_modified' => [
//            'translatable' => true,
//            'required' => true,
//        ],
    ];

    public function up()
    {
        $extension = app(StructDataArticleExtension::class);
        ExtensionModel::updateOrCreate(
            ['provider' => $extension->getProvides()]
        );
    }

    public function down()
    {
        $extension = app(StructDataArticleExtension::class);
        $installedExtension = ExtensionModel::where('provider', '=', $extension->getProvides())->first();
        if ($installedExtension) {
            $installedExtension->delete();
        }
    }

}
