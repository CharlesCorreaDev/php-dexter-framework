# Restaura o valor de uma opção de configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ini-restore.php

---

# ini\_restore

(PHP 4, PHP 5, PHP 7, PHP 8)

ini\_restore — Restaura o valor de uma opção de configuração

### Descrição

function **ini\_restore**([string](language.types.string.md) `$option`): [void](language.types.void.md)

Restaura uma determinada opção de configuração ao seu valor original.

### Parâmetros

`option`
:   O nome da opção de configuração.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **ini\_restore()****

```
<?php
$setting = 'html_errors';

echo 'Valor atual para \'' . $setting . '\': ' . ini_get($setting), PHP_EOL;

ini_set($setting, ini_get($setting) ? 0 : 1);
echo 'Novo valor para \'' . $setting . '\': ' . ini_get($setting), PHP_EOL;

ini_restore($setting);
echo 'Valor original para \'' . $setting . '\': ' . ini_get($setting), PHP_EOL;
?>
```

O exemplo acima produzirá:

```
Valor atual para 'html_errors': 1
Novo valor para 'html_errors': 0
Valor original para 'html_errors': 1
```

### Veja também

- [ini\_get()](function.ini-get.md) - Obtém o valor de uma opção de configuração
- [ini\_get\_all()](function.ini-get-all.md) - Obtém todas as opções de configuração
- [ini\_set()](function.ini-set.md) - Define o valor de uma opção de configuração

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
