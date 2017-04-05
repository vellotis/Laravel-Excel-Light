<?php

namespace Maatwebsite\ExcelLight;

use Iterator;

class IteratorWrapper implements Iterator
{
  
    private $classBuilderCallback;
    private $iterator;
  
    public function __construct(Iterator $iterator, $classBuilderCallback)
    {
        $this->iterator = $iterator;
        $this->classBuilderCallback = $classBuilderCallback;
    }
  
    public function current()
    {
        return call_user_func($this->classBuilderCallback, $this->iterator->current());
    }

    public function key()
    {
        return $this->iterator->key();
    }

    public function next()
    {
        return $this->iterator->next();
    }

    public function rewind()
    {
        return $this->iterator->rewind();
    }

    public function valid()
    {
        return $this->iterator->valid();
    }
    
}
