# Mudanças incompatíveis com versões anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration70.incompatible.php

---

## Mudanças incompatíveis com versões anteriores

### Modificações na manipulação de erros e exceções

Muitos erros fatais e recuperáveis foram convertidos para exceções no
PHP 7. Estas exceções herdam a classe [Error](class.error.md),
que implementa a interface [Throwable](class.throwable.md)
(a interface base da qual todas as exceções herdam).

Isso significa que manipuladores de erros podem não ser ativados porque
exceções estão sendo disparadas em seu lugar (causando novos erros fatais por
exceções [Error](class.error.md) não capturadas)

Uma descrição completa de como tratar erros no PHP 7 pode ser encontrada
na página de erros do PHP 7. Este
guia de migração irá enumerar apenas as mudanças compatíveis com versões
anteriores.

#### [set\_exception\_handler()](function.set-exception-handler.md) não têm mais garantias de receber um objeto do tipo [Exception](class.exception.md).

Códigos que implementam um manipulador de exceção registrado com
[set\_exception\_handler()](function.set-exception-handler.md) usando a declaração de tipo
[Exception](class.exception.md) causará um erro fatal quando um objeto
[Error](class.error.md) for lançado.

Se o manipulador precisa funcionar com PHP 5 e 7, a declaração de
tipo do manipulador deve ser removida, enquanto que o código que está sendo migrado
para funcionar exclusivamente no PHP 7 pode simplesmente substituir a declaração de tipo
[Exception](class.exception.md) por
[Throwable](class.throwable.md).

```
<?php
// Código da era PHP 5 que não irá funcionar.
function handler(Exception $e) { /* ... */ }
set_exception_handler('handler');

// Compatível com PHP 5 e 7.
function handler($e) { /* ... */ }

// Somente PHP 7.
function handler(Throwable $e) { /* ... */ }
?>
```

#### Construtores internos sempre lançarão exceções em caso de falha

Anteriormente, algumas classes internas retornavam **`null`** ou um objeto inútil
quando o construtor falhava. Todas as classes internas agora lançam
[Exception](class.exception.md) neste caso, da mesma forma que
as classes de usuário já faziam.

#### Erros de Parse lançam exceções [ParseError](class.parseerror.md)

Erros de Parser agora lançam um objeto [ParseError](class.parseerror.md). Manipular
erros da função [eval()](function.eval.md) devem incluir um bloco `catch`
que possa manipular este erro.

#### Mudanças na severidade de notificações E\_STRICT

Todas as notificações **`E_STRICT`** foram reclassificadas para
outros níveis. A constante **`E_STRICT`** foi mantida, então chamar
`error_reporting(E_ALL|E_STRICT)` não causará um erro.

**Mudanças na severidade de notificações **`E_STRICT`****

| Situação | Novo nível/Comportamento |
| --- | --- |
| Utilizar um recurso como índice | **`E_NOTICE`** |
| Métodos estáticos abstratos | Notificação removida, não dispara erro |
| "Redefinindo" um construtor | Notificação removida, não dispara erro |
| Assinatura incompatível durante a herança | **`E_WARNING`** |
| Mesmas propriedades(compatíveis) em duas traits utilizadas | Notificação removida, não dispara erro |
| Acessando propriedades estáticas de forma não estática | **`E_NOTICE`** |
| Somente variáveis devem ser ser atribuídas por referência | **`E_NOTICE`** |
| Somente variáveis devem ser passadas por referência | **`E_NOTICE`** |
| Chamando métodos não estáticos de forma estática | **`E_DEPRECATED`** |

### Mudanças na manipulação de variáveis

O PHP 7 utiliza uma sintaxe abstrata de árvore para analisar os arquivos fonte. Isso
permitiu diversas melhorias para a linguagem que eram impossíveis
devido a limitações no analisador utilizado em versões anteriores do
PHP, porém resultou na remoção de alguns casos especiais por razões de consistência,
que resulta em quebras de compatibilidades com versões anteriores. Esses casos
são detalhados nesta seção.

#### Mudanças na manipulação indireta de variáveis, propriedades e métodos

Acessar indiretamente variáveis, propriedades, e métodos, agora serão
avaliados estritamente da esquerda para a direita, o oposto dos casos especiais
em versões anteriores. A tabela a seguir mostra como a ordem de avaliação
mudou.

