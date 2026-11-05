# Decodifica elementos do cabeçalho MIME

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-mime-header-decode.php

---

# imap\_mime\_header\_decode

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_mime\_header\_decode — Decodifica elementos do cabeçalho MIME

### Descrição

function **imap\_mime\_header\_decode**([string](language.types.string.md) `$string`): [array](language.types.array.md)|[false](language.types.singleton.md)

Decodifica extensões de cabeçalho de mensagem MIME que não são texto ASCII (consulte [» RFC2047](https://datatracker.ietf.org/doc/html/rfc2047)).

### Parâmetros

`string`
:   O texto MIME

### Valor Retornado

Os elementos decodificados são retornados em um array de objetos, onde cada
objeto tem duas propriedades, `charset` e
`text`.

Se o elemento não foi codificado e, em outras palavras, está em
US-ASCII simples, a propriedade `charset` desse elemento é
definida como `default`.

A função retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **imap\_mime\_header\_decode()****

```
<?php
$text = "=?ISO-8859-1?Q?Keld_J=F8rn_Simonsen?= <keld@example.com>";

$elements = imap_mime_header_decode($text);
for ($i=0; $i<count($elements); $i++) {
    echo "Charset: {$elements[$i]->charset}\n";
    echo "Text: {$elements[$i]->text}\n\n";
}
?>
```

O exemplo acima produzirá:

```
Charset: ISO-8859-1
Text: Keld Jørn Simonsen

Charset: default
Text:  <keld@example.com>
```

No exemplo acima, teríamos dois elementos, enquanto o primeiro
elemento foi codificado anteriormente com ISO-8859-1, e o segundo
elemento seria US-ASCII simples.

### Veja também

- [imap\_utf8()](function.imap-utf8.md) - Converte texto codificado em MIME para UTF-8

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
