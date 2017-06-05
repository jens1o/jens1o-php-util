<?php
namespace jens1o\util;

/**
 * Helper utility for passwords
 *
 * @author     jens1o
 * @copyright  Jens Hausdorf 2017
 * @license    MIT License
 * @package    jens1o
 * @subpackage util
 */
class PasswordUtil {

    /**
     * Returns a salt for `bcrypt()`
     *
     * @return string
     */
    public static function generateSalt(): string {
        return strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
    }

}