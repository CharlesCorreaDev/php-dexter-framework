# Alterações incompatíveis com versões anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration71.incompatible.php

---

## Alterações incompatíveis com versões anteriores

### Lançamento de exceção ao passar menos argumentos do que uma função espera

Anteriormente, um alerta seria emitido ao chamar funções definidas pelo usuário
com parâmetros insuficientes. Agora, este alerta foi promovido a uma exceção da
classe Error. Esta alteração aplica-se somente a funções definidas pelo usuário, e não
a funções internas. Por exemplo:

```
<?php
function test($param){}
test();
```

O exemplo acima produzirá
algo semelhante a:

```
Fatal error: Uncaught ArgumentCountError: Too few arguments to function test(), 0 passed in %s on line %d and exactly 1 expected in %s:%d
```

### Proibição de chamadas dinâmicas de funções de introspecção de escopo

Chamadas dinâmicas para certas funções estão proibidas (na forma de
`$func()` ou `array_map('extract', ...)`,
etc). Estas funções inspecionam ou modificam outro escopo, e apresentam
comportamento ambíguo e não confiável. Estas funções são as seguintes:

- [assert()](function.assert.md) - com uma string como o primeiro argumento
- [compact()](function.compact.md)
- [extract()](function.extract.md)
- [func\_get\_args()](function.func-get-args.md)
- [func\_get\_arg()](function.func-get-arg.md)
- [func\_num\_args()](function.func-num-args.md)
- [get\_defined\_vars()](function.get-defined-vars.md)
- [mb\_parse\_str()](function.mb-parse-str.md) - com um argumento
- [parse\_str()](function.parse-str.md) - com um argumento

```
<?php
(function () {
    $func = 'func_num_args';
    $func();
})();
```

O exemplo acima produzirá:

```
Warning: Cannot call func_num_args() dynamically in %s on line %d
```

### Nomes inválidos de class, interface e trait

Os nomes a seguir não podem ser usados para dar nome a classes, interfaces ou traits:

- [void](language.types.void.md)
- [iterable](language.types.iterable.md)

### Conversão de string numérica agora respeita notação científica

Operações de números inteiros e conversões de strings numéricas agora respeitam
a notação científica. Isto também inclui a operação de conversão `(int)`,
e as seguintes funções: [intval()](function.intval.md) (onde
a base é 10), [settype()](function.settype.md), [decbin()](function.decbin.md),
[decoct()](function.decoct.md) e [dechex()](function.dechex.md).

### Correções ao algoritmo da função [mt\_rand()](function.mt-rand.md)

[mt\_rand()](function.mt-rand.md) agora usa por padrão a versão fixa do
algoritmo Mersenne Twister. Se existe dependência de uma saída determinística de
[mt\_rand()](function.mt-rand.md),
**`MT_RAND_PHP`** pode ser usada como segundo parâmetro opcional
para que [mt\_srand()](function.mt-srand.md) preserve a implementação antiga
(incorreta).

### [rand()](function.rand.md) sinônimo de [mt\_rand()](function.mt-rand.md) e [srand()](function.srand.md) sinônimo de [mt\_srand()](function.mt-srand.md)

[rand()](function.rand.md) e [srand()](function.srand.md) agora são sinônimos
para [mt\_rand()](function.mt-rand.md) e [mt\_srand()](function.mt-srand.md),
respectivamente. Isto significa que a saída das funções a seguir foi
alterada: [rand()](function.rand.md), [shuffle()](function.shuffle.md),
[str\_shuffle()](function.str-shuffle.md) e [array\_rand()](function.array-rand.md).

### Não permitir o caractere de controle 'delete' ASCII em identificadores

O caractere de controle ASCII 'DEL' (`0x7F`) não pode mais
ser usado em identificadores que não estejam entre aspas.

### Alterações em `error_log` com o valor `syslog`

