<?php

namespace Tests\Feature;

use App\TransactionHandler;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestH008 extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_find_user_by_email()
    {
        $transc = TransactionHandler::begin();
        $prds = \Users::fnousreml("asda@asda",$transc);
        self::assertNotFalse($prds);
    }

    public function test_find_products_by_userid()
    {
        $transc = TransactionHandler::begin();
        $prds = \Tblentprd::fndprdbyuserid("2",$transc);
        if($prds==false || is_null($prds)) {
            self::assertFalse(false);
        }else{
            print_r($prds);
            self::assertNotFalse($prds);
        }

    }
}
