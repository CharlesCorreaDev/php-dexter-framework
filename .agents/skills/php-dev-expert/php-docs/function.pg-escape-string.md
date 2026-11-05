# Escapa uma string para consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-escape-string.php

---

# pg\_escape\_string

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_escape\_string — 
Escapa uma string para consulta

### Descrição

function **pg\_escape\_string**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$string`): [string](language.types.string.md)

**pg\_escape\_string()** escapa uma string para consultar
o banco de dados. Ele retorna uma string de escape no formato PostgreSQL
sem aspas. [pg\_escape\_literal()](function.pg-escape-literal.md) é
a forma preferida de escapar dos parâmetros SQL para PostgreSQL.
[addslashes()](function.addslashes.md) não deve ser usado com PostgreSQL.
Se o tipo da coluna for
bytea, [pg\_escape\_bytea()](function.pg-escape-bytea.md) deverá ser usado
no lugar. [pg\_escape\_identifier()](function.pg-escape-identifier.md) deve ser usado para
escape de identificadores (por exemplo, nomes de tabelas, nomes de campos)

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

Uma [string](language.types.string.md) contendo os dados escapados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_escape\_string()****

```
<?php
  // Conecta ao banco de dados
  $dbconn = pg_connect('dbname=foo');

  // Lê em um arquivo de texto (contendo apóstrofos e barras invertidas)
  $data = file_get_contents('letter.txt');

  // Escape dos dados de texto
  $escaped = pg_escape_string($data);

  // Insira-o no banco de dados
  pg_query("INSERT INTO correspondence (name, data) VALUES ('My letter', '{$escaped}')");
?>
```

### Veja também

- [pg\_escape\_bytea()](function.pg-escape-bytea.md) - Escapa uma string para inserção em um campo bytea

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
