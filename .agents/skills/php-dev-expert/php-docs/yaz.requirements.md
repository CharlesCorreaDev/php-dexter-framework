# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaz.requirements.php

---

## Dependências

Obtenha YAZ (suporte ANSI/NISO Z39.50) e instale-o.
YAZ pode ser obtido na fonte ou em vários pacotes pré-compilados
do [» arquivo YAZ](http://ftp.indexdata.dk/pub/yaz/).
Sistemas como Debian GNU/Linux, Suse Linux, FreeBSD também têm YAZ
como parte de sua distribuição.

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
