# Decodifica dados no formato MIME base64

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.base64-decode.php

---

# base64\_decode

(PHP 4, PHP 5, PHP 7, PHP 8)

base64\_decode — Decodifica dados no formato MIME base64

### Descrição

function **base64\_decode**([string](language.types.string.md) `$string`, [bool](language.types.boolean.md) `$strict` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Decodifica uma `string` codificada em base64.

### Parâmetros

`string`
:   Os dados codificados.

`strict`
:   Se o parâmetro `strict` for definido como **`true`**,
    então a função **base64\_decode()** retornará
    **`false`** se a entrada contiver caracteres fora do alfabeto
    base64. Caso contrário, os caracteres inválidos serão descartados silenciosamente.

### Valor Retornado

Retorna os dados decodificados ou **`false`** em caso de falha. Os dados retornados podem ser
binários.

### Examples

**Exemplo #1 Exemplo **base64\_decode()****

```
<?php
$str = 'RXN0YSDDqSB1bWEgc3RyaW5nIGNvZGlmaWNhZGEu';
echo base64_decode($str);
?>
```

O exemplo acima produzirá:

```
Esta é uma string codificada.
```

### Veja também

- [base64\_encode()](function.base64-encode.md) - Codifica dados com MIME base64
- Seção 6.8 do [» RFC 2045](https://datatracker.ietf.org/doc/html/rfc2045)

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
