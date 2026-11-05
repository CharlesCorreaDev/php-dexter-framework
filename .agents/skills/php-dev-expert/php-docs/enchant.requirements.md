# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enchant.requirements.php

---

## Dependências

Esta versão utiliza as funções da
[» biblioteca Enchant](https://rrthomas.github.io/enchant/) de
Dom Lachowicz. É necessário o Enchant 1.2.4 ou posterior.
Enchant 2.0.0 ou posterior só é suportado a partir do PHP 8.0.0.

O Enchant também requer [» Glib 2.6](https://ftp.gnome.org/pub/gnome/sources/glib/) ou superior.
Bibliotecas pré-compiladas do Windows estão disponíveis em
[» https://ftp.gnome.org/pub/gnome/binaries/win32/glib/](https://ftp.gnome.org/pub/gnome/binaries/win32/glib/).

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
