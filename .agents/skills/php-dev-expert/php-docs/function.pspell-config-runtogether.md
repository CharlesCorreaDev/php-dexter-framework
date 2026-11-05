# Considera palavras que se juntam como compostos válidos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-config-runtogether.php

---

# pspell\_config\_runtogether

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_config\_runtogether — Considera palavras que se juntam como compostos válidos

### Descrição

function **pspell\_config\_runtogether**([PSpell\Config](class.pspell-config.md) `$config`, [bool](language.types.boolean.md) `$allow`): [bool](language.types.boolean.md)

Esta função determina se palavras juntas serão tratadas como
palavras compostas válidas. Ou seja, "thecat" em inglês será uma palavra composta válida, embora
deva haver um espaço entre as duas palavras. Alterar esta configuração afeta apenas
os resultados retornados por [pspell\_check()](function.pspell-check.md);
[pspell\_suggest()](function.pspell-suggest.md) ainda retornará sugestões.

**pspell\_config\_runtogether()** deve ser usada em uma configuração
antes de chamar [pspell\_new\_config()](function.pspell-new-config.md).

### Parâmetros

`config`
:   Uma instância de [PSpell\Config](class.pspell-config.md).

`allow`
:   **`true`** se palavras unidas devem ser tratadas como compostos legais,
    **`false`** caso contrário.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `config` agora espera uma instância de [PSpell\Config](class.pspell-config.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 **pspell\_config\_runtogether()****

```
<?php
$pspell_config = pspell_config_create("en");
pspell_config_runtogether($pspell_config, true);
$pspell = pspell_new_config($pspell_config);
pspell_check($pspell, "thecat");
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
