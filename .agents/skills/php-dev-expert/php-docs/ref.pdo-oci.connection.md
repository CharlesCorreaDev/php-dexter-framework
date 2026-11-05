# Conectando-se a bancos de dados Oracle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-oci.connection.php

---

# PDO\_OCI DSN

(PECL PDO\_OCI >= 0.1.0)

PDO\_OCI DSN — Conectando-se a bancos de dados Oracle

### Descrição

O Nome da Fonte de Dados (DSN) PDO\_OCI é composto pelos seguintes elementos:

DSN prefix
:   O prefixo DSN é **`oci:`**....

`dbname` (Oracle Instant Client)
:   O URI para a conexão do Oracle Instant Client assume o formato
    `dbname=//hostname:port-number/database`.
    Se for feita uma conexão um banco de dados definido em
    tnsnames.ora, apenas o nome do banco de dados deve ser usado:
    `dbname=database`.

`charset`
:   O conjunto de caracteres do lado do cliente para o identificador do ambiente atual.

### Examples

**Exemplo #1 Exemplos de DSN PDO\_OCI**

Os exemplos a seguir mostram um DSN PDO\_OCI para conexão com
bancos de dados Oracle:

```
// Conecta a um banco de dados definido em tnsnames.ora
oci:dbname=mydb

// Conecta usando o Oracle Instant Client
oci:dbname=//localhost:1521/mydb
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
