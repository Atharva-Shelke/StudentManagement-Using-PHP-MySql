<?php

function getQuery($name)
{
    static $queries = null;

    if ($queries === null) {
        $content = file_get_contents("SQLqueries.sql");

        preg_match_all(
            '/-- name:\s*(.*?)\n(.*?)(?=(-- name:|\z))/s',
            $content,
            $matches,
            PREG_SET_ORDER
        );

        $queries = [];

        foreach ($matches as $match) {
            $queries[trim($match[1])] = trim($match[2]);
        }
    }

    return $queries[$name] ?? "";
}
?>