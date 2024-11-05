<?php
$path_dir = 'countries_by_zone';
$zones = [
    [
        'label' => [
            'en' => 'Europe',
            'ru' => 'Европа',
        ],
        'file' => $path_dir . '/europe.php',
    ],
    [
        'label' => [
            'en' => 'North America',
            'ru' => 'Северная Америка',
        ],
        'file' => $path_dir . '/north_america.php',
    ],
    [
        'label' => [
            'en' => 'Asia',
            'ru' => 'Азия',
        ],
        'file' => $path_dir . '/asia.php',
    ],
    [
        'label' => [
            'en' => 'Africa',
            'ru' => 'Африка',
        ],
        'file' => $path_dir . '/africa.php',
    ],
    [
        'label' => [
            'en' => 'Oceania',
            'ru' => 'Океания',
        ],
        'file' => $path_dir . '/oceania.php',
    ],
    [
        'label' => [
            'en' => 'South America',
            'ru' => 'Южная Америка',
        ],
        'file' => $path_dir . '/south_america.php',
    ],
    [
        'label' => [
            'en' => 'Europe (non-EU)',
            'ru' => 'Европа (не ЕС)',
        ],
        'file' => $path_dir . '/europe_non_EU.php',
    ],
    [
        'label' => [
            'en' => 'Central America/Antilla',
            'ru' => 'Центральная Америка/Антильские острова',
        ],
        'file' => $path_dir . '/central_america_antilla.php',
    ],
];
foreach ($zones as &$zone) {
    /** @noinspection PhpIncludeInspection */
    $country_file['countries'] = include(__DIR__ . '/' . $zone['file']);
}
unset($zone);
return $zones;