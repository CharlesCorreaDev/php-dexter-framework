# Retorna uma lista de algoritmos de hash registrados adequados para hash_hmac

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.hash-hmac-algos.php

---

# hash\_hmac\_algos

(PHP 7 >= 7.2.0, PHP 8)

hash\_hmac\_algos — Retorna uma lista de algoritmos de hash registrados adequados para hash\_hmac

### Descrição

function **hash\_hmac\_algos**(): [array](language.types.array.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array indexado numericamente contendo a lista de algoritmos de hash suportados
adequados para [hash\_hmac()](function.hash-hmac.md).

### Examples

**Exemplo #1 Exemplo de **hash\_hmac\_algos()****

```
<?php
print_r(hash_hmac_algos());
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => md2
    [1] => md4
    [2] => md5
    [3] => sha1
    [4] => sha224
    [5] => sha256
    [6] => sha384
    [7] => sha512/224
    [8] => sha512/256
    [9] => sha512
    [10] => sha3-224
    [11] => sha3-256
    [12] => sha3-384
    [13] => sha3-512
    [14] => ripemd128
    [15] => ripemd160
    [16] => ripemd256
    [17] => ripemd320
    [18] => whirlpool
    [19] => tiger128,3
    [20] => tiger160,3
    [21] => tiger192,3
    [22] => tiger128,4
    [23] => tiger160,4
    [24] => tiger192,4
    [25] => snefru
    [26] => snefru256
    [27] => gost
    [28] => gost-crypto
    [29] => haval128,3
    [30] => haval160,3
    [31] => haval192,3
    [32] => haval224,3
    [33] => haval256,3
    [34] => haval128,4
    [35] => haval160,4
    [36] => haval192,4
    [37] => haval224,4
    [38] => haval256,4
    [39] => haval128,5
    [40] => haval160,5
    [41] => haval192,5
    [42] => haval224,5
    [43] => haval256,5
)
```

### Notas

> **Nota**:
>
> Antes do PHP 7.2.0, o único meio de obter uma lista de algoritmos de hash suportados
> era chamar [hash\_algos()](function.hash-algos.md) que também retorna algoritmos de hash
> que não são adequados para [hash\_hmac()](function.hash-hmac.md).

### Veja também

- [hash\_hmac()](function.hash-hmac.md) - Gera um valor de hash com chave usando o método HMAC
- [hash\_algos()](function.hash-algos.md) - Retorna uma lista de algoritmos de hash registrados

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
