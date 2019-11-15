<?php

use Base\Catentuni as BaseCatentuni;
use Illuminate\Support\Facades\Log;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Skeleton subclass for representing a row from the 'catentuni' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Catentuni extends BaseCatentuni
{
    public static function insentuni(String $dscuni, String  $timestamp, ConnectionInterface $connection = null) {
        $entuni = new \Catentuni();
        try {
            $entuni
                ->setDscentuni($entuni)
                ->setCreatedAt($timestamp)
                ->save($connection);
        }catch (PropelException $e) {
            Log::debug($e);
            return false;
        }

        return $entuni;

    }

    public static function fnounidsc(String $dscuni, ConnectionInterface $connection = null) {
        $entuni = CatentuniQuery::create()
            ->filterByDscentuni($dscuni)
            ->findOne($connection);

        if(is_null($entuni))
            return false;

        return $entuni;
    }
}
