<?php

abstract class LanguageAbstractInterface
{
    abstract public function init();
    abstract public function getLetter(array $arr, int $letterNum, string $position): string;
}