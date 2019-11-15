<?php

use Base\Catentcls as BaseCatentcls;
use Illuminate\Support\Facades\Log;
use Propel\Runtime\Connection\ConnectionInterface;

/**
 * Skeleton subclass for representing a row from the 'catentcls' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Catentcls extends BaseCatentcls
{
    public static function insentcls(String $dsccls, String $timestamp, ConnectionInterface $connection = null){
        $entcls = new \Catentcls();
        try{
            $entcls
                ->setDscentcls($dsccls)
                ->setCreatedAt($timestamp)
                ->save($connection);
        } catch (\Propel\Runtime\Exception\PropelException $e) {
            Log::debug($e);
            return false;
        }

        return $entcls;
    }

    public static function fnoclsdsc(String $dsccls, ConnectionInterface $connection = null){
        $entcls = CatentclsQuery::create()
            ->filterByDscentcls($dsccls)
            ->findOne($connection);

        if(is_null($entcls))
            return false;

        return $entcls;
    }

    public static function delentcls(Catentcls $entcls, ConnectionInterface $connection = null) {
        try {
            $entcls->delete($connection);
        }catch (\Propel\Runtime\Exception\PropelException $e) {
            Log::debug($e);
            return false;
        }

        return true;
    }

}
