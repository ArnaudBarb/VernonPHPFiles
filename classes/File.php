<?php

class File
{
    private string $file;
    private string $method;
    private int $size=0;
    private $handle;

    function __construct(string $file, string $method)
    {
        $this->file = $file;
        $this->method = $method;
        $this->handle = fopen($this->file, $this->method);
        $this->size = filesize($this->file);
    }

    function lecture($size = null )
    {
        return fread($this->handle, $size ?? $this->size);
    }

    function __destruct()
    {
        fclose($this->handle);
    }

}

