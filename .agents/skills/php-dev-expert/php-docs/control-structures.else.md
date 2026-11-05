# else

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.else.php

---

## else

(PHP 4, PHP 5, PHP 7, PHP 8)

Muitas vezes deseja-se executar uma instrução se uma certa condição
for válida, e uma instrução diferente se a mesma condição não for válida. Para isso
que o `else` serve. O `else`
estende a instrução `if` para executar outras
caso a expressão no `if` retornar
**`false`**. Por exemplo, o código a
seguir exibirá a é maior que
b se $a for maior que
$b, e a NÃO é maior
que b caso contrário:

```
<?php
$a = 3;
$b = 5;
if ($a > $b) {
  echo "a é maior que b\n";
} else {
  echo "a NÃO é maior que b\n";
}
```

O exemplo acima produzirá:

```
a NÃO é maior que b
```

A instrução `else` só é executada se a
expressão de avaliação do `if` for avaliada como
**`false`**, e se tiver qualquer expressão
`elseif` - somente se também retornarem
**`false`** (veja [elseif](control-structures.elseif.md)).

> **Nota**:
> **Else pendurado**  
>
> Em caso de declarações `if`-`else` aninhadas,
> um `else` é sempre associado com o `if` mais próximo.
>
> ```
> <?php
> $a = false;
> $b = true;
> if ($a)
>     if ($b)
>         echo "b";
> else
>     echo "c";
> ```
>
> O exemplo acima produzirá:
>
> ```
>
> ```
>
> Apesar da indentação (o que não importa para o PHP), o `else`
> é associado com o `if ($b)`, então o exemplo não produz
> nenhuma saída. Embora seja válido confiar nesse comportamento, é recomendado evitá-lo
> usando chaves para resolver ambiguidades em potencial.

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
