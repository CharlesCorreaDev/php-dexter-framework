# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/geoip.requirements.php

---

## Dependências

Esta extensão requer a instalação da biblioteca GeoIP C versão 1.4.0 ou
superior. Você pode obter a versão mais recente em
[» https://www.maxmind.com/app/c](https://www.maxmind.com/app/c)
e compilá-la você mesmo.

Por padrão, você só terá acesso aos bancos de dados Free GeoIP Country ou
GeoLite City. Embora este módulo possa funcionar com outros tipos de banco de dados,
você deve comprar uma licença comercial da
[» Maxmind](https://www.maxmind.com/).

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
