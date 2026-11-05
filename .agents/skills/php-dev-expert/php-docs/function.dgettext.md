# Substitui o domínio atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dgettext.php

---

# dgettext

(PHP 4, PHP 5, PHP 7, PHP 8)

dgettext — Substitui o domínio atual

### Descrição

function **dgettext**([string](language.types.string.md) `$domain`, [string](language.types.string.md) `$message`): [string](language.types.string.md)

A função **dgettext()** permite substituir
o domínio atual informado em `domain` para uma única pesquisa de mensagem.

### Parâmetros

`domain`
:   O domínio

`message`
:   A mensagem

### Valor Retornado

Uma [string](language.types.string.md) em caso de sucesso.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `domain`
for uma [string](language.types.string.md) vazia.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança um [ValueError](class.valueerror.md) se `domain` for uma [string](language.types.string.md) vazia. |

### Veja também

- [gettext()](function.gettext.md) - Pesquisa uma mensagem no domínio atual

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
