# Novas Funcionalidades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration80.new-features.php

---

## Novas Funcionalidades

### Núcleo do PHP

#### Argumentos nomeados

O suporte para [Argumentos nomeados](functions.arguments.md#functions.named-arguments) foi adicionado.

#### Atributos

Suporte para [Atributos](language.attributes.md) foi adicionado.

#### Promoção de propriedade do construtor

Suporte para [promoção de propriedade do construtor](language.oop5.decon.md#language.oop5.decon.constructor.promotion) (declarando propriedades na assinatura do construtor)
foi adicionado.

#### União de Tipos

O suporte para [união de tipos](language.types.declarations.md#language.types.declarations.composite.union) foi adicionado.

#### Expressão Match

O suporte para [expressões `match`](control-structures.match.md) foi adicionado.

#### Operador Nullsafe

Suporte para o [nullsafe operador](language.oop5.basic.md#language.oop5.basic.nullsafe) (`?->`) foi adicionado.

#### Outros novos recursos

- A classe [WeakMap](class.weakmap.md) foi adicionada.
- A classe [ValueError](class.valueerror.md) foi adicionada.
- Qualquer número de parâmetros de função agora pode ser substituído por um argumento variádico, desde que os
  tipos sejam compatíveis. Por exemplo, o seguinte código agora é permitido:

  ```
  <?php
  class A {
       public function method(int $many, string $parameters, $here) {}
  }
  class B extends A {
       public function method(...$everything) {}
  }
  ?>
  ```
- static (como em "vinculação estática tardia") agora pode ser usado como um tipo de retorno:

  ```
  <?php
  class Test {
       public function create(): static {
            return new static();
       }
  }
  ?>
  ```
- Agora é possível buscar o nome da classe de um objeto usando
  `$object::class`. O resultado é o mesmo que `get_class($object)`.
- [`new`](language.oop5.basic.md#language.oop5.basic.new) e [`instanceof`](language.operators.type.md) agora podem ser usados com expressões arbitrárias,
  usando `new (expression)(...$args)` e `$obj instanceof (expression)`.
- Algumas correções de consistência na sintaxe da variável foram aplicadas, por exemplo, escrever
  `Foo::BAR::$baz` agora é permitido.
- Adicionada interface [Stringable](class.stringable.md), que é implementada automaticamente se
  uma classe definir um método [\_\_toString()](language.oop5.magic.md#object.tostring).
- As Traits agora podem definir métodos privados abstratos.
  Tais métodos devem ser implementados pela classe que usa o trait.
- `throw` agora pode ser usado como uma expressão.
  Isso permite usos como:

  ```
  <?php
  $fn = fn() => throw new Exception('Exceção na função de seta');
  $user = $session->user ?? throw new Exception('É necessário haver um usuário.');
  ```
- Uma vírgula final opcional agora é permitida nas listas de parâmetros.

  ```
  <?php
  function functionWithLongSignature(
      Type1 $parameter1,
      Type2 $parameter2, // <-- Esta vírgula agora é permitida.
  ) {
  }
  ```
- Agora é possível escrever `catch (Exception)` para capturar uma exceção sem armazená-la
  em uma variável.
- O suporte para tipo [mixed](language.types.mixed.md) foi adicionado.
- Os métodos privados declarados em uma classe pai não impõem mais nenhuma regra de herança nos métodos
  de uma classe filha (com exceção dos construtores privados finais).
  O exemplo a seguir ilustra quais restrições foram removidas:

  ```
  <?php
  class ParentClass {
      private function method1() {}
      private function method2() {}
      private static function method3() {}
      // Lança um aviso, pois "final" não tem mais efeito:
      private final function method4() {}
  }
  class ChildClass extends ParentClass {
      // Todos os itens a seguir agora são permitidos, mesmo que os modificadores não sejam
      // o mesmo que para os métodos privados na classe pai.
      public abstract function method1() {}
      public static function method2() {}
      public function method3() {}
      public function method4() {}
  }
  ?>
  ```
- [get\_resource\_id()](function.get-resource-id.md) foi adicionado, o que retorna o mesmo valor que
  `(int) $resource`. Ele fornece a mesma funcionalidade em uma API mais clara.
- O [InternalIterator](class.internaliterator.md) foi adicionado.

### Data e hora

- [DateTime::createFromInterface()](datetime.createfrominterface.md) e
  [DateTimeImmutable::createFromInterface()](datetimeimmutable.createfrominterface.md) foram adicionados.
- O especificador de formato DateTime `p` foi adicionado, que é o mesmo que
  `P`, mas retorna `Z` em vez de `+00:00`
  para UTC.

### DOM

[DOMParentNode](class.domparentnode.md) e [DOMChildNode](class.domchildnode.md) com
novas APIs de travessia e manipulação foram adicionadas.

### Filtro

**`FILTER_VALIDATE_BOOL`** foi adicionado como um alias para
**`FILTER_VALIDATE_BOOLEAN`**. O novo nome é preferido, pois usa o nome do
tipo canônico.

### Enchant

[enchant\_dict\_add()](function.enchant-dict-add.md), [enchant\_dict\_is\_added()](function.enchant-dict-is-added.md) e
**`LIBENCHANT_VERSION`**foram adicionados.chant

### FPM

Adicionada uma nova opção `pm.status_listen` que permite obter o status de um
terminal diferente (por exemplo, porta ou arquivo UDS), o que é útil para obter o status
quando todos os filhos estão ocupados atendendo a solicitações de execução longa.

### Hash

Os objetos [HashContext](class.hashcontext.md) agora podem ser serializados.

### Funções de Internacionalização

As constantes **`IntlDateFormatter::RELATIVE_FULL`**,
**`IntlDateFormatter::RELATIVE_LONG`**,
**`IntlDateFormatter::RELATIVE_MEDIUM`** e
**`IntlDateFormatter::RELATIVE_SHORT`**
foram adicionadas.

### LDAP

[ldap\_count\_references()](function.ldap-count-references.md) foi adicionado, o que retorna o número
de mensagens de referência em um resultado de pesquisa.

### OPcache

Se a configuração ini opcache.record\_warnings estiver
habilitada, o OPcache gravará avisos em tempo de compilação e os reproduzirá na próxima inclusão, mesmo que
seja servido do cache.

### OpenSSL

Adicionado suporte de sintaxe de mensagem criptográfica (CMS) ([» RFC 5652](https://datatracker.ietf.org/doc/html/rfc5652))
composto de funções para criptografia, descriptografia, assinatura, verificação e leitura. A API
é semelhante à API para funções PKCS #7 com a adição de novas constantes de codificação:
**`OPENSSL_ENCODING_DER`**, **`OPENSSL_ENCODING_SMIME`**
e **`OPENSSL_ENCODING_PEM`**:

- [openssl\_cms\_encrypt()](function.openssl-cms-encrypt.md) criptografa a mensagem no arquivo com os certificados e
  gera o resultado no arquivo fornecido.
- [openssl\_cms\_decrypt()](function.openssl-cms-decrypt.md) descriptografa a mensagem S/MIME no arquivo e envia
  os resultados para o arquivo fornecido.
- [openssl\_cms\_read()](function.openssl-cms-read.md) exporta o arquivo CMS para um array de
  certificados PEM.
- [openssl\_cms\_sign()](function.openssl-cms-sign.md) assina a mensagem MIME no arquivo com um certificado e
  uma chave e gera o resultado no arquivo fornecido.
- [openssl\_cms\_verify()](function.openssl-cms-verify.md) verifica se o bloco de dados está intacto, o signatário
  é quem diz ser e retorna os certificados dos signatários.

### Expressões Regulares (Compatíveis com Perl)

[preg\_last\_error\_msg()](function.preg-last-error-msg.md) foi adicionada, que retorna uma mensagem legível por humanos para o último
erro PCRE. Ela complementa [preg\_last\_error()](function.preg-last-error.md), que retorna um valor de enumeração
inteiro.

### Reflection

- Os seguintes métodos agora podem retornar informações sobre valores padrão
  de parâmetros de funções internas:

  - [ReflectionParameter::isDefaultValueAvailable()](reflectionparameter.isdefaultvalueavailable.md)
  - [ReflectionParameter::getDefaultValue()](reflectionparameter.getdefaultvalue.md)
  - [ReflectionParameter::isDefaultValueConstant()](reflectionparameter.isdefaultvalueconstant.md)
  - [ReflectionParameter::getDefaultValueConstantName()](reflectionparameter.getdefaultvalueconstantname.md)

### SQLite3

[SQLite3::setAuthorizer()](sqlite3.setauthorizer.md) e respectivas constantes de classe foram adicionados
para definir um callback userland que será usado para autorizar ou não uma ação no banco de dados.

### Biblioteca padrão

- [str\_contains()](function.str-contains.md), [str\_starts\_with()](function.str-starts-with.md) e
  [str\_ends\_with()](function.str-ends-with.md) foram adicionados, que verificam se `haystack` contém,
  começa com ou termina com `needle`, respectivamente.
- [fdiv()](function.fdiv.md) foi adicionado, que executa uma divisão de ponto flutuante sob a semântica IEEE 754.
  A divisão por zero é considerada bem definida e retornará um de `Inf`,
  `-Inf` ou `NaN`.
- [get\_debug\_type()](function.get-debug-type.md) foi adicionado, o que retorna um tipo útil para mensagens de erro. Ao contrário de
  [gettype()](function.gettype.md), ele usa nomes de tipo canônico, retorna nomes de classe para objetos e
  indica o tipo de recurso para recursos.
- [printf()](function.printf.md) e amigos agora suportam os especificadores de formato `%h` e
  `%H`. Estes são os mesmos que `%g` e
  `%G`, mas sempre use `"."` como o separador decimal, em vez
  de determiná-lo por meio da localidade **`LC_NUMERIC`**.
- [printf()](function.printf.md) e amigos agora suportam o uso de `"*"` como largura
  ou precisão, caso em que a largura/precisão é passada como um argumento para printf. Isso também permite
  usar a precisão `-1` com `%g`, `%G`,
  `%h` e `%H`. Por exemplo, o código a seguir pode ser usado para
  reproduzir a formatação de ponto flutuante padrão do PHP:

  ```
  <?php
  printf("%.*H", (int) ini_get("precision"), $float);
  printf("%.*H", (int) ini_get("serialize_precision"), $float);
  ?>
  ```
- [proc\_open()](function.proc-open.md) agora suporta descritores pseudo-terminal (PTY). O seguinte
  anexa `stdin`, `stdout` e `stderr` ao
  mesmo PTY:

  ```
  <?php
  $proc = proc_open($command, [['pty'], ['pty'], ['pty']], $pipes);
  ?>
  ```
- [proc\_open()](function.proc-open.md) agora suporta descritores de pares de sockets. O seguinte anexa
  um par de sockets distinto a `stdin`, `stdout` e
  `stderr`:

  ```
  <?php
  $proc = proc_open($command, [['socket'], ['socket'], ['socket']], $pipes);
  ?>
  ```

  Ao contrário dos pipes, os sockets não sofrem com problemas de bloqueio de E/S no Windows.
  No entanto, nem todos os programas podem funcionar corretamente com soquetes stdio.
- As funções de classificação agora são estáveis, o que significa que os elementos de comparação igual
  manterão sua ordem original.
- [array\_diff()](function.array-diff.md), [array\_intersect()](function.array-intersect.md) e suas variações agora podem
  ser usadas com um único array como argumento. Isso significa que usos como os seguintes agora são
  possíveis:

  ```
  <?php
  // OK, mesmo que $excludes esteja vazio:
  array_diff($array, ...$excludes);
  // OK, mesmo que $arrays contenha apenas um único array:
  array_intersect(...$arrays);
  ?>
  ```
- O parâmetro `flag` de [ob\_implicit\_flush()](function.ob-implicit-flush.md) foi alterado
  para aceitar um [bool](language.types.boolean.md) em vez de um [int](language.types.integer.md).

### Tokenizador

[PhpToken](class.phptoken.md) adiciona uma interface baseada em objeto ao tokenizer. Ele fornece uma
representação mais uniforme e ergonômica, além de ser mais eficiente em termos de memória e mais rápido.

### Zip

- A extensão Zip foi atualizada para a versão 1.19.1.
- Novo [ZipArchive::setMtimeName()](ziparchive.setmtimename.md) e
  [ZipArchive::setMtimeIndex()](ziparchive.setmtimeindex.md) para definir a hora de modificação de uma entrada.
- Novo [ZipArchive::registerProgressCallback()](ziparchive.registerprogresscallback.md) para fornecer atualizações durante o fechamento do arquivo.
- Novo [ZipArchive::registerCancelCallback()](ziparchive.registercancelcallback.md) para permitir o cancelamento durante o fechamento
  do arquivo.
- Novo [ZipArchive::replaceFile()](ziparchive.replacefile.md) para substituir um conteúdo de entrada.
- Novo [ZipArchive::isCompressionMethodSupported()](ziparchive.iscompressionmethoddupported.md) para verificar os recursos opcionais de
  compactação.
- Novo [ZipArchive::isEncryptionMethodSupported()](ziparchive.isencryptionmethoddupported.md) para verificar os recursos opcionais de
  criptografia.
- A propriedade ZipArchive::lastId para obter o valor do índice da
  última entrada adicionada foi adicionada.
- Os erros agora podem ser verificados após o fechamento de um arquivo usando as propriedades
  ZipArchive::status e
  ZipArchive::statusSys ou o método
  [ZipArchive::getStatusString()](ziparchive.getstatusstring.md).
- A opção `'remove_path'` de [ZipArchive::addGlob()](ziparchive.addglob.md) e
  [ZipArchive::addPattern()](ziparchive.addpattern.md) agora é tratada como um prefixo de string arbitrário (para
  consistência com a opção `'add_path'`), enquanto anteriormente era tratada como um
  nome de diretório.
- Os recursos opcionais de compactação/criptografia agora estão listados no phpinfo.

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
