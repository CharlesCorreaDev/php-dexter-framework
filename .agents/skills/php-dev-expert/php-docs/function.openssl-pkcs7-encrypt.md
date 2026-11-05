# Criptografa uma mensagem S/MIME

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkcs7-encrypt.php

---

# openssl\_pkcs7\_encrypt

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_pkcs7\_encrypt — Criptografa uma mensagem S/MIME

### Descrição

function **openssl\_pkcs7\_encrypt**(  
    [string](language.types.string.md) `$input_filename`,  
    [string](language.types.string.md) `$output_filename`,  
    [OpenSSLCertificate](class.opensslcertificate.md)|[array](language.types.array.md)|[string](language.types.string.md) `$certificate`,  
    [?](language.types.null.md)[array](language.types.array.md) `$headers`,  
    [int](language.types.integer.md) `$flags` = 0,  
    [int](language.types.integer.md) `$cipher_algo` = **`OPENSSL_CIPHER_AES_128_CBC`**  
): [bool](language.types.boolean.md)

**openssl\_pkcs7\_encrypt()** pega o conteúdo do arquivo
chamado `input_filename` e o criptografa usando uma cifra RC2
de 40 bits para que só possa ser lido pelos destinatários pretendidos
especificados pelo certificado especificado em `certificate`.

### Parâmetros

`input_filename`

`output_filename`

`certificate`
:   Um certificado X.509 único ou um array de certificados X.509.

`headers`
:   `headers` é um array de cabeçalhos que
    serão anexados aos dados após serem criptografados.

    `headers` pode ser um array associativo
    codificado pelo nome do cabeçalho ou um array indexado, onde cada elemento contém
    uma única linha de cabeçalho.

`flags`
:   `flags` pode ser usado ​​para especificar opções que afetam
    o processo de codificação - veja [constantes
    PKCS7](openssl.pkcs7.flags.md).

`cipher_algo`
:   Uma das [constantes de método de criptografia](openssl.ciphers.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O algoritmo de criptografia padrão (`cipher_algo`) agora é AES-128-CBC (**`OPENSSL_CIPHER_AES_128_CBC`**). Anteriormente, PKCS7/CMS era usado (**`OPENSSL_CIPHER_RC2_40`**). |
| 8.0.0 | `certificate` agora aceita uma instância de [OpenSSLCertificate](class.opensslcertificate.md); anteriormente, um [resource](language.types.resource.md) do tipo `OpenSSL X.509 CSR` era aceito. |

### Examples

**Exemplo #1 Exemplo de **openssl\_pkcs7\_encrypt()****

```
<?php
// A mensagem que se deseja criptografar e enviar ao agente
// secreto em campo, conhecido como Falcão Noturno. O certificado
// dele fica no arquivo falcão_noturno.pem.
$data = <<<EOD
Falcão Noturno,

Segredo absoluto, apenas para seus cuidados!

O inimigo se aproxima! Encontre-me no Café às 8:30 da manhã
para coletar seu passaporte falsificado!

QG
EOD;

// carrega a chave
$key = file_get_contents("falcão_noturno.pem");

// grava mensagem no arquivo
$fp = fopen("msg.txt", "w");
fwrite($fp, $data);
fclose($fp);

// criptografa a mensagem
if (openssl_pkcs7_encrypt("msg.txt", "crip.txt", $key,
    array("To" => "falcao_noturno@example.com", // sintaxe de chaves
          "From: QG <qg@example.com>", // sintaxe de índice
          "Subject" => "Ultra secreto"))) {
    // mensagem criptografada - enviar!
    exec(ini_get("sendmail_path") . " < crip.txt");
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
