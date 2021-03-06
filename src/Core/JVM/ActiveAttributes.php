<?php
namespace PHPJava\Core\JVM;

use PHPJava\Core\JavaClassReaderInterface;
use PHPJava\Kernel\Attributes\AttributeInfo;

class ActiveAttributes
{
    private $entries = [];
    private $reader;

    public function __construct(JavaClassReaderInterface $reader, int $entries, ConstantPool $constantPool)
    {
        $this->reader = $reader;
        for ($i = 0; $i < $entries; $i++) {
            // not implemented, read only
            $this->entries[$i] = new AttributeInfo($reader);
            $this->entries[$i]->setConstantPool($constantPool);
            $this->entries[$i]->execute();
        }
    }

    public function getEntries()
    {
        return $this->entries;
    }
}
