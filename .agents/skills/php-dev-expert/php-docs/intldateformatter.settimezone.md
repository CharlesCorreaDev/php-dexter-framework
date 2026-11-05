# Define o fuso horário do formatador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intldateformatter.settimezone.php

---

# IntlDateFormatter::setTimeZone

# datefmt\_set\_timezone

(PHP 5 >= 5.5.0, PHP 7, PHP 8, PECL intl >= 3.0.0)

IntlDateFormatter::setTimeZone -- datefmt\_set\_timezone — Define o fuso horário do formatador

### Descrição

Estilo orientado a objetos

public function **IntlDateFormatter::setTimeZone**([IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone`): [bool](language.types.boolean.md)

Estilo procedural

function **datefmt\_set\_timezone**([IntlDateFormatter](class.intldateformatter.md) `$formatter`, [IntlTimeZone](class.intltimezone.md)|[DateTimeZone](class.datetimezone.md)|[string](language.types.string.md)|[null](language.types.null.md) `$timezone`): [bool](language.types.boolean.md)

Define o fuso horário usado para o objeto
IntlDateFormatter.

### Parâmetros

`formatter`
:   O recurso do formatador.

`timezone`
:   O fuso horário a ser utilizado para este formatador. Pode ser especificado nas
    formas a seguir:

    - **`null`**, neste caso o fuso horário padrão será usado, como especificado na
      configuração ini [date.timezone](datetime.configuration.md#ini.date.timezone) ou
      através da função [date\_default\_timezone\_set()](function.date-default-timezone-set.md) e como
      retornado por [date\_default\_timezone\_get()](function.date-default-timezone-get.md).
    - Um objeto [IntlTimeZone](class.intltimezone.md), que será usado diretamente.
    - Um objeto [DateTimeZone](class.datetimezone.md). Seu identificador será extraído
      e um objeto de fuso horário ICU será criado; o fuso horário será apoiado
      pelo banco de dados da ICU, não pelo do PHP.
    - Uma [string](language.types.string.md), que deve ser um identificador de fuso horário ICU válido.
      Consulte a função [IntlTimeZone::createTimeZoneIDEnumeration()](intltimezone.createtimezoneidenumeration.md). Deslocamentos
      puros como `"GMT+08:30"` também são aceitos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Esta função agora retorna **`true`** em caso de sucesso; anteriormente, retornava **`null`**. |

### Examples

**Exemplo #1 Exemplos de **IntlDateFormatter::setTimeZone()****

```
<?php
ini_set('date.timezone', 'Europe/Amsterdam');

$formatter = IntlDateFormatter::create(NULL, NULL, NULL, "UTC");

$formatter->setTimeZone(NULL);
echo "NULL\n    ", $formatter->getTimeZone()->getId(), "\n";

$formatter->setTimeZone(IntlTimeZone::createTimeZone('Europe/Lisbon'));
echo "IntlTimeZone\n    ", $formatter->getTimeZone()->getId(), "\n";

$formatter->setTimeZone(new DateTimeZone('Europe/Paris'));
echo "DateTimeZone\n    ", $formatter->getTimeZone()->getId(), "\n";

$formatter->setTimeZone('Europe/Rome');
echo "String\n    ", $formatter->getTimeZone()->getId(), "\n";

$formatter->setTimeZone('GMT+00:30');
print_r($formatter->getTimeZone());
```

O exemplo acima produzirá:

```
NULL
    Europe/Amsterdam
IntlTimeZone
    Europe/Lisbon
DateTimeZone
    Europe/Paris
String
    Europe/Rome
IntlTimeZone Object
(
    [valid] => 1
    [id] => GMT+00:30
    [rawOffset] => 1800000
    [currentOffset] => 1800000
)
```

### Veja também

- [IntlDateFormatter::getTimeZone()](intldateformatter.gettimezone.md) - Obtem o fuso horário do formatador

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
