# Operadores de Tipo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.type.php

---

## Operadores de Tipo

`instanceof` é usado para determinar se um variável do PHP
é uma objeto instanciado de uma certa
[classe](language.oop5.basic.md#language.oop5.basic.class):

**Exemplo #1 Usando `instanceof` com classes**

```
<?php
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

`instanceof` pode também ser usado para determinar se uma variável
é um objeto instanciado de uma classe que herda de uma classe pai:

**Exemplo #2 Usando `instanceof` com herança**

```
<?php
class ParentClass
{
}

class MyClass extends ParentClass
{
}

$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof ParentClass);
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
```

Para verificar se um objeto *não* é uma instância de uma classe, o
[operador lógico `not`](language.operators.logical.md) pode ser usado.

**Exemplo #3 Usando `instanceof` para verificar se o objeto *não* é uma
instância da classe**

```
<?php
class MyClass
{
}

$a = new MyClass;
var_dump(!($a instanceof stdClass));
?>
```

O exemplo acima produzirá:

```
bool(true)
```

Por fim, `instanceof` pode também ser usado para determinar se
uma variável é um objeto instanciado de uma classe que implementa uma
[interface](language.oop5.interfaces.md):

**Exemplo #4 Usando `instanceof` para classe**

```
<?php
interface MyInterface
{
}

class MyClass implements MyInterface
{
}

$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof MyInterface);
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
```

Embora `instanceof` é usualmente usado com um nome de classe literal,
ele pode também ser usado com outro objeto ou uma variável string:

**Exemplo #5 Usando `instanceof` com outras variáveis**

```
<?php
interface MyInterface
{
}

class MyClass implements MyInterface
{
}

$a = new MyClass;
$b = new MyClass;
$c = 'MyClass';
$d = 'NotMyClass';

var_dump($a instanceof $b); // $b é um objeto da classe MyClass
var_dump($a instanceof $c); // $c é uma string 'MyClass'
var_dump($a instanceof $d); // $d é uma string 'NotMyClass'
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
```

instanceof não lança erros se a variável testada não for
um objeto, apenas retorna **`false`**. Constantes não são permitidas
anteriormente ao PHP 7.3.0.

**Exemplo #6 Utilizando `instanceof` para testar outras variáveis**

```
<?php
$a = 1;
$b = NULL;
$c = fopen('/tmp/', 'r');
var_dump($a instanceof stdClass); // $a é um inteiro
var_dump($b instanceof stdClass); // $b é NULL
var_dump($c instanceof stdClass); // $c é um recurso
var_dump(FALSE instanceof stdClass);
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(false)
bool(false)
PHP Fatal error:  instanceof expects an object instance, constant given
```

Desde o PHP 7.3.0, constantes são permitidas à esquerda do operador
`instanceof`.

**Exemplo #7 Utilizando `instanceof` em constantes**

```
<?php
var_dump(FALSE instanceof stdClass);
?>
```

Saída do exemplo acima no PHP 7.3:

```
bool(false)
```

Desde o PHP 8.0.0, `instanceof` pode ser utilizado em expressões arbitrárias.
A expressão precisa estar dentro de parênteses e produzir uma [string](language.types.string.md).

**Exemplo #8 Usando `instanceof` em expressões arbitrárias**

```
<?php

class ClassA extends \stdClass {}
class ClassB extends \stdClass {}
class ClassC extends ClassB {}
class ClassD extends ClassA {}

function getSomeClass(): string
{
    return ClassA::class;
}

var_dump(new ClassA instanceof ('std' . 'Class'));
var_dump(new ClassB instanceof ('Class' . 'B'));
var_dump(new ClassC instanceof ('Class' . 'A'));
var_dump(new ClassD instanceof (getSomeClass()));
?>
```

Saída do exemplo acima no PHP 8:

```
bool(true)
bool(true)
bool(false)
bool(true)
```

O operador `instanceof` tem uma variação funcional
chamada [is\_a()](function.is-a.md).

### Veja também

- [get\_class()](function.get-class.md)
- [is\_a()](function.is-a.md)

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
