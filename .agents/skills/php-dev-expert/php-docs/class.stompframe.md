# A classe StompFrame

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.stompframe.php

---

# A classe StompFrame

(PECL stomp >= 0.1.0)

## Introdução

Representa uma mensagem que foi enviada ou recebida de broker de mensagens compatível com Stomp.

## Resumo da classe

class **StompFrame**
{

/\* Propriedades \*/

public
[$command](class.stompframe.md#stompframe.props.command);

public
[$headers](class.stompframe.md#stompframe.props.headers);

public
[$body](class.stompframe.md#stompframe.props.body);

/\* Métodos \*/

function [\_\_construct](stompframe.construct.md)([string](language.types.string.md) `$command` = ?, [array](language.types.array.md) `$headers` = ?, [string](language.types.string.md) `$body` = ?)

}

## Propriedades

command
:   Comando de quadro.

headers
:   Cabeçalhos de quadro ([array](language.types.array.md)).

body
:   Corpo de quadro.

## Índice

- [StompFrame::\_\_construct](stompframe.construct.md) — Construtor

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
