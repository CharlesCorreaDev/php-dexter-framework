# unset remove a definição de uma variável informada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.unset.php

---

# unset

(PHP 4, PHP 5, PHP 7, PHP 8)

unset — **unset()** remove a definição de uma variável informada

### Descrição

function **unset**([mixed](language.types.mixed.md) `$var`, [mixed](language.types.mixed.md) `...$vars`): [void](language.types.void.md)

**unset()** destrói as variáveis especificadas.

O comportamento de **unset()** dentro de uma função
pode variar dependendo de qual tipo de variável está tentando-se
destruir.

Se uma variável global tornar-se indefinida por **unset()** dentro de
uma função, apenas a variável local é destruída. A variável no ambiente
que chamou a função manterá o mesmo valor anterior à chamada a
**unset()**.

**Exemplo #1 Usando **unset()****

```
<?php
function destroy_foo()
{
    global $foo;
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;
?>
```

Para remover a definição de uma variável global usando **unset()**
dentro de uma função, use o array
[$GLOBALS](reserved.variables.globals.md):

**Exemplo #2 **unset()** com variável global**

```
<?php
function foo()
{
    unset($GLOBALS['bar']);
}

$bar = "alguma coisa";
foo();
?>
```

Se uma variável que é PASSADA POR REFERÊNCIA tiver sua definição removida
por **unset()** dentro de uma função, apenas a variável local
é destruída. A variável no ambiente que chamou a função
manterá o mesmo valor anterior à chamada a
**unset()**.

**Exemplo #3 **unset()** com referência**

```
<?php
function foo(&$bar)
{
    unset($bar);
    $bar = "blah";
}

$bar = 'alguma coisa';
echo "$bar\n";

foo($bar);
echo "$bar\n";
?>
```

Se uma variável estática tiver a definição removida por **unset()** dentro de uma
função, **unset()** destrói a variável apenas no
contexto do resto da função. Chamadas subsequentes à função irão restaurar
o valor anterior da variável.

**Exemplo #4 **unset()** com variável estática**

```
<?php
function foo()
{
    static $bar;
    $bar++;
    echo "Antes de unset: $bar, ";
    unset($bar);
    $bar = 23;
    echo "depois de unset: $bar\n";
}

foo();
foo();
foo();
?>
```

### Parâmetros

`var`
:   A variável que terá sua definição removida.

`vars`
:   Mais variáveis que terão definições removidas.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #5 Exemplo de **unset()****

```
<?php
// destrói uma única variável
unset($foo);

// destrói um único elemento de um array
unset($bar['quux']);

// destrói mais de uma variável
unset($foo1, $foo2, $foo3);
?>
```

### Notas

> **Nota**:
>
> Como esta é uma
> construção da linguagem e não uma função, ela não pode ser chamada usando
> [funções variáveis](functions.variable-functions.md)
> ou [argumentos nomeados](functions.arguments.md#functions.named-arguments).

> **Nota**:
>
> É possível remover definições de propriedades de objeto visíveis no contexto atual.
>
> Se declarados,
> o método [\_\_get()](language.oop5.overloading.md#object.get)
> é chamado ao acessar uma propriedade indefinida, e
> o método [\_\_set()](language.oop5.overloading.md#object.set)
> é chamado ao definir uma propriedade indefinida.

> **Nota**:
>
> Não é possível remover a definição de `$this` dentro de um método
> do objeto.

> **Nota**:
>
> Ao usar **unset()** em propriedades de objeto inacessíveis,
> o método de sobrecarga [\_\_unset()](language.oop5.overloading.md#object.unset)
> será chamado, caso esteja declarado.

### Veja também

- [isset()](function.isset.md) - Determina se uma variável está declarada e é diferente de null
- [empty()](function.empty.md) - Determina se uma variável está vazia
- [\_\_unset()](language.oop5.overloading.md#object.unset)
- [array\_splice()](function.array-splice.md) - Remove uma parte array e a substitui por outra coisa
- [Conversão (unset)](language.types.null.md#language.types.null.casting)

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
