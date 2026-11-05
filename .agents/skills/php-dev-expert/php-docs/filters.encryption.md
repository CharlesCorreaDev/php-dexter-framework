# Filtros de Criptografia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filters.encryption.php

---

## Filtros de Criptografia

Os filtros de criptografia são especialmente úteis para criptografia de arquivo/stream.

## mcrypt.\* e mdecrypt.\*

**Aviso**

Este recurso foi
*DESCONTINUADO* a partir do PHP 7.1.0. O uso deste recurso
é fortemente desencorajado.

Os filtros `mcrypt.*` e `mdecrypt.*`
fornecem criptografia e descriptografia simétricas usando libmcrypt.
Ambos os conjuntos de filtros suportam os mesmos algoritmos disponíveis na
[extensão mcrypt](ref.mcrypt.md) na forma de
`mcrypt.ciphername` onde `ciphername`
é o nome da cifra como seria passado para
[mcrypt\_module\_open()](function.mcrypt-module-open.md).
Os cinco parâmetros de filtros a seguir também estão disponíveis:

**Parâmetros para os filtros mcrypt**

| Parâmetro | Obrigatório? | Valor Padrão | Exemplos de Valores |
| --- | --- | --- | --- |
| mode | Opcional | cbc | cbc, cfb, ecb, nofb, ofb, stream |
| algorithms\_dir | Opcional | ini\_get('mcrypt.algorithms\_dir') | Localização dos módulos de algoritmos |
| modes\_dir | Opcional | ini\_get('mcrypt.modes\_dir') | Localização dos módulos de modos |
| iv | Obrigatório | N/A | Tipicamente 8, 16 ou 32 bytes de dados binários. Depende da cifra. |
| key | Obrigatório | N/A | Tipicamente 8, 16 ou 32 bytes de dados binários. Depende da cifra. |

**Exemplo #1 Criptografando/Descriptografando com Blowfish**

```
<?php
// assume-se que $key foi gerada anteriormente
$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_CBC);
$iv = mcrypt_create_iv($iv_size, MCRYPT_DEV_URANDOM);
$fp = fopen('encrypted-file.enc', 'wb');
fwrite($fp, $iv);
$opts = array('mode'=>'cbc','iv'=>$iv, 'key'=>$key);
stream_filter_append($fp, 'mcrypt.blowfish', STREAM_FILTER_WRITE, $opts);
fwrite($fp, 'mensagem para criptografar');
fclose($fp);

// descriptografando...
$fp = fopen('encrypted-file.enc', 'rb');
$iv = fread($fp, $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_CBC));
$opts = array('mode'=>'cbc','iv'=>$iv, 'key'=>$key);
stream_filter_append($fp, 'mdecrypt.blowfish', STREAM_FILTER_READ, $opts);
$data = rtrim(stream_get_contents($fp)); // retira o preenchimento com null
fclose($fp);
echo $data;
?>
```

**Exemplo #2 Criptografando arquivo usando CBC AES-128 com HMAC SHA256**

