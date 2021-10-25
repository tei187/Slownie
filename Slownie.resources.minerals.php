<?php
namespace tei187\Resources\PL;

const Minerals = [
    'units' => [
        'g' => [
            's1' => "gram",
            's2' => "gramy",
            's3' => "gramów",
            'f' => false,
            'd' => 3
        ],
        'kg' => [
            's1' => "kilogram",
            's2' => "kilogramy",
            's3' => "kilogramów",
            'f' => false,
            'minor' => [
                's1' => "gram",
                's2' => "gramy",
                's3' => "gramów",
                'f' => false,
                'd' => 3,
            ],
        ],
        't' => [
            's1' => "tona",
            's2' => "tony",
            's3' => "ton",
            'f' => true,
            'minor' => [
                's1' => "kilogram",
                's2' => "kilogramy",
                's3' => "kilogramów",
                'f' => false,
                'd' => 3,
                'minor' => [
                    's1' => "gram",
                    's2' => "gramy",
                    's3' => "gramów",
                    'f' => false,
                    'd' => 3,
                ],
            ],
        ],
        'oz' => [
            's1' => "uncja",
            's2' => "uncje",
            's3' => "uncji",
            'f' => true,
        ],
        'ozt' => [
            's1' => "uncja trojańska",
            's2' => "uncje trojańskie",
            's3' => "uncji trojańskich",
            'f' => true,
        ],
        'lb' => [
            's1' => "funt",
            's2' => "funty",
            's3' => "funtów",
            'f' => false,
            'minor' => [
                's1' => "uncja",
                's2' => "uncje",
                's3' => "uncji",
                'f' => true,
                'parts' => 16,
            ],
        ],
        'lbt' => [
            's1' => "funt trojański",
            's2' => "funty trojańskie",
            's3' => "funtów trojańskich",
            'f' => false,
            'minor' => [
                's1' => "uncja trojańska",
                's2' => "uncje trojańskie",
                's3' => "uncji trojańskich",
                'f' => true,
                'parts' => 12,
            ],
        ],
    ],
    'suffix' => [
        'xag' => "srebra",
        'xau' => "złota",
        'xpt' => "paladu",
        'xpd' => "platyny",
    ],
];

?>