Se a configuração ini `error_log` for definida para
`syslog`, os níveis de erro do PHP são mapeados para os níveis
de erro dos registros do sistema. Isto traz uma diferenciação mais fina nos registros de erros
ao contrário da abordagem anterior onde todos os erros eram registrados somente com o
nível de erro de aviso.

### Destruidores não são mais chamados em objetos incompletos

Destruidores agora não são mais chamados para objetos que lançam uma exceção durante a
execução do seu construtor. Em versões anteriores, este comportamento
dependia se o objeto era referenciado fora do construtor (ex.:
por um rastreamento de exceção).

### [call\_user\_func()](function.call-user-func.md) lidando com argumentos por referência

[call\_user\_func()](function.call-user-func.md) agora sempre irá gerar um alerta
em chamadas a funções que esperam referências como argumentos. Anteriormente
isto dependia se a chamada era totalmente qualificada.

Adicionalmente, [call\_user\_func()](function.call-user-func.md) e
[call\_user\_func\_array()](function.call-user-func-array.md) não mais irão abortar a chamada à
função neste caso. O alerta de "referência esperada" será emitido, mas a chamada
irá proceder normalmente.

### O operador de índice vazio não é mais suportado para strings

Aplicar o operador de índice vazio para uma string (ex.: `$str[] = $x`)
lança um erro fatal ao invés de converter a string silenciosamente para um array.

### Atribuição via acesso ao índice de string em uma string vazia

Modificação de string por caractere em uma string vazia agora funciona como para strings
não vazias, isto é, escrever em um deslocamento fora dos limites preenche a string com espaços à esquerda,
onde tipos não inteiros são convertidos para inteiros, e apenas o primeiro caractere da
string atribuída é usado. Anteriormente, strings vazias eram silenciosamente tratadas como
um array vazio.

```
<?php
$a = '';
$a[10] = 'foo';
var_dump($a);
?>
```

Saída do exemplo acima no PHP 7.0:

```
array(1) {
  [10]=>
  string(3) "foo"
}
```

Saída do exemplo acima no PHP 7.1:

```
string(11) "          f"
```

### Diretivas ini removidas

As seguintes diretivas ini foram removidas:

- `session.entropy_file`
- `session.entropy_length`
- `session.hash_function`
- `session.hash_bits_per_character`

### Alterado o ordenamento de array quando elementos são criados automaticamente durante atribuições por referência

A ordem dos elementos em um array foi alterada quando esses elementos tiverem
sido criados automaticamente através de uma atribuição por referência.
Por exemplo:

```
<?php
$array = [];
$array["a"] =& $array["b"];
$array["b"] = 1;
var_dump($array);
?>
```

Saída do exemplo acima no PHP 7.0:

```
array(2) {
  ["a"]=>
  &int(1)
  ["b"]=>
  &int(1)
}
```

Saída do exemplo acima no PHP 7.1:

```
array(2) {
  ["b"]=>
  &int(1)
  ["a"]=>
  &int(1)
}
```

### Ordenação de elementos iguais

O algoritmo interno de ordenação foi melhorado, o que pode resultar
em uma ordem diferente de elementos, que se comparam como iguais.

> **Nota**:
>
> Não deve-se confiar na ordem dos elementos que se comparam como iguais; ela pode
> mudar a qualquer momento.

### Mensagem de erros do tipo E\_RECOVERABLE

A mensagem de erro para o tipo E\_RECOVERABLE foi alterada de "Catchable
fatal error" (erro fatal capturável) para "Recoverable fatal error" (erro fatal recuperável).

### Parâmetro $options da função unserialize()

O elemento `allowed_classes` do parâmetro $options da função
[unserialize()](function.unserialize.md) agora é estritamente tipada, isto é, se algo além
de um [array](language.types.array.md) ou um [bool](language.types.boolean.md) for fornecido,
unserialize() retorna **`false`** e emite um **`E_WARNING`**.

