<?php

class Letter
{
    private LetterAbstractInterface $letter;
    protected int $alphabetNum;
    protected int $htmlCode;
    protected int $unicode;

    public function __construct()
    {
    }

    public function get(int $letterNum): string
    {

    }
}