# Converte uma string de 8 bits para uma string Quoted-Printable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.quoted-printable-encode.php

---

# quoted\_printable\_encode

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

quoted\_printable\_encode — Converte uma string de 8 bits para uma string Quoted-Printable

### Descrição

function **quoted\_printable\_encode**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Retorna uma string Quoted-Printable de acordo com a [» RFC2045](https://datatracker.ietf.org/doc/html/rfc2045) seção 6.7.

Esta função é similar à [imap\_8bit()](function.imap-8bit.md), exceto que essa não
requer o módulo IMAP para funcionar.

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna a string codificada.

### Examples

**Exemplo #1 Exemplo de **quoted\_printable\_encode()****

```
<?php

$encoded = quoted_printable_encode('Möchten Sie ein paar Äpfel?');

var_dump($encoded);
var_dump(quoted_printable_decode($encoded));
?>
```

O exemplo acima produzirá:

```
string(37) "M=C3=B6chten Sie ein paar =C3=84pfel?"
string(29) "Möchten Sie ein paar Äpfel?"
```

### Veja também

- [quoted\_printable\_decode()](function.quoted-printable-decode.md) - Converte uma string Quoted-Printable para uma string de 8 bits
- [iconv\_mime\_encode()](function.iconv-mime-encode.md) - Compõe um campo de cabeçalho MIME

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
