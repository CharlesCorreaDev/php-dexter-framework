# Decodifica uma URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rawurldecode.php

---

# rawurldecode

(PHP 4, PHP 5, PHP 7, PHP 8)

rawurldecode — Decodifica uma URL

### Descrição

function **rawurldecode**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna uma string em que as sequências com o sinal porcento
(`%`) seguida por dois dígitos hexadecimais são substituídas
pelos caracteres correspondentes.

### Parâmetros

`string`
:   A URL a ser decodificada.

### Valor Retornado

Retorna a URL decodificada, como uma string.

### Examples

**Exemplo #1 Exemplo da **rawurldecode()****

```
<?php

echo rawurldecode('foo%20bar%40baz'); // foo bar@baz

?>
```

### Notas

> **Nota**:
>
> **rawurldecode()** não decodifica os sinais de adição ('+')
> em espaços. A função [urldecode()](function.urldecode.md) faz isto.

### Veja também

- [rawurlencode()](function.rawurlencode.md) - Codifica uma URL de acordo com RFC 3986
- [urldecode()](function.urldecode.md) - Decodifica uma URL codificada
- [urlencode()](function.urlencode.md) - Codifica uma string no formato URL
- [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986)

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
