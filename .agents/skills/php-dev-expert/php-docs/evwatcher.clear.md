# Limpa o status pendente do observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evwatcher.clear.php

---

# EvWatcher::clear

(PECL ev >= 0.2.0)

EvWatcher::clear — Limpa o status pendente do observador

### Descrição

public
function **EvWatcher::clear**(): [int](language.types.integer.md)

Se o observador estiver pendente, este método limpa seu
status pending
e retorna seu bit
revents
definido (como se sua função de retorno tivesse sido invocada).
Se o observador não estiver pendente,
ele não faz nada e retorna `0`.

Às vezes, pode ser útil "pesquisar" um observador em vez de esperar que sua
função de retorno seja invocada, o que pode ser feito com esta função.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Caso o observador esteja pendente, retorna
o bit revents
definido como se a
[função de retorno do observador](ev.watcher-callbacks.md)
tivesse sido invocada. Caso contrário,
retorna `0`.

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
