# Assina uma mensagem S/MIME

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkcs7-sign.php

---

# openssl\_pkcs7\_sign

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_pkcs7\_sign — Assina uma mensagem S/MIME

### Descrição

function **openssl\_pkcs7\_sign**(  
    [string](language.types.string.md) `$input_filename`,  
    [string](language.types.string.md) `$output_filename`,  
    [OpenSSLCertificate](class.opensslcertificate.md)|[string](language.types.string.md) `$certificate`,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$private_key`,  
    [?](language.types.null.md)[array](language.types.array.md) `$headers`,  
    [int](language.types.integer.md) `$flags` = **`PKCS7_DETACHED`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$untrusted_certificates_filename` = **`null`**  
): [bool](language.types.boolean.md)

**openssl\_pkcs7\_sign()** pega o conteúdo do arquivo
chamado `input_filename` e o assina usando o
certificado informado em `certificate` e sua chave privada
correspondente especificada por
`private_key`.

### Parâmetros

`input_filename`
:   O arquivo de entrada a ser assinado digitalmente.

`output_filename`
:   O arquivo no qual a assinatura digital será gravada.

`certificate`
:   O certificado X.509 usado para assinar digitalmente `input_filename`.
    Consulte [Parâmetros de chave/certificado](openssl.certparams.md) para obter uma lista de valores válidos.

`private_key`
:   `private_key` é a chave privada correspondente ao `certificate`.
    Consulte [Parâmetros de chave pública/privada](openssl.certparams.md) para obter uma lista de valores válidos.

`headers`
:   `headers` é um array de cabeçalhos que
    serão anexados aos dados após serem assinados (veja
    [openssl\_pkcs7\_encrypt()](function.openssl-pkcs7-encrypt.md) para mais informações sobre
    o formato deste parâmetro).

`flags`
:   `flags` são opções que podem ser usadas para alterar a saída - veja as [constantes PKCS7](openssl.pkcs7.flags.md).

`untrusted_certificates_filename`
:   `untrusted_certificates_filename` especifica o nome de um arquivo contendo
    vários certificados extras para incluir na assinatura que pode, por
    exemplo, ser usado para ajudar o destinatário a verificar o certificado que você usou.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `certificate` agora aceita uma instância de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509 CSR` era aceito. |
| 8.0.0 | `private_key` agora aceita uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) ou de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL key` ou `OpenSSL X.509 CSR` era aceito. |

### Examples

**Exemplo #1 Exemplo de **openssl\_pkcs7\_sign()****

```
<?php
// a mensagem que se deseja assinar para que o destinatário possa ter certeza de que
// foi você quem a enviou
$data = <<<EOD

Você tem minha autorização para gastar R$ 10 mil em despesas de jantar.

O Presidente
EOD;
// salva mensagem em arquivo
$fp = fopen("msg.txt", "w");
fwrite($fp, $data);
fclose($fp);
// criptografa o arquivo
if (openssl_pkcs7_sign("msg.txt", "assinado.txt", "file://meu_certificado.pem",
    array("file://meu_certificado.pem", "minha_senha"),
    array("To" => "fulanodetal@example.com", // sintaxe de chaves
          "From: HQ <presidente@example.com>", // sintaxe de índice
          "Subject" => "Ultra secreto")
    )) {
    // mensagem assinada - enviando!
    exec(ini_get("sendmail_path") . " < assinado.txt");
}
?>
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
