<?php

use Base\Users as BaseUsers;
use Illuminate\Support\Facades\Log;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Skeleton subclass for representing a row from the 'users' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Users extends BaseUsers
{
    public static function insentusr(String $name, String $rfc, String $representante, String $correo, String $telefono, String  $direccion, String $timestamp, ConnectionInterface $connection = null) {
        $entusr = new Users();
        try {
            //TODO Completar campos
            $entusr
                ->setName($name)
                ->setEmail($correo)
                ->setCreatedAt($timestamp)
                ->save($connection);
        }catch (PropelException $e) {
            Log::debug($e);
            return false;
        }
        return $entusr;
    }

    public static function fnousrnam(String $name, ConnectionInterface $connection = null) {
        $entusr = \UsersQuery::create()
            ->filterByName($name)
            ->findOne($connection);

        if(is_null($entusr))
            return false;

        return $entusr;
    }
}
