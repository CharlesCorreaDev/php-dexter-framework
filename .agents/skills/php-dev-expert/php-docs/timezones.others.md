# Outros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/timezones.others.php

---

## Outros

**Aviso**

Não use nenhum dos fusos horários
listados aqui (exceto o UTC), pois eles existem apenas por motivos de compatibilidade com versões anteriores e podem ter comportamento errôneo.
Além disso, esses fusos horários podem ser removidos do banco de dados de fusos horários da IANA a qualquer momento.

**Aviso**

Se o aviso acima for desconsiderado, observe também que o banco de dados
de fusos horários da IANA que fornece suporte aos fusos horários do PHP usa sinais no estilo
POSIX, o que resulta nos fusos horários `Etc/GMT+n` e
`Etc/GMT-n` sendo invertidos do uso comum.

Por exemplo, o fuso horário 8 horas à frente do GMT usado na China e
na Austrália Ocidental (entre outros lugares) é, na verdade,
`Etc/GMT-8` neste banco de dados, e não
`Etc/GMT+8`, como normalmente esperado.

Novamente, é altamente recomendável que seja usado o fuso horário correto
para sua localização, como `Asia/Shanghai` ou
`Australia/Perth` nos exemplos acima.

**Outros**

|  |  |  |  |
| --- | --- | --- | --- |
| Africa/Asmera | Africa/Timbuktu | America/Argentina/ComodRivadavia | America/Atka |
| America/Buenos\_Aires | America/Catamarca | America/Coral\_Harbour | America/Cordoba |
| America/Ensenada | America/Fort\_Wayne | America/Godthab | America/Indianapolis |
| America/Jujuy | America/Knox\_IN | America/Louisville | America/Mendoza |
| America/Montreal | America/Nipigon | America/Pangnirtung | America/Porto\_Acre |
| America/Rainy\_River | America/Rosario | America/Santa\_Isabel | America/Shiprock |
| America/Thunder\_Bay | America/Virgin | America/Yellowknife | Antarctica/South\_Pole |
| Asia/Ashkhabad | Asia/Calcutta | Asia/Choibalsan | Asia/Chongqing |
| Asia/Chungking | Asia/Dacca | Asia/Harbin | Asia/Istanbul |
| Asia/Kashgar | Asia/Katmandu | Asia/Macao | Asia/Rangoon |
| Asia/Saigon | Asia/Tel\_Aviv | Asia/Thimbu | Asia/Ujung\_Pandang |
| Asia/Ulan\_Bator | Atlantic/Faeroe | Atlantic/Jan\_Mayen | Australia/ACT |
| Australia/Canberra | Australia/Currie | Australia/LHI | Australia/North |
| Australia/NSW | Australia/Queensland | Australia/South | Australia/Tasmania |
| Australia/Victoria | Australia/West | Australia/Yancowinna | Brazil/Acre |
| Brazil/DeNoronha | Brazil/East | Brazil/West | Canada/Atlantic |
| Canada/Central | Canada/Eastern | Canada/Mountain | Canada/Newfoundland |
| Canada/Pacific | Canada/Saskatchewan | Canada/Yukon | CET |
| Chile/Continental | Chile/EasterIsland | CST6CDT | Cuba |
| EET | Egypt | Eire | EST |
| EST5EDT | Etc/GMT | Etc/GMT+0 | Etc/GMT+1 |
| Etc/GMT+10 | Etc/GMT+11 | Etc/GMT+12 | Etc/GMT+2 |
| Etc/GMT+3 | Etc/GMT+4 | Etc/GMT+5 | Etc/GMT+6 |
| Etc/GMT+7 | Etc/GMT+8 | Etc/GMT+9 | Etc/GMT-0 |
| Etc/GMT-1 | Etc/GMT-10 | Etc/GMT-11 | Etc/GMT-12 |
| Etc/GMT-13 | Etc/GMT-14 | Etc/GMT-2 | Etc/GMT-3 |
| Etc/GMT-4 | Etc/GMT-5 | Etc/GMT-6 | Etc/GMT-7 |
| Etc/GMT-8 | Etc/GMT-9 | Etc/GMT0 | Etc/Greenwich |
| Etc/UCT | Etc/Universal | Etc/UTC | Etc/Zulu |
| Europe/Belfast | Europe/Kiev | Europe/Nicosia | Europe/Tiraspol |
| Europe/Uzhgorod | Europe/Zaporozhye | Factory | GB |
| GB-Eire | GMT | GMT+0 | GMT-0 |
| GMT0 | Greenwich | Hongkong | HST |
| Iceland | Iran | Israel | Jamaica |
| Japan | Kwajalein | Libya | MET |
| Mexico/BajaNorte | Mexico/BajaSur | Mexico/General | MST |
| MST7MDT | Navajo | NZ | NZ-CHAT |
| Pacific/Enderbury | Pacific/Johnston | Pacific/Ponape | Pacific/Samoa |
| Pacific/Truk | Pacific/Yap | Poland | Portugal |
| PRC | PST8PDT | ROC | ROK |
| Singapore | Turkey | UCT | Universal |
| US/Alaska | US/Aleutian | US/Arizona | US/Central |
| US/East-Indiana | US/Eastern | US/Hawaii | US/Indiana-Starke |
| US/Michigan | US/Mountain | US/Pacific | US/Samoa |
| UTC | W-SU | WET | Zulu |

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
