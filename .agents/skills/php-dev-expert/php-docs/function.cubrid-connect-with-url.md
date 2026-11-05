# Prepara o ambiente para conexão ao servidor CUBRID

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-connect-with-url.php

---

# cubrid\_connect\_with\_url

(PECL CUBRID >= 8.3.1)

cubrid\_connect\_with\_url — Prepara o ambiente para conexão ao servidor CUBRID

### Descrição

function **cubrid\_connect\_with\_url**(  
    [string](language.types.string.md) `$conn_url`,  
    [string](language.types.string.md) `$userid` = ?,  
    [string](language.types.string.md) `$passwd` = ?,  
    [bool](language.types.boolean.md) `$new_link` = **`false`**  
): [resource](language.types.resource.md)

A função **cubrid\_connect\_with\_url()** é usada para
estabelecer o ambiente para conexão ao servidor usando
informação passada por um argumento URL no formato string. Se o recurso HA estiver
habilitado no CUBRID, é necessário especificar a informação de conexão do
servidor reserva, que é usado em caso de falha, na string do
argumento de URL desta função. Se o usuário e a senha não forem
informados, a conexão "PUBLIC" será realizada por padrão.

<url> ::= CUBRID:<host>:<db\_name>:<db\_user>:<db\_password>:[?<properties>]

<properties> ::= <property> [&<property>]

<properties> ::= alhosts=<alternative\_hosts>[ &rctime=<time>]

<properties> ::= login\_timeout=<milli\_sec>

<properties> ::= query\_timeout=<milli\_sec>

<properties> ::= disconnect\_on\_query\_timeout=true|false

<alternative\_hosts> ::= <standby\_broker1\_host>:<port> [,<standby\_broker2\_host>:<port>]

<host> := HOSTNAME | IP\_ADDR

<time> := SECOND

<milli\_sec> := MILLI SECOND

- host : Nome do servidor ou endereço IP do banco de dados mestre
- db\_name : Nome do banco de dados
- db\_user : Nome de usuário do banco de dados
- db\_password : Senha de usuário do banco de dados
- alhosts : Especifica as informações do mediador do servidor reserva, que são
  usadas em caso de falha quando for impossível conectar-se ao servidor ativo.
  Pode-se especificar vários mediadores para casos de falha e a tentativa de conexão ao mediadores
  é realizada na ordem listada em "alhosts"
- rctime : Um intervalo entre as tentativas de conexão ao mediador ativo no
  qual ocorreu a falha. Após ocorrer uma falha, o sistema se conecta ao
  mediador especificado por "althosts", encerra a transação e, em seguida,
  tenta se conectar ao mediador ativo do banco de dados mestre a cada "rctime".
  O valor padrão é 600 segundos.
- login\_timeout : Tempo limite (unidade: milissegundos) para se registrar no banco de dados. O padrão
  é 0, que significa infinito.
- query\_timeout : Tempo limite (unidade: milissegundos) para requisição de consulta. Quando o limite é atingido,
  é enviada uma mensagem ao servidor para cancelar a consulta requisitada. O valor de retorno
  vai depender da configuração disconnect\_on\_query\_timeout; embora a
  mensagem para cancelar a requisição seja enviada ao servidor, a requisição poderá ser bem sucedida.
- disconnect\_on\_query\_timeout : Configura um valor para retornar imediatamente um erro
  de função sendo executada após o tempo limite. O padrão é "false".

> **Nota**:
>
> `?` e `:` são usados como identificadores
> na URL de conexão do PHP e não podem ser incluídos na senha. O exemplo a seguir
> é uma senha inválida para URL de conexão por conter
> "`?:`".
>
> $url = "CUBRID:localhost:33000:tdb:dba:12?:?login\_timeout=100";
>
> Senhas que contêm `?` ou `:`
> podem ser passadas como parâmetro separado.
>
> $url = "CUBRID:localhost:33000:tbd:::?login\_timeout=100";
>
> $conn = cubrid\_connect\_with\_url($url, "dba", "12?");
>
> Se o usuário ou a senha estiverem vazios, o caractere "`:`" não pode ser omitido,
> veja este exemplo:
>
> $url = "CUBRID:localhost:33000:demodb:::";

### Parâmetros

`conn_url`
:   Uma string contendo informação de conexão ao servidor.

`userid`
:   Nome de usuário para o banco de dados.

`passwd`
:   Senha do usuário.

`new_link`
:   Se uma segunda chamada for feita a
    **cubrid\_connect\_with\_url()** com os mesmos argumentos,
    nenhuma nova conexão será estabelecida, mas em vez disso, o identificador
    da conexão já aberta será retornado. O parâmetro
    `new_link` modifica este comportamento e
    faz com que **cubrid\_connect\_with\_url()** sempre abra uma nova
    conexão, mesmo que **cubrid\_connect\_with\_url()** tenha
    sido chamada antes com os mesmos parâmetros.

### Valor Retornado

Identificador da conexão em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **cubrid\_connect\_with\_url()** e URL sem propriedades**

```
<?php
$conn_url = "CUBRID:localhost:33000:demodb:dba::";
$con = cubrid_connect_with_url($conn_url);

if ($con) {
    echo "conectado com sucesso";
    cubrid_execute($con, "create table person(id int,name char(16))");
    $req =cubrid_execute($con, "insert into person values(1,'James')");

    if ($req) {
        cubrid_close_request($req);
        cubrid_commit($con);
    } else {
        cubrid_rollback($con);
    }
    cubrid_disconnect($con);
}
?>
```

**Exemplo #2 Exemplo de **cubrid\_connect\_with\_url()** e URL com propriedades**

```
<?php
$conn_url = "CUBRID:127.0.0.1:33000:demodb:dba::?login_timeout=100";
$con = cubrid_connect_with_url ($conn_url);

if ($con) {
    echo "conectado com sucesso";
    cubrid_execute($con, "create table person(id int,name char(16))");
    $req =cubrid_execute($con, "insert into person values(1,'James')");

    if ($req) {
        cubrid_close_request($req);
        cubrid_commit($con);
    } else {
        cubrid_rollback($con);
    }
    cubrid_disconnect($con);
}
?>
```

### Veja também

- [cubrid\_connect()](function.cubrid-connect.md) - Abre uma conexão a um servidor CUBRID
- [cubrid\_pconnect()](function.cubrid-pconnect.md) - Abre uma conexão persistente a um servidor CUBRID
- [cubrid\_pconnect\_with\_url()](function.cubrid-pconnect-with-url.md) - Abre uma conexão persistente com o servidor CUBRID
- [cubrid\_disconnect()](function.cubrid-disconnect.md) - Fecha uma conexão ao banco de dados
- [cubrid\_close()](function.cubrid-close.md) - Fecha conexão CUBRID

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
