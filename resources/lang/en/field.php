<?php

return [
    'type' => [
        'name' => 'Type',
    ],
    'headline' => [
        'name' => 'Headline',
        'instructions' => 'The headline of the article. Headlines should not exceed 110 characters.' . "<br>" .
            '<i>If this is empty the title of the article will be used</i>'
    ],
    'image' => [
        'name' => 'Image',
    ],
    'author' => [
        'name' => 'Author',
    ],
    'available_authors' => [
        'name' => 'Available authors',
    ],
    'author_type' => [
        'name' => 'Type',
    ],
    'author_name' => [
        'name' => 'Name',
        'instructions' => 'only specify the name of the author. Don\'t add any other piece of information.' . "<br>" .
            'More specifically, don\'t add the following information:' . "<br>" .
            '- The name of the publisher. Instead, use the publisher property.' . "<br>" .
            '- The author\'s job title. Instead, use the appropriate property if you want to specify that information (jobTitle).' . "<br>" .
            '- Honorific prefix or suffix. Instead, use the appropriate property if you want to specify that information (honorificPrefix or honorificSuffix).' . "<br>" .
            '- Introductory words (for example, don\'t include words like "posted by").'
    ],
    'author_url' => [
        'name' => 'Url',
        'instructions' => 'A link to a web page that uniquely identifies the author of the article. For example, the author\'s social media page, an about me page, or a bio page.'
    ],
    'author_job_title' => [
        'name' => 'Job title',
        'instructions' => ''
    ],
    'publisher' => [
        'name' => 'Publisher',
    ],
    'available_publishers' => [
        'name' => 'Available publisher',
    ],
    'publisher_type' => [
        'name' => 'Type',
    ],
    'publisher_name' => [
        'name' => 'Name',
    ],
    'publisher_logo' => [
        'name' => 'Logo',
    ],
    'date_published' => [
        'name' => 'Published date',
        'instructions' => 'The date and time the article was first published.' . "<br>" .
            '<b>Best practices:</b>' . "<br>" .
            '- The date shouldn\'t change over time.' . "<br>" .
            '- We recommend including the hour information in addition to the day in the timestamp.' . "<br>" .
            '- The value for dateModified should be more recent than the value for datePublished.'
    ],
    'date_modified' => [
        'name' => 'Modified date',
        'instructions' => 'The date and time the article was most recently modified.'
    ],
];
