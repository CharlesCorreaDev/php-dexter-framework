# Codifica uma URL de acordo com RFC 3986

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rawurlencode.php

---

# rawurlencode

(PHP 4, PHP 5, PHP 7, PHP 8)

rawurlencode — Codifica uma URL de acordo com RFC 3986

### Descrição

function **rawurlencode**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Codifica uma dada string de acordo com [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986).

### Parâmetros

`string`
:   A URL a ser codificada.

### Valor Retornado

Retorna uma string na qual todos os caracteres alfa-numericos com exceção de
`-_.~` são substituídos com um sinal de porcento
(`%`) seguido de dois digitos hexadecimais. Esta codificação
esta descrita na [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986) para proteger
caracteres de serem interpretados como delimitadores de URL, e para proteger
URLs de serem embaralhadas por transmissão em meios com conversões de
caracteres (como alguns sistemas de email).

### Examples

**Exemplo #1 Incluindo uma senha em uma URL de FTP**

```
<?php
echo '<a href="ftp://user:', rawurlencode('foo @+%/'),
     '@ftp.example.com/x.txt">';
?>
```

O exemplo acima produzirá:

```
<a href="ftp://user:foo%20%40%2B%25%2F@ftp.example.com/x.txt">
```

Ou, se você quiser passar informação no componente PATH\_INFO se uma URL:

**Exemplo #2 Exemplo 2 de **rawurlencode()****

```
<?php
echo '<a href="http://example.com/department_list_script/',
    rawurlencode('sales and marketing/Miami'), '">';
?>
```

O exemplo acima produzirá:

```
<a href="http://example.com/department_list_script/sales%20and%20marketing%2FMiami">
```

### Veja também

- [rawurldecode()](function.rawurldecode.md) - Decodifica uma URL
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
