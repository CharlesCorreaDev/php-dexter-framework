# Chama a função de retorno informada no primeiro parâmetro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.call-user-func.php

---

# call\_user\_func

(PHP 4, PHP 5, PHP 7, PHP 8)

call\_user\_func — Chama a função de retorno informada no primeiro parâmetro

### Descrição

function **call\_user\_func**([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

Chama a função informada no parâmetro `callback` e passa
os argumentos restantes como argumentos para essa função.

### Parâmetros

`callback`
:   A função do tipo [callable](language.types.callable.md) a ser chamada.

`args`
:   Zero ou mais parâmetros a serem passados à função.

    > **Nota**:
    >
    > Observe que os parâmetros para **call\_user\_func()** não
    > são passados por referência.
    >
    > **Exemplo #1 Exemplo de **call\_user\_func()** e referências**
    >
    > ```
    > <?php
    > error_reporting(E_ALL);
    > function increment(&$var)
    > {
    >     $var++;
    > }
    >
    > $a = 0;
    > call_user_func('increment', $a);
    > echo $a."\n";
    >
    > // é possível usar esta outra função alternativamente
    > call_user_func_array('increment', array(&$a));
    > echo $a."\n";
    >
    > // é também possível usar uma função-variável
    > $increment = 'increment';
    > $increment($a);
    > echo $a."\n";
    > ?>
    > ```
    >
    > O exemplo acima produzirá:
    >
    > ```
    > Warning: Parameter 1 to increment() expected to be a reference, value given in …
    > 0
    > 1
    > 2
    > ```

### Valor Retornado

Retorna o mesmo valor retornado pela função de retorno.

### Examples

**Exemplo #2 Exemplo de **call\_user\_func()****

```
<?php
function barbeiro($tipo)
{
    echo "Você quer um corte do tipo $tipo, sem problemas\n";
}
call_user_func('barbeiro', "cogumelo");
call_user_func('barbeiro', "moicano");
?>
```

O exemplo acima produzirá:

```
Você quer um corte do tipo cogumelo, sem problemas
Você quer um corte do tipo moicano, sem problemas
```

**Exemplo #3 **call\_user\_func()** usando espaço de nomes**

```
<?php

namespace Foobar;

class Foo {
    static public function test() {
        print "Olá, mundo!\n";
    }
}

call_user_func(__NAMESPACE__ .'\Foo::test');
call_user_func(array(__NAMESPACE__ .'\Foo', 'test'));

?>
```

O exemplo acima produzirá:

```
Olá, mundo!
Olá, mundo!
```

**Exemplo #4 Usando um método de classe com **call\_user\_func()****

```
<?php

class myclass {
    static function say_hello()
    {
        echo "Hello!\n";
    }
}

$classname = "myclass";

call_user_func(array($classname, 'say_hello'));
call_user_func($classname .'::say_hello');

$myobject = new myclass();

call_user_func(array($myobject, 'say_hello'));

?>
```

O exemplo acima produzirá:

```
Hello!
Hello!
Hello!
```

**Exemplo #5 Usando função lambda com **call\_user\_func()****

```
<?php
call_user_func(function($arg) { print "[$arg]\n"; }, 'test');
?>
```

O exemplo acima produzirá:

```
[test]
```

### Notas

> **Nota**:
>
> Callbacks registrados
> com funções como **call\_user\_func()** e [call\_user\_func\_array()](function.call-user-func-array.md) não serão
> chamados se houver uma exceção não capturada que foi lançada em um callback anterior.

### Veja também

- [call\_user\_func\_array()](function.call-user-func-array.md) - Chama uma função de retorno com um array de parâmetros
- [is\_callable()](function.is-callable.md) - Verifica se um valor pode ser chamado como uma função a partir do escopo atual
- [Funções-Variáveis](functions.variable-functions.md)
- [ReflectionFunction::invoke()](reflectionfunction.invoke.md) - Invoca função
- [ReflectionMethod::invoke()](reflectionmethod.invoke.md) - Invoca

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
