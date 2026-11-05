# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.requirements.php

---

## Dependências

Para usar esta extensão, será necessário instalar o Lua 5.1, disponível na [» página inicial do Lua](https://www.lua.org/).

Para aproveitar ao máximo os recursos de cronometragem, o LuaSandbox deve ser instalado no
Linux.

Se o FreeBSD ou o Mac OS X for usado, apenas o tempo real (relógio de parede) é
suportado, as funções que pretendem retornar o tempo da CPU retornarão, na verdade,
o tempo do relógio de parede.

Se o Windows for usado, nenhuma função de cronometragem será suportada. Os limites de tempo
estarão inoperantes.

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
