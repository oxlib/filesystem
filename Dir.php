<?php
/**
 * Project: filesystem
 * Author: Zorca (vs@zorca.org)
 */

namespace Oxlib\Filesystem;

class Dir
{

    /**
     * Determine if a directory exists
     * @param $dirPath
     * @return bool
     */
    public static function exists($dirPath)
    {
        return (file_exists($dirPath) && is_dir($dirPath));
    }

}
