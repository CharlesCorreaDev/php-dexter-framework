# A classe Gender\Gender

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.gender.php

---

# A classe Gender\Gender

(PECL gender >= 0.6.0)

## Introdução

## Resumo da classe

class **Gender\Gender**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
[IS\_FEMALE](class.gender.md#gender-gender.constants.is-female) = 70;

const
[int](language.types.integer.md)
[IS\_MOSTLY\_FEMALE](class.gender.md#gender-gender.constants.is-mostly-female) = 102;

const
[int](language.types.integer.md)
[IS\_MALE](class.gender.md#gender-gender.constants.is-male) = 77;

const
[int](language.types.integer.md)
[IS\_MOSTLY\_MALE](class.gender.md#gender-gender.constants.is-mostly-male) = 109;

const
[int](language.types.integer.md)
[IS\_UNISEX\_NAME](class.gender.md#gender-gender.constants.is-unisex-name) = 63;

const
[int](language.types.integer.md)
[IS\_A\_COUPLE](class.gender.md#gender-gender.constants.is-a-couple) = 67;

const
[int](language.types.integer.md)
[NAME\_NOT\_FOUND](class.gender.md#gender-gender.constants.name-not-found) = 32;

const
[int](language.types.integer.md)
[ERROR\_IN\_NAME](class.gender.md#gender-gender.constants.error-in-name) = 69;

const
[int](language.types.integer.md)
[ANY\_COUNTRY](class.gender.md#gender-gender.constants.any-country) = 0;

const
[int](language.types.integer.md)
[BRITAIN](class.gender.md#gender-gender.constants.britain) = 1;

const
[int](language.types.integer.md)
[IRELAND](class.gender.md#gender-gender.constants.ireland) = 2;

const
[int](language.types.integer.md)
[USA](class.gender.md#gender-gender.constants.usa) = 3;

const
[int](language.types.integer.md)
[SPAIN](class.gender.md#gender-gender.constants.spain) = 4;

const
[int](language.types.integer.md)
[PORTUGAL](class.gender.md#gender-gender.constants.portugal) = 5;

const
[int](language.types.integer.md)
[ITALY](class.gender.md#gender-gender.constants.italy) = 6;

const
[int](language.types.integer.md)
[MALTA](class.gender.md#gender-gender.constants.malta) = 7;

const
[int](language.types.integer.md)
[FRANCE](class.gender.md#gender-gender.constants.france) = 8;

const
[int](language.types.integer.md)
[BELGIUM](class.gender.md#gender-gender.constants.belgium) = 9;

const
[int](language.types.integer.md)
[LUXEMBOURG](class.gender.md#gender-gender.constants.luxembourg) = 10;

const
[int](language.types.integer.md)
[NETHERLANDS](class.gender.md#gender-gender.constants.netherlands) = 11;

const
[int](language.types.integer.md)
[GERMANY](class.gender.md#gender-gender.constants.germany) = 12;

const
[int](language.types.integer.md)
[EAST\_FRISIA](class.gender.md#gender-gender.constants.east-frisia) = 13;

const
[int](language.types.integer.md)
[AUSTRIA](class.gender.md#gender-gender.constants.austria) = 14;

const
[int](language.types.integer.md)
[SWISS](class.gender.md#gender-gender.constants.swiss) = 15;

const
[int](language.types.integer.md)
[ICELAND](class.gender.md#gender-gender.constants.iceland) = 16;

const
[int](language.types.integer.md)
[DENMARK](class.gender.md#gender-gender.constants.denmark) = 17;

const
[int](language.types.integer.md)
[NORWAY](class.gender.md#gender-gender.constants.norway) = 18;

const
[int](language.types.integer.md)
[SWEDEN](class.gender.md#gender-gender.constants.sweden) = 19;

const
[int](language.types.integer.md)
[FINLAND](class.gender.md#gender-gender.constants.finland) = 20;

const
[int](language.types.integer.md)
[ESTONIA](class.gender.md#gender-gender.constants.estonia) = 21;

const
[int](language.types.integer.md)
[LATVIA](class.gender.md#gender-gender.constants.latvia) = 22;

const
[int](language.types.integer.md)
[LITHUANIA](class.gender.md#gender-gender.constants.lithuania) = 23;

const
[int](language.types.integer.md)
[POLAND](class.gender.md#gender-gender.constants.poland) = 24;

const
[int](language.types.integer.md)
[CZECH\_REP](class.gender.md#gender-gender.constants.czech-rep) = 25;

const
[int](language.types.integer.md)
[SLOVAKIA](class.gender.md#gender-gender.constants.slovakia) = 26;

const
[int](language.types.integer.md)
[HUNGARY](class.gender.md#gender-gender.constants.hungary) = 27;

const
[int](language.types.integer.md)
[ROMANIA](class.gender.md#gender-gender.constants.romania) = 28;

const
[int](language.types.integer.md)
[BULGARIA](class.gender.md#gender-gender.constants.bulgaria) = 29;

const
[int](language.types.integer.md)
[BOSNIA](class.gender.md#gender-gender.constants.bosnia) = 30;

const
[int](language.types.integer.md)
[CROATIA](class.gender.md#gender-gender.constants.croatia) = 31;

const
[int](language.types.integer.md)
[KOSOVO](class.gender.md#gender-gender.constants.kosovo) = 32;

const
[int](language.types.integer.md)
[MACEDONIA](class.gender.md#gender-gender.constants.macedonia) = 33;

const
[int](language.types.integer.md)
[MONTENEGRO](class.gender.md#gender-gender.constants.montenegro) = 34;

const
[int](language.types.integer.md)
[SERBIA](class.gender.md#gender-gender.constants.serbia) = 35;

const
[int](language.types.integer.md)
[SLOVENIA](class.gender.md#gender-gender.constants.slovenia) = 36;

const
[int](language.types.integer.md)
[ALBANIA](class.gender.md#gender-gender.constants.albania) = 37;

const
[int](language.types.integer.md)
[GREECE](class.gender.md#gender-gender.constants.greece) = 38;

const
[int](language.types.integer.md)
[RUSSIA](class.gender.md#gender-gender.constants.russia) = 39;

const
[int](language.types.integer.md)
[BELARUS](class.gender.md#gender-gender.constants.belarus) = 40;

const
[int](language.types.integer.md)
[MOLDOVA](class.gender.md#gender-gender.constants.moldova) = 41;

const
[int](language.types.integer.md)
[UKRAINE](class.gender.md#gender-gender.constants.ukraine) = 42;

const
[int](language.types.integer.md)
[ARMENIA](class.gender.md#gender-gender.constants.armenia) = 43;

const
[int](language.types.integer.md)
[AZERBAIJAN](class.gender.md#gender-gender.constants.azerbaijan) = 44;

const
[int](language.types.integer.md)
[GEORGIA](class.gender.md#gender-gender.constants.georgia) = 45;

const
[int](language.types.integer.md)
[KAZAKH\_UZBEK](class.gender.md#gender-gender.constants.kazakh-uzbek) = 46;

const
[int](language.types.integer.md)
[TURKEY](class.gender.md#gender-gender.constants.turkey) = 47;

const
[int](language.types.integer.md)
[ARABIA](class.gender.md#gender-gender.constants.arabia) = 48;

const
[int](language.types.integer.md)
[ISRAEL](class.gender.md#gender-gender.constants.israel) = 49;

const
[int](language.types.integer.md)
[CHINA](class.gender.md#gender-gender.constants.china) = 50;

const
[int](language.types.integer.md)
[INDIA](class.gender.md#gender-gender.constants.india) = 51;

const
[int](language.types.integer.md)
[JAPAN](class.gender.md#gender-gender.constants.japan) = 52;

const
[int](language.types.integer.md)
[KOREA](class.gender.md#gender-gender.constants.korea) = 53;

/\* Métodos \*/

public function [\_\_construct](gender-gender.construct.md)([string](language.types.string.md) `$dsn` = ?)

public function [connect](gender-gender.connect.md)([string](language.types.string.md) `$dsn`): [bool](language.types.boolean.md)

public function [country](gender-gender.country.md)([int](language.types.integer.md) `$country`): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [get](gender-gender.get.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$country` = ?): [int](language.types.integer.md)

public function [isNick](gender-gender.isnick.md)([string](language.types.string.md) `$name0`, [string](language.types.string.md) `$name1`, [int](language.types.integer.md) `$country` = ?): [array](language.types.array.md)

public function [similarNames](gender-gender.similarnames.md)([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$country` = ?): [array](language.types.array.md)

}

## Constantes predefinidas

**`Gender\Gender::IS_FEMALE`**

**`Gender\Gender::IS_MOSTLY_FEMALE`**

**`Gender\Gender::IS_MALE`**

**`Gender\Gender::IS_MOSTLY_MALE`**

**`Gender\Gender::IS_UNISEX_NAME`**

**`Gender\Gender::IS_A_COUPLE`**

**`Gender\Gender::NAME_NOT_FOUND`**

**`Gender\Gender::ERROR_IN_NAME`**

**`Gender\Gender::ANY_COUNTRY`**

**`Gender\Gender::BRITAIN`**

**`Gender\Gender::IRELAND`**

**`Gender\Gender::USA`**

**`Gender\Gender::SPAIN`**

**`Gender\Gender::PORTUGAL`**

**`Gender\Gender::ITALY`**

**`Gender\Gender::MALTA`**

**`Gender\Gender::FRANCE`**

**`Gender\Gender::BELGIUM`**

**`Gender\Gender::LUXEMBOURG`**

**`Gender\Gender::NETHERLANDS`**

**`Gender\Gender::GERMANY`**

**`Gender\Gender::EAST_FRISIA`**

**`Gender\Gender::AUSTRIA`**

**`Gender\Gender::SWISS`**

**`Gender\Gender::ICELAND`**

**`Gender\Gender::DENMARK`**

**`Gender\Gender::NORWAY`**

**`Gender\Gender::SWEDEN`**

**`Gender\Gender::FINLAND`**

**`Gender\Gender::ESTONIA`**

**`Gender\Gender::LATVIA`**

**`Gender\Gender::LITHUANIA`**

**`Gender\Gender::POLAND`**

**`Gender\Gender::CZECH_REP`**

**`Gender\Gender::SLOVAKIA`**

**`Gender\Gender::HUNGARY`**

**`Gender\Gender::ROMANIA`**

**`Gender\Gender::BULGARIA`**

**`Gender\Gender::BOSNIA`**

**`Gender\Gender::CROATIA`**

**`Gender\Gender::KOSOVO`**

**`Gender\Gender::MACEDONIA`**

**`Gender\Gender::MONTENEGRO`**

**`Gender\Gender::SERBIA`**

**`Gender\Gender::SLOVENIA`**

**`Gender\Gender::ALBANIA`**

**`Gender\Gender::GREECE`**

**`Gender\Gender::RUSSIA`**

**`Gender\Gender::BELARUS`**

**`Gender\Gender::MOLDOVA`**

**`Gender\Gender::UKRAINE`**

**`Gender\Gender::ARMENIA`**

**`Gender\Gender::AZERBAIJAN`**

**`Gender\Gender::GEORGIA`**

**`Gender\Gender::KAZAKH_UZBEK`**

**`Gender\Gender::TURKEY`**

**`Gender\Gender::ARABIA`**

**`Gender\Gender::ISRAEL`**

**`Gender\Gender::CHINA`**

**`Gender\Gender::INDIA`**

**`Gender\Gender::JAPAN`**

**`Gender\Gender::KOREA`**

## Índice

- [Gender\Gender::connect](gender-gender.connect.md) — Conecta-se a um dicionário de nomes externo
- [Gender\Gender::\_\_construct](gender-gender.construct.md) — Constrói o objeto Gender
- [Gender\Gender::country](gender-gender.country.md) — Obtém representação textual do país
- [Gender\Gender::get](gender-gender.get.md) — Obtém o gênero de um nome
- [Gender\Gender::isNick](gender-gender.isnick.md) — Verifica se um nome é apelido de outro
- [Gender\Gender::similarNames](gender-gender.similarnames.md) — Obtém nomes semelhantes

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