### Construtor DateTime incorpora microssegundos

[DateTime](class.datetime.md) e [DateTimeImmutable](class.datetimeimmutable.md)
agora incorporam adequadamente microssegundos quando construídos com o horário atual,
tanto explicitamente quanto com uma string relativa (ex.: `"first day of next
month"`). Isto significa que as comparações nativas de duas novas instâncias
criadas agora irão muito provavelmente retornar **`false`** ao invés de **`true`**:

```
<?php
new DateTime() == new DateTime();
?>
```

### Conversões de erros fatais para exceções [Error](class.error.md)

Na extensão Date, dados de serialização inválidos para as classes
[DateTime](class.datetime.md) ou [DatePeriod](class.dateperiod.md),
ou falha de inicialização de fuso horário a partir de dados serializados, agora irão lançar
uma exceção [Error](class.error.md) pelos métodos
**\_\_wakeup()** ou **\_\_set\_state()**,
ao invés de resultar em um erro fatal.

Na extensão DBA, funções de modificação de dados (como
[dba\_insert()](function.dba-insert.md)) agora irão lançar uma exceção
[Error](class.error.md) ao invés de disparar um erro fatal
capturável se a chave não contiver exatamente dois elementos.

Na extensão DOM, esquema inválido ou contextos de validação RelaxNG agora irão
lançar uma exceção [Error](class.error.md) ao invés de resultar em um
erro fatal. Da mesma forma, a tentativa de registrar uma classe de nó que não
estende a classe base apropriada, ou a tentativa de ler uma propriedade inválida
ou de escrever em um propriedade somente-leitura, irão também lançar
uma exceção [Error](class.error.md).

Na extensão IMAP, endereços de e-mail maiores que 16385 bytes irão lançar uma
exceção [Error](class.error.md) ao invés de resultar em um erro fatal.

Na extensão Intl, a falha ao chamar o construtor pai em uma classe
que estende [Collator](class.collator.md) antes de chamar os métodos da classe pai
irão lançar uma exceção [Error](class.error.md) ao invés de resultar em um erro
fatal recuperável. Além disso, clonar um objeto
[Transliterator](class.transliterator.md) agora irá lançar uma exceção
[Error](class.error.md) na falha ao clonar o transliterador
interno ao invés de resultar em um erro fatal.

Na extesão LDAP, fornecer um tipo de modificação desconhecido a
**ldap\_batch\_modify()** agora irá lançar uma exceção
[Error](class.error.md) ao invés de resultar em um erro fatal.

Na extensão mbstring, as funções [mb\_ereg()](function.mb-ereg.md) e
[mb\_eregi()](function.mb-eregi.md) agora irão lançar uma exceção
[ParseError](class.parseerror.md) se uma expressão PHP inválida for
fornecida e a opção 'e' for usada.

Na extensão Mcrypt, as funções [mcrypt\_encrypt()](function.mcrypt-encrypt.md) e
[mcrypt\_decrypt()](function.mcrypt-decrypt.md) agora irão lançar uma exceção
[Error](class.error.md) ao invés de resultar em um erro fatal
se mcrypt não puder ser inicializada.

Na extensão mysqli, a tentativa de se ler uma propriedade inválida ou de escrever
em uma propriedade somente-leitura irá agora lançar uma exceção [Error](class.error.md)
ao invés de resultar em um erro fatal.

Na extensão Reflection, falha em receber um objeto de reflexão ou
receber uma propriedade de objeto agora irá lançar uma exceção [Error](class.error.md)
ao invés de resultar em um erro fatal.

Na extensão Session, manipuladores de sessão customizados que não retornem strings
para IDs de sessão agora irão lançar uma exceção [Error](class.error.md)
ao invés de resultar em um erro fatal quando uma função que deveria gerar
um ID de sessão for chamada.

Na extensão SimpleXML, criar um atributo sem nome ou duplicado irá
agora lançar uma exceção [Error](class.error.md) ao invés de resultar
em um erro fatal.

