# Torna o evento não pendente e libera recursos alocados para este
  evento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.free.php

---

# Event::free

(PECL event >= 1.2.6-beta)

Event::free — Torna o evento não pendente e libera recursos alocados para este
evento

### Descrição

public
function **Event::free**(): [void](language.types.void.md)

Remove o evento da lista de eventos monitorados pelo libevent e
libera recursos alocados para o evento.

**Aviso**

O método
**Event::free()**
atualmente não destrói o objeto em si. Para destruir o
objeto completamente, chame
[unset()](function.unset.md)
ou atribua **`null`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Event::\_\_construct()](event.construct.md) - Constrói o objeto Event

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
