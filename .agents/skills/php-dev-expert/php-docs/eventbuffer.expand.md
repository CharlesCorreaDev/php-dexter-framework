# Reserva espaço no buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.expand.php

---

# EventBuffer::expand

(PECL event >= 1.2.6-beta)

EventBuffer::expand — Reserva espaço no buffer

### Descrição

public
function **EventBuffer::expand**(
[int](language.types.integer.md) `$len`
): [bool](language.types.boolean.md)

Altera o último pedaço de memória no buffer ou adiciona um novo pedaço, de modo
que o buffer agora seja grande o suficiente para conter
`len`
bytes sem nenhuma alocação adicional.

### Parâmetros

`len`
:   O número de bytes a reservar para o buffer.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
