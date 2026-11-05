# if

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.if.php

---

## if

(PHP 4, PHP 5, PHP 7, PHP 8)

O construtor `if` é um dos recursos mais importantes
em muitas linguagens, inclusive no PHP. Permite a
execução condicional de fragmentos de código. O PHP apresenta uma estrutura
`if` semelhante a do C:

```
if (expr)
  statement
```

Como descrito na [seção sobre
expressões](language.expressions.md), expressões são avaliadas por seus
valores Booleanos. Se uma expressão for avaliada como **`true`**,
o PHP executará a declaração, e se avaliá-la
como **`false`** - ignorá-la. Mais informações sobre quais valores são avaliados
como **`false`** podem ser encontradas na seção ['Conversão para booleano'](language.types.boolean.md#language.types.boolean.casting).

O exemplo a seguir exibirá a é maior
que b se $a for maior
que $b:

```
<?php
$a = 3;
$b = 1;
if ($a > $b)
  echo "a é maior que b\n";
```

O exemplo acima produzirá:

```
a é maior que b
```

Muitas vezes deseja-se que mais de uma declaração seja condicionalmente
executada. É claro que não é necessário envolver cada declaração
em uma cláusula `if`. Em vez disso, pode-se agrupar
várias declarações em grupos. Por exemplo, este código
exibirá a é maior que b
se $a for maior que
$b, e atribuirá o valor de
$a em $b:

```
<?php
$a = 3;
$b = 1;
if ($a > $b) {
  echo "a é maior que b\n";
  $b = $a;
}
var_dump($b);
```

O exemplo acima produzirá:

```
a é maior que b
int(3)
```

A declaração `If` pode ser aninhada indefinidamente dentro de outras
declarações `if`, fornecendo completa flexibilidade
para execução condicional de várias partes do
programa.

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
