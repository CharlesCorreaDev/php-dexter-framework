# Funcionalidades descontinuadas no PHP 7.1.x

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration71.deprecated.php

---

## Funcionalidades descontinuadas no PHP 7.1.x

### ext/mcrypt

A extensão mcrypt está abandonada por aproximadamente uma década agora, e sempre
foi significativamente complexa de se usar. Foi portanto descontinuada em favor do
OpenSSL, e será removida do núcleo e inserida no PECL a partir do PHP 7.2.

### Opção de avaliação para [mb\_ereg\_replace()](function.mb-ereg-replace.md) e [mb\_eregi\_replace()](function.mb-eregi-replace.md)

O modificador de padrão `e` foi descontinuado para as funções
[mb\_ereg\_replace()](function.mb-ereg-replace.md) e
[mb\_eregi\_replace()](function.mb-eregi-replace.md).

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
