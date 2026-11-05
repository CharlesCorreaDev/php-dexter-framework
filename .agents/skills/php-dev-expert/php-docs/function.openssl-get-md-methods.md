# Obtém métodos de resumo disponíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-get-md-methods.php

---

# openssl\_get\_md\_methods

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

openssl\_get\_md\_methods — Obtém métodos de resumo disponíveis

### Descrição

function **openssl\_get\_md\_methods**([bool](language.types.boolean.md) `$aliases` = **`false`**): [array](language.types.array.md)

Obtém uma lista de métodos de resumo disponíveis.

### Parâmetros

`aliases`
:   Defina como **`true`** se os sinônimos de métodos de resumo devem ser incluídos no
    [array](language.types.array.md) retornado.

### Valor Retornado

Um [array](language.types.array.md) de métodos de resumo disponíveis.

### Examples

**Exemplo #1 Exemplo de **openssl\_get\_md\_methods()****

Mostra a aparência dos métodos de resumo disponíveis e também quais
sinônimos podem estar disponíveis.

```
<?php
$digests             = openssl_get_md_methods();
$digests_and_aliases = openssl_get_md_methods(true);
$digest_aliases      = array_diff($digests_and_aliases, $digests);

print_r($digests);

print_r($digest_aliases);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => DSA
    [1] => DSA-SHA
    [2] => MD2
    [3] => MD4
    [4] => MD5
    [5] => RIPEMD160
    [6] => SHA
    [7] => SHA1
    [8] => SHA224
    [9] => SHA256
    [10] => SHA384
    [11] => SHA512
    [12] => dsaEncryption
    [13] => dsaWithSHA
    [14] => ecdsa-with-SHA1
    [15] => md2
    [16] => md4
    [17] => md5
    [18] => ripemd160
    [19] => sha
    [20] => sha1
    [21] => sha224
    [22] => sha256
    [23] => sha384
    [24] => sha512
)
Array
(
    [2] => DSA-SHA1
    [3] => DSA-SHA1-old
    [4] => DSS1
    [9] => RSA-MD2
    [10] => RSA-MD4
    [11] => RSA-MD5
    [12] => RSA-RIPEMD160
    [13] => RSA-SHA
    [14] => RSA-SHA1
    [15] => RSA-SHA1-2
    [16] => RSA-SHA224
    [17] => RSA-SHA256
    [18] => RSA-SHA384
    [19] => RSA-SHA512
    [28] => dsaWithSHA1
    [29] => dss1
    [32] => md2WithRSAEncryption
    [34] => md4WithRSAEncryption
    [36] => md5WithRSAEncryption
    [37] => ripemd
    [39] => ripemd160WithRSA
    [40] => rmd160
    [43] => sha1WithRSAEncryption
    [45] => sha224WithRSAEncryption
    [47] => sha256WithRSAEncryption
    [49] => sha384WithRSAEncryption
    [51] => sha512WithRSAEncryption
    [52] => shaWithRSAEncryption
    [53] => ssl2-md5
    [54] => ssl3-md5
    [55] => ssl3-sha1
)
```

### Veja também

- [openssl\_digest()](function.openssl-digest.md) - Computa um resumo
- [openssl\_get\_cipher\_methods()](function.openssl-get-cipher-methods.md) - Obtém métodos de criptografia disponíveis

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
