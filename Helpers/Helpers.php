<?php

namespace Helpers;

use Db\DbPdo;

class Helpers
{
    public function __construct()
    {

    }

    public static function get_pr($data){
        print_r("<pre>\n");
        print_r($data);
        print_r("</pre>\n");
    }

    public static function parameterOrNull($ColumnName,$ParameterName,$Separator)
    {
        return "({$ColumnName} {$Separator} :{$ParameterName} OR :{$ParameterName} IS NULL)";
    }

    public static function getTsNumber($table = 'logic_inputs'){

        $db = DbPdo::getInstance();

        $Select = 'SELECT MAX("tsNumber") FROM interface.'.$table.';';

        $SelectResults = $db->queryFetched($Select);

        return $SelectResults[0]['max'];

    }

}