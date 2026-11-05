# Libera recursos alocados para esta base de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbase.free.php

---

# EventBase::free

(PECL event >= 1.10.0)

EventBase::free — Libera recursos alocados para esta base de eventos

### Descrição

public
function **EventBase::free**(): [void](language.types.void.md)

Desaloca recursos alocados pelo libevent para o objeto [EventBase](class.eventbase.md).

**Aviso**

O método
**EventBase::free()**
não destrói o objeto em si. Para destruir o
objeto completamente, chame
[unset()](function.unset.md)
ou atribua **`null`**.

Este método não desaloca ou desanexa nenhum dos eventos que estão
atualmente associados ao objeto [EventBase](class.eventbase.md), ou
fecha qualquer um de seus soquetes. Tenha cuidado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventBase::\_\_construct()](eventbase.construct.md) - Constrói objeto EventBase

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
