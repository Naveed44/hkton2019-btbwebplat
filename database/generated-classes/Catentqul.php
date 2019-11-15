<?php

use Base\Catentqul as BaseCatentqul;
use Illuminate\Support\Facades\Log;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Skeleton subclass for representing a row from the 'catentqul' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Catentqul extends BaseCatentqul
{
    public static function insentqul(String $dscqul, String  $timestamp, ConnectionInterface $connection = null){
        $entqul = new \Catentqul();
        try {
            $entqul
                ->setDscentqul($entqul)
                ->setCreatedAt($timestamp)
                ->save($connection);
        }catch (PropelException $e) {
            Log::debug($e);
            return false;
        }

        return $entqul;
    }

    public static function fnoquldsc(String $dscqul, ConnectionInterface $connection = null) {
        $entqul = CatentqulQuery::create()
            ->filterByDscentqul($dscqul)
            ->findOne($connection);

        if(is_null($entqul))
            return false;

        return $entqul;
    }

    public static function delentqul(Catentqul $entqul, ConnectionInterface $connection = null) {
        try {
            $entqul->delete($connection);
        } catch (PropelException $e) {
            Log::debug($e);
            return false;
        }
        return true;
    }
}
