# Outras mudanças

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration83.other-changes.php

---

## Outras mudanças

### Mudanças no Core

#### FFI

[FFI::load()](ffi.load.md) agora é permitido durante o carregamento antecipado
quando [opcache.preload\_user](opcache.configuration.md#ini.opcache.preload-user)
é o usuário do sistema atual. Anteriormente,
chamar [FFI::load()](ffi.load.md) não era possível
durante o carregamento antecipado se a diretiva
[opcache.preload\_user](opcache.configuration.md#ini.opcache.preload-user)
estivesse definida.

#### FPM

O teste CLI do FPM agora falha se o caminho do socket for mais longo do que o suportado pelo sistema operacional.

#### Opcache

Nas SAPIs CLI e phpdbg, o carregamento antecipado não exige mais que a
diretiva [opcache.preload\_user](opcache.configuration.md#ini.opcache.preload-user)
esteja configurada ao ser executado como root.
Nas outras SAPIs, essa diretiva é necessária ao ser executado como root,
pois o carregamento antecipado é feito antes da SAPI mudar para um usuário não privilegiado.

#### Streams

A função [fread()](function.fread.md) de bloqueio em uma conexão de socket
agora retorna imediatamente se houver dados em buffer, em vez de esperar por mais dados.

Uma memória de fluxo não falha mais se o deslocamento de busca estiver além do final.
Em vez disso, a memória é aumentada na próxima gravação e os dados entre o antigo final e o
deslocamento são preenchidos com bytes zero, da mesma forma como acontece com arquivos.

Operações de acesso ao [stat()](function.stat.md) como
[file\_exists()](function.file-exists.md) e similares agora usarão o caminho real
em vez do caminho real do fluxo. Isso é consistente com a abertura de
fluxos.

### Alterações nos Módulos SAPI

#### CLI

Os fluxos **`STDOUT`**, **`STDERR`** e
**`STDIN`** não são mais fechados na destruição de resources,
o que ocorre principalmente quando o CLI termina.
No entanto, ainda é possível fechar explicitamente esses fluxos usando
[fclose()](function.fclose.md) e funções semelhantes.

### Funções Alteradas

#### Core

[gc\_status()](function.gc-status.md) adicionou os seguintes 8 campos:

- `"running"` => bool
- `"protected"` => bool
- `"full"` => bool
- `"buffer_size"` => int
- `"application_time"` => float: Tempo total de aplicação,
  em segundos (incluindo collector\_time)
- `"collector_time"` => float: Tempo gasto coletando ciclos,
  em segundos (incluindo destructor\_time e free\_time)
- `"destructor_time"` => float: Tempo gasto executando destrutores durante a
  coleta de ciclos, em segundos
- `"free_time"` => float: Tempo gasto liberando valores
  durante a coleta de ciclos, em segundos.

[class\_alias()](function.class-alias.md)agora suporta a criação de um alias de uma
classe interna.

Definir [open\_basedir](ini.core.md#ini.open-basedir) em tempo de execução
usando `ini_set('open_basedir', ...);` não aceita mais caminhos que
contenham o diretório pai (`..`). Anteriormente,
apenas os caminhos que começavam com `..` eram proibidos. Isso poderia
ser facilmente contornado adicionando `./` ao início do caminho.

Os manipuladores de exceção do usuário agora capturam exceções durante a finalização.

O HTML resultante das funções [highlight\_string()](function.highlight-string.md) e
[highlight\_file()](function.highlight-file.md) foi alterado.
O espaço em branco entre as tags HTML externas é removido. As quebras de linha e
espaços não são mais convertidos em entidades HTML. Todo o HTML agora é envolvido em uma tag
`<pre>`. A tag `<span>`
externa foi mesclada com a tag `<code>` .

#### Calendário

A função [easter\_date()](function.easter-date.md) agora suporta anos de 1970 a
2.000.000.000 em sistemas de 64 bits, anteriormente, ela suportava apenas anos no
intervalo de 1970 a 2037.

#### Curl

A função [curl\_getinfo()](function.curl-getinfo.md) agora suporta duas novas constantes:
**`CURLINFO_CAPATH`** e
**`CURLINFO_CAINFO`**. Se a opção for **`null`**, duas chaves
adicionais são adicionadas:
`"capath"` e `"cainfo"`.

#### DOM

Alterada a tentativa de tipo de retorno de
[DOMCharacterData::appendData()](domcharacterdata.appenddata.md) para [true](language.types.singleton.md).

[DOMDocument::loadHTML()](domdocument.loadhtml.md),
[DOMDocument::loadHTMLFile()](domdocument.loadhtmlfile.md) e
[DOMDocument::loadXML()](domdocument.loadxml.md) agora têm um tipo de retorno
tentativo de [bool](language.types.boolean.md). Anteriormente, isso estava documentado com um tipo de retorno
de `DOMDocument|bool`, mas, a partir do PHP 8.0.0,
[DOMDocument](class.domdocument.md)
não pode mais ser retornado, pois não pode ser chamado estaticamente.

#### Gd

A assinatura da função [imagerotate()](function.imagerotate.md) foi alterada.
O parâmetro `ignore_transparent` foi removido,
pois era ignorado desde o PHP 5.5.0.

#### Intl

A função [datefmt\_set\_timezone()](intldateformatter.settimezone.md) (e seu alias
[IntlDateformatter::setTimeZone()](intldateformatter.settimezone.md))
agora retorna **`true`** em caso de sucesso, anteriormente retornava **`null`**.

[IntlBreakiterator::setText()](intlbreakiterator.settext.md) agora retorna **`false`**
em caso de falha, anteriormente era retornado **`null`**.
Agora retorna **`true`** em caso de sucesso, anteriormente era retornado **`null`**.

[IntlChar::enumCharNames()](intlchar.enumcharnames.md) agora retorna um boolean.
Anteriormente, ela retornava **`null`** em caso de sucesso e **`false`** em caso de falha.

O método **IntlDateFormatter::construct()** lançará uma exceção **`U_ILLEGAL_ARGUMENT_ERROR`**
quando uma localidade inválida foi definida.

#### MBString

As funções [mb\_strtolower()](function.mb-strtolower.md) e [mb\_convert\_case()](function.mb-convert-case.md)
implementam regras de formatação condicional para a letra sigma grega.
Para [mb\_convert\_case()](function.mb-convert-case.md),
a formatação condicional se aplica apenas aos modos **`MB_CASE_LOWER`**
e **`MB_CASE_TITLE`**, não aos modos
**`MB_CASE_LOWER_SIMPLE`** e
**`MB_CASE_TITLE_SIMPLE`**..

A função [mb\_decode\_mimeheader()](function.mb-decode-mimeheader.md) interpreta os underscores em
palavras MIME codificadas com QPrint conforme o RFC 2047; eles são
convertidos em espaços.
Os underscores devem ser codificados como `"=5F"` em tais
palavras MIME codificadas.

Em casos raros, [mb\_encode\_mimeheader()](function.mb-encode-mimeheader.md) codificará por transferência
sua string de entrada, enquanto no PHP 8.2 ela seria passada como ASCII bruto.

A função [mb\_encode\_mimeheader()](function.mb-encode-mimeheader.md) não descarta mais os bytes NUL (zero)
ao codificar a string de entrada com QPrint.
Isso anteriormente causava a corrupção de strings em determinadas codificações de texto, especialmente
UTF-16 e UTF-32, ao usar mb\_encode\_mimeheader.

O modo "não estrito" da função [mb\_detect\_encoding()](function.mb-detect-encoding.md)'s agora se
comporta conforme descrito na documentação.
Anteriormente, retornava **`false`** se o mesmo byte (por exemplo, o primeiro
byte) da string de entrada fosse inválido em todas as codificações candidatas.
Mas geralmente, eliminava codificações candidatas da consideração quando
um byte inválido era encontrado e, se o mesmo byte de entrada eliminasse todas
as codificações restantes ainda em consideração, retornaria **`false`**.
Por outro lado, se todas as codificações candidatas, exceto uma, fossem eliminadas da consideração,
retornaria a última restante sem considerar quantos erros de codificação poderiam
ser encontrados posteriormente na string.
Isso difere do comportamento descrito na documentação, que diz:
"Se estrito for definido como falso, a codificação mais próxima será
retornada."

#### mysqli

[mysqli\_fetch\_object()](mysqli-result.fetch-object.md) agora gera um
[ValueError](class.valueerror.md) em vez de uma [Exception](class.exception.md)
quando o argumento `constructor_args` não está vazio e a
classe não possui um construtor.

[mysqli\_poll()](mysqli.poll.md) agora gera um [ValueError](class.valueerror.md)
quando nenhum dos argumentos `read`
nem `error` é fornecido.

[mysqli\_field\_seek()](mysqli-result.field-seek.md) e
[mysqli\_result::field\_seek()](mysqli-result.field-seek.md) agora especificam o
tipo de retorno como [true](language.types.singleton.md) em vez de [bool](language.types.boolean.md).

#### ODBC

A função [odbc\_autocommit()](function.odbc-autocommit.md) agora aceita **`null`**
como valor para o parâmetro `enable`.
Passar **`null`** tem o mesmo comportamento que passar apenas 1 parâmetro,
ou seja, indica se o recurso de autocommit está habilitado ou não.

#### PGSQL

[pg\_fetch\_object()](function.pg-fetch-object.md) agora gera um
[ValueError](class.valueerror.md) em vez de uma [Exception](class.exception.md)
quando o argumento `constructor_args` não está vazio e a
classe não possui um construtor.

A função [pg\_insert()](function.pg-insert.md) agora gera um [ValueError](class.valueerror.md)
em vez de um **`E_WARNING`** quando a tabela especificada é inválida.

As funções [pg\_insert()](function.pg-insert.md) e [pg\_convert()](function.pg-convert.md) agora
geram um [ValueError](class.valueerror.md) ou [TypeError](class.typeerror.md)
em vez de um **`E_WARNING`** quando o valor/tipo de um campo
não corresponde adequadamente ao tipo do PostgreSQL.

O parâmetro `row` das funções
[pg\_fetch\_result()](function.pg-fetch-result.md),
[pg\_field\_prtlen()](function.pg-field-prtlen.md), e
[pg\_field\_is\_null()](function.pg-field-is-null.md) agora é opcional.

#### Random

A função [mt\_srand()](function.mt-srand.md) e [srand()](function.srand.md) foram
alteradas para não verificarem o número de argumentos para determinar se uma semente (seed)
aleatória deve ser usada. Passar **`null`** gerará uma semente aleatória,
e ao passar `0`, será usado zero como a semente. As funções agora são consistentes com
com o comportamento de [Random\Engine\Mt19937::\_\_construct()](random-engine-mt19937.construct.md).

#### Reflection

O tipo de retorno da função [ReflectionClass::getStaticProperties()](reflectionclass.getstaticproperties.md)
não é mais nulo.

#### Standard

As mensagens de erro do tipo **`E_NOTICE`**s emitidas pela
função [unserialize()](function.unserialize.md) foram elevadas para **`E_WARNING`**.

[unserialize()](function.unserialize.md) agora emite um novo **`E_WARNING`**
se a entrada contiver bytes não consumidos.

[array\_pad()](function.array-pad.md) agora está limitada apenas pelo número máximo de
elementos que um array pode ter. Anteriormente, era possível adicionar no máximo 1048576
elementos de cada vez.

[strtok()](function.strtok.md) gera um **`E_WARNING`** no caso
em que o token não é fornecido ao iniciar a tokenização.

A função [password\_hash()](function.password-hash.md) agora encadeará a exceção subjacente
[Random\RandomException](class.random-randomexception.md)
como a [Exception](class.exception.md) `previous` do
[ValueError](class.valueerror.md) quando a geração de salt falhar.

Se você estiver usando um array como o parâmetro `command`
[proc\_open()](function.proc-open.md), ele agora deve ter pelo menos um
elemento não vazio. Caso contrário, um [ValueError](class.valueerror.md)
será lançado.

[proc\_open()](function.proc-open.md) retorna **`false`** se o array `command`
for inválido, em vez de um objeto do tipo resource que produz um aviso posteriormente.
Este já era o comportamento no Windows mas agora também é aplicável se uma implementação
posix\_spawn estiver em uso (maioria das plataformas Linux, BSD e MacOS). Ainda existem
algumas plataformas antigas onde este comportamento não foi alterado já que posix\_spawn não
é suportado nelas.

[array\_sum()](function.array-sum.md) e [array\_product()](function.array-product.md) agora
emitem um aviso quando os valores no array não podem ser convertidos para int ou float.
Anteriormente, arrays e objetos eram ignorados, enquanto todos os outros valores eram
convertidos para int. Além disso, objetos que definem uma conversão numérica (por exemplo,
[GMP](book.gmp.md)) agora são convertidos em vez de serem ignorados.

O parâmetro `decimals` da função [number\_format()](function.number-format.md)
agora lida corretamente com números inteiros negativos.
Arredondar com um valor negativo para `decimals` significa
que `num` é arredondado para `decimals`
dígitos significativos antes do ponto decimal.
Anteriormente, valores negativos para `decimals` eram silenciosamente
ignorados e o número era arredondado para zero casas decimais.

Um novo argumento `before_needle` foi adicionado à função
[strrchr()](function.strrchr.md). Ele se comporta de forma semelhante ao seu equivalente nas
funções [strstr()](function.strstr.md) ou [stristr()](function.stristr.md).

[str\_getcsv()](function.str-getcsv.md) e [fgetcsv()](function.fgetcsv.md) agora retornam
uma string vazia em vez de uma string contendo um único byte nulo para o último campo,
que contém apenas um encapsulamento não terminado.

### Outras Alterações nas Extensões

#### Core

O uso dos operadores de [incremento/decremento](language.operators.increment.md)
(`++`/`--`) em valores do tipo
[bool](language.types.boolean.md) agora gera avisos.
Isso ocorre porque atualmente não tem efeito, mas se comportará como
`$bool += 1` no futuro.

O uso do operador de [decremento](language.operators.increment.md)
(`--`) em valores do tipo [null](language.types.null.md) agora gera avisos.
Isso ocorre porque atualmente não tem efeito, mas se comportará como
`$null -= 1` no futuro.

Objetos internos que implementam um cast \_IS\_NUMBER, mas não um manipulador do operador
que sobrescreve a adição e a subtração, agora podem ser incrementados e decrementados
como se alguém fosse fazer `$o += 1` ou `$o -= 1`

#### DOM

O mecanismo de vida útil do DOM foi reformulado de tal forma que nós implicitamente
removidos ainda podem ser recuperados. Anteriormente, isso resultava em uma exceção.

#### SQLite3

A classe [SQLite3](class.sqlite3.md) agora lança
[SQLite3Exception](class.sqlite3exception.md) (que estende
[Exception](class.exception.md)) em vez de [Exception](class.exception.md).

O código de erro do SQLite agora é passado no código de erro da exceção,
em vez de ser incluído na mensagem de erro.

### Mudanças no Tratamento de Arquivos INI

- As configurações INI `assert.*` foram descontinuadas.
  Isso inclui as seguintes configurações INI:
  - [assert.active](info.configuration.md#ini.assert.active)
  - [assert.bail](info.configuration.md#ini.assert.bail)
  - [assert.callback](info.configuration.md#ini.assert.callback)
  - [assert.exception](info.configuration.md#ini.assert.exception)
  - [assert.warning](info.configuration.md#ini.assert.warning)Se o valor da configuração for igual ao valor padrão, nenhuma notificação de
  descontinuação será emitida.
  Em vez disso, a configuração INI z[zend.assertions](ini.core.md#ini.zend.assertions)
  deve ser usada.
- [zend.max\_allowed\_stack\_size](info.configuration.md#ini.zend.max-allowed-stack-size)
  é uma nova diretiva INI que define o tamanho máximo permitido da pilha.
  Os valores possíveis são `0` (detectar o tamanho máximo da pilha do processo ou da thread),
  `-1` (sem limite) ou um número positivo de bytes.
  O valor padrão é `0`.
  Quando não é possível detectar o tamanho máximo da pilha do processo ou da thread,
  é usado um valor padrão do sistema conhecido.
  Definir esse valor muito alto tem o mesmo efeito que desabilitar o limite de tamanho da pilha.
  Fibers usam
  [fiber.stack\_size](info.configuration.md#ini.fiber.stack-size)
  como tamanho máximo permitido da pilha.
  Um [Error](class.error.md) é gerado quando a pilha de chamadas do processo ultrapassa
  [zend.max\_allowed\_stack\_size](info.configuration.md#ini.zend.max-allowed-stack-size)-[zend.reserved\_stack\_size](info.configuration.md#ini.zend.reserved-stack-size)
  bytes, para evitar falhas de segmentação induzidas por estouro de pilha, com o
  objetivo de facilitar a depuração.
  O tamanho da pilha aumenta durante recursões não controladas envolvendo funções internas
  ou os métodos mágicos
  [\_\_toString()](language.oop5.magic.md#object.tostring),
  [\_\_clone()](language.oop5.cloning.md#object.clone),
  [\_\_sleep()](language.oop5.magic.md#object.sleep),
  [\_\_destruct()](language.oop5.decon.md#object.destruct).
  Isso não está relacionado a estouros de buffer de pilha e não é uma medida de segurança.
- [zend.reserved\_stack\_size](info.configuration.md#ini.zend.reserved-stack-size)
  é uma nova diretiva INI que define o tamanho reservado da pilha, em bytes.
  Esse valor é subtraído do tamanho máximo permitido da pilha,
  como um buffer, ao verificar o tamanho da pilha.

### Performance

#### DOM

A iteração sobre um [DOMNodeList](class.domnodelist.md) agora utiliza o cache. Portanto,
solicitar itens não leva mais tempo quadrático por padrão.

Obter o conteúdo de texto de nós agora evita uma alocação, resultando
em um ganho de desempenho.

[DOMChildNode::remove()](domchildnode.remove.md)agora possui desempenho O(1),

#### Standard

A verificação de erros das flags na função [file()](function.file.md) agora é cerca de 7% mais rápida.

#### SPL

[RecursiveDirectoryIterator](class.recursivedirectoryiterator.md) agora realiza menos operações de entrada/saída (I/O)
ao percorrer um diretório.

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
