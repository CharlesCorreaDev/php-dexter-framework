# Obtém o comprimento da chave da cifra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-cipher-key-length.php

---

# openssl\_cipher\_key\_length

(PHP 8 >= 8.2.0)

openssl\_cipher\_key\_length — Obtém o comprimento da chave da cifra

### Descrição

function **openssl\_cipher\_key\_length**([string](language.types.string.md) `$cipher_algo`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o comprimento da chave da cifra.

### Parâmetros

`cipher_algo`
:   O método de criptografia, consulte [openssl\_get\_cipher\_methods()](function.openssl-get-cipher-methods.md) para uma lista de valores possíveis.

### Valor Retornado

Retorna o comprimento da cifra em caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** quando o algoritmo
de criptografia é desconhecido.

### Examples

**Exemplo #1 Exemplo de **openssl\_cipher\_key\_length()****

```
<?php
$method = 'AES-128-CBC';

var_dump(openssl_cipher_key_length($method));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(16)
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
