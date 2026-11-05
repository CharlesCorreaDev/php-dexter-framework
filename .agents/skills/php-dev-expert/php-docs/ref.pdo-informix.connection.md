# Conectando-se a bancos de dados Informix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-informix.connection.php

---

# PDO\_INFORMIX DSN

(PECL PDO\_INFORMIX >= 0.1.0)

PDO\_INFORMIX DSN — Conectando-se a bancos de dados Informix

### Descrição

O Nome da Fonte de Dados (DSN) do PDO\_INFORMIX é baseado na string DSN ODBC
do Informix. Detalhes sobre como configurar um DSN ODBC do Informix estão disponíveis
no [» Centro de informações do Informix
Dynamic Server](https://www.ibm.com/docs/en/informix-servers/14.10?topic=guide-configure-data-sources). Os principais componentes do DSN PDO\_INFORMIX são:

DSN prefix
:   O prefixo DSN é **`informix:`**.

DSN
:   O DSN pode ser uma configuração de fonte de dados usando
    odbc.ini ou uma [» string de conexão](https://www.ibm.com/docs/en/informix-servers/14.10?topic=sources-connection-string-keywords-that-make-connection) completa.

### Examples

**Exemplo #1 Exemplo de DSN PDO\_INFORMIX usando odbc.ini**

O exemplo a seguir mostra um DSN PDO\_INFORMIX para conexão a
um banco de dados Informix catalogado como Infdrv33 em
odbc.ini:

```
$db = new PDO("informix:DSN=Infdrv33", "", "");
```

```
[ODBC Data Sources]
Infdrv33=INFORMIX 3.3 32-BIT

[Infdrv33]
Driver=/opt/informix/csdk_2.81.UC1G2/lib/cli/iclis09b.so
Description=INFORMIX 3.3 32-BIT
Database=common_db
LogonID=usuario_teste
pwd=senha_teste
Servername=ids_server
DB_LOCALE=en_US.819
OPTIMIZEAUTOCOMMIT=1
ENABLESCROLLABLECURSORS=1
```

**Exemplo #2 Exemplo de DSN PDO\_INFORMIX usando uma string de conexão**

O exemplo a seguir mostra um DSN PDO\_INFORMIX para conexão a
um banco de dados Informix denominado **`common_db`** usando a
sintaxe de string de conexão do Informix.

```
$db = new PDO("informix:host=host.domain.com; service=9800;
    database=common_db; server=ids_server; protocol=onsoctcp;
    EnableScrollableCursors=1", "usuario_teste", "senha_teste");
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
