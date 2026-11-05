# Atlântico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/timezones.atlantic.php

---

## Atlântico

**Atlântico**

|  |  |  |  |
| --- | --- | --- | --- |
| Atlantic/Azores | Atlantic/Bermuda | Atlantic/Canary | Atlantic/Cape\_Verde |
| Atlantic/Faroe | Atlantic/Madeira | Atlantic/Reykjavik | Atlantic/South\_Georgia |
| Atlantic/St\_Helena | Atlantic/Stanley |  |  |

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
