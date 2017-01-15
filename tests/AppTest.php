<?php

    require_once __DIR__ . '/../src/app.inc.php';

    use PHPUnit\Framework\TestCase;

    class AppTest extends TestCase {

        public function testSomething(){
            $this->assertTrue(true, 'It works');
        }

    }