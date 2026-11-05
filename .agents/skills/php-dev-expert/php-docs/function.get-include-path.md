# Obtém a opção de configuração include_path atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-include-path.php

---

# get\_include\_path

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

get\_include\_path — Obtém a opção de configuração include\_path atual

### Descrição

function **get\_include\_path**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém a opção de configuração [include\_path](ini.core.md#ini.include-path)
atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o caminho, como uma string, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **get\_include\_path()****

```
<?php
echo get_include_path();

// Ou usando ini_get()
echo ini_get('include_path');
?>
```

### Veja também

- [ini\_get()](function.ini-get.md) - Obtém o valor de uma opção de configuração
- [restore\_include\_path()](function.restore-include-path.md) - Restaura o valor da opção de configuração include\_path
- [set\_include\_path()](function.set-include-path.md) - Define a opção de configuração include\_path
- [include](function.include.md) - include

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
