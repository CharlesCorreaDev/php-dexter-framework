# Alterações incompatíveis com versões anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration74.incompatible.php

---

## Alterações incompatíveis com versões anteriores

### Núcleo do PHP

#### Acesso em estilo de array em não-array

Tentar usar valores do tipo [null](language.types.null.md), [bool](language.types.boolean.md),
[int](language.types.integer.md), [float](language.types.float.md) ou [resource](language.types.resource.md) como um
array (como `$null["key"]`) agora irá gerar um aviso.

#### Função [get\_declared\_classes()](function.get-declared-classes.md)

A função [get\_declared\_classes()](function.get-declared-classes.md) não retorna mais
classes anônimas que ainda não foram instanciadas.

#### Palavra-chave `fn`

`fn` agora é uma palavra-chave reservada. Em particular,
ele não pode mais ser usado como um nome de função ou classe.
Ela ainda pode ser usado como um nome constante de método ou classe.

#### A tag `<?php` no final do arquivo

`<?php` no final do arquivo (sem seguir a nova linha)
agora será interpretado como uma tag PHP de abertura. Antes, era interpretada
como uma short open tag seguida por um literal `php` e
resultava em um erro de sintaxe (com `short_open_tag=1`)
ou era interpretada como uma string literal `<?php`
(com `short_open_tag=0`).

#### Empacotadores de Fluxo

Ao usar include/require em um fluxo,
[streamWrapper::stream\_set\_option()](streamwrapper.stream-set-option.md)
será chamado com a opção **`STREAM_OPTION_READ_BUFFER`**.
As implementações personalizadas do empacotador de fluxo podem precisar implementar
o método [streamWrapper::stream\_set\_option()](streamwrapper.stream-set-option.md)
para evitar um aviso (sempre retornando **`false`** é uma implementação suficiente).

#### Serialização

O formato `o` de serialização foi removido.
Como nunca é produzido pelo PHP, isso pode apenas interromper a desserialização de
strings criadas manualmente.

#### Constantes do algoritmo de senha

Os identificadores do algoritmo de hash de senha agora são sequências anuláveis
​​em vez de números inteiros.

- **`PASSWORD_DEFAULT`** era um int 1; agora é uma string '2y' (no PHP 7.4.0, 7.4.1 e 7.4.2 era **`null`**)
- **`PASSWORD_BCRYPT`** era um int 1; agora é uma string '2y'
- **`PASSWORD_ARGON2I`** era um int 2; agora é uma string 'argon2i'
- **`PASSWORD_ARGON2ID`** era um int 3; agora é uma string 'argon2id'

Aplicações que usam corretamente as constantes PASSWORD\_DEFAULT,
PASSWORD\_BCRYPT, PASSWORD\_ARGON2I e PASSWORD\_ARGON2ID continuarão
funcionando corretamente.

#### Função [htmlentities()](function.htmlentities.md)

[htmlentities()](function.htmlentities.md) agora emitirá um aviso
(em vez de um aviso estrito sobre os padrões) se for usado com
uma codificação para a qual apenas a substituição básica de entidade é suportada;
nesse caso, é equivalente a[htmlspecialchars()](function.htmlspecialchars.md).

#### Funções [fread()](function.fread.md) e [fwrite()](function.fwrite.md)

[fread()](function.fread.md) e [fwrite()](function.fwrite.md) agora retornarão
**`false`** se a operação falhar.
Antes uma string vazia ou 0 era retornado.
EAGAIN/EWOULDBLOCK não são considerados falhas.

Essas funções agora também emitem um aviso de falha,
como ao tentar gravar em um recurso de arquivo somente leitura.

### Funções matemáticas de precisão arbitrária BCMath

As funções BCMath agora avisam se um número não bem formado é passado, como
`"32foo"`. O argumento será interpretado como zero, como antes.

### CURL

Tentar serializar uma classe [CURLFile](class.curlfile.md) agora irá
gerar uma exceção. Antes, a exceção era lançada apenas na desserialização.

O uso de **`CURLPIPE_HTTP1`** está descontinuado, e não é mais
suportado a partir do cURL 7.62.0.

O parâmetro `$version` de [curl\_version()](function.curl-version.md)
está descontinuado. Se qualquer valor diferente do padrão **`CURLVERSION_NOW`**
for passado, um aviso será gerado e o parâmetro será ignorado.

### Data e hora

Chamar a função [var\_dump()](function.var-dump.md) ou similar em uma instância de
[DateTime](class.datetime.md) ou [DateTimeImmutable](class.datetimeimmutable.md)
não deixará mais propriedades acessíveis no objeto.

