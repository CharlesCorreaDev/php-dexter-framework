# Cria um padrão com base em um sombreamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-shading-pattern.php

---

# ps\_shading\_pattern

(PECL ps >= 1.3.0)

ps\_shading\_pattern — Cria um padrão com base em um sombreamento

### Descrição

function **ps\_shading\_pattern**([resource](language.types.resource.md) `$psdoc`, [int](language.types.integer.md) `$shadingid`, [string](language.types.string.md) `$optlist`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Cria um padrão com base em um sombreamento, que deve ser criado previamente com
[ps\_shading()](function.ps-shading.md). Padrões de sombreamento podem ser usados ​​como padrões
normais.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`shadingid`
:   O identificador de um sombreamento criado anteriormente com
    [ps\_shading()](function.ps-shading.md).

`optlist`
:   Este argumento não é usado atualmente.

### Valor Retornado

O identificador do padrão ou **`false`** em caso de falha.

### Veja também

- [ps\_shading()](function.ps-shading.md) - Cria um sombreamento para uso posterior
- [ps\_shfill()](function.ps-shfill.md) - Preenche uma área com um sombreamento

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
