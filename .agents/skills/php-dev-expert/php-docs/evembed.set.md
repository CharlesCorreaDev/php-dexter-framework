# Configura o observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evembed.set.php

---

# EvEmbed::set

(PECL ev >= 0.2.0)

EvEmbed::set — Configura o observador

### Descrição

public
function **EvEmbed::set**(
[object](language.types.object.md) `$other`
): [void](language.types.void.md)

Configura o observador para usar
o objeto de laço de eventos
`other`.

### Parâmetros

`other`
:   O mesmo que para
    [EvEmbed::\_\_construct()](evembed.construct.md).

### Valor Retornado

Nenhum valor é retornado.

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
