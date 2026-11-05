# Recupera informações sobre tipos de dados suportados pela fonte de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-gettypeinfo.php

---

# odbc\_gettypeinfo

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_gettypeinfo — Recupera informações sobre tipos de dados suportados pela fonte de dados

### Descrição

function **odbc\_gettypeinfo**([Odbc\Connection](class.odbc-connection.md) `$odbc`, [int](language.types.integer.md) `$data_type` = 0): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Recupera informações sobre tipos de dados suportados pela fonte de dados.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

`data_type`
:   O tipo de dados, que pode ser usado para restringir as informações a um
    único tipo de dados.

### Valor Retornado

Retorna um objeto de resultado ODBC ou **`false`** em caso de falha.

O conjunto de resultados possui as seguintes colunas:

- TYPE\_NAME
- DATA\_TYPE
- PRECISION
- LITERAL\_PREFIX
- LITERAL\_SUFFIX
- CREATE\_PARAMS
- NULLABLE
- CASE\_SENSITIVE
- SEARCHABLE
- UNSIGNED\_ATTRIBUTE
- MONEY
- AUTO\_INCREMENT
- LOCAL\_TYPE\_NAME
- MINIMUM\_SCALE
- MAXIMUM\_SCALE

O conjunto de resultados é ordenado por DATA\_TYPE e TYPE\_NAME.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |

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
