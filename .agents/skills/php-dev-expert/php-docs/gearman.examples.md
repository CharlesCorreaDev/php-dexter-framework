# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearman.examples.php

---

# Examples

## Índice

- [Uso básico](gearman.examples-reverse.md)
- [Cliente e trabalhador básicos do Gearman, histórico](gearman.examples-reverse-bg.md)
- [Cliente e trabalhador básicos do Gearman, enviando tarefas](gearman.examples-reverse-task.md)

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
