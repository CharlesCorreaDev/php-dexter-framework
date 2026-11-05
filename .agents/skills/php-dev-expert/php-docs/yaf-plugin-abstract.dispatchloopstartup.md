# Gancho antes do loop de despacho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-plugin-abstract.dispatchloopstartup.php

---

# Yaf\_Plugin\_Abstract::dispatchLoopStartup

(Yaf >=1.0.0)

Yaf\_Plugin\_Abstract::dispatchLoopStartup — Gancho antes do loop de despacho

### Descrição

public function **Yaf\_Plugin\_Abstract::dispatchLoopStartup**([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`, [Yaf\_Response\_Abstract](class.yaf-response-abstract.md) `$response`): [void](language.types.void.md)

### Parâmetros

`request`

`response`

### Valor Retornado

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
