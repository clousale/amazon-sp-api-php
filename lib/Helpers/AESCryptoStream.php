<?php
/*
 *  @author: JacksonJeans
 *  @email: julian.tietz@gidutex.de
 */

namespace ClouSale\AmazonSellingPartnerAPI\Helpers;


class AESCryptoStream
{
    /**
     * default: 8 fpr PKSC5!
     * - The block size is a property of the used cipher algorithm.
     * For AES it is always 16 bytes. So strictly speaking,
     * PKCS5Padding cannot be used with AES since it is defined only for a block size of 8 bytes.
     *
     * The only difference between these padding schemes is that PKCS7Padding has the block size as a parameter,
     * while for PKCS5Padding it is fixed at 8 bytes. When the Block size is 8 bytes they do exactly the same.
     *
     * - Own implementation through getPaddedText () ;.
     *
     * - https://crypto.stackexchange.com/questions/43489/how-does-aes-ctr-pkcs5padding-works-when-the-bits-to-encrypt-is-more-than-8-bits
     * - https://stackoverflow.com/questions/20770072/aes-cbc-pkcs5padding-vs-aes-cbc-pkcs7padding-with-256-key-size-performance-java/20770158
     */
    public const BLOCK_SIZE = 8;

    /**
     * default: 16
     * @var int IV_LENGTH
     * - Vector with random data
     */
    public const IV_LENGTH = 16;

    /**
     * default: AES256
     * @var string CIPHER
     * - Encryption
     */
    public const CIPHER = 'AES256';

    /**
     * Get padded text
     * @param string $plainText
     *  - Plain Text
     * @return string $plainText
     *  - padded plain text
     */
    protected static function getPaddedText(string $plainText): string
    {
        $stringLength = strlen($plainText);
        if ($stringLength % static::BLOCK_SIZE) {
            $plainText = str_pad($plainText, $stringLength + static::BLOCK_SIZE - $stringLength % static::BLOCK_SIZE, "\0");
        }
        return $plainText;
    }

    /**
     * Get encrypted string
     * @param string $plainText [required]
     * - unencrypted text
     * @param string $key [required]
     * - Key to encrypt
     * @param string $iv [required]
     * - The salt value for the block to encrypt.
     * @return string
     * - encrypted string
     */
    public static function encrypt(string $plainText, string $key, string $iv): string
    {
        $plainText=trim(static::getPaddedText($plainText));
        return openssl_encrypt($plainText, static::CIPHER, $key, OPENSSL_RAW_DATA, $iv);
    }

    /**
     * Get decrypted string
     * @param string $encryptedText
     * - encrypted text
     * @param string $key
     * - Key to decrypt
     * @param string $iv
     * - The salt value for the block to be decrypted.
     * @return string
     * - decrypted string
     */
    public static function decrypt(string $encryptedText, string $key, string $iv): string
    {
        return openssl_decrypt($encryptedText, static::CIPHER, $key, OPENSSL_RAW_DATA, $iv);
    }
}
