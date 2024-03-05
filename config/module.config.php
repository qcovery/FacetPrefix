<?php
namespace FacetPrefix\Module\Configuration;

$config = [
    'service_manager' => [
        'allow_override' => true,
        'aliases' => [
            'search2' => 'FacetPrefix\Search\Search2\Params',
            'solr' => 'FacetPrefix\Search\Solr\Params',
            'VuFind\Search\Solr\Params' => 'FacetPrefix\Search\Solr\Params',
        ],
        'factories' => [
            'FacetPrefix\Search\Search2\Params' => 'FacetPrefix\Search\Search2\ParamsFactory',
            'FacetPrefix\Search\Solr\Params' => 'FacetPrefix\Search\Solr\ParamsFactory',
        ],
    ],
];

return $config;

