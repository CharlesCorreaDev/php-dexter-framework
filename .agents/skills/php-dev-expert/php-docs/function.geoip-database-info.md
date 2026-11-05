# Obtém informações do banco de dados GeoIP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-database-info.php

---

# geoip\_database\_info

(PECL geoip >= 0.2.0)

geoip\_database\_info — Obtém informações do banco de dados GeoIP

### Descrição

function **geoip\_database\_info**([int](language.types.integer.md) `$database` = GEOIP\_COUNTRY\_EDITION): [string](language.types.string.md)

A função **geoip\_database\_info()** retorna a versão correspondente do
banco de dados GeoIP, conforme definido dentro do arquivo binário.

Se esta função for chamada sem argumentos, ela retornará a versão
do GeoIP Free Country Edition.

### Parâmetros

`database`
:   O tipo de banco de dados como um inteiro. Pode-se usar as
    [várias constantes](geoip.constants.md) definidas com
    esta extensão (por exemplo: GEOIP\_\*\_EDITION).

### Valor Retornado

Retorna a versão do banco de dados correspondente ou **`null`** em caso de erro.

### Examples

**Exemplo #1 Um exemplo de **geoip\_database\_info()****

Isso exibirá informações sobre o banco de dados.

```
<?php
print geoip_database_info(GEOIP_COUNTRY_EDITION);
?>
```

O exemplo acima produzirá:

```
GEO-106FREE 20060801 Build 1 Copyright (c) 2006 MaxMind LLC All Rights Reserved
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
