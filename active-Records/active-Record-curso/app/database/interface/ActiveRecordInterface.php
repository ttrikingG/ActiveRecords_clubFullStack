<?php

namespace app\database\interface;

use app\database\interface\UpdateInterface;

interface  ActiveRecordInterface
{
    public function execute(ActiveRecordExecuteInterface $activeRecordExecuteInterface);
    public function __set($attribute, $value);
    public function __get($attribute);
    public function getTable();
    public function getAttributes();
}