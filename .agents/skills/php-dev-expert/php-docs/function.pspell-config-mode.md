# Altera o número do modo de sugestões retornadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-config-mode.php

---

# pspell\_config\_mode

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_config\_mode — Altera o número do modo de sugestões retornadas

### Descrição

function **pspell\_config\_mode**([PSpell\Config](class.pspell-config.md) `$config`, [int](language.types.integer.md) `$mode`): [bool](language.types.boolean.md)

**pspell\_config\_mode()** deve ser usada em uma configuração
antes de chamar [pspell\_new\_config()](function.pspell-new-config.md). Esta função
determina quantas sugestões serão retornadas por
[pspell\_suggest()](function.pspell-suggest.md).

### Parâmetros

`config`
:   Uma instância de [PSpell\Config](class.pspell-config.md).

`mode`
:   O parâmetro mode define o modo em que o corretor ortográfico funcionará.
    Há vários modos disponíveis:

    - **`PSPELL_FAST`** - Modo rápido (menor número de
      sugestões)
    - **`PSPELL_NORMAL`** - Modo normal (mais sugestões)
    - **`PSPELL_BAD_SPELLERS`** - Modo lento (muitas
      sugestões)

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `config` agora espera uma instância de [PSpell\Config](class.pspell-config.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **pspell\_config\_mode()****

```
<?php
$pspell_config = pspell_config_create("en");
pspell_config_mode($pspell_config, PSPELL_FAST);
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
