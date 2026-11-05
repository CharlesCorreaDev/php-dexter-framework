# Sugere grafias de uma palavra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-suggest.php

---

# pspell\_suggest

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_suggest — Sugere grafias de uma palavra

### Descrição

function **pspell\_suggest**([PSpell\Dictionary](class.pspell-dictionary.md) `$dictionary`, [string](language.types.string.md) `$word`): [array](language.types.array.md)|[false](language.types.singleton.md)

**pspell\_suggest()** retorna um array de possíveis
grafias para a palavra fornecida.

### Parâmetros

`dictionary`
:   Uma instância de [PSpell\Dictionary](class.pspell-dictionary.md).

`word`
:   A palavra testada.

### Valor Retornado

Retorna um array de grafias possíveis.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `dictionary` agora espera uma instância de [PSpell\Dictionary](class.pspell-dictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pspell\_suggest()****

```
<?php
$pspell = pspell_new("en");

if (!pspell_check($pspell, "testt")) {
    $suggestions = pspell_suggest($pspell, "testt");

    foreach ($suggestions as $suggestion) {
        echo "Possível ortografia: $suggestion<br />";
    }
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
