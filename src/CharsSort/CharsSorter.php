<?php


namespace CharsSort;


final class CharsSorter
{
    /**
     * @var string
     */
    private $wordString;

    /**
     * @param string $wordString String where need to sort each word by alphabetical order.
     */
    public function __construct($wordString)
    {
        $this->wordString = $wordString;
    }

    /**
     * @return string
     */
    public function getWordString()
    {
        return $this->wordString;
    }

    /**
     * Change order by alphabet of each word in string
     * @return string|false
     * */
    public function orderString()
    {
        $this->wordString = trim($this->wordString);

        if(strlen($this->wordString) <= 0) return false;

        $temp = explode(' ', $this->wordString);
        $temp = array_map('trim', $temp);

        $temp = array_map(function (&$word) {
            $chars = mb_str_split($word, 1, 'utf-8');
            sort($chars);
            return join('', $chars);
        }, $temp);

        $this->wordString = join(' ', $temp);
        return $this->wordString;
    }

}