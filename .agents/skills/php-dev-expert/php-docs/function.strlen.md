# Retorna o tamanho de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strlen.php

---

# strlen

(PHP 4, PHP 5, PHP 7, PHP 8)

strlen — Retorna o tamanho de uma string

### Descrição

function **strlen**([string](language.types.string.md) `$string`): [int](language.types.integer.md)

Retorna o tamanho da `string` informada.

### Parâmetros

`string`
:   A [string](language.types.string.md) a ter seu tamanho medido.

### Valor Retornado

O tamanho da `string` em bytes.

### Examples

**Exemplo #1 Exemplo de **strlen()****

```
<?php
$str = 'abcdef';
echo strlen($str), PHP_EOL; // 6

$str = ' ab cd ';
echo strlen($str), PHP_EOL; // 7
?>
```

### Notas

> **Nota**:
>
> **strlen()** retorna o número de bytes em vez do número
> de caracteres de uma string.

### Veja também

- [count()](function.count.md) - Conta todos os elementos de um array ou de um objeto Countable
- [grapheme\_strlen()](function.grapheme-strlen.md) - Obtém o comprimento de uma string em unidade de grafema
- [iconv\_strlen()](function.iconv-strlen.md) - Retorna a contagem de caracteres da string
- [mb\_strlen()](function.mb-strlen.md) - Obtém o comprimento da string

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
