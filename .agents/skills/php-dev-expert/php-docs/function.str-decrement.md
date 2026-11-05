# Decrementa uma string alfanumérica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-decrement.php

---

# str\_decrement

(PHP 8 >= 8.3.0)

str\_decrement — Decrementa uma string alfanumérica

### Descrição

function **str\_decrement**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna a `string` ASCII alfanumérica
decrementada.

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna a string ASCII alfanumérica decrementada.

### Erros/Exceções

Uma exceção [ValueError](class.valueerror.md) é lançada se
`string` estiver vazia.

Uma exceção [ValueError](class.valueerror.md) é lançada se
`string` não for uma string
ASCII alfanumérica.

Uma exceção [ValueError](class.valueerror.md) é lançada se
`string` não puder ser decrementada.
Por exemplo, `"A"` ou `"0"`.

### Examples

**Exemplo #1 Exemplo básico de **str\_decrement()****

```
<?php
$str = 'ABC';
var_dump(str_decrement($str));
?>
```

O exemplo acima produzirá:

```
string(3) "ABB"
```

**Exemplo #2 Exemplo de **str\_decrement()** "pegando emprestado"**

```
<?php
$str = 'ZA';
var_dump(str_decrement($str));

$str = 'AA';
var_dump(str_decrement($str));
?>
```

O exemplo acima produzirá:

```
string(2) "YZ"
string(1) "Z"
```

### Veja também

- [str\_increment()](function.str-increment.md) - Incrementa uma string alfanumérica

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
