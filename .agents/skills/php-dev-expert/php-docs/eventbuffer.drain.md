# Remove o número especificado de bytes da frente do buffer
  sem copiá-lo para lugar nenhum

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.drain.php

---

# EventBuffer::drain

(PECL event >= 1.2.6-beta)

EventBuffer::drain — Remove o número especificado de bytes da frente do buffer
sem copiá-lo para lugar nenhum

### Descrição

public
function **EventBuffer::drain**(
[int](language.types.integer.md) `$len`
): [bool](language.types.boolean.md)

Comporta-se como
[EventBuffer::read()](eventbuffer.read.md),
exceto que não copia os dados, somente remove-os da frente
do buffer.

### Parâmetros

`len`
:   O número de bytes a serem removidos do buffer.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
