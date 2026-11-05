# Escapa os caracteres especiais em uma string para uso em uma instrução SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-real-escape-string.php

---

# mysql\_real\_escape\_string

(PHP 4 >= 4.3.0, PHP 5)

mysql\_real\_escape\_string — Escapa os caracteres especiais em uma string para uso em uma instrução SQL

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_real\_escape\_string()](mysqli.real-escape-string.md)
- [PDO::quote()](pdo.quote.md)

### Descrição

function **mysql\_real\_escape\_string**([string](language.types.string.md) `$unescaped_string`, [resource](language.types.resource.md) `$link_identifier` = NULL): [string](language.types.string.md)

Escapa caracteres especiais do parâmetro `unescaped_string`,
levando em conta o conjunto de caracteres atual da conexão, de forma que seja
seguro inseri-la na função [mysql\_query()](function.mysql-query.md). Se forem inseridos
dados binários, esta função precisa ser usada.

**mysql\_real\_escape\_string()** chama a função mysql\_real\_escape\_string
da biblioteca do MySQL, que prefixa com barras invertidas os seguintes caracteres:
`\x00`, `\n`,
`\r`, `\`, `'`,
`"` e `\x1a`.

Esta função precisa sempre ser usada (com poucas exceções) para tornar os dados
seguros antes de enviá-los em uma consulta ao MySQL.

**Cuidado**

# Segurança: o conjunto de caracteres padrão

O conjunto de caracteres precisa ser definido no nível do servidor ou com
a função [mysql\_set\_charset()](function.mysql-set-charset.md) da API para que afete a função
**mysql\_real\_escape\_string()**. Consulte a seção de conceitos sobre
[conjuntos de caracteres](mysqlinfo.concepts.charset.md) para
mais informação.

### Parâmetros

`unescaped_string`
:   A string a ser escapada.

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna a string escapada ou **`false`** em caso de erro.

### Erros/Exceções

Executar esta função sem uma conexão MySQL presente emitirá
um erro de nível **`E_WARNING`**. Esta função
deve ser executada somente com uma conexão MySQL válida presente.

### Examples

**Exemplo #1 Exemplo de **mysql\_real\_escape\_string()****

```
<?php
// Connect
$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
    OR die(mysql_error());

// Query
$query = sprintf("SELECT * FROM users WHERE user='%s' AND password='%s'",
            mysql_real_escape_string($user),
            mysql_real_escape_string($password));
?>
```

**Exemplo #2 **mysql\_real\_escape\_string()** requer um exemplo de conexão**

Este exemplo demonstra o que acontece se uma conexão MySQL não estiver
presente ao chamar esta função.

```
<?php
// Ainda não foi feita conexão ao MySQL

$lastname  = "O'Reilly";
$_lastname = mysql_real_escape_string($lastname);

$query = "SELECT * FROM actors WHERE last_name = '$_lastname'";

var_dump($_lastname);
var_dump($query);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Warning: mysql_real_escape_string(): No such file or directory in /this/test/script.php on line 5
Warning: mysql_real_escape_string(): A link to the server could not be established in /this/test/script.php on line 5

bool(false)
string(41) "SELECT * FROM actors WHERE last_name = ''"
```

**Exemplo #3 Um exemplo de Ataque de Injeção SQL**

```
<?php
// Não verificamos $_POST['password'], ela pode conter qualquer coisa que o usuário quiser! Por exemplo:
$_POST['username'] = 'aidan';
$_POST['password'] = "' OR ''='";

// Consulta o banco de dados para verificar se existe algum usuário correspondente
$query = "SELECT * FROM users WHERE user='{$_POST['username']}' AND password='{$_POST['password']}'";
mysql_query($query);

// Isto significa que a consulta enviada ao MySQL seria:
echo $query;
?>
```

A consulta enviada ao MySQL:

```
SELECT * FROM users WHERE user='aidan' AND password='' OR ''=''
```

Isto permitiria que qualquer pessoa fizesse login sem uma senha válida.

### Notas

> **Nota**:
>
> Uma conexão MySQL é requerida antes que
> **mysql\_real\_escape\_string()** seja usada, caso contrário um erro de
> nível **`E_WARNING`** será gerado e **`false`** é
> retornado. Se `link_identifier` não estiver definido, a
> últimoa conexão MySQL será usada.

> **Nota**:
>
> Se esta função não for usada para escapar dados, a consulta ficará vulnerável a
> [Ataques de Injeção SQL](security.database.sql-injection.md).

> **Nota**:
>
> **mysql\_real\_escape\_string()** não escapa
> `%` e `_`. Estes caracteres são coringas no
> MySQL se combinados com `LIKE`, `GRANT`
> ou `REVOKE`.

### Veja também

- [mysql\_set\_charset()](function.mysql-set-charset.md) - Define o conjunto de caracteres do cliente
- [mysql\_client\_encoding()](function.mysql-client-encoding.md) - Retorna o nome do conjunto de caracteres

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
