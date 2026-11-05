# Conectando ao banco de dados Firebird

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-firebird.connection.php

---

# PDO\_FIREBIRD DSN

(PECL PDO\_FIREBIRD >= 0.1.0)

PDO\_FIREBIRD DSN — Conectando ao banco de dados Firebird

### Descrição

O Nome da Fonte de Dados (DSN) PDO\_FIREBIRD é composto pelos seguintes elementos:

DSN prefix
:   O prefixo DSN é **`firebird:`**.

`dbname`
:   O nome do banco de dados.

`charset`
:   O conjunto de caracteres.

`role`
:   O nome da função SQL.

`dialect`
:   O dialeto do banco de dados; `1` ou `3`.
    Se não for especificado, o dialeto será padronizado como `3`.
    Disponível a partir do PHP 7.4.0.

### Examples

**Exemplo #1 Exemplo de DSN PDO\_FIREBIRD DSN com caminho**

O exemplo a seguir mostra um DSN PDO\_FIREBIRD para conexão com
bancos de dados Firebird:

```
firebird:dbname=/caminho/para/DATABASE.FDB
```

**Exemplo #2 Exemplo de DSN PDO\_FIREBIRD com porta e caminho**

O exemplo a seguir mostra um DSN PDO\_FIREBIRD para conexão a um
banco de dados Firebird usando nome de servidor, porta e caminho:

```
firebird:dbname=servidor/porta:/caminho/para/DATABASE.FDB
```

**Exemplo #3 Exemplo de DSN PDO\_FIREBIRD com localhost e caminho para Employee.fdb no sistema Debian**

O exemplo a seguir mostra um DSN PDO\_FIREBIRD para conexão a um
banco de dados Firebird employee.fdb usando localhost:

```
firebird:dbname=localhost:/var/lib/firebird/2.5/data/employee.fdb
```

**Exemplo #4 DSN PDO\_FIREBIRD para conectar-se a um banco de dados de dialeto 1**

O exemplo a seguir mostra um DSN PDO\_FIREBIRD para conexão a
um banco de dados Firebird teste.fdb que foi criado usando o dialeto 1.
Isso só é suportado a partir do PHP 7.4.0.

```
firebird:dbname=localhost:/var/lib/firebird/2.5/data/teste.fdb;charset=utf-8;dialect=1
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
