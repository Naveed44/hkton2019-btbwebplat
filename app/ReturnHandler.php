<?php
/**
 * Created by PhpStorm.
 * User: Magnimus Software
 * Date: 21/08/2019
 * Time: 11:57 AM
 */

namespace App;


class ReturnHandler
{
    public static function rtrsccjsn($strmsg, $extkys = array()) { //Return Success Json
        $return =  array(
            'success' => true,
            'message' => $strmsg
        );

        if(!empty($extkys)) {
            $return += $extkys;
        }

        return json_encode($return);
    }

    public static function rtrerrjsn($strmsg = 'Ocurrió un error inesperado') {
        return json_encode(
            array(
                'success' => false,
                'message' => $strmsg
            )
        );
    }

    public static function rtrerrviw($errnmb, $strmsg = 'Ocurrió un error inesperado') {
        switch ($errnmb) {
            case 503: return view('errors.503')->with('error', $strmsg); break;
        }

        return false;
    }
}
