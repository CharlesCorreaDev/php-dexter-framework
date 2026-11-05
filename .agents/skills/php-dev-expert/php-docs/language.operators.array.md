# Operadores de Arrays

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.array.php

---

## Operadores de Arrays

**Operadores de array**

| Exemplo | Nome | Resultado |
| --- | --- | --- |
| $a + $b | União | União de $a e $b. |
| $a == $b | Igualdade | **`true`** se $a e $b têm as mesmas chaves e valores. |
| $a === $b | Identidade | **`true`** se $a e $b têm as mesmas chaves e valores, na mesma ordem e com os mesmos tipos. |
| $a != $b | Desigualdade | **`true`** se $a não é igual $b. |
| $a <> $b | Desigualdade | **`true`** se $a não é igual $b. |
| $a !== $b | Não identidade | **`true`** se $a não é idêntico a $b. |

O operador `+` retorna o array à direita anexado
ao array da esquerda. Para chaves que existam nos dois arrays os elementos
do array à esquerda serão mantidos, os valores de mesma chave no
array da direita são ignorados.

**Exemplo #1 Operador de união de array**

```
<?php
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // União de $a e $b
echo "União de \$a e \$b: \n";
var_dump($c);

$c = $b + $a; // União de $b e $a
echo "União de \$b e \$a: \n";
var_dump($c);

$a += $b; // União de $a += $b é $a e $b
echo "União de \$a += \$b: \n";
var_dump($a);
?>
```

O exemplo acima produzirá:

```
União de $a e $b:
array(3) {
  ["a"]=>
  string(5) "apple"
  ["b"]=>
  string(6) "banana"
  ["c"]=>
  string(6) "cherry"
}
União de $b e $a:
array(3) {
  ["a"]=>
  string(4) "pear"
  ["b"]=>
  string(10) "strawberry"
  ["c"]=>
  string(6) "cherry"
}
União de $a += $b:
array(3) {
  ["a"]=>
  string(5) "apple"
  ["b"]=>
  string(6) "banana"
  ["c"]=>
  string(6) "cherry"
}
```

Elementos do array são iguais para efeitos de comparação se eles possuem o mesmo
valor e chave.

**Exemplo #2 Comparando arrays**

```
<?php
$a = array("maçã", "banana");
$b = array(1 => "banana", "0" => "maçã");

var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
?>
```

### Veja também

- [Tipo array](language.types.array.md)
- [Funções em arrays](ref.array.md)

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