Na extensão SPL, tentar clonar um objeto
**SplDirectory** object agora irá lançar uma exceção
[Error](class.error.md) ao invés de resultar em um erro
fatal. Da mesma forma, chamar [ArrayIterator::append()](arrayiterator.append.md) ao
iterar sobre um objeto também irá lançar uma exceção
[Error](class.error.md).

Na extensão standard, a função [assert()](function.assert.md), quando
alimentada por um argumento string como seu primeiro parâmetro, agora irá lançar
uma exceção [ParseError](class.parseerror.md) ao invés de resultar em um
erro fatal recuperável se o código PHP for inválido. Da mesma forma, chamar
[forward\_static\_call()](function.forward-static-call.md) for de um escopo de classe agora irá
lançar uma exceção [Error](class.error.md).

Na extensão Tidy, criar um [tidyNode](class.tidynode.md) manualmente
agora irá lançar uma exceção [Error](class.error.md) ao invés de
resultar em um erro fatal.

Na extensão WDDX, uma referência circular durante serialização agora irá lançar
uma exceção [Error](class.error.md) ao invés de resultar em um erro
fatal.

Na extensão XML-RPC, uma referência circular durante serialização agora irá lançar
uma instância da exceção [Error](class.error.md) ao invés de
resultar em um erro fatal.

Na extensão Zip, o método [ZipArchive::addGlob()](ziparchive.addglob.md)
agora irá lançar uma exceção [Error](class.error.md) ao invés de
resultar em um erro fatal se o suporte a glob não estiver disponível.

### Variáveis ​​vinculadas lexicamente não podem reutilizar nomes

Variáveis vinculadas a uma [função anônima](functions.anonymous.md) através do
construtor de linguagem `use` não podem usar o mesmo nome de nenhuma das variáveis
[superglobals](language.variables.predefined.md), $this, ou de qualquer parâmetro. Por
exemplo, todas estas definições de funções irão resultar em um erro fatal:

```
<?php
$f = function () use ($_SERVER) {};
$f = function () use ($this) {};
$f = function ($param) use ($param) {};
```

### Alteração no tipo do parâmetro de long2ip()

[long2ip()](function.long2ip.md) agora espera um [int](language.types.integer.md) ao invés de uma
[string](language.types.string.md).

### Codificação e decodificação JSON

A configuração ini `serialize_precision` agora controla a
precisão de serialização ao codificar valores do tipo [float](language.types.float.md).

Decodificar uma chave vazia agora resulta em um nome de propriedade vazio, ao invés de
`_empty_` como nome de propriedade.

```
<?php
var_dump(json_decode(json_encode(['' => 1])));
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#1 (1) {
  [""]=>
  int(1)
}
```

A fornecer a opção **`JSON_UNESCAPED_UNICODE`** para
[json\_encode()](function.json-encode.md), as sequências U+2028 e U+2029 agora
são escapadas.

### Alteração na semântica de parâmetros de [mb\_ereg()](function.mb-ereg.md) e [mb\_eregi()](function.mb-eregi.md)

O terceiro parâmetro das funções [mb\_ereg()](function.mb-ereg.md) e
[mb\_eregi()](function.mb-eregi.md) (`regs`) agora será
definido para um array vazio se nada tiver sido correspondido. Anteriormente, o parâmetro
não teria sido modificado.

### Fim do suporte ao fluxo sslv2

O fluxo sslv2 agora foi removido do OpenSSL.

### Proibição de "return;" para retornos tipados já em tempo de compilação

Instruções de retorno sem nenhum argumento em funções que declaram um tipo para o retorno
agora disparam um erro do tipo **`E_COMPILE_ERROR`** (a menos que o tipo do retorno
seja declarado como [void](language.types.void.md)), mesmo que a instrução de retorno nunca seja
alcançada.

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
