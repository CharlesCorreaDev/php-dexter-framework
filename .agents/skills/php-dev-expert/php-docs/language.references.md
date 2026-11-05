# Referências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.references.php

---

# Referências

## Índice

- [O que são referências](language.references.whatare.md)
- [O que as referências fazem](language.references.whatdo.md)
- [O que referências não são](language.references.arent.md)
- [Passagem por referência](language.references.pass.md)
- [Retornando referências](language.references.return.md)
- [Destruindo referências](language.references.unset.md)
- [Demonstrando referências](language.references.spot.md)

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
