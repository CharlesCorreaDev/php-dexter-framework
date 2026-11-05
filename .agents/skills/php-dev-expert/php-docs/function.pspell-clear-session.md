# Limpa a sessão atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-clear-session.php

---

# pspell\_clear\_session

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_clear\_session — Limpa a sessão atual

### Descrição

function **pspell\_clear\_session**([PSpell\Dictionary](class.pspell-dictionary.md) `$dictionary`): [bool](language.types.boolean.md)

**pspell\_clear\_session()** limpa a sessão atual.
A lista de palavras atual fica em branco e, por exemplo, se for usada a função
[pspell\_save\_wordlist()](function.pspell-save-wordlist.md) para salvá-la, nada acontece.

### Parâmetros

`dictionary`
:   Uma instância de [PSpell\Dictionary](class.pspell-dictionary.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `dictionary` agora espera uma instância de [PSpell\Dictionary](class.pspell-dictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de [pspell\_add\_to\_personal()](function.pspell-add-to-personal.md)**

```
<?php
$pspell_config = pspell_config_create("en");
pspell_config_personal($pspell_config, "/var/dictionaries/custom.pws");
$pspell = pspell_new_config($pspell_config);

pspell_add_to_personal($pspell, "Vlad");
pspell_clear_session($pspell);
pspell_save_wordlist($pspell);    // "Vlad" não será salva
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
