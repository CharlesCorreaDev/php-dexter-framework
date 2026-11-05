# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaml.requirements.php

---

## Dependências

Esta extensão requer a [» biblioteca
LibYAML C](https://pyyaml.org/wiki/LibYAML) versão 0.1.0 ou superior para ser instalada.

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
