<?php

class Anagram {


    public function anagramFor($word) {
        $key = $this->keyFor($word);
        $words = $this->anagramForKey($key);
        $result = array_diff($words, array($word));
        sort($result);
        return $result;
    }

    private function keyFor($word) {
        $result = str_split(trim($word));
        sort($result);
        return join('', $result);
    }
    
    private function anagramForKey($inputKey) {
        $dictWordsWithNewLines = file("/usr/share/dict/words");
        $result = array();
        foreach ($dictWordsWithNewLines as $word) {
            $key = $this->keyFor($word);
            if ($key == $inputKey)
                $result[] = trim($word);
        }
        return $result;
    }
}

?>
