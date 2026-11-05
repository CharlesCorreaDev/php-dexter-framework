# Adiciona a palavra a uma lista de palavras pessoal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-add-to-personal.php

---

# pspell\_add\_to\_personal

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_add\_to\_personal — Adiciona a palavra a uma lista de palavras pessoal

### Descrição

function **pspell\_add\_to\_personal**([PSpell\Dictionary](class.pspell-dictionary.md) `$dictionary`, [string](language.types.string.md) `$word`): [bool](language.types.boolean.md)

**pspell\_add\_to\_personal()** adiciona uma palavra à lista de palavras
pessoal. Se foi usada [pspell\_new\_config()](function.pspell-new-config.md) com
[pspell\_config\_personal()](function.pspell-config-personal.md) para abrir o dicionário,
pode-se salvar a lista de palavras posteriormente com
[pspell\_save\_wordlist()](function.pspell-save-wordlist.md).

### Parâmetros

`dictionary`
:   Uma instância de [PSpell\Dictionary](class.pspell-dictionary.md).

`word`
:   A palavra adicionada.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `dictionary` agora espera uma instância de [PSpell\Dictionary](class.pspell-dictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 **pspell\_add\_to\_personal()****

```
<?php
$pspell_config = pspell_config_create("en");
pspell_config_personal($pspell_config, "/var/dictionaries/custom.pws");
$pspell = pspell_new_config($pspell_config);

pspell_add_to_personal($pspell, "Vlad");
pspell_save_wordlist($pspell);
?>
```

### Notas

> **Nota**:
>
> Esta função não funcionará a menos que se tenha o pspell .11.2 e o aspell .32.5
> ou posterior.

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
