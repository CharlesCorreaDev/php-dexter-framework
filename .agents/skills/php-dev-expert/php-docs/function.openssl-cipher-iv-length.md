# Obtém o comprimento do vetor de inicialização da cifra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-cipher-iv-length.php

---

# openssl\_cipher\_iv\_length

(PHP 5 >= 5.3.3, PHP 7, PHP 8)

openssl\_cipher\_iv\_length — Obtém o comprimento do vetor de inicialização da cifra

### Descrição

function **openssl\_cipher\_iv\_length**([string](language.types.string.md) `$cipher_algo`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o comprimento do vetor de inicialização (iv) da cifra

### Parâmetros

`cipher_algo`
:   O método de criptografia, consulte [openssl\_get\_cipher\_methods()](function.openssl-get-cipher-methods.md) para uma lista de valores possíveis.

### Valor Retornado

Retorna o comprimento da cifra em caso de sucesso, ou **`false`** em caso de falha.

### Erros/Exceções

Emite um erro de nível **`E_WARNING`** quando o algoritmo
de criptografia é desconhecido.

### Examples

**Exemplo #1 Exemplo de **openssl\_cipher\_iv\_length()****

```
<?php
$method = 'AES-128-CBC';
$ivlen = openssl_cipher_iv_length($method);

echo $ivlen;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
16
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
