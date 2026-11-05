# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xhprof.requirements.php

---

## Dependências

Embora não seja mandatória, o xhprof inclui uma interface escrita em PHP.
Ela é usada para salvar e exibir os dados perfilados de forma utilizável, sendo a visualização
feita por meio de um navegador web. Portanto, um servidor web com PHP provavelmente tornará a
experiência com o xhprof mais útil.

Há também uma bifurcação da interface GUI em
[» https://github.com/preinheimer/xhprof](https://github.com/preinheimer/xhprof)

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
