# Versão plural de dgettext

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dngettext.php

---

# dngettext

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

dngettext — Versão plural de dgettext

### Descrição

function **dngettext**(  
    [string](language.types.string.md) `$domain`,  
    [string](language.types.string.md) `$singular`,  
    [string](language.types.string.md) `$plural`,  
    [int](language.types.integer.md) `$count`  
): [string](language.types.string.md)

A função **dngettext()** permite substituir
o domínio atual informado em `domain` para uma única consulta de mensagem no plural.

### Parâmetros

`domain`
:   O domínio

`singular`

`plural`

`count`

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

- [ngettext()](function.ngettext.md) - Versão plural de gettext

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
