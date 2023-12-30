<?php

namespace app\database\interface;

interface ActiveRecordExecuteInterface
{
    public function execute(ActiveRecordInterface $activeRecordInterface);
}