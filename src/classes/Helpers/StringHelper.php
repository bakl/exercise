<?php

namespace Exercise\Helpers;

/**
 * User: sergeymartyanov
 * Date: 24.09.15
 * Time: 18:12
 */
/**
 * Class StringHelper
 * @package Exercise\Helpers
 */
class StringHelper
{

    /**
     * Return reverted string with excluded vowels
     *
     * @param $string
     * @return string
     */
    function revertAndExcludeVowels($string){
        $chars = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);
        $result = "";
        for($i = count($chars) - 1; $i>=0; $i--){
            if(!preg_match("/[AaEeIiOoUuУуЕеЫыАаОоЭэЁёЯяИиЮю]/u", $chars[$i])){
                $result .= $chars[$i];
            }
        }
        return $result;
    }
}