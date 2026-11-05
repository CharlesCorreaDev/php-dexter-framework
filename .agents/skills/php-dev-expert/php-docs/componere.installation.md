# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/componere.installation.php

---

## Instalação

A fonte e os lançamentos do Componere estão disponíveis em
[» github](https://github.com/krakjoe/componere)

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