**Nova e antiga avaliação de expressões indiretas**

| Expressão | Interpretação no PHP 5 | Interpretação no PHP 7 |
| --- | --- | --- |
| `$$foo['bar']['baz']` | `${$foo['bar']['baz']}` | `($$foo)['bar']['baz']` |
| `$foo->$bar['baz']` | `$foo->{$bar['baz']}` | `($foo->$bar)['baz']` |
| `$foo->$bar['baz']()` | `$foo->{$bar['baz']}()` | `($foo->$bar)['baz']()` |
| `Foo::$bar['baz']()` | `Foo::{$bar['baz']}()` | `(Foo::$bar)['baz']()` |

Códigos que usam a ordem de avaliação da direita para esquerda devem ser reescritos para
o uso explícito da ordem de avaliação com chaves (veja a coluna do
meio). Isso fará com que o código seja compatível com versões posteriores
ao PHP 7.x e compatível com o PHP 5.x.

Isso também afeta a palavra chave [`global`](language.variables.scope.md#language.variables.scope.global). A sintaxe com chaves pode ser
usada para emular o comportamento anterior se necessário:

```
<?php
function f() {
    // Válido apenas no PHP 5.
    global $$foo->bar;

    // Válido no PHP 5 e 7.
    global ${$foo->bar};
}
?>
```

#### Mudanças na manipulação com a função [list()](function.list.md)

##### A função [list()](function.list.md) não faz mais atribuições em ordem reversa

A função [list()](function.list.md) agora irá atribuir valores as variáveis na
ordem em que foram definidas, em vez de ordem reversa. De modo geral, isso só
afeta casos onde a função [list()](function.list.md) é utilizada em
conjunção com o operador de array `[]`, como mostrado a seguir:

```
<?php
list($a[], $a[], $a[]) = [1, 2, 3];
var_dump($a);
?>
```

Saída do exemplo acima no PHP 5:

```
array(3) {
  [0]=>
  int(3)
  [1]=>
  int(2)
  [2]=>
  int(1)
}
```

Saída do exemplo acima no PHP 7:

```
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
```

De modo geral, é recomendado não confiar na ordem em que as atribuições com
que a função [list()](function.list.md) ocorrem, como sua implementação
detalha, isso pode mudar novamente no futuro.

##### Atribuições de [list()](function.list.md) vazias foram removidas

Chamadas a função [list()](function.list.md) não podem mais ser vazias. O que é visto
a seguir não é mais permitido:

```
<?php
list() = $a;
list(,,) = $a;
list($x, list(), $y) = $a;
?>
```

##### A função [list()](function.list.md) não podem desempacotar [string](language.types.string.md)s

A função [list()](function.list.md) não podem mais desempacotar variáveis do
tipo [string](language.types.string.md). Em vez disso, a função [str\_split()](function.str-split.md) deve ser usada.

#### A ordenação de arrays quando elementos são criados durante atribuições por referência mudou

A ordem dos elementos no array foi modificada quando estes elementos
foram automaticamente criados por referência em uma atribuição por referência.
Por exemplo:

```
<?php
$array = [];
$array["a"] =& $array["b"];
$array["b"] = 1;
var_dump($array);
?>
```

Saída do exemplo acima no PHP 5:

```
array(2) {
  ["b"]=>
  &int(1)
  ["a"]=>
  &int(1)
}
```

Saída do exemplo acima no PHP 7:

```
array(2) {
  ["a"]=>
  &int(1)
  ["b"]=>
  &int(1)
}
```

#### Parênteses em torno de parâmetros de função não afetam mais seu comportamento

No PHP 5, usar parênteses redundantes em torno de parâmetros de uma função
podem disparar avisos de quebra de padrões quando os parâmetros da função
fossem passados por referência. Agora, o aviso sempre será emitido.

```
<?php
function getArray() {
    return [1, 2, 3];
}

function squareArray(array &$a) {
    foreach ($a as &$v) {
        $v **= 2;
    }
}

// Generates a warning in PHP 7.
squareArray((getArray()));
?>
```

O exemplo acima produzirá:

```
Notice: Only variables should be passed by reference in /tmp/test.php on line 13
```

### Mudanças no [`foreach`](control-structures.foreach.md)

Pequenas mudanças foram feitas no modo como a estrutura de controle [`foreach`](control-structures.foreach.md)
se comporta, principalmente na manipulação do ponteiro interno do array e
modificações no array sendo iterado.

#### [`foreach`](control-structures.foreach.md) não modifica mais o ponteiro interno do array

Antes do PHP 7, o ponteiro interno do array era modificado enquanto o array
era iterado usando o [`foreach`](control-structures.foreach.md). Este não é mais o caso, como mostrado
nos exemplos a seguir:

```
<?php
$array = [0, 1, 2];
foreach ($array as &$val) {
    var_dump(current($array));
}
?>
```

Saída do exemplo acima no PHP 5:

```
int(1)
int(2)
bool(false)
```

Saída do exemplo acima no PHP 7:

```
int(0)
int(0)
int(0)
```

#### [`foreach`](control-structures.foreach.md) por valor opera em uma cópia do array

Quando usado no modo padrão, por valor, o [`foreach`](control-structures.foreach.md) vai operar em uma
cópia do array sendo iterado, ao invés do próprio array. Isso significa
que mudanças feitas durante a iteração do array, não afetarão os valores
iterados.

#### Melhora no comportamento da iteração por referência com [`foreach`](control-structures.foreach.md)

Quanto iterado por referência, o [`foreach`](control-structures.foreach.md) fará um melhor trabalho de
controlar as alterações feitas ao array durante a iteração. Por exemplo,
inclusões ao array enquanto iterado, agora resultam na inclusão de
valores enquanto itera, como a seguir:

```
<?php
$array = [0];
foreach ($array as &$val) {
    var_dump($val);
    $array[1] = 1;
}
?>
```

Saída do exemplo acima no PHP 5:

```
int(0)
```

Saída do exemplo acima no PHP 7:

```
int(0)
int(1)
```

#### Iteração de objetos não [Traversable](class.traversable.md)

Iterar objetos não [Traversable](class.traversable.md) agora
têm o mesmo comportamento que iterar arrays por referência. Isso
resulta na
[melhora do comportamento quando houver modificações no array durante a iteração](migration70.incompatible.md#migration70.incompatible.foreach.by-ref)
também aplicado quando propriedades são adicionadas ou removidas do
objeto.

### Mudança na manipulação do [int](language.types.integer.md)

#### Octais literais inválidos

Antes, octais literais que continham números inválidos, eram silenciosamente
truncados (`0128` se tornaria `012`).
Agora, um octal literal inválido causará um erro de parse.

#### Deslocamento de bits negativos

Deslocamento de bits por números negativos agora lançarão uma exceção
[ArithmeticError](class.arithmeticerror.md):

```
<?php
var_dump(1 >> -1);
?>
```

Saída do exemplo acima no PHP 5:

```
int(0)
```

Saída do exemplo acima no PHP 7:

```
Fatal error: Uncaught ArithmeticError: Bit shift by negative number in /tmp/test.php:2
Stack trace:
#0 {main}
  thrown in /tmp/test.php on line 2
```

#### Deslocamentos de bits fora do limite

Deslocamentos de bits (em ambas direções), além do tamanho de bits de um
[int](language.types.integer.md) sempre resultará em 0. Antes, o comportamento
do deslocamento dependia da arquitetura.

#### Mudanças na Divisão por Zero

Antes, quando 0 era usado como divisor tanto para a operador de divisão (/) quanto
para o módulo, um E\_WARNING era emitido e
**`false`** era retornado. Agora, o operador de divisão
retornará um float +INF, -INF ou NAN, conforme a especificação IEEE 754. O E\_WARNING do operador módulo
foi removido e irá lançar uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md).

```
<?php
var_dump(3/0);
var_dump(0/0);
var_dump(0%0);
?>
```

Saída do exemplo acima no PHP 5:

```
Warning: Division by zero in %s on line %d
bool(false)

Warning: Division by zero in %s on line %d
bool(false)

Warning: Division by zero in %s on line %d
bool(false)
```

Saída do exemplo acima no PHP 7:

```
Warning: Division by zero in %s on line %d
float(INF)

Warning: Division by zero in %s on line %d
float(NAN)

PHP Fatal error:  Uncaught DivisionByZeroError: Modulo by zero in %s line %d
```

### Mudanças na manipulação de [string](language.types.string.md)s

#### Strings hexadecimais não são mais consideradas numéricas

Strings contendo números hexadecimais não são mais consideradas
numéricas. Por exemplo:

```
<?php
var_dump("0x123" == "291");
var_dump(is_numeric("0x123"));
var_dump("0xe" + "0x1");
var_dump(substr("foo", "0x1"));
?>
```

Saída do exemplo acima no PHP 5:

```
bool(true)
bool(true)
int(15)
string(2) "oo"
```

Saída do exemplo acima no PHP 7:

```
bool(false)
bool(false)
int(0)

Notice: A non well formed numeric value encountered in /tmp/test.php on line 5
string(3) "foo"
```

[filter\_var()](function.filter-var.md) pode ser usado se uma
[string](language.types.string.md) contém um número hexadecimal, e também para converter uma
string deste tipo para um [int](language.types.integer.md):

```
<?php
$str = "0xffff";
$int = filter_var($str, FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_HEX);
if (false === $int) {
    throw new Exception("Inteiro Inválido!");
}
var_dump($int); // int(65535)
?>
```

#### `\u{` pode causar erros

Por conta da adição da nova
[sintaxe de escape de códigos em Unicode](migration70.new-features.md#migration70.new-features.unicode-codepoint-escape-syntax),
strings contendo um `\u{` literal seguido de uma sequência
inválida causará um erro fatal. Para evitar isso,
você deve escapar a barra invertida.

### Funções removidas

#### **call\_user\_method()** e **call\_user\_method\_array()**

Estas funções foram descontinuadas no PHP 4.1.0 em favor de
[call\_user\_func()](function.call-user-func.md) e
[call\_user\_func\_array()](function.call-user-func-array.md). Você também pode considerar
o uso de
[funções variáveis](functions.variable-functions.md)
e/ou o operador
[`...`](functions.arguments.md#functions.variable-arg-list).

#### Todas as funções ereg\*

Todas as funções `ereg` foram removidas.
[PCRE](book.pcre.md) é uma alternativa recomendada.

#### Sinônimos do [mcrypt](book.mcrypt.md)

A função descontinuada **mcrypt\_generic\_end()** foi
removida em favor de [mcrypt\_generic\_deinit()](function.mcrypt-generic-deinit.md).

Além disso, as funções descontinuadas **mcrypt\_ecb()**,
**mcrypt\_cbc()**, **mcrypt\_cfb()** e
**mcrypt\_ofb()** foram removidas em favor do
uso da função [mcrypt\_decrypt()](function.mcrypt-decrypt.md) com a constante
**`MCRYPT_MODE_*`** apropriada.

#### Todas as funções ext/mysql

Todas as funções [ext/mysql](book.mysql.md) foram removidas. Para
mais detalhes sobre a escolha de uma API MySQL diferente, veja a seção
[Escolhendo uma API MySQL](mysqlinfo.api.choosing.md).

#### Todas as funções ext/mssql

Todas as funções `ext/mssql` foram removidas.

- [PDO\_SQLSRV](ref.pdo-sqlsrv.md)
- [PDO\_ODBC](ref.pdo-odbc.md)
- [SQLSRV](book.sqlsrv.md)
- [API ODBC Unificada](book.uodbc.md)

#### Sinônimos de [intl](book.intl.md)

Os sinônimos descontinuados **datefmt\_set\_timezone\_id()** e
**IntlDateFormatter::setTimeZoneID()** foram
removidos em favor de [datefmt\_set\_timezone()](intldateformatter.settimezone.md) e
[IntlDateFormatter::setTimeZone()](intldateformatter.settimezone.md), respectivamente.

#### **set\_magic\_quotes\_runtime()**

**set\_magic\_quotes\_runtime()**, juntamente com seu sinônimo
**magic\_quotes\_runtime()**, foram removidos. Eles foram
descontinuados no PHP 5.3.0 e se tornaram efetivamente não funcionais com
a remoção das magic quotes no PHP 5.4.0.

#### **set\_socket\_blocking()**

O sinônimo descontinuado **set\_socket\_blocking()** foi
removido em favor de [stream\_set\_blocking()](function.stream-set-blocking.md).

#### [dl()](function.dl.md) no PHP-FPM

[dl()](function.dl.md) não pode mais ser utilizado no PHP-FPM. Ela permanece
funcional na interface CLI e SAPIs embarcadas.

#### Funções [GD](book.image.md) Type1

O suporte a fontes PostScript Type1 foi removido da extensão GD,
resultando na remoção das seguintes funções:

- **imagepsbbox()**
- **imagepsencodefont()**
- **imagepsextendfont()**
- **imagepsfreefont()**
- **imagepsloadfont()**
- **imagepsslantfont()**
- **imagepstext()**

O uso de fontes TruType e suas funções associadas é recomendado.

### Diretivas INI removidas

#### Recursos removidos

As diretivas INI a seguir foram removidas, assim como os como seus recursos
associados:

- `always_populate_raw_post_data`
- `asp_tags`

#### `xsl.security_prefs`

A diretiva `xsl.security_prefs` foi removida.
Em substituição, o método [XsltProcessor::setSecurityPrefs()](xsltprocessor.setsecurityprefs.md)
deve ser chamado para controlar as preferências de segurança
por processo base.

### Outras mudanças incompatíveis com versões anteriores

#### Novos objetos não podem ser atribuídos por referência

O resultado da declaração [`new`](language.oop5.basic.md#language.oop5.basic.new) não pode mais ser atribuído a uma variável
por referência:

```
<?php
class C {}
$c =& new C;
?>
```

Saída do exemplo acima no PHP 5:

```
Deprecated: Assigning the return value of new by reference is deprecated in /tmp/test.php on line 3
```

Saída do exemplo acima no PHP 7:

```
Parse error: syntax error, unexpected 'new' (T_NEW) in /tmp/test.php on line 3
```

#### Nomes inválidos de classes, interfaces e traits

Os nomes a seguir não podem ser utilizados como nome de classes, interfaces ou traits:

- [bool](language.types.boolean.md)
- [int](language.types.integer.md)
- [float](language.types.float.md)
- [string](language.types.string.md)
- **`null`**
- **`true`**
- **`false`**

Além disso, os seguintes nomes não devem ser usados. Embora eles não geram
um erro no PHP 7.0, eles são reservados para uso futuro e devem ser
considerados descontinuados.

- [resource](language.types.resource.md)
- [object](language.types.object.md)
- [mixed](language.types.mixed.md)
- numeric

#### Tags ASP e script removidas

O suporte ao uso das tags ASP e script para delimitar o código PHP foi removido.
As tags afetadas são:

**Tags ASP e script removidas**

| Tag de abertura | Tag de fechamento |
| --- | --- |
| `<%` | `%>` |
| `<%=` | `%>` |
| `<script language="php">` | `</script>` |

#### Chamadas de contextos incompatíveis foram removidas

[Anteriormente descontinuadas no PHP 5.6](migration56.deprecated.md#migration56.deprecated.incompatible-context),
chamadas estáticas feitas a métodos não-estáticos com um contexto incompatível agora
resultarão no método chamado tendo uma variável
`$this` indefinida e um aviso de descontinuação será emitido.

```
<?php
class A {
    public function test() { var_dump($this); }
}

// Nota: NÃO estende A
class B {
    public function callNonStaticMethodOfA() { A::test(); }
}

(new B)->callNonStaticMethodOfA();
?>
```

Saída do exemplo acima no PHP 5.6:

```
Deprecated: Non-static method A::test() should not be called statically, assuming $this from incompatible context in /tmp/test.php on line 8
object(B)#1 (0) {
}
```

Saída do exemplo acima no PHP 7:

```
Deprecated: Non-static method A::test() should not be called statically in /tmp/test.php on line 8

Notice: Undefined variable: this in /tmp/test.php on line 3
NULL
```

#### [`yield`](language.generators.syntax.md#control-structures.yield) agora é um operador associativo à direita

O construtor [`yield`](language.generators.syntax.md#control-structures.yield) não requer mais o uso de parênteses e foi alterado
para um operador associativo à direita com precedência entre
`print` e `=>`. Isso pode resultar em um
comportamento alterado:

```
<?php
echo yield -1;
// Era interpretado como
echo (yield) - 1;
// E agora é interpretado como
echo yield (-1);

yield $foo or die;
// Era interpretado como
yield ($foo or die);
// E agora é interpretado como
(yield $foo) or die;
?>
```

Parênteses podem ser utilizados para remover a ambiguidade nestes casos.

#### Funções não podem ter vários parâmetros com o mesmo nome

Não é mais possível definir dois ou mais parâmetros em uma função com o
mesmo nome. Por exemplo, a função a seguir vai disparar um
**`E_COMPILE_ERROR`**:

```
<?php
function foo($a, $b, $unused, $unused) {
    //
}
?>
```

#### Funções inspecionando argumentos informam o valor *atual* do parâmetro

[func\_get\_arg()](function.func-get-arg.md), [func\_get\_args()](function.func-get-args.md),
[debug\_backtrace()](function.debug-backtrace.md) e backtraces de exceção não
informam mais o valor original que foi passado para um parâmetro, mas ao invés disso, irão
informar o valor atual (que pode ter sido modificado).

```
<?php
function foo($x) {
    $x++;
    var_dump(func_get_arg(0));
}
foo(1);?>
```

Saída do exemplo acima no PHP 5:

```
1
```

Saída do exemplo acima no PHP 7:

```
2
```

#### Declarações switch não podem ter vários blocos default

Não é mais possível definir dois ou mais blocos default em uma declaração
switch. Por exemplo, a declaração switch a seguir irá disparar um
**`E_COMPILE_ERROR`**:

```
<?php
switch (1) {
    default:
    break;
    default:
    break;
}
?>
```

#### $HTTP\_RAW\_POST\_DATA removida

A variável $HTTP\_RAW\_POST\_DATA não está mais disponível. Ao invés
disso o fluxo [`php://input`](wrappers.php.md#wrappers.php.input)
deve ser utilizado.

#### Comentários iniciados com `#` nos arquivos INI foram removidos

O suporte a comentários prefixados com `#` nos arquivos INI foi
removido. Em vez disso, o `;` (ponto-e-vírgula) deve ser usado. Esta mudança
aplica-se ao php.ini, assim como aos arquivos manipulados pelas funções
[parse\_ini\_file()](function.parse-ini-file.md) e [parse\_ini\_string()](function.parse-ini-string.md).

#### Substituição da extensão JSON por JSOND

A extensão JSON foi substituída por JSOND, causando três quebras menores de compatibilidade com versões
anteriores. Em primeiro lugar, um número não pode ser terminado em um ponto decimal (isto é,
`34.` deve ser modificado para `34.0` ou
`34`). Em segundo lugar, ao usar notação científica, o
expoente `e` não deve seguir imediatamente o ponto decimal
(isto é, `3.e3` deve ser modificado para
`3.0e3` ou `3e3`).
Finalmente, uma string vazia não é mais considerada JSON válido.

#### Função interna falha em caso de estouro

Antes, funções internas silenciosamente truncavam números produzidos por
coerções de pontos flutuantes para inteiros quando o ponto flutuante era grande demais para ser representado como um
inteiro. Agora um E\_WARNING será emitido e **`null`** será retornado.

#### Ajustes nos valores retornados pelo manipulador de sessão customizado

Quaisquer funções de predicado implementadas por manipuladores de sessões customizadas que retornem
**`false`** ou `-1` resultarão em erros fatais. Se qualquer valor retornado
destas funções não é um booleano, `-1` ou
`0`, então ela irá falhar e um E\_WARNING será
emitido.

#### Ordenações de elementos iguais

O algoritmo interno de ordenação foi melhorado, o que pode resultar em
diferentes ordenações de elementos, que são comparados como iguais, do que antes.

> **Nota**:
>
> Não confie na ordem de elementos que são comparados como iguais; ela pode mudar
> a qualquer momento.

#### Instruções break e continue deslocadas

As declarações `break` e `continue` fora de um
laço ou de uma estrutura de controle `switch`, agora são detectados em
tempo de compilação em vez de tempo de execução como antes, e dispara um erro
**`E_COMPILE_ERROR`**.

#### Constante não permitida como argumento de break e continue

As instruções `break` e `continue` não mais
permitem que seus argumentos sejam uma constante, e emitem um
**`E_COMPILE_ERROR`**.

#### Mhash não é mais uma extensão

A extensão Mhash foi completamente integrada na extensão [Hash](book.hash.md). Portanto, não é mais
possível detectar o suporte à extensão Mhash com [extension\_loaded()](function.extension-loaded.md);
em vez disso use [function\_exists()](function.function-exists.md). Além disso, Mhash não é mais
informada por [get\_loaded\_extensions()](function.get-loaded-extensions.md) e recursos
relacionados.

#### declare(ticks)

A diretiva [declare(ticks)](control-structures.declare.md#control-structures.declare.ticks)
não vaza mais para diferentes unidades de compilação.

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
