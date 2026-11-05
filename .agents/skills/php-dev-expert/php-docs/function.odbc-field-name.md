# Obtém o nome da coluna

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-field-name.php

---

# odbc\_field\_name

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_field\_name — Obtém o nome da coluna

### Descrição

function **odbc\_field\_name**([Odbc\Result](class.odbc-result.md) `$statement`, [int](language.types.integer.md) `$field`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o nome do campo ocupando o número da coluna em um dado
objeto de resultado.

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

`field`
:   O número do campo. A numeração de campos inicia em 1.

### Valor Retornado

Retorna o nome do campo como uma string, ou **`false`** em caso de erro.

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
