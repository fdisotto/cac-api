<?php

class CACApiTest extends PHPUnit_Framework_TestCase
{
    private $cac;

    public function setUp()
    {
        $this->cac = new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        ));
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf(get_class($this->cac), new \fdisotto\CACApi(array(
            'key'   => 'TestKey',
            'login' => 'TestLogin'
        )));
    }

    public function testArrayKeyConfig()
    {
        $this->assertArrayHasKey('key', $this->cac->_data);
    }

    public function testArrayLoginConfig()
    {
        $this->assertArrayHasKey('login', $this->cac->_data);
    }

    public function testConfigKey()
    {
        $this->assertEquals($this->cac->_data['key'], 'TestKey');
    }

    public function testConfigLogin()
    {
        $this->assertEquals($this->cac->_data['login'], 'TestLogin');
    }

    public function testHttpStatusCode()
    {
        $this->cac->getServers();
        $this->assertEquals($this->cac->http_status_code, 412);
    }

    public function testPowerOnServerFalse()
    {
        $this->assertFalse($this->cac->powerOnServer(123456));
    }

    public function testPowerOffServerFalse()
    {
        $this->assertFalse($this->cac->powerOffServer(123456));
    }

    public function testResetServerFalse()
    {
        $this->assertFalse($this->cac->resetServer(123456));
    }

    public function testRenameServerFalse()
    {
        $this->assertFalse($this->cac->renameServer(123456, 'test'));
    }

    public function testReverseDNSFalse()
    {
        $this->assertFalse($this->cac->reverseDNS(123456, 'test'));
    }
}