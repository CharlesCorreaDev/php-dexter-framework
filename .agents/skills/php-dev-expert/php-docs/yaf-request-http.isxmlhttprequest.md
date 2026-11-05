# Informa se a requisição é Ajax

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-http.isxmlhttprequest.php

---

# Yaf\_Request\_Http::isXmlHttpRequest

(Yaf >=1.0.0)

Yaf\_Request\_Http::isXmlHttpRequest — Informa se a requisição é Ajax

### Descrição

public function **Yaf\_Request\_Http::isXmlHttpRequest**(): [bool](language.types.boolean.md)

Verifica se a requisição é Ajax.
> **Nota**:
>
> Este método depende do cabeçalho HTTP\_X\_REQUESTED\_WITH da requisição. Algumas
> bibliotecas Javascript não definem este método ao fazer uma requisição Ajax.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um booleano.

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
