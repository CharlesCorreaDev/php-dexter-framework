# Codifica dados com MIME base64

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.base64-encode.php

---

# base64\_encode

(PHP 4, PHP 5, PHP 7, PHP 8)

base64\_encode — Codifica dados com MIME base64

### Descrição

function **base64\_encode**([string](language.types.string.md) `$string`): [string](language.types.string.md)

Codifica a dada `string` com base64.

Esta codificação é designada para que dados binários durem no transporte sobre
camadas de transorte que não são 8-bit clean, como mensagens de e-mail.

Os dados codificados em base64 ocupam cerca de 33% a mais de espaço do que os dados
originais.

### Parâmetros

`string`
:   Os dados a serem codificados.

### Valor Retornado

Os dados codificados, como uma string.

### Examples

**Exemplo #1 Exemplo **base64\_encode()****

```
<?php
$str = 'Esta é uma string codificada';
echo base64_encode($str);
?>
```

O exemplo acima produzirá:

```
RXN0YSDDqSB1bWEgc3RyaW5nIGNvZGlmaWNhZGEu
```

### Veja também

- [base64\_decode()](function.base64-decode.md) - Decodifica dados no formato MIME base64
- [chunk\_split()](function.chunk-split.md) - Divide uma string em pedaços menores
- [convert\_uuencode()](function.convert-uuencode.md) - Codifica uma string com uuencode
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
