<?php

    // Function to search for the occurrence of a word in a table of detailed words
    function countWorld($book, $word) {
        $text = '';

        foreach ($book as $data) {
            $text .= $data . ' ';
        }

        return substr_count($text, $data);
    }

    // Function to search for the occurrence of each word component
    function countAllWorld($word) {
        $table = array();

        foreach (count_chars(strtolower($word), 1) as $i => $val) {
            array_push($table, chr($i) . $val);
        }

        return $table;
    }

    // Tests functions
    var_dump(countWorld(['le', 'la', 'lu'], 'le'));
    var_dump(countAllWorld('anticonstitutionnellement'));
    
?>