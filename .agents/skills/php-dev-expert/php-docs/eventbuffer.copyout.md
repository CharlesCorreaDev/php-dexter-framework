# Copia um número especificado de bytes da frente do buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.copyout.php

---

# EventBuffer::copyout

(PECL event >= 1.2.6-beta)

EventBuffer::copyout — Copia um número especificado de bytes da frente do buffer

### Descrição

public
function **EventBuffer::copyout**(
[string](language.types.string.md) `&$data`
, 
[int](language.types.integer.md) `$max_bytes`
): [int](language.types.integer.md)

Comporta-se exatamente como
[EventBuffer::read()](eventbuffer.read.md)
, mas não drena nenhum dado do buffer. Ou seja, ele copia os primeiros
`max_bytes`
bytes da frente do buffer para
`data`
. Se houver menos de
`max_bytes`
bytes disponíveis, a função copia todos os bytes que houver.

### Parâmetros

`data`
:   String de saída.

`max_bytes`
:   O número de bytes a serem copiados.

### Valor Retornado

Retorna o número de bytes copiados, ou
**`-1`**
em caso de falha.

### Veja também

- [EventBuffer::read()](eventbuffer.read.md) - Lê dados de um evbuffer e drena os bytes lidos
- [EventBuffer::appendFrom()](eventbuffer.appendfrom.md) - Move o número especificado de bytes de um buffer de origem para o
  fim do buffer atual

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
