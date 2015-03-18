<?php

class CACApiTest extends PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $cac = new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        ));

        $this->assertInstanceOf(get_class($cac), new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        )));
    }

    public function testArrayKeyConfig()
    {
        $cac = new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        ));

        $this->assertArrayHasKey('key', $cac->_data);
    }

    public function testArrayLoginConfig()
    {
        $cac = new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        ));

        $this->assertArrayHasKey('login', $cac->_data);
    }

    public function testConfigKey()
    {
        $cac = new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        ));

        $this->assertEquals($cac->_data['key'], 'TestKey');
    }

    public function testConfigLogin()
    {
        $cac = new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        ));

        $this->assertEquals($cac->_data['login'], 'TestLogin');
    }

    public function testHttpStatusCode()
    {
        $cac = new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        ));

        $cac->getServers();
        $this->assertEquals($cac->http_status_code, 412);
    }

    public function testPowerOnServerFalse()
    {
        $cac = new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        ));

        $this->assertFalse($cac->powerOnServer('123456'));
    }

    public function testPowerOffServerFalse()
    {
        $cac = new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        ));

        $this->assertFalse($cac->powerOffServer('123456'));
    }

    public function testResetServerFalse()
    {
        $cac = new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        ));

        $this->assertFalse($cac->resetServer('123456'));
    }
}