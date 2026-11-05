# Alterações Incompatíveis com Versões Anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration84.incompatible.php

---

## Alterações Incompatíveis com Versões Anteriores

Embora não seja explicitamente citado nesta seção,
cada nova [função](migration84.new-functions.md),
[classe, interface, enumeração](migration84.new-classes.md),
ou [constante](migration84.constants.md)
pode fazer com que uma exceção de redeclaração do tipo [Error](class.error.md) seja lançada.

### Núcleo do PHP

#### Alteração de comportamento de [exit()](function.exit.md)

As construções de linguagem [exit()](function.exit.md) (e [die()](function.die.md))
agora se comportam mais como uma função.
Isso significa que elas agora podem ser passadas ​​como [callable](language.types.callable.md)s,
são afetadas pela instrução declare `strict_types`
e agora executam as coerções de tipo usuais em vez de converter qualquer valor
não inteiro para uma string.

Sendo assim, passar tipos inválidos para [exit()](function.exit.md) e
[die()](function.die.md) agora resultam, consistentemente, no
lançamento de um [TypeError](class.typeerror.md).

#### Recursão durante comparação

Encontrar recursão durante uma comparação agora resulta em
exceção [Error](class.error.md) ao invés de
erro fatal **`E_ERROR`**.

#### Modificação indireta de propriedades somente leitura

A modificação indireta de propriedades somente leitura em `__clone()`
não é mais permitida, por exemplo, `$ref = &$this->somente_leitura`.
Isso já era proibido para inicialização somente leitura e foi um
descuido na implementação de "reinicialização somente leitura durante a clonagem".

#### Alteração de Tipo de Constantes

As constantes **`PHP_DEBUG`** e **`PHP_ZTS`**
agora são do tipo [bool](language.types.boolean.md).
Anteriormente eram do tipo [int](language.types.integer.md).

#### Comprimento de nome de arquivo temporário

O nome dos arquivos enviados e criados pela função
[tempnam()](function.tempnam.md) agora tem 13 bytes a mais.
O comprimento total ainda depende da plataforma.

#### Remoção do nível de erro **`E_STRICT`**

O nível de erro **`E_STRICT`** foi removido,
pois não estava mais em uso no mecanismo PHP.
A constante **`E_STRICT`** foi descontinuada.

### Constantes de classe de extensão que agora são tipadas

As seguintes classes de extensões agora declaram um tipo em suas
constantes:

- [Date](book.datetime.md)
- [Intl](book.intl.md)
- [PDO](book.pdo.md)
- [Reflection](book.reflection.md)
- [SPL](book.spl.md)
- [Sqlite](book.sqlite3.md)
- [XMLReader](book.xmlreader.md)

### Migração de recurso para objeto

Vários [resource](language.types.resource.md)s migraram para [object](language.types.object.md)s.
As verificações do valor de retorno usando [is\_resource()](function.is-resource.md) devem ser
substituídas por verificações de **`false`**, a menos que especificado de outra forma.

#### DBA

As funções [DBA](book.dba.md) agora aceitam e retornam
objetos [Dba\Connection](class.dba-connection.md) ao invés de
[resource](language.types.resource.md)s `dba_connection`.

#### ODBC

As funções [ODBC](book.uodbc.md) agora aceitam e retornam
objetos [Odbc\Result](class.odbc-result.md) ao invés de
[resource](language.types.resource.md)s `odbc_result`.

As funções [ODBC](book.uodbc.md) agora aceitam e retornam
objetos [Odbc\Connection](class.odbc-connection.md) ao invés de
[resource](language.types.resource.md)s `odbc_connection`.

#### SOAP

