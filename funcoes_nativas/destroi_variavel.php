<?php
    $idade = 25;
    unset($idade);

    var_dump(isset($idade)); // A variável $idade não existe mais, então será exibido NULL     