<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\TransactionHandler;

class TestH005 extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_all_market_products()
    {
        $transc = TransactionHandler::begin();
        $prds = \Tblentprd::fndallprd($transc);
        self::assertNotFalse($prds);
        print_r($prds);
    }

    public function test_filter_quality_products()
    {
        $transc = TransactionHandler::begin();
        $prds = \Tblentprd::fndqltprd("1",$transc);
        self::assertNotFalse($prds);
    }

    public function test_filter_classified_products()
    {
        $transc = TransactionHandler::begin();
        $prds = \Tblentprd::fndclsprd("1",$transc);
        self::assertNotFalse($prds);
    }


}
