# Impede que chamadas que modificam um buffer de eventos sejam bem-sucedidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.freeze.php

---

# EventBuffer::freeze

(PECL event >= 1.2.6-beta)

EventBuffer::freeze — Impede que chamadas que modificam um buffer de eventos sejam bem-sucedidas

### Descrição

public
function **EventBuffer::freeze**(
[bool](language.types.boolean.md) `$at_front`
): [bool](language.types.boolean.md)

Impede que chamadas que modificam um buffer de eventos sejam bem-sucedidas.

### Parâmetros

`at_front`
:   Se deseja desabilitar alterações no início ou no fim do buffer.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBuffer::unfreeze()](eventbuffer.unfreeze.md) - Reativa chamadas que modificam um buffer de eventos

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
