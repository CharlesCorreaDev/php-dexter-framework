# Alterações Incompatíveis com Versões Anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration85.incompatible.php

---

## Alterações Incompatíveis com Versões Anteriores

### Núcleo do PHP

#### Sinônimos `"array"` e `"callable"`

Não é mais possível usar `"array"`
e `"callable"` como sinônimos de nomes de classe
em [class\_alias()](function.class-alias.md).

#### Comparação livre de objetos incomparáveis

A comparação livre de objetos incomparáveis (por exemplo, enumerações,
[CurlHandle](class.curlhandle.md) e outras classes internas) com booleanos
era inconsistente anteriormente. Se comparado a um booleano literal
`$object == true`, se comportaria da mesma forma que
`(bool)$object`. Se comparado a um valor estaticamente desconhecido
`$object == $true`, sempre retornaria **`false`**.
Este comportamento foi consolidado para sempre seguir o de
`(bool)$object`.

#### Valor de retorno de gc\_collect\_cycles()

O valor de retorno de [gc\_collect\_cycles()](function.gc-collect-cycles.md) não mais inclui
strings e recursos que foram indiretamente coletados através dos ciclos.

#### Substituição da palavra-chave 'static' em subclasses finais

Agora é permitido substituir static por self ou pelo nome concreto da classe
em subclasses finais.

#### Manipuladores de tiques

Os manipuladores de tiques agora são desativados após todas as funções de desligamento
e destrutores terem sido executadas e os manipuladores de saída terem sido limpos.

#### Vinculação de Traits

Traits agora são vinculados antes da classe superior. Esta é uma alteração comportamental
sutil mas deve corresponder de forma mais precisa às expectativas do usuário.

#### Erros durante a compilação e à vinculação de classes

Os erros emitidos durante a compilação e a vinculação de classes agora são sempre atrasados
e tratados após a compilação ou a vinculação de classes. Erros fatais emitidos durante
a compilação ou a vinculação de classes fazem com que quaisquer erros atrasados ​​sejam tratados
imediatamente, sem chamar manipuladores de erros definidos pelo usuário.

#### Exceções lançadas pelo manipulador de erros definido pelo usuário

Exceções lançadas por manipuladores de erros definidos pelo usuário ao lidar com a vinculação de classes
Erros não são mais promovidos a erros fatais e não impedem a vinculação.

#### Erro de aplicação de atributo durante a compilação

Aplicar `#[\Attribute]` a uma classe abstrata, enumeração, interface ou trait
gera um erro durante a compilação. Anteriormente, o atributo podia ser
adicionado, mas quando [ReflectionAttribute::newInstance()](reflectionattribute.newinstance.md)
era chamado, um erro era lançado.
O erro pode ser adiado da compilação para o momento de execução usando o novo
atributo `#[\DelayedTargetValidation]`.

#### Configuração INI disable\_classes

