# Outras Alterações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration84.other-changes.php

---

## Outras Alterações

### Alterações no Núcleo do PHP

#### Closures

Os nomes de closures foram ajustados para incluir o nome da função-mãe
e a linha de suas definições para tornar mais fácil distingui-las, por exemplo,
dentro de rastreamentos de pilha.

#### Fibers

Troca de Fiber durante a execução do destrutor não é permitida. Foi bloqueada
anteriormente devido a conflitos com a coleta de lixo.

Destrutores agora podem ser executados em uma Fiber separada:

Quando a coleta de lixo é acionada em uma Fiber,
os destrutores chamados pelo coletor de lixo são executados em uma fibra separada:
o gc\_destructor\_fiber.
Se esta Fiber for suspensa, uma nova será criada para executar os destrutores
restantes.
O gc\_destructor\_fiber anterior não é mais referenciado pelo coletor de lixo
e pode ser coletado se não for referenciado em nenhum outro lugar.
Objetos cujos destrutores estão suspensos não serão coletados até que o
destrutor retorne ou a [Fiber](class.fiber.md) seja coletada.

#### Manipuladores de Saída

As opções de status do manipulador de saída passadas no parâmetro `flags`
da função [ob\_start()](function.ob-start.md) agora são limpas.

[output\_add\_rewrite\_var()](function.output-add-rewrite-var.md) agora usa
[`url_rewriter.hosts`](outcontrol.configuration.md#ini.url-rewriter.hosts)
ao invés de
[`session.trans_sid_hosts`](session.configuration.md#ini.session.trans-sid-hosts)
para selecionar hosts que serão sobrescritos.

### Alterações em Módulos SAPI

#### apache2handler

Suporte para o Apache versões 2.0 e 2.2 foi removido (fim de vida dessas versões).
A versão mínima requerida para o Apache é agora a 2.4.

#### CLI

O servidor interno procura um arquivo de índice recursivamente, percorrendo os
diretórios pais caso o arquivo especificado não possa ser localizado.
Este processo era ignorado anteriormente se o caminho parecesse se
referir a um arquivo, ou seja, se o último componente do caminho contivesse um ponto.
Nesse caso, um erro 404 era retornado.
O comportamento foi alterado para procurar um arquivo de índice em todos os casos.

#### FPM

Descarregar cabeçalhos sem um corpo agora será uma operação bem sucedida.

A página de status tem um novo campo para exibir um pico de uso de memória.

A configuração `events.mechanism` do arquivo /dev/poll
para Solaris/Illumos foi descontinuada.

### Funções Alteradas

#### Núcleo do PHP

[trigger\_error()](function.trigger-error.md) e [user\_error()](function.user-error.md)
agora têm um tipo de retorno [true](language.types.singleton.md) ao invés de [bool](language.types.boolean.md).

#### DOM

[DOMDocument::registerNodeClass()](domdocument.registernodeclass.md)
agora tem um tipo provisório de retorno de [true](language.types.singleton.md) ao invés de
[bool](language.types.boolean.md).
O método retornaria somente **`true`** na prática.

#### Hash

[hash\_update()](function.hash-update.md)
agora tem um tipo provisório de retorno de [true](language.types.singleton.md) ao invés de
[bool](language.types.boolean.md).
O método retornaria somente **`true`** na prática.

#### Intl

**`NumberFormatter::ROUND_TOWARD_ZERO`** e
**`NumberFormatter::ROUND_AWAY_FROM_ZERO`**
foram adicionadas como sinônimos para
**`NumberFormatter::ROUND_DOWN`** e
**`NumberFormatter::ROUND_UP`**
para ficarem consistentes com os novos modos
**`PHP_ROUND_*`**.

[ResourceBundle::get()](resourcebundle.get.md)
agora tem um tipo de retorno provisório de `ResourceBundle|array|string|int|null`.

As funções [idn\_to\_ascii()](function.idn-to-ascii.md) e [idn\_to\_utf8()](function.idn-to-utf8.md)
agora sempre lançam [ValueError](class.valueerror.md)s
se o nome em `domain` estiver vazio ou for muito longo.

As funções [idn\_to\_ascii()](function.idn-to-ascii.md) e [idn\_to\_utf8()](function.idn-to-utf8.md)
agora sempre lançam [ValueError](class.valueerror.md)
se o parâmetro `variant` não for
**`INTL_IDNA_VARIANT_UTS46`**.

#### LibXML

[libxml\_set\_streams\_context()](function.libxml-set-streams-context.md) agora imediatamente lança um
[TypeError](class.typeerror.md) quando um recurso que não seja de
contexto de fluxo é passado para a função,
ao invés de lançar mais tarde quando o contexto de fluxo for usado.

#### MBString

O comportamento de [mb\_strcut()](function.mb-strcut.md) é mais consistente
agora em relação a strings UTF-8 e UTF-16 inválidas.
Não há alteração de comportamento para strings UTF-8 e UTF-16 válidas.

#### ODBC

O parâmetro `row` das funções
[odbc\_fetch\_object()](function.odbc-fetch-object.md),
[odbc\_fetch\_array()](function.odbc-fetch-array.md) e
[odbc\_fetch\_into()](function.odbc-fetch-into.md) agora tem o valor padrão de **`null`**,
consistente com [odbc\_fetch\_row()](function.odbc-fetch-row.md).
Anteriormente, os valores padrão eram
`-1`,
`-1`
e `0`,
respectivamente.

#### OpenSSL

O parâmetro `extra_attributes` da função
[openssl\_csr\_new()](function.openssl-csr-new.md) agora define os atributos CSR
ao invés do DN, antes era feito incorretamente.

O parâmetro `dn` na função
[openssl\_csr\_new()](function.openssl-csr-new.md) permite definir um [array](language.types.array.md)
de valores para uma única entrada.

Novo parâmetro `serial_hex` adicionado à função
[openssl\_csr\_sign()](function.openssl-csr-sign.md) para permitir a definição de números seriais
em formato hexadecimal.

Analisar um horário UTC ASN.1 com [openssl\_x509\_parse()](function.openssl-x509-parse.md)
falha se os segundos forem omitidos para versões do OpenSSL menores que 3.2
(`-1` é retornado para esses campos).
As versões do OpenSSL maiores que 3.3 já não carregam esses certificados.

#### PDO

Agora é possível buscar o valor do atributo
**`PDO::ATTR_STRINGIFY_FETCHES`** com o método
[PDO::getAttribute()](pdo.getattribute.md).

Uma nova constante **`Pdo\Pgsql::ATTR_RESULT_MEMORY_SIZE`**
foi adicionada para recuperar o uso de memória de resultados de consultas com o método
[PDO::getAttribute()](pdo.getattribute.md) para drivers que suportam isso.

#### PDO\_FIREBIRD

Agora é possível buscar o valor dos atributos
**`FB_ATTR_DATE_FORMAT`**,
**`FB_ATTR_TIME_FORMAT`** e
**`FB_ATTR_TIMESTAMP_FORMAT`**
com o método
[PDO::getAttribute()](pdo.getattribute.md).

Adicionados novos atributos para especificar o nível de isolamento da transação e o modo de acesso.
Foram adicionadas cinco constantes relacionadas a esta funcionalidade:

- **`Pdo\Firebird::TRANSACTION_ISOLATION_LEVEL`**
- **`Pdo\Firebird::READ_COMMITTED`**
- **`Pdo\Firebird::REPEATABLE_READ`**
- **`Pdo\Firebird::SERIALIZABLE`**
- **`Pdo\Firebird::WRITABLE_TRANSACTION`**

Ao usar conexões persistentes, agora há uma verificação de atividade no
construtor.

O conteúdo criado muda dependendo do valor de
**`FB_API_VER`** em
ibase.h.
Um novo método estático [Pdo\Firebird::getApiVersion()](pdo-firebird.getapiversion.md)
pode ser usado para obter esta informação.
Esta informação agora também é referenciada em [phpinfo()](function.phpinfo.md).

Cinco novos tipos de dados estão agora disponíveis:
`INT128`, `DEC16`, `DEC34`, `TIMESTAMP_TZ`, `TIME_TZ`
.
Eles estão disponíveis a partir do Firebird 4.0.

#### PDO\_MYSQL

Agora é possível buscar o valor do atributo
**`PDO::ATTR_FETCH_TABLE_NAMES`** com o método
[PDO::getAttribute()](pdo.getattribute.md).

#### PDO\_PGSQL

Adicionado suporte à recuperação de uso de memória de consultas com
**`Pdo\Pgsql::ATTR_RESULT_MEMORY_SIZE`**.

Se a coluna for do tipo `FLOAT4OID` ou
`FLOAT8OID`, o valor agora será retornado como um
[float](language.types.float.md) ao invés de [string](language.types.string.md).

#### PGSQL

O parâmetro `conditions` da função
[pg\_select()](function.pg-select.md) agora é opcional e aceita um array vazio.

#### Phar

Os métodos
[Phar::setAlias()](phar.setalias.md), [Phar::setDefaultStub()](phar.setdefaultstub.md)
agora têm um tipo de retorno provisório de [true](language.types.singleton.md)
ao invés de [bool](language.types.boolean.md).

#### POSIX

[posix\_isatty()](function.posix-isatty.md) agora define o número do erro quando o
argumento de descritor de arquivo ou fluxo for inválido.

#### Reflection

O método [ReflectionGenerator::getFunction()](reflectiongenerator.getfunction.md)
agora pode ser chamado depois que o gerador termina a execução.

#### Sockets

O parâmetro `backlog` da função
[socket\_create\_listen()](function.socket-create-listen.md) agora tem um valor padrão de
**`SOMAXCONN`**.
Anteriormente, era `128`.

#### Sodium

As funções sodium\_crypto\_aead\_aes256gcm\_\*
agora estão disponíveis em CPUs aarch64 CPUs com as extensões criptográficas
ARM.

#### SPL

Os métodos
[SplPriorityQueue::insert()](splpriorityqueue.insert.md), [SplPriorityQueue::recoverFromCorruption()](splpriorityqueue.recoverfromcorruption.md), [SplHeap::insert()](splheap.insert.md), [SplHeap::recoverFromCorruption()](splheap.recoverfromcorruption.md)
agora têm um tipo de retorno provisório de [true](language.types.singleton.md)
ao invés de [bool](language.types.boolean.md).

A classe [SplObjectStorage](class.splobjectstorage.md) agora implementa
a interface [SeekableIterator](class.seekableiterator.md).

#### Standard

O valor padrão `'cost'` para o algoritmo de hash **`PASSWORD_BCRYPT`**
da função [password\_hash()](function.password-hash.md) aumentou de
`10` para `12`.

A função [debug\_zval\_dump()](function.debug-zval-dump.md) agora indica se um array está empacotado.

[long2ip()](function.long2ip.md) agora tem um tipo de retorno [string](language.types.string.md)
ao invés de `string|false`.

[highlight\_string()](function.highlight-string.md) agora tem um tipo de retorno
string|true ao invés de `string|bool`.

[print\_r()](function.print-r.md) agora tem um tipo de retorno
string|true ao invés de `string|bool`.

##### Arredondando com [round()](function.round.md)

O parâmetro `mode` da
função [round()](function.round.md) foi ampliado para
`RoundingMode|int`,
aceitando instâncias de uma nova enumeração [RoundingMode](enum.roundingmode.md).

Quatro novos modos foram adicionados à função [round()](function.round.md):
RoundingMode::PositiveInfinity, RoundingMode::NegativeInfinity, RoundingMode::TowardsZero, RoundingMode::AwayFromZero

A implementação interna para arredondamento para números inteiros foi reescrita
para ser mais fácil de verificar a precisão e para ser mais fácil de manter.
Alguns problemas de arredondamento foram corrigidos como resultado da reescrita.
Por exemplo, arredondar anteriormente `0.49999999999999994`
para o número inteiro mais próximo resultaria em `1.0`
ao invés do resultado correto `0.0`.
Entradas adicionais também podem ser afetadas e resultar em resultados diferentes
em comparação com versões anteriores do PHP.

Foi corrigido um problema causado pelo "pré-arredondamento" da função [round()](function.round.md).
Anteriormente, era usado um "pré-arredondamento" para tratar um valor como `0.285`
(na verdade `0.28499999999999998`) como um número decimal
e arredondá-lo para `0.29`.
No entanto, o "pré-arredondamento" arredonda incorretamente determinados números,
portanto, essa correção remove o "pré-arredondamento" e altera a forma como os números são comparados,
para que os valores sejam arredondados corretamente como números decimais.

A precisão máxima que pode ser tratada por [round()](function.round.md)
foi estendida em um dígito.
Por exemplo, `round(4503599627370495.5)` retornava
`4503599627370495.5`,
mas agora retorna `4503599627370496`.

### Outras Alterações em Extensões

#### cURL

A versão mínima do libcurl necessária agora é 7.61.0.

A opção **`CURLOPT_DNS_USE_GLOBAL_CACHE`** não tem mais
efeito e é ignorada silenciosamente.
Este recurso subjacente foi descontinuado na libcurl 7.11.1
e removido na libcurl 7.62.0.

#### GMP

Converter um objeto [GMP](class.gmp.md) para [bool](language.types.boolean.md) agora é
possível em vez de emitir um **`E_RECOVERABLE_ERROR`**.
O comportamento de conversão é sobrecarregado de modo que um objeto [GMP](class.gmp.md)
representando o valor `0` seja convertido em **`false`**.

#### LibXML

A versão mínima da libxml2 necessária agora é 2.9.4.

#### Intl

O comportamento da classe Intl foi normalizado para sempre lançar exceções
[Error](class.error.md) ao tentar usar
um objeto não inicializado ou quando a clonagem falhar.

#### MBString

As tabelas de dados Unicode foram atualizadas para Unicode 16.0.

#### MySQLnd

Suporte para o novo tipo de dados VECTOR do MySQL 9.

#### OpenSSL

A versão mínima do OpenSSL necessária agora é 1.1.1.

#### PDO\_PGSQL

A versão mínima da libpq necessária agora é 10.0.

#### PGSQL

A versão mínima da libpq necessária agora é 10.0.

#### SPL

Acessos fora dos limites em [SplFixedArray](class.splfixedarray.md) agora lançam
exceções do tipo [OutOfBoundsException](class.outofboundsexception.md)
em vez de [RuntimeException](class.runtimeexception.md).
Como [OutOfBoundsException](class.outofboundsexception.md) é uma classe
filha de [RuntimeException](class.runtimeexception.md) nenhuma mudança
comportamental é exibida ao tentar capturar essas exceções.

#### XSL

As propriedades tipadas [XSLTProcessor::$cloneDocument](class.xsltprocessor.md#xsltprocessor.props.clonedocument)
e [XSLTProcessor::$doXInclude](class.xsltprocessor.md#xsltprocessor.props.doxinclude) agora são declaradas.

#### Zlib

A versão mínima do zlib necessária agora é 1.2.11.

### Desempenho

#### Núcleo do PHP

Foi melhorado o desempenho da análise e formatação de números de ponto flutuante em
compilações ZTS sob cargas altamente simultâneas.
Isso afeta a família de funções [printf()](function.printf.md), bem como
funções de serialização, como [json\_encode()](function.json-encode.md)
ou [serialize()](function.serialize.md).

[sprintf()](function.sprintf.md) usando apenas os especificadores `%s`
e `%d` serão compilados na interpolação de
string equivalente, evitando a sobrecarga de uma chamada de função e
a análise repetitiva da string de formato.

#### BCMath

O desempenho das conversões e operações numéricas foi melhorado.

#### DOM

O desempenho de [DOMNode::C14N()](domnode.c14n.md) foi bastante
melhorado para o caso sem uma consulta xpath.
Isso pode proporcionar uma melhoria de tempo de facilmente duas ordens de
magnitude para documentos com dezenas de milhares de nós.

Melhoria no desempenho e redução do consumo de memória da serialização XML.

Uso reduzido de memória de classes de nós.

#### FTP

Melhorado o desempenho de uploads de FTP em até um fator de 10x para
uploads grandes.

#### Hash

Adicionadas implementações SSE2 e SHA-NI do SHA-256.
Isso melhora o desempenho em CPUs suportadas em aproximadamente 1,3x (SSE2)
e 3x - 5x (SHA-NI).
Créditos para Colin Percival / Tarsnap por esta otimização.

#### MBString

[mb\_strcut()](function.mb-strcut.md) é muito mais rápida agora para
strings UTF-8 e UTF-16.

Pesquisar nomes de codificação mbstring é muito mais rápido agora.

O desempenho da conversão de SJIS-win em Unicode foi bastante melhorado.

#### MySQLnd

Melhorou o desempenho da cotação do MySQLnd.

#### PCRE

Melhorado o desempenho de grupos de captura nomeados.

#### Random

Melhorado o desempenho de [Random\Randomizer](class.random-randomizer.md),
com foco específico nos métodos
[Random\Randomizer::getBytes()](random-randomizer.getbytes.md)
e [Random\Randomizer::getBytesFromString()](random-randomizer.getbytesfromstring.md).

#### SimpleXML

Melhor desempenho e redução do consumo de memória da serialização XML.

#### Standard

O desempenho de [strspn()](function.strspn.md) e
[strcspn()](function.strcspn.md) foi bastante melhorado.
Elas agora são executadas em tempo linear em vez de serem limitadas por tempo quadrático.

Melhorado o desempenho de [strpbrk()](function.strpbrk.md).

[get\_browser()](function.get-browser.md) é muito mais rápido agora,
até 1.5x - 2.5x para alguns casos de testes.

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
