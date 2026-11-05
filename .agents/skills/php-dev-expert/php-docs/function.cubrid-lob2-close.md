# Fecha objeto LOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob2-close.php

---

# cubrid\_lob2\_close

(PECL CUBRID >= 8.4.1)

cubrid\_lob2\_close — Fecha objeto LOB

### Descrição

function **cubrid\_lob2\_close**([resource](language.types.resource.md) `$lob_identifier`): [bool](language.types.boolean.md)

A função **cubrid\_lob2\_close()** é usada para fechar o objeto LOB
retornado por [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) ou obtido do conjunto de resultados.

### Parâmetros

`lob_identifier`
:   Identificador do LOB como resultado da função [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) ou obtido do conjunto de resultados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) - Cria um objeto LOB

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
