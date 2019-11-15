<?php

use Base\TblentprdQuery as BaseTblentprdQuery;
use Propel\Runtime\Connection\ConnectionInterface;

/**
 * Skeleton subclass for performing query and update operations on the 'tblentprd' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class TblentprdQuery extends BaseTblentprdQuery
{
    public static function fndusrprd(int $cveusr, ConnectionInterface $connection = null){
        $usrprd = \TblentprdQuery::create()
            ->filterByUserid($cveusr)
            ->findOne($connection);

        if(is_null($usrprd))
            return false;

        return $usrprd;
    }
}
