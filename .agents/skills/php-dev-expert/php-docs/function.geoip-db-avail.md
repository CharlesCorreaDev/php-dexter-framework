# Determina se o banco de dados GeoIP está disponível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-db-avail.php

---

# geoip\_db\_avail

(PECL geoip >= 1.0.1)

geoip\_db\_avail — Determina se o banco de dados GeoIP está disponível

### Descrição

function **geoip\_db\_avail**([int](language.types.integer.md) `$database`): [bool](language.types.boolean.md)

A função **geoip\_db\_avail()** retorna se o banco de dados GeoIP
correspondente está disponível e pode ser aberto no disco.

Ele não indica se o arquivo é um banco de dados adequado, apenas se ele pode ser lido.

### Parâmetros

`database`
:   O tipo de banco de dados como um inteiro. Pode-se usar as
    [várias constantes](geoip.constants.md) definidas com
    esta extensão (por exemplo: GEOIP\_\*\_EDITION).

### Valor Retornado

Retorna **`true`** se o banco de dados existe, **`false`** se não foi encontrado, ou **`null`** em caso de erro.

### Examples

**Exemplo #1 Um exemplo de **geoip\_db\_avail()****

Isso exibirá a string da versão atual do banco de dados.

```
<?php

if (geoip_db_avail(GEOIP_COUNTRY_EDITION))
    print geoip_database_info(GEOIP_COUNTRY_EDITION);
?>
```

O exemplo acima produzirá:

```
GEO-106FREE 20080801 Build 1 Copyright (c) 2006 MaxMind LLC All Rights Reserved
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
