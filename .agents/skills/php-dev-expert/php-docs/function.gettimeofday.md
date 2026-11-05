# Obtém o horário atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gettimeofday.php

---

# gettimeofday

(PHP 4, PHP 5, PHP 7, PHP 8)

gettimeofday — Obtém o horário atual

### Descrição

function **gettimeofday**([bool](language.types.boolean.md) `$as_float` = **`false`**): [array](language.types.array.md)|[float](language.types.float.md)

Esta é uma interface para gettimeofday(2). Retorna um
array contendo os dados retornando a chamada
ao sistema.

### Parâmetros

`as_float`
:   Quando definido como **`true`**, um float, ao invés de array, é retornado.

### Valor Retornado

Por padrão, um [array](language.types.array.md) é retornado. Se o parâmetro `as_float`
é definido, então um [float](language.types.float.md) é retornado.

Chaves do array:

- "sec" - segundos desde a época Unix
- "usec" - microssegundos
- "minuteswest" - minutos a oeste de Greenwich
- "dsttime" - tipo de correção dst

### Examples

**Exemplo #1 Exemplo da função **gettimeofday()****

```
<?php
print_r(gettimeofday());

echo gettimeofday(true);
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [sec] => 1073504408
    [usec] => 238215
    [minuteswest] => 0
    [dsttime] => 1
)
1073504408.23910
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
