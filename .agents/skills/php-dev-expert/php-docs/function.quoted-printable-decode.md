# Converte uma string Quoted-Printable para uma string de 8 bits

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.quoted-printable-decode.php

---

# quoted\_printable\_decode

(PHP 4, PHP 5, PHP 7, PHP 8)

quoted\_printable\_decode — Converte uma string Quoted-Printable para uma string de 8 bits

### Descrição

function **quoted\_printable\_decode**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Esta função retorna uma string binária de 8 bits correspondendo à string
Quoted-Printable decodificada (de acordo com a [» RFC2045](https://datatracker.ietf.org/doc/html/rfc2045) seção 6.7, e não à [» RFC2821](https://datatracker.ietf.org/doc/html/rfc2821) seção 4.5.2, de forma que pontos adicionais
não são removidos do início de uma linha).

Esta função é similar à [imap\_qprint()](function.imap-qprint.md), exceto que essa
não requer o módulo IMAP para funcionar.

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna uma string binária de 8 bits.

### Examples

**Exemplo #1 Exemplo de **quoted\_printable\_decode()****

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

- [quoted\_printable\_encode()](function.quoted-printable-encode.md) - Converte uma string de 8 bits para uma string Quoted-Printable

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
