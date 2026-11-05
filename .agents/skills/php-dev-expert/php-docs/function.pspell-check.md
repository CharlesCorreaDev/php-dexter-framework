# Verifica uma palavra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-check.php

---

# pspell\_check

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_check — Verifica uma palavra

### Descrição

function **pspell\_check**([PSpell\Dictionary](class.pspell-dictionary.md) `$dictionary`, [string](language.types.string.md) `$word`): [bool](language.types.boolean.md)

**pspell\_check()** verifica a ortografia de uma palavra.

### Parâmetros

`dictionary`
:   Uma instância de [PSpell\Dictionary](class.pspell-dictionary.md).

`word`
:   A palavra testada.

### Valor Retornado

Retorna **`true`** se a grafia estiver correta, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `dictionary` agora espera uma instância de [PSpell\Dictionary](class.pspell-dictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pspell\_check()****

```
<?php
$pspell = pspell_new("en");

if (pspell_check($pspell, "testt")) {
    echo "Esta é uma grafia válida";
} else {
    echo "Desculpe, ortografia errada";
}
?>
```

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
