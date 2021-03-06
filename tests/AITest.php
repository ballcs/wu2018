<?php

use PHPUnit\Framework\TestCase;
final class AITest extends TestCase{
    public function testGender_Male(): void{
        $result = AI::getGender('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result,$result);
    }
    public function testGender_Female(): void{
        $result = AI::getGender('สวัสดีค่ะ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result,$result);
    }
    public function testRudeWords(): void{
        $result = AI::getRudeWords('ไอบ้า');
        $expected_result = 'aaa';
        $this->assertEquals($expected_result,$result);
    }
}