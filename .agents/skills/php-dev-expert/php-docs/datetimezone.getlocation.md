# Retorna informações da localização de um fuso horário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/datetimezone.getlocation.php

---

# DateTimeZone::getLocation

# timezone\_location\_get

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

DateTimeZone::getLocation -- timezone\_location\_get — Retorna informações da localização de um fuso horário

### Descrição

Estilo orientado a objetos

public function **DateTimeZone::getLocation**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Estilo procedural

function [timezone\_location\_get](function.timezone-location-get.md)([DateTimeZone](class.datetimezone.md) `$object`): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna informações da localização de um fuso horário, incluindo o código do país, latitude/longitude e comentários.

### Parâmetros

`object`
:   Somente no estilo procedural: Um objeto [DateTimeZone](class.datetimezone.md)
    retornado por [timezone\_open()](function.timezone-open.md)

### Valor Retornado

Array contendo informações da localização de um fuso horário ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo do método **DateTimeZone::getLocation()****

```
<?php
$tz = new DateTimeZone("Asia/Jakarta");
print_r($tz->getLocation());
print_r(timezone_location_get($tz));
```

O exemplo acima produzirá:

```
Array
(
    [country_code] => ID
    [latitude] => -6.16667
    [longitude] => 106.8
    [comments] => Java, Sumatra
)
Array
(
    [country_code] => ID
    [latitude] => -6.16667
    [longitude] => 106.8
    [comments] => Java, Sumatra
)
```

O elemento `country_code` contém o código de país de 2 letras
conforme ISO 3166-1 para cada entrada. Os elementos `latitude` e
`longitude` contêm as coordenadas da cidade nomeada
pelo identificador do fuso horário e o elemento `comments` contém
(quando não for **`false`**) uma dica de onde no país informado este fuso horário se
aplica. Esta informação é adequada para apresentação ao usuário final.

### Veja também

- [DateTimeZone::listIdentifiers()](datetimezone.listidentifiers.md) - Retorna um array numericamente indexado contendo todos os indenticadores de fuso horário para obter uma lista completa
  ou parcial de todos os identificadores de fuso horário suportados

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
