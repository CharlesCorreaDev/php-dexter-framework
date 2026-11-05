# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intl.installation.php

---

## Instalação

**--enable-intl** habilitará a
extensão ao compilar o PHP.

Se a ICU estiver instalada em um diretório fora do padrão, sua localização
pode ser especificada na variável de ambiente
**`LD_LIBRARY_PATH`**
para que o vinculador dinâmico possa encontrá-lo:

$ export LD\_LIBRARY\_PATH=/opt/icu/lib

Caso o PHP e a ICU estejam instalados em suas localizações padrão, as opções
adicionais para o comando **configure** não são necessárias.

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
