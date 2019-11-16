<?php

use Base\Tblentprd as BaseTblentprd;
use Illuminate\Support\Facades\Log;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Skeleton subclass for representing a row from the 'tblentprd' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Tblentprd extends BaseTblentprd
{
    public static function insentprd(int $idnentcls, int $idnentqul, int $idnentuni, int $userid, String $name, String $quantity, String $desc, String $timestamp, ConnectionInterface $connection = null) {
        $entprd = new \Tblentprd();
        try {
            $entprd
                ->setIdnentcls($idnentcls)
                ->setIdnentqul($idnentqul)
                ->setIdnentuni($idnentuni)
                ->setUserid($userid)
                ->setNamentprd($name)
                ->setQunentprd($quantity)
                ->setDscentprd($desc)
                ->setCreatedAt($timestamp)
                ->save($connection);
        }catch (PropelException $e) {
            Log::debug($e);
            return false;
        }

        return $entprd;
    }

    public static function fnoprdnam(String $name, ConnectionInterface $connection = null) {
        $entprd = \TblentprdQuery::create()
            ->filterByNamentprd($name)
            ->findOne($connection);

        if(is_null($entprd))
            return false;

        return $entprd;
    }

    public static function fndallprd(ConnectionInterface $connection = null){
        $allprd = \TblentprdQuery::create()
            ->find($connection);
        $allprd = $allprd->toArray();
        if(empty($allprd))
            return false;

        return $allprd;
    }

    public static function fndqltprd(String $qltfilter ,ConnectionInterface $connection = null){
        $qltprd = \TblentprdQuery::create()
            ->filterByIdnentqul($qltfilter)
            ->find($connection);
        $qltprd = $qltprd->toArray();

        if(empty($qltprd))
            return false;

        return $qltprd;
    }

    public static function fndclsprd(String $clsfilter ,ConnectionInterface $connection = null){
        $clsprd = \TblentprdQuery::create()
            ->filterByIdnentcls($clsfilter)
            ->find($connection);
        $clsprd = $clsprd->toArray();

        if(empty($clsprd))
            return false;

        return $clsprd;
    }

    public static function fndprdbyuserid(String $id ,ConnectionInterface $connection = null){
        $uidprd = \TblentprdQuery::create()
            ->findByUserid($id);
        $uidprd = $uidprd->toArray();

        if(empty($uidprd)||is_null($uidprd))
            return false;

        return $uidprd;
    }

    public static function fnoprdbyid($id){
        $idprd = \TblentprdQuery::create()
            ->findOneByIdnentprd($id);
        $idprd = $idprd->toArray();

        if(empty($idprd)||is_null($idprd))
            return false;

        return $idprd;
    }

}
