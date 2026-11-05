# Executa verificações de consistência interna (para depuração)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evloop.verify.php

---

# EvLoop::verify

(PECL ev >= 0.2.0)

EvLoop::verify — Executa verificações de consistência interna (para depuração)

### Descrição

public
function **EvLoop::verify**(): [void](language.types.void.md)

Executa verificações de consistência interna (para depuração
da *libev*)
e aborta o programa se alguma estrutura de dados estiver corrompida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [Ev::verify()](ev.verify.md) - Executa verificações de consistência interna (para depuração)

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
