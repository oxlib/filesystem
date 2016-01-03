<?php
/**
 * Project: filesystem
 * Author: Zorca (vs@zorca.org)
 */

namespace Oxboot\Filesystem;

class File
{
    /**
     * Determine if a file exists
     * @param $filePath
     * @return bool
     */
    public static function exists($filePath)
    {
        return (file_exists($filePath) && is_file($filePath));
    }

    /**
     * Get the content of a file
     * @param $filePath
     * @return bool|string
     */
    public static function get($filePath)
    {
        if (File::exists($filePath)) {
            return file_get_contents($filePath);
        }
        return false;
    }

    /**
     * Writes the content into a file
     * @param $filePath
     * @param $content
     * @param bool $lock
     * @return int
     */
    public static function put($filePath, $content, $lock = false)
    {
        return file_put_contents($filePath, $content, $lock ? LOCK_EX : 0);
    }
}
