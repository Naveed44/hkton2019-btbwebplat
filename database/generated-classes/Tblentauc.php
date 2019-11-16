<?php

use Base\Tblentauc as BaseTblentauc;
use Propel\Runtime\Connection\ConnectionInterface;

/**
 * Skeleton subclass for representing a row from the 'tblentauc' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Tblentauc extends BaseTblentauc
{
    public static function fndactauc(ConnectionInterface $connection = null) {
        $timestamp = date(DATE_ISO8601);
        $actauc = \TblentaucQuery::create()
            //->filterByDatendauc($timestamp, \Propel\Runtime\ActiveQuery\Criteria::GREATER_EQUAL)
            ->useTblentprdQuery()
                ->withColumn('Qunentprd', 'Qunentprd')
                ->withColumn('Namentprd', 'Namentprd')
                ->withColumn('Dscentprd', 'Dscentprd')
                ->useCatentclsQuery()
                    ->withColumn('Dscentcls', 'Dscentcls')
                ->endUse()
                ->useCatentuniQuery()
                    ->withColumn('Dscentuni', 'Dscentuni')
                ->endUse()
                ->useCatentqulQuery()
                    ->withColumn('Dscentqul', 'Dscentqul')
                ->endUse()
            ->endUse()
            ->find($connection);

        return $actauc;
    }

    public static function fndtxtauc(String $txt, ConnectionInterface $connection = null) {
        $timestamp = date(DATE_ISO8601);
        $actauc = \TblentaucQuery::create()
            //->filterByDatendauc($timestamp, \Propel\Runtime\ActiveQuery\Criteria::GREATER_EQUAL)
            ->useTblentprdQuery()
                ->filterByNamentprd($txt)
                ->withColumn('Qunentprd', 'Qunentprd')
                ->withColumn('Namentprd', 'Namentprd')
                ->withColumn('Dscentprd', 'Dscentprd')
                ->useCatentclsQuery()
                    ->withColumn('Dscentcls', 'Dscentcls')
                ->endUse()
                ->useCatentuniQuery()
                    ->withColumn('Dscentuni', 'Dscentuni')
                ->endUse()
                ->useCatentqulQuery()
                    ->withColumn('Dscentqul', 'Dscentqul')
                ->endUse()
            ->endUse()
            ->find($connection);

        return $actauc;
    }

    public static function fnocveauc(int $cveauc) {
        $entauc = \TblentaucQuery::create()->useTblentprdQuery()
            ->withColumn('Idnentauc', 'Idnentauc')
            ->withColumn('Qunentprd', 'Qunentprd')
            ->withColumn('Namentprd', 'Namentprd')
            ->withColumn('Dscentprd', 'Dscentprd')
            ->useCatentclsQuery()
            ->withColumn('Dscentcls', 'Dscentcls')
            ->endUse()
            ->useCatentuniQuery()
            ->withColumn('Dscentuni', 'Dscentuni')
            ->endUse()
            ->useCatentqulQuery()
            ->withColumn('Dscentqul', 'Dscentqul')
            ->endUse()
            ->endUse()
            ->filterByIdnentauc($cveauc)
            ->findOne();

        Log::debug($cveauc);
        if(is_null($cveauc))
            return false;
        return$entauc;
    }
}
