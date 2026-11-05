# Sintaxe Alternativa para estruturas de controle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.alternative-syntax.php

---

## Sintaxe Alternativa para estruturas de controle

(PHP 4, PHP 5, PHP 7, PHP 8)

O PHP oferece uma sintaxe alternativa para algumas estruturas
de controle; a saber, `if`,
`while`, `for`,
`foreach`, e `switch`.
Em cada caso, basicamente a sintaxe alternativa é trocar
a chave de abertura por dois pontos (:) e a chave de fechamento por
`endif;`, `endwhile;`,
`endfor;`, `endforeach;`, ou
`endswitch;`, respectivamente.

```
<?php
$a = 5;
if ($a == 5): ?>
A é igual a 5
<?php endif; ?>
```

O exemplo acima produzirá:

```
A é igual a 5
```

No exemplo acima, o bloco HTML "A é igual a 5" está dentro de um
`if` escrito na sintaxe alternativa. O
bloco HTML será exibido somente se $a for igual a 5.

A sintaxe alternativa também se aplica ao `else` e
`elseif`. A seguir um exemplo de um
`if` com `elseif` e
`else` no formato alternativo:

```
<?php
$a = 5;
if ($a == 5):
    echo "a é igual a 5";
    echo "...";
elseif ($a == 6):
    echo "a é igual a 6";
    echo "!!!";
else:
    echo "a não é 5 nem 6";
endif;
```

O exemplo acima produzirá:

```
a é igual a 5...
```

> **Nota**:
>
> Misturar a sintaxe no mesmo bloco de controle não é suportado.

**Aviso**

Qualquer saída (inclusive espaços em branco) entre um `switch`
e o primeiro `case` irá resultar em um erro de
sintaxe. O exemplo abaixo é inválido:

```
<?php
$foo = 1;
switch ($foo): ?>
    <?php case 1: ?>
    Foo é igual a 1
<?php endswitch; ?>
```

O exemplo acima produzirá:

```
Parse error: syntax error, unexpected T_INLINE_HTML "    ", expecting "endswitch" or "case" or "default" in script on line 4
```

Enquanto que este é válido, já que a quebra de linha depois do
`switch` é considerado parte da tag de fechamento
`?>` e, portanto, nenhuma saída será enviada entre o
`switch` e `case`:

```
<?php
$foo = 1;
switch ($foo): ?>
<?php case 1: ?>
    Foo é igual a 1
<?php endswitch; ?>
```

O exemplo acima produzirá:

```
    Foo é igual a 1
```

Veja mais sobre [while](control-structures.while.md),
[for](control-structures.for.md), e [if](control-structures.if.md) para outros exemplos.

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
