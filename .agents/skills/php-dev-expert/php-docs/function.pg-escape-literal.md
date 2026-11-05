# Escapa um literal para inserção em um campo de texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-escape-literal.php

---

# pg\_escape\_literal

(PHP 5 >= 5.4.4, PHP 7, PHP 8)

pg\_escape\_literal — 
Escapa um literal para inserção em um campo de texto

### Descrição

function **pg\_escape\_literal**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

**pg\_escape\_literal()** escapa um literal para
consultar o banco de dados PostgreSQL. Ele retorna um literal de escape no
formato PostgreSQL. **pg\_escape\_literal()** adiciona
aspas antes e depois dos dados. Os usuários não devem adicionar aspas. O uso
desta função é recomendado em vez
de [pg\_escape\_string()](function.pg-escape-string.md). Se o tipo da
coluna for bytea, [pg\_escape\_bytea()](function.pg-escape-bytea.md) deverá ser usado
no lugar. Para identificadores de escape (por exemplo, tabelas, nomes de
campos), [pg\_escape\_identifier()](function.pg-escape-identifier.md) deve ser usado.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`string`
:   Uma [string](language.types.string.md) contendo texto a ser escapado.

### Valor Retornado

Uma [string](language.types.string.md) contendo os dados escapados ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_escape\_literal()****

```
<?php
  // Conecta ao banco de dados
  $dbconn = pg_connect('dbname=foo');

  // Lê um arquivo de texto (contendo apóstrofos e barras invertidas)
  $data = file_get_contents('letter.txt');

  // Escapa dos dados de texto
  $escaped = pg_escape_literal($data);

  // Insere-o no banco de dados. Observe que não há aspas em torno de {$escaped}
  pg_query("INSERT INTO correspondence (name, data) VALUES ('My letter', {$escaped})");
?>
```

### Veja também

- [pg\_escape\_identifier()](function.pg-escape-identifier.md) - Escapa um identificador para inserção em um campo de texto
- [pg\_escape\_bytea()](function.pg-escape-bytea.md) - Escapa uma string para inserção em um campo bytea
- [pg\_escape\_string()](function.pg-escape-string.md) - Escapa uma string para consulta

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
