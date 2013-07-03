<?php

namespace Posix;

/**
 * Class Posix
 *
 * @package Posix
 */
class Posix
{
    /**
     * Determine accessibility of a file
     *
     * @param string $file The name of the file to be tested.
     * @param int    $mode A mask consisting of one or more of POSIX_F_OK, POSIX_R_OK, POSIX_W_OK and POSIX_X_OK.
     *
     * @return bool
     */
    public function access($file, $mode = POSIX_F_OK)
    {
        return posix_access($file, $mode);
    }

    /**
     * Get controlling terminal ID
     *
     * @return string
     */
    public function ctermid()
    {
        return posix_ctermid();
    }

    /**
     * Get last error
     *
     * @return int
     */
    public function errno()
    {
        return posix_errno();
    }

    /**
     * Get last error
     *
     * @return int
     */
    public function get_last_error()
    {
        return posix_get_last_error();
    }

    /**
     * Get pathname of current directory
     *
     * @return string
     */
    public function getcwd()
    {
        return posix_getcwd();
    }

    /**
     * Get effective group ID
     *
     * @return int
     */
    public function getegid()
    {
        return posix_getegid();
    }

    /**
     * Get effective user ID
     *
     * @return int
     */
    public function geteuid()
    {
        return posix_geteuid();
    }

    /**
     * Get group ID
     *
     * @return int
     */
    public function getgid()
    {
        return posix_getgid();
    }

    /**
     * Get group by ID
     *
     * @param int $id The group ID
     *
     * @return array
     */
    public function getgrgid($id)
    {
        return posix_getgrgid($id);
    }

    /**
     * Get group by name
     *
     * @param string $name The name of the group
     *
     * @return array
     */
    public function getgrnam($name)
    {
        return posix_getgrnam($name);
    }

    /**
     * Get groups
     *
     * @return array
     */
    public function getgroups()
    {
        return posix_getgroups();
    }

    /**
     * Get Login
     *
     * @return string
     */
    public function getlogin()
    {
        return posix_getlogin();
    }

    /**
     * Get group ID for for process control
     *
     * @param int $pid The process ID
     *
     * @return int|bool
     */
    public function getpgid($pid)
    {
        if (function_exists('posix_getpgid')) {
            return posix_getpgid($pid);
        }

        return false;
    }

    /**
     * Get process group ID
     *
     * @return int
     */
    public function getpgrp()
    {
        return posix_getpgrp();
    }

    /**
     * Get process ID
     *
     * @return int
     */
    public function getpid()
    {
        return posix_getpid();
    }

    /**
     * Get parent process ID
     *
     * @return int
     */
    public function getppid()
    {
        return posix_getppid();
    }

    /**
     * Get User by username
     *
     * @param $username
     *
     * @return array
     */
    public function getpwnam($username)
    {
        return posix_getpwnam($username);
    }

    /**
     * Get user by ID
     *
     * @param $uid
     *
     * @return array
     */
    public function getpwuid($uid)
    {
        return posix_getpwuid($uid);
    }

    /**
     * Get system resource limits
     *
     * @return array
     */
    public function getrlimit()
    {
        return posix_getrlimit();
    }

    /**
     * Get session ID by process ID
     *
     * @param $pid
     *
     * @return int
     */
    public function getsid($pid)
    {
        return posix_getsid($pid);
    }

    /**
     * Get current process user ID
     *
     * @return int
     */
    public function getuid()
    {
        return posix_getuid();
    }

    /**
     * Initializes the group access list by reading the group database /etc/group and using all groups of which user is a member.  The additional group is also added to the list.
     *
     * @param string $name        The user to calculate the list for.
     * @param int    $baseGroupId Typically the group number from the password file.
     *
     * @return bool
     */
    public function initgroups($name, $baseGroupId)
    {
        return posix_initgroups($name, $baseGroupId);
    }

    /**
     * Is file descriptor is an interactive terminal
     *
     * @param int $fd The file descriptor.
     *
     * @return bool
     */
    public function isatty($fd)
    {
        return posix_isatty($fd);
    }

    /**
     * Send a kill signal
     *
     * @param int $pid The process identifier.
     * @param int $sig One of the PCNTL signals constants.
     *
     * @return bool
     */
    public function kill($pid, $sig)
    {
        return posix_kill($pid, $sig);
    }

    /**
     * Create a fifo special file (a named pipe)
     *
     * @param string $pathname Path to the FIFO file.
     * @param octal  $mode     Permission Mode. Depends on the setting of the current umask(). The permissions of the created file are (mode & ~umask).
     *
     * @return bool
     */
    public function mkfifo($pathname, $mode)
    {
        return posix_mkfifo($pathname, $mode);
    }

    /**
     * Create a special or ordinary file
     *
     * @param string $pathname The file to create
     * @param int    $mode     A bitwise OR between file type (one of the following constants: POSIX_S_IFREG, POSIX_S_IFCHR, POSIX_S_IFBLK, POSIX_S_IFIFO or POSIX_S_IFSOCK) and permissions.
     * @param int    $major    The major device kernel identifier (required to pass when using S_IFCHR or S_IFBLK).
     * @param int    $minor    The minor device kernel identifier.
     *
     * @return bool
     */
    public function mknod($pathname, $mode, $major = 0, $minor = 0)
    {
        return mknod($pathname, $mode, $major, $minor);
    }

    /**
     * Set the effective group ID for the current process
     *
     * @param int $gid The group id.
     *
     * @return bool
     */
    public function setegid($gid)
    {
        return posix_setegid($gid);
    }

    /**
     * Set the effective user ID for the current process
     *
     * @param int $uid The user id.
     *
     * @return bool
     */
    public function seteuid($uid)
    {
        return posix_seteuid($uid);
    }

    /**
     * Set the group ID for the current process
     *
     * @param int $gid The group id.
     *
     * @return bool
     */
    public function setgid($gid)
    {
        return posix_setgid($gid);
    }

    /**
     * Set the process group ID for job control
     *
     * @param int $pid  The process id.
     * @param int $pgid The process group id.
     *
     * @return bool
     */
    public function setpgid($pid, $pgid)
    {
        return posix_setpgid($pid, $pgid);
    }

    /**
     * Set current process the session leader
     *
     * @return int
     */
    public function setsid()
    {
        return posix_setsid();
    }

    /**
     * Set user ID for the current process
     *
     * @param int $uid The user id.
     *
     * @return bool
     */
    public function setuid($uid)
    {
        return posix_setuid($uid);
    }

    /**
     * Get Error Message for Error Number
     *
     * @param int $errno A POSIX error number, returned by posix_get_last_error(). If set to 0, then the string "Success" is returned.
     *
     * @return string
     */
    public function strerror($errno)
    {
        return posix_strerror($errno);
    }

    /**
     * Get process times
     *
     * @return array
     */
    public function times()
    {
        return posix_times();
    }

    /**
     * Get Terminal Device Name
     *
     * @param int $fd The file descriptor
     *
     * @return string
     */
    public function ttyname($fd)
    {
        return posix_ttyname($fd);
    }

    /**
     * Get System Name
     *
     * @return array
     */
    public function uname()
    {
        return posix_uname();
    }
}
