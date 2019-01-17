<?php
/**
 * Created by PhpStorm.
 * User: evgeniy
 * Date: 17.01.19
 * Time: 19:33
 */

namespace FileConverter;
interface DecodeInterface
{
    public function decode(\SplFileObject $file): array;
}