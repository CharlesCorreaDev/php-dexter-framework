# Pacífico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/timezones.pacific.php

---

## Pacífico

**Pacífico**

|  |  |  |  |
| --- | --- | --- | --- |
| Pacific/Apia | Pacific/Auckland | Pacific/Bougainville | Pacific/Chatham |
| Pacific/Chuuk | Pacific/Easter | Pacific/Efate | Pacific/Fakaofo |
| Pacific/Fiji | Pacific/Funafuti | Pacific/Galapagos | Pacific/Gambier |
| Pacific/Guadalcanal | Pacific/Guam | Pacific/Honolulu | Pacific/Kanton |
| Pacific/Kiritimati | Pacific/Kosrae | Pacific/Kwajalein | Pacific/Majuro |
| Pacific/Marquesas | Pacific/Midway | Pacific/Nauru | Pacific/Niue |
| Pacific/Norfolk | Pacific/Noumea | Pacific/Pago\_Pago | Pacific/Palau |
| Pacific/Pitcairn | Pacific/Pohnpei | Pacific/Port\_Moresby | Pacific/Rarotonga |
| Pacific/Saipan | Pacific/Tahiti | Pacific/Tarawa | Pacific/Tongatapu |
| Pacific/Wake | Pacific/Wallis |  |  |

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