A comparação de objetos [DateInterval](class.dateinterval.md)
(usando `==`, `<`, e assim por diante) agora gera um aviso
e sempre retorna **`false`**. Antes todos os objetos [DateInterval](class.dateinterval.md)
eram considerados iguais, a menos que tivessem propriedades.

### Intl

O valor padrão do parâmetro das funções [idn\_to\_ascii()](function.idn-to-ascii.md) e
[idn\_to\_utf8()](function.idn-to-utf8.md) agora é **`INTL_IDNA_VARIANT_UTS46`**
em vez do descontinuado **`INTL_IDNA_VARIANT_2003`**.

### MySQLi

A funcionalidade do servidor incorporado foi removida. Foi quebrado desde
pelo menos o PHP 7.0.

A propriedade não documentada `mysqli::$stat` foi removida
em favor de [mysqli::stat()](mysqli.stat.md).

### OpenSSL

A função [openssl\_random\_pseudo\_bytes()](function.openssl-random-pseudo-bytes.md) agora
lançará uma exceção em situações de erro, semelhante a [random\_bytes()](function.random-bytes.md).
Em particular, um [Error](class.error.md) será lançado se o número de
bytes solicitados for menor ou igual a zero, e uma [Exception](class.exception.md)
será lançada se não for possível reunir aleatoriedade suficiente.
É garantido que o argumento de saída `$crypto_strong` será sempre
**`true`** se a função não lançar exceção, portanto, uma verificação explícita não é necessário.

### Expressões regulares (Compatíveis com Perl)

Quando o modo **`PREG_UNMATCHED_AS_NULL`** é usado,
os grupos de captura sem correspondência à direita agora também serão definidos como **`null`** (ou
`[null, -1]` se a captura deslocada estiver habilitada).
Isso significa que o tamanho de `$matches` sempre será o mesmo.

### Objetos de dados PHP

A tentativa de serializar uma instância [PDO](class.pdo.md) ou
[PDOStatement](class.pdostatement.md) agora gerará
uma [Exception](class.exception.md) em vez de uma [PDOException](class.pdoexception.md),
consistente com outras classes internas que não oferecem suporte à serialização.

### Reflection

Os objetos reflexion agora gerarão uma exceção se for feita
uma tentativa de serializá-los. A serialização de objetos reflexion nunca
foi suportada e resultou em objetos reflexions corrompidos. Foi explicitamente
proibido agora.

Os valores para as constantes das classes [ReflectionClassConstant](class.reflectionclassconstant.md),
[ReflectionMethod](class.reflectionmethod.md) e [ReflectionProperty](class.reflectionproperty.md)
mudaram.

### Biblioteca Padrão PHP (SPL)

Chamar [get\_object\_vars()](function.get-object-vars.md) em uma instância de [ArrayObject](class.arrayobject.md)
agora sempre retornará as propriedades do próprio [ArrayObject](class.arrayobject.md)
(ou de uma sub classe). Antes, ele retornava os valores do
array/object a menos que a flag **`ArrayObject::STD_PROP_LIST`**
fosse especificado.

Outras operações afetadas são:

- **ReflectionObject::getProperties()**
- [reset()](function.reset.md), [current()](function.current.md), etc.
  Use os métodos de [Iterator](class.iterator.md) em seu lugar.
- Potencialmente outros trabalhando nas propriedades do objeto como uma lista,
  por exemplo [array\_walk()](function.array-walk.md).

`(array)` casts não são afetadas. Eles continuarão
retornando o array agrupado, ou as propriedades [ArrayObject](class.arrayobject.md)
dependendo se a flag **`ArrayObject::STD_PROP_LIST`**
é usada.

[SplPriorityQueue::setExtractFlags()](splpriorityqueue.setextractflags.md) lançará uma exceção
se zero for passado. Antes, isso geraria um erro fatal recuperável
na próxima operação de extração.

[ArrayObject](class.arrayobject.md), [ArrayIterator](class.arrayiterator.md),
[SplDoublyLinkedList](class.spldoublylinkedlist.md) e [SplObjectStorage](class.splobjectstorage.md)
agora oferecem suporte ao mecanismo `__serialize()` e `__unserialize()`
além da interface [Serializable](class.serializable.md).
Isso significa que as payloads de serialização criadas em versões mais antigas do PHP ainda podem ser
desserializadas, mas as novas payloads criadas pelo PHP 7.4 não serão entendidas pelas versões mais antigas.

### Tokenizer

[token\_get\_all()](function.token-get-all.md) agora emitirá um
token **`T_BAD_CHARACTER`** para caracteres
inesperados em vez de deixar para trás buracos no fluxo de token.

### Incoming Cookies

A partir do PHP 7.4.11, os *nomes* dos cookies recebidos não
são mais decodificados em url por razões de segurança.

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
