# Obtém a precisão de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-field-scale.php

---

# odbc\_field\_scale

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_field\_scale — Obtém a precisão de um campo

### Descrição

function **odbc\_field\_scale**([Odbc\Result](class.odbc-result.md) `$statement`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém a precisão do campo referenciado pelo número em um identificador
de resultado informado.

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

`field`
:   O número do campo. A numeração do campo inicia em 1.

### Valor Retornado

Retorna a precisão do campo como um inteiro, ou **`false`** em caso de erro.

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
