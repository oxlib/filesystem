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
     * Get the contents of a file
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
     * Writes the contents into a file
     * @param $path
     * @param $contents
     * @param bool $lock
     * @return int
     */
    public function put($path, $contents, $lock = false)
    {
        return file_put_contents($path, $contents, $lock ? LOCK_EX : 0);
    }
}
