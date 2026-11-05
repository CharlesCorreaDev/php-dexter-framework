# Arrays

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.array.php

---

## Arrays

Para uma lista de todas as funções de array, consulte o capítulo sobre [funções de array](ref.array.md) na documentação.

Um [array](language.types.array.md) no PHP é na verdade um mapa ordenado. Um mapa é um tipo que
relaciona *valores* a *chaves*. Este tipo
é otimizado para vários usos diferentes: ele pode ser tratado como um array,
uma lista (vetor), tabela de hashes (que é uma implementação de mapa), dicionário,
coleção, pilha, fila e provavelmente mais. Assim como existe a possibilidade dos valores do [array](language.types.array.md)
serem outros [array](language.types.array.md)s, árvores e
[array](language.types.array.md)s multidimensionais.

A explicação dessas estruturas está além do escopo deste manual, mas
pelo menos um exemplo é dado para cada uma delas. Para mais informações, busque a
considerável literatura que existe sobre esse extenso tópico.

### Sintaxe

#### Especificando com [array()](function.array.md)

Um [array](language.types.array.md) pode ser criado com o construtor de linguagem
[array()](function.array.md). Ele leva qualquer quantidade de pares separados por vírgula
`chave => valor`
como argumentos.

```
array(
    chave  => valor,
    chave2 => valor2,
    chave3 => valor3,
    ...
)
```

A vírgula após o último elemento do array é opcional e pode ser omitida. Isso geralmente é feito
para arrays em uma única linha, por exemplo, `array(1, 2)` é preferível em vez de
`array(1, 2, )`. Para arrays escritos em várias linhas, por outro lado, a vírgula à direita do último elemento é
usada frequentemente, para permitir a adição de forma simples de novos elementos ao final.

> **Nota**:
>
> Existe uma sintaxe curta que substitui
> `array()` por `[]`.

**Exemplo #1 Um array simples**

```
<?php
$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Utilizando a sintaxe curta
$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];

var_dump($array1, $array2);
?>
```

A chave pode ser um [int](language.types.integer.md)
ou uma [string](language.types.string.md). O valor pode ser
de qualquer tipo.

Adicionalmente, as seguintes coerções ocorrerão a chave:

- [string](language.types.string.md)s contendo quaisquer [int](language.types.integer.md)s válidos, que não sejam precedidos do sinal de `+`, serão convertidos para o tipo
  [int](language.types.integer.md). Por exemplo, a chave`"8"` será, na verdade,
  armazenada como `8`. Entretanto, `"08"` não
  será convertido, por não ser um inteiro decimal válido.
- [float](language.types.float.md)s também são convertidos para [int](language.types.integer.md)s, isso significa que
  a parte fracionária será removida. Por exemplo, a chave `8.7` será na verdade
  armazenada como `8`.
- [bool](language.types.boolean.md)s são convertidos para [int](language.types.integer.md)s, igualmente, por exemplo, a chave
  **`true`**, será na verdade armazenada como `1`
  e a chave **`false`** como `0`.
- [null](language.types.null.md) será convertido para uma string vazia, por exemplo, a chave
  **`null`** na verdade será armazenada como `""`.
- [array](language.types.array.md)s e [object](language.types.object.md)s *não podem* ser usados como chaves.
  Fazer isso resultará em um aviso: `Illegal offset type`.

Se vários elementos na declaração do array utilizam a mesma chave, apenas o último
será utilizado, enquanto todos os outros serão sobrescritos.

**Exemplo #2 Exemplo de conversão de tipo e sobrescrita**

```
<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
?>
```

O exemplo acima produzirá:

```
array(1) {
  [1]=>
  string(1) "d"
}
```

Como todas as chaves do exemplo acima foram convertidas para `1`, o valor será sobrescrito
a cada novo elemento e o valor final atribuído `"d"`, será o único que restará.

As chaves dos arrays no PHP podem conter, ao mesmo tempo, [int](language.types.integer.md) e [string](language.types.string.md),
porque o PHP não faz distinção entre arrays indexados e associativos.

**Exemplo #3 Misturando [int](language.types.integer.md) e [string](language.types.string.md) nas chaves**

```
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
?>
```

O exemplo acima produzirá:

