<?php

use tests\TestsHelper;
use tests\CreatesApplication;

abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    use CreatesApplication, TestsHelper;
}
