# Outras Alterações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration85.other-changes.php

---

## Outras Alterações

### Alterações no Núcleo

#### Núcleo

O temporizador de alta resolução ([hrtime()](function.hrtime.md)) no macOS agora
usa a API recomendada
`clock_gettime_nsec_np(CLOCK_UPTIME_RAW)` em vez de
`mach_absolute_time()`.

#### CGI/CLI

A opção **-z** ou **--zend-extension**
foi removida por não estar funcionando.
Use **-d zend\_extension=[caminho]** em vez disso.

#### PDO\_ODBC

O comportamento de busca para colunas maiores foi alterado. Em vez de
buscar blocos de 256 bytes, o PDO\_ODBC tentará buscar um tamanho de bloco maior;
atualmente, esse tamanho é o tamanho da página menos a sobrecarga de string. Os drivers que
retornam SQL\_NO\_TOTAL em SQLGetData também são tratados de forma mais eficiente.
Isso deve melhorar a compatibilidade e o desempenho.

### Alterações nos Módulos SAPI

#### CLI

Tentar definir um título de processo muito longo com
[cli\_set\_process\_title()](function.cli-set-process-title.md) agora falhará em vez de
truncar silenciosamente o título fornecido.

Adicionada uma nova opção **--ini=diff** para imprimir as configurações do arquivo INI
alterado em relação ao padrão integrado.

#### FPM

O FPM com httpd ProxyPass decodifica opcionalmente o caminho completo do script. Adicionada a configuração INI
fastcgi.script\_path\_encoded
para evitar este novo comportamento.

