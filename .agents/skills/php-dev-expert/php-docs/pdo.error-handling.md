# Erros e manipulação de erros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pdo.error-handling.php

---

# Erros e manipulação de erros

O PDO oferece a escolha entre 3 estratégias diferentes de manipulação de erros, para se adequar
ao estilo de cada desenvolvedor de aplicações.

- **`PDO::ERRMODE_SILENT`**

  Antes do PHP 8.0.0, este era o modo padrão. O PDO simplesmente definia o código de erro
  inspecionado pelos métodos [PDO::errorCode()](pdo.errorcode.md) e
  [PDO::errorInfo()](pdo.errorinfo.md) tanto nos
  objetos de instrução quanto no banco de dados; se o erro resultasse de uma chamada no
  objeto de instrução, invocaria-se o
  método [PDOStatement::errorCode()](pdostatement.errorcode.md) ou
  [PDOStatement::errorInfo()](pdostatement.errorinfo.md)
  nesse objeto. Se o erro resultasse de uma chamada no
  objeto de banco de dados, invocaria-se esses métodos no objeto de banco de dados
  em vez disso.
- **`PDO::ERRMODE_WARNING`**

  Além de definir o código de erro, o PDO emitirá uma mensagem de
  E\_WARNING tradicional. Esta configuração é útil durante a depuração/teste, se
  você apenas quiser ver quais problemas ocorreram sem interromper o
  fluxo do aplicativo.
- **`PDO::ERRMODE_EXCEPTION`**

  A partir do PHP 8.0.0, este é o modo padrão.
  Além de definir o código de erro, o PDO lançará um
  [PDOException](class.pdoexception.md)
  e definirá suas propriedades para refletir o código de erro e o
  informações de erro. Esta configuração também é útil durante a depuração, pois irá
  efetivamente "explodir" o script no ponto do erro, muito
  rapidamente apontando um dedo para áreas problemáticas potenciais em seu código
  (lembre-se: as transações são automaticamente revertidas se a exceção
  faz com que o script termine).

  O modo de exceção também é útil porque você pode estruturar sua manipulação de erros
  de forma mais clara do que com avisos no estilo tradicional do PHP e
  com menos código/aninhamento do que em modo silencioso e explicitamente
  verificando o valor de retorno de cada chamada de banco de dados.

  Veja [Exceções](language.error-handling.throwable.md#language.exceptions) para mais
  informações sobre Exceções em PHP.

O PDO padroniza o uso de strings de código de erro SQLSTATE SQL-92; individualmente
Os drivers do PDO são responsáveis por mapear seus códigos nativos para os
códigos SQLSTATE apropriados. O método [PDO::errorCode()](pdo.errorcode.md)
retorna um único código SQLSTATE. Se você precisar de informações mais específicas
sobre um erro, o PDO também oferece um método
[PDO::errorInfo()](pdo.errorinfo.md) que retorna um array
contendo o código SQLSTATE, o código de erro específico do driver e o driver
string de erro específico.

**Exemplo #1 Criar uma instância do PDO e definir o modo de erro**

```
<?php
$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpass';

$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Isso fará com que o PDO lance uma PDOException (quando a tabela não existe)
$dbh->query("SELECT wrongcolumn FROM wrongtable");
```

O exemplo acima produzirá:

```
Fatal error: Uncaught PDOException: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'testdb.wrongtable' doesn't exist in /tmp/pdo_test.php:10
Stack trace:
#0 /tmp/pdo_test.php(10): PDO->query('SELECT wrongcol...')
#1 {main}
  thrown in /tmp/pdo_test.php on line 10
```

> **Nota**:
>
> [PDO::\_\_construct()](pdo.construct.md) sempre lançará uma [PDOException](class.pdoexception.md) se a conexão falhar
> independentemente de qual **`PDO::ATTR_ERRMODE`** estiver atualmente definido.

**Exemplo #2 Criar uma instância do PDO e definir o modo de erro a partir do construtor**

```
<?php
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'googleguy';
$password = 'googleguy';

$dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

// Isso fará com que o PDO lance um erro de nível E_WARNING em vez de uma exceção (quando a tabela não existe)
$dbh->query("SELECT wrongcolumn FROM wrongtable");
```

O exemplo acima produzirá:

```
Warning: PDO::query(): SQLSTATE[42S02]: Base table or view not found: 1146 Table 'test.wrongtable' doesn't exist in
/tmp/pdo_test.php on line 9
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
