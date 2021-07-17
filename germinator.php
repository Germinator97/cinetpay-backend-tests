<?php

    // Function to search for the occurrence of a word in a table of detailed words
    function countWorld($book, $word) {
        $count = 0; // Initialisation : 1

        foreach ($book as $data) { // Affectation : 1 * n => n
            if ($data == $word) { // Comparaison : 1 * n => n
                $count++; // Affectation + Addition : 2 * n => 2n
            }
        } // (4n)

        if ($count == 0) { // Comparaison : 1
            $count = -1; // Affectation : 1
        } // (2)

        return $count; // Retour : 1
    } // Complexité : 4(n + 1) => O(n)

    // Function to search for the occurrence of each word component
    function countAllChars($word) {
        $data = array(); // Initialisation : 1
        for ($i = 0; $i < strlen($word); $i++) { // Initialisation, Comparaison, Incrémentation : 1, n + 1, n => n + 1
            $data[$i] = $word[$i]; // Affectation : 1 * n => n
        } // 2n 

        $result = array(); // Initialisation : 1
        foreach ($data as $val) { // Affectation : 1 * n => n
            $result[$val] = $val . countWorld($data, $val); // Affectation + Concaténation : (1 + 4n + 4) * n => 4n*n + 5n
        } // (4n*n + 6n)

        return $result; // Retour : 1
    } // Complexité : 4n*n + 10n => O(n*n)

    // Tests functions
    var_dump(countWorld(['le', 'la', 'lu'], 'le'));
    var_dump(countAllChars('anticonstitutionnellement'));
    
?>