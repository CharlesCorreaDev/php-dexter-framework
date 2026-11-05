# Índia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/timezones.indian.php

---

## Índia

**Índia**

|  |  |  |  |
| --- | --- | --- | --- |
| Indian/Antananarivo | Indian/Chagos | Indian/Christmas | Indian/Cocos |
| Indian/Comoro | Indian/Kerguelen | Indian/Mahe | Indian/Maldives |
| Indian/Mauritius | Indian/Mayotte | Indian/Reunion |  |

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