```
array(4) {
  ["foo"]=>
  string(3) "bar"
  ["bar"]=>
  string(3) "foo"
  [100]=>
  int(-100)
  [-100]=>
  int(100)
}
```

A key é opcional. Se não for especificada, o PHP
utilizará o incremento da chave do tipo [int](language.types.integer.md) com maior valor utilizado.

**Exemplo #4 Arrays indexados sem chaves**

```
<?php
$array = array("foo", "bar", "hello", "world");
var_dump($array);
?>
```

O exemplo acima produzirá:

```
array(4) {
  [0]=>
  string(3) "foo"
  [1]=>
  string(3) "bar"
  [2]=>
  string(5) "hello"
  [3]=>
  string(5) "world"
}
```

É possível especificar a chave somente para alguns elementos e omití-las para outros:

**Exemplo #5 Chaves em alguns elementos**

```
<?php
$array = array(
         "a",
         "b",
    6 => "c",
         "d",
);
var_dump($array);
?>
```

O exemplo acima produzirá:

```
array(4) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "b"
  [6]=>
  string(1) "c"
  [7]=>
  string(1) "d"
}
```

Como pode ver, o último valor `"d"` foi atribuído à chave
`7`. Isso acontece porque a chave com maior inteiro antes dela
era `6`.

**Exemplo #6 Exemplo de sobrescrita e cast de tipo complexo**

Este exemplo inclui todas as variações de cast de tipo de chaves e sobrescrita
de elementos.

```
<?php
$array = array(
    1    => 'a',
    '1'  => 'b', // o valor "a" será sobrescrito por "b"
    1.5  => 'c', // o valor "b" será sobrescrito por "c"
    -1 => 'd',
    '01'  => 'e', // não é uma string de inteiro e NÃO sobrescreve a chave 1
    '1.5' => 'f', // não é uma string de inteiro e NÃO sobrescreve a chave 1
    true => 'g', // o valor "c" será sobrescrito por "g"
    false => 'h',
    '' => 'i',
    null => 'j', // o valor "i" será sobrescrito por "j"
    'k',      // o valor "k" será alocado na chave 2. Isto porque é o maior inteiro após a chave 1
    2 => 'l', // o valor "k" será sobrescrito por "l"
);

var_dump($array);
?>
```

O exemplo acima produzirá:

```
array(7) {
  [1]=>
  string(1) "g"
  [-1]=>
  string(1) "d"
  ["01"]=>
  string(1) "e"
  ["1.5"]=>
  string(1) "f"
  [0]=>
  string(1) "h"
  [""]=>
  string(1) "j"
  [2]=>
  string(1) "l"
}
```

**Exemplo #7 Exemplo de índice negativo**

Ao atribuir uma chave inteira negativa `n`, o PHP irá
atribuir `n+1` à chave seguinte.

```
<?php
$array = [];

$array[-5] = 1;
$array[] = 2;

var_dump($array);
?>
```

O exemplo acima produzirá:

```
array(2) {
  [-5]=>
  int(1)
  [-4]=>
  int(2)
}
```

**Aviso**

Antes do PHP 8.3.0, atribuir uma chave inteira negativa `n` causaria
a atribuição de `0` à chave seguinte, portando o exemplo anterior
teria este resultado:

```
array(2) {
  [-5]=>
  int(1)
  [0]=>
  int(2)
}
```

#### Acessando elementos do array com colchetes

Elementos do array podem ser acessados utilizando a sintaxe `array[chave]`.

**Exemplo #8 Acessando elementos do array**

```
<?php
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?>
```

O exemplo acima produzirá:

```
string(3) "bar"
int(24)
string(3) "foo"
```

> **Nota**:
>
> Anteriormente ao PHP 8.0.0, chaves e colchetes podiam ser utilizados
> para acessar elementos de um array (por exemplo, `$array[42]` e `$array{42}` irão
> fazer a mesma coisa que o exemplo anterior).
> O acesso por chaves foi descontinuado a partir do PHP 7.4.0 e não é mais suportado a partir do PHP 8.0.0.

**Exemplo #9 Referenciando elemento de um array**

```
<?php
function getArray() {
    return array(1, 2, 3);
}

$secondElement = getArray()[1];

var_dump($secondElement);
?>
```

