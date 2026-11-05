# Grava o conteúdo do buffer em um arquivo ou soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.write.php

---

# EventBuffer::write

(PECL event >= 1.6.0)

EventBuffer::write — Grava o conteúdo do buffer em um arquivo ou soquete

### Descrição

public
function **EventBuffer::write**(
[mixed](language.types.mixed.md) `$fd`
, 
[int](language.types.integer.md) `$howmuch`
 = ?): [int](language.types.integer.md)

Grava o conteúdo do buffer em um descritor de arquivo. O buffer será
drenado após os bytes terem sido gravados com sucesso.

### Parâmetros

`fd`
:   Recurso de soquete, fluxo ou descritor numérico de arquivo normalmente
    associado a um soquete.

`howmuch`
:   O número máximo de bytes a serem gravados.

### Valor Retornado

Retorna o número de bytes gravados ou **`false`** em caso de erro.

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
