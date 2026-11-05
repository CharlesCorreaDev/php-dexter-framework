# Antártica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/timezones.antarctica.php

---

## Antártica

**Antártica**

|  |  |  |  |
| --- | --- | --- | --- |
| Antarctica/Casey | Antarctica/Davis | Antarctica/DumontDUrville | Antarctica/Macquarie |
| Antarctica/Mawson | Antarctica/McMurdo | Antarctica/Palmer | Antarctica/Rothera |
| Antarctica/Syowa | Antarctica/Troll | Antarctica/Vostok |  |

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
