# Despeja na saída informações sobre uma variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.var-dump.php

---

# var\_dump

(PHP 4, PHP 5, PHP 7, PHP 8)

var\_dump — Despeja na saída informações sobre uma variável

### Descrição

function **var\_dump**([mixed](language.types.mixed.md) `$value`, [mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

Esta função mostra na saída uma informação estruturada sobre uma ou mais
expressões, incluindo o tipo e o valor. Arrays e objetos são explorados
recursivamente com valores identados para mostrar a estrutura.

Todas as propriedades públicas, privadas e protegidas de objetos serão retornadas na
saída a menos que o objeto implemente um método
[\_\_debugInfo()](language.oop5.magic.md#language.oop5.magic.debuginfo).

**Dica**

Assim como qualquer coisa que envia
seu resultado diretamente para o navegador, as [funções de controle de saída](book.outcontrol.md) podem ser usadas para capturar
a saída desta função e salvá-la em uma
[string](language.types.string.md), por exemplo.

### Parâmetros

`value`
:   A expressão a ser despejada.

`values`
:   Mais expressões a despejar.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **var\_dump()****

```
<?php
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  array(3) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
    [2]=>
    string(1) "c"
  }
}
```

```
<?php

$b = 3.1;
$c = true;
var_dump($b,$c);

?>
```

O exemplo acima produzirá:

```
float(3.1)
bool(true)
```

### Veja também

- [print\_r()](function.print-r.md) - Exibe informação legível sobre uma variável
- [debug\_zval\_dump()](function.debug-zval-dump.md) - Exibe na saída uma representação em string de uma estrutura zval interna
- [var\_export()](function.var-export.md) - Mostra ou retorna uma representação string analisável de uma variável
- [\_\_debugInfo()](language.oop5.magic.md#language.oop5.magic.debuginfo)

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
