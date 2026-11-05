# Escapa uma string para usá-la em uma função mysql_query

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-escape-string.php

---

# mysql\_escape\_string

(PHP 4 >= 4.0.3, PHP 5)

mysql\_escape\_string — Escapa uma string para usá-la em uma função mysql\_query

**Aviso**

Esta função foi descontinuada a partir do PHP 4.3.0 e
ela e a [extensão MySQL original](book.mysql.md) foram removidas a partir do PHP 7.0.0.
Em vez disso, use as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md), que são desenvolvidas ativamente.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_escape\_string()](function.mysqli-escape-string.md)
- [PDO::quote()](pdo.quote.md)

### Descrição

function **mysql\_escape\_string**([string](language.types.string.md) `$unescaped_string`): [string](language.types.string.md)

Esta função escapará a string `unescaped_string`,
de modo que seja seguro usá-la em uma função [mysql\_query()](function.mysql-query.md).
Esta função foi descontinuada.

Esta função é idêntica à [mysql\_real\_escape\_string()](function.mysql-real-escape-string.md)
exceto que [mysql\_real\_escape\_string()](function.mysql-real-escape-string.md) recebe um
manipulador de conexão e escapa a string de acordo com o conjunto de caracteres
atual. **mysql\_escape\_string()** não recebe um
manipulador de conexão e não respeita a configuração atual do conjunto de caracteres.

### Parâmetros

`unescaped_string`
:   A string que deve ser escapada.

### Valor Retornado

Retorna a string escapada.

### Examples

**Exemplo #1 Exemplo de **mysql\_escape\_string()****

```
<?php
$item = "Zak's Laptop";
$escaped_item = mysql_escape_string($item);
printf("String escapada: %s\n", $escaped_item);
?>
```

O exemplo acima produzirá:

```
String escapada: Zak\'s Laptop
```

### Notas

> **Nota**:
>
> **mysql\_escape\_string()** não escapa
> `%` e `_`.

### Veja também

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
