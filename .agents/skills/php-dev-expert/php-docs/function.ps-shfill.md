# Preenche uma área com um sombreamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-shfill.php

---

# ps\_shfill

(PECL ps >= 1.3.0)

ps\_shfill — Preenche uma área com um sombreamento

### Descrição

function **ps\_shfill**([resource](language.types.resource.md) `$psdoc`, [int](language.types.integer.md) `$shadingid`): [bool](language.types.boolean.md)

Preenche uma área com um sombreamento, que deve ser criado antes com
[ps\_shading()](function.ps-shading.md). Esta é uma maneira alternativa de criar
um padrão a partir de um sombreamento [ps\_shading\_pattern()](function.ps-shading-pattern.md) e usar
o padrão como cor de preenchimento.

### Parâmetros

`psdoc`
:   Identificador de recurso do arquivo postscript
    conforme retornado por [ps\_new()](function.ps-new.md).

`shadingid`
:   O identificador de um sombreamento criado anteriormente com
    [ps\_shading()](function.ps-shading.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [ps\_shading()](function.ps-shading.md) - Cria um sombreamento para uso posterior
- [ps\_shading\_pattern()](function.ps-shading-pattern.md) - Cria um padrão com base em um sombreamento

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
