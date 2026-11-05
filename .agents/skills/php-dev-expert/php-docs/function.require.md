# require

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.require.php

---

## require

(PHP 4, PHP 5, PHP 7, PHP 8)

A declaração `require` é idêntica à [include](function.include.md)
exceto que em caso de falha também produzirá uma exceção [Error](class.error.md)
(erro de nível **`E_COMPILE_ERROR`** antes do
PHP 8.0.0) enquanto que [include](function.include.md) apenas emitirá um alerta
(nível de erro **`E_WARNING`**).

Veja a documentação [include](function.include.md) para saber como isso funciona.

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
