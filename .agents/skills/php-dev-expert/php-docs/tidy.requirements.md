# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.requirements.php

---

## Dependências

Para utilização do Tidy, a libtidy precisa estar instalada, ela está disponível
na [» página do tidy](https://tidy.sourceforge.net/).
A partir do PHP 7.1.0, o sucessor compatível com HTML5
[» libtidy5](https://www.html-tidy.org/) pode ser usado alternativamente.
A partir do PHP 7.3.0, outra opção é usar [» libtidyp](https://github.com/petdance/tidyp).

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
