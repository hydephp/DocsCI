<?php

namespace Tests\Setup;

use PHPUnit\Framework\TestCase;

class RunDebugCommandTest extends TestCase
{
    public function test_print_debug_info()
    {
        fwrite(STDOUT, (shell_exec('php hyde debug')));
        $this->assertTrue(true);
    }
}
