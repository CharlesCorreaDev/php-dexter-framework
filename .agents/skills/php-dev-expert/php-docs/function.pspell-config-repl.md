# Define um arquivo que contém pares de substituição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-config-repl.php

---

# pspell\_config\_repl

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_config\_repl — Define um arquivo que contém pares de substituição

### Descrição

function **pspell\_config\_repl**([PSpell\Config](class.pspell-config.md) `$config`, [string](language.types.string.md) `$filename`): [bool](language.types.boolean.md)

Define um arquivo que contém pares de substituição.

Os pares de substituição melhoram a qualidade do corretor ortográfico. Quando uma palavra
está escrita incorretamente e uma sugestão adequada não foi encontrada na lista,
[pspell\_store\_replacement()](function.pspell-store-replacement.md) pode ser usada para armazenar um
par de substituição e, em seguida, [pspell\_save\_wordlist()](function.pspell-save-wordlist.md) para
salvar a lista de palavras junto com os pares de substituição.

**pspell\_config\_repl()** deve ser usado em uma configuração
antes de chamar [pspell\_new\_config()](function.pspell-new-config.md).

### Parâmetros

`config`
:   Uma instância de [PSpell\Config](class.pspell-config.md).

`filename`
:   O arquivo deve ter acesso de escrita para o usuário com o qual o PHP está sendo executado (por exemplo, nobody).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `config` agora espera uma instância de [PSpell\Config](class.pspell-config.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 **pspell\_config\_repl()****

```
<?php
$pspell_config = pspell_config_create("en");
pspell_config_personal($pspell_config, "/var/dictionaries/custom.pws");
pspell_config_repl($pspell_config, "/var/dictionaries/custom.repl");
$pspell = pspell_new_config($pspell_config);
pspell_check($pspell, "thecat");
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
