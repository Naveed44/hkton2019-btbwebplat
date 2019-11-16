<?php

use Base\Tblentbid as BaseTblentbid;

/**
 * Skeleton subclass for representing a row from the 'tblentbid' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Tblentbid extends BaseTblentbid
{
    public static function fndaucbid(int $cveauc) {
        $bidauc = \TblentbidQuery::create()
            ->useUsersQuery()
                ->withColumn('Name', 'Name')
            ->endUse()
            ->filterByIdnentauc($cveauc)
            ->find();

        return $bidauc;
    }

    public static function insentbid($ppini, $quant, $auct, $userid) {
        $entbid = new \Tblentbid();
        try{
            $entbid
                ->setUsersid($userid)
                ->setIdnentauc($auct)
                ->setDatissbid(date(DATE_ISO8601))
                ->setPrcunibid($ppini)
                ->setQununibid($quant)
                ->save();
        }catch(\Propel\Runtime\Exception\PropelException $e) {
            Log::debug($e);
            return false;
        };

        return $entbid;
    }

    public static function fnddplbid($userid, $cveauc) {
        $entbid = \TblentbidQuery::create()
            ->filterByIdnentauc($cveauc)
            ->filterByUsersid($userid)
            ->count();
        return $entbid;
    }
}
