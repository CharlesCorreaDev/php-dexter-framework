# Abre uma conexão com um banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-connect.php

---

# ibase\_connect

(PHP 5, PHP 7 < 7.4.0)

ibase\_connect — Abre uma conexão com um banco de dados

### Descrição

function **ibase\_connect**(  
    [string](language.types.string.md) `$database` = ?,  
    [string](language.types.string.md) `$username` = ?,  
    [string](language.types.string.md) `$password` = ?,  
    [string](language.types.string.md) `$charset` = ?,  
    [int](language.types.integer.md) `$buffers` = ?,  
    [int](language.types.integer.md) `$dialect` = ?,  
    [string](language.types.string.md) `$role` = ?,  
    [int](language.types.integer.md) `$sync` = ?  
): [resource](language.types.resource.md)

Estabelece uma conexão com um banco de dados Firebird/InterBase.

No caso de uma segunda chamada a **ibase\_connect()** com
os mesmos argumntos, não será criada uma nova conexão, mas ao invés, será
retornado o identificador da conexão já aberta. A conexão com
o servidor será fechada assim que terminar a execução do script, a menos
que seja fechada explicitamente pela chamada de [ibase\_close()](function.ibase-close.md).

### Parâmetros

`database`
:   O argumento `database` deve ser um caminho válido
    para o arquivo do banco de dados no servidor no qual ele reside. Se o servidor não for local,
    ele deve ser prefixado com 'hostname:' (TCP/IP), 'hostname/port:'
    (TCP/IP com servidor interbase em porta TCP customizada), '//hostname/'
    (NetBEUI), dependendo do protocolo de conexão
    usado.

`username`
:   O nome de usuário. Pode ser definido com a diretiva
    `ibase.default_user` do php.ini

`password`
:   A senha para `username`. Pode ser definida com a diretiva
    `ibase.default_password` do php.ini.

`charset`
:   `charset` é o conjunto de caracteres padrão
    para o banco de dados.

`buffers`
:   `buffers` é o número de buffers do banco de dados
    a serem alocados para o cache do lado do servidor. Se 0 ou omitido, o servidor
    escolhe o seu próprio padrão.

`dialect`
:   `dialect` define o dialeto SQL padrão para
    qualquer comand executado na conexão, e o padrão é o mais alto
    suportado pelas bibliotecas do cliente.

`role`
:   Funcional apenas com InterBase 5 e superior.

`sync`

### Valor Retornado

Retorna um identificador de conexão Firebird/InterBase em caso de sucesso, ou **`false`** em caso de erro.

### Erros/Exceções

Se você tiver um erro parecido com "Arithmetic exception, numeric overflow, or
string truncation. Cannot transliterate character between character sets"
(isto ocorre quando você tenta usar algum caractere com acento) ao usar esta função
e depois de [ibase\_query()](function.ibase-query.md), deve-se definir o conjunto de caracteres
(isto é, ISO8859\_1 ou o conjunto de caracteres atual).

### Examples

**Exemplo #1 Exemplo de **ibase\_connect()****

```
<?php
$host = 'localhost:/path/to/your.gdb';

$dbh = ibase_connect($host, $username, $password);
$stmt = 'SELECT * FROM tblname';
$sth = ibase_query($dbh, $stmt);
while ($row = ibase_fetch_object($sth)) {
    echo $row->email, "\n";
}
ibase_free_result($sth);
ibase_close($dbh);
?>
```

### Veja também

- [ibase\_pconnect()](function.ibase-pconnect.md) - Abre uma conexão persistente com um banco de dados InterBase
- [ibase\_close()](function.ibase-close.md) - Fecha uma conexão com um banco de dados InterBase

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
