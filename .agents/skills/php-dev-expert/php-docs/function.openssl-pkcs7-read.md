# Exporta o arquivo PKCS7 para um array de certificados PEM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkcs7-read.php

---

# openssl\_pkcs7\_read

(PHP 7 >= 7.2.0, PHP 8)

openssl\_pkcs7\_read — Exporta o arquivo PKCS7 para um array de certificados PEM

### Descrição

function **openssl\_pkcs7\_read**([string](language.types.string.md) `$data`, [array](language.types.array.md) `&$certificates`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`data`
:   A sequência de dados a ser analisada (formato p7b).

`certificates`
:   O array de certificados PEM dos dados de entrada p7b.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Obtendo um array PEM de um arquivo P7B**

```
<?php

$file = 'certs.p7b';

$f = file_get_contents($file);
$p7 = array();
$r = openssl_pkcs7_read($f, $p7);

if ($r === false) {
    printf("ERRO: %s não é um arquivo p7b válido".PHP_EOL, $file);
        for($e = openssl_error_string(), $i = 0; $e; $e = openssl_error_string(), $i++)
            printf("SSL l%d: %s".PHP_EOL, $i, $e);
    exit(1);
}

print_r($p7);
?>
```

### Veja também

- [openssl\_csr\_sign()](function.openssl-csr-sign.md) - Assina um CSR com outro certificado (ou ele mesmo) e gera um certificado

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
