<?php

class LanguageKZ extends LanguageAbstractInterface
{
    public function init(): array
    {
        return [
            // Ә ә
            1240 => [
                'begin' => [1240],
                'middle' => [1241],
                'end' => [1241],
            ],
            // Ұ ұ
            1200 => [
                'begin' => [1200],
                'middle' => [1201],
                'end' => [1201],
            ]
        ];
    }
}

