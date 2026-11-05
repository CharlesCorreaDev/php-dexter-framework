# Move o número especificado de bytes de um buffer de origem para o
   fim do buffer atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.appendfrom.php

---

# EventBuffer::appendFrom

(PECL event >= 1.6.0)

EventBuffer::appendFrom — Move o número especificado de bytes de um buffer de origem para o
fim do buffer atual

### Descrição

public
function **EventBuffer::appendFrom**(
[EventBuffer](class.eventbuffer.md) `$buf`
, 
[int](language.types.integer.md) `$len`
): [int](language.types.integer.md)

Move o número especificado de bytes de um buffer de origem para o fim do
buffer atual. Se houver menos número de bytes, ele move todos os bytes
disponíveis do buffer de origem.

### Parâmetros

`buf`
:   Buffer de origem.

`len`

### Valor Retornado

Retorna o número de bytes lidos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL event 1.6.0 | Renomeado **EventBuffer::appendFrom()**(o antigo nome do método) para **EventBuffer::appendFrom()**. |

### Veja também

- [EventBuffer::copyout()](eventbuffer.copyout.md) - Copia um número especificado de bytes da frente do buffer
- [EventBuffer::drain()](eventbuffer.drain.md) - Remove o número especificado de bytes da frente do buffer
  sem copiá-lo para lugar nenhum
- [EventBuffer::pullup()](eventbuffer.pullup.md) - Lineariza os dados dentro do buffer
  e retorna seu conteúdo como uma string
- [EventBuffer::readLine()](eventbuffer.readline.md) - Extrai uma linha da frente do buffer
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
