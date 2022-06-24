<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class BehaviorLabExtensionStructDataArticleCreateStructuredDataStream
 *
 * @link   https://behaviorlab.io/
 * @author Behavior ApS <support@behaviorlab.io>
 * @author Claus Hjort Bube <chb@b-cph.com>
 */
class BehaviorLabExtensionStructDataArticleCreateDataStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'data',
        'title_column' => 'type',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'type' => [
            'translatable' => false,
            'required' => true,
        ],
        'headline' => [
            'translatable' => true,
            'required' => false,
        ],
        'image' => [
            'translatable' => false,
            'required' => true,
        ],
        'author' => [
            'translatable' => false,
            'required' => true,
        ],
        'publisher' => [
            'translatable' => false,
            'required' => false,
        ],
        'date_published' => [
            'translatable' => true,
            'required' => false,
        ],
        'date_modified' => [
            'translatable' => true,
            'required' => false,
        ],
    ];

}
