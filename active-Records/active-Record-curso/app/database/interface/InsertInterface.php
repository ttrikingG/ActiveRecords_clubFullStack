<?php

namespace app\database\interface;

interface InsertInterface
{
    public function insert(ActiveRecordInterface $activeRecordInterface);
}