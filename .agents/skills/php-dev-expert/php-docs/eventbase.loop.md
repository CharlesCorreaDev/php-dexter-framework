# Despacha eventos pendentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.loop.php

---

# EventBase::loop

(PECL event >= 1.2.6-beta)

EventBase::loop — Despacha eventos pendentes

### Descrição

public
function **EventBase::loop**(
[int](language.types.integer.md) `$flags`
 = ?): [bool](language.types.boolean.md)

Aguarda que os eventos se tornem ativos e executa suas funções de retorno.

**Aviso**

*NÃO*
destrua o
objeto
[EventBase](class.eventbase.md)
enquanto os recursos dos objetos
`Event`
associados não forem liberados. Caso contrário, isso levará a resultados
imprevisíveis!

### Parâmetros

`flags`
:   Sinalizadores opcionais. Uma das
    constantes
    `EventBase::LOOP_*`.
    Consulte as [constantes EventBase](class.eventbase.md#eventbase.constants).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBase::dispatch()](eventbase.dispatch.md) - Despacha eventos pendentes

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
