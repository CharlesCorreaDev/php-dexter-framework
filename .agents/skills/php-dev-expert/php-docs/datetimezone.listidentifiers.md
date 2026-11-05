# Retorna um array numericamente indexado contendo todos os indenticadores de fuso horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimezone.listidentifiers.php

---

# DateTimeZone::listIdentifiers

# timezone\_identifiers\_list

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

DateTimeZone::listIdentifiers -- timezone\_identifiers\_list — Retorna um array numericamente indexado contendo todos os indenticadores de fuso horário

### Descrição

Estilo orientado a objetos

public static function **DateTimeZone::listIdentifiers**([int](language.types.integer.md) `$timezoneGroup` = **`DateTimeZone::ALL`**, [?](language.types.null.md)[string](language.types.string.md) `$countryCode` = **`null`**): [array](language.types.array.md)

Estilo procedural

function [timezone\_identifiers\_list](function.timezone-identifiers-list.md)([int](language.types.integer.md) `$timezoneGroup` = **`DateTimeZone::ALL`**, [?](language.types.null.md)[string](language.types.string.md) `$countryCode` = **`null`**): [array](language.types.array.md)

Retorna a lista de [» identificadores de fuso horário IANA](https://en.wikipedia.org/wiki/Tz_database#Names_of_timezones).

> **Nota**:
>
> É possível identificar o fuso horário do cliente (navegador) com JavaScript usando
> [» Intl.DateTimeFormat](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Intl/DateTimeFormat/resolvedOptions#timezone) ou
> [» Temporal.ZonedDateTime](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Temporal/ZonedDateTime#time_zones_and_offsets).

### Parâmetros

`timezoneGroup`
:   Uma das constantes da classe [DateTimeZone](class.datetimezone.md) (ou uma combinação).

`countryCode`
:   Um código de país, com duas letras (maiúsculas), compatível com a ISO 3166-1.

    > **Nota**:
    >
    > Esta opção é utilizada somente quando o parâmetro `timezoneGroup` é configurado como
    > **`DateTimeZone::PER_COUNTRY`**.

### Valor Retornado

Retorna o array de identificadores de fuso horário. Apenas itens não desatualizados são
retornados. Para obter todos, incluindo identificadores desatualizados, use
`DateTimeZone::ALL_WITH_BC` no valor de
`timezoneGroup`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Antes desta versão, **`false`** era retornado em caso de falha. |
| 7.1.0 | O parâmetro `countryCode` agora pode ser nulo. |

### Examples

**Exemplo #1 Listando identificadores com comentários de localização**

```
<?php
$identifiers = DateTimeZone::listIdentifiers(DateTimeZone::ALL);

foreach ($identifiers as $tzid) {
    $tz = new DateTimeZone($tzid);
    $comments = $tz->getLocation()['comments'];
    echo $tzid . " (" . ($comments ?: 'Região inteira') . ")\n";
}
```

O exemplo acima produzirá
algo semelhante a:

```
America/Antigua (Região inteira)
America/Araguaina (Tocantins)
America/Argentina/Buenos_Aires (Buenos Aires (BA, CF))
America/Argentina/Catamarca (Catamarca (CT), Chubut (CH))
America/Argentina/Cordoba (Argentina (most areas: CB, CC, CN, ER, FM, MN, SE, SF))
// (Saída truncada devido ao tamanho)
```

**Exemplo #2 Listando identificadores para uma região específica**

```
<?php
$timezone_identifiers = DateTimeZone::listIdentifiers( DateTimeZone::ASIA );
for ($i=0; $i < 5; $i++) {
    echo "$timezone_identifiers[$i]\n";
}
```

O exemplo acima produzirá
algo semelhante a:

```
Asia/Aden
Asia/Almaty
Asia/Amman
Asia/Anadyr
Asia/Aqtau
```

**Exemplo #3 Listando identificadores para múltiplas regiões**

```
<?php
$timezone_identifiers = DateTimeZone::listIdentifiers( DateTimeZone::ASIA | DateTimeZone::PACIFIC );
echo join( ', ', $timezone_identifiers );
```

O exemplo acima produzirá
algo semelhante a:

```
Asia/Aden, Asia/Almaty, Asia/Amman, Asia/Anadyr, Asia/Aqtau, Asia/Aqtobe,
Asia/Ashgabat, Asia/Atyrau, Asia/Baghdad, Asia/Bahrain, Asia/Baku,
Asia/Bangkok, Asia/Barnaul, Asia/Beirut, Asia/Bishkek, Asia/Brunei,
Asia/Chita, Asia/Choibalsan, Asia/Colombo, Asia/Damascus, Asia/Dhaka,
Asia/Dili, Asia/Dubai, Asia/Dushanbe, Asia/Famagusta, Asia/Gaza, Asia/Hebron,
Asia/Ho_Chi_Minh, Asia/Hong_Kong, Asia/Hovd, Asia/Irkutsk, Asia/Jakarta,
Asia/Jayapura, Asia/Jerusalem, Asia/Kabul, Asia/Kamchatka, Asia/Karachi,
Asia/Kathmandu, Asia/Khandyga, Asia/Kolkata, Asia/Krasnoyarsk,
Asia/Kuala_Lumpur, Asia/Kuching, Asia/Kuwait, Asia/Macau, Asia/Magadan,
Asia/Makassar, Asia/Manila, Asia/Muscat, Asia/Nicosia, Asia/Novokuznetsk,
Asia/Novosibirsk, Asia/Omsk, Asia/Oral, Asia/Phnom_Penh, Asia/Pontianak,
Asia/Pyongyang, Asia/Qatar, Asia/Qostanay, Asia/Qyzylorda, Asia/Riyadh,
Asia/Sakhalin, Asia/Samarkand, Asia/Seoul, Asia/Shanghai, Asia/Singapore,
Asia/Srednekolymsk, Asia/Taipei, Asia/Tashkent, Asia/Tbilisi, Asia/Tehran,
Asia/Thimphu, Asia/Tokyo, Asia/Tomsk, Asia/Ulaanbaatar, Asia/Urumqi,
Asia/Ust-Nera, Asia/Vientiane, Asia/Vladivostok, Asia/Yakutsk, Asia/Yangon,
Asia/Yekaterinburg, Asia/Yerevan, Pacific/Apia, Pacific/Auckland,
Pacific/Bougainville, Pacific/Chatham, Pacific/Chuuk, Pacific/Easter,
Pacific/Efate, Pacific/Fakaofo, Pacific/Fiji, Pacific/Funafuti,
Pacific/Galapagos, Pacific/Gambier, Pacific/Guadalcanal, Pacific/Guam,
Pacific/Honolulu, Pacific/Kanton, Pacific/Kiritimati, Pacific/Kosrae,
Pacific/Kwajalein, Pacific/Majuro, Pacific/Marquesas, Pacific/Midway,
Pacific/Nauru, Pacific/Niue, Pacific/Norfolk, Pacific/Noumea,
Pacific/Pago_Pago, Pacific/Palau, Pacific/Pitcairn, Pacific/Pohnpei,
Pacific/Port_Moresby, Pacific/Rarotonga, Pacific/Saipan, Pacific/Tahiti,
Pacific/Tarawa, Pacific/Tongatapu, Pacific/Wake, Pacific/Wallis
```

**Exemplo #4 Listando identificadores para um único país**

```
<?php
$timezone_identifiers = DateTimeZone::listIdentifiers( DateTimeZone::PER_COUNTRY, "UA" );
foreach( $timezone_identifiers as $identifier ) {
    echo "$identifier\n";
}
```

O exemplo acima produzirá
algo semelhante a:

```
Europe/Kyiv
Europe/Simferopol
Europe/Uzhgorod
Europe/Zaporozhye
```

### Veja também

- [timezone\_abbreviations\_list()](function.timezone-abbreviations-list.md) - Sinônimo de DateTimeZone::listAbbreviations

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
