# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmldiff.requirements.php

---

## Dependências

libdiffmark - versão 0.10 está incluída na extensão. Se o diffmark estiver disponível nos pacotes do seu sistema, seu uso é altamente recomendado.

extensão libxml

extensão DOM

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
