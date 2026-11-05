# Obtém o tamanho do bloco da cifra especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-get-block-size.php

---

# mcrypt\_get\_block\_size

(PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_get\_block\_size — Obtém o tamanho do bloco da cifra especificada

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_get\_block\_size**([int](language.types.integer.md) `$cipher`): [int](language.types.integer.md)|[false](language.types.singleton.md)

function **mcrypt\_get\_block\_size**([string](language.types.string.md) `$cipher`, [string](language.types.string.md) `$mode`): [int](language.types.integer.md)|[false](language.types.singleton.md)

O primeiro protótipo é quando compilado com libmcrypt 2.2.x, o
segundo quando compilado com libmcrypt 2.4.x ou 2.5.x.

**mcrypt\_get\_block\_size()** é usado para obter o
tamanho de um bloco do `cipher` especificado (em
combinação com um modo de criptografia).

É mais útil usar a função [mcrypt\_enc\_get\_block\_size()](function.mcrypt-enc-get-block-size.md),
pois ela usa o recurso retornado por
[mcrypt\_module\_open()](function.mcrypt-module-open.md).

### Parâmetros

`cipher`
:   Uma das constantes **`MCRYPT_nome_da_cifra`** ou o nome do algoritmo como string.

`mode`
:   Uma das constantes **`MCRYPT_MODE_nome_do_modo`** ou uma das seguintes strings: "ecb", "cbc", "cfb", "ofb", "nofb" ou "stream".

### Valor Retornado

Retorna o tamanho do bloco do algoritmo em bytes ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mcrypt\_get\_block\_size()****

Este exemplo mostra como usar esta função quando compilada com libmcrypt
2.4.x e 2.5.x.

```
<?php

echo mcrypt_get_block_size('tripledes', 'ecb'); // 8

?>
```

### Veja também

- [mcrypt\_get\_key\_size()](function.mcrypt-get-key-size.md) - Obtém o tamanho da chave da cifra especificada
- [mcrypt\_enc\_get\_block\_size()](function.mcrypt-enc-get-block-size.md) - Retorna o tamanho do bloco do algoritmo aberto
- [mcrypt\_encrypt()](function.mcrypt-encrypt.md) - Criptografa texto simples com parâmetros fornecidos

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
