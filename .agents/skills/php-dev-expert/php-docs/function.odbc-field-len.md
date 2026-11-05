# Obtém o tamanho (precisão) de um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-field-len.php

---

# odbc\_field\_len

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_field\_len — Obtém o tamanho (precisão) de um campo

### Descrição

function **odbc\_field\_len**([Odbc\Result](class.odbc-result.md) `$statement`, [int](language.types.integer.md) `$field`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém o tamanho do campo referenciado pelo número no identificador
de resultado informado.

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

`field`
:   O número do campo. A numeração dos campos inicia em 0.

### Valor Retornado

Retorna o tamanho do campo, ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Veja também

- [odbc\_field\_scale()](function.odbc-field-scale.md) - Obtém a precisão de um campo para obter a precisão de um
  número de ponto flutuante

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
