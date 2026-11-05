# Conectando-se a bancos de dados IBM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-ibm.connection.php

---

# PDO\_IBM DSN

(PECL PDO\_IBM >= 0.9.0)

PDO\_IBM DSN — Conectando-se a bancos de dados IBM

### Descrição

O Nome da Fonte de Dados (DSN) PDO\_IBM é baseado no DSN IBM CLI. Os principais
componentes do DSN PDO\_IBM são:

DSN prefix
:   O prefixo DSN é **`ibm:`**.

DSN
:   O DSN pode ser qualquer um dos seguintes:

    - a) Configuração da fonte de dados usando db2cli.ini
      ou odbc.ini
    - b) Nome do banco de dados catalogado, ou seja, apelido do banco de dados no catálogo
      do cliente DB2
    - c) String de conexão completa no seguinte formato:
      `DRIVER={IBM DB2 ODBC DRIVER};DATABASE=database;HOSTNAME=hostname;PORT=port;PROTOCOL=TCPIP;UID=username;PWD=password;`
      onde os parâmetros representam os seguintes valores:

      `database`
      :   O nome do banco de dados.

      `hostname`
      :   O nome ou endereço do servidor de banco de dados.

      `port`
      :   A porta TCP/IP na qual o banco de dados está atendendo
          requisições.

      `username`
      :   O nome de usuário com o qual será feita a conexão ao
          banco de dados.

      `password`
      :   A senha com a qual será feita a conexão ao banco de dados.

### Examples

**Exemplo #1 Exemplo de DSN PDO\_IBM usando db2cli.ini**

O exemplo a seguir mostra um DSN PDO\_IBM para conexão com um banco de dados
DB2 catalogado como DB2\_9 em db2cli.ini:

```
$db = new PDO("ibm:DSN=DB2_9", "", "");

[DB2_9]
Database=db_teste
Protocol=tcpip
Hostname=11.22.33.444
Servicename=56789
```

**Exemplo #2 Exemplo de DSN PDO\_IBM usando uma string de conexão**

O exemplo a seguir mostra um DSN PDO\_IBM para conexão com um banco de dados
DB2 denominado **`testdb`** usando a sintaxe da string de
conexão CLI do DB2.

```
$db = new PDO("ibm:DRIVER={IBM DB2 ODBC DRIVER};DATABASE=testdb;" .
  "HOSTNAME=11.22.33.444;PORT=56789;PROTOCOL=TCPIP;", "usuario_teste", "senha_teste");
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
