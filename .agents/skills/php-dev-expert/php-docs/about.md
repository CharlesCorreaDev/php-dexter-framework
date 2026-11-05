# Sobre o manual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/about.php

---

# Sobre o manual

## Índice

- [Formatos](about.formats.md)
- [Sobre as notas dos usuários](about.notes.md)
- [Como ler uma definição de função (protótipo)](about.prototypes.md)
- [Versões do PHP documentadas neste manual](about.phpversions.md)
- [Como encontrar mais informações sobre o PHP](about.more.md)
- [Como ajudar a melhorar a documentação](about.howtohelp.md)
- [Como os formatos são gerados](about.generate.md)
- [Traduções](about.translations.md)

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
