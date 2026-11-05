# Conectando-se aos bancos de dados MS SQL Server e SQL Azure

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-sqlsrv.connection.php

---

# PDO\_SQLSRV DSN

(PECL pdo\_sqlsrv >= 2.0.1)

PDO\_SQLSRV DSN — Conectando-se aos bancos de dados MS SQL Server e SQL Azure

### Descrição

O Nome da Fonte de Dados (DSN) PDO\_SQLSRV é composto pelos seguintes elementos:

DSN prefix
:   O prefixo DSN é **`sqlsrv:`**.

`APP`
:   O nome da aplicação usada no rastreamento.

`ConnectionPooling`
:   Especifica se a conexão é atribuída a partir de um grupo de conexões
    (1 ou **`true`**) ou não (0 ou **`false`**).

`Database`
:   O nome do banco de dados.

`Encrypt`
:   Especifica se a comunicação com o SQL Server é criptografada
    (1 ou **`true`**) ou não criptografada (0 ou **`false`**).

`Failover_Partner`
:   Especifica o servidor e a instância do espelho do banco de dados (se habilitado
    e configurado) a serem usados ​​quando o servidor primário estiver indisponível.

`LoginTimeout`
:   Especifica o número de segundos de espera antes de falhar a tentativa de conexão.

`MultipleActiveResultSets`
:   Desativa ou ativa explicitamente o suporte para Conjuntos de Resultados Ativos Múltiplos (MARS).

`QuotedId`
:   Especifica se devem ser usadas regras SQL-92 para identificadores entre aspas (1 ou **`true`**)
    ou regras Transact-SQL legadas (0 ou **`false`**).

`Server`
:   O nome do servidor de banco de dados.

`TraceFile`
:   Especifica o caminho do arquivo usado para dados de rastreamento.

`TraceOn`
:   Especifica se o rastreamento ODBC está habilitado (1 ou **`true`**) ou desabilitado
    (0 ou **`false`**) para a conexão que está sendo estabelecida.

`TransactionIsolation`
:   Especifica o nível de isolamento da transação. Os valores aceitos para esta
    opção são PDO::SQLSRV\_TXN\_READ\_UNCOMMITTED, PDO::SQLSRV\_TXN\_READ\_COMMITTED,
    PDO::SQLSRV\_TXN\_REPEATABLE\_READ, PDO::SQLSRV\_TXN\_SNAPSHOT e
    PDO::SQLSRV\_TXN\_SERIALIZABLE.

`TrustServerCertificate`
:   Especifica se o cliente deve confiar (1 ou **`true`**) ou rejeitar
    (0 ou **`false`**) um certificado de servidor autoassinado.

`WSID`
:   Especifica o nome do computador para rastreamento.

### Examples

**Exemplo #1 Exemplos de DSN PDO\_SQLSRV**

O exemplo a seguir mostra como se conectar a um banco de dados MS SQL Server especificado:

```
$c = new PDO("sqlsrv:Server=localhost;Database=db_teste", "NomeUsuario", "Senha");
```

O exemplo a seguir mostra como conectar-se a um banco de dados MS SQL Server em
uma porta especificada:

```
$c = new PDO("sqlsrv:Server=localhost,1521;Database=db_teste", "NomeUsuario", "Senha");
```

O exemplo a seguir mostra como se conectar a um banco de dados SQL Azure com
ID de servidor 12345abcde. Observe que quando há uma conexão ao SQL Azure com PDO,
o nome de usuário será NomeUsuario@12345abcde (NomeUsuario@IdServidor).

```
$c = new PDO("sqlsrv:Server=12345abcde.database.windows.net;Database=db_teste", "NomeUsuario@12345abcde", "Senha");
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
