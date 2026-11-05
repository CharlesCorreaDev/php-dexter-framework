# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recode.requirements.php

---

## Dependências

Você deve ter o GNU Recode 3.5 ou superior instalado em seu sistema.
Você pode baixar o pacote em [» https://directory.fsf.org/All\_GNU\_Packages/recode.html](https://directory.fsf.org/All_GNU_Packages/recode.html).

**Aviso**

A biblioteca Recode versão 3.6 adiciona caracteres estranhos atrás de
strings convertidas sob certas circunstâncias. Portanto, é mais seguro usar o Recode v3.5
ou uma das alternativas disponíveis como a extensão
[iconv](ref.iconv.md) ou
[mbstring](ref.mbstring.md).

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