A configuração INI [disable\_classes](ini.core.md#ini.disable-classes)
foi removida porque faz com que várias premissas do mecanismo sejam quebradas.

#### Desconstruindo valores não-array

Desconstruir valores não-array (diferentes de **`null`**) usando `[]` ou [list()](function.list.md) agora
emite um alerta.

#### Avisos relacionados à conversão

Agora, um aviso é emitido ao converter floats (ou strings que se parecem com
floats) para inteiros se eles não puderem ser representados como um. Isso afeta conversões explícitas
implícitas para inteiro.

Agora, um aviso é emitido ao converter NAN para outros tipos.

### Bzip2

[bzcompress()](function.bzcompress.md) agora lança um [ValueError](class.valueerror.md)
quando `block_size` não estiver entre 1 e 9.

[bzcompress()](function.bzcompress.md) agora lança um [ValueError](class.valueerror.md)
quando `work_factor` não estiver entre 0 e 250.

### DOM

Clonar um [DOMNamedNodeMap](class.domnamednodemap.md),
[DOMNodeList](class.domnodelist.md), [Dom\NamedNodeMap](class.dom-namednodemap.md),
[Dom\NodeList](class.dom-nodelist.md), [Dom\HTMLCollection](class.dom-htmlcollection.md),
e [Dom\DtdNamedNodeMap](class.dom-dtdnamednodemap.md) agora falha.
Isto nunca realmente resultou em um objeto funcional, portanto nenhum impacto é esperado.

### FileInfo

[finfo\_file()](function.finfo-file.md) e [finfo::file()](finfo.file.md)
agora lançam um [ValueError](class.valueerror.md) em vez de um
[TypeError](class.typeerror.md) quando `filename`
contiver bytes NUL.
Isso alinha o tipo de erro lançado para ser consistente com o restante da
linguagem.

### Intl

A extensão agora requer pelo menos a ICU 57.1.

[IntlDateFormatter::setTimeZone()](intldateformatter.settimezone.md)/[datefmt\_set\_timezone()](intldateformatter.settimezone.md)
agora lança um [IntlException](class.intlexception.md) nas falhas de classes ou
clones sem inicialização.

Todos os métodos de [Locale](class.locale.md) agora lançam um
[ValueError](class.valueerror.md) quando o argumento de localidade contiver bytes NUL.

O comportamento de **`Collator::SORT_REGULAR`** em relação
à manipulação de strings numéricas agora é alinhado com o comportamento de
**`SORT_REGULAR`** na extensão padrão.

### LDAP

[ldap\_get\_option()](function.ldap-get-option.md) e [ldap\_set\_option()](function.ldap-set-option.md)
agora lançam um [ValueError](class.valueerror.md) quando uma opção inválida é passada.

### MBString

As tabelas de dados do Unicode foram atualizadas para Unicode 17.0.

### MySQLi

Chamar o construtor mysqli em um objeto já construído
não é mais possível e lança um [Error](class.error.md).

### ODBC

O ODBC agora pressupõe que pelo menos a funcionalidade ODBC 3.5 esteja disponível.
A definição ODBCVER e os sinalizadores do sistema de compilação para controlá-la foram removidos.

O ODBC não possui mais opções de compilação para compilar com drivers específicos (exceto
para DB2) e remove casos especiais para esses drivers. É altamente
recomendado o uso de um gerenciador de drivers como o iODBC ou o unixODBC em sistemas não Windows.

### Opcache

A extensão Opcache agora está sempre integrada ao binário do PHP e está sempre
carregada.
As diretivas INI [opcache.enable](opcache.configuration.md#ini.opcache.enable)
e [opcache.enable\_cli](opcache.configuration.md#ini.opcache.enable-cli) ainda são
respeitadas.

As opções de configuração **--enable-opcache**/**--disable-opcache**
foram removidas e a compilação não produz mais os objetos opcache.so
ou php\_opcache.dll.

O uso de diretivas INI `zend_extension=opcache.so` ou
`zend_extension=php_opcache.dll`
emitirá um aviso.

### PCNTL

[pcntl\_exec()](function.pcntl-exec.md) agora lança um [ValueError](class.valueerror.md)
quando as entradas do parâmetro `args` contiver bytes NUL.

[pcntl\_exec()](function.pcntl-exec.md) agora lança um [ValueError](class.valueerror.md)
quando as entradas ou chaves do parâmetro `env_vars`
contiver bytes NUL.

### PCRE

A extensão foi compilada sem a opção de compilação semi-obsoleta
PCRE2\_EXTRA\_ALLOW\_LOOKAROUND\_BSK.

### PDO

Os argumentos do construtor definidos em conjunto com
**`PDO::FETCH_CLASS`** agora seguem a semântica usual do CUFA
([call\_user\_func\_array()](function.call-user-func-array.md)).
Isso significa que as chaves de string se comportarão como um argumento nomeado.
Além disso, o encapsulamento automático para argumentos por valor passados ​​para um parâmetro por referência
foi removido, e o aviso usual **`E_WARNING`**
sobre isso agora é emitido.
Para passar uma variável por referência para um argumento do construtor, use a atribuição geral
de referência de valor de array: `$ctor_args = [&$valByRef]`.

Tentar chamar [PDOStatement::setFetchMode()](pdostatement.setfetchmode.md) durante
uma chamada para [PDOStatement::fetch()](pdostatement.fetch.md),
[PDOStatement::fetchObject()](pdostatement.fetchobject.md),
[PDOStatement::fetchAll()](pdostatement.fetchall.md), por exemplo, usando truques como
passar o objeto de instrução como um argumento do construtor ao buscar em um
objeto, agora lançará um [Error](class.error.md).

Os valores das constantes **`PDO::FETCH_GROUP`**,
**`PDO::FETCH_UNIQUE`**,
**`PDO::FETCH_CLASSTYPE`**,
**`PDO::FETCH_PROPS_LATE`** e
**`PDO::FETCH_SERIALIZE`** foram alterados.

Agora, uma exceção [ValueError](class.valueerror.md) é lançada se
**`PDO::FETCH_PROPS_LATE`** for usado com um modo de busca
diferente de **`PDO::FETCH_CLASS`**, consistente com
outras opções de busca.

Agora, uma exceção [ValueError](class.valueerror.md) é lançada se
**`PDO::FETCH_INTO`** for usada como modo de busca em
[PDOStatement::fetchAll()](pdostatement.fetchall.md),
similar a **`PDO::FETCH_LAZY`**.

### PDO\_FIREBIRD

Agora, um [ValueError](class.valueerror.md) é lançado ao tentar definir um cursor
com um nome muito longo em um [PDOStatement](class.pdostatement.md) resultante do
driver Firebird.

### PDO\_SQLITE

O SQLite [PDO::quote()](pdo.quote.md) agora lançará uma exceção
ou emitirá um aviso, dependendo do modo de erro, se a string contiver
um byte nulo.

[PDO::sqliteCreateCollation()](pdo.sqlitecreatecollation.md) agora lançará uma
exceção se a função de retorno tiver o tipo de retorno errado, tornando-o mais
alinhado com o comportamento de [Pdo\Sqlite::createCollation()](pdo-sqlite.createcollation.md).

### POSIX

[posix\_kill()](function.posix-kill.md) agora lança um
[ValueError](class.valueerror.md) quando o argumento process\_id é
menor ou maior do que o suportado pela plataforma (intervalo de inteiro com sinal
ou de longo), [posix\_setpgid()](function.posix-setpgid.md) agora lança um
[ValueError](class.valueerror.md) quando o process\_id ou
o process\_group\_id é menor que zero ou maior do que o suportado pela
plataforma.

[posix\_setrlimit()](function.posix-setrlimit.md) agora lança um
[ValueError](class.valueerror.md) quando os argumentos hard\_limit ou
soft\_limit forem menores que -1 ou se soft\_limit for maior que
hard\_limit.

### Reflection

[ReflectionAttribute::newInstance()](reflectionattribute.newinstance.md) agora pode lançar
erros para atributos internos se o atributo foi aplicado em um alvo inválido
e o erro foi atrasado do tempo de compilação para o tempo de execução por meio do atributo
#[\DelayedTargetValidation].

### Session

A tentativa de gravar dados de sessão onde [$\_SESSION](reserved.variables.session.md) tem uma chave
contendo o caractere pipe (`|`) agora emitirá um aviso
em vez de falhar silenciosamente.

[session\_start()](function.session-start.md) é mais rigorosa em relação ao argumento 'options'.
Agora, ela lança um [ValueError](class.valueerror.md) se
o array não for um hashmap, ou um [TypeError](class.typeerror.md)
se o valor read\_and\_close não for um tipo válido compatível com int.

### SimpleXML

Passar uma expressão XPath que retorna algo diferente de um conjunto de nós
para [SimpleXMLElement::xpath()](simplexmlelement.xpath.md) agora emitirá um aviso
e retornará **`false`**, em vez de falhar silenciosamente e retornar um array vazio.

### SNMP

[snmpget()](function.snmpget.md),
[snmpset()](function.snmpset.md),
[snmp2\_get()](function.snmp2-get.md),
[snmp2\_set()](function.snmp2-set.md),
[snmp3\_get()](function.snmp3-get.md),
[snmp3\_set()](function.snmp3-set.md)
e [SNMP::\_\_construct()](snmp.construct.md) lançam um
[ValueError](class.valueerror.md) quando o nome do host
é muito grande, contém algum byte nulo ou se a porta fornecida
for negativa ou maior que 65535, os valores de tempo limite e tentativas
são menores que -1 ou muito grandes.

### SOAP

[SoapClient::\_\_doRequest()](soapclient.dorequest.md) agora aceita um novo parâmetro
opcional `uriParserClass` que aceita
argumentos de string ou **`null`**.
**`null`** representa o método original baseado em ([parse\_url()](function.parse-url.md)),
enquanto os novos backends serão usados ​​ao passar
[Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md) ou [Uri\WhatWg\Url](class.uri-whatwg-url.md).

### Sockets

[socket\_create\_listen()](function.socket-create-listen.md),
[socket\_bind()](function.socket-bind.md) e [socket\_sendto()](function.socket-sendto.md)
agora lançam um [ValueError](class.valueerror.md) se a porta for menor
que 0 ou maior que 65535, e também se alguma das entradas da matriz hints for
indexada numericamente.

[socket\_addrinfo\_lookup()](function.socket-addrinfo-lookup.md) agora lança um
[TypeError](class.typeerror.md) se algum dos valores de dicas não puder
ser convertido para inteiro e pode lançar um [ValueError](class.valueerror.md) se
algum desses valores estourar.

[socket\_set\_option()](function.socket-set-option.md) com as opções
**`MCAST_LEAVE_GROUP`**/**`MCAST_LEAVE_SOURCE_GROUP`**
agora lança uma exceção se o valor não for um objeto ou um array válido.

[socket\_set\_option()](function.socket-set-option.md) com contexto multicast agora lança um
[ValueError](class.valueerror.md) quando o socket criado não é da família
**`AF_INET`**/**`AF_INET6`**.

### SPL

[ArrayObject](class.arrayobject.md) não aceita mais enumerações, pois modificar as propriedades
$name ou $value pode quebrar
as premissas do mecanismo.

O parâmetro de [SplFileObject::fwrite()](splfileobject.fwrite.md)
`length` agora aceita valores nulos.
O valor padrão foi alterado de `0` para **`null`**.

### Standard

O uso de uma função da família printf com um formatador que não especificava a
precisão anteriormente redefinia incorretamente a precisão em vez de tratá-la
como uma precisão de 0.

Passar um inteiro `0` como o argumento `locales`
para a função [setlocale()](function.setlocale.md) não é mais suportado e agora lança
um [TypeError](class.typeerror.md).

### Tidy

[tidy::\_\_construct()](tidy.construct.md),
[tidy::parseFile()](tidy.parsefile.md),
[tidy::parseString()](tidy.parsestring.md) agora lançam um
[ValueError](class.valueerror.md) se a configuração contiver um
valor inválido ou tentar definir uma entrada interna somente leitura,
e um [TypeError](class.typeerror.md) se uma chave de configuração não for uma
string.

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
