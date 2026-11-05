# Obtém o nome do cursor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-cursor.php

---

# odbc\_cursor

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_cursor — Obtém o nome do cursor

### Descrição

function **odbc\_cursor**([Odbc\Result](class.odbc-result.md) `$statement`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome do cursor para o ID de resultado informado.

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

### Valor Retornado

Retorna o nome do cursor, como uma string, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |

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
