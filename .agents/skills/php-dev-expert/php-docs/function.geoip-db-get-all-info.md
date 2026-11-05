# Retorna informações detalhadas sobre todos os tipos de banco de dados GeoIP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-db-get-all-info.php

---

# geoip\_db\_get\_all\_info

(PECL geoip >= 1.0.1)

geoip\_db\_get\_all\_info — Retorna informações detalhadas sobre todos os tipos de banco de dados GeoIP

### Descrição

function **geoip\_db\_get\_all\_info**(): [array](language.types.array.md)

A função **geoip\_db\_get\_all\_info()** retornará
informações detalhadas como um array multidimensional sobre todos os
tipos de banco de dados GeoIP.

Esta função está disponível mesmo se nenhum banco de dados estiver instalado. Ela
simplesmente os listará como não disponíveis.

Os nomes das diferentes chaves do array associativo de retorno são os seguintes:

- "available" -- booleano, indica se o banco de dados está disponível (consulte
  [geoip\_db\_avail()](function.geoip-db-avail.md))
- "description" -- A descrição do banco de dados
- "filename" -- O nome do arquivo do banco de dados no disco (consulte
  [geoip\_db\_filename()](function.geoip-db-filename.md))

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o array associativo.

### Examples

**Exemplo #1 Um exemplo de **geoip\_db\_get\_all\_info()****

Isso exibirá o array contendo todas as informações.

```
<?php
$infos = geoip_db_get_all_info();
if (is_array($infos)) {
    var_dump($infos);
}
?>
```

O exemplo acima produzirá:

```
array(11) {
  [1]=>
  array(3) {
    ["available"]=>
    bool(true)
    ["description"]=>
    string(21) "GeoIP Country Edition"
    ["filename"]=>
    string(32) "/usr/share/GeoIP/GeoIP.dat"
  }

[ ... ]

  [11]=>
  array(3) {
    ["available"]=>
    bool(false)
    ["description"]=>
    string(25) "GeoIP Domain Name Edition"
    ["filename"]=>
    string(38) "/usr/share/GeoIP/GeoIPDomain.dat"
  }
}
```

**Exemplo #2 Um exemplo de **geoip\_db\_get\_all\_info()****

Pode-se usar as várias constantes como chaves para obter apenas partes das informações.

```
<?php
$infos = geoip_db_get_all_info();
if ($infos[GEOIP_COUNTRY_EDITION]['available']) {
    echo $infos[GEOIP_COUNTRY_EDITION]['description'];
}
?>
```

O exemplo acima produzirá:

```
GeoIP Country Edition
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
