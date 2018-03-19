<?php
if(!function_exists('getRawSqlQuery')) {
    function getRawSqlQuery($builder) {
        foreach ($builder->bindings as $i => $binding) {
            if ($binding instanceof \DateTime) {
                $builder->bindings[ $i ] = $binding->format('\'Y-m-d H:i:s\'');
            } else {
                if (is_string($binding)) {
                    $builder->bindings[ $i ] = "'$binding'";
                }
            }
        }
        // Insert bindings into query
        $boundSql = str_replace(['%', '?'], ['%%', '%s'], $builder->sql);
        $boundSql = vsprintf($boundSql, $builder->bindings);

        Log::debug(
            "TIME - {$query->time}ms\n" .
            "                                   UNBOUND QUERY: {$builder->sql};\n" .
            "                                   BOUND QUERY: $boundSql;"
        );

        return $query;
    }
}