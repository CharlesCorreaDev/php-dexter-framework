# Escapa caracteres especiais em uma string para uso em uma instrução SQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-real-escape-string.php

---

# cubrid\_real\_escape\_string

(PECL CUBRID >= 8.3.0)

cubrid\_real\_escape\_string — Escapa caracteres especiais em uma string para uso em uma instrução SQL

### Descrição

function **cubrid\_real\_escape\_string**([string](language.types.string.md) `$unescaped_string`, [resource](language.types.resource.md) `$conn_identifier` = ?): [string](language.types.string.md)

Esta função retorna a versão escapada da string fornecida. Irá
escapar os seguintes caracteres: `'`.
Em geral, aspas simples são usadas para delimitar sequências de caracteres. Aspas
duplas também podem ser usadas dependendo do valor de ansi\_quotes,
que é um parâmetro relacionado à instrução SQL. Se o valor ansi\_quotes for
definido como "no", a string entre aspas duplas será tratada como
string de caracteres, não como um identificador. O valor padrão é "yes".
Se a intenção for incluir aspas simples como parte de uma string de caracteres,
insira duas aspas simples seguidas.

### Parâmetros

`unescaped_string`
:   A string a ser escapada.

`conn_identifier`
:   A conexão CUBRID connection. Se o identificador de conexão não for especificado, a
    última conexão aberta por [cubrid\_connect()](function.cubrid-connect.md) será usada.

### Valor Retornado

Versão escapada da string fornecida em caso de sucesso.

**`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_real\_escape\_string()****

```
<?php
$conn = cubrid_connect("localhost", 33000, "demodb");

$unescaped_str = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
$escaped_str = cubrid_real_escape_string($unescaped_str);

$len = strlen($unescaped_str);

@cubrid_execute($conn, "DROP TABLE cubrid_test");
cubrid_execute($conn, "CREATE TABLE cubrid_test (t char($len))");
cubrid_execute($conn, "INSERT INTO cubrid_test (t) VALUES('$escaped_str')");

$req = cubrid_execute($conn, "SELECT * FROM cubrid_test");
$row = cubrid_fetch_assoc($req);

var_dump($row);

cubrid_close_request($req);
cubrid_disconnect($conn);
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["t"]=>
  string(95) " !"#$%&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~"
}
```

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
