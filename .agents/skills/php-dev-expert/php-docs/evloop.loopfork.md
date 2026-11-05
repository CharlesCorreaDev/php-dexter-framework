# Deve ser chamado após um fork

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.loopfork.php

---

# EvLoop::loopFork

(PECL ev >= 0.2.0)

EvLoop::loopFork — Deve ser chamado após um fork

### Descrição

public
function **EvLoop::loopFork**(): [void](language.types.void.md)

Precisa ser chamado após um
*fork*
no filho, antes de entrar ou continuar o laço de eventos. Uma alternativa
é usar
**`Ev::FLAG_FORKCHECK`**
que chama esta função automaticamente, com um pouco de perda de desempenho (refira-se
à
[» documentação
da libev](http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#FUNCTIONS_CONTROLLING_EVENT_LOOPS)).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
