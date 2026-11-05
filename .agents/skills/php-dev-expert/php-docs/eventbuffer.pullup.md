# Lineariza os dados dentro do buffer
   e retorna seu conteúdo como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.pullup.php

---

# EventBuffer::pullup

(PECL event >= 1.2.6-beta)

EventBuffer::pullup — Lineariza os dados dentro do buffer
e retorna seu conteúdo como uma string

### Descrição

public
function **EventBuffer::pullup**(
[int](language.types.integer.md) `$size`
): [string](language.types.string.md)

"Lineariza" os primeiros
`size`
bytes do buffer, copiando ou movendo-os conforme necessário para garantir que
sejam todos contíguos e ocupem o mesmo pedaço de memória. Se size for
negativo, a função lineariza o buffer inteiro.

**Aviso**

Chamar
**EventBuffer::pullup()**
com um tamanho grande pode ser bem lento, já que potencialmente precisa copiar
todo o conteúdo do buffer.

### Parâmetros

`size`
:   O número de bytes necessários para serem contíguos dentro do buffer.

### Valor Retornado

Se
`size`
for maior que o número de bytes no buffer, a função retornará
**`null`**. Caso contrário,
**EventBuffer::pullup()**
retornará string.

### Veja também

- [EventBuffer::copyout()](eventbuffer.copyout.md) - Copia um número especificado de bytes da frente do buffer
- [EventBuffer::drain()](eventbuffer.drain.md) - Remove o número especificado de bytes da frente do buffer
  sem copiá-lo para lugar nenhum
- [EventBuffer::read()](eventbuffer.read.md) - Lê dados de um evbuffer e drena os bytes lidos
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
