# Constantes Predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.constants.predefined.php

---

## Constantes Predefinidas

O PHP fornece um grande número de [constantes predefinidas](reserved.constants.md) para qualquer
script executado. Muitas dessas constantes, no entanto, são criadas por
várias extensões e só estarão presentes quando essas extensões
estiverem disponíveis, seja por carregamento dinâmico ou porque foram
compiladas.

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
