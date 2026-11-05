# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/varnish.examples.php

---

# Examples

## Índice

- [Uso básico de VarnishAdmin](varnish.example.admin.md)
- [Uso básico de VarnishStat](varnish.example.stat.md)
- [Uso básico de VarnishLog](varnish.example.log.md)

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
