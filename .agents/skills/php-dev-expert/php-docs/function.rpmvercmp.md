# Comparação de versões RPM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rpmvercmp.php

---

# rpmvercmp

(PECL rpminfo >= 0.1.0)

rpmvercmp — Comparação de versões RPM

### Descrição

function **rpmvercmp**([string](language.types.string.md) `$evr1`, [string](language.types.string.md) `$evr2`, [?](language.types.null.md)[string](language.types.string.md) `$operator` = **`null`**): [int](language.types.integer.md)|[bool](language.types.boolean.md)

Compare duas versões do pacote RPM.

### Parâmetros

`evr1`
:   Primeira string `epoch:version-release`.

`evr2`
:   Segunda string `epoch:version-release`.

`operator`
:   Um operador opcional.
    Os operadores possíveis são:
    `<`, `lt`, `<=`, `le`, `>`, `gt`, `>=`, `ge`, `==`, `=`, `eq`, `!=`, `<>`, `ne`.

    Este parâmetro diferencia maiúsculas de minúsculas, os valores devem ser em minúsculas.

### Valor Retornado

Retorna `-1` se `evr1` for menor que
`evr2`, `1` se `evr1` for
maior que `evr2` e `0` se forem iguais.

Ao usar o argumento opcional `operator`, a
função retornará **`true`** se o relacionamento for aquele especificado
pelo operador, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL rpminfo 0.7.0 | O parâmetro opcional `operator` foi adicionado. |

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
