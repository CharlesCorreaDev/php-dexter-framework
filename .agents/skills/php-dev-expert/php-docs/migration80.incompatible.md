# Alterações incompatíveis com versões anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration80.incompatible.php

---

## Alterações incompatíveis com versões anteriores

### Núcleo do PHP

#### Comparação entre String e Número

Comparações não estritas entre números e strings não numéricas, agora funcionam convertendo o número em
string e comparando as strings. As comparações entre números e strings numéricas continuam
funcionando como antes. Notavelmente, isso significa que a comparação: `0 == "not-a-number"` agora é considerada
falsa.

| Comparação | Antes | Depois |
| --- | --- | --- |
| `0 == "0"` | **`true`** | **`true`** |
| `0 == "0.0"` | **`true`** | **`true`** |
| `0 == "foo"` | **`true`** | **`false`** |
| `0 == ""` | **`true`** | **`false`** |
| `42 == " 42"` | **`true`** | **`true`** |
| `42 == "42foo"` | **`true`** | **`false`** |

#### Outras mudanças incompatíveis

- `match` agora é uma palavra reservada.
- `mixed` agora é uma palavra reservada, portanto, não pode ser usado para nomear uma classe, interface ou trait, e também é proibido de ser usado em namespaces.
- As falhas de asserção agora são lançadas por padrão. Se o comportamento antigo é desejado,
  `assert.exception=0` pode ser definido nas configurações INI.
