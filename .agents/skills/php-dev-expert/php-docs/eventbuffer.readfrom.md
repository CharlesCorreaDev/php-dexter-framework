# Lê dados de um arquivo no final do buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.readfrom.php

---

# EventBuffer::readFrom

(PECL event >= 1.7.0)

EventBuffer::readFrom — Lê dados de um arquivo no final do buffer

### Descrição

public
function [EventBuffer::read](eventbuffer.read.md)(
[mixed](language.types.mixed.md) `$fd`
, 
[int](language.types.integer.md) `$howmuch`
): [int](language.types.integer.md)

Lê dados do arquivo especificado por
`fd`
no final do buffer.

### Parâmetros

`fd`
:   Recurso de soquete, fluxo ou descritor numérico de arquivo.

`howmuch`
:   Número máximo de bytes a serem lidos.

### Valor Retornado

Retorna o número de bytes lidos ou **`false`** em caso de falha.

### Veja também

- [EventBuffer::copyout()](eventbuffer.copyout.md) - Copia um número especificado de bytes da frente do buffer
- [EventBuffer::drain()](eventbuffer.drain.md) - Remove o número especificado de bytes da frente do buffer
  sem copiá-lo para lugar nenhum
- [EventBuffer::pullup()](eventbuffer.pullup.md) - Lineariza os dados dentro do buffer
  e retorna seu conteúdo como uma string
- [EventBuffer::readLine()](eventbuffer.readline.md) - Extrai uma linha da frente do buffer
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
