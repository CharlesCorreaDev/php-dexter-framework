# Filtros de String

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filters.string.php

---

## Filtros de String

Cada um destes filtros faz precisamente o que o seu nome implica e
corresponde ao comportamento da função interna de tratamento de string homônima.
Para mais informações sobre um determinado filtro, veja a página do manual para
a função correspondente.

## string.rot13

O uso desse filtro é equivalente a processar todos os dados do fluxo com
a função [str\_rot13()](function.str-rot13.md).

**Exemplo #1 string.rot13**

```
<?php
$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'string.rot13');
fwrite($fp, "Isto é um teste.\n");
/* Saída:    Vfgb é hz grfgr.   */
?>
```

## string.toupper

O uso desse filtro é equivalente a processar todos os dados do fluxo com
a função [strtoupper()](function.strtoupper.md).

**Exemplo #2 string.toupper**

```
<?php
$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'string.toupper');
fwrite($fp, "Isto é um teste.\n");
/* Saída:    ISTO é UM TESTE.   */
?>
```

## string.tolower

O uso desse filtro é equivalente a processar todos os dados do fluxo com
a função [strtolower()](function.strtolower.md).

**Exemplo #3 string.tolower**

```
<?php
$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'string.tolower');
fwrite($fp, "Isto é um teste.\n");
/* Saída:    isto é um teste.   */
?>
```

## string.strip\_tags

O uso desse filtro é equivalente a processar todos os dados do fluxo com
a função [strip\_tags()](function.strip-tags.md).
Ela aceita parâmetros em uma das duas formas:
Ou como uma string contendo uma lista de tags similares ao
segundo parâmetro da função [strip\_tags()](function.strip-tags.md),
ou como um array com os nomes das tags.

**Aviso**

Este recurso foi
*DESCONTINUADO* a partir do PHP 7.3.0. O uso deste recurso
é fortemente desencorajado.

**Exemplo #4 string.strip\_tags**

```
<?php
$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'string.strip_tags', STREAM_FILTER_WRITE, "<b><i><u>");
fwrite($fp, "<b>texto em negrito</b> aumentado para um <h1>heading de nível 1</h1>\n");
fclose($fp);
/* Saída :   texto em negrito</b> aumentado para um heading de nível 1   */

$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'string.strip_tags', STREAM_FILTER_WRITE, array('b','i','u'));
fwrite($fp, "<b>texto em negrito</b> aumentado para um <h1>heading de nível 1</h1>\n");
fclose($fp);
/* Saída:    texto em negrito</b> aumentado para um heading de nível 1   */
?>
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
