# Retorna o nome da região para alguma combinação de código de país e região

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-region-name-by-code.php

---

# geoip\_region\_name\_by\_code

(PECL geoip >= 1.0.4)

geoip\_region\_name\_by\_code — Retorna o nome da região para alguma combinação de código de país e região

### Descrição

function **geoip\_region\_name\_by\_code**([string](language.types.string.md) `$country_code`, [string](language.types.string.md) `$region_code`): [string](language.types.string.md)

A função **geoip\_region\_name\_by\_code()** retornará o nome da região
correspondente a uma combinação de código de país e região.

Nos Estados Unidos, o código de região corresponde à abreviação de duas letras
de cada estado. No Canadá, o código de região corresponde ao código de duas letras da província ou
território, conforme atribuído pelo Canada Post.

Para o resto do mundo, o GeoIP usa códigos FIPS 10-4 para representar regiões.
Pode-se verificar [» https://www.maxmind.com/app/fips10\_4](https://www.maxmind.com/app/fips10_4)
para uma lista detalhada de códigos FIPS 10-4.

Esta função está sempre disponível se estiver usando a versão 1.4.1 ou mais recente da biblioteca GeoIP. Os
dados são retirados diretamente da biblioteca GeoIP e não de qualquer banco de dados.

### Parâmetros

`country_code`
:   O código de país de duas letras (consulte
    [geoip\_country\_code\_by\_name()](function.geoip-country-code-by-name.md))

`region_code`
:   O código de região de duas letras (ou dígitos) (consulte
    [geoip\_region\_by\_name()](function.geoip-region-by-name.md))

### Valor Retornado

Retorna o nome da região em caso de sucesso, ou **`false`** se a combinação de código de país e região
não puder ser encontrada.

### Examples

**Exemplo #1 Um exemplo de **geoip\_region\_name\_by\_code()** usando código de região para o Canadá**

Isso exibirá o nome da região para o país CA (Canadá) e região QC (Quebec).

```
<?php
$region = geoip_region_name_by_code('CA', 'QC');
if ($region) {
    echo 'O nome da região para CA/QC é: ' . $region;
}
?>
```

O exemplo acima produzirá:

```
O nome da região para CA/QC é: Quebec
```

**Exemplo #2 Um exemplo de **geoip\_region\_name\_by\_code()** usando códigos FIPS**

Isso imprimirá o nome da região do país JP (Japão), região 01.

```
<?php
$region = geoip_region_name_by_code('JP', '01');
if ($region) {
    echo 'O nome da região para JP/01 é: ' . $region;
}
?>
```

O exemplo acima produzirá:

```
O nome da região para JP/01 é: Aichi
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
