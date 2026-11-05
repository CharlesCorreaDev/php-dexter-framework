# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/geoip.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`GEOIP_COUNTRY_EDITION`** ([int](language.types.integer.md))

**`GEOIP_REGION_EDITION_REV0`** ([int](language.types.integer.md))

**`GEOIP_CITY_EDITION_REV0`** ([int](language.types.integer.md))

**`GEOIP_ORG_EDITION`** ([int](language.types.integer.md))

**`GEOIP_ISP_EDITION`** ([int](language.types.integer.md))

**`GEOIP_CITY_EDITION_REV1`** ([int](language.types.integer.md))

**`GEOIP_REGION_EDITION_REV1`** ([int](language.types.integer.md))

**`GEOIP_PROXY_EDITION`** ([int](language.types.integer.md))

**`GEOIP_ASNUM_EDITION`** ([int](language.types.integer.md))

**`GEOIP_NETSPEED_EDITION`** ([int](language.types.integer.md))

**`GEOIP_DOMAIN_EDITION`** ([int](language.types.integer.md))

As seguintes constantes são para velocidade de rede:

**`GEOIP_UNKNOWN_SPEED`** ([int](language.types.integer.md))

**`GEOIP_DIALUP_SPEED`** ([int](language.types.integer.md))

**`GEOIP_CABLEDSL_SPEED`** ([int](language.types.integer.md))

**`GEOIP_CORPORATE_SPEED`** ([int](language.types.integer.md))

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
