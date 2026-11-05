# Restaura o valor da opção de configuração include_path

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.restore-include-path.php

---

# restore\_include\_path

(PHP 4 >= 4.3.0, PHP 5, PHP 7)

restore\_include\_path — Restaura o valor da opção de configuração include\_path

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **restore\_include\_path**(): [void](language.types.void.md)

Restaura a opção de configuração [include\_path](ini.core.md#ini.include-path)
de volta ao seu valor original master como definido no
php.ini

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi removida. |
| 7.4.0 | Esta função foi descontinuada. |

### Examples

**Exemplo #1 Exemplo de **restore\_include\_path()****

```
<?php

echo get_include_path();  // .:/usr/local/lib/php

set_include_path('/inc');

echo get_include_path();  // /inc

restore_include_path();

// Ou usando ini_restore()
ini_restore('include_path');

echo get_include_path();  // .:/usr/local/lib/php

?>
```

### Veja também

- [ini\_restore()](function.ini-restore.md) - Restaura o valor de uma opção de configuração
- [get\_include\_path()](function.get-include-path.md) - Obtém a opção de configuração include\_path atual
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
