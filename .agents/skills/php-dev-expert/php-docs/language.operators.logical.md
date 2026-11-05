# Operadores Lógicos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.logical.php

---

## Operadores Lógicos

**Operadores Lógicos**

| Exemplo | Nome | Resultado |
| --- | --- | --- |
| $a and $b | E | **`true`** se ambos $a e $b são **`true`**. |
| $a or $b | OU | **`true`** se $a ou $b é **`true`**. |
| $a xor $b | XOR | **`true`** se $a ou $b é **`true`**, mas não ambos ao mesmo tempo. |
| ! $a | Não | **`true`** se $a não é **`true`**. |
| $a && $b | E | **`true`** se ambos $a e $b são **`true`**. |
| $a || $b | OU | **`true`** se $a ou $b é **`true`**. |

A razão para as duas variantes dos operandos "and" e "or"
é que eles operam com precedências diferentes. (Veja
[Precedência
de Operadores](language.operators.precedence.md).)

**Exemplo #1 Ilustrando operadores lógicos**

```
<?php

// --------------------
// foo() nunca será chamada porque toda a expressão sofre curto circuito

$a = (false && foo());
$b = (true  || foo());
$c = (false and foo());
$d = (true  or  foo());

// --------------------
// "||" tem maior precedência que "or"

// O resultado da expressão (false || true) é atribuído em $e
// Funciona como: ($e = (false || true))
$e = false || true;

// A constante false é atribuída a $f antes que o "or" ocorra
// Funciona como: (($f = false) or true)
$f = false or true;

var_dump($e, $f);

// --------------------
// "&&" tem maior precedência que "and"

// O resultado da expressão (true && false) é atribuído em $g
// Funciona como: ($g = (true && false))
$g = true && false;

// A constante true é atribuída em $h antes que o "and" ocorra
// Funciona como: (($h = true) and false)
$h = true and false;

var_dump($g, $h);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(false)
bool(false)
bool(true)
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
