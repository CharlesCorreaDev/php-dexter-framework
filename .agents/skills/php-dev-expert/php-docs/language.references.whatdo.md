# O que as referências fazem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.references.whatdo.php

---

## O que as referências fazem

Há três operações básicas ao se utilizar referências:
[atribuição por
referência](language.references.whatdo.md#language.references.whatdo.assign), [passagem
por referência](language.references.whatdo.md#language.references.whatdo.pass),
e [retorno por
referência](language.references.whatdo.md#language.references.whatdo.return). Esta seção fará uma introdução dessas
operações, com atalhos para leituras posteriores.

### Atribuição por referência

Referências no PHP permitem criar duas
variáveis que se referem ao mesmo conteúdo. Ou seja, quando se faz:

```
<?php
$a =& $b;
```

$a e $b
apontam para o mesmo conteúdo.
> **Nota**:
>
> $a e $b são completamente
> iguais aqui, mas não porque $a está apontando para
> $b ou vice-versa, mas sim que
> $a e $b apontam para o
> mesmo lugar.

> **Nota**:
>
> Se uma variável indefinida for atribuída, passada ou retornada por referência,
> ela será criada.
>
> **Exemplo #1 Usando referência com variáveis indefinidas**
>
> ```
> <?php
>
> function foo(&$var) {}
>
> foo($a); // $a é "criada" e definida como null
>
> $b = array();
> foo($b['b']);
> var_dump(array_key_exists('b', $b)); // bool(true)
>
> $c = new stdClass();
> foo($c->d);
> var_dump(property_exists($c, 'd')); // bool(true)
> ```

A mesma sintaxe pode ser utilizada com funções que retornem
referências:

```
<?php
$foo =& find_var($bar);
```

Usar essa mesma sintaxe com uma função que *não*
retorna por referência irá gerar um erro, da mesma forma no caso
do operador [new](language.oop5.basic.md#language.oop5.basic.new).
Ainda que objetos sejam internamente passados como ponteiros, isso não é o mesmo que uma referência,
como explicado em [Objetos e Referências](language.oop5.references.md).

**Aviso**

Se for atribuída uma referência para uma variável declarada `global`
dentro da função, a referência será visível somente dentro da função.
Pode-se evitar isso usando o array [$GLOBALS](reserved.variables.globals.md).

**Exemplo #2 Referenciando variáveis globais de dentro de funções**

```
<?php
$var1 = "Variável de exemplo";
$var2 = "";

function global_references($use_globals)
{
    global $var1, $var2;

    if (!$use_globals) {
        $var2 =& $var1; // visível somente dentro da função
    } else {
        $GLOBALS["var2"] =& $var1; // visível também no contexto global
    }
}

global_references(false);
echo "var2 é definida como '$var2'\n"; // var2 é definida como ''

global_references(true);
echo "var2 é definida como '$var2'\n"; // var2 é definida como 'Variável de exemplo'
```

Veja `global $var;` como atalho para `$var
=& $GLOBALS['var'];`. Assim, atribuir outra referência
para `$var` somente modifica a variável de referência local.

> **Nota**:
>
> Se um valor for atribuído por referência a uma variável numa instrução
> [`foreach`](control-structures.foreach.md), a referência também é modificada.
>
> **Exemplo #3 Referências e o comando foreach**
>
> ```
> <?php
> $ref = 0;
> $row =& $ref;
>
> foreach (array(1, 2, 3) as $row) {
>     // Faz alguma coisa
> }
>
> echo $ref; // 3 - último elemento do array iterado
> ```

Ainda que não seja uma atribuição por referência explícita, expressões criadas
com o construtor
[`array()`](function.array.md) também podem
se comportar como tais com o prefixo `&` no elemento de array
a ser acrescentado. Exemplo:

```
<?php
$a = 1;
$b = array(2, 3);

$arr = array(&$a, &$b[0], &$b[1]);
$arr[0]++;
$arr[1]++;
$arr[2]++;
/* $a == 2, $b == array(3, 4); */
var_dump($a);
var_dump($b);
```

Note que referências dentro de arrays são potencialmente perigosas.
Fazer uma atribuição normal (sem referência) com uma referência à
direita não transforma a expressão a esquerda numa referência, mas referências
dentro de arrays são preservadas nessas atribuições normais. Isso também se
aplica a chamadas de função onde arrays são passados por valor. Exemplo:

```
<?php

/* Atribuição de variáveis escalares */
$a = 1;
$b =& $a;
$c = $b;
$c = 7; // $c não é referência; não modifica $a ou $b
print "a = {$a}; b = {$b}; c = {$c}\n\n";

/* Atribuição de variáveis do array */
$arr = array(1);
$a =& $arr[0]; // $a e $arr[0] estão no mesmo conjunto de referências
$arr2 = $arr; // Não atribui por referência!
$arr2[0]++;
/* $a == 2, $arr == array(2) */
/* O conteúdo de $arr é modificado embora ele não seja uma referência! */
print "a = {$a}\n";
var_dump($arr);
var_dump($arr2);
```

Em outras palavras, o comportamento de referências em arrays é definido
elemento por elemento. O comportamento de referências dos elementos individuais
é dissociado do status da referência do array que os contém.

### Passagem por referência

A segunda coisa que referências fazem é passar variáveis por
referência. Isso é feito com a criação de uma variável local em uma função
e uma variável no escopo chamador que referenciam o mesmo
conteúdo. Assim:

```
<?php
function foo(&$var)
{
    $var++;
}

$a = 5;
foo($a);
print $a;
```

a variável $a será 6 no final. Isto ocorre porque
na função foo a variável
$var se referem ao mesmo conteúdo de
$a. Para mais informações disso veja
a seção de [passagem por
referência](language.references.pass.md).

### Retorno por referência

A terceira coisa que as referências fazem é [retorno por referência](language.references.return.md).

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
