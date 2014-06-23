<?php
/**
 * Copyright 2014 Rackspace US, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Haskell\Type;

class ListType implements \Iterator
{
    private $value;
    private $position;

    public function __construct($value)
    {
        if (!is_array($value) && !$value instanceof Traversable) {
            throw new \InvalidArgumentException("Must construct list type will an array or instance of \\Traversable");
        }

        $this->value = $value;
        $this->rewind();
    }

    function rewind()
    {
        $this->position = 0;
    }

    function current()
    {
        return $this->value[$this->position];
    }

    function key()
    {
        return $this->position;
    }

    function next()
    {
        ++$this->position;
    }

    function valid()
    {
        return isset($this->value[$this->position]);
    }

    public function getInternalType()
    {
        return $this->value;
    }
}