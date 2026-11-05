# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fdf.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`FDFValue`** ([int](language.types.integer.md))

**`FDFStatus`** ([int](language.types.integer.md))

**`FDFFile`** ([int](language.types.integer.md))

**`FDFID`** ([int](language.types.integer.md))

**`FDFFf`** ([int](language.types.integer.md))

**`FDFSetFf`** ([int](language.types.integer.md))

**`FDFClearFf`** ([int](language.types.integer.md))

**`FDFFlags`** ([int](language.types.integer.md))

**`FDFSetF`** ([int](language.types.integer.md))

**`FDFClrF`** ([int](language.types.integer.md))

**`FDFAP`** ([int](language.types.integer.md))

**`FDFAS`** ([int](language.types.integer.md))

**`FDFAction`** ([int](language.types.integer.md))

**`FDFAA`** ([int](language.types.integer.md))

**`FDFAPRef`** ([int](language.types.integer.md))

**`FDFIF`** ([int](language.types.integer.md))

**`FDFEnter`** ([int](language.types.integer.md))

**`FDFExit`** ([int](language.types.integer.md))

**`FDFDown`** ([int](language.types.integer.md))

**`FDFUp`** ([int](language.types.integer.md))

**`FDFFormat`** ([int](language.types.integer.md))

**`FDFValidate`** ([int](language.types.integer.md))

**`FDFKeystroke`** ([int](language.types.integer.md))

**`FDFCalculate`** ([int](language.types.integer.md))

**`FDFNormalAP`** ([int](language.types.integer.md))

**`FDFRolloverAP`** ([int](language.types.integer.md))

**`FDFDownAP`** ([int](language.types.integer.md))

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
