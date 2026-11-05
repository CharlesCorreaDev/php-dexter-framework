# Obtém o número de linhas afetadas na operação anterior do MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-affected-rows.php

---

# mysql\_affected\_rows

(PHP 4, PHP 5)

mysql\_affected\_rows — Obtém o número de linhas afetadas na operação anterior do MySQL

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_affected\_rows()](mysqli.affected-rows.md)
- [PDOStatement::rowCount()](pdostatement.rowcount.md)

### Descrição

function **mysql\_affected\_rows**([resource](language.types.resource.md) `$link_identifier` = NULL): [int](language.types.integer.md)

Obtém o número de linhas afetadas pelo último INSERT, UPDATE, REPLACE
ou DELETE associado ao `link_identifier`.

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna o número de linas afetadas em caso de sucesso, e -1 se a última
consulta falhou.

Se a última consulta foi um DELETE sem a claúsula WHERE, todos
os registros terão sido excluídos da tabela mas esta
função irá retornar zero em versões do MySQL anteriores a 4.1.2.

Ao usar UPDATE, o MySQL não irá atualizar colunas aonde o novo valor é
o mesmo que o valor anterior. Isto cria a possibilidade de que
**mysql\_affected\_rows()** possa não ser igual ao número de
linhas encontradas, apenas o número de linhas que literalmente foram
afetadas pela consulta.

O comando REPLACE primeiro exclui o registro com a mesma chave primária
e então insere o novo registro. Esta função retorna o número de registros
excluídos mais o número de registros inseridos.

No caso de consultas "INSERT ... ON DUPLICATE KEY UPDATE", o
valor retornado será `1` se um insert foi executado,
ou `2` para um update de uma linha existente.

### Examples

**Exemplo #1 Exemplo **mysql\_affected\_rows()****

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
mysql_select_db('mydb');

/* isso deve retornar os números corretos de registros excluídos */
mysql_query('DELETE FROM mytable WHERE id < 10');
printf("Registro excluídos: %d\n", mysql_affected_rows());

/* com uma cláusula where que nunca é verdadeira, ela deve retornar 0 */
mysql_query('DELETE FROM mytable WHERE 0');
printf("Registro excluídos: %d\n", mysql_affected_rows());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Registro excluídos: 10
Registro excluídos: 0
```

**Exemplo #2 Exemplo de **mysql\_affected\_rows()** usando transações**

```
<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
mysql_select_db('mydb');

/* Atualiza registros */
mysql_query("UPDATE mytable SET used=1 WHERE id < 10");
printf ("Registros atualizados: %d\n", mysql_affected_rows());
mysql_query("COMMIT");
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Registros atualizados: 10
```

### Notas

> **Nota**:
> **Transações**  
>
> Se você estiver usando transações, você deve utilizar
> **mysql\_affected\_rows()** depois da sua consulta INSERT, UPDATE, ou
> DELETE, não depois de COMMIT.

> **Nota**:
> **Comandos SELECT**  
>
> Para obter o número de linhas retornados por um SELECT, é possível usar
> [mysql\_num\_rows()](function.mysql-num-rows.md).

> **Nota**:
> **Chaves estrangeiras em cascata**  
>
> **mysql\_affected\_rows()** não conta linhas afetadas
> implicitamente pelo uso de ON DELETE CASCADE e/ou ON UPDATE CASCADE
> em chaves estrangeiras.

### Veja também

- [mysql\_num\_rows()](function.mysql-num-rows.md) - Obtém o número de linhas em um resultado
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
