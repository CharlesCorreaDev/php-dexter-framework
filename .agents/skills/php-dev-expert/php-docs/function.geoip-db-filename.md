# Retorna o nome do arquivo do banco de dados GeoIP correspondente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-db-filename.php

---

# geoip\_db\_filename

(PECL geoip >= 1.0.1)

geoip\_db\_filename — Retorna o nome do arquivo do banco de dados GeoIP correspondente

### Descrição

function **geoip\_db\_filename**([int](language.types.integer.md) `$database`): [string](language.types.string.md)

A função **geoip\_db\_filename()** retorna o nome do arquivo
do banco de dados GeoIP correspondente.

Não indica se o arquivo existe ou não no disco, apenas onde a biblioteca
está procurando o banco de dados.

### Parâmetros

`database`
:   O tipo de banco de dados como um inteiro. Pode-se usar as
    [várias constantes](geoip.constants.md) definidas com
    esta extensão (por exemplo: GEOIP\_\*\_EDITION).

### Valor Retornado

Retorna o nome do arquivo do banco de dados correspondente ou **`null`** em caso de erro.

### Examples

**Exemplo #1 Um exemplo de **geoip\_db\_filename()****

Isso produzirá o nome do arquivo do banco de dados correspondente.

```
<?php

print geoip_db_filename(GEOIP_COUNTRY_EDITION);

?>
```

O exemplo acima produzirá:

```
/usr/share/GeoIP/GeoIP.dat
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
