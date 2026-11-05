# Traduz um identificador de fuso horário para seu equivalente IANA

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intltimezone.getianaid.php

---

# IntlTimeZone::getIanaID

# intltz\_get\_iana\_id

(PHP 8 >= 8.4.0)

IntlTimeZone::getIanaID -- intltz\_get\_iana\_id — Traduz um identificador de fuso horário para seu equivalente IANA

### Descrição

Estilo orientado a objetos (method):

public static function **IntlTimeZone::getIanaID**([string](language.types.string.md) `$timezoneId`): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural:

function **intltz\_get\_iana\_id**([string](language.types.string.md) `$timezoneId`): [string](language.types.string.md)|[false](language.types.singleton.md)

Traduz um identificador de fuso horário para seu equivalente IANA. Por exemplo,
`"GMT"` retorna `"Etc/GMT"` e
`"US/Eastern"` retorna `"America/New_York"`.

> **Nota**:
>
> Esta função requer a ICU versão >= 74.

### Parâmetros

`timezoneId`
:   O identificador de fuso horário a ser traduzido.

### Valor Retornado

Retorna o identificador de fuso horário IANA como uma [string](language.types.string.md), ou **`false`** em caso de falha.

### Veja também

- [intltz\_get\_id\_for\_windows\_id()](intltimezone.getidforwindowsid.md) - Traduz um fuso horário do Windows para um fuso horário de sistema
- [intltz\_get\_windows\_id()](intltimezone.getwindowsid.md) - Traduz um fuso horário de sistema em um fuso horário do Windows
- [intltz\_create\_time\_zone()](intltimezone.createtimezone.md) - Cria um objeto IntlTimeZone para o ID informado

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
