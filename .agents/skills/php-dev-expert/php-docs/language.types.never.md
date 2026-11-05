# Never

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.never.php

---

## Never

[never](language.types.never.md) é um tipo de retorno que indica que a função
não termina. Isso significa que a função chama [exit()](function.exit.md),
lança uma exceção ou é um loop infinito.
Portanto, não pode fazer parte de uma declaração de
[tipo de união](language.types.type-system.md#language.types.type-system.composite.union).
Disponível a partir do PHP 8.1.0.

[never](language.types.never.md) é, na linguagem da teoria dos tipos, o tipo inferior.
Isso significa que é o subtipo de todos os outros tipos e pode substituir qualquer
outro tipo de retorno durante a herança.

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
