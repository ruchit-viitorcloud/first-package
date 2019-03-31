<?php

namespace RuchitViitorCloud\FirstPackage;

Class FirstPackage
{
    /**
     * @var array
     */
    protected  $quotes = [
        'No guts, no story',
        'My life is my message'
    ];

    /**
     * FirstPackage constructor.
     * @param array|null $quotes
     */
    public function __construct(array $quotes = null)
    {
        if($quotes) {
            $this->quotes = $quotes;
        }
    }

    /**
     * @return mixed
     */
    public function getRandomQuotes()
    {
        return $this->quotes[array_rand($this->quotes)];
    }
}