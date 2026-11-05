# Abre uma conexão persistente com um banco de dados InterBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-pconnect.php

---

# ibase\_pconnect

(PHP 5, PHP 7 < 7.4.0)

ibase\_pconnect — Abre uma conexão persistente com um banco de dados InterBase

### Descrição

function **ibase\_pconnect**(  
    [string](language.types.string.md) `$database` = ?,  
    [string](language.types.string.md) `$username` = ?,  
    [string](language.types.string.md) `$password` = ?,  
    [string](language.types.string.md) `$charset` = ?,  
    [int](language.types.integer.md) `$buffers` = ?,  
    [int](language.types.integer.md) `$dialect` = ?,  
    [string](language.types.string.md) `$role` = ?,  
    [int](language.types.integer.md) `$sync` = ?  
): [resource](language.types.resource.md)

Abre uma conexão persistente com um banco de dados InterBase.

**ibase\_pconnect()** age muito como
[ibase\_connect()](function.ibase-connect.md) com duas diferenças principais.

Primeiro, ao conectar, a função tentará primeiro encontrar uma conexão
(persistente) que já esteja aberta com os mesmos parâmetros. Se um for encontrada, um
identificador para ela será retornado em vez de abrir uma nova conexão.

Segundo, a conexão com o servidor InterBase não será fechada quando a
execução do script terminar. Em vez disso, ela permanecerá aberta para
uso futuro ([ibase\_close()](function.ibase-close.md) não fechará conexões
estabelecidas por **ibase\_pconnect()**). Este tipo de conexão é
portanto chamada de 'persistente'.

### Parâmetros

`database`
:   O argumento `database` tem que ser um caminho válido para
    o arquivo de banco de dados no servidor em que ele reside. Se o servidor não for local,
    ele deve ser prefixado com 'hostname:' (TCP/IP), '//hostname/'
    (NetBEUI) ou 'hostname@' (IPX/SPX), dependendo do protocolo de conexão
    usado.

`username`
:   O nome do usuário. Pode ser definido com a diretiva
    `ibase.default_user` php.ini.

`password`
:   A senha para `username`. Pode ser definida com a
    `ibase.default_password` php.ini diretiva.

`charset`
:   `charset` é o conjunto de caracteres padrão para o
    banco de dados.

`buffers`
:   `buffers` é o número de buffers de banco de dados a
    alocar para o cache do lado do servidor. Se 0 ou omitido, o servidor escolhe
    seu próprio padrão.

`dialect`
:   `dialect` seleciona o dialeto SQL padrão para qualquer
    declaração executada dentro de uma conexão, e ele assume como padrão o mais alto
    suportado pelas bibliotecas do cliente. Funcional apenas com o InterBase 6
    e superior.

`role`
:   Funcional apenas com InterBase 5 e superior.

`sync`

### Valor Retornado

Retorna um identificador de conexão do InterBase em caso de sucesso, ou **`false`** em caso de erro.

### Veja também

- [ibase\_close()](function.ibase-close.md) - Fecha uma conexão com um banco de dados InterBase
- [ibase\_connect()](function.ibase-connect.md) - Abre uma conexão com um banco de dados

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
