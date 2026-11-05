# Inicia a Yaf_Application

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-application.run.php

---

# Yaf\_Application::run

(Yaf >=1.0.0)

Yaf\_Application::run — Inicia a Yaf\_Application

### Descrição

public function **Yaf\_Application::run**(): [void](language.types.void.md)

Executa uma Yaf\_Application, permite que a Yaf\_Application aceite e roteie
uma requisição, despache a um controlador ou a uma ação e prepare uma resposta. Finalmente,
retorna a resposta ao cliente.

### Parâmetros

Esta função não possui parâmetros.

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
