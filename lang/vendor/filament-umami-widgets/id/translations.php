<?php

return [
    'filter' => [
        'title' => 'Filter Tanggal untuk Umami',
        'description' => 'Filter yang diatur akan digunakan untuk analisis di bawah ini.',
        'select_range' => 'Pilih rentang filter',
        'date_format' => 'DD-MM-YYYY',
    ],
    'widget' => [
        /* TERJEMAHAN UMUM */
        'global' => [
            'time_range_days' => ' (:value hari)| (:value hari)',
            'headers' => [
                'count' => 'Pengunjung',
            ],
            'description_postfix' => ' dalam rentang yang dipilih',
            'description_prefix' => '',
            'limit' => ':count hasil teratas',
            'limit_show_all' => 'semua hasil',
            'date_format' => 'd-m-Y',
        ],

        /* STATISTIK */
        'live_visitors' => [
            'label' => 'Pengunjung Langsung',
            'description' => 'Pengunjung langsung di halaman',
            'description_postfix' => '',
        ],
        'pageviews' => [
            'label' => 'Tampilan Halaman',
            'description' => 'Hit halaman',
        ],
        'visitors' => [
            'label' => 'Pengunjung Unik',
            'description' => 'Jumlah pengunjung unik',
        ],
        'visits' => [
            'label' => 'Kunjungan',
            'description' => 'Jumlah sesi',
        ],
        'bounces' => [
            'label' => 'Bounces',
            'description' => 'Jumlah pengunjung yang hanya mengunjungi satu halaman',
        ],
        'total_time' => [
            'label' => 'Waktu yang dihabiskan di situs',
            'description' => 'Waktu yang dihabiskan di situs',
        ],

        /* METRIK */
        'metrics_referrer' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Perujuk',
                'count' => 'Tampilan',
            ],
            'description' => 'Perujuk',
            'empty_metric' => 'tidak diketahui',
        ],
        'metrics_url' => [
            'heading' => '',
            'headers' => [
                'metric' => 'URL halaman yang dikunjungi',
                'count' => 'Tampilan',
            ],
            'description' => 'URL halaman yang dikunjungi',
        ],
        'metrics_title' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Judul halaman yang dikunjungi',
            ],
            'description' => 'Judul halaman yang dikunjungi',
        ],
        'metrics_browser' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Browser yang digunakan',
            ],
            'description' => 'Browser yang digunakan',
        ],
        'metrics_os' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Sistem operasi yang digunakan',
            ],
            'description' => 'Sistem operasi yang digunakan',
        ],
        'metrics_device' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Perangkat yang digunakan',
            ],
            'description' => 'Perangkat yang digunakan',
        ],
        'metrics_country' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Negara',
            ],
            'description' => 'Negara',
        ],
        'metrics_region' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Wilayah',
                'country' => 'Negara',
            ],
            'description' => 'Wilayah',
            'empty_metric' => 'tidak diketahui',
        ],
        'metrics_city' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Kota',
                'country' => 'Negara',
            ],
            'description' => 'Kota',
            'empty_metric' => 'tidak diketahui',
        ],
        'metrics_language' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Bahasa',
            ],
            'description' => 'Bahasa',
        ],
        'metrics_screen' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Resolusi Layar',
            ],
            'description' => 'Resolusi Layar',
        ],
        'metrics_event' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Peristiwa',
            ],
            'description' => 'Peristiwa',
        ],
        'metrics_query' => [
            'heading' => '',
            'headers' => [
                'metric' => 'Query string',
            ],
            'description' => 'Query string',
        ],

        // GRUP METRIK
        'metrics_geo' => [
            'heading' => 'Geo',
            'description' => 'Informasi geografis',
            'options' => [
                'country' => 'Negara',
                'region' => 'Wilayah',
                'city' => 'Kota',
            ],
        ],
        'metrics_pages' => [
            'heading' => 'Halaman',
            'description' => 'Halaman yang dikunjungi',
            'options' => [
                'url' => 'URL',
                'title' => 'Judul',
            ],
        ],
        'metrics_client_info' => [
            'heading' => 'Info Klien',
            'description' => 'Informasi klien',
            'options' => [
                'browser' => 'Browser',
                'os' => 'OS',
                'device' => 'Perangkat',
                'screen' => 'Layar',
                'language' => 'Bahasa',
            ],
        ],

        // GRAFIK
        'chart_pageviews' => [
            'heading' => 'Tampilan halaman (7 hari terakhir)',
            'description' => '',
            'dataset_label' => 'Tampilan halaman',
        ],
        'chart_sessions' => [
            'heading' => 'Sesi (7 hari terakhir)',
            'description' => '',
            'dataset_label' => 'Sesi',
        ],
        'chart_events' => [
            'heading' => 'Peristiwa',
            'description' => '',
            'dataset_label' => 'Peristiwa',
        ],
    ],
];
