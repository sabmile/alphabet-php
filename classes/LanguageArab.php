<?php

class LanguageArab extends LanguageAbstractInterface
{
    public function init(): array
    {
        return [
            // alif
            1575 => [
                'begin' => [1575],
                'middle' => [1600, 1575],
                'end' => [1600, 1575],
            ],
            // ba
            1576 => [
                'begin' => [1600, 1576],
                'middle' => [1600, 1576, 1600],
                'end' => [1576, 1600],
            ]
        ];
    }

    private function getSeparateLetter(array $arr, int $letterNum, string $position): int
    {
        if (is_null(array_keys($arr)[$letterNum - 1])) {
            return 0;
        }
        return array_keys($arr)[$letterNum - 1];
    }

    public function getLetter(array $arr, int $letterNum, string $position): string
    {
        $sepLetter = $this->getSeparateLetter($arr, $letterNum, $position);
        if ($sepLetter !== 0) {
            return $this->toStr($arr[$sepLetter][$position]);
        }
    }

    private function toStr(array $arr): string
    {
        $sepBegin = '&#';
        $sepEnd = ';';
        $res = '';

        foreach ($arr as $code) {
            $res .= $sepBegin . $code . $sepEnd;
        }

        return $res;
    }

}