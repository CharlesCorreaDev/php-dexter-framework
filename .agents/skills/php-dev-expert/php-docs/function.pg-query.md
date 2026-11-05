# Executa uma consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pg-query.php

---

# pg\_query

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

pg\_query — Executa uma consulta

### Descrição

function **pg\_query**([PgSql\Connection](class.pgsql-connection.md) `$connection` = ?, [string](language.types.string.md) `$query`): [PgSql\Result](class.pgsql-result.md)|[false](language.types.singleton.md)

**pg\_query()** executa a `query`
na `connection` do banco de dados especificado.
[pg\_query\_params()](function.pg-query-params.md) deve ser preferido
na maioria dos casos.

Se ocorrer um erro e **`false`** for retornado, os detalhes do erro poderão
ser recuperados usando a função [pg\_last\_error()](function.pg-last-error.md)
se a conexão for válida.

> **Nota**:
>
> Embora `connection` possa ser omitido, isso
> não é recomendado, pois pode ser a causa de erros difíceis de encontrar
> em scripts.

> **Nota**:
>
> Esta função costumava ser chamada de **pg\_exec()**.
> **pg\_exec()** ainda está disponível por motivos de
> compatibilidade, mas os usuários são incentivados a usar o nome mais recente.

### Parâmetros

`connection`
:   Uma instância de [PgSql\Connection](class.pgsql-connection.md).
    Quando o parâmetro `connection` não for especificado, a conexão padrão será usada.
    A conexão padrão é a última conexão feita por [pg\_connect()](function.pg-connect.md)
    ou [pg\_pconnect()](function.pg-pconnect.md).

    **Aviso**

    A partir do PHP 8.1.0, usar a conexão padrão foi descontinuado.

`query`
:   A instrução ou instruções SQL a serem executadas. Quando múltiplas instruções são passadas para a função,
    elas são automaticamente executadas como uma transação, a menos que haja comandos BEGIN/COMMIT explícitos
    incluídos na string de consulta. No entanto, não é recomendado usar múltiplas transações em uma chamada de função.

    **Aviso**

    A interpolação de strings de dados fornecidos pelo usuário é extremamente perigosa e
    provavelmente levará a vulnerabilidades de [injeção
    de SQL](security.database.sql-injection.md). Na maioria dos casos,
    [pg\_query\_params()](function.pg-query-params.md) deve ser preferido, passando
    valores fornecidos pelo usuário como parâmetros em vez de substituí-los
    na string de consulta.

    Quaisquer dados fornecidos pelo usuário substituídos diretamente em uma string de consulta devem
    ser [escapados corretamente](function.pg-escape-string.md).

### Valor Retornado

Uma instância [PgSql\Result](class.pgsql-result.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Agora retorna uma instância de [PgSql\Result](class.pgsql-result.md); anteriormente, um [resource](language.types.resource.md) era retornado. |
| 8.1.0 | O parâmetro `connection` agora espera uma instância de [PgSql\Connection](class.pgsql-connection.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pg\_query()****

```
<?php

$conn = pg_pconnect("dbname=publisher");
if (!$conn) {
  echo "Ocorreu um erro.\n";
  exit;
}

$result = pg_query($conn, "SELECT author, email FROM authors");
if (!$result) {
  echo "Ocorreu um erro.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "Autor: $row[0]  E-mail: $row[1]";
  echo "<br />\n";
}

?>
```

**Exemplo #2 Usando **pg\_query()** com múltiplas instruções**

```
<?php

$conn = pg_pconnect("dbname=publisher");

// essas instruções serão executadas como uma transação

$query = "UPDATE authors SET author=UPPER(author) WHERE id=1;";
$query .= "UPDATE authors SET author=LOWER(author) WHERE id=2;";
$query .= "UPDATE authors SET author=NULL WHERE id=3;";

pg_query($conn, $query);

?>
```

### Veja também

- [pg\_connect()](function.pg-connect.md) - Abre uma conexão PostgreSQL
- [pg\_pconnect()](function.pg-pconnect.md) - Abre uma conexão PostgreSQL persistente
- [pg\_fetch\_array()](function.pg-fetch-array.md) - Busca uma linha como um array
- [pg\_fetch\_object()](function.pg-fetch-object.md) - Busca uma linha como um objeto
- [pg\_num\_rows()](function.pg-num-rows.md) - Retorna o número de linhas em um resultado
- [pg\_affected\_rows()](function.pg-affected-rows.md) - Retorna o número de registros afetados (tuplas)

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
