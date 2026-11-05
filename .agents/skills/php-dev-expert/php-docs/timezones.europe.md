# Europa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/timezones.europe.php

---

## Europa

**Europa**

|  |  |  |  |
| --- | --- | --- | --- |
| Europe/Amsterdam | Europe/Andorra | Europe/Astrakhan | Europe/Athens |
| Europe/Belgrade | Europe/Berlin | Europe/Bratislava | Europe/Brussels |
| Europe/Bucharest | Europe/Budapest | Europe/Busingen | Europe/Chisinau |
| Europe/Copenhagen | Europe/Dublin | Europe/Gibraltar | Europe/Guernsey |
| Europe/Helsinki | Europe/Isle\_of\_Man | Europe/Istanbul | Europe/Jersey |
| Europe/Kaliningrad | Europe/Kirov | Europe/Kyiv | Europe/Lisbon |
| Europe/Ljubljana | Europe/London | Europe/Luxembourg | Europe/Madrid |
| Europe/Malta | Europe/Mariehamn | Europe/Minsk | Europe/Monaco |
| Europe/Moscow | Europe/Oslo | Europe/Paris | Europe/Podgorica |
| Europe/Prague | Europe/Riga | Europe/Rome | Europe/Samara |
| Europe/San\_Marino | Europe/Sarajevo | Europe/Saratov | Europe/Simferopol |
| Europe/Skopje | Europe/Sofia | Europe/Stockholm | Europe/Tallinn |
| Europe/Tirane | Europe/Ulyanovsk | Europe/Vaduz | Europe/Vatican |
| Europe/Vienna | Europe/Vilnius | Europe/Volgograd | Europe/Warsaw |
| Europe/Zagreb | Europe/Zurich |  |  |

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
