# Ignora palavras com menos de N caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-config-ignore.php

---

# pspell\_config\_ignore

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_config\_ignore — Ignora palavras com menos de N caracteres

### Descrição

function **pspell\_config\_ignore**([PSpell\Config](class.pspell-config.md) `$config`, [int](language.types.integer.md) `$min_length`): [bool](language.types.boolean.md)

**pspell\_config\_ignore()** deve ser usada em uma configuração
antes de chamar [pspell\_new\_config()](function.pspell-new-config.md). Esta função
permite que palavras curtas sejam ignoradas pelo corretor ortográfico.

### Parâmetros

`config`
:   Uma instância de [PSpell\Config](class.pspell-config.md).

`min_length`
:   Palavras com menos de `min_length` caracteres serão ignoradas.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `config` agora espera uma instância de [PSpell\Config](class.pspell-config.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 **pspell\_config\_ignore()****

```
<?php
$pspell_config = pspell_config_create("en");
pspell_config_ignore($pspell_config, 5);
$pspell = pspell_new_config($pspell_config);
pspell_check($pspell, "abcd");    // não resultará em erro
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