```
<?php
AES_CBC::encryptFile($password, "plaintext.txt", "encrypted.enc");
AES_CBC::decryptFile($password, "encrypted.enc", "decrypted.txt");

class AES_CBC
{
   protected static $KEY_SIZES = array('AES-128'=>16,'AES-192'=>24,'AES-256'=>32);
   protected static function key_size() { return self::$KEY_SIZES['AES-128']; } // padrão AES-128
   public static function encryptFile($password, $input_stream, $aes_filename){
      $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
      $fin = fopen($input_stream, "rb");
      $fc = fopen($aes_filename, "wb+");
      if (!empty($fin) && !empty($fc)) {
         fwrite($fc, str_repeat("_", 32) ); // marcador, HMAC SHA256 será usado aqui mais tarde
         fwrite($fc, $hmac_salt = mcrypt_create_iv($iv_size, MCRYPT_DEV_URANDOM));
         fwrite($fc, $esalt = mcrypt_create_iv($iv_size, MCRYPT_DEV_URANDOM));
         fwrite($fc, $iv = mcrypt_create_iv($iv_size, MCRYPT_DEV_URANDOM));
         $ekey = hash_pbkdf2("sha256", $password, $esalt, $it=1000, self::key_size(), $raw=true);
         $opts = array('mode'=>'cbc', 'iv'=>$iv, 'key'=>$ekey);
         stream_filter_append($fc, 'mcrypt.rijndael-128', STREAM_FILTER_WRITE, $opts);
         $infilesize = 0;
         while (!feof($fin)) {
            $block = fread($fin, 8192);
            $infilesize+=strlen($block);
            fwrite($fc, $block);
         }
         $block_size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
         $padding = $block_size - ($infilesize % $block_size); // $padding é um número de 1 a 16
         fwrite($fc, str_repeat(chr($padding), $padding) ); // realiza um preenchimento PKCS7
         fclose($fin);
         fclose($fc);
         $hmac_raw = self::calculate_hmac_after_32bytes($password, $hmac_salt, $aes_filename);
         $fc = fopen($aes_filename, "rb+");
         fwrite($fc, $hmac_raw); // sobrescreve o marcador
         fclose($fc);
      }
   }
   public static function decryptFile($password, $aes_filename, $out_stream) {
      $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
      $hmac_raw = file_get_contents($aes_filename, false, NULL, 0, 32);
      $hmac_salt = file_get_contents($aes_filename, false, NULL, 32, $iv_size);
      $hmac_calc = self::calculate_hmac_after_32bytes($password, $hmac_salt, $aes_filename);
      $fc = fopen($aes_filename, "rb");
      $fout = fopen($out_stream, 'wb');
      if (!empty($fout) && !empty($fc) && self::hash_equals($hmac_raw,$hmac_calc)) {
         fread($fc, 32+$iv_size); // ignora hmac e salt do sha256
         $esalt = fread($fc, $iv_size);
         $iv    = fread($fc, $iv_size);
         $ekey = hash_pbkdf2("sha256", $password, $esalt, $it=1000, self::key_size(), $raw=true);
         $opts = array('mode'=>'cbc', 'iv'=>$iv, 'key'=>$ekey);
         stream_filter_append($fc, 'mdecrypt.rijndael-128', STREAM_FILTER_READ, $opts);
         while (!feof($fc)) {
            $block = fread($fc, 8192);
            if (feof($fc)) {
               $padding = ord($block[strlen($block) - 1]); // assume preenchimento PKCS7
               $block = substr($block, 0, 0-$padding);
            }
            fwrite($fout, $block);
         }
         fclose($fout);
         fclose($fc);
      }
   }
   private static function hash_equals($str1, $str2) {
      if(strlen($str1) == strlen($str2)) {
         $res = $str1 ^ $str2;
         for($ret=0,$i = strlen($res) - 1; $i >= 0; $i--) $ret |= ord($res[$i]);
         return !$ret;
      }
      return false;
   }
   private static function calculate_hmac_after_32bytes($password, $hsalt, $filename) {
      static $init=0;
      $init or $init = stream_filter_register("user-filter.skipfirst32bytes", "FileSkip32Bytes");
      $stream = 'php://filter/read=user-filter.skipfirst32bytes/resource=' . $filename;
      $hkey = hash_pbkdf2("sha256", $password, $hsalt, $iterations=1000, 24, $raw=true);
      return hash_hmac_file('sha256', $stream, $hkey, $raw=true);
   }
}
class FileSkip32Bytes extends php_user_filter
{
   private $skipped=0;
   function filter($in, $out, &$consumed, $closing) {
      while ($bucket = stream_bucket_make_writeable($in)) {
         $outlen = $bucket->datalen;
         if ($this->skipped<32){
            $outlen = min($bucket->datalen,32-$this->skipped);
            $bucket->data = substr($bucket->data, $outlen);
            $bucket->datalen = $bucket->datalen-$outlen;
            $this->skipped+=$outlen;
         }
         $consumed += $outlen;
         stream_bucket_append($out, $bucket);
      }
      return PSFS_PASS_ON;
   }
}
class AES_128_CBC extends AES_CBC {
   protected static function key_size() { return self::$KEY_SIZES['AES-128']; }
}
class AES_192_CBC extends AES_CBC {
   protected static function key_size() { return self::$KEY_SIZES['AES-192']; }
}
class AES_256_CBC extends AES_CBC {
   protected static function key_size() { return self::$KEY_SIZES['AES-256']; }
}
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