O limite de log de acesso do FPM agora respeita o valor de [log\_limit](install.fpm.configuration.md#log-limit).

### Funções Alteradas

#### Intl

[grapheme\_extract()](function.grapheme-extract.md) atribui corretamente o valor de
`next` ao ignorar bytes iniciais inválidos.
Anteriormente, havia casos em que apontava para o início do
limite do grafema em vez do fim.

[transliterator\_get\_error\_code()](transliterator.geterrorcode.md),
[transliterator\_get\_error\_message()](transliterator.geterrormessage.md),
[TransLiterator::getErrorCode()](transliterator.geterrorcode.md)
e [TransLiterator::getErrorMessage()](transliterator.geterrormessage.md)
removeram **`false`** da união de tipos de retorno. Retornar **`false`**
na verdade nunca foi possível.

As seguintes funções agora suportam um argumento `locale`:
[grapheme\_strpos()](function.grapheme-strpos.md),
[grapheme\_stripos()](function.grapheme-stripos.md),
[grapheme\_strrpos()](function.grapheme-strrpos.md),
[grapheme\_strripos()](function.grapheme-strripos.md),
[grapheme\_substr()](function.grapheme-substr.md),
[grapheme\_strstr()](function.grapheme-strstr.md) e
[grapheme\_stristr()](function.grapheme-stristr.md).

#### LDAP

[ldap\_get\_option()](function.ldap-get-option.md) agora aceita uma conexão **`null`**,
como [ldap\_set\_option()](function.ldap-set-option.md),
para permitir a recuperação de opções globais.

#### libxml

[libxml\_set\_external\_entity\_loader()](function.libxml-set-external-entity-loader.md) agora tem um tipo de retorno formal
de [true](language.types.singleton.md).

#### OpenSSL

[openssl\_public\_encrypt()](function.openssl-public-encrypt.md) e
[openssl\_private\_decrypt()](function.openssl-private-decrypt.md) têm um novo parâmetro
`digest_algo` que permite especificar o algoritmo de hash
para o preenchimento OAEP.

[openssl\_sign()](function.openssl-sign.md) e [openssl\_verify()](function.openssl-verify.md)
possuem um novo parâmetro `padding` para permitir o uso de um
preenchimento RSA PSS mais seguro.

[openssl\_cms\_encrypt()](function.openssl-cms-encrypt.md) `cipher_algo`
O parâmetro pode ser uma string com o nome da cifra.
Isso permite usar mais algoritmos, incluindo algoritmos de cifra AES e GCM para
dados envelopados de autenticação.

#### PCNTL

[pcntl\_exec()](function.pcntl-exec.md) agora tem um tipo de retorno formal de
[false](language.types.singleton.md).

[pcntl\_waitid()](function.pcntl-waitid.md) recebe um argumento adicional resource\_usage
para coletar várias métricas específicas da plataforma sobre o processo filho.

#### PDO\_PGSQL

[Pdo\Pgsql::copyFromArray()](pdo-pgsql.copyfromarray.md) agora suporta entradas [iterable](language.types.iterable.md).

**Pdo\Pgsql::setAttribute()** e
**Pdo\Pgsql::prepare()** suportam configurar
**`PDO::ATTR_PREFETCH`** para 0, que entra no modo lento de busca.
Neste modo, as instruções não podem ser executadas em paralelo.

#### PostgreSQL

[pg\_copy\_from()](function.pg-copy-from.md) agora suporta entradas [iterable](language.types.iterable.md).

[pg\_connect()](function.pg-connect.md) verifica se o argumento connection\_string
contém algum byte nulo.

[pg\_close\_stmt()](function.pg-close-stmt.md) verifica se o argumento connection\_string
contém algum byte nulo.

#### POSIX

[posix\_ttyname()](function.posix-ttyname.md) define last\_error como EBADF ao encontrar
um descritor de arquivo inválido.

[posix\_isatty()](function.posix-isatty.md) gera uma mensagem **`E_WARNING`**
ao encontrar um descritor de arquivo inválido.

[posix\_fpathconf()](function.posix-fpathconf.md) verifica descritores de arquivo inválidos e
define last\_error como EBADF e gera uma mensagem **`E_WARNING`**.

#### Reflection

[ReflectionClass::\_\_toString()](reflectionclass.tostring.md) para
enumerações foi alterada para melhor indicar que a classe é uma enumeração e que
os casos de enumeração não são constantes de classe normais.

A saída de [ReflectionProperty::\_\_toString()](reflectionproperty.tostring.md) para
propriedades com ganchos foi alterada para indicar quais ganchos a propriedade possui,
se esses ganchos são finais e se a propriedade é virtual.
Isso também afeta a saída de [ReflectionClass::\_\_toString()](reflectionclass.tostring.md)
quando uma classe contém propriedades com ganchos.

#### Sockets

[socket\_create()](function.socket-create.md)/[socket\_bind()](function.socket-bind.md) podem
criar soquetes da família **`AF_PACKET`**.

[socket\_getsockname()](function.socket-getsockname.md) obtém o índice da interface e sua
representação em string com o soquete **`AF_PACKET`**.

#### Zlib

O argumento `use_include_path` para as funções
[gzfile()](function.gzfile.md), [gzopen()](function.gzopen.md) e
[readgzfile()](function.readgzfile.md) foi alterado de
[int](language.types.integer.md) para [bool](language.types.boolean.md).

As funções [gzfile()](function.gzfile.md),
[gzopen()](function.gzopen.md) e [readgzfile()](function.readgzfile.md)
agora respeitam o contexto de fluxo padrão.

### Outras Alterações em Extensões

#### cURL

[curl\_setopt()](function.curl-setopt.md) com o valor da opção
**`CURLOPT_FOLLOWLOCATION`**
não é mais tratada como booleano mas como inteiro, para lidar com
**`CURLFOLLOW_OBEYCODE`** e
**`CURLFOLLOW_FIRSTONLY`**.

#### Fileinfo

Biblioteca atualizada da versão 5.45 para a 5.46.

O tipo de retorno de [finfo\_close()](function.finfo-close.md) foi alterado para
[true](language.types.singleton.md), em vez de [bool](language.types.boolean.md).

#### Intl

O mecanismo interno de erros de Intl foi modernizado para que
indique com mais precisão qual local de chamada causou qual erro.
Além disso, algumas exceções de ext/date agora são encapsuladas em uma
[IntlException](class.intlexception.md).

#### Lexbor

Uma extensão lexbor sempre habilitada foi adicionada. Ela contém a biblioteca lexbor
que foi separada de [ext/dom](book.dom.md)
para ser reutilizada entre outras extensões.
A nova extensão não é exposta diretamente ao espaço do usuário.

#### PCRE

Atualizada a biblioteca pcre2lib da versão 10.44 para a 10.46.

#### PDO\_Sqlite

Alterada a versão mínima suportada de 3.7.7 para 3.7.17.

#### Readline

Os tipos de retorno de [readline\_add\_history()](function.readline-add-history.md),
[readline\_clear\_history()](function.readline-clear-history.md)
e [readline\_callback\_handler\_install()](function.readline-callback-handler-install.md) foram
alterados para [true](language.types.singleton.md), em vez de [bool](language.types.boolean.md).

#### Reflection

[ReflectionConstant](class.reflectionconstant.md) não é mais final.

### Alterações na Manipulação de Arquivos INI

#### Núcleo

Adicionada a opção [fatal\_error\_backtraces](errorfunc.configuration.md#ini.fatal-error-backtraces) para
controlar se os erros fatais devem incluir um rastreamento de pilha.

Adicionada configuração INI 'max\_memory\_limit' exclusiva da inicialização para controlar o limite
máximo de memória que pode ser configurado na inicialização ou em tempo de execução. Exceder
esse valor gera um aviso, a menos que seja definido como -1, e define o limite de memória para o valor
atual de 'max\_memory\_limit'.

#### Opcache

Adicionada a opção 'opcache.file\_cache\_read\_only' para suportar um diretório somente leitura
[opcache.file\_cache](opcache.configuration.md#ini.opcache.file-cache),
para uso com sistemas de arquivos somente leitura (por exemplo, contêineres Docker somente leitura).
Melhor utilizado com `opcache.validate_timestamps=0`,
`opcache.enable_file_override=1`
e `opcache.file_cache_consistency_checks=0`.

> **Nota**:
>
> Um cache gerado com uma versão diferente do PHP, um caminho de arquivo
> diferente ou configurações diferentes (incluindo quais extensões estão carregadas) pode
> ser ignorado.

O valor padrão de
[opcache.jit\_hot\_loop](opcache.configuration.md#ini.opcache.jit-hot-loop) é
agora 61 (um número primo) para evitar que seja um múltiplo do número de iterações
do loop.
Recomenda-se que este parâmetro seja definido como um número primo.

Alterar [opcache.memory\_consumption](opcache.configuration.md#ini.opcache.memory-consumption)
quando o OPcache SHM já estiver configurado agora reportará corretamente uma falha
em vez de não fazer nada silenciosamente e mostrar valores enganosos no PHPInfo.

#### OpenSSL

Adicionada a opção 'openssl.libctx'
para selecionar o tipo de contexto da biblioteca OpenSSL.
É possível usar uma libctx personalizada para cada thread ou uma única
libctx global (padrão).

### Desempenho

#### Núcleo

Removidos os OPcodes para comparações de identidade com valores booleanos, especialmente
para o padrão `match(true)`.

Adicionada a especialização de OPcode para comparações `=== []` e
`!== []`.

A criação de objetos de exceção agora é muito mais rápida.

As partes do código que utilizavam SSE2 foram adaptadas para usar SIMD
com ARM NEON também.

Introduzida a máquina virtual TAILCALL, habilitada por padrão ao compilar com Clang>=19
em x86\_64 ou aarch64. A máquina virtual TAILCALL é tão rápida quanto a máquina virtual HYBRID usada ao
compilar com GCC. Isso faz com que os binários PHP compilados com Clang>=19 sejam tão rápidos quanto
os binários compilados com GCC. O desempenho da máquina virtual CALL, usada com outros
compiladores, também melhorou consideravelmente.

#### Intl

Agora evita a criação de cópias extras de strings ao converter strings
para uso no compilador.

#### MBString

As partes do código que utilizavam SSE2 foram adaptadas para usar SIMD
com ARM NEON também.

#### Opcache

Melhoria no desempenho da obtenção de variáveis ​​TLS em código compilado
JIT em builds que não utilizam Glibc.

#### Reflection

Melhoria do desempenho dos seguintes métodos:

- [ReflectionProperty::getValue()](reflectionproperty.getvalue.md)
- [ReflectionProperty::getRawValue()](reflectionproperty.getrawvalue.md)
- [ReflectionProperty::isInitialized()](reflectionproperty.isinitialized.md)
- [ReflectionProperty::isInitialized()](reflectionproperty.isinitialized.md)
- [ReflectionProperty::setValue()](reflectionproperty.setvalue.md)
- [ReflectionProperty::setRawValue()](reflectionproperty.setrawvalue.md)

#### SPL

Melhoria no desempenho dos acessadores de dimensão e dos métodos de
[SplFixedArray](class.splfixedarray.md).

#### Standard

Melhoria no desempenho de funções de array com chamadas de retorno
([array\_find()](function.array-find.md), [array\_filter()](function.array-filter.md),
[array\_map()](function.array-map.md), [usort()](function.usort.md), ...).

Desempenho aprimorado de [urlencode()](function.urlencode.md) e
[rawurlencode()](function.rawurlencode.md).

Melhoria no desempenho de [unpack()](function.unpack.md) com repetições sem nome
evitando a criação de strings temporárias e sua reanálise.

Melhoria no desempenho de [pack()](function.pack.md).

Pequenas melhorias no desempenho de [array\_chunk()](function.array-chunk.md).

#### XML

Melhoria no desempenho de acesso às propriedades do [XMLReader](class.xmlreader.md).

Melhoria no desempenho do [XMLWriter](class.xmlwriter.md) e redução no
consumo de memória.

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
