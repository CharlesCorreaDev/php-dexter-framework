# Instalação para versões do PHP < 7.4

> **Fonte / Source:** https://www.php.net/manual/pt_BR/libxml.installation_old.php

---

## Instalação para versões do PHP < 7.4

A extensão libxml está habilitada por padrão, embora possa ser desabilitada com
**--disable-libxml**.

A diretiva opcional **--with-libxml-dir**
é usada para especificar a localização da `libxml`
no sistema onde o PHP está sendo compilado, caso contrário apenas a
localicação padrão é pesquisada. O processo `configure`
pesquisa pela libxml (especificamente, `xml2-config`) na seguinte
ordem:

1. A localização ([DIR]) especificada com **--with-libxml-dir**
   ([DIR]=/bin/xml2-config)
2. /usr/local/bin/xml2-config
3. /usr/bin/xml2-config

Se `configure` não puder encontrar xml2-config no diretório
especificado por **--with-libxml-dir**, ele
continuará e pesquisará nas localizações padrões.

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
