<?php

class LanguageEng extends LanguageAbstractInterface
{
    public function init(): array
    {
        return [
            // A a
            65 => [
                'begin' => [65],
                'middle' => [97],
                'end' => [97],
            ],
            // B b
            66 => [
                'begin' => [66],
                'middle' => [98],
                'end' => [98],
            ]
        ];
    }


}