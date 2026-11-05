# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/uopz.installation.php

---

## Instalação

As versões do uopz são hospedadas pelo PECL e o código-fonte pelo
[» github](https://github.com/krakjoe/uopz),
o caminho mais fácil para a instalação é o caminho normal do PECL:
[» https://pecl.php.net/package/uopz](https://pecl.php.net/package/uopz).

Usuários do Windows podem baixar binários de lançamento pré-compilados no site [» PECL](https://pecl.php.net/package/uopz).

A partir do uopz 5.0.0 a extensão deveria ser carregada como
[extension](ini.core.md#ini.extension). Antes dessa versão, ela deveria ser
carregada como [zend\_extension](ini.core.md#ini.zend-extension).

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
