# Retorna o tipo de cursor usado por um recurso de instrução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.db2-cursor-type.php

---

# db2\_cursor\_type

(PECL ibm\_db2 >= 1.0.0)

db2\_cursor\_type — 
Retorna o tipo de cursor usado por um recurso de instrução

### Descrição

function **db2\_cursor\_type**([resource](language.types.resource.md) `$stmt`): [int](language.types.integer.md)

Retorna o tipo de cursor usado por um recurso de instrução. Use isso para determinar
se está sendo usado um cursor somente para avanço ou um cursor rolável.

### Parâmetros

`stmt`
:   Um recurso de instrução válido.

### Valor Retornado

Retorna **`DB2_FORWARD_ONLY`** se o recurso de instrução
usar um cursor somente para avanço ou **`DB2_SCROLLABLE`** se
o recurso de instrução usar um cursor rolável.

### Veja também

- [db2\_prepare()](function.db2-prepare.md) - Prepara uma instrução SQL para ser executada

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
