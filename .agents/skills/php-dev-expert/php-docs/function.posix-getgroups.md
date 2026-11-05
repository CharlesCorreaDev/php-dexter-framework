# Retorna o conjunto de grupos do processo atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-getgroups.php

---

# posix\_getgroups

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_getgroups — Retorna o conjunto de grupos do processo atual

### Descrição

function **posix\_getgroups**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém o conjunto de grupos do processo atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de inteiros contendo os IDs numéricos do conjunto
de grupos no processo atual, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de uso de **posix\_getgroups()****

```
<?php

$groups = posix_getgroups();

print_r($groups);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => 4
    [1] => 20
    [2] => 24
    [3] => 25
    [4] => 29
    [5] => 30
    [6] => 33
    [7] => 44
    [8] => 46
    [9] => 104
    [10] => 109
    [11] => 110
    [12] => 1000
)
```

### Veja também

- [posix\_getgrgid()](function.posix-getgrgid.md) - Retorna informação sobre um grupo a partir de um ID de grupo

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
