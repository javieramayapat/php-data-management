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

    public function test_url(){
        $url = Validate::url('https://javieramaya.com');
        $this->assertTrue($url);

        $url = Validate::url('javieramaya.com');
        $this->assertFalse($url);
    }

}