<?php
/**
 * Created by PhpStorm.
 * User: evgeniy
 * Date: 17.01.19
 * Time: 19:33
 */

namespace FileConverter;
interface EncodeInterface
{
    public function encode(array $content): void;
}