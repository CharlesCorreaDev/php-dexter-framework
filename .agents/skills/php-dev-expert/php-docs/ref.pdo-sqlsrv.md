# Driver PDO do Microsoft SQL Server (PDO_SQLSRV)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-sqlsrv.php

---

# Driver PDO do Microsoft SQL Server (PDO\_SQLSRV)

## Introdução

PDO\_SQLSRV é um driver que implementa a interface aos  [Objetos
de Dados PHP (PDO)](book.pdo.md#intro.pdo)
para permitir acesso do PHP a bancos de dados MS SQL Server (iniciando com o SQL Server 2005)
e SQL Azure.

## Instalação

A versão mais recente do driver está disponível aqui:
[» SQLSRV](https://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx).
O código-fonte do driver está hospedado em um [» repositório público](https://github.com/microsoft/msphpsql).

Para mais informações sobre requisitos do sistema, consulte
[» Requisitos de Sistema para o SQLSRV](https://msdn.microsoft.com/en-us/library/cc296170.aspx).

No Windows, a extensão PDO\_SQLSRV é habilitado pela adição dos
arquivos DLL apropriados ao diretório de extensões do PHP e da entrada
correspondente no arquivo php.ini.

No Linux e no macOS, a extensão PDO\_SQLSRV pode ser instalada usando o
[» PECL](https://pecl.php.net/).
Consulte o [» tutorial de instalação](https://docs.microsoft.com/en-us/sql/connect/php/installation-tutorial-linux-mac)
para detalhes.

## Constantes predefinidas

As constantes abaixo são definidas por
este driver e só estarão disponíveis quando a extensão tiver sido
compilada no PHP ou tiver sido carregada dinamicamente em tempo de execução. Além disso, estas
constantes específicas do driver só devem ser usadas se este driver estiver sendo usado.
Usar atributos específicos de um driver com outro driver pode resultar em
comportamento inesperado. [PDO::getAttribute()](pdo.getattribute.md) pode ser usada para
obter o atributo **`PDO::ATTR_DRIVER_NAME`** para verificar o
driver, se o código puder ser executado com vários drivers.

**`PDO::SQLSRV_TXN_READ_UNCOMMITTED`** ([int](language.types.integer.md))
:   Essa constante é um valor aceitável para a chave TransactionIsolation do DSN SQLSRV.
    Esta constante define o nível de isolamento da transação para a conexão como
    Read Uncommitted.

**`PDO::SQLSRV_TXN_READ_COMMITTED`** ([int](language.types.integer.md))
:   Essa constante é um valor aceitável para a chave TransactionIsolation do DSN SQLSRV.
    Esta constante define o nível de isolamento da transação para a conexão como
    Leitura Confirmada.

**`PDO::SQLSRV_TXN_REPEATABLE_READ`** ([int](language.types.integer.md))
:   Essa constante é um valor aceitável para a chave TransactionIsolation do DSN SQLSRV.
    Esta constante define o nível de isolamento da transação para a conexão como
    Leitura Repetível.

**`PDO::SQLSRV_TXN_SNAPSHOT`** ([int](language.types.integer.md))
:   Essa constante é um valor aceitável para a chave TransactionIsolation do DSN SQLSRV.
    Esta constante define o nível de isolamento da transação para a conexão como Snapshot.

**`PDO::SQLSRV_TXN_SERIALIZABLE`** ([int](language.types.integer.md))
:   Essa constante é um valor aceitável para a chave TransactionIsolation do DSN SQLSRV.
    Esta constante define o nível de isolamento da transação para a conexão como
    Serializável.

**`PDO::SQLSRV_ENCODING_BINARY`** ([int](language.types.integer.md))
:   Especifica que os dados são enviados/recuperados como um fluxo de bytes brutos de/para o servidor
    sem realizar codificação ou tradução. Essa constante pode ser passada para
    PDOStatement::setAttribute, PDO::prepare, PDOStatement::bindColumn e
    PDOStatement::bindParam.

**`PDO::SQLSRV_ENCODING_SYSTEM`** ([int](language.types.integer.md))
:   Especifica que os dados são enviados/recuperados de/para o servidor como caracteres de 8 bits,
    conforme especificado na página de código da localidade do Windows definida no sistema.
    Quaisquer caracteres multibyte ou caracteres que não sejam mapeados nesta página de códigos
    serão substituídos por um caractere de ponto de interrogação (?) de byte único. Essa constante
    pode ser passada para PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare,
    PDOStatement::bindColumn e PDOStatement::bindParam.

**`PDO::SQLSRV_ENCODING_UTF8`** ([int](language.types.integer.md))
:   Especifica que os dados são enviados/recuperados de/para o servidor na codificação UTF-8.
    Esta é a codificação padrão. Essa constante pode ser passada para
    PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare,
    PDOStatement::bindColumn e PDOStatement::bindParam.

**`PDO::SQLSRV_ENCODING_DEFAULT`** ([int](language.types.integer.md))
:   Especifica que os dados são enviados/recuperados de/para o servidor de acordo com
    PDO::SQLSRV\_ENCODING\_SYSTEM se especificado durante a conexão. A codificação da
    conexão é usada se especificada em uma instrução de preparação. Essa constante pode ser
    passada para PDOStatement::setAttribute, PDO::setAttribute, PDO::prepare,
    PDOStatement::bindColumn e PDOStatement::bindParam.

**`PDO::SQLSRV_ATTR_QUERY_TIMEOUT`** ([int](language.types.integer.md))
:   Um número inteiro não negativo que representa o período de tempo limite, em segundos. Zero (0)
    é o padrão e significa que não há tempo limite. Essa constante pode ser passada para
    PDOStatement::setAttribute, PDO::setAttribute e PDO::prepare.

**`PDO::SQLSRV_ATTR_DIRECT_QUERY`** ([int](language.types.integer.md))
:   Indica que uma instrução deve ser executada diretamente, sem estar preparada.
    Essa constante pode ser passada para PDO::setAttribute e PDO::prepare. Para obter mais
    informações, consulte
    [» Execução de instrução direta e preparada](https://msdn.microsoft.com/en-us/library/ff754356.aspx).

## Índice

- [PDO\_SQLSRV DSN](ref.pdo-sqlsrv.connection.md) — Conectando-se aos bancos de dados MS SQL Server e SQL Azure

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
