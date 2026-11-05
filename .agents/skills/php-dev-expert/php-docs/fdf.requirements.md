# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fdf.requirements.php

---

## Dependências

Será necessário o SDK do kit de ferramentas FDF, disponível em
[» https://www.adobe.com/devnet/acrobat/fdftoolkit.html](https://www.adobe.com/devnet/acrobat/fdftoolkit.html).
A partir do PHP 4.3.0, é necessária pelo menos a versão 5.0 do SDK.
A biblioteca do kit de ferramentas FDF está disponível apenas em formato binário,
as plataformas suportadas pela Adobe são Win32, Linux, Solaris e AIX.

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
