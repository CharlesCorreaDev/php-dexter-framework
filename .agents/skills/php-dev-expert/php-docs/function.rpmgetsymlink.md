# Obtém o alvo de uma ligação simbólica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rpmgetsymlink.php

---

# rpmgetsymlink

(PECL rpminfo >= 1.1.0)

rpmgetsymlink — Obtém o alvo de uma ligação simbólica

### Descrição

function **rpmgetsymlink**([string](language.types.string.md) `$path`, [string](language.types.string.md) `$name`): [?](language.types.null.md)[string](language.types.string.md)

Obtém o alvo de uma ligação simbólica.

### Parâmetros

`path`
:   Caminho do arquivo RPM.

`name`
:   Nome do arquivo de ligação simbólica.

### Valor Retornado

Uma [string](language.types.string.md) com o alvo da ligação simbólica,
**`null`** em caso de erro, ou uma string vazia se não for uma ligação simbólica.

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
