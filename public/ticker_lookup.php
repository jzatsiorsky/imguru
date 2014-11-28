<?php

    require(__DIR__ . "/../includes/config.php");

    // numerically indexed array of messages matching sport
    $results = [];

    $results = query("SELECT * FROM games LIMIT 8");

    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($results, JSON_PRETTY_PRINT));

?>
