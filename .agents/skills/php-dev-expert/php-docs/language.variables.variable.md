# Variáveis variáveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.variables.variable.php

---

## Variáveis variáveis

Às vezes, é conveniente possuir nome variáveis para
variáveis. Isto é, o nome de uma variável que pode ser definido e utilizado
dinamicamente. Uma variável normal é definida com uma instrução como:

```
<?php
$a = 'hello';
var_dump($a);
```

Uma variável variável obtém o valor de uma variável e a trata como
o nome de uma variável. No exemplo acima,
*hello* pode ser utilizado como o nome de uma variável
utilizando dois sinais de cifrão:

```
<?php
$a = 'hello';
$$a = "world";
var_dump($hello);
```

Neste ponto, duas variáveis foram definidas e armazenadas na
árvore de símbolos do PHP: $a que contém "hello" e
$hello que contém "world". Assim, esta
instrução:

```
<?php
$a = 'hello';
$$a = 'world';
echo "$a {$$a}";
```

produz a mesma saída que:

```
<?php
$a = 'hello';
$$a = 'world';
echo "$a $hello";
```

assim sendo, as duas produzem: hello world.

Para poder utilizar variáveis variáveis com arrays, é necessário
resolver um problema de ambiguidade. Isso é, se for escrito
$$a[1], o interpretador precisa saber se a
intenção é utilizar $a[1] como uma variável ou se
a intenção é usar $$a como uma variável e `[1]`
como o índice dessa variável. A sintaxe para resolver essa ambiguidade
é ${$a[1]} para o primeiro caso e
${$a}[1] para o segundo.

Propriedades de classes também podem ser acessadas utilizando-se nomes de propriedades variáveis. O
nome de propriedade variável será resolvido dentro do escopo em que a
chamada foi feita. Por exemplo, se houver uma expressão como
$foo->$bar, o escopo local será examinado procurando por
$bar e seu valor será utilizado como o nome da
propriedade $foo. Isso também funciona se
$bar for um array.

Chaves também podem ser utilizadas para delimitar claramente os nomes
de propriedade. São muito úteis ao acessar valores de uma propriedade que
contenham um array, quando o nome da propriedade tem várias partes,
ou quando o nome da propriedade contém caracteres que não
são válidos (por exemplo, em saídas da função [json\_decode()](function.json-decode.md)
ou [SimpleXML](book.simplexml.md)).

**Exemplo #1 Exemplo de propriedade variável**

```
<?php
class Foo {
    public $bar = 'Eu sou bar.';
    public $arr = ['Eu sou A.', 'Eu sou B.', 'Eu sou C.'];
    public $r   = 'Eu sou r.';
}

$foo = new Foo();
$bar = 'bar';
$baz = ['foo', 'bar', 'baz', 'quux'];
echo $foo->$bar . "\n";
echo $foo->{$baz[1]} . "\n";

$start = 'b';
$end   = 'ar';
echo $foo->{$start . $end} . "\n";

$arr = 'arr';
echo $foo->{$arr[1]} . "\n";
echo $foo->{$arr}[1] . "\n";
```

O exemplo acima produzirá:

```
Eu sou bar.
Eu sou bar.
Eu sou bar.
Eu sou r.
Eu sou B.
```

**Aviso**

Observe que variáveis variáveis não podem ser utilizadas nos
[arrays superglobais](language.variables.superglobals.md)
dentro de funções ou métodos de classe. A variável `$this`
também é uma variável especial que não pode ser referenciada dinamicamente.

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
