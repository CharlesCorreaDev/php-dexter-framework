# Valida uma data gregoriana

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.checkdate.php

---

# checkdate

(PHP 4, PHP 5, PHP 7, PHP 8)

checkdate — Valida uma data gregoriana

### Descrição

function **checkdate**([int](language.types.integer.md) `$month`, [int](language.types.integer.md) `$day`, [int](language.types.integer.md) `$year`): [bool](language.types.boolean.md)

Verifica a validade da data formada pelos argumentos. Uma data é considerada
válida se cada parâmetro é adequadamente definido.

### Parâmetros

`month`
:   O mês entre 1 e 12.

`day`
:   O dia está dentro do número permitido de dias para o mês
    (`month`). Anos (`year`) bissextos são
    levados em consideração.

`year`
:   O ano está entre 1 e 32767, inclusive.

### Valor Retornado

Retorna **`true`** se a data informada é valida; caso contrário retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **checkdate()****

```
<?php
var_dump(checkdate(12, 31, 2000));
var_dump(checkdate(2, 29, 2001));
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

### Veja também

- [mktime()](function.mktime.md) - Obtém um timestamp Unix de uma data
- [strtotime()](function.strtotime.md) - Interpreta qualquer descrição textual de data/horário em inglês para timestamp Unix

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
