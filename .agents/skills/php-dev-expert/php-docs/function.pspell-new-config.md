# Carrega um novo dicionário com configurações baseadas em uma configuração fornecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-new-config.php

---

# pspell\_new\_config

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_new\_config — Carrega um novo dicionário com configurações baseadas em uma configuração fornecida

### Descrição

function **pspell\_new\_config**([PSpell\Config](class.pspell-config.md) `$config`): [PSpell\Dictionary](class.pspell-dictionary.md)|[false](language.types.singleton.md)

**pspell\_new\_config()** abre um novo dicionário com
configurações especificadas em um `config`, criado com
[pspell\_config\_create()](function.pspell-config-create.md) e modificado com
funções **pspell\_config\_\*()**. Este método oferece
a maior flexibilidade e possui todas as funcionalidades fornecidas por
[pspell\_new()](function.pspell-new.md) e
[pspell\_new\_personal()](function.pspell-new-personal.md).

### Parâmetros

`config`
:   O parâmetro `config` é aquele retornado por
    [pspell\_config\_create()](function.pspell-config-create.md) quando a configuração foi criada.

### Valor Retornado

Retorna uma instância de [PSpell\Dictionary](class.pspell-dictionary.md) em caso de sucesso, ou **`false`** em caso de falha

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `config` agora espera uma instância de [PSpell\Config](class.pspell-config.md); anteriormente, um [resource](language.types.resource.md) era esperado. |
| 8.1.0 | Agora, retorna uma instância de [PSpell\Dictionary](class.pspell-dictionary.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 **pspell\_new\_config()****

```
<?php
$pspell_config = pspell_config_create("en");
pspell_config_personal($pspell_config, "/var/dictionaries/custom.pws");
pspell_config_repl($pspell_config, "/var/dictionaries/custom.repl");
$pspell = pspell_new_config($pspell_config);
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
