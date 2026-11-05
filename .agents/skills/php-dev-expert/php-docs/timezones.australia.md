# Austrália

> **Fonte / Source:** https://www.php.net/manual/pt_BR/timezones.australia.php

---

## Austrália

**Austrália**

|  |  |  |  |
| --- | --- | --- | --- |
| Australia/Adelaide | Australia/Brisbane | Australia/Broken\_Hill | Australia/Darwin |
| Australia/Eucla | Australia/Hobart | Australia/Lindeman | Australia/Lord\_Howe |
| Australia/Melbourne | Australia/Perth | Australia/Sydney |  |

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
