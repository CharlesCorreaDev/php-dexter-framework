# Declarações de tipo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.declarations.php

---

## Declarações de tipo

As declarações de tipo podem ser adicionadas a argumentos de função, valores de retorno,
a partir do PHP 7.4.0, propriedades de classe e, a partir do PHP 8.3.0, constantes de classe.
Elas garantem que o valor seja do tipo especificado no momento da chamada,
caso contrário, um [TypeError](class.typeerror.md) é lançado.

Cada tipo que o PHP suporta, com exceção de
[resource](language.types.resource.md), pode ser usado dentro de uma declaração de tipo de usuário.
Esta página contém um changelog de disponibilidade dos diferentes tipos
e documentação sobre o uso deles em declarações de tipo.

> **Nota**:
>
> Quando uma classe implementa um método de interface ou reimplementa um método
> já definido por uma classe pai, ela deve ser compatível com a
> definição acima.
> Um método é compatível se seguir as
> regras de [variância](language.oop5.variance.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Suporte à constantes em classes, interfaces, traits e enums foi adicionado. |
| 8.2.0 | O suporte para tipos DNF foi adicionado. |
| 8.2.0 | O suporte para o tipo literal [true](language.types.singleton.md) foi adicionado. |
| 8.2.0 | Os tipos [null](language.types.null.md) e [false](language.types.singleton.md) agora podem ser usados de forma independente. |
| 8.1.0 | O suporte para tipos de interseção foi adicionado. |
| 8.1.0 | Retornar por referência de uma função [void](language.types.void.md) agora foi descontinuado. |
| 8.1.0 | O suporte para o tipo somente retorno [never](language.types.never.md) foi adicionado. |
| 8.0.0 | O suporte para [mixed](language.types.mixed.md) foi adicionado. |
| 8.0.0 | O suporte para o tipo de retorno apenas static foi adicionado. |
| 8.0.0 | O suporte para tipos de união foi adicionado. |
| 7.4.0 | Suporte para propriedades tipadas foi adicionado. |
| 7.2.0 | Suporte para [object](language.types.object.md) foi adicionado. |
| 7.1.0 | Suporte para [iterable](language.types.iterable.md) foi adicionado. |
| 7.1.0 | Suporte para [void](language.types.void.md) foi adicionado. |
| 7.1.0 | O suporte para tipos anuláveis foi adicionado. |

### Notas de uso em tipos atômicos

Os tipos atômicos têm um comportamento direto com algumas ressalvas menores que
são descritas nesta seção.

#### Tipos escalares

**Aviso**

Aliases de nome para tipos escalares ([bool](language.types.boolean.md), [int](language.types.integer.md),
[float](language.types.float.md), [string](language.types.string.md)) não são suportados.
Em vez disso, eles são tratados como nomes de classe ou interface.
Por exemplo, usar `boolean` como uma declaração
de tipo exigirá que o valor seja uma [`instanceof`](language.operators.type.md) da classe ou interface
`boolean`, em vez do tipo [bool](language.types.boolean.md):

```
<?php
    function test(boolean $param) {}
    test(true);
?>
```

Saída do exemplo acima no PHP 8:

```
Warning: "boolean" will be interpreted as a class name. Did you mean "bool"? Write "\boolean" to suppress this warning in /in/9YrUX on line 2

Fatal error: Uncaught TypeError: test(): Argument #1 ($param) must be of type boolean, bool given, called in - on line 3 and defined in -:2
Stack trace:
#0 -(3): test(true)
#1 {main}
  thrown in - on line 2
```

#### void

> **Nota**:
>
> Retornar por referência de uma função [void](language.types.void.md) foi descontinuado a partir do PHP 8.1.0,
> porque tal função é contraditória.
> Anteriormente, ele já emitia o seguinte
> **`E_NOTICE`** quando chamado:
> Only variable references should be returned by reference.
>
> ```
> <?php
> function &test(): void {}
> ?>
> ```

#### Tipos que podem ser chamados

Este tipo não pode ser usado como uma declaração de tipo de propriedade de classe.

> **Nota**:
>
> Não é possível especificar a assinatura da função.

#### Declarações de tipo em parâmetros de passagem por referência

Se um parâmetro de passagem por referência tiver uma declaração de tipo, o tipo da
variável é *somente* verificado na entrada da função, no início da chamada, mas não
quando a função retorna.
Isso significa que uma função pode alterar o tipo da variável
passada por referência.

**Exemplo #1 Parâmetros de passagem por referência digitados**

```
<?php
function array_baz(array &$param)
{
    $param = 1;
}
$var = [];
array_baz($var);
var_dump($var);
array_baz($var);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(1)

Fatal error: Uncaught TypeError: array_baz(): Argument #1 ($param) must be of type array, int given, called in - on line 9 and defined in -:2
Stack trace:
#0 -(9): array_baz(1)
#1 {main}
  thrown in - on line 2
```

### Notas de Uso de Tipos Compostos

As declarações de tipo composto estão sujeitas a algumas restrições e
realizarão uma verificação de redundância no tempo de compilação para evitar erros simples.

**Cuidado**

Antes do PHP 8.2.0 e da introdução dos tipos DNF,
não era possível combinar tipos de interseção com tipos de união.

#### União de tipos

**Aviso**

Não é possível combinar os dois tipos únicos [false](language.types.singleton.md)
e [true](language.types.singleton.md) juntos em um tipo de união.
Em vez disso, use [bool](language.types.boolean.md).

**Cuidado**

Antes do PHP 8.2.0, como [false](language.types.singleton.md) e [null](language.types.null.md)
não podiam ser usados como tipos autônomos, um tipo de união composto
apenas por esses tipos não era permitido. Isso inclui os seguintes tipos:
[false](language.types.singleton.md), `false|null`,
e `?false`.

##### Açúcar sintático do tipo anulável

Uma única declaração de tipo base pode ser marcada como anulável prefixando o
tipo com um ponto de interrogação (`?`).
Assim, `?T` e `T|null` são idênticos.

> **Nota**:
>
> Esta sintaxe é suportada a partir do PHP 7.1.0, e é anterior ao suporte generalizado
> de tipos de união.

> **Nota**:
>
> Também é possível obter argumentos anuláveis tornando
> **`null`** o valor padrão.
> Isso não é recomendado porque se o valor padrão for alterado em uma classe
> filha, uma violação de compatibilidade de tipo será gerada, pois o tipo
> [null](language.types.null.md) precisará ser adicionado à declaração de tipo.
> Este comportamento também foi descontinuado desde o PHP 8.4.
>
> **Exemplo #2 Maneira antiga de tornar os argumentos anuláveis**
>
> ```
> <?php
> class C {}
>
> function f(C $c = null) {
>     var_dump($c);
> }
>
> f(new C);
> f(null);
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> object(C)#1 (0) {
> }
> NULL
> ```

#### Tipos duplicados e redundantes

Para capturar bugs simples em declarações de tipo composto, tipos redundantes que
podem ser detectados sem executar o carregamento de classe resultarão em um
erro de tempo de compilação. Isso inclui:

- Cada tipo resolvido por nome pode ocorrer apenas uma vez. Tipos como
  `int|string|INT` ou
  `Countable&Traversable&COUNTABLE`
  resultam em erro.
- O uso de [mixed](language.types.mixed.md) ou [never](language.types.never.md) resulta em um erro.
- Para tipos de união:

  - Se [bool](language.types.boolean.md) for usado, [false](language.types.singleton.md) ou [true](language.types.singleton.md)
    não pode ser usado adicionalmente.
  - Se [object](language.types.object.md) for usado, os tipos de classe não podem ser usados adicionalmente.
  - Se [iterable](language.types.iterable.md) for usado, [array](language.types.array.md)
    e [Traversable](class.traversable.md) não podem ser usados adicionalmente.
- Para interseção de tipos:

  - Usar um tipo que não é um tipo de classe resulta em erro.
  - O uso de self, parent ou
    static resulta em erro.
- Para tipos DNF:

  - Se um tipo mais genérico for usado, o mais restritivo será redundante.
  - Usando dois tipos de interseção idênticos.

> **Nota**:
>
> Isso não garante que o tipo seja “mínimo”, porque isso exigiria o
> carregamento de todos os tipos de classe usados.

Por exemplo, se `A` e `B` são aliases de
classe, `A|B` continua sendo um tipo de união legal, mesmo
que possa ser reduzido a `A` ou
`B`.
Da mesma forma, se a classe `B extends A {}`, `A|B`
também é um tipo de união legal, embora pudesse ser reduzida a apenas
`A`.

```
<?php
function foo(): int|INT {} // Proibido
function foo(): bool|false {} // Proibido
function foo(): int&Traversable {} // Proibido
function foo(): self&Traversable {} // Proibido

use A as B;
function foo(): A|B {} // Não permitido ("use" faz parte da resolução de nomes)
function foo(): A&B {} // Não permitido ("use" faz parte da resolução de nomes)

class_alias('X', 'Y');
function foo(): X|Y {} // Permitido (a redundância só é conhecida em tempo de execução)
function foo(): X&Y {} // Permitido (a redundância só é conhecida em tempo de execução)
?>
```

### Examples

**Exemplo #3 Declaração de tipo de classe básica**

```
<?php
class C {}
class D extends C {}

// Isso não estende C.
class E {}

function f(C $c) {
    echo get_class($c)."\n";
}

f(new C);
f(new D);
f(new E);
?>
```

Saída do exemplo acima no PHP 8:

```
C
D

Fatal error: Uncaught TypeError: f(): Argument #1 ($c) must be of type C, E given, called in /in/gLonb on line 14 and defined in /in/gLonb:8
Stack trace:
#0 -(14): f(Object(E))
#1 {main}
  thrown in - on line 8
```

**Exemplo #4 Declaração de tipo de interface básica**

```
<?php
interface I { public function f(); }
class C implements I { public function f() {} }

// Isso não implementa I.
class E {}

function f(I $i) {
    echo get_class($i)."\n";
}

f(new C);
f(new E);
?>
```

Saída do exemplo acima no PHP 8:

```
C

Fatal error: Uncaught TypeError: f(): Argument #1 ($i) must be of type I, E given, called in - on line 13 and defined in -:8
Stack trace:
#0 -(13): f(Object(E))
#1 {main}
  thrown in - on line 8
```

**Exemplo #5 Declaração de tipo de retorno básico**

```
<?php
function sum($a, $b): float {
    return $a + $b;
}

// Observe que um float será retornado.
var_dump(sum(1, 2));
?>
```

O exemplo acima produzirá:

```
float(3)
```

**Exemplo #6 Retornando um objeto**

```
<?php
class C {}

function getC(): C {
    return new C;
}

var_dump(getC());
?>
```

O exemplo acima produzirá:

```
object(C)#1 (0) {
}
```

**Exemplo #7 Declaração de tipo de argumento anulável**

```
<?php
class C {}

function f(?C $c) {
    var_dump($c);
}

f(new C);
f(null);
?>
```

O exemplo acima produzirá:

```
object(C)#1 (0) {
}
NULL
```

**Exemplo #8 Declaração de tipo de retorno anulável**

```
<?php
function get_item(): ?string {
    if (isset($_GET['item'])) {
        return $_GET['item'];
    } else {
        return null;
    }
}
?>
```

**Exemplo #9 Declaração de tipo de propriedade**

```
<?php
class User {
    public static string $foo = 'foo';

    public int $id;
    public string $username;

    public function __construct(int $id, string $username) {
        $this->id = $id;
        $this->username = $username;
    }
}
?>
```

### Tipagem estrita

Por padrão, o PHP forçará valores do tipo errado na declaração de tipo
escalar esperada, se possível. Por exemplo, uma função que recebe
um [int](language.types.integer.md) para um parâmetro que espera uma [string](language.types.string.md)
obterá uma variável do tipo [string](language.types.string.md).

É possível ativar o modo estrito por arquivo. No modo estrito,
apenas um valor correspondente exatamente à declaração do tipo será
aceito, caso contrário, um [TypeError](class.typeerror.md) será lançado.
A única exceção a essa regra é que um valor [int](language.types.integer.md) passará por
uma declaração do tipo [float](language.types.float.md).

**Aviso**

Chamadas de função dentro de funções internas não serão afetadas pela
declaração `strict_types`.

Para habilitar o modo estrito, a [`declare`](control-structures.declare.md) é usada com a
declaração `strict_types`:

> **Nota**:
>
> A digitação estrita se aplica a chamadas de função feitas de
> *dentro* do arquivo com tipagem estrita habilitada, não para
> as funções declaradas dentro desse arquivo. Se um arquivo sem tipagem
> estrita habilitada fizer uma chamada para uma função que foi definida em um arquivo
> com tipagem estrita, a preferência do chamador (tipagem coercitiva) será
> respeitada e o valor será convertido.

> **Nota**:
>
> A tipagem estrita é definida apenas para declarações de tipo escalar.

**Exemplo #10 Tipagem estrita para valores de argumentos**

```
<?php
declare(strict_types=1);

function sum(int $a, int $b) {
    return $a + $b;
}

var_dump(sum(1, 2));
var_dump(sum(1.5, 2.5));
?>
```

Saída do exemplo acima no PHP 8:

```
int(3)

Fatal error: Uncaught TypeError: sum(): Argument #1 ($a) must be of type int, float given, called in - on line 9 and defined in -:4
Stack trace:
#0 -(9): sum(1.5, 2.5)
#1 {main}
  thrown in - on line 4
```

**Exemplo #11 Tipagem coercitiva para valores de argumento**

```
<?php
function sum(int $a, int $b) {
    return $a + $b;
}

var_dump(sum(1, 2));

// Estes serão convertidos em números inteiros: observe a saída abaixo!
var_dump(sum(1.5, 2.5));
?>
```

O exemplo acima produzirá:

```
int(3)
int(3)
```

**Exemplo #12 Tipagem estrita para valores de retorno**

```
<?php
declare(strict_types=1);

function sum($a, $b): int {
    return $a + $b;
}

var_dump(sum(1, 2));
var_dump(sum(1, 2.5));
?>
```

O exemplo acima produzirá:

```
int(3)

Fatal error: Uncaught TypeError: sum(): Return value must be of type int, float returned in -:5
Stack trace:
#0 -(9): sum(1, 2.5)
#1 {main}
  thrown in - on line 5
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
