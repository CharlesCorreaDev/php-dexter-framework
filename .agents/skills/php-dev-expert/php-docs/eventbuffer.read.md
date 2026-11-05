# Lê dados de um evbuffer e drena os bytes lidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.read.php

---

# EventBuffer::read

(PECL event >= 1.6.0)

EventBuffer::read — Lê dados de um evbuffer e drena os bytes lidos

### Descrição

public
function **EventBuffer::read**(
[int](language.types.integer.md) `$max_bytes`
): [string](language.types.string.md)

Lê os primeiros
`max_bytes`
do buffer e drena os bytes lidos. Se mais
`max_bytes`
forem solicitados do que os disponíveis no buffer, ele extrai apenas tantos
bytes quantos estiverem disponíveis.

### Parâmetros

`max_bytes`
:   Número máximo de bytes a serem lidos do buffer.

### Valor Retornado

Retorna a string lida ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL event 1.6.0 | Renomeado **EventBuffer::read()**(o antigo nome do método) para **EventBuffer::read()**. **EventBuffer::read()** agora aceita apenas argumento `max_bytes`; retorna string em vez de inteiro. |

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
