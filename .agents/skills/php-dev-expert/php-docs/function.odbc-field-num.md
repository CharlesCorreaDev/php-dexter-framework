# Retorna o número da coluna

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-field-num.php

---

# odbc\_field\_num

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_field\_num — Retorna o número da coluna

### Descrição

function **odbc\_field\_num**([Odbc\Result](class.odbc-result.md) `$statement`, [string](language.types.string.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o número da coluna que corresponde ao nome do campo no
objeto de resultado informado.

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

`field`
:   O nome do campo.

### Valor Retornado

Retorna o número do campo como um inteiro, ou **`false`** em caso de erro.
A numeração dos campos inicia em 1.

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
