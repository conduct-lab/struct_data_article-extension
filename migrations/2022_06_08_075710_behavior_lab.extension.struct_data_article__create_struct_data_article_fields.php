<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class BehaviorLabExtensionStructDataArticleCreateStructDataArticleFields
 *
 * @link   https://behaviorlab.io/
 * @author Behavior ApS <support@behaviorlab.io>
 * @author Claus Hjort Bube <chb@b-cph.com>
 */
class BehaviorLabExtensionStructDataArticleCreateStructDataArticleFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'type' => [
            'type' => 'anomaly.field_type.select',
            'config' => [
                'mode' => 'dropdown',
                "handler" => \BehaviorLab\StructDataArticleExtension\Data\Support\TypeSelectOptions::class
            ],
        ],
        'headline' => 'anomaly.field_type.text',
        'image' => [
            'type' => 'anomaly.field_type.file',
            'config' => [],
        ],
        'author' => [
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'mode' => 'lookup',
                'related' => \BehaviorLab\AuthorsModule\Author\AuthorModel::class,
            ],
        ],
        'publisher' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'mode' => 'lookup',
                'related' => \BehaviorLab\AuthorsModule\Publisher\PublisherModel::class,
            ],
        ],
        'date_published' => [
            'type' => 'anomaly.field_type.datetime',
            'config' => [
                "mode"          => "datetime",
                "date_format"   => "Y-m-d",
                "year_range"    => "-50:+1",
                "time_format"   => "H:i:sp",
                "timezone"      => null,
                "picker"        => true,
            ],
        ],
        'date_modified' => [
            'type' => 'anomaly.field_type.datetime',
            'config' => [
                "mode"          => "datetime",
                "date_format"   => "Y-m-d",
                "year_range"    => "-50:+1",
                "time_format"   => "H:i:sp",
                "timezone"      => null,
                "picker"        => true,
            ],
        ],
    ];

}
