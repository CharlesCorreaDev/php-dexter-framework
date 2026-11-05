# Retorna o tamanho do IV pertencente a uma combinação específica de cifra/modo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-get-iv-size.php

---

# mcrypt\_get\_iv\_size

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_get\_iv\_size — Retorna o tamanho do IV pertencente a uma combinação específica de cifra/modo

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_get\_iv\_size**([string](language.types.string.md) `$cipher`, [string](language.types.string.md) `$mode`): [int](language.types.integer.md)

Obtém o tamanho do IV pertencente a uma combinação
`cipher`/`mode` específica.

É mais útil usar a função [mcrypt\_enc\_get\_iv\_size()](function.mcrypt-enc-get-iv-size.md),
pois ela usa o recurso retornado por
[mcrypt\_module\_open()](function.mcrypt-module-open.md).

### Parâmetros

`cipher`
:   Uma das constantes **`MCRYPT_nome_da_cifra`** ou o nome do algoritmo como string.

`mode`
:   Uma das constantes **`MCRYPT_MODE_nome_do_modo`** ou uma das seguintes strings: "ecb", "cbc", "cfb", "ofb", "nofb" ou "stream".

    O IV é ignorado no modo ECB, pois este modo não o requer.
    É necessário ter o mesmo IV (pense: ponto de partida) tanto nos estágios de
    criptografia quanto de descriptografia, caso contrário, a criptografia falhará.

### Valor Retornado

Retorna o tamanho do Vetor de Inicialização (IV) em bytes. Em caso de erro, a
função retorna **`false`**. Se o IV for ignorado na combinação cifra/modo
especificada, zero é retornado.

### Examples

**Exemplo #1 Exemplo de **mcrypt\_get\_iv\_size()****

```
<?php
    echo mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB) . "\n";

    echo mcrypt_get_iv_size('des', 'ecb') . "\n";
?>
```

### Veja também

- [mcrypt\_get\_block\_size()](function.mcrypt-get-block-size.md) - Obtém o tamanho do bloco da cifra especificada
- [mcrypt\_enc\_get\_iv\_size()](function.mcrypt-enc-get-iv-size.md) - Retorna o tamanho do IV do algoritmo aberto
- [mcrypt\_create\_iv()](function.mcrypt-create-iv.md) - Cria um vetor de inicialização (IV) a partir de uma fonte aleatória

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
