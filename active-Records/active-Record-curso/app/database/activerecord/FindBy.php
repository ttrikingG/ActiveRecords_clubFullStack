<?php

namespace app\database\activerecord;

use app\database\connection\Connection;
use app\database\interface\ActiveRecordExecuteInterface;
use app\database\interface\ActiveRecordInterface;
use Throwable;

class FindBy implements ActiveRecordExecuteInterface
{

    public function __construct(private string $field, private string|int $value, private string $fields = '*')
    {
      
    }

    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        try{
            $query = $this->createQuery($activeRecordInterface);

            $connection = Connection::connect();

            $prepare = $connection->prepare($query);
            $prepare->execute([
                $this->field => $this->value
            ]);

            return $prepare->fetch();
        }catch(Throwable $throw){
            formatException($throw);
        }
    }

    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {
        $sql = "select {$this->fields} from {$activeRecordInterface->getTable()} where {$this->field} = :{$this->field}";
        return $sql;
    }
}