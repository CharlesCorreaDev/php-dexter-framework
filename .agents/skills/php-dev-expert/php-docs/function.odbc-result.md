# Obtém dados de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-result.php

---

# odbc\_result

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_result — Obtém dados de resultados

### Descrição

function **odbc\_result**([Odbc\Result](class.odbc-result.md) `$statement`, [string](language.types.string.md)|[int](language.types.integer.md) `$field`): [string](language.types.string.md)|[bool](language.types.boolean.md)|[null](language.types.null.md)

Obtém dados de resultados.

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

`field`
:   O nome do campo que está sendo recuperado. Pode ser um inteiro contendo
    o número da coluna do campo desejado; ou pode ser uma string
    contendo o nome do campo.

### Valor Retornado

Retorna o conteúdo da string do campo, **`false`** em caso de erro, **`null`** para
dados NULL ou **`true`** para dados binários.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Examples

A primeira chamada a **odbc\_result()** retorna o
valor do terceiro campo no registro atual do resultado da
consulta. A segunda chamada à função
**odbc\_result()** retorna o valor do campo
cujo nome é "val" no registro atual do resultado da
consulta. Ocorre um erro se o parâmetro de número de coluna para o campo
for menor que um, ou se exceder o número de colunas (ou campos) no
registro atual. Da mesma forma, ocorre um erro se um campo tiver um
nome que não é um dos nomes de campo da(s) tabela(s) que
está(ão) sendo consultada(s).

**Exemplo #1 Exemplos de **odbc\_result()****

```
<?php
$item_3   = odbc_result($Query_ID, 3);
$item_val = odbc_result($Query_ID, "val");
?>
```

### Notas

Índices de campo iniciam em 1. Sobre a forma que dados binários
ou de colunas longas são retornados, consulte as funções
[odbc\_binmode()](function.odbc-binmode.md) e
[odbc\_longreadlen()](function.odbc-longreadlen.md).

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
