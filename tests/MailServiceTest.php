<?php

use App\Services\MailService;

class MailServiceTest extends TestCase
{
    /** @test */
    public function 由Sync寄送信件()
    {
        /** arrange */

        /** act */
        App::call(MailService::class . '@mailBySync');

        /** assert */
        $this->assertTrue(true);
    }

    /** @test */
    public function 由queue寄送信件()
    {
        /** arrange */

        /** act */
        App::call(MailService::class . '@mailByQueue');

        /** assert */
        $this->assertTrue(true);
    }
}
