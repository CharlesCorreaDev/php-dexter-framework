# Configura o observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evstat.set.php

---

# EvStat::set

(PECL ev >= 0.2.0)

EvStat::set — Configura o observador

### Descrição

public
function **EvStat::set**(
[string](language.types.string.md) `$path`
, 
[float](language.types.float.md) `$interval`
): [void](language.types.void.md)

Configura o observador.

### Parâmetros

`path`
:   O caminho para aguardar mudanças de status.

`interval`
:   Dica sobre a rapidez com que se espera que uma alteração
    seja detectada e normalmente
    deve ser especificada como
    `0.0` para permitir
    que *libev*
    escolha um valor adequado.

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
