# Conectando a bancos de dados MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-mysql.connection.php

---

# PDO\_MYSQL DSN

(PECL PDO\_MYSQL >= 0.1.0)

PDO\_MYSQL DSN — Conectando a bancos de dados MySQL

### Descrição

O Data Source Name (DSN) do PDO\_MYSQL é composto dos seguintes elementos:

Prefixo DSN
:   O prefixo DSN é **`mysql:`**.

`host`
:   O nome do servidor onde está o banco de dados.

`port`
:   O número da porta onde o servidor do banco de dados está escutando.

`dbname`
:   O nome do banco de dados.

`user`
:   Nome do usuário para a conexão. Um nome de usuário informado como
    segundo argumento ao construtor [PDO](class.pdo.md) tem
    precedência sobre o especificado no DSN.

`password`
:   Senha para a conexão. Uma senha informada como
    terceiro argumento ao construtor [PDO](class.pdo.md) tem
    precedência sobre a especificada no DSN.

`unix_socket`
:   O soquete Unix do MySQL (não deve ser usado com `host`
    ou `port`).

`charset`
:   O conjunto de caracteres. Veja a documentação sobre [conjunto de caracteres](mysqlinfo.concepts.charset.md)
    para mais informação.

### Examples

**Exemplo #1 Exemplos de DSN do PDO\_MYSQL**

O exemplo a seguir demonstra um DSN do PDO\_MYSQL para conexão com
banco de dados MySQL:

```
mysql:host=localhost;dbname=testdb
```

Exemplos mais completos:

```
mysql:host=localhost;port=3307;dbname=testdb
mysql:unix_socket=/tmp/mysql.sock;dbname=testdb
```

### Notas

> **Nota**:
> **Somente em Unix:**  
>
> Quando o nome do servidor é definido como `"localhost"`, a conexão ao
> servidor é feita através de um soquete de domínio. Se o PDO\_MYSQL tiver sido compilado usando libmysqlclient, a
> localização do soquete é a mesma localização da compilação da libmysqlclient. Se o PDO\_MYSQL foi compilado
> usando mysqlnd, um soquete padrão pode ser definido através da configuração [pdo\_mysql.default\_socket](ref.pdo-mysql.md#ini.pdo-mysql.default-socket).

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
