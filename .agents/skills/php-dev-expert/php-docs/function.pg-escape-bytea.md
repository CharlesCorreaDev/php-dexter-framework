# Escapa uma string para inserção em um campo bytea

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-escape-bytea.php

---

# pg\_escape\_bytea

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_escape\_bytea — 
Escapa uma string para inserção em um campo bytea

### Descrição

function **pg\_escape\_bytea**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$string`): [string](language.types.string.md)

**pg\_escape\_bytea()** escapa string para
o tipo de dados bytea. Ele retorna uma string com escape.

> **Nota**:
>
> Quando seleciona-se um tipo bytea com `SELECT`, o PostgreSQL retorna valores de bytes octais
> prefixados com '\' (por exemplo, \032). Os usuários devem converter de volta para o
> formato binário manualmente.
>
> Esta função requer PostgreSQL 7.2 ou posterior. Com PostgreSQL
> 7.2.0 e 7.2.1, os valores bytea devem ser convertidos quando você ativa
> o suporte multibyte. ou seja, `INSERT INTO test_table (image)
> VALUES ('$image_escaped'::bytea);` PostgreSQL 7.2.2 ou
> posterior não precisa de conversão. A exceção é quando a codificação
> de caracteres do cliente e do backend não corresponde e pode haver erro de
> fluxo de vários bytes. O usuário deve então converter para bytea para evitar esse erro.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`string`
:   Uma [string](language.types.string.md) contendo texto ou dados binários a serem inseridos em uma coluna
    bytea.

### Valor Retornado

Uma [string](language.types.string.md) contendo o dado escapado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_escape\_bytea()****

```
<?php
  // Conecta ao banco de dados
  $dbconn = pg_connect('dbname=foo');

  // Lê em um arquivo binário
  $data = file_get_contents('image1.jpg');

  // Escapa o dado binário
  $escaped = pg_escape_bytea($data);

  // Insere-o no banco de dados
  pg_query("INSERT INTO gallery (name, data) VALUES ('Pine trees', '{$escaped}')");
?>
```

### Veja também

- [pg\_unescape\_bytea()](function.pg-unescape-bytea.md) - Desfaz escape binário para tipo bytea
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
