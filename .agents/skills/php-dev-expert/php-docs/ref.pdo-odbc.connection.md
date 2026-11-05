# Conectando-se a bancos de dados ODBC ou DB2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-odbc.connection.php

---

# PDO\_ODBC DSN

(PECL PDO\_ODBC >= 0.1.0)

PDO\_ODBC DSN — Conectando-se a bancos de dados ODBC ou DB2

### Descrição

O Nome da Fonte de Dados (DSN) PDO\_ODBC é composto pelos seguintes elementos:

Prefixo DSN
:   O prefixo DSN é **`odbc:`**. Se estiver sendo feita uma conexão
    a um banco de dados catalogado no gerenciador de driver ODBC ou no catálogo do DB2,
    pode-se anexar o nome catalogado do banco de dados ao DSN.

DSN
:   O nome do banco de dados conforme catalogado no gerenciador de driver ODBC ou
    no catálogo do DB2. Como alternativa, pode-se fornecer uma string de conexão ODBC completa
    para conectar-se a um banco de dados, conforme descrito em
    [» https://www.connectionstrings.com/](https://www.connectionstrings.com/).

`UID`
:   O nome do usuário para a conexão. Se for especificado o nome de usuário
    no DSN, o PDO ignorará o valor do argumento do nome de usuário
    no construtor do PDO.

`PWD`
:   A senha do usuário para a conexão. Se for especificada a senha
    no DSN, o PDO ignorará o valor do argumento de senha
    no construtor do PDO.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Ao passar uma [string](language.types.string.md) vazia para o argumento de senha no construtor PDO, `pwd` não era incluído na string de conexão criada até agora, mas o comportamento foi alterado para incluí-lo como uma string vazia. Passando **`null`** para o argumento de senha no construtor PDO resulta no mesmo comportamento de antes. |
| 8.4.0 | Alterado o comportamento para ignorar o argumento do nome de usuário e o argumento da senha no construtor PDO separadamente quando o DSN contém `uid` ou `pwd`. Anteriormente, se incluído apenas `uid` ou `pwd` no DSN, tanto o argumento do nome de usuário quanto o argumento da senha no construtor PDO eram ignorados. |

### Examples

**Exemplo #1 Exemplo de PDO\_ODBC DSN (gerenciador de driver ODBC)**

O exemplo a seguir mostra um DSN PDO\_ODBC para conexão a um banco de dados
ODBC catalogado como testdb no gerenciador de driver ODBC:

```
odbc:testdb
```

**Exemplo #2 Exemplo de DSN PDO\_ODBC (conexão não catalogada do IBM DB2)**

O exemplo a seguir mostra um DSN PDO\_ODBC para conexão a
um banco de dados IBM DB2 denominado **`SAMPLE`** usando a sintaxe
DSN ODBC completa:

```
odbc:DRIVER={IBM DB2 ODBC DRIVER};HOSTNAME=localhost;PORT=50000;DATABASE=SAMPLE;PROTOCOL=TCPIP;UID=db2inst1;PWD=ibmdb2;
```

**Exemplo #3 Exemplo de PDO\_ODBC DSN (conexão não catalogada do Microsoft Access)**

O exemplo a seguir mostra um DSN PDO\_ODBC para conexão a
um banco de dados Microsoft Access armazenado em **`C:\db.mdb`** usando a sintaxe
DSN ODBC completa:

```
odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq=C:\\db.mdb;Uid=Admin
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
