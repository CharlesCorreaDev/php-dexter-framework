# Funções da Gettext

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.gettext.php

---

# Funções da Gettext

## Índice

- [\_](function.-.md) — Sinônimo de gettext
- [bind\_textdomain\_codeset](function.bind-textdomain-codeset.md) — Especifica ou obtém a codificação de caracteres na qual as mensagens do catálogo de mensagens de DOMÍNIO serão retornadas
- [bindtextdomain](function.bindtextdomain.md) — Define ou obtém o caminho para um domínio
- [dcgettext](function.dcgettext.md) — Substitui o domínio padrão para uma procura única
- [dcngettext](function.dcngettext.md) — Versão plural de dcgettext
- [dgettext](function.dgettext.md) — Substitui o domínio atual
- [dngettext](function.dngettext.md) — Versão plural de dgettext
- [gettext](function.gettext.md) — Pesquisa uma mensagem no domínio atual
- [ngettext](function.ngettext.md) — Versão plural de gettext
- [textdomain](function.textdomain.md) — Define o domínio padrão

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
