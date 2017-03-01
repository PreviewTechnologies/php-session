<?php

namespace Previewtechs\PHPSession;


class CustomSessionHandler
{
    protected $storage;

    public function __construct($storage)
    {
        $this->storage = $storage;
    }

    public function setHandler()
    {
        session_set_save_handler(
            array($this->storage, "open"),
            array($this->storage, "close"),
            array($this->storage, "read"),
            array($this->storage, "write"),
            array($this->storage, "destroy"),
            array($this->storage, "gc")
        );
    }
}