- Métodos com o mesmo nome de classe não são mais interpretados como construtores. O
  método [\_\_construct()](language.oop5.decon.md#object.construct) deve ser utilizado em seu lugar.
- A capacidade de chamar métodos não estáticos estaticamente foi removida. Por isso
  a função [is\_callable()](function.is-callable.md) irá falhar ao verificar um método não estático com
  um nome de classe (deve se realizar uma verificação com uma instância de objeto).
- Foram removidas as conversões de tipos, `(real)` e `(unset)`.
- A diretiva do php.ini [track\_errors](errorfunc.configuration.md#ini.track-errors) foi removida. Isto
  significa que a variável php\_errormsg não está mais disponível. A função
  [error\_get\_last()](function.error-get-last.md) deve ser utilizada em seu lugar.
- A capacidade de definir constantes que não diferenciam maiúsculas de minúsculas foi removida. O
  terceiro argumento para a função [define()](function.define.md) não pode ser mais **`true`**.
- A capacidade de especificar um auto carregamento utilizando a função [\_\_autoload()](function.autoload.md) foi
  removida. A função [spl\_autoload\_register()](function.spl-autoload-register.md) deve ser utilizada em seu lugar.
- O argumento `errcontext` não será mais usado para manipulação de erros personalizados
  definido com a função [set\_error\_handler()](function.set-error-handler.md).
- A função [create\_function()](function.create-function.md) foi removida. Ao invés disso, funções anônimas devem ser utilizadas.
- A função [each()](function.each.md) foi removida. [`foreach`](control-structures.foreach.md) ou [ArrayIterator](class.arrayiterator.md)
  devem ser utilizados em seu lugar.
- Foi removida a capacidade de desvincular this de closures que foram
  criadas a partir de um método, usando [Closure::fromCallable()](closure.fromcallable.md) ou
  [ReflectionMethod::getClosure()](reflectionmethod.getclosure.md).
- A habilidade de desvincular this de closures que contêm usos de
  this também foi removida.
- A habilidade de utilizar a função [array\_key\_exists()](function.array-key-exists.md) com objetos foi removida.
  as funções [isset()](function.isset.md) ou [property\_exists()](function.property-exists.md) devem ser usadas em seu lugar.
- O comportamento da função [array\_key\_exists()](function.array-key-exists.md) com relação ao tipo do parâmetro
  `key` agora é consistente com a função [isset()](function.isset.md) e
  acesso normal à arrays. Todos os tipos de chave agora usam as coerções usuais e as chaves de
  array/objeto lançam um [TypeError](class.typeerror.md).
- Qualquer array com número n em sua primeira posição utilizará
  n+1 em sua próxima chave implícita mesmo se n
  for negativo.
- O nível de error\_reporting padrão agora é **`E_ALL`**. Anteriormente excluía
  **`E_NOTICE`** e **`E_DEPRECATED`**.
- [display\_startup\_errors](errorfunc.configuration.md#ini.display-startup-errors) agora é habilitado por
  padrão.
- Usar parent dentro de uma classe sem pai agora produzirá um erro fatal
  em tempo de execução.
- O operador `@` não irá mais silenciar erros fatais
  (**`E_ERROR`**, **`E_CORE_ERROR`**,
  **`E_COMPILE_ERROR`**, **`E_USER_ERROR`**,
  **`E_RECOVERABLE_ERROR`**, **`E_PARSE`**). Manipuladores de erros que
  esperam que error\_reporting seja `0` quando `@` é usado, devem
  ser ajustados para usar uma verificação de máscara:

  ```
  <?php
  // Substituir isso ...
  function my_error_handler($err_no, $err_msg, $filename, $linenum) {
      if (error_reporting() == 0) {
          return false;
      }
      // ...
  }

  // ... por isso:
  function my_error_handler($err_no, $err_msg, $filename, $linenum) {
      if (!(error_reporting() & $err_no)) {
          return false;
      }
      // ...
  }
  ?>
  ```

  Adicionalmente, cuidados devem ser tomados para que mensagens de erro não sejam mostradas
  no ambiente de produção, o que pode resultar em vazamento de informações. Certifique-se
  de que a diretiva `display_errors=Off` seja usada em conjunto com o log de erros.
- `#[` não é mais interpretado como o início de um comentário,
  já que esta sintaxe é utilizada agora para atributos.
- Erros de herança devido a assinaturas de métodos incompatíveis (violações de LSP) agora sempre gerarão
  um erro fatal. Antes, um aviso era gerado em alguns casos.
- A precedência dos operadores de concatenação foi modificada em relação ao bitshifts tanto na adição
  como na subtração.

  ```
  <?php
  echo "Sum: " . $a + $b;
  // Era interpretado como:
  echo ("Sum: " . $a) + $b;
  // e passa a ser interpretado como:
  echo "Sum:" . ($a + $b);
  ?>
  ```
- Argumentos com um valor padrão que avaliam **`null`** em tempo de execução, não irão mais marcar
  o tipo do parâmetro como implícito. Um tipo explícito nulo, ou explicitamente **`null`** como argumento padrão
  deve ser usado em seu lugar.

  ```
  <?php
  // Subistituir
  function test(int $arg = CONST_RESOLVING_TO_NULL) {}
  // Por isso
  function test(?int $arg = CONST_RESOLVING_TO_NULL) {}
  // Ou isso
  function test(int $arg = null) {}
  ?>
  ```
- Uma série de avisos foram convertidos para exceções do tipo [Error](class.error.md):

  - A tentativa de escrita em uma propriedade de um não-objeto. Anteriormente isso
    criava implicitamente um objeto stdClass para strings nulas, falsas e vazias.
  - A tentativa de anexar um elemento a um array para a qual a chave PHP\_INT\_MAX
    já está em uso.
  - Tentar usar um tipo inválido (array ou objeto) como uma chave de array ou
    deslocamento de string.
  - A tentativa de escrever em um índice de array de um valor escalar.
  - Tentar descompactar um não-array/Traversable.
  - Tentar acessar constantes não qualificadas que são indefinidas.
    Anteriormente, os acessos constantes não qualificados resultavam em um aviso e eram interpretados como strings.
  - Passar o número errado de argumentos para uma função sem argumento variadic
    ira lançar uma exceção [ArgumentCountError](class.argumentcounterror.md).
  - Passar tipos contáveis inválidos para [count()](function.count.md) irá lançar
    uma exceção [TypeError](class.typeerror.md).

  Uma série de notificações foram convertidas em avisos:

  - A tentativa de leitura em uma variável não definida.
  - A tentativa de leitura em uma propriedade não definida.
  - A tentativa de leitura em uma chave de array não definido.
  - A tentativa de leitura em uma propriedade de um não-objeto.
  - A tentativa de acesso em um índice de array em um não-array.
  - A tentativa de conversão de um array para uma string.
  - A tentativa de usar um resource como uma chave de array.
  - A tentativa de usar null, um booleano ou um número de ponto flutuante(float) como uma posição em uma string.
  - A tentativa de leitura em uma posição fora dos limites de uma string.
  - A tentativa de atribuir uma string vazia a uma posição de uma string.
- A tentativa de atribuir múltiplos bytes em uma posição de uma string agora emite um aviso.
- Caracteres inesperados no código fonte (como bytes NUL fora de strings) agora irá resultar em uma
  exceção [ParseError](class.parseerror.md) em vez de um aviso do compilador.
- As exceções não capturadas agora passam por "desligamento limpo", o que significa que os destrutores são chamados
  após uma exceção não detectada.
- O erro fatal em tempo de compilação "Only variables can be passed by reference" foi adiado até o
  tempo de execução, e convertido em uma exceção de [Error](class.error.md)
  "Argument cannot be passed by reference".
- Alguns alertas do tipo "Only variables should be passed by reference" foram convertidas para
  exceções do tipo "Argument cannot be passed by reference"
- O nome gerado para classes anônimas foi modificado. Agora, inclui o nome da primeira classe ou
  interface:

  ```
  <?php
  new class extends ParentClass {};
  // -> ParentClass@anonymous
  new class implements FirstInterface, SecondInterface {};
  // -> FirstInterface@anonymous
  new class {};
  // -> class@anonymous
  ?>
  ```

  O nome mostrado acima ainda é seguido por um byte NUL e um sufixo único.
- As referências de método de traits não absolutas em adaptações de alias de traits agora precisam ser
  inequívocas:

  ```
  <?php
  class X {
      use T1, T2 {
          func as otherFunc;
      }
      function func() {}
  }
  ?>
  ```

  Se `T1::func()` e `T2::func()` existem, este código anteriormente era
  aceito de forma silenciosa e func assumia referência a `T1::func`. Agora irá gerar um
  erro fatal, e `T1::func` ou `T2::func` precisam ser
  escritos explicitamente.
- A assinatura de métodos abstratos definido nas características agora é verificada no método de implementação
  da classe:

  ```
  <?php
  trait MyTrait {
      abstract private function neededByTrait(): string;
  }

  class MyClass {
      use MyTrait;

      // Erro por conta do retorno desalinhado.
      private function neededByTrait(): int { return 42; }
  }
  ?>
  ```
- Funções desabilitadas agora são tratadas da mesma forma que funções não existentes. Ao chamar
  uma função desabilitada será informado que ela é desconhecida, e redefinir uma função desabilitada agora é possível.
- Os empacotadores de fluxo `data://` não podem mais ser writable (gravável), indo
  de encontro ao comportamento documentado.
- Os operadores aritméticos e bitwise (bit a bit) `+`, `-`,
  `*`, `/`, `**`, `%`,
  `<<`, `>>`, `&`,
  `|`, `^`, `~`, `++`,
  `--` irão agora apresentar um [TypeError](class.typeerror.md) quando um dos
  operandos estiver em um [array](language.types.array.md), [resource](language.types.resource.md) ou em um [object](language.types.object.md) não sobrecarregado (non-overloaded). A única exceção a isto é
  a operação de mesclagem de array com `+`, que permanece suportada.
- A conversão de float para string agora sempre terá o mesmo comportamento, independentemente da localidade.

  ```
  <?php
  setlocale(LC_ALL, "de_DE");
  $f = 3.14;
  echo $f, "\n";
  // Anteriormente: 3,14
  // Agora:         3.14
  ?>
  ```

  Veja as funções [printf()](function.printf.md), [number\_format()](function.number-format.md) e
  **NumberFormatter()** para customizar a formatação de números.
- O suporte para chaves (curly braces), cujo uso para acesso de deslocamento estava descontinuado, foi removido.

  ```
  <?php
  // Ao invés de:
  $array{0};
  $array{"key"};
  // Usar:
  $array[0];
  $array["key"];
  ?>
  ```
- Aplicar o modificador final ou método privado agora irá produzir um aviso, a menos que o método
  seja o construtor.
- Se um objeto construtor chama a função [exit()](function.exit.md), o objeto destrutor não será chamado.
  Isto vai de encontro ao comportamento que o construtor lança.
- Nomes de Namespace não podem mais conter espaços em branco: Enquanto `Foo\Bar` será reconhecido
  como um nome de Namespace, `Foo \ Bar` não será. Por outro lado, as palavras-chave agora serão
  permitidas como segmentos de um namespace, o que permite a mudança na interpretação do código:
  `new\x` agora é o mesmo que `constant('new\x')`,
  e não `new \x()`.
- Os ternários aninhados agora exigem parênteses explícitos.
- [debug\_backtrace()](function.debug-backtrace.md) e [Exception::getTrace()](exception.gettrace.md) agora não mais
  apresentam referências aos argumentos. Não será possível mudar os argumentos de uma função
  através de um backtrace.
- O uso de strings numéricas foi modificado para ser mais intuitivo e menos sujeito a erros. Seguindo
  os espaços em branco, é permitido agora strings numéricas para tratamento de consistência contendo espaços em branco.
  Isso afeta principalmente:

  - A função [is\_numeric()](function.is-numeric.md)
  - Comparações string a string
  - Declaração de tipos
  - Operações de incremento e decremento

  O conceito de um "leading-numeric string" foi praticamente abandonado; os casos onde permanecem
  são para facilitar a migração. Strings que emitem um **`E_NOTICE`** "A non
  well-formed numeric value encountered" agora emitirão um **`E_WARNING`** "A
  non-numeric value encountered" e todas as strings que emitiram um **`E_WARNING`** "A
  non-numeric value encountered" agora lançarão um erro
  [TypeError](class.typeerror.md). Isso afeta principalmente:

  - Operações aritméticas
  - Operações bit a bit

  Esta mudança do **`E_WARNING`** para [TypeError](class.typeerror.md) também afeta o
  **`E_WARNING`** "Illegal string offset 'string'" para o posicionamento ilegal de strings. O
  comportamento de conversões explícitas de strings para int/float não foi alterado.
- Métodos mágicos agora podem ter argumentos e retornar tipos verificados se eles foram declarados.
  As assinaturas devem corresponder à seguinte lista:

  - `__call(string $name, array $arguments): mixed`
  - `__callStatic(string $name, array $arguments): mixed`
  - `__clone(): void`
  - `__debugInfo(): ?array`
  - `__get(string $name): mixed`
  - `__invoke(mixed $arguments): mixed`
  - `__isset(string $name): bool`
  - `__serialize(): array`
  - `__set(string $name, mixed $value): void`
  - `__set_state(array $properties): object`
  - `__sleep(): array`
  - `__unserialize(array $data): void`
  - `__unset(string $name): void`
  - `__wakeup(): void`
- As chaves do array passados para a função [call\_user\_func\_array()](function.call-user-func-array.md) agora podem ser interpretadas
  como nomes de parâmetros, em vez de serem silenciosamente ignoradas.
- A declaração da função chamada `assert()` dentro de um namespace não é
  mais permitida e gera um **`E_COMPILE_ERROR`**.
  A função [assert()](function.assert.md) recebe um tratamento especial pelo motor do PHP,
  o que pode levar a comportamentos inconsistentes quando definido como uma função de namespace com o mesmo nome.

### Migração de Resource para Objeto

Diversos [resource](language.types.resource.md)s foram migrados para [object](language.types.object.md)s.
Verificações de valor de retorno usando a função [is\_resource()](function.is-resource.md) devem ser substituídas por checagens para **`false`**.

- A função [curl\_init()](function.curl-init.md) agora retornará um objeto [CurlHandle](class.curlhandle.md) ao invés
  de um [resource](language.types.resource.md). A função [curl\_close()](function.curl-close.md) não tem mais efeito,
  em vez disso a instância da classe [CurlHandle](class.curlhandle.md) é destruída automaticamente se não for
  mais referenciada.
- A função [curl\_multi\_init()](function.curl-multi-init.md) agora retornará um objeto [CurlMultiHandle](class.curlmultihandle.md) ao invés
  de um [resource](language.types.resource.md). A função [curl\_multi\_close()](function.curl-multi-close.md) não tem mais efeito,
  em vez disso a instância da classe [CurlMultiHandle](class.curlmultihandle.md) é destruída automaticamente se não for
  mais referenciada.
- [curl\_share\_init()](function.curl-share-init.md) agora retornará um objeto [CurlShareHandle](class.curlsharehandle.md)
  em vez de um [resource](language.types.resource.md). A função [curl\_share\_close()](function.curl-share-close.md) não tem mais efeito,
  em vez disso a instância da classe [CurlShareHandle](class.curlsharehandle.md) é
  destruída automaticamente se não for mais referenciada.
- [enchant\_broker\_init()](function.enchant-broker-init.md) agora retornará um objeto [EnchantBroker](class.enchantbroker.md)
  em vez de um [resource](language.types.resource.md).
- [enchant\_broker\_request\_dict()](function.enchant-broker-request-dict.md) e
  [enchant\_broker\_request\_pwl\_dict()](function.enchant-broker-request-pwl-dict.md) agora retornarão um objeto
  [EnchantDictionary](class.enchantdictionary.md) em vez de um [resource](language.types.resource.md).
- A extensão GD agora usa objetos [GdImage](class.gdimage.md) como a estrutura de dados interna
  para imagens, em vez de [resource](language.types.resource.md)s.
  A função [imagedestroy()](function.imagedestroy.md) não tem mais efeito; em vez disso a
  instância [GdImage](class.gdimage.md) é destruída automaticmanete se não for mais referenciada.
- [openssl\_x509\_read()](function.openssl-x509-read.md) e [openssl\_csr\_sign()](function.openssl-csr-sign.md) agora retornarão
  um objeto [OpenSSLCertificate](class.opensslcertificate.md) em vez de um [resource](language.types.resource.md).
  A função [openssl\_x509\_free()](function.openssl-x509-free.md) está descontinuada e não tem mais efeito,
  em vez disso a instância [OpenSSLCertificate](class.opensslcertificate.md) é destruída automaticamente se
  não for mais referenciada.
- [openssl\_csr\_new()](function.openssl-csr-new.md) agora retornará um
  objeto [OpenSSLCertificateSigningRequest](class.opensslcertificatesigningrequest.md) em vez de um [resource](language.types.resource.md).
- [openssl\_pkey\_new()](function.openssl-pkey-new.md) agora retornará um
  objeto [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) em vez de um [resource](language.types.resource.md).
  A função [openssl\_pkey\_free()](function.openssl-pkey-free.md) está descontinuada e não tem mais efeito,
  em vez disso a instância [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) é destruída automaticamente se
  não for mais referenciada.
- [shmop\_open()](function.shmop-open.md) irá agora retornar um objeto [Shmop](class.shmop.md) ao invés de
  um [resource](language.types.resource.md). A função [shmop\_close()](function.shmop-close.md) não tem mais efeitos, e foi
  descontinuada. A instância de [Shmop](class.shmop.md) será automaticamente destruída quando
  não seja mais referenciada.
- [socket\_create()](function.socket-create.md), [socket\_create\_listen()](function.socket-create-listen.md),
  [socket\_accept()](function.socket-accept.md), [socket\_import\_stream()](function.socket-import-stream.md),
  [socket\_addrinfo\_connect()](function.socket-addrinfo-connect.md), [socket\_addrinfo\_bind()](function.socket-addrinfo-bind.md), e
  [socket\_wsaprotocol\_info\_import()](function.socket-wsaprotocol-info-import.md) agora retornarão um
  objeto [Socket](class.socket.md) em vez de um [resource](language.types.resource.md).
  [socket\_addrinfo\_lookup()](function.socket-addrinfo-lookup.md) agora retornará um array de
  objetos [AddressInfo](class.addressinfo.md) em vez de [resource](language.types.resource.md)s.
- [msg\_get\_queue()](function.msg-get-queue.md) agora retornará um objeto [SysvMessageQueue](class.sysvmessagequeue.md)
  em vez de um [resource](language.types.resource.md).
- [sem\_get()](function.sem-get.md) agora retornará um objeto [SysvSemaphore](class.sysvsemaphore.md)
  em vez de um [resource](language.types.resource.md).
- [shm\_attach()](function.shm-attach.md) agora retornará um objeto [SysvSharedMemory](class.sysvsharedmemory.md)
  em vez de um [resource](language.types.resource.md).
- [xml\_parser\_create()](function.xml-parser-create.md) e [xml\_parser\_create\_ns()](function.xml-parser-create-ns.md) agora
  retornarão um objeto [XMLParser](class.xmlparser.md) em vez de um [resource](language.types.resource.md). A função
  [xml\_parser\_free()](function.xml-parser-free.md) não tem mais efeito, em vez disso a instância XMLParser
  é automaticamente destruída se não for mais referenciada.
- A função [XMLWriter](book.xmlwriter.md) agora aceita e retorna, respectivamente,
  objetos [XMLWriter](class.xmlwriter.md) em vez de [resource](language.types.resource.md)s.
- [inflate\_init()](function.inflate-init.md) agora retornará um objeto [InflateContext](class.inflatecontext.md)
  em vez de um [resource](language.types.resource.md).
- [deflate\_init()](function.deflate-init.md) agora retornará um objeto [DeflateContext](class.deflatecontext.md)
  em vez de um [resource](language.types.resource.md).

### COM e .Net (Windows)

A capacidade de importar constantes que não diferenciam maiúsculas de minúsculas de bibliotecas de tipos foi removida.
O segundo argumento para [com\_load\_typelib()](function.com-load-typelib.md) não pode mais ser falso;
[com.autoregister\_casesensitive](com.configuration.md#ini.com.autoregister-casesensitive)
não pode mais ser desabilitado; marcadores que não diferenciam maiúsculas de minúsculas em
[com.typelib\_file](com.configuration.md#ini.com.typelib-file) são ignorados.

### CURL

**`CURLOPT_POSTFIELDS`** não aceita mais objetos como arrays. Para
interpretar um objeto como um array, executar uma conversão explícita de `(array)`. O
mesmo se aplica a outras opções que aceitam arrays também.

### Data e hora

[mktime()](function.mktime.md) e [gmmktime()](function.gmmktime.md) agora requer pelo menos um
argumento. [time()](function.time.md) pode ser usado para obter o registro de data e hora atual.

### DOM

Classes não implementadas da extensão DOM que não tinham comportamento e continham dados
de teste foram removidos. Essas classes também foram removidas na versão mais recente do
DOM padrão:

- **DOMNameList**
- **DomImplementationList**
- **DOMConfiguration**
- **DomError**
- **DomErrorHandler**
- **DOMImplementationSource**
- **DOMLocator**
- **DOMUserDataHandler**
- **DOMTypeInfo**
- **DOMStringExtend**

Métodos não implementados da extensão DOM que não tinham comportamento foram removidos:

- **DOMNamedNodeMap::setNamedItem()**
- **DOMNamedNodeMap::removeNamedItem()**
- **DOMNamedNodeMap::setNamedItemNS()**
- **DOMNamedNodeMap::removeNamedItemNS()**
- **DOMText::replaceWholeText()**
- [DOMNode::compareDocumentPosition()](domnode.comparedocumentposition.md)
- [DOMNode::isEqualNode()](domnode.isequalnode.md)
- **DOMNode::getFeature()**
- **DOMNode::setUserData()**
- **DOMNode::getUserData()**
- **DOMDocument::renameNode()**

### Enchant

- [enchant\_broker\_list\_dicts()](function.enchant-broker-list-dicts.md), [enchant\_broker\_describe()](function.enchant-broker-describe.md) e
  [enchant\_dict\_suggest()](function.enchant-dict-suggest.md) agora retornam um array vazio no lugar de **`null`**.

### Exif

[read\_exif\_data()](function.read-exif-data.md) foi removido; [exif\_read\_data()](function.exif-read-data.md)
deve ser usado em seu lugar.

### Filter

- A **`FILTER_FLAG_SCHEME_REQUIRED`** e
  **`FILTER_FLAG_HOST_REQUIRED`** sinalizadores para o filtro
  **`FILTER_VALIDATE_URL`** foram removidas. O `scheme`
  e `host` são (e foram) sempre necessários.
- A fonte **`INPUT_REQUEST`** e **`INPUT_SESSION`** para
  [filter\_input()](function.filter-input.md) etc. foram removidos. Estes nunca foram implementados e seu
  uso sempre gerou um warning.d

### GD

- A função descontinuada [image2wbmp()](function.image2wbmp.md) foi removida.
- As funções descontinuadas [png2wbmp()](function.png2wbmp.md) e [jpeg2wbmp()](function.jpeg2wbmp.md) foram
  removidas.
- O parametro padrão `mode` de [imagecropauto()](function.imagecropauto.md) não aceita mais
  `-1`. **`IMG_CROP_DEFAULT`** deve ser usado no lugar.
- No Windows, php\_gd2.dll foi renomeado para php\_gd.dll.

### GMP

[gmp\_random()](function.gmp-random.md) foi removida. Uma das [gmp\_random\_range()](function.gmp-random-range.md) ou
[gmp\_random\_bits()](function.gmp-random-bits.md) deve ser usado no lugar.

### Iconv

implementações de iconv que não definem corretamente errno em caso de erros não são
mais suportadas.

### IMAP

- O argumento `default_host` não utilizado de [imap\_headerinfo()](function.imap-headerinfo.md)
  foi removido.
- A função [imap\_header()](function.imap-header.md) que é um alias de
  [imap\_headerinfo()](function.imap-headerinfo.md) foi removida.

### Funções de Internacionalização

- A constante descontinuada **`INTL_IDNA_VARIANT_2003`** foi removida.
- A constante descontinuada **`Normalizer::NONE`** foi removida.

### LDAP

- As funções descontinuadas [ldap\_sort()](function.ldap-sort.md),
  [ldap\_control\_paged\_result()](function.ldap-control-paged-result.md) e
  [ldap\_control\_paged\_result\_response()](function.ldap-control-paged-result-response.md) foram removidas.
- A interface de[ldap\_set\_rebind\_proc()](function.ldap-set-rebind-proc.md) foi mudada; o parâmetro
  `callback` não aceita strings vazias; **`null`** deve ser
  usado no lugar.

### MBString

- A diretiva [mbstring.func\_overload](mbstring.configuration.md#ini.mbstring.func-overload) foi
  removida. As constantes relacionadas **`MB_OVERLOAD_MAIL`**,
  **`MB_OVERLOAD_STRING`**, e **`MB_OVERLOAD_REGEX`**
  também foram removidas. Finalmente, a `"func_overload"` e a
  `"func_overload_list"` entradas [mb\_get\_info()](function.mb-get-info.md) foram
  removidas.
- [mb\_parse\_str()](function.mb-parse-str.md) não pode mais ser usado sem especificar um array de resultados.
- Vários sinônimos mbregex descontinuados foram removidos. Veja a seguinte
  lista para quais funções devem ser usadas:

  - **mbregex\_encoding()** → [mb\_regex\_encoding()](function.mb-regex-encoding.md)
  - **mbereg()** → [mb\_ereg()](function.mb-ereg.md)
  - **mberegi()** → [mb\_eregi()](function.mb-eregi.md)
  - **mbereg\_replace()** → [mb\_ereg\_replace()](function.mb-ereg-replace.md)
  - **mberegi\_replace()** → [mb\_eregi\_replace()](function.mb-eregi-replace.md)
  - **mbsplit()** → [mb\_split()](function.mb-split.md)
  - **mbereg\_match()** → [mb\_ereg\_match()](function.mb-ereg-match.md)
  - **mbereg\_search()** → [mb\_ereg\_search()](function.mb-ereg-search.md)
  - **mbereg\_search\_pos()** → [mb\_ereg\_search\_pos()](function.mb-ereg-search-pos.md)
  - **mbereg\_search\_regs()** → [mb\_ereg\_search\_regs()](function.mb-ereg-search-regs.md)
  - **mbereg\_search\_init()** → [mb\_ereg\_search\_init()](function.mb-ereg-search-init.md)
  - **mbereg\_search\_getregs()** → [mb\_ereg\_search\_getregs()](function.mb-ereg-search-getregs.md)
  - **mbereg\_search\_getpos()** → [mb\_ereg\_search\_getpos()](function.mb-ereg-search-getpos.md)
  - **mbereg\_search\_setpos()** → [mb\_ereg\_search\_setpos()](function.mb-ereg-search-setpos.md)
- O modificador `e` para [mb\_ereg\_replace()](function.mb-ereg-replace.md) foi removido.
  [mb\_ereg\_replace\_callback()](function.mb-ereg-replace-callback.md) deve ser usado em seu lugar.
- Um argumento de padrão não string para [mb\_ereg\_replace()](function.mb-ereg-replace.md) agora será interpretado como
  uma string em vez de um ponto de código ASCII. O comportamento anterior pode ser restaurado com uma chamada
  explícita para [chr()](function.chr.md).
- O argumento `needle` para [mb\_strpos()](function.mb-strpos.md),
  [mb\_strrpos()](function.mb-strrpos.md), [mb\_stripos()](function.mb-stripos.md),
  [mb\_strripos()](function.mb-strripos.md), [mb\_strstr()](function.mb-strstr.md),
  [mb\_stristr()](function.mb-stristr.md), [mb\_strrchr()](function.mb-strrchr.md) e
  [mb\_strrichr()](function.mb-strrichr.md) agora pode estar vazio.
- O parâmetro `is_hex`, que não era usado internamente, foi removido de
  [mb\_decode\_numericentity()](function.mb-decode-numericentity.md).
- O comportamento herdado de passar a codificação como o terceiro argumento em vez de um deslocamento para
  a função [mb\_strrpos()](function.mb-strrpos.md) foi removida; um `0` explícito
  offset com a codificação deve ser fornecido como o quarto argumento.
- Os aliases de codificação de caracteres `ISO_8859-*` foram substituídos por
  Aliases `ISO8859-*` para melhor interoperabilidade com a extensão iconv. os
  aliases mbregex ISO 8859 com sublinhados (`ISO_8859_*` e
  `ISO8859_*`) também foram removidos.
- [mb\_ereg()](function.mb-ereg.md) e [mb\_eregi()](function.mb-eregi.md) agora retornarão valores booleanos **`true`** sobre
  uma partida de sucesso. Anteriormente, eles retornavam inteiro `1` se
  `matches` não foi passado, ou `max(1, strlen($matches[0]))` se
  `matches` foi passado.

### OCI8

- A classe **OCI-Lob** agora é chamada de [OCILob](class.ocilob.md), e a
  a classe **OCI-Collection** agora se chama [OCICollection](class.ocicollection.md)
  para conformidade de nome imposta pelas ferramentas de anotação de tipo PHP 8 arginfo.
- Várias funções de alias foram marcadas como descontinuadas.
- [oci\_internal\_debug()](function.oci-internal-debug.md) e seu alias [ociinternaldebug()](function.ociinternaldebug.md) foram
  removidos.

### ODBC

- [odbc\_connect()](function.odbc-connect.md) não reutiliza mais conexões.
- O parâmetro `flags` não usado de [odbc\_exec()](function.odbc-exec.md) foi
  removido.

### OpenSSL

- [openssl\_seal()](function.openssl-seal.md) e [openssl\_open()](function.openssl-open.md) agora requerem
  `method` a ser passado, como o padrão anterior de `"RC4"`
  é considerado inseguro.

### Expressões regulares (Compatíveis com Perl)

Ao passar sequências de escape inválidas, elas não são mais interpretadas como literais. Esse comportamento
anteriormente exigia o modificador `X` – que agora é ignorado.

### Objetos de dados do PHP

- O modo padrão de manipulação de erro foi alterado de "silent" para "exceptions". Consulte
  [Erros e manipulação de erros](pdo.error-handling.md) para detalhes.
- As assinaturas de alguns métodos PDO foram alteradas:

  - `PDO::query(string $query, ?int $fetchMode = null, mixed ...$fetchModeArgs)`
  - `PDOStatement::setFetchMode(int $mode, mixed ...$args)`

### PDO ODBC

A diretiva
[pdo\_odbc.db2\_instance\_name](ref.pdo-odbc.md#ini.pdo-odbc.db2-instance-name) do php.ini
foi removida.

### PDO MySQL

[PDO::inTransaction()](pdo.intransaction.md) agora relata o estado real da transação da
conexão, em vez de uma aproximação mantida pelo PDO. Se uma consulta que é
sujeito para "confirmação implícita" é executado, [PDO::inTransaction()](pdo.intransaction.md)
posteriormente retornará **`false`**, pois uma transação não está mais ativa.

### PostgreSQL

- A sintaxe descontinuada de [pg\_connect()](function.pg-connect.md) usando vários parâmetros em vez de uma
  string de conexão não é mais suportada.
- As assinaturas descontinuadas de [pg\_lo\_import()](function.pg-lo-import.md) e [pg\_lo\_export()](function.pg-lo-export.md)
  que passam a conexão como o último argumento não são mais suportadas. A conexão deve ser
  passada como primeiro argumento.
- [pg\_fetch\_all()](function.pg-fetch-all.md) agora retornará um array vazio em vez de **`false`** para resultado
  conjuntos com zero linha.

### Phar

Os metadados associados a um phar não serão mais serializados automaticamente, para corrigir possíveis
vulnerabilidades de segurança devido à instanciação de objetos, carregamento automático etc.

### Reflection

- As assinaturas do método

  - `ReflectionClass::newInstance($args)`
  - `ReflectionFunction::invoke($args)`
  - `ReflectionMethod::invoke($object, $args)`

  foram alterados para:

  - `ReflectionClass::newInstance(...$args)`
  - `ReflectionFunction::invoke(...$args)`
  - `ReflectionMethod::invoke($object, ...$args)`

  O código que deve ser compatível com PHP 7 e PHP 8 pode usar as seguintes
  assinaturas para serem compatíveis com ambas as versões:

  - `ReflectionClass::newInstance($arg = null, ...$args)`
  - `ReflectionFunction::invoke($arg = null, ...$args)`
  - `ReflectionMethod::invoke($object, $arg = null, ...$args)`
- O método [ReflectionType::\_\_toString()](reflectiontype.tostring.md) agora retornará uma completa representação
  de depuração do tipo, e não está mais descontinuada. Em particular, o resultado incluirá um
  indicador de nulidade para tipos anuláveis. O formato do valor de retorno não é estável e pode
  mudar entre as versões do PHP.
- Métodos export() de reflexão foram removidos.
  Em vez disso, os objetos de reflexão podem ser convertidos em string.
- [ReflectionMethod::isConstructor()](reflectionmethod.isconstructor.md) e
  [ReflectionMethod::isDestructor()](reflectionmethod.isdestructor.md) agora também retorna **`true`** por
  [\_\_construct()](language.oop5.decon.md#object.construct) e
  [\_\_destruct()](language.oop5.decon.md#object.destruct) métodos de interfaces.
  Anteriormente, isso só seria verdade para métodos de classes e traits.
- O método **ReflectionType::isBuiltin()** foi movido para
  [ReflectionNamedType](class.reflectionnamedtype.md). [ReflectionUnionType](class.reflectionuniontype.md) não
  possui esse método.

### Sockets

- As constantes descontinuadas **`AI_IDN_ALLOW_UNASSIGNED`** e
  **`AI_IDN_USE_STD3_ASCII_RULES`** `flags` para
  [socket\_addrinfo\_lookup()](function.socket-addrinfo-lookup.md) foram removidas.

### Biblioteca PHP padrão (SPL)

- [SplFileObject::fgetss()](splfileobject.fgetss.md) foi removido.
- [SplFileObject::seek()](splfileobject.seek.md) agora sempre posiciona no começo da linha.
  Anteriormente, posições `>=1` resultavam no começo da linha seguinte.
- [SplHeap::compare()](splheap.compare.md) agora especifica uma assinatura de método. Herdando classes,
  implementar este método agora terá que usar uma assinatura de método compatível.
- [SplDoublyLinkedList::push()](spldoublylinkedlist.push.md),
  [SplDoublyLinkedList::unshift()](spldoublylinkedlist.unshift.md) e
  [SplQueue::enqueue()](splqueue.enqueue.md) agora retornam [void](language.types.void.md) no lugar de **`true`**.
- [spl\_autoload\_register()](function.spl-autoload-register.md) agora sempre lançará um
  [TypeError](class.typeerror.md) em argumentos inválidos, portanto, o segundo argumento
  `do_throw` é ignorado e um aviso será emitido se for definido como **`false`**.
- [SplFixedArray](class.splfixedarray.md) agora é um [IteratorAggregate](class.iteratoraggregate.md)
  e não um [Iterator](class.iterator.md).
  [SplFixedArray::rewind()](splfixedarray.rewind.md), [SplFixedArray::current()](splfixedarray.current.md),
  [SplFixedArray::key()](splfixedarray.key.md), [SplFixedArray::next()](splfixedarray.next.md) e
  [SplFixedArray::valid()](splfixedarray.valid.md) foram removidos. Em seu lugar,
  [SplFixedArray::getIterator()](splfixedarray.getiterator.md) foi adicionado. Qualquer código que usa explicitamente
  iteração sobre SplFixedArray agora deve obter um
  [Iterator](class.iterator.md) até
  [SplFixedArray::getIterator()](splfixedarray.getiterator.md). Isso significa que
  [SplFixedArray](class.splfixedarray.md) agora é seguro para uso em loops aninhados.

### Biblioteca padrão

- [assert()](function.assert.md) não avaliará mais argumentos de string, em vez disso, eles serão
  tratados como qualquer outro argumento. `assert($a == $b)` deve ser usado em vez de
  `assert('$a == $b')`. O [assert.quiet\_eval](info.configuration.md#ini.assert.quiet-eval) diretiva ini e
  as constantes **`ASSERT_QUIET_EVAL`** também foram removidas, pois não seriam mais
  ter qualquer efeito.
- [parse\_str()](function.parse-str.md) não pode mais ser usado sem especificar um array de resultados.
- O filtro [string.strip\_tags](filters.string.md#filters.string.strip_tags) foi removido.
- O argumento `needle` de [strpos()](function.strpos.md),
  [strrpos()](function.strrpos.md), [stripos()](function.stripos.md), [strripos()](function.strripos.md),
  [strstr()](function.strstr.md), [strchr()](function.strchr.md), [strrchr()](function.strrchr.md) e
  [stristr()](function.stristr.md) agora sempre será interpretado como uma string. Anteriormente agulhas não-string
  foram interpretadas como um ponto de código ASCII. Uma chamada explícita para [chr()](function.chr.md) pode
  ser usado para restaurar o comportamento anterior.
- O argumento `needle` para [strpos()](function.strpos.md),
  [strrpos()](function.strrpos.md), [stripos()](function.stripos.md), [strripos()](function.strripos.md),
  [strstr()](function.strstr.md), [stristr()](function.stristr.md) e [strrchr()](function.strrchr.md) podem
  agora estar vazios.
- O argumento `length` para [substr()](function.substr.md),
  [substr\_count()](function.substr-count.md), [substr\_compare()](function.substr-compare.md) e
  [iconv\_substr()](function.iconv-substr.md) agora pode ser **`null`**. **`null`** os valores se comportarão como se não houvesse
  argumento de comprimento fornecido e, portanto, retornará o restante da string em vez de uma string
  vazia.
- O argumento `length` para [array\_splice()](function.array-splice.md) agora pode ser
  **`null`**. **`null`** os valores se comportarão de forma idêntica à omissão do argumento, removendo assim tudo
  do `offset` até o final do array.
- O argumento `args` de [vsprintf()](function.vsprintf.md),
  [vfprintf()](function.vfprintf.md) e [vprintf()](function.vprintf.md) agora devem ser um array. Anteriormente
  qualquer tipo era aceito.
- A opção `'salt'` de [password\_hash()](function.password-hash.md) não é mais
  suportado. Se a opção `'salt'` for usada, um aviso será gerado, o
  salt é ignorado e um salt gerado é usado em seu lugar.
- A função [quotemeta()](function.quotemeta.md) agora retornará uma string vazia se uma string vazia
  foi passada. Anteriormente **`false`** era devolvido.
- As seguintes funções foram removidas.

  - [hebrevc()](function.hebrevc.md)
  - [convert\_cyr\_string()](function.convert-cyr-string.md)
  - [money\_format()](function.money-format.md)
  - [ezmlm\_hash()](function.ezmlm-hash.md)
  - [restore\_include\_path()](function.restore-include-path.md)
  - [get\_magic\_quotes\_gpc()](function.get-magic-quotes-gpc.md)
  - [get\_magic\_quotes\_runtime()](function.get-magic-quotes-runtime.md)
  - [fgetss()](function.fgetss.md)
- **`FILTER_SANITIZE_MAGIC_QUOTES`** foi removida.
- Chamar [implode()](function.implode.md) com parâmetros na ordem inversa `($pieces,
  $glue)` não é mais suportado.
- [parse\_url()](function.parse-url.md) agora distinguirá consultas e fragmentos ausentes e vazios:

  - `http://example.com/foo → query = null, fragment = null`
  - `http://example.com/foo? → query = "", fragment = null`
  - `http://example.com/foo# → query = null, fragment = ""`
  - `http://example.com/foo?# → query = "", fragment = ""`Anteriormente, todos os casos resultavam em consultas e fragmentos **`null`**.
- [var\_dump()](function.var-dump.md) e [debug\_zval\_dump()](function.debug-zval-dump.md) agora serão
  números de ponto flutuante usando [serialize\_precision](ini.core.md#ini.serialize-precision)
  em vez de [precisão](ini.core.md#ini.precision). Em uma configuração padrão, isto
  significa que os números de ponto flutuante agora são impressos com total precisão por essas funções
  depuradoras.
- Se o array retornado por [\_\_sleep()](language.oop5.magic.md#object.sleep) contiver propriedades
  inexistentes, estas agora são silenciosamente ignoradas. Anteriormente, tais propriedades teriam sido
  serializadas como se tivessem o valor **`null`**.
- A localidade padrão na inicialização agora é sempre `"C"`. Nenhuma localidade é herdada do
  ambiente por padrão. Anteriormente, **`LC_ALL`** era definida como
  `"C"`, enquanto **`LC_CTYPE`** era herdada do ambiente.
  No entanto, algumas funções não respeitavam a localidade herdada sem uma chamada
  explícita [setlocale()](function.setlocale.md). Uma chamada [setlocale()](function.setlocale.md) explícita agora é
  sempre necessária se um componente de localidade deve ser alterado do padrão.
- O fallback DES descontinuado em [crypt()](function.crypt.md) foi removido. Se um desconhecido formato salt
  for passado para [crypt()](function.crypt.md), a função falhará com `*0`
  em vez de voltar para um hash DES fraco agora.
- A especificação de rodadas fora do intervalo para SHA256/SHA512 [crypt()](function.crypt.md) agora falhará com
  `*0` em vez de fixar no limite mais próximo. Isso corresponde ao comportamento da glibc.
- O resultado das funções de classificação pode ter mudado, se o array contiver elementos que comparam como
  igual.
- Quaisquer funções que aceitam retornos de chamada que não são explicitamente especificados para aceitar parâmetros por
  referência agora avisará se um retorno de chamada com parâmetros de referência for usado. Exemplos incluem
  [array\_filter()](function.array-filter.md) e [array\_reduce()](function.array-reduce.md). Este já era o
  caso para a maioria, mas não para todas as funções anteriormente.
- O empacotador de fluxo HTTP usado por funções como [file\_get\_contents()](function.file-get-contents.md)
  agora anuncia HTTP/1.1 em vez de HTTP/1.0 por padrão. Isso não muda o comportamento do
  cliente, mas pode fazer com que os servidores respondam de forma diferente. Para manter o comportamento antigo, defina a
  opção de contexto de fluxo `'protocol_version'`, por exemplo

  ```
  <?php
  $ctx = stream_context_create(['http' => ['protocol_version' => '1.0']]);
  echo file_get_contents('http://example.org', false, $ctx);
  ?>
  ```
- Chamar [crypt()](function.crypt.md) sem um salt explícito não é mais suportado. Se você
  gostaria de produzir um hash forte com salt gerado automaticamente, use
  [password\_hash()](function.password-hash.md) em vez disso.
- [substr()](function.substr.md), [mb\_substr()](function.mb-substr.md), [iconv\_substr()](function.iconv-substr.md) e
  [grapheme\_substr()](function.grapheme-substr.md) agora fixa consistentemente os deslocamentos fora dos limites à string
  fronteira. Anteriormente, **`false`** era retornado em vez da string vazia em alguns casos.
- No Windows, as funções de execução do programa ([proc\_open()](function.proc-open.md), [exec()](function.exec.md),
  [popen()](function.popen.md) etc.) usando o shell, agora execute consistentemente **%comspec% /s
  /c "$commandline"**, que tem o mesmo efeito que executar
  **$commandline** (sem aspas adicionais).

### Sysvsem

- O parâmetro `auto_release` de [sem\_get()](function.sem-get.md) foi alterado para
  aceitar valores booleanos em vez de int.

### Tidy

- O parâmetro `use_include_path`, que não era usado internamente, foi
  removido de [tidy\_repair\_string()](tidy.repairstring.md).
- [tidy::repairString()](tidy.repairstring.md) e [tidy::repairFile()](tidy.repairfile.md) se tornaram
  métodos estáticos.

### Tokenizer

- Tokens **`T_COMMENT`** não incluirão mais uma quebra de linha à direita. Em vez disso, a quebra de linha será
  parte de um token **`T_WHITESPACE`** seguinte. Deve-se notar que
  **`T_COMMENT`** nem sempre é seguido de espaço em branco, Ele também pode ser seguido de
  **`T_CLOSE_TAG`** ou o fim do arquivo (end-of-file).
- Nomes com agora são representados usando os tokens **`T_NAME_QUALIFIED`**
  (`Foo\Bar`), **`T_NAME_FULLY_QUALIFIED`** (`\Foo\Bar`) e
  **`T_NAME_RELATIVE`** (`namespace\Foo\Bar`).
  **`T_NS_SEPARATOR`** é usado apenas para separadores de namespace independentes, e só é sintaticamente
  válido em conjuncão com declarações de uso de grupo.

### XMLReader

[XMLReader::open()](xmlreader.open.md) e [XMLReader::XML()](xmlreader.xml.md) agora são
métodos estáticos. Eles ainda podem ser chamados como métodos de instância, mas classes herdadas precisam declará-los
como estáticos se elas sobrescrevem esses métodos.

### XML-RPC

A extensão XML-RPC foi movida para PECL e não é mais parte da distribuição
PHP.

### Zip

**`ZipArchive::OPSYS_Z_CPM`** foi removida (esse nome era um erro de digitação). Em vez dela,
use **`ZipArchive::OPSYS_CPM`**.

### Zlib

- [gzgetss()](function.gzgetss.md) foi removida.
- [zlib.output\_compression](zlib.configuration.md#ini.zlib.output-compression) não é mais
  desabilitado automaticamente para o `Content-Type: image/*`.

### Pacotes de teste para PHP no Windows

O executor de testes foi renomeado de run-test.php para
run-tests.php, para coincidir com seu nome em php-src.

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
