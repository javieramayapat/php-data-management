<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{

    public function test_email()
    {
        $email = Validate::email('me@javieramaya.com');
        $this->assertTrue($email);

        $email = Validate::email('me@@javieramaya.com');
        $this->assertFalse($email);

    }

}