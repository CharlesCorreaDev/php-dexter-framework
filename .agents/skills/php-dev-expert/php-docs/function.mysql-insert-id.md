# Obtém o ID gerado pela operação INSERT anterior

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-insert-id.php

---

# mysql\_insert\_id

(PHP 4, PHP 5)

mysql\_insert\_id — Obtém o ID gerado pela operação INSERT anterior

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_insert\_id()](mysqli.insert-id.md)
- [PDO::lastInsertId()](pdo.lastinsertid.md)

### Descrição

function **mysql\_insert\_id**([resource](language.types.resource.md) `$link_identifier` = NULL): [int](language.types.integer.md)

Obtém o ID gerado para uma coluna AUTO\_INCREMENT pela consulta
anterior (normalmente INSERT).

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

O ID gerado para uma coluna AUTO\_INCREMENT pela consulta
anterior em caso de sucesso, `0` se a consulta anterior
não gerou um valor AUTO\_INCREMENT, ou **`false`** se
não foi estabelecido conexão com o MySQL.

### Examples

**Exemplo #1 Exemplo **mysql\_insert\_id()****

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
mysql_select_db('mydb');

mysql_query("INSERT INTO mytable (product) values ('kossu')");
printf("Last inserted record has id %d\n", mysql_insert_id());
?>
```

### Notas

**Cuidado**

**mysql\_insert\_id()** irá converter o tipo de retorno da
API nativa em C do MySQL `mysql_insert_id()` para um tipo
`long` (chamado [int](language.types.integer.md) no PHP). Se a sua
coluna AUTO\_INCREMENT for uma coluna do tipo BIGINT (64 bits), a
conversão pode resultar em um valor incorreto. Ao invés disto, use a
função LAST\_INSERT\_ID() interna do MySQL em uma consulta SQL. Para mais informações
sobre valores máximos de inteiros do PHP, visite a documentação
[integer](language.types.integer.md).

> **Nota**:
>
> Devido **mysql\_insert\_id()** agir sobre a última consulta
> realizada, tenha certeza de chamar **mysql\_insert\_id()** imediatamente
> após a consulta que gerou o valor.

> **Nota**:
>
> O valor da função SQL do MySQL
> `LAST_INSERT_ID()` sempre contém o
> valor AUTO\_INCREMENT mais recentemente gerado e não é reiniciado
> entre as consultas.

### Veja também

- [mysql\_query()](function.mysql-query.md) - Envia uma consulta MySQL
- [mysql\_info()](function.mysql-info.md) - Obtém informação sobre a consulta mais recente

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
