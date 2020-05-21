<?php
class Session
{
    public function set($key, $value)
    {
        $_SESSION["$key"] = $value;
    }
}
