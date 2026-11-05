# Obtém o tamanho da chave da cifra especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-get-key-size.php

---

# mcrypt\_get\_key\_size

(PHP 4, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_get\_key\_size — Obtém o tamanho da chave da cifra especificada

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_get\_key\_size**([int](language.types.integer.md) `$cipher`): [int](language.types.integer.md)|[false](language.types.singleton.md)

function **mcrypt\_get\_key\_size**([string](language.types.string.md) `$cipher`, [string](language.types.string.md) `$mode`): [int](language.types.integer.md)|[false](language.types.singleton.md)

O primeiro protótipo é quando compilado com libmcrypt 2.2.x, o
segundo quando compilado com libmcrypt 2.4.x ou 2.5.x.

**mcrypt\_get\_key\_size()** é usado para obter o tamanho
de uma chave do `cipher` especificado (em
combinação com um modo de criptografia).

É mais útil usar a função [mcrypt\_enc\_get\_key\_size()](function.mcrypt-enc-get-key-size.md),
pois ela usa o recurso retornado por [mcrypt\_module\_open()](function.mcrypt-module-open.md).

### Parâmetros

`cipher`
:   Uma das constantes **`MCRYPT_nome_da_cifra`** ou o nome do algoritmo como string.

`mode`
:   Uma das constantes **`MCRYPT_MODE_nome_do_modo`** ou uma das seguintes strings: "ecb", "cbc", "cfb", "ofb", "nofb" ou "stream".

### Valor Retornado

Retorna o tamanho máximo de chave suportado pelo algoritmo em bytes
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **mcrypt\_get\_key\_size()****

```
<?php
    echo mcrypt_get_key_size('tripledes', 'ecb');
?>
```

O exemplo acima mostra como usar esta função quando
compilado com libmcrypt 2.4.x ou 2.5.x.

O exemplo acima produzirá:

```
24
```

### Veja também

- [mcrypt\_get\_block\_size()](function.mcrypt-get-block-size.md) - Obtém o tamanho do bloco da cifra especificada
- [mcrypt\_enc\_get\_key\_size()](function.mcrypt-enc-get-key-size.md) - Retorna o tamanho máximo de chave suportado do modo aberto
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
