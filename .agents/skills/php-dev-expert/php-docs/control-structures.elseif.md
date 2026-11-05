# elseif/else if

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.elseif.php

---

## elseif/else if

(PHP 4, PHP 5, PHP 7, PHP 8)

`elseif`, como o nome sugere, é uma combinação
do `if` e `else`. Como o
`else`, estende um `if`
para executar instruções diferentes no caso da expressão
`if` original ser avaliada como
**`false`**. Entretanto, diferentemente do
`else`, executará uma expressão alternativa
somente se a expressão condicional do `elseif`
for avaliada como **`true`**. Por exemplo, o código
a seguir exibirá a é maior que
b, a é igual a b
ou a é menor que b:

```
<?php
$a = 1;
$b = 1;
if ($a > $b) {
    echo "a é maior que b\n";
} elseif ($a == $b) {
    echo "a é igual a b\n";
} else {
    echo "a é menor que b\n";
}
```

O exemplo acima produzirá:

```
a é igual a b
```

Pode haver vários `elseif`s dentro da mesma instrução
`if`. A primeira expressão
`elseif` (se houver) que retornar
**`true`** será executada. No PHP, pode-se escrever
`else if` (em duas palavras), e o comportamento será idêntico
ao do `elseif` (em uma única palavra). O significado sintático
é um pouco diferente (se você está familiarizado com C, mas, no final,
ambos terão exatamente o mesmo comportamento.

O `elseif` só é executado se o
`if` precedente ou qualquer
`elseif` for avaliado como
**`false`**, e o `elseif`
corrente for avaliado como
**`true`**.

> **Nota**:
>
> Note que o `elseif` e `else if`
> só serão considerados exatamente iguais se usados com chaves
> como no exemplo abaixo. Ao utilizar os dois pontos (:) para definir as
> condições de `if`/`elseif`, então o uso
> de `elseif` como uma única palavras se torna necessário, ou o PHP
> falhará com um erro de interpretação se `else if`
> estiver separado em duas palavras.

```
<?php
$a = 3;
$b = 1;

/* Método Incorreto: */
if ($a > $b):
    echo $a." é maior que ".$b;
else if ($a == $b): // Não irá compilar.
    echo "A linha acima causa um erro de análise.";
endif;
```

O exemplo acima produzirá:

```
Parse error: syntax error, unexpected token "if", expecting ":" in script on line 8
```

```
<?php
$a = 3;
$b = 1;

/* Método Correto: */
if ($a > $b):
    echo $a." é maior que ".$b;
elseif ($a == $b): // Note a combinação das palavras.
    echo $a." é igual a ".$b;
else:
    echo $a." não é maior nem igual a ".$b;
endif;
```

O exemplo acima produzirá:

```
3 é maior que 1
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
