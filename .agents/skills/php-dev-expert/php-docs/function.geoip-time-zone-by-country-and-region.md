# Retorna o fuso horário para alguma combinação de código de país e região

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-time-zone-by-country-and-region.php

---

# geoip\_time\_zone\_by\_country\_and\_region

(PECL geoip >= 1.0.4)

geoip\_time\_zone\_by\_country\_and\_region — Retorna o fuso horário para alguma combinação de código de país e região

### Descrição

function **geoip\_time\_zone\_by\_country\_and\_region**([string](language.types.string.md) `$country_code`, [string](language.types.string.md) `$region_code` = ?): [string](language.types.string.md)

A função **geoip\_time\_zone\_by\_country\_and\_region()** retornará o
fuso horário correspondente a uma combinação de código de país e região.

Nos Estados Unidos, o código de região corresponde à abreviação de duas letras
de cada estado. No Canadá, o código de região corresponde ao código de duas letras da província ou
território, conforme atribuído pelo Canada Post.

Para o resto do mundo, o GeoIP usa códigos FIPS 10-4 para representar regiões.
Pode-se verificar [» https://www.maxmind.com/app/fips10\_4](https://www.maxmind.com/app/fips10_4)
para uma lista detalhada de códigos FIPS 10-4.

Esta função está sempre disponível se versão 1.4.1 ou mais recente da biblioteca GeoIP estiver sendo usada. Os
dados são obtidos diretamente da biblioteca GeoIP e não de qualquer banco de dados.

### Parâmetros

`country_code`
:   O código de país de duas letras (consulte
    [geoip\_country\_code\_by\_name()](function.geoip-country-code-by-name.md))

`region_code`
:   O código de região de duas letras (ou dígitos) (consulte
    [geoip\_region\_by\_name()](function.geoip-region-by-name.md))

### Valor Retornado

Retorna o fuso horário em caso de sucesso, ou **`false`** se a combinação de código de país e região
não puder ser encontrada.

### Examples

**Exemplo #1 Um exemplo de **geoip\_time\_zone\_by\_country\_and\_region()** usando código de região para o Canadá**

Isso exibirá o fuso horário do país CA (Canadá) e da região QC (Quebec).

```
<?php
$timezone = geoip_time_zone_by_country_and_region('CA', 'QC');
if ($timezone) {
    echo 'O fuso horário para CA/QC é: ' . $timezone;
}
?>
```

O exemplo acima produzirá:

```
O fuso horário para CA/QC é: America/Montreal
```

**Exemplo #2 Um exemplo de **geoip\_time\_zone\_by\_country\_and\_region()** usando códigos FIPS**

Isso exibirá o fuso horário do país JP (Japão), região 01 (Aichi).

```
<?php
$timezone = geoip_time_zone_by_country_and_region('JP', '01');
if ($timezone) {
    echo 'Fuso horário para JP/01 é: ' . $timezone;
}
?>
```

O exemplo acima produzirá:

```
Fuso horário para JP/01 é: Asia/Tokyo
```

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
