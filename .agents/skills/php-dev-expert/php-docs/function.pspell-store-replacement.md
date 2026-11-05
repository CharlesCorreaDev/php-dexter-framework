# Armazena um par de substituição para uma palavra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-store-replacement.php

---

# pspell\_store\_replacement

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_store\_replacement — Armazena um par de substituição para uma palavra

### Descrição

function **pspell\_store\_replacement**([PSpell\Dictionary](class.pspell-dictionary.md) `$dictionary`, [string](language.types.string.md) `$misspelled`, [string](language.types.string.md) `$correct`): [bool](language.types.boolean.md)

**pspell\_store\_replacement()** armazena um par de substituição para
uma palavra, para que a substituição possa ser retornada por
[pspell\_suggest()](function.pspell-suggest.md) posteriormente. Para poder aproveitar
esta função, é necessário usar
[pspell\_new\_personal()](function.pspell-new-personal.md) para abrir o dicionário. Para
salvar permanentemente o par de substituição, deve-se
usar [pspell\_config\_personal()](function.pspell-config-personal.md) e
[pspell\_config\_repl()](function.pspell-config-repl.md) para definir o caminho onde salvar as
listas de palavras personalizadas e, em seguida, usar [pspell\_save\_wordlist()](function.pspell-save-wordlist.md)
para que as alterações sejam gravadas no disco.

### Parâmetros

`dictionary`
:   Uma instância de [PSpell\Dictionary](class.pspell-dictionary.md).

`misspelled`
:   A palavra escrita incorretamente.

`correct`
:   A grafia corrigida para a palavra `misspelled`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `dictionary` agora espera uma instância de [PSpell\Dictionary](class.pspell-dictionary.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 **pspell\_store\_replacement()****

```
<?php
$pspell_config = pspell_config_create("en");
pspell_config_personal($pspell_config, "/var/dictionaries/custom.pws");
pspell_config_repl($pspell_config, "/var/dictionaries/custom.repl");
$pspell = pspell_new_config($pspell_config);

pspell_store_replacement($pspell, $misspelled, $correct);
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
