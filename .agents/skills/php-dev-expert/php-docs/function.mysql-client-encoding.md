# Retorna o nome do conjunto de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-client-encoding.php

---

# mysql\_client\_encoding

(PHP 4 >= 4.3.0, PHP 5)

mysql\_client\_encoding — Retorna o nome do conjunto de caracteres

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_character\_set\_name()](mysqli.character-set-name.md)

### Descrição

function **mysql\_client\_encoding**([resource](language.types.resource.md) `$link_identifier` = NULL): [string](language.types.string.md)

Obtém a variável `character_set` do MySQL.

### Parâmetros

`link_identifier`
:   A conexão MySQL. Se o
    identificador da conexão não for especificado, a última conexão aberta por
    [mysql\_connect()](function.mysql-connect.md) será usada. Se não houver uma conexão anterior,
    haverá uma tentativa de criar uma como se [mysql\_connect()](function.mysql-connect.md) tivesse sido chamada
    sem argumentos. Se nenhuma conexão for encontrada ou estabelecida, um erro de nível
    **`E_WARNING`** será gerado.

### Valor Retornado

Retorna o nome do conjunto de caracteres padrão para a conexão atual.

### Examples

**Exemplo #1 Exemplo de **mysql\_client\_encoding()****

```
<?php
$link    = mysql_connect('localhost', 'mysql_user', 'mysql_password');
$charset = mysql_client_encoding($link);

echo "O conjunto de caracteres atual é: $charset\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
O conjunto de caracteres atual é: latin1
```

### Veja também

- [mysql\_set\_charset()](function.mysql-set-charset.md) - Define o conjunto de caracteres do cliente
- [mysql\_real\_escape\_string()](function.mysql-real-escape-string.md) - Escapa os caracteres especiais em uma string para uso em uma instrução SQL

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
