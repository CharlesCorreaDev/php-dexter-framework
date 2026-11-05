# Converte valores de array associativo em formas adequadas para instruções SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-convert.php

---

# pg\_convert

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

pg\_convert — 
Converte valores de array associativo em formas adequadas para instruções SQL

### Descrição

function **pg\_convert**(  
    [PgSql\Connection](class.pgsql-connection.md) `$connection`,  
    [string](language.types.string.md) `$table_name`,  
    [array](language.types.array.md) `$values`,  
    [int](language.types.integer.md) `$flags` = 0  
): [array](language.types.array.md)|[false](language.types.singleton.md)

**pg\_convert()** verifica e converte os valores em
`values` em valores adequados para uso em uma instrução
SQL. A pré-condição para **pg\_convert()** é a
existência de uma tabela `table_name` que tenha pelo menos
tantas colunas quanto `values` tem elementos. Os
nomes dos campos em `table_name` devem corresponder aos
índices em `values` e os tipos de dados correspondentes devem ser
compatíveis. Retorna um array com os valores convertidos em caso de sucesso, **`false`**
caso contrário.

> **Nota**:
>
> Os valores booleanos são aceitos e convertidos em booleanos do PostgreSQL.
> Representações de string de valores booleanos também são suportadas. **`null`** é
> convertido para PostgreSQL NULL.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).

`table_name`
:   Nome da tabela na qual converter tipos.

`values`
:   Dados a serem convertidos.

`flags`
:   Qualquer número de **`PGSQL_CONV_IGNORE_DEFAULT`**,
    **`PGSQL_CONV_FORCE_NULL`** ou
    **`PGSQL_CONV_IGNORE_NOT_NULL`**, combinado.

### Valor Retornado

Um [array](language.types.array.md) de valores convertidos, ou **`false`** em caso de falha.

### Erros/Exceções

Um [ValueError](class.valueerror.md) ou [TypeError](class.typeerror.md) é lançado
quando o valor ou tipo de campo não corresponde corretamente ao tipo do PostgreSQL.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Agora lança um erro [ValueError](class.valueerror.md) ou [TypeError](class.typeerror.md) quando o valor ou tipo de campo não corresponde corretamente ao tipo do PostgreSQL; anteriormente um **`E_WARNING`** era emitido. |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_convert()****

```
<?php
  $dbconn = pg_connect('dbname=foo');

  $tmp = array(
      'author' => 'Joe Thackery',
      'year' => 2005,
      'title' => 'My Life, by Joe Thackery'
  );

  $vals = pg_convert($dbconn, 'authors', $tmp);
?>
```

### Veja também

- [pg\_meta\_data()](function.pg-meta-data.md) - Obtém metadados para tabela
- [pg\_insert()](function.pg-insert.md) - Insere array na tabela
- [pg\_select()](function.pg-select.md) - Seleciona registros
- [pg\_update()](function.pg-update.md) - Atualiza tabela
- [pg\_delete()](function.pg-delete.md) - Exclui registros

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
