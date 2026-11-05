# Subtrai uma parte dos dados do buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.substr.php

---

# EventBuffer::substr

(PECL event >= 1.6.0)

EventBuffer::substr — Subtrai uma parte dos dados do buffer

### Descrição

public
function **EventBuffer::substr**(
[int](language.types.integer.md) `$start`
, 
[int](language.types.integer.md) `$length`
 = ?): [string](language.types.string.md)

Subtrai até
`length`
bytes dos dados do buffer começando na
posição
`start`.

### Parâmetros

`start`
:   A posição inicial dos dados a serem subtraídos.

`length`
:   Número máximo de bytes a serem subtraídos.

### Valor Retornado

Retorna os dados subtraídos como uma
[string](language.types.string.md)
em caso de sucesso, ou **`false`** em caso de falha.

### Veja também

- [EventBuffer::read()](eventbuffer.read.md) - Lê dados de um evbuffer e drena os bytes lidos

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
