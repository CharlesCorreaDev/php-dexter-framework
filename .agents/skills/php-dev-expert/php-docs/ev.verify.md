# Executa verificações de consistência interna (para depuração)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ev.verify.php

---

# Ev::verify

(PECL ev >= 0.2.0)

Ev::verify — Executa verificações de consistência interna (para depuração)

### Descrição

final
public
static
function **Ev::verify**(): [void](language.types.void.md)

Executa verificações de consistência interna (para depuração da
*libev*)
e aborta o programa se qualquer estrutura de dados estiver corrompida.

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
