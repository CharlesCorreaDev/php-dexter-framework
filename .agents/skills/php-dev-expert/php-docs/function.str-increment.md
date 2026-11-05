# Incrementa uma string alfanumérica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-increment.php

---

# str\_increment

(PHP 8 >= 8.3.0)

str\_increment — Incrementa uma string alfanumérica

### Descrição

function **str\_increment**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna a `string` ASCII alfanumérica
incrementada.

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna a string ASCII alfanumérica incrementada.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada se
`string` estiver vazia.

Uma exceção [ValueError](class.valueerror.md) é lançada se
`string` não for uma string
ASCII alfanumérica.

### Examples

**Exemplo #1 Exemplo básico de **str\_increment()****

```
<?php
$str = 'ABC';
var_dump(str_increment($str));
?>
```

O exemplo acima produzirá:

```
string(3) "ABD"
```

**Exemplo #2 Exemplo de **str\_increment()** com "vai um"**

```
<?php
$str = 'DZ';
var_dump(str_increment($str));

$str = 'ZZ';
var_dump(str_increment($str));
?>
```

O exemplo acima produzirá:

```
string(2) "EA"
string(3) "AAA"
```

### Veja também

- [str\_decrement()](function.str-decrement.md) - Decrementa uma string alfanumérica

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
