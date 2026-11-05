# Converte texto codificado em MIME para UTF-8

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-utf8.php

---

# imap\_utf8

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_utf8 — Converte texto codificado em MIME para UTF-8

### Descrição

function **imap\_utf8**([string](language.types.string.md) `$mime_encoded_text`): [string](language.types.string.md)

Converte o `mime_encoded_text` fornecido para
UTF-8, se o conjunto de caracteres declarado for conhecido pelo libc-client.
Caso contrário, o texto fornecido é decodificado, mas não convertido para UTF-8.

### Parâmetros

`mime_encoded_text`
:   Uma string codificada em MIME. O método de codificação MIME e a especificação UTF-8
    são descritos na [» RFC2047](https://datatracker.ietf.org/doc/html/rfc2047) e na [» RFC2044](https://datatracker.ietf.org/doc/html/rfc2044) respectivamente.

### Valor Retornado

Retorna a string decodificada, se possível convertida para UTF-8.

### Examples

**Exemplo #1 Uso básico de **imap\_utf8()****

```
<?php
echo imap_utf8("Johannes =?ISO-8859-1?Q?Schl=FCter?=");
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Johannes Schlüter
```

### Veja também

- [imap\_mime\_header\_decode()](function.imap-mime-header-decode.md) - Decodifica elementos do cabeçalho MIME

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
