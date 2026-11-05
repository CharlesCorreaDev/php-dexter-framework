# Tenta todas as funções __autoload() registradas para carregar a classe solicitada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.spl-autoload-call.php

---

# spl\_autoload\_call

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

spl\_autoload\_call — Tenta todas as funções \_\_autoload() registradas para carregar a classe solicitada

### Descrição

function **spl\_autoload\_call**([string](language.types.string.md) `$class`): [void](language.types.void.md)

Esta função pode ser usada para procurar manualmente por uma classe, interface, trait ou enumeração
usando as funções \_\_autoload registradas.

### Parâmetros

`class`
:   O nome da classe sendo procurada.

### Valor Retornado

Nenhum valor é retornado.

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
