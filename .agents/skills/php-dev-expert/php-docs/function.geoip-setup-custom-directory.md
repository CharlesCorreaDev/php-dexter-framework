# Define um diretório personalizado para o banco de dados GeoIP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-setup-custom-directory.php

---

# geoip\_setup\_custom\_directory

(PECL geoip >= 1.1.0)

geoip\_setup\_custom\_directory — Define um diretório personalizado para o banco de dados GeoIP

### Descrição

function **geoip\_setup\_custom\_directory**([string](language.types.string.md) `$path`): [void](language.types.void.md)

A função **geoip\_setup\_custom\_directory()** alterará o
diretório padrão do banco de dados GeoIP. Isso é equivalente a alterar
[geoip.custom\_directory](geoip.configuration.md#ini.geoip.custom-directory).

### Parâmetros

`path`
:   O caminho completo de onde o banco de dados GeoIP está no disco.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Um exemplo de **geoip\_setup\_custom\_directory()****

Isso alterará o caminho padrão do banco de dados GeoIP.

```
<?php

geoip_setup_custom_directory('/algum/outro/caminho');

print geoip_db_filename(GEOIP_COUNTRY_EDITION);

?>
```

O exemplo acima produzirá:

```
/algum/outro/caminho/GeoIP.dat
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