A propriedade [SoapClient::$httpurl](class.soapclient.md#soapclient.props.httpurl) agora é um
objeto [Soap\Url](class.soap-url.md) ao invés de um
[resource](language.types.resource.md) `soap_url`.
Verificações que usam [is\_resource()](function.is-resource.md) (ou seja,
`is_resource($client->httpurl)`) devem ser substituídas por verificações
de **`null`** (isto é, `$client->httpurl !== null`).

A propriedade [SoapClient::$sdl](class.soapclient.md#soapclient.props.sdl) agora é um
objeto [Soap\Sdl](class.soap-sdl.md) ao invés de um
[resource](language.types.resource.md) `soap_sdl`.
Verificações que usam [is\_resource()](function.is-resource.md) (ou seja,
`is_resource($client->sdl)`) devem ser substituídas por verificações
de **`null`** (i.e. `$client->sdl !== null`).

### Novos alertas e exceções

Foram adicionados novos alertas e exceções que são acionados em
erros de programação, ou seja, valores inválidos fornecidos como argumentos.

#### Curl

[curl\_multi\_select()](function.curl-multi-select.md) agora lança um
[ValueError](class.valueerror.md) se o
parâmetro `timeout` for menor que
`0` ou maior que **`PHP_INT_MAX`**.

#### Gd

[imagejpeg()](function.imagejpeg.md), [imagewebp()](function.imagewebp.md), [imagepng()](function.imagepng.md), [imageavif()](function.imageavif.md)
agora lançam um [ValueError](class.valueerror.md) quando um
parâmetro `quality` inválido for passado.

[imageavif()](function.imageavif.md) agora lança um
[ValueError](class.valueerror.md) se um
parâmetro `speed` inválido for passado.

[imagescale()](function.imagescale.md) agora lança um
[ValueError](class.valueerror.md) se os parâmetros
`width` ou `height`
ultrapassarem os limites inferiores ou superiores.

[imagescale()](function.imagescale.md) agora lança um
[ValueError](class.valueerror.md) se um valor de
parâmetro `mode` inválido for passado.

[imagefilter()](function.imagefilter.md) agora lança um
[ValueError](class.valueerror.md) com o
filtro **`IMG_FILTER_SCATTER`**
se os parâmetros `sub` ou `plus`
ultrapassarem os limites inferiores ou superiores.

#### Gettext

[bind\_textdomain\_codeset()](function.bind-textdomain-codeset.md), [textdomain()](function.textdomain.md), d\*gettext
agora lançam um [ValueError](class.valueerror.md) se
`domain` for uma string vazia.

#### Intl

[resourcebundle\_get()](resourcebundle.get.md),
[ResourceBundle::get()](resourcebundle.get.md), e acessar deslocamentos em um
objeto [ResourceBundle](class.resourcebundle.md) agora lançam:

- [TypeError](class.typeerror.md) para tipos de deslocamento inválidos
- [ValueError](class.valueerror.md) para uma [string](language.types.string.md) vazia
- [ValueError](class.valueerror.md) se o índice inteiro não
  couber em uma representação de inteiro de 32 bits com sinal

[IntlDateFormatter::\_\_construct()](intldateformatter.create.md) lança um
[ValueError](class.valueerror.md) se
`locale` for inválido.

[NumberFormatter::\_\_construct()](numberformatter.create.md) lança um
[ValueError](class.valueerror.md) se
`locale` for inválido.

#### MBString

[mb\_encode\_numericentity()](function.mb-encode-numericentity.md) e
[mb\_decode\_numericentity()](function.mb-decode-numericentity.md) agora verificam se
`map` consiste somente de [int](language.types.integer.md)s,
senão um [ValueError](class.valueerror.md) é lançado.

[mb\_http\_input()](function.mb-http-input.md) agora sempre lança um
[ValueError](class.valueerror.md) se `type`
for inválido.

[mb\_http\_output()](function.mb-http-output.md) agora verifica se
`encoding` não contém nenhum byte nulo,
se contiver, um [ValueError](class.valueerror.md) será lançado.

#### ODBC

[odbc\_fetch\_row()](function.odbc-fetch-row.md) retorna **`false`** quando
`row` for menor ou igual a `0`.
Um alerta agora é emitido neste caso.

#### PCNTL

As funções [pcntl\_sigprocmask()](function.pcntl-sigprocmask.md),
[pcntl\_sigwaitinfo()](function.pcntl-sigwaitinfo.md) e
[pcntl\_sigtimedwait()](function.pcntl-sigtimedwait.md) agora lançam:

- Um [ValueError](class.valueerror.md) se o
  array `signals` estiver vazio
  (exceto para [pcntl\_sigprocmask()](function.pcntl-sigprocmask.md) se
  `mode` for igual a **`SIG_SETMASK`**)
- Um [TypeError](class.typeerror.md) se um valor do
  array `signals` não for um [int](language.types.integer.md)
- Um [ValueError](class.valueerror.md) se um valor do
  array `signals` não for um número de sinal válido.

A função [pcntl\_sigprocmask()](function.pcntl-sigprocmask.md) agora lança um
[ValueError](class.valueerror.md) se
`mode` não for uma das constantes **`SIG_BLOCK`**,
**`SIG_UNBLOCK`** ou **`SIG_SETMASK`**.

A função [pcntl\_sigtimedwait()](function.pcntl-sigtimedwait.md) agora lança:

- Um [ValueError](class.valueerror.md) se
  `seconds` for menor que `0`
- Um [ValueError](class.valueerror.md) se
  `nanoseconds` for menor que `0`
  ou maior que `1e9`
- Um [ValueError](class.valueerror.md) se ambos
  `seconds` e `nanoseconds`
  forem `0`

#### Session

Definir um valor não positivo para [session.gc\_divisor](session.configuration.md#ini.session.gc-divisor)
ou um valor negativo para [session.gc\_probability](session.configuration.md#ini.session.gc-probability)
agora emite um alerta.

#### SimpleXML

Chamar [simplexml\_import\_dom()](function.simplexml-import-dom.md) com um objeto não-XML
agora lança um [TypeError](class.typeerror.md) ao invés de um
[ValueError](class.valueerror.md).

#### Standard

A função [round()](function.round.md) agora valida o valor de
`mode` e lança um
[ValueError](class.valueerror.md) para modos inválidos.
Anteriormente, modos inválidos seria interpretados como
**`PHP_ROUND_HALF_UP`**.

A função [str\_getcsv()](function.str-getcsv.md) agora lança
[ValueError](class.valueerror.md)s quando
os argumentos `separator` e `enclosure`
não tiverem comprimento de um byte, ou se o argumento `escape`
não tiver um byte de comprimento e nem for uma string vazia.
Isto alinha o comportamento para ficar idêntico ao de
[fputcsv()](function.fputcsv.md) e [fgetcsv()](function.fgetcsv.md).

A função [php\_uname()](function.php-uname.md) agora lança um
[ValueError](class.valueerror.md) se
`mode` for inválido.

A opção `"allowed_classes"` para
[unserialize()](function.unserialize.md) agora lança
[TypeError](class.typeerror.md) e
[ValueError](class.valueerror.md) se não for um
[array](language.types.array.md) de nomes de classe nem um [bool](language.types.boolean.md).

#### XMLReader

Passar uma codificação de caracteres inválidos para
[XMLReader::open()](xmlreader.open.md) ou
[XMLReader::XML()](xmlreader.xml.md) agora lança um
[ValueError](class.valueerror.md).

Passar uma [string](language.types.string.md) contendo bytes nulos anteriormente emitia um
alerta, e agora lança um [ValueError](class.valueerror.md).

#### XMLWriter

Passar uma [string](language.types.string.md) contendo bytes nulos anteriormente emitia um
alerta, e agora lança um [ValueError](class.valueerror.md).

#### XSL

[XSLTProcessor::setParameter()](xsltprocessor.setparameter.md) agora lança um
[ValueError](class.valueerror.md) quando seus argumentos contiverem bytes
nulos. Isto nunca funcionou corretamente na verdade,
e é por isso que agora lança uma exceção.

Chamar [XSLTProcessor::importStyleSheet()](xsltprocessor.importstylesheet.md) com um
objeto não-XML agora lança um [TypeError](class.typeerror.md)
ao invés de um [ValueError](class.valueerror.md).

Falha ao chamar uma função de retorno do PHP durante uma avaliação agora lança uma exceção
ao invés de emitir um alerta.

### Date

Símbolos de `number` em [formatos relativos](datetime.formats.md#datetime.formats.relative)
novamente aceitam múltiplos sinais, por exemplo, `+-2`.

### DOM

Alguns métodos DOM anteriormente retornavam **`false`** ou uma exceção
[DOMException](class.domexception.md) com código
**`DOM_PHP_ERR`** se um novo nó não pudesse ser alocado.
Eles agora lançam consistentemente uma exceção [DOMException](class.domexception.md)
com código **`DOM_INVALID_STATE_ERR`**.
Esta situação é extremamente improvável e a probabilidade de ser afetado
é baixa.
Como resultado, [DOMImplementation::createDocument()](domimplementation.createdocument.md)
agora tem um tipo de retorno provisório de [DOMDocument](class.domdocument.md)
em vez de `DOMDocument|false`.

Anteriormente, os objetos [DOMXPath](class.domxpath.md) podiam ser clonados,
mas resultavam em um objeto inutilizável.
Isso não é mais possível, e clonar um objeto [DOMXPath](class.domxpath.md)
agora lança um [Error](class.error.md).

O método **DOMImplementation::getFeature()** foi removido.

### GMP

A classe [GMP](class.gmp.md) agora é final e não pode mais ser
estendida.

### MBString

Em strings inválidas (aquelas com erros de codificação),
[mb\_substr()](function.mb-substr.md) agora interpreta índices de caracteres da mesma
maneira que a maioria das outras funções mbstring.
Isto significa que os índices de caracteres retornados por [mb\_strpos()](function.mb-strpos.md)
podem ser passados ​​para [mb\_substr()](function.mb-substr.md).

Para strings SJIS-Mac (Mac japonês), os índices de caracteres passados ​​para
[mb\_substr()](function.mb-substr.md) agora se referem aos índices dos pontos de
código Unicode que são produzidos quando a string é convertida para Unicode.
Isso é significativo porque cerca de 40 caracteres SJIS-Mac são convertidos em uma
sequência de vários pontos de código Unicode.

### MySQLi

A constante não utilizada e não documentada
**`MYSQLI_SET_CHARSET_DIR`** foi removida.

A constante **`MYSQLI_STMT_ATTR_PREFETCH_ROWS`** foi removida.
O recurso não está disponível no mysqlnd.

As constantes **`MYSQLI_CURSOR_TYPE_FOR_UPDATE`** e
**`MYSQLI_CURSOR_TYPE_SCROLLABLE`** foram removidas.
Esta funcionalidade nunca foi implementada,
nem com mysqlnd nem com libmysql.

A constante **`MYSQLI_TYPE_INTERVAL`** não utilizada, que atualmente
é um esboço e um apelido para **`MYSQLI_TYPE_ENUM`**,
foi removida.

### MySQLnd

O código de erro relatado para os tempos limite de espera do servidor MySQL foi alterado de
`2006` para `4031` nas versões 8.0.24
e superiores do servidor MySQL.

### Opcache

O valor máximo da configuração
[opcache.interned\_strings\_buffer](opcache.configuration.md#ini.opcache.interned-strings-buffer)
em arquiteturas de 64 bits agora é `32767`.
Anteriormente era `4095`.

#### JIT

Os valores de configuração padrão para o JIT foram alterados de
[`opcache.jit=tracing`](opcache.configuration.md#ini.opcache.jit)
e [`opcache.jit_buffer_size=0`](opcache.configuration.md#ini.opcache.jit-buffer-size)
para [`opcache.jit=disable`](opcache.configuration.md#ini.opcache.jit)
e [`opcache.jit_buffer_size=64M`](opcache.configuration.md#ini.opcache.jit-buffer-size), respectivamente.

Isso não afeta o comportamento observável padrão,
pois o JIT ainda está desabilitado por padrão.
No entanto, agora ele está desativado por meio da configuração
[opcache.jit](opcache.configuration.md#ini.opcache.jit),
em vez de
[opcache.jit\_buffer\_size](opcache.configuration.md#ini.opcache.jit-buffer-size).
Isso pode afetar usuários que anteriormente ativaram o JIT exclusivamente por meio de
[opcache.jit\_buffer\_size](opcache.configuration.md#ini.opcache.jit-buffer-size),
sem também especificar um modo JIT usando
[opcache.jit](opcache.configuration.md#ini.opcache.jit).
Para ativar a compilação JIT, defina o
valor de configuração [opcache.jit](opcache.configuration.md#ini.opcache.jit) adequadamente.

Se a compilação JIT estiver habilitada, o PHP irá agora sair com um erro fatal na
inicialização se a inicialização do compilador JIT falhar por qualquer motivo.

### PCNTL

As funções [pcntl\_sigprocmask()](function.pcntl-sigprocmask.md),
[pcntl\_sigwaitinfo()](function.pcntl-sigwaitinfo.md) e
[pcntl\_sigtimedwait()](function.pcntl-sigtimedwait.md) agora sempre
retornam **`false`** em caso de falha.
Em alguns casos anteriores poderia retornar o valor `-1`.

### PCRE

O pacote pcre2lib foi atualizado para a versão 10.44.
Como consequência, isso significa que `{,3}` agora é reconhecido
como um quantificador em vez de texto.
Além disso, o significado de algumas classes de caracteres no modo UCP mudou.
Consulte o [» Registro de alterações do PCRE2](https://github.com/PCRE2Project/pcre2/blob/master/NEWS)
para um registro de alterações completo.

### PDO\_DBLIB

Os atributos **`Pdo\Dblib::ATTR_STRINGIFY_UNIQUEIDENTIFIER`** e
**`Pdo\Dblib::ATTR_DATETIME_CONVERT`** agora atuam como
atributos booleanos em vez de atributos inteiros.
Assim, definir o atributo via [PDO::setAttribute()](pdo.setattribute.md)
e recuperá-lo via [PDO::getAttribute()](pdo.getattribute.md) espera
e/ou retorna um [bool](language.types.boolean.md).

### PDO\_FIREBIRD

O atributo **`PDO::ATTR_AUTOCOMMIT`** agora atua como
atributos booleanos em vez de atributos inteiros.
Assim, definir o atributo via [PDO::setAttribute()](pdo.setattribute.md)
e recuperá-lo via [PDO::getAttribute()](pdo.getattribute.md) espera
e/ou retorna um [bool](language.types.boolean.md).

A extensão agora expõe algumas APIs Firebird C++,
portanto construir esta extensão agora requer um compilador C++.
Além disso, a extensão agora deve ser compilada com fbclient 3.0 ou superior.

### PDO\_MYSQL

Os atributos **`PDO::ATTR_AUTOCOMMIT`**,
**`PDO::ATTR_EMULATE_PREPARES`** e
**`PDO::MYSQL_ATTR_DIRECT_QUERY`** agora atuam como
atributos booleanos em vez de atributos inteiros.
Assim, definir o atributo via [PDO::setAttribute()](pdo.setattribute.md)
e recuperá-lo via [PDO::getAttribute()](pdo.getattribute.md) espera
e/ou retorna um [bool](language.types.boolean.md).

### PDO\_PGSQL

As credenciais do DSN, quando definidas, têm prioridade sobre as
contrapartes do construtor PDO, estando mais próximas dos estados da documentação.

### SimpleXML

[SimpleXMLElement](class.simplexmlelement.md) não é apenas uma representação de um
elemento XML, mas também é um [RecursiveIterator](class.recursiveiterator.md).
Antes do PHP 8.4.0, alguns de seus métodos (por exemplo,
[SimpleXMLElement::asXML()](simplexmlelement.asxml.md) ou
[SimpleXMLElement::getName()](simplexmlelement.getname.md)) e a conversão de tais
instâncias para [string](language.types.string.md) redefiniria implicitamente o iterador.

Isso poderia causar repetições infinitas inesperadas à medida que o iterador fosse retrocedido para o início.
Por exemplo:

```
<?php

$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);

$nodes = $xml->a->b;
foreach ($nodes as $nodeData) {
    echo "nodeData: " . $nodeData . "\n";

    $xml = $nodes->asXml();
}
```

resultaria em uma repetição infinita.

```
nodeData: 1
nodeData: 2
nodeData: 2
nodeData: 2
nodeData: 2
nodeData: 2
nodeData: 2
// ...
```

No entanto, esse comportamento foi corrigido e um
[SimpleXMLElement](class.simplexmlelement.md) não redefinirá mais implicitamente
os dados do iterador, a menos que seja retrocedido explicitamente.
O que significa que o exemplo anterior agora resultaria em:

```
nodeData: 1
nodeData: 2
nodeData: 3
```

### SOAP

[SoapClient::$typemap](class.soapclient.md#soapclient.props.typemap) agora é um [array](language.types.array.md)
em vez de um [resource](language.types.resource.md).
Verificações usando [is\_resource()](function.is-resource.md) (ou seja,
`is_resource($client->typemap)`) devem ser
substituídas por verificações de **`null`** (ou seja, `$client->typemap !== null`).

A extensão SOAP ganhou uma dependência opcional da extensão
[session](book.session.md).
Se o PHP for compilado sem a extensão "session" e com o
sinalizador de configuração **--enable-rtld-now** ativado,
erros de inicialização ocorrerão agora se a extensão [SOAP](book.soap.md)
também for usada.
Para resolver isso, não use rtld-now nem carregue a extensão "session".

### Standard

Ao usar [strcspn()](function.strcspn.md) com
`characters` sendo uma string vazia,
o comprimento da string agora é retornado em vez de parar incorretamente
no primeiro byte nulo.

[http\_build\_query()](function.http-build-query.md) agora lida corretamente com enumerações apoiadas.

[stream\_bucket\_make\_writeable()](function.stream-bucket-make-writeable.md) e
[stream\_bucket\_new()](function.stream-bucket-new.md) agora irão retornar uma
instância de [StreamBucket](class.streambucket.md) ao invés de uma instância de
[stdClass](class.stdclass.md).

### Tidy

Falhas no construtor agora lançam exceções em vez de emitir
alertas e ter um objeto quebrado.

### XML

As funções xml\_set\_\*\_handler
agora declaram e verificam uma assinatura
efetiva de [callable](language.types.callable.md)|[string](language.types.string.md)|[null](language.types.null.md) para os
parâmetros `handler`.
Além disso, os valores do tipo [string](language.types.string.md) que correspondem aos nomes dos métodos
do objeto definido com [xml\_set\_object()](function.xml-set-object.md) agora são verificados para
ver se o método existe na classe do objeto passado anteriormente.
Isso significa que [xml\_set\_object()](function.xml-set-object.md) agora sempre deve ser
chamada antes de definir nomes de métodos como [callable](language.types.callable.md)s.
Passar uma string vazia para desabilitar o manipulador ainda é permitido,
mas foi descontinuado.

No entanto, como [xml\_set\_object()](function.xml-set-object.md) e a passagem
de strings não [callable](language.types.callable.md)s foram descontinuadas,
é recomendado alterar tais instâncias com um [callable](language.types.callable.md)
referindo-se diretamente ao método.

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
