# Driver PDO do MySQL (PDO_MYSQL)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.pdo-mysql.php

---

# Driver PDO do MySQL (PDO\_MYSQL)

## Introdução

PDO\_MYSQL é um driver que implementa a interface [PHP
Data Objects (PDO)](book.pdo.md#intro.pdo)
para habilitar o acesso do PHP aos bancos de dados MySQL.

PDO\_MYSQL utiliza as preparações emuladas por padrão.

**MySQL 8**

Ao executar uma versão de PHP anterior a 7.1.16, ou 7.2.4, defina
o plugin padrão de senhas do Servidor MySQL 8 para *mysql\_native\_password*
ou poderão surgir erros similares a
*The server requested authentication method unknown to the client [caching\_sha2\_password]*
mesmo quando *caching\_sha2\_password* não seja usado.

Isto acontece porque o padrão do MySQL 8 é caching\_sha2\_password, um plugin que não
é reconhecido pelas versões antigas do PHP (mysqlnd). Portanto, altere o plugin
configurando `default_authentication_plugin=mysql_native_password`
no arquivo my.cnf. O plugin *caching\_sha2\_password*
é totalmente suportado a partir do PHP 7.4.4. Para versões anteriores do PHP, a extensão
[mysql\_xdevapi](book.mysql-xdevapi.md) suporta
o plugin.

**Aviso**

Cuidado: Alguns tipos de tabelas do MySQL (motores de armazenamento) não suportam transações. Ao
escrever código para um banco de dados transacional onde o tipo de tabela não suporta
transações, o MySQL irá entender que a transação foi inicializada com sucesso.
Além disso, qualquer consulta DDL irá, de forma implícita,
executar o "commit" para qualquer transação que esteja pendente.

> **Nota**:
>
> O driver MySQL não suporta adequadamente a opção **`PDO::PARAM_INPUT_OUTPUT`**
> através de [PDOStatement::bindParam()](pdostatement.bindparam.md); embora tais parâmetros possam ser usados,
> eles não são atualizados (isto é, a saída real é ignorada).

## Instalação

As distribuições Unix comuns incluem versões binárias do PHP que podem
ser instaladas. Embora estas versões binárias são tipicamente compiladas com
suporte a extensões MySQL, as bibliotecas das extensões
em si podem precisar ser instaladas usando um pacote adicional. Verifique
o gerenciador de pacote que vem com a distribuição sendo usada para
disponibilidade desse pacote.

Por exemplo, no Ubuntu o pacote `php5-mysql` instala
as extensões PHP ext/mysql, ext/mysqli e PDO\_MYSQL. No CentOS,
o pacote `php-mysql` também instala estas três
extensões.

Alternativamente, o usuário pode compilar esta extensão por conta própria. Compilar o PHP
direto da fonte permite especificar as extensões a serem utilizadas, assim como
as bibliotecas clientes para cada extensão.

Ao compilar, use a opção **--with-pdo-mysql[=DIR]** para instalar
a extensão PDO MySQL, onde o `[=DIR]` opcional
é a localização da biblioteca base do MySQL. [Mysqlnd](book.mysqlnd.md)
é a biblioteca principal. Para detalher sobre a escolha de biblioteca, consulte a seção
[Escolhendo uma biblioteca MySQL](mysqlinfo.library.choosing.md).

Opcionalmente, **--with-mysql-sock[=DIR]** define a localização
do ponteiro do soquete Unix MySQL para todas as extensões MySQL, incluindo a PDO\_MYSQL. Se
não especificada, as localizações padrão são pesquisadas.

Optionalmente, **--with-zlib-dir[=DIR]** é usada para definir
o caminho da instalação da zlib.

```
$ ./configure --with-pdo-mysql --with-mysql-sock=/var/mysql/mysql.sock
```

O suporte a SSL é habilitado usando as constantes
**`Pdo\Mysql::ATTR_SSL_*`** apropriadas,
que é o equivalente a chamar a
[» função mysql\_ssl\_set() da API C do MySQL](https://dev.mysql.com/doc/c-api/8.4/en/mysql-ssl-set.html).
Além disso, o SSL não pode ser habilitado com [PDO::setAttribute()](pdo.setattribute.md)
porque a conexão já existirá.
Consulte também a documentação do MySQL sobre
[» conexão ao MySQL com SSL](https://dev.mysql.com/doc/en/using-encrypted-connections.html).

## Constantes predefinidas

As constantes abaixo são definidas por
este driver e só estarão disponíveis quando a extensão tiver sido
compilada no PHP ou tiver sido carregada dinamicamente em tempo de execução. Além disso, estas
constantes específicas do driver só devem ser usadas se este driver estiver sendo usado.
Usar atributos específicos de um driver com outro driver pode resultar em
comportamento inesperado. [PDO::getAttribute()](pdo.getattribute.md) pode ser usada para
obter o atributo **`PDO::ATTR_DRIVER_NAME`** para verificar o
driver, se o código puder ser executado com vários drivers.

**Aviso**

As constantes listadas abaixo foram *DESCONTINUADAS*
a partir do PHP 8.5.0. Use as constantes correspondentes de [Pdo\Mysql](class.pdo-mysql.md)
no lugar delas.

**`PDO::MYSQL_ATTR_USE_BUFFERED_QUERY`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_USE_BUFFERED_QUERY`**.

**`PDO::MYSQL_ATTR_LOCAL_INFILE`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_LOCAL_INFILE`**

**`PDO::MYSQL_ATTR_LOCAL_INFILE_DIRECTORY`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_LOCAL_INFILE_DIRECTORY`**.
    Disponível a partir do PHP 8.1.0.

**`PDO::MYSQL_ATTR_INIT_COMMAND`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_INIT_COMMAND`**.

**`PDO::MYSQL_ATTR_READ_DEFAULT_FILE`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_READ_DEFAULT_FILE`**.

**`PDO::MYSQL_ATTR_READ_DEFAULT_GROUP`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_READ_DEFAULT_GROUP`**.

**`PDO::MYSQL_ATTR_MAX_BUFFER_SIZE`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_MAX_BUFFER_SIZE`**.

**`PDO::MYSQL_ATTR_DIRECT_QUERY`** ([bool](language.types.boolean.md))
:   Sinônimo de **`PDO::ATTR_EMULATE_PREPARES`**.

    A partir do PHP 8.4.0, esta constante é tipada como [bool](language.types.boolean.md);
    anteriormente, era tipada como [int](language.types.integer.md).

**`PDO::MYSQL_ATTR_FOUND_ROWS`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_FOUND_ROWS`**.

**`PDO::MYSQL_ATTR_IGNORE_SPACE`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_IGNORE_SPACE`**.

**`PDO::MYSQL_ATTR_COMPRESS`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_COMPRESS`**.

**`PDO::MYSQL_ATTR_SERVER_PUBLIC_KEY`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_SERVER_PUBLIC_KEY`**.

**`PDO::MYSQL_ATTR_SSL_CA`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_SSL_CA`**.

**`PDO::MYSQL_ATTR_SSL_CAPATH`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_SSL_CAPATH`**.

**`PDO::MYSQL_ATTR_SSL_CERT`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_SSL_CERT`**.

**`PDO::MYSQL_ATTR_SSL_CIPHER`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_SSL_CIPHER`**.

**`PDO::MYSQL_ATTR_SSL_KEY`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_SSL_KEY`**.

**`PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_SSL_VERIFY_SERVER_CERT`**.
    Disponível a partir do PHP 7.0.18 e PHP 7.1.4.

**`PDO::MYSQL_ATTR_MULTI_STATEMENTS`** ([int](language.types.integer.md))
:   Sinônimo de **`Pdo\Mysql::ATTR_MULTI_STATEMENTS`**.

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração do PDO\_MYSQL**

| Nome | Padrão | Modificável |
| --- | --- | --- |
| [pdo\_mysql.default\_socket](ref.pdo-mysql.md#ini.pdo-mysql.default-socket) | "/tmp/mysql.sock" | **`INI_SYSTEM`** |
| [pdo\_mysql.debug](ref.pdo-mysql.md#ini.pdo-mysql.debug) | NULL | **`INI_SYSTEM`** |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`pdo_mysql.default_socket` [string](language.types.string.md)
:   Define um soquete de domínio Unix. Este valor também pode ser definido no momento da compilação se
    um soquete de domínio puder ser encontrado durante o comando "configure". Esta configuração ini é apenas para sistemas baseados em Unix.

`pdo_mysql.debug` [bool](language.types.boolean.md)
:   Habilita a depuração para o PDO\_MYSQL. Esta configuração está disponível somente quando o PDO\_MYSQL tiver
    sido compilado com a mysqlnd e em modo de depuração PDO.

## Índice

- [PDO\_MYSQL DSN](ref.pdo-mysql.connection.md) — Conectando a bancos de dados MySQL

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
