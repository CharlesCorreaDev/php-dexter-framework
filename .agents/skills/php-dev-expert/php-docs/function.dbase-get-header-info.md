# Obtém as informações do cabeçalho do banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dbase-get-header-info.php

---

# dbase\_get\_header\_info

(PHP 5 < 5.3.0, dbase 5, dbase 7)

dbase\_get\_header\_info — Obtém as informações do cabeçalho do banco de dados

### Descrição

function **dbase\_get\_header\_info**([resource](language.types.resource.md) `$database`): [array](language.types.array.md)

Retorna informações sobre a estrutura de colunas do recurso de banco de dados indicado.

### Parâmetros

`database`
:   O recurso do banco de dados, retornado por [dbase\_open()](function.dbase-open.md)
    ou [dbase\_create()](function.dbase-create.md).

### Valor Retornado

Um array indexado com uma entrada para cada coluna no banco de dados. O índice
começa em 0.

Cada elemento do array contém um array associativo com informações da coluna,
como descrito aqui:

name
:   O nome da coluna

type
:   O nome legível do tipo de coluna dbase (ex.: date,
    boolean, etc.)
    Os tipos de campos suportados estão listados na [seção de introdução](book.dbase.md#intro.dbase).

length
:   O número de bytes que esta coluna pode guardar

precision
:   O número de dígitos da precisão decimal da coluna

format
:   Um especificador de formato [printf()](function.printf.md) sugerido para a coluna

offset
:   O índice em byte da coluna a partir do início da linha

Se as informações do cabeçalho do banco de dados não puderem ser lidas, é retornado **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL dbase 7.0.0 | `database` agora é do tipo [resource](language.types.resource.md) ao invés de [int](language.types.integer.md). |

### Examples

**Exemplo #1 Mostrando informações do banco de dados de um arquivo dBase**

```
<?php
// caminho para o arquivo dbase
$db_path = "/tmp/test.dbf";

// Abre o arquivo dbase
$dbh = dbase_open($db_path, 0)
  or die("Erro! Não foi possível abrir o arquivo de banco de dados dbase '$db_path'.");

// Obtém informação de coluna
$column_info = dbase_get_header_info($dbh);

// Mostra a informação
print_r($column_info);
?>
```

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
