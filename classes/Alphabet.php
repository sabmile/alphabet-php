<?php

class Alphabet
{
    private array $letters;
    private LanguageAbstractInterface $language;
    public function __construct(LanguageAbstractInterface $language)
    {
        $this->language = $language;
        $this->letters = $language->init();
    }

    public function getCodeLetters(): array
    {
        return $this->letters;
    }

    public function getHtmlLetters(): array
    {
        return $this->language->getHtmlLetters($this->letters);
    }

    public function getLetter(int $letterNum, string $position): string
    {
         return $this->language->getLetter($this->letters, $letterNum, $position);
    }


}