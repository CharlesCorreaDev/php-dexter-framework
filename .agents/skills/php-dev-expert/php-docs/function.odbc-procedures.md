# Obtém a lista de procedimentos armazenados em uma fonte de dados específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-procedures.php

---

# odbc\_procedures

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_procedures — Obtém a lista de procedimentos armazenados em uma fonte de dados específica

### Descrição

function **odbc\_procedures**(  
    [Odbc\Connection](class.odbc-connection.md) `$odbc`,  
    [?](language.types.null.md)[string](language.types.string.md) `$catalog` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$schema` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$procedure` = **`null`**  
): [Odbc\Result](class.odbc-result.md)|[false](language.types.singleton.md)

Lista todos os procedimentos no intervalo solicitado.

### Parâmetros

`odbc`
:   O objeto da conexão ODBC.
    Consulte [odbc\_connect()](function.odbc-connect.md) para obter detalhes.

`catalog`
:   O catálogo ('qualifier' na linguagem ODBC 2).

`schema`
:   O esquema ('owner' na linguagem ODBC 2).
    Este parâmetro aceita os seguintes padrões de pesquisa:
    `%` para corresponder a zero ou mais caracteres
    e `_` para corresponder a um único caractere.

`procedure`
:   O nome.
    Este parâmetro aceita os seguintes padrões de pesquisa:
    `%` para corresponder a zero ou mais caracteres
    e `_` para corresponder a um único caractere.

### Valor Retornado

Retorna um objeto de resultado ODBC contendo a informação ou **`false`** em caso de falha.

O conjunto de resultados possui as seguintes colunas:

- `PROCEDURE_CAT`
- `PROCEDURE_SCHEM`
- `PROCEDURE_NAME`
- `NUM_INPUT_PARAMS`
- `NUM_OUTPUT_PARAMS`
- `NUM_RESULT_SETS`
- `REMARKS`
- `PROCEDURE_TYPE`

Drivers podem listar colunas adicionais.

O conjunto de resultados é ordenado por `PROCEDURE_CAT`,
`PROCEDURE_SCHEMA` e `PROCEDURE_NAME`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `odbc` agora espera uma instância de [Odbc\Connection](class.odbc-connection.md); anteriormente, esperava um [resource](language.types.resource.md). |
| 8.4.0 | Esta função agora retorna uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, retornava um [resource](language.types.resource.md). |
| 8.0.0 | Antes desta versão, a função só podia ser chamada com um ou quatro argumentos. |

### Examples

**Exemplo #1 Lista procedimentos armazenados de um banco de dados**

```
<?php
$conn = odbc_connect($dsn, $user, $pass);
$procedures = odbc_procedures($conn, $catalog, $schema, '%');
while (($row = odbc_fetch_array($procedures))) {
    print_r($row);
    break; // outras linhas omitidas por questões de brevidade
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [PROCEDURE_CAT] => TutorialDB
    [PROCEDURE_SCHEM] => dbo
    [PROCEDURE_NAME] => GetEmployeeSalesYTD;1
    [NUM_INPUT_PARAMS] => -1
    [NUM_OUTPUT_PARAMS] => -1
    [NUM_RESULT_SETS] => -1
    [REMARKS] =>
    [PROCEDURE_TYPE] => 2
)
```

### Veja também

- [odbc\_procedurecolumns()](function.odbc-procedurecolumns.md) - Recupera informações sobre parâmetros para procedimentos
- [odbc\_tables()](function.odbc-tables.md) - Obtém a lista de nomes de tabelas armazenadas em uma fonte de dados específica

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
