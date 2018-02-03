<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {
        // return 'Male';
        $mystring = $text;
        $findme   = 'ครับ';
        $findme2 = 'ค่ะ';
        $pos = strpos($mystring, $findme);
        if ($pos !== false) {
            return 'Male';
        } else if(strpos($mystring, $findme2)) {
            return 'Female';
        }else
            return 'Unknown';
        
    }

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
        return 'Neutral';
    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
        $check = array('ไอ้', 'บ้า','/มึง/', '/ว่ะ/','/fuck/', '/แม่ง/', '/เลว/', '/ฟาย/', '/สัส/', '/สัด/', '/ฉิหาย/');
        foreach($check as $data){
            $pos = strpos($text, $data);
            if ($pos !== false) {
                return ["$data"];
            } 
        }
        return [''];
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        return ['TH', 'EN'];
    }
}
