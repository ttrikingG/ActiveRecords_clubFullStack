<?php

namespace app\database\activerecord;

use app\database\interface\ActiveRecordExecuteInterface;
use app\database\interface\ActiveRecordInterface;

class Find implements ActiveRecordExecuteInterface
{
    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        return 'Find';
    }
}