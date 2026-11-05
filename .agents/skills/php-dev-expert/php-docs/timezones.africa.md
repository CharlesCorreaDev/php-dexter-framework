# África

> **Fonte / Source:** https://www.php.net/manual/pt_BR/timezones.africa.php

---

## África

**África**

|  |  |  |  |
| --- | --- | --- | --- |
| Africa/Abidjan | Africa/Accra | Africa/Addis\_Ababa | Africa/Algiers |
| Africa/Asmara | Africa/Bamako | Africa/Bangui | Africa/Banjul |
| Africa/Bissau | Africa/Blantyre | Africa/Brazzaville | Africa/Bujumbura |
| Africa/Cairo | Africa/Casablanca | Africa/Ceuta | Africa/Conakry |
| Africa/Dakar | Africa/Dar\_es\_Salaam | Africa/Djibouti | Africa/Douala |
| Africa/El\_Aaiun | Africa/Freetown | Africa/Gaborone | Africa/Harare |
| Africa/Johannesburg | Africa/Juba | Africa/Kampala | Africa/Khartoum |
| Africa/Kigali | Africa/Kinshasa | Africa/Lagos | Africa/Libreville |
| Africa/Lome | Africa/Luanda | Africa/Lubumbashi | Africa/Lusaka |
| Africa/Malabo | Africa/Maputo | Africa/Maseru | Africa/Mbabane |
| Africa/Mogadishu | Africa/Monrovia | Africa/Nairobi | Africa/Ndjamena |
| Africa/Niamey | Africa/Nouakchott | Africa/Ouagadougou | Africa/Porto-Novo |
| Africa/Sao\_Tome | Africa/Tripoli | Africa/Tunis | Africa/Windhoek |

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
