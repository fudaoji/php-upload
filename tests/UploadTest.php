<?php
/**
 * Created by PhpStorm.
 * Script Name: UploadTest.php
 * Create: 2022/11/21 11:27
 * Description:
 * Author: fudaoji<fdj@kuryun.cn>
 */

namespace tests;

use Dao\Upload\Upload;

class UploadTest extends \PHPUnit\Framework\TestCase
{
    public function testSuccess()
    {
        var_dump((new Upload)->getError());
        $val = 1;
        $this->assertEquals(1, $val);
    }

    public function testFail()
    {
        $val = 1;
        $this->assertEquals(2, $val);
    }
}