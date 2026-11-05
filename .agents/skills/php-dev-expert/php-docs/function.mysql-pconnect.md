# Abre uma conexão persistente a um servidor MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-pconnect.php

---

# mysql\_pconnect

(PHP 4, PHP 5)

mysql\_pconnect — Abre uma conexão persistente a um servidor MySQL

**Aviso**

Esta extensão foi descontinuada a partir do PHP 5.5.0 e foi removida no PHP 7.0.0.
Em vez disso, as extensões [MySQLi](book.mysqli.md) ou [PDO\_MySQL](ref.pdo-mysql.md) devem ser usadas.
Veja também o guia [MySQL: escolhendo uma API](mysqlinfo.api.choosing.md).
Alternativas a esta função incluem:

- [mysqli\_connect()](function.mysqli-connect.md) com `p:` host prefix
- [PDO::\_\_construct()](pdo.construct.md) com **`PDO::ATTR_PERSISTENT`** como uma opção de driver

### Descrição

function **mysql\_pconnect**(  
    [string](language.types.string.md) `$server` = ini\_get("mysql.default\_host"),  
    [string](language.types.string.md) `$username` = ini\_get("mysql.default\_user"),  
    [string](language.types.string.md) `$password` = ini\_get("mysql.default\_password"),  
    [int](language.types.integer.md) `$client_flags` = 0  
): [resource](language.types.resource.md)

Estabelece uma conexão persistente com o servidor MySQL.

**mysql\_pconnect()** funciona muito parecido com
[mysql\_connect()](function.mysql-connect.md) com duas diferenças principais.

Primeiro, ao conectar,a função irá primeiro tentar encontrar uma
conexão (persistente) que já esteja aberta com o mesmo servidor,
nome de usuário e senha. Se for encontrada, um identificador para ela
será retornado ao invés de ser aberta uma nova conexão.

Segundo, a conexão ao servidor SQL não será fechada quando
a execução do script terminar. Ao invés disso, a conexão permanecerá
aberta para uso futuro ([mysql\_close()](function.mysql-close.md) não irá
fechar conexões estabelecidas por **mysql\_pconnect()**).

Este tipo de conexão portanto é chamado de 'persistente'.

### Parâmetros

`server`
:   O servidor MySQL. Também pode incluir um numero de porta, por exemplo,
    "servidor:porta" ou um caminho para um soquete local, por exemplo, ":/caminho/para/soquete" para
    o servidor local.

    Se a diretiva do PHP [mysql.default\_host](mysql.configuration.md#ini.mysql.default-host) não estiver definida (padrão), o valor padrão
    será 'localhost:3306'

`username`
:   O nome de usuário. O Valor padrão é o nome do usuário
    proprietário do processo no servidor.

`password`
:   A senha. O valor padrão é uma senha vazia.

`client_flags`
:   O parâmetro `client_flags` pode ser uma combinação
    das seguintes constantes:
    128 (habilita uso de `LOAD DATA LOCAL`),
    **`MYSQL_CLIENT_SSL`**,
    **`MYSQL_CLIENT_COMPRESS`**,
    **`MYSQL_CLIENT_IGNORE_SPACE`** ou
    **`MYSQL_CLIENT_INTERACTIVE`**.

### Valor Retornado

Retorna um identificador de conexão persistente MySQL em caso de sucesso, ou **`false`** em
caso de falha.

### Notas

> **Nota**:
>
> Note que este tipo de conexão funciona somente se a versão de módulo do PHP
> estiver sendo usada. Consulte a seção sobre
> [Conexões
> Persistentes com Banco de Dados](features.persistent-connections.md) para mais informações.

**Aviso**

Usar conexões persistentes pode requerer alguns ajustes nas configurações
do Apache e do MySQL para assegurar que o número máximo de conexões permitidas
pelo MySQL não seja excedido.

### Veja também

- [mysql\_connect()](function.mysql-connect.md) - Abre uma conexão a um servidor MySQL
- [Conexões
  Persistentes com Banco de Dados](features.persistent-connections.md)

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
