<?php

require_once 'const.php';

class LanguageArab extends LanguageAbstractInterface
{
    public function init(): array
    {
        return [
            // alif
            1575 => [
                SEPARATE => [1575],
                BEGIN => [1575],
                MIDDLE => [1600, 1575],
                END => [1600, 1575],
            ],
            // ba
            1576 => [
                SEPARATE => [1576],
                BEGIN => [1600, 1576],
                MIDDLE => [1600, 1576, 1600],
                END => [1576, 1600],
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

    public function getHtmlLetters(array $arr): array
    {
        $res = [];

        foreach ($arr as $separateLetter => $positions) {
            $res[$separateLetter] = $positions;
            foreach ($positions as $position => $code) {
                $res[$separateLetter][$position] = $this->toStr($code);
            }
        }

        return $res;
    }

}