# Funções anônimas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/functions.anonymous.php

---

## Funções anônimas

Funções anônimas, também conhecidas como `closures`, permitem a criação
de funções que não têm o nome especificado. Elas são mais úteis
como o valor de parâmetros do tipo [callable](language.types.callable.md),
mas podem ter vários outros usos.

Funções anônimas são implementadas utilizando a classe
[[Closure](class.closure.md)](class.closure.md)

**Exemplo #1 Exemplo de função anônima**

```
<?php
echo preg_replace_callback('~-([a-z])~', function ($match) {
    return strtoupper($match[1]);
}, 'hello-world');
// exibe helloWorld
```

Closures também podem ser utilizadas como valores de variáveis; o PHP automaticamente
converte expressões assim em instâncias da classe interna
[Closure](class.closure.md). Definindo um closure
a uma variável usa a mesma sintaxe que qualquer outra definição, incluindo
o ponto-e-vírgula:

**Exemplo #2 Exemplo de como definir uma função anônima para uma variável**

```
<?php
$greet = function($name) {
    printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');
```

Closures também podem herdar variáveis do escopo pai. Essas
variáveis precisam ser referenciadas utilizando a instrução `use`.
A partir do PHP 7.1, essas variáveis não devem incluir [superglobals](language.variables.predefined.md),
$this, ou variáveis com o mesmo nome como um parâmetro.
A declaração de tipo de retorno de uma função deve ser posicionada
*depois* de uma instrução `use`.

**Exemplo #3 Herdando variáveis do escopo anterior**

```
<?php
$message = 'hello';

// Sem "use"
$example = function () {
    var_dump($message);
};
$example();

// Inherit $message
$example = function () use ($message) {
    var_dump($message);
};
$example();

// Herdando valor da variável quando a função é definida,
// não quando é chamada
$message = 'world';
$example();

// Altera a mensagem
$message = 'hello';

// Herdando por referência
$example = function () use (&$message) {
    var_dump($message);
};
$example();

// O valor modificado no escopo pai
// reflete quando a função é chamada
$message = 'world';
$example();

// Closures também aceitam argumentos normais
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("hello");

// Declaração de tipo de retorno após a instrução 'use'
$example = function () use ($message): string {
    return "hello $message";
};
var_dump($example());
```

O exemplo acima produzirá
algo semelhante a:

```
Notice: Undefined variable: message in /example.php on line 6
NULL
string(5) "hello"
string(5) "hello"
string(5) "hello"
string(5) "world"
string(11) "hello world"
string(11) "hello world"
```

A partir do PHP 8.0.0 a lista de variáveis herdadas no escopo podem incluir uma vírgula
final, que será ignorada.

Herdar variáveis do escopo pai *não*
é o mesmo que usar variáveis globais.
Variáveis globais existem no escopo global, o qual é o mesmo não
importa a função sendo executada. O escopo pai de um closure é a função
no qual o closure foi declarado (não necessariamente a função a partir do
qual ele foi chamado). Veja o exemplo a seguir:

**Exemplo #4 Closures e escopo**

```
<?php
// Um exemplo básico de carrinho de compras que contém uma lista de produtos
// e a quantidade de cada produto. Inclui um método que
// calcula o preço total dos itens no carrinho utilizando uma
// closure como função de retorno.
class Cart
{
    const PRICE_BUTTER  = 1.00;
    const PRICE_MILK    = 3.00;
    const PRICE_EGGS    = 6.95;

    protected $products = array();

    public function add($product, $quantity)
    {
        $this->products[$product] = $quantity;
    }

    public function getQuantity($product)
    {
        return isset($this->products[$product]) ? $this->products[$product] :
               FALSE;
    }

    public function getTotal($tax)
    {
        $total = 0.00;

        $callback =
            function ($quantity, $product) use ($tax, &$total)
            {
                $pricePerItem = constant(__CLASS__ . "::PRICE_" .
                    strtoupper($product));
                $total += ($pricePerItem * $quantity) * ($tax + 1.0);
            };

        array_walk($this->products, $callback);
        return round($total, 2);
    }
}

$my_cart = new Cart;

// Adiciona alguns itens no carrinho
$my_cart->add('butter', 1);
$my_cart->add('milk', 3);
$my_cart->add('eggs', 6);

// Exibe o total com uma taxa de venda de 5%.
print $my_cart->getTotal(0.05) . "\n";
// O resultado é 54.29
```

**Exemplo #5 Vinculação automática do `$this`**

```
<?php
class Test
{
    public function testing()
    {
        return function() {
            var_dump($this);
        };
    }
}

$object = new Test;
$function = $object->testing();
$function();
```

O exemplo acima produzirá:

```
object(Test)#1 (0) {
}
```

Quando declarada no contexto de uma classe, a classe corrente é
automaticamente vinculada a ela, tornando `$this` disponível
dentro do escopo da função. Se essa vinculação automática da classe
corrente não for o comportamento esperado,
[funções anônimas estáticas](functions.anonymous.md#functions.anonymous-functions.static)
podem ser utilizadas.

### Funções anônimas estáticas

Funções anônimas podem ser declaradas estaticamente. Evita
que a classe corrente seja automaticamente vinculada a
ela. Objetos também podem não ser vinculados a ela em tempo de execução.

**Exemplo #6 Tentando utilizar o `$this` de dentro de uma função anônima estática**

```
<?php
class Foo
{
    function __construct()
    {
        $func = static function() {
            var_dump($this);
        };
        $func();
    }
};
new Foo();
```

O exemplo acima produzirá:

```
Fatal error: Uncaught Error: Using $this when not in object context in script:7
Stack trace:
#0 script(9): Foo::{closure:Foo::__construct():6}()
#1 script(12): Foo->__construct()
#2 {main}
  thrown in script on line 7
```

**Exemplo #7 Tentando vincular um objeto a uma função anônima estática**

```
<?php
$func = static function() {
    // corpo da função
};
$func = $func->bindTo(new stdClass);
$func();
```

O exemplo acima produzirá:

```
Warning: Cannot bind an instance to a static closure, this will be an error in PHP 9 in script on line 5

Fatal error: Uncaught Error: Value of type null is not callable in script:6
Stack trace:
#0 {main}
  thrown in script on line 6
```

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Closures criadas a partir de [métodos mágicos](language.oop5.magic.md) podem aceitar parâmetros nomeados. |
| 7.1.0 | Funções anônimas podem não incluir [superglobals](language.variables.predefined.md), $this, ou qualquer variável com o mesmo nome como um parâmetro. |

### Notas

> **Nota**:
>
> É possível utilizar [func\_num\_args()](function.func-num-args.md),
> [func\_get\_arg()](function.func-get-arg.md) e [func\_get\_args()](function.func-get-args.md)
> dentro de closures.

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
