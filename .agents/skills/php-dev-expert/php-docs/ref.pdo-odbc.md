# Driver PDO do ODBC e do DB2 (PDO_ODBC)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-odbc.php

---

# Driver PDO do ODBC e do DB2 (PDO\_ODBC)

## Introdução

PDO\_ODBC é um driver que implementa a interface aos  [Objetos
de Dados PHP (PDO)](book.pdo.md#intro.pdo)
para permitir acesso do PHP a bancos de dados através de drivers ODBC ou através da
biblioteca IBM DB2 Call Level Interface (DB2 CLI). O PDO\_ODBC atualmente suporta
três diferentes "sabores" de drivers de banco de dados:

ibm-db2
:   Suporta acesso aos servidores IBM DB2 Universal Database, Cloudscape e
    Apache Derby por meio do cliente DB2 express-C gratuito.

unixODBC
:   Suporta acesso a servidores de banco de dados por meio do gerenciador de driver
    unixODBC e dos próprios drivers ODBC do banco de dados.

generic
:   Oferece uma opção de compilação para gerenciadores de driver ODBC que
    não são explicitamente suportados por PDO\_ODBC.

No Windows, php\_pdo\_odbc.dll deve estar habilitado como
extensão no php.ini. Ele está vinculado
ao Windows ODBC Driver Manager para que o PHP possa se conectar a qualquer
banco de dados catalogado como um DSN de sistema.

## Instalação

**PDO\_ODBC em sistemas UNIX**

1. PDO\_ODBC está incluído no código-fonte do PHP. Pode-se compilar a
   extensão PDO\_ODBC como um módulo estático ou compartilhado usando os seguintes
   comandos **configure**.

   ibm\_db2
   :   ```
       ./configure --with-pdo-odbc=ibm-db2,/opt/IBM/db2/V8.1/
       ```

       Para construir o PDO\_ODBC com o tipo ibm-db2, é necessário ter
       os cabeçalhos de desenvolvimento do aplicativo DB2 instalados previamente
       na mesma máquina em que o PDO\_ODBC estiver sendo compilado. Os cabeçalhos de
       desenvolvimento de aplicativos DB2 são uma opção instalável nos servidores DB2 e
       também estão disponíveis como parte do DB2 Application Development Client,
       gratuitamente no
       [» site do IBM developerWorks](https://www.ibm.com/developerworks/downloads/im/db2express/index.html).

       Se não for informado um local para as bibliotecas e cabeçalhos do
       DB2 para o comando **configure**, o PDO\_ODBC usará o caminho padrão
       /home/db2inst1/sqllib.

   unixODBC
   :   ```
       ./configure --with-pdo-odbc=unixODBC,/usr/local
       ```

       Se não for informado um local para as bibliotecas e cabeçalhos
       unixODBC para o comando **configure**, o PDO\_ODBC usará o caminho padrão
       /usr/local.

   generic
   :   ```
       ./configure --with-pdo-odbc=generic,/usr/local,libname,ldflags,cflags
       ```

## Constantes predefinidas

As constantes abaixo são definidas por
este driver e só estarão disponíveis quando a extensão tiver sido
compilada no PHP ou tiver sido carregada dinamicamente em tempo de execução. Além disso, estas
constantes específicas do driver só devem ser usadas se este driver estiver sendo usado.
Usar atributos específicos de um driver com outro driver pode resultar em
comportamento inesperado. [PDO::getAttribute()](pdo.getattribute.md) pode ser usada para
obter o atributo **`PDO::ATTR_DRIVER_NAME`** para verificar o
driver, se o código puder ser executado com vários drivers.

**`PDO_ODBC_TYPE`** ([string](language.types.string.md))
:   Descreve a biblioteca ODBC vinculada à extensão PDO\_ODBC.
    Os valores possíveis incluem `unixODBC`,
    `iODBC` ou `generic`.

**Aviso**

As constantes listadas abaixo foram *DESCONTINUADAS*
a partir do PHP 8.5.0. Use as constantes correspondentes de [Pdo\Odbc](class.pdo-odbc.md)
no lugar delas.

**`PDO::ODBC_ATTR_USE_CURSOR_LIBRARY`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Odbc::ATTR_USE_CURSOR_LIBRARY`**.

**`PDO::ODBC_SQL_USE_IF_NEEDED`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Odbc::SQL_USE_IF_NEEDED`**.

**`PDO::ODBC_SQL_USE_DRIVER`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Odbc::SQL_USE_DRIVER`**.

**`PDO::ODBC_SQL_USE_ODBC`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Odbc::SQL_USE_ODBC`**.

**`PDO::ODBC_ATTR_ASSUME_UTF8`** ([bool](language.types.boolean.md))
:   Sinônimo de **`Pdo\Odbc::ATTR_ASSUME_UTF8`**.

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração do PDO\_ODBC**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [pdo\_odbc.connection\_pooling](ref.pdo-odbc.md#ini.pdo-odbc.connection-pooling) | "strict" | **`INI_ALL`** |  |
| [pdo\_odbc.db2\_instance\_name](ref.pdo-odbc.md#ini.pdo-odbc.db2-instance-name) | NULL | **`INI_SYSTEM`** | Este recurso descontinuado *será* certamente *removido* no futuro. |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`pdo_odbc.connection_pooling` [string](language.types.string.md)
:   Informa se as conexões ODBC devem ser agrupadas. Pode ser `"strict"`,
    `"relaxed"` ou `"off"` (igual a
    `""`). O parâmetro descreve quão rigoroso o gerenciador
    de conexões deve ser ao comparar parâmetros de conexão com conexões agrupadas
    existentes. **`strict`** é o padrão recomendado e
    resultará no uso de conexões em cache somente quando todos os parâmetros
    de conexão tiverem correspondência exata. **`relaxed`** resultará no
    uso de conexões em cache quando parâmetros de conexão semelhantes forem
    usados. Isso pode resultar no aumento do uso do cache, correndo o risco
    de sangrar informações de conexão entre (por exemplo) servidores virtuais.

    Esta configuração só pode ser alterada no arquivo php.ini
    e afeta todo o processo; quaisquer outros módulos carregados no
    processo que usem as mesmas bibliotecas ODBC também serão afetados, incluindo
    a [extensão ODBC unificada](ref.uodbc.md).

    **Aviso**

    A correspondência **`relaxed`** não deve ser usada em um servidor
    compartilhado, por motivos de segurança.

    **Dica**

    Esta configuração deve ser mantida na configuração padrão **`strict`**
    a menos que exista um bom motivo para alterá-la.

`pdo_odbc.db2_instance_name` [string](language.types.string.md)
:   Se você o PDO\_ODBC for compilado usando o tipo `db2`,
    esta configuração definirá o valor da variável de ambiente DB2INSTANCE nos
    sistemas operacionais Linux e UNIX para o nome especificado da instância
    do DB2. Isso permite que o PDO\_ODBC resolva o local das bibliotecas DB2
    e estabeleça conexões catalogadas com bancos de dados DB2.

    Esta configuração só pode ser alterada no arquivo php.ini
    e afeta todo o processo; quaisquer outros módulos carregados no
    processo que usem as mesmas bibliotecas ODBC também serão afetados, incluindo
    a [extensão ODBC unificada](ref.uodbc.md).

    Esta configuração não tem efeito no Windows.

## Índice

- [PDO\_ODBC DSN](ref.pdo-odbc.connection.md) — Conectando-se a bancos de dados ODBC ou DB2

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
