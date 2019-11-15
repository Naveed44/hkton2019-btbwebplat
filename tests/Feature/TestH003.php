<?php

namespace Tests\Feature;

use App\TransactionHandler;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TestH003 extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_insert_new_clasification()
    {
        $trncnn = TransactionHandler::begin();
        $entcls = \Catentcls::fnoclsdsc('Leguminosa', $trncnn);
        self::assertNotFalse(isset($entcls));

        if(!isset($entcls)) {
            $del = \Catentcls::delentcls($entcls, $trncnn);
            self::assertTrue($del);
        }

        $dsccls = "Leguminosa";
        $timestamp = date(DATE_ISO8601);
        $ins = \Catentcls::insentcls($dsccls, $timestamp, $trncnn);
        $this->assertNotFalse($ins);
        TransactionHandler::commit($trncnn);
    }

    public function test_insert_new_quality() {
        $trncnn = TransactionHandler::begin();
        $entqul = \Catentqul::fnoquldsc('Primera', $trncnn);
        self::assertNotFalse(isset($entqul));

        if(!isset($entqul)) {
            $del = \Catentqul::delentqul($entqul, $trncnn);
            self::assertTrue($del);
        }

        $dscqul = "Primera";
        $timestamp = date(DATE_ISO8601);
        $ins = \Catentqul::insentqul($dscqul, $timestamp, $trncnn);
        $this->assertNotFalse($ins);
        TransactionHandler::commit($trncnn);
    }

    public function test_insert_new_unit(){
        $trncnn = TransactionHandler::begin();
        $dscuni = "Kilogramo";
        $timestamp = date(DATE_ISO8601);
        $ins = \Catentuni::insentuni($dscuni, $timestamp, $trncnn);
        $this->assertNotFalse($ins);
    }

    public function test_insert_new_cooperative(){
        $trncnn = TransactionHandler::begin();
        $name = 'Sociedad Cooperativa Unión del Campo S.R.L.';
        $rfc = 'SOCU191113345';
        $representante = 'Claudio Catano';
        $correo = 'correo@correo.com';
        $telefono = '6181233212';
        $direccion = 'Calle Falsa 123';
        $timestamp = date(DATE_ISO8601);

        $ins = \Users::insentusr($name, $rfc, $representante, $correo, $telefono, $direccion, $timestamp, $trncnn);
        self::assertNotFalse($ins);
    }

    public function test_insert_new_product(){
        $trncnn = TransactionHandler::begin();
        $entcls = \Catentcls::fnoclsdsc('Leguminosa', $trncnn);
        self::assertTrue(isset($entcls));
        $entqul = \Catentqul::fnoquldsc('Primera', $trncnn);
        self::assertTrue(isset($entqul));
        $entuni = \Catentuni::fnounidsc('Kilogramo', $trncnn);
        self::assertTrue(isset($entuni));
        $usrcop = \Users::fnousrnam('Claudio Catano', $trncnn);
        self::assertTrue(isset($usrcop));

        $name = 'Manzana Canatlán';
        $quantity = '3000';
        $desc = 'Manzana de la región seleccionada y beneficiada para su venta en mercados de consumo nacional y extranjero';
        $timestamp = date(DATE_ISO8601);

        $ins = \Tblentprd::insentprd($entcls->getIdnentcls(), $entqul->getIdnentqul(), $entuni->getIdnentuni(), $name, $quantity, $desc, $timestamp, $trncnn);
        self::assertNotFalse($ins);
    }

    public function test_find_one_product(){
        $trncnn = TransactionHandler::begin();
        $entprd = \Tblentprd::fnoprdnam('Manzana Canatlán', $trncnn);
        self::assertNotFalse($entprd);
    }
}
