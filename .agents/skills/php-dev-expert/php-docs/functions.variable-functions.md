# Funções variáveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/functions.variable-functions.php

---

## Funções variáveis

O PHP suporta o conceito de funções variáveis. Isto significa que se
um nome de variável tem parênteses no final dela, o PHP procurará
uma função com o mesmo nome, qualquer que seja a avaliação da variável,
e tentará executá-la. Entre outras coisas, isto pode
ser usado para implementar callbacks, tabelas de função e assim por diante.

Funções variáveis não funcionam com construtores de linguagem como
[echo](function.echo.md), [print](function.print.md),
[unset()](function.unset.md), [isset()](function.isset.md),
[empty()](function.empty.md), [include](function.include.md),
[require](function.require.md) e outras assim. Utilize uma função de encapsulamento
para usar quaisquer um destes construtores como uma função variável.

**Exemplo #1 Exemplo de funções variáveis**

```
<?php
function foo() {
    echo "Chamou foo()\n";
}

function bar($arg = '')
{
    echo "Chamou bar(); com argumento '$arg'.\n";
}

// Essa é uma função encapsuladora para echo()
function echoit($string)
{
    echo $string;
}

$func = 'foo';
$func();        // Chama foo()

$func = 'bar';
$func('test');  // Chama bar()

$func = 'echoit';
$func('test');  // Chama echoit()
```

Um método de um objeto também pode ser chamado com a sintaxe de funções variáveis.

**Exemplo #2 Exemplo de chamada de um método variável**

```
<?php
class Foo
{
    function MetodoVariavel()
    {
        $name = 'Bar';
        $this->$name(); // Isto chama o método Bar()
    }

    function Bar()
    {
        echo "Bar foi chamada!";
    }
}

$foo = new Foo();
$funcname = "MetodoVariavel";
$foo->$funcname();  // Isto chama $foo->MetodoVariavel()
```

Quando chamando métodos estáticos, uma chamada de função tem preferência que uma propriedade estática.

**Exemplo #3 Método variávei com propriedades estáticas**

```
<?php
class Foo
{
    static $variable = 'propriedade estática';
    static function Variable()
    {
        echo "Método Variable chamado\n";
    }
}

echo Foo::$variable . "\n"; // Isto exibe 'static property'. Ele busca $variable no escopo da classe.
$variable = "Variable";
Foo::$variable();  // Isto chama $foo->Variable(), lendo a $variable no escopo da chamada.
```

O exemplo acima produzirá:

```
static property
Método Variable chamado
```

**Exemplo #4 Chamáveis complexos**

```
<?php
class Foo
{
    static function bar()
    {
        echo "bar\n";
    }
    function baz()
    {
        echo "baz\n";
    }
}

$func = array("Foo", "bar");
$func(); // exibe "bar"
$func = array(new Foo, "baz");
$func(); // exibe "baz"
$func = "Foo::bar";
$func(); // exibe "bar"
```

### Veja também

- [is\_callable()](function.is-callable.md)
- [call\_user\_func()](function.call-user-func.md)
- [function\_exists()](function.function-exists.md)
- [variáveis variáveis](language.variables.variable.md)

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
