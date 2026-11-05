# Retorna a posição de busca atual a de um objeto grande

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-lo-tell.php

---

# pg\_lo\_tell

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_lo\_tell — 
Retorna a posição de busca atual a de um objeto grande

### Descrição

function **pg\_lo\_tell**([PgSql\Lob](class.pgsql-lob.md) `$lob`): [int](language.types.integer.md)

**pg\_lo\_tell()** retorna a posição atual (deslocamento
do início) de um objeto grande.

Para usar a interface de objeto grande, é necessário
incluí-la em um bloco de transação.

### Parâmetros

`lob`
:   Uma instância de [PgSql\Lob](class.pgsql-lob.md), retornada por [pg\_lo\_open()](function.pg-lo-open.md).

### Valor Retornado

O deslocamento de busca atual (em número de bytes) desde o início do objeto
grande. Se houver um erro, o valor de retorno será negativo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `lob` agora espera uma instância de [PgSql\Lob](class.pgsql-lob.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_lo\_tell()****

```
<?php
   $doc_oid = 189762345;
   $database = pg_connect("dbname=jacarta");
   pg_query($database, "begin");
   $handle = pg_lo_open($database, $doc_oid, "r");
   // Ignora os primeiros 50.000 bytes
   pg_lo_seek($handle, 50000, PGSQL_SEEK_SET);
   // Vê o quão longe nós pulamos
   $offset = pg_lo_tell($handle);
   echo "A posição de busca é: $offset";
   pg_query($database, "commit");
?>
```

O exemplo acima produzirá:

```
A posição de busca é: 50000
```

### Veja também

- [pg\_lo\_seek()](function.pg-lo-seek.md) - Aponta para posição dentro de um objeto grande

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
