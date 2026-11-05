# Chama uma função de retorno com um array de parâmetros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.call-user-func-array.php

---

# call\_user\_func\_array

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

call\_user\_func\_array — Chama uma função de retorno com um array de parâmetros

### Descrição

function **call\_user\_func\_array**([callable](language.types.callable.md) `$callback`, [array](language.types.array.md) `$args`): [mixed](language.types.mixed.md)

Chama a função de retorno do definida no primeiro parâmetro `callback` com
os parâmetros informados no parâmetro `args`.

### Parâmetros

`callback`
:   A função do tipo [callable](language.types.callable.md) a ser chamada.

`args`
:   Os parâmetros a serem passados à função de retorno, como um array.

    Se as chaves do array de `args` forem todas numéricas,
    elas serão ignoradas e cada elemento será passado à
    função informada no parâmetro `callback` como um argumento potencial, em
    ordem.

    Se qualquer chave do array `args` for uma string,
    esses elementos serão passados à função informada no parâmetro `callback`
    como argumentos nomeados, com o mesmo nome dado pela chave.

    É um erro fatal quando uma chave numérica no array do parâmetro `args`
    aparece depois de uma chave string, ou se uma chave string não
    corresponder a nenhum parâmetro da função informada em `callback`.

### Valor Retornado

Retorna o mesmo valor retornado pela função de retorno, ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | As chaves de `args` agora serão interpretadas como nomes de parâmetros, ao invés de serem silenciosamente ignorados. |

### Examples

**Exemplo #1 Exemplo de **call\_user\_func\_array()****

```
<?php
function foobar($arg, $arg2) {
    echo __FUNCTION__, " recebeu $arg e $arg2\n";
}
class foo {
    function bar($arg, $arg2) {
        echo __METHOD__, " recebeu $arg e $arg2\n";
    }
}

// Chama a função foobar() com 2 argumentos
call_user_func_array("foobar", array("um", "dois"));

// Chama o método $foo->bar() com 2 argumentos
$foo = new foo;
call_user_func_array(array($foo, "bar"), array("três", "quatro"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
foobar recebeu um e dois
foo::bar recebeu três e quatro
```

**Exemplo #2 **call\_user\_func\_array()** usando espaço de nomes**

```
<?php

namespace Foobar;

class Foo {
    static public function test($name) {
        print "Olá, {$name}!\n";
    }
}

call_user_func_array(__NAMESPACE__ .'\Foo::test', array('João'));

call_user_func_array(array(__NAMESPACE__ .'\Foo', 'test'), array('Felipe'));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Olá, João!
Olá, Felipe!
```

**Exemplo #3 Usando função lambda**

```
<?php

$func = function($arg1, $arg2) {
    return $arg1 * $arg2;
};

var_dump(call_user_func_array($func, array(2, 4)));

?>
```

O exemplo acima produzirá:

```
int(8)
```

**Exemplo #4 Passando valores por referência**

```
<?php

function mega(&$a){
    $a = 55;
    echo "função mega \$a=$a\n";
}
$bar = 77;
call_user_func_array('mega',array(&$bar));
echo "global \$bar=$bar\n";

?>
```

O exemplo acima produzirá:

```
função mega $a=55
global $bar=55
```

**Exemplo #5 **call\_user\_func\_array()** usando parâmetros nomeados**

```
<?php
function foobar($primeiro, $segundo) {
    echo __FUNCTION__, " recebeu $primeiro e $segundo\n";
}

// Chama a função foobar() com argumentos nomeados em ordem não posicional
call_user_func_array("foobar", array("segundo" => "dois", "primeiro" => "um"));

// Chama a função foobar() com um argumento nomeado
call_user_func_array("foobar", array("foo", "segundo" => "bar"));

// Erro fatal: Não é possível usar argumento posicional após um argumento nomeado
call_user_func_array("foobar", array("primeiro" => "um", "bar"));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
foobar recebeu um e dois
foobar recebeu foo e bar

Fatal error: Uncaught Error: Cannot use positional argument after named argument
```

### Notas

> **Nota**:
>
> Callbacks registrados
> com funções como [call\_user\_func()](function.call-user-func.md) e **call\_user\_func\_array()** não serão
> chamados se houver uma exceção não capturada que foi lançada em um callback anterior.

### Veja também

- [call\_user\_func()](function.call-user-func.md) - Chama a função de retorno informada no primeiro parâmetro
- [ReflectionFunction::invokeArgs()](reflectionfunction.invokeargs.md) - Invoca argumentos de função
- [ReflectionMethod::invokeArgs()](reflectionmethod.invokeargs.md) - Invoca argumentos

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
