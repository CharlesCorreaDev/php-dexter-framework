# Salva a lista de palavras pessoal em um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-save-wordlist.php

---

# pspell\_save\_wordlist

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_save\_wordlist — Salva a lista de palavras pessoal em um arquivo

### Descrição

function **pspell\_save\_wordlist**([PSpell\Dictionary](class.pspell-dictionary.md) `$dictionary`): [bool](language.types.boolean.md)

**pspell\_save\_wordlist()** salva a lista de palavras pessoal
da sessão atual. O local dos arquivos a serem salvos é especificado com
[pspell\_config\_personal()](function.pspell-config-personal.md) e (opcionalmente)
[pspell\_config\_repl()](function.pspell-config-repl.md).

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

**Exemplo #1 [pspell\_add\_to\_personal()](function.pspell-add-to-personal.md)**

```
<?php
$pspell_config = pspell_config_create("en");
pspell_config_personal($pspell_config, "/tmp/dicts/newdict");
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