> **Nota**:
>
> Tentativas de acesso a uma chave de array que não foi definida é
> o mesmo que acessar qualquer outra variável indefinida:
> uma mensagem de erro de nível **`E_WARNING`**
> (**`E_NOTICE`** anteriormente ao PHP 8.0.0) será
> emitida, e o resultado será **`null`**.

> **Nota**:
>
> Acessar um array através de uma chave que não é [string](language.types.string.md)
> retorna **`null`**. Anteriormente ao PHP 7.4.0 não era emitida uma mensagem.
> A partir do PHP 7.4.0 emite um **`E_NOTICE`**;
> e a partir do PHP 8.0.0 é emitido um **`E_WARNING`**.

#### Criando/modificando com a sintaxe de colchetes

Você pode também modificar um [array](language.types.array.md) existente explicitamente assimilando
valores a ele.

Isto é feito apenas assimilando valores para o [array](language.types.array.md) enquanto especifica a
chave em colchetes. Você pode omitir a chave, colocando um par vazio
de colchetes (`[]`).

```
$arr[chave] = valor;
$arr[] = valor;
// chave pode ser tanto um int quanto uma string
// valor pode ser qualquer valor de qualquer tipo
```

Se $arr ainda não existir ou estiver definido como **`null`** ou **`false`**, ele será criado, por isso também
é uma alternativa para criação de um [array](language.types.array.md). Entretanto, essa prática é
desencorajada por que se $arr conter
algum valor (por exemplo, uma [string](language.types.string.md) de uma variável de requisição), então este
valor permanecerá e o `[]` funcionará como
um [operador de acesso
a string](language.types.string.md#language.types.string.substr). Sempre será recomendado a inicialização de uma variável por atribuição
direta.

> **Nota**:
>
> A partir do PHP 7.1.0, aplicar um operador de índice vazio a uma string lança um erro fatal.
> Antes, a string era silenciosamente convertida em um array.

> **Nota**:
>
> A partir do PHP 8.1.0, criar um novo array a partir do valor **`false`** foi descontinuado.
> Criar um array a partir de **`null`** e valores indefinidos ainda é permitido.

Para mudar um certo valor, apenas atribua um novo valor
a um elemento especificado por sua chave. Se a intenção for
remover um par de chave/valor, é necessário aplicar a função [unset()](function.unset.md) na chave.

**Exemplo #10 Usando colchetes com arrays**

```
<?php
$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // Isto é o mesmo que $arr[13] = 56;
                // nesse ponto do script

$arr["x"] = 42; // Isto acrescenta um novo elemento
                // para o array com a chave "x"

unset($arr[5]); // Isto remove um elemento do array

var_dump($arr);

unset($arr);    // E isto apaga todo o array

var_dump($arr);
?>
```

> **Nota**:
>
> Se nenhuma chave for especificada, ela será igual ao
> maior índice inteiro existente + `1`. Se o array não tiver
> índices inteiros positivos, a chave será `0`.
> A partir do PHP 8.3.0, também pode ser um inteiro negativo.
>
> Note que a chave inteira de maior valor utilizada *não
> precisa necessariamente existir no [array](language.types.array.md)*. Ele precisa ter existido
> no [array](language.types.array.md) em algum momento desde a última
> reindexação do [array](language.types.array.md). Veja o exemplo a seguir:
>
> ```
> <?php
> // Criando um array normal
> $array = array(1, 2, 3, 4, 5);
> print_r($array);
>
> // Agora apagando todos os itens, mas deixando o array intacto:
> foreach ($array as $i => $value) {
>     unset($array[$i]);
> }
> print_r($array);
>
> // Acrescentando um item (note que a chave é 5, em vez de zero).
> $array[] = 6;
> print_r($array);
>
> // Reindexando:
> $array = array_values($array);
> $array[] = 7;
> print_r($array);
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> Array
> (
>     [0] => 1
>     [1] => 2
>     [2] => 3
>     [3] => 4
>     [4] => 5
> )
> Array
> (
> )
> Array
> (
>     [5] => 6
> )
> Array
> (
>     [0] => 6
>     [1] => 7
> )
> ```

#### Desconstruindo arrays

Arrays podem ser desconstruídos utilizando `[]` (a partir do PHP 7.1.0) ou
[list()](function.list.md). Esses
constructos podem ser utilizados para desconstruir o array em variáveis distintas.

**Exemplo #11 Desconstruindo arrays**

```
<?php
$source_array = ['foo', 'bar', 'baz'];

[$foo, $bar, $baz] = $source_array;

echo $foo, PHP_EOL;    // exibe "foo"
echo $bar, PHP_EOL;    // exibe "bar"
echo $baz, PHP_EOL;    // exibe "baz"
?>
```

A desconstrução de arrays pode ser utilizada no [`foreach`](control-structures.foreach.md) para desconstruir
um array multidimensional enquanto o percorre.

**Exemplo #12 Desconstruindo arrays em Foreach**

```
<?php
$source_array = [
    [1, 'John'],
    [2, 'Jane'],
];

foreach ($source_array as [$id, $name]) {
    echo "{$id}: '{$name}'\n";
}
?>
```

Elementos de arrays serão ignorados se a variável não for providenciada. A desconstrução
de arrays sempre inicia no índice `0`.

**Exemplo #13 Ignorando Elementos**

```
<?php
$source_array = ['foo', 'bar', 'baz'];

// Atribui o elemento de índice 2 na variável $baz
[, , $baz] = $source_array;

echo $baz;    // exibe "baz"
?>
```

A partir do PHP 7.1.0, é possível desconstruir arrays associativos. Isto
permite fácil seleção do elemento correto de uma forma indexada numericamente
dado que os índices podem ser especificados.

**Exemplo #14 Desconstruindo arrays associativos**

```
<?php
$source_array = ['foo' => 1, 'bar' => 2, 'baz' => 3];

// Atribui o elemento de índice 'baz' na variável $three
['baz' => $three] = $source_array;

echo $three, PHP_EOL;    // exibe 3

$source_array = ['foo', 'bar', 'baz'];

// Atribui o elemento de índice 2 na variável $baz
[2 => $baz] = $source_array;

echo $baz, PHP_EOL;    // exibe "baz"
?>
```

A desconstrução de arrays pode ser utilizada para trocar duas variáveis.

**Exemplo #15 Trocando duas variáveis**

```
<?php
$a = 1;
$b = 2;

[$b, $a] = [$a, $b];

echo $a, PHP_EOL;    // exibe 2
echo $b, PHP_EOL;    // exibe 1
?>
```

> **Nota**:
>
> O operador de espalhamento (`...`) não é suportado em atribuições.

> **Nota**:
>
> Tentar acessar uma chave indefinida têm o mesmo efeito de
> acessar uma variável indefinida:
> um aviso **`E_WARNING`**
> (**`E_NOTICE`** anteriormente ao PHP 8.0.0) será
> emitido, e o resultado será **`null`**.

> **Nota**:
>
> A desconstrução de um valor escalar atribui **`null`** a todas as variáveis.

### Funções úteis

Há uma série de funções úteis para trabalhar com arrays.
Veja a seção sobre [funções para arrays](ref.array.md).

> **Nota**:
>
> A função [unset()](function.unset.md) permite apagar chaves de um
> [array](language.types.array.md). Esteja avisado que o array *não* será
> reindexado. Se um comportamento como "remover e deslocar" é o desejado, o
> [array](language.types.array.md) poderá ser reindexado utilizando a
> função [array\_values()](function.array-values.md).
>
> **Exemplo #16 Eliminando elementos intermediários**
>
> ```
> <?php
> $a = array( 1 => 'um', 2 => 'dois', 3 => 'três' );
>
> /* irá produzir um array que pode ser definido como
>    $a = array( 1=>'um', 3=>'três');
>    e NÃO
>    $a = array( 1 => 'um', 2 => 'três');
> */
> unset($a[2]);
> var_dump($a);
>
> $b = array_values($a);
> // Agora $b é o  array(0 => 'um', 1 =>'três')
> var_dump($b);
> ?>
> ```

A estrutura de controle [`foreach`](control-structures.foreach.md)
existe especificamente para lidar com [array](language.types.array.md)s. Ele
provê uma maneira fácil de percorrer um [array](language.types.array.md).

### Array: o que fazer e o que não fazer

#### Porque `$foo[bar]` está errado?

Sempre utilize delimitadores em torno dos índices do array. Por exemplo,
`$foo['bar']` está correto, enquanto que
`$foo[bar]`, não está. Mas porque? É comum encontrar
essa sintaxe em scripts antigos:

```
<?php
$foo[bar] = 'inimigo';
echo $foo[bar];
// etc
?>
```

Isto está errado, mas funciona. A razão é que este código possui uma
constante indefinida (`bar`) em vez de uma [string](language.types.string.md) (`'bar'` - repare nas
aspas simples). Isto funciona, porque o PHP converte automaticamente uma
*string base* (uma [string](language.types.string.md) não delimitada que
não corresponde a nenhum símbolo conhecido) em uma [string](language.types.string.md) que contém
a [string](language.types.string.md) base. Por exemplo, se não existir uma constante definida com o
nome **`bar`**, então o PHP irá substituí-la pela
[string](language.types.string.md) `'bar'` e usá-la.

**Aviso**

O fallback que trata uma constante indefinida como uma string lança um erro
do nível **`E_NOTICE`**.
Isso foi descontinuado desde o PHP 7.2.0, e lança um erro
do nível **`E_WARNING`**.
A partir do PHP 8.0.0, esse fallback foi removido e agora lança uma
exceção [Error](class.error.md).

Isto não significa que deve-se *sempre* delimitar as chaves. Não
delimite chaves que sejam [constantes](language.constants.md) ou
[variáveis](language.variables.md), porque isso impedirá
o PHP de interpretá-las.

**Exemplo #17 Delimitando chaves**

```
<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

// Arrays simples:
$array = array(1, 2);
$count = count($array);

for ($i = 0; $i < $count; $i++) {
    echo "\nVerificando $i: \n";
    echo "Ruim: " . $array['$i'] . "\n";
    echo "Bom: " . $array[$i] . "\n";
    echo "Ruim: {$array['$i']}\n";
    echo "Bom: {$array[$i]}\n";
}
?>
```

O exemplo acima produzirá:

```
Verificando 0:
Notice: Undefined index:  $i in /path/to/script.html on line 9
Ruim:
Bom: 1
Notice: Undefined index:  $i in /path/to/script.html on line 11
Ruim:
Bom: 1

Verificando 1:
Notice: Undefined index:  $i in /path/to/script.html on line 9
Ruim:
Bom: 2
Notice: Undefined index:  $i in /path/to/script.html on line 11
Ruim:
Bom: 2
```

Mais exemplos para demonstrar esse comportamento:

**Exemplo #18 Mais exemplos**

```
<?php
// Mostrando todos os erros
error_reporting(E_ALL);

$arr = array('fruta' => 'maçã', 'legume' => 'cenoura');

// Correto
echo $arr['fruta'], PHP_EOL;  // maçã
echo $arr['legume'], PHP_EOL; // cenoura

// Errado. Isto não funciona e lança um erro PHP por causa
// de uma constante indefinida de nome 'fruta'
//
// Error: Undefined constant "fruta"
try {
    echo $arr[fruta];
} catch (Error $e) {
    echo get_class($e), ': ', $e->getMessage(), PHP_EOL;
}

// Esta instrução define uma constante para demonstrar o que acontece. O valor 'legume'
// é atribuído a uma constante denominada 'fruta'
define('fruta', 'legume');

// Observe a diferença agora
echo $arr['fruta'], PHP_EOL;  // maçã
echo $arr[fruta], PHP_EOL;    // cenoura

// O exemplo seguinte está ok, já que está dentro de uma string. Constantes não são
// observadas dentro de strings e por isso nenhum erro acontece aqui
echo "Olá $arr[fruta]", PHP_EOL;      // Olá maçã

// Com uma exceção: chaves envolvendo arrays dentro de strings
// ativam a checagem de constantes, como em
echo "Olá {$arr[fruta]}", PHP_EOL;    // Olá cenoura
echo "Olá {$arr['fruta']}", PHP_EOL;  // Olá maçã

// Concatenação é uma outra opção
echo "Olá " . $arr['fruta'], PHP_EOL; // Olá maçã
?>
```

```
<?php
// E isso não funciona, resultando em um erro de interpretação do tipo:
// Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
// Isso também se aplica ao uso de superglobais em strings
print "Olá $arr['fruta']";
print "Olá $_GET['foo']";
?>
```

Como especificado na seção sobre [sintaxe](language.types.array.md#language.types.array.syntax),
o que estiver entre os colchetes ('`[`' e
'`]`'), precisa ser uma expressão. Isso significa que códigos como
estes funcionam:

```
<?php
echo $arr[algumafuncao($bar)];
?>
```

Isto é um exemplo de utilização de um valor de retorno de função como um índice de array.
O PHP também aceita constantes:

```
<?php
$error_descriptions[E_ERROR] = "Um erro fatal ocorreu";
$error_descriptions[E_WARNING] = "O PHP emitiu um alarme";
$error_descriptions[E_NOTICE] = "Apenas um aviso informal";
?>
```

Observe que **`E_ERROR`** também é um identificador válido, assim como
`bar` no primeiro exemplo. Mas no último exemplo seria, na verdade,
o mesmo que escrever:

```
<?php
$error_descriptions[1] = "Um erro fatal ocorreu";
$error_descriptions[2] = "O PHP emitiu um alarme";
$error_descriptions[8] = "Apenas um aviso informal";
?>
```

porque **`E_ERROR`** é igual a `1`, e assim por diante.

##### Então porque isso é tão ruim?

Se em algum ponto do futuro, o time do PHP quiser acrescentar outra
constante ou palavra chave, ou você mesmo introduzir outra constante na
sua aplicação, você terá problemas. Por exemplo, já não se pode utilizar as palavras `empty` e
`default` dessa maneira, desde que elas são
[palavras reservadas especiais](reserved.md).

> **Nota**:
>
> Para reforçar, dentro de uma [string](language.types.string.md) delimitada por aspas duplas,
> é válido não englobar o índice do array com aspas simples, então `"$foo[bar]"`
> é válido. Veja os exemplos anteriores para detalhes assim como a seção sobre
> [interpretação de variáveis
> em strings](language.types.string.md#language.types.string.parsing).

### Convertendo para array

Para qualquer dos tipos: [int](language.types.integer.md), [float](language.types.float.md),
[string](language.types.string.md), [bool](language.types.boolean.md) e [resource](language.types.resource.md),
converter um valor para um [array](language.types.array.md), resultará em um array com um único
elemento com índice zero e valor escalar convertido. Em
outras palavras, `(array) $scalarValue` é exatamente o mesmo que
`array($scalarValue)`.

Se um [object](language.types.object.md) é convertido para um [array](language.types.array.md), o resultado
será um [array](language.types.array.md) em que seus elementos serão as propriedades do
[object](language.types.object.md). As chaves serão os nomes das propriedades com pequenas notáveis
exceções: propriedades inteiras serão inacessíveis;
variáveis privadas tem o nome da classe prefixando o nome da
variável; variáveis protegidas tem um '\*' prefixando o nome da variável. Esses
valores prefixados têm um byte `NUL` em cada lado.
[Propriedades tipadas](language.oop5.properties.md#language.oop5.properties.typed-properties)
não inicializadas são ignoradas.

**Exemplo #19 Convertendo para um array**

```
<?php

class A {
    private $B;
    protected $C;
    public $D;
    function __construct()
    {
        $this->{1} = null;
    }
}

var_export((array) new A());
?>
```

O exemplo acima produzirá:

```
array (
  '' . "\0" . 'A' . "\0" . 'B' => NULL,
  '' . "\0" . '*' . "\0" . 'C' => NULL,
  'D' => NULL,
  1 => NULL,
)
```

Esses `NUL` podem ocasionar comportamentos inesperados:

**Exemplo #20 Convertendo um objeto em um Array**

```
<?php

class A {
    private $A; // Transformado na chave '\0A\0A'
}

class B extends A {
    private $A; // Transformado na chave '\0B\0A'
    public $AA; // Transformado na chave 'AA'
}

var_dump((array) new B());
?>
```

Saída do exemplo acima no PHP 8.0:

```
array(3) {
  ["BA"]=>
  NULL
  ["AA"]=>
  NULL
  ["AA"]=>
  NULL
}
```

Saída do exemplo acima no PHP 8.1:

```
array(3) {
  ["AA"]=>
  NULL
  ["BA"]=>
  NULL
  ["AA"]=>
  NULL
}
```

Acima aparecem duas chaves chamadas 'AA', embora uma delas é,
na verdade, nomeada '\0A\0A'.

Converter um valor **`null`** para um [array](language.types.array.md) resultará em um
[array](language.types.array.md) vazio.

### Comparando

É possível comparar arrays utilizando a função [array\_diff()](function.array-diff.md) e
com a utilização dos
[operadores de array](language.operators.array.md).

### Expansão de arrays

Um array prefixado com `...` será expandido no local desse operador.
Somente arrays e objetos que implementem [Traversable](class.traversable.md) podem ser expandidos.
A expansão de arrays com `...` está disponível desde o PHP 7.4.0. Ele também é chamado de
operador de expansão.

É possível realizar a expansão várias vezes, e adicionar elementos antes ou depois do operador`...`:

**Exemplo #21 Expansão de arrays**

```
<?php
// Utilizando a sintaxe curta.
// Também funciona com a sintax array().
$arr1 = [1, 2, 3];
$arr2 = [...$arr1]; // [1, 2, 3]
$arr3 = [0, ...$arr1]; // [0, 1, 2, 3]
$arr4 = [...$arr1, ...$arr2, 111]; // [1, 2, 3, 1, 2, 3, 111]
$arr5 = [...$arr1, ...$arr1]; // [1, 2, 3, 1, 2, 3]

function getArr() {
  return ['a', 'b'];
}
$arr6 = [...getArr(), 'c' => 'd']; // ['a', 'b', 'c' => 'd']

var_dump($arr1, $arr2, $arr3, $arr4, $arr5, $arr6);
?>
```

Expandir um array com `...` segue a semântica da função [array\_merge()](function.array-merge.md).
Ou seja, chaves strings sobrescrevem valores antigo e chaves inteiros são renumerados:

**Exemplo #22 Expansão de arrays com chaves duplicadas**

```
<?php
// chave string
$arr1 = ["a" => 1];
$arr2 = ["a" => 2];
$arr3 = ["a" => 0, ...$arr1, ...$arr2];
var_dump($arr3); // ["a" => 2]

// chave inteira
$arr4 = [1, 2, 3];
$arr5 = [4, 5, 6];
$arr6 = [...$arr4, ...$arr5];
var_dump($arr6); // [1, 2, 3, 4, 5, 6]
// Que resulta em [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6]
// pois as chaves inteiras anteriores não são preservadas.
?>
```

> **Nota**:
>
> Chaves que não sejam inteiros ou strings lançam um [TypeError](class.typeerror.md).
> Essas chaves podem ser geradas por um objeto [Traversable](class.traversable.md).

> **Nota**:
>
> Anteriormente ao PHP 8.1, expansão de arrays com chave string não era suportado:
>
> ```
> <?php
>
> $arr1 = [1, 2, 3];
> $arr2 = ['a' => 4];
> $arr3 = [...$arr1, ...$arr2];
> // Fatal error: Uncaught Error: Cannot unpack array with string keys in example.php:5
>
> $arr4 = [1, 2, 3];
> $arr5 = [4, 5];
> $arr6 = [...$arr4, ...$arr5]; // works. [1, 2, 3, 4, 5]
> ?>
> ```

### Exemplos

O tipo array do PHP é muito versátil. Temos aqui alguns exemplos:

**Exemplo #23 Versatilidade do array**

```
<?php
// Isso:
$a = array( 'color' => 'red',
            'taste' => 'sweet',
            'shape' => 'round',
            'name'  => 'apple',
            4        // a chave será 0
          );

$b = array('a', 'b', 'c');

var_dump($a, $b);

// ...é totalmente equivalente a isso:
$a = array();
$a['color'] = 'red';
$a['taste'] = 'sweet';
$a['shape'] = 'round';
$a['name']  = 'apple';
$a[]        = 4;        // a chave será 0

$b = array();
$b[] = 'a';
$b[] = 'b';
$b[] = 'c';

// Após a execução do código acima, $ será o array
// array('color' => 'red', 'taste' => 'sweet', 'shape' => 'round',
// 'name' => 'apple', 0 => 4), e $b será o array
// array(0 => 'a', 1 => 'b', 2 => 'c'), ou simplesmente array('a', 'b', 'c').

var_dump($a, $b);
?>
```

**Exemplo #24 Utilizando array()**

```
<?php
// Array como (propriedade-)mapa
$map = array( 'versao'     => 4,
              'OS'         => 'Linux',
              'lang'       => 'inglês',
              'short_tags' => true
            );
var_dump($map);

// apenas chaves numéricas
// isto é o mesmo que array(0 => 7, 1 => 8, ...)
$array = array( 7,
                8,
                0,
                156,
                -10
              );
var_dump($array);

$switching = array(         10, // chave = 0
                    5    =>  6,
                    3    =>  7,
                    'a'  =>  4,
                            11, // chave = 6 (o índice máximo era 5)
                    '8'  =>  2, // chave = 8 (inteiro!)
                    '02' => 77, // chave = '02'
                    0    => 12  // o valor 10 será sobrescrito por 12
                  );
var_dump($switching);

// array vazio
$empty = array();
var_dump($empty);
?>
```

**Exemplo #25 Coleção**

```
<?php
$cores = array('vermelho', 'azul', 'verde', 'amarelo');

foreach ($cores as $cor) {
    echo "Você gosta de $cor?\n";
}

?>
```

O exemplo acima produzirá:

```
Você gosta de vermelho?
Você gosta de azul?
Você gosta de verde?
Você gosta de amarelo?
```

É possível alterar diretamente os valores de um [array](language.types.array.md)
passando-os como referência.

**Exemplo #26 Alterando valores em um laço**

```
<?php
$cores = array('vermelho', 'azul', 'verde', 'amarelo');

foreach ($cores as &$cor) {
    $cor = mb_strtoupper($cor);
}
unset($cor); /* garante que as próximas alterações em
$cor não modificam o último elemento do array */

print_r($cores);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => VERMELHO
    [1] => AZUL
    [2] => VERDE
    [3] => AMARELO
)
```

Este exemplo cria um array na base 1.

**Exemplo #27 Array baseado em 1**

```
<?php
$primeiroquarto = array(1 => 'Janeiro', 'Fevereiro', 'Março');
print_r($primeiroquarto);
?>
```

O exemplo acima produzirá:

```
Array
(
    [1] => Janeiro
    [2] => Fevereiro
    [3] => Março
)
```

**Exemplo #28 Preenchendo um array**

```
<?php
// preenchendo um array com todos os itens de um diretório
$handle = opendir('.');
while (false !== ($file = readdir($handle))) {
    $files[] = $file;
}
closedir($handle);

var_dump($files);
?>
```

[array](language.types.array.md)s são ordenados. A ordem pode ser modificada utilizando várias
funções de ordenação. Veja a seção de [funções de arrays](ref.array.md)
para mais informações. A função [count()](function.count.md)
pode ser utilizada para contar o número de itens em um [array](language.types.array.md).

**Exemplo #29 Ordenando arrays**

```
<?php
sort($files);
print_r($files);
?>
```

Como o valor de um [array](language.types.array.md) pode ser qualquer coisa, isso significa que também poderá ser
outro [array](language.types.array.md). Isso habilita a criação de [array](language.types.array.md)s
recursivos e multidimensionais.

**Exemplo #30 Arrays recursivos e multidimensionais**

```
<?php
$fruits = array ( "frutas"  => array ( "a" => "laranja",
                                       "b" => "banana",
                                       "c" => "maçã"
                                     ),
                  "numeros" => array ( 1,
                                       2,
                                       3,
                                       4,
                                       5,
                                       6
                                     ),
                  "buracos" => array (      "primeiro",
                                       5 => "segundo",
                                            "terceiro",
                                     )
                );
var_dump($fruits);

// Alguns exemplos de endereços dos valores do array acima
echo $fruits["buracos"][5];   // imprime "segundo"
echo $fruits["frutas"]["a"];  // imprime "laranja"
unset($fruits["buracos"][0]); // remove  "primeiro"

// Criando um novo array multidimensional
$sucos["maca"]["verde"] = "bom";
var_dump($juices);
?>
```

Atribuições de [array](language.types.array.md) sempre envolvem cópias de valores. Use o
[operador de referência](language.operators.md) para copiar um
[array](language.types.array.md) por referência.

**Exemplo #31 Copiando arrays**

```
<?php
$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4; // $arr2 é modificado,
             // $arr1 continua sendo apenas array(2, 3)

$arr3 = &$arr1;
$arr3[] = 4; // agora $arr1 e $arr3 são os mesmos

var_dump($arr1, $arr2, $arr3);
?>
```

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
