# Extrai uma linha da frente do buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.readline.php

---

# EventBuffer::readLine

(PECL event >= 1.2.6-beta)

EventBuffer::readLine — Extrai uma linha da frente do buffer

### Descrição

public
function **EventBuffer::readLine**(
[int](language.types.integer.md) `$eol_style`
): [string](language.types.string.md)

Extrai uma linha da frente do buffer e a retorna em uma string recém
alocada. Se não houver uma linha inteira para ler, a função
retorna **`null`**. O terminador de linha não é incluído na string copiada.

### Parâmetros

`eol_style`
:   Uma das
    [constantes EventBuffer:EOL\_\*](class.eventbuffer.md#eventbuffer.constants).

### Valor Retornado

Em caso de sucesso, retorna a linha lida do buffer, caso contrário, **`null`**.

### Veja também

- [EventBuffer::copyout()](eventbuffer.copyout.md) - Copia um número especificado de bytes da frente do buffer
- [EventBuffer::drain()](eventbuffer.drain.md) - Remove o número especificado de bytes da frente do buffer
  sem copiá-lo para lugar nenhum
- [EventBuffer::pullup()](eventbuffer.pullup.md) - Lineariza os dados dentro do buffer
  e retorna seu conteúdo como uma string
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
