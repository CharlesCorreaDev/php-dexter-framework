# Número de colunas em um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-num-fields.php

---

# odbc\_num\_fields

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_num\_fields — Número de colunas em um resultado

### Descrição

function **odbc\_num\_fields**([Odbc\Result](class.odbc-result.md) `$statement`): [int](language.types.integer.md)

Obtém o número de campos (colunas) em um resultado ODBC.

### Parâmetros

`statement`
:   O objeto de resultado ODBC retornado pela função [odbc\_exec()](function.odbc-exec.md).

### Valor Retornado

Retorna o número de campos, ou -1 em caso de erro.

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
