# Define a opção de configuração include_path

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.set-include-path.php

---

# set\_include\_path

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

set\_include\_path — Define a opção de configuração include\_path

### Descrição

function **set\_include\_path**([string](language.types.string.md) `$include_path`): [string](language.types.string.md)|[false](language.types.singleton.md)

Define a opção de configuração [include\_path](ini.core.md#ini.include-path)
para toda a duração do script.

### Parâmetros

`include_path`
:   O novo valor para o [include\_path](ini.core.md#ini.include-path)

### Valor Retornado

Retorna o [include\_path](ini.core.md#ini.include-path) antigo em
caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **set\_include\_path()****

```
<?php
set_include_path('/usr/lib/pear');

// Ou usando ini_set()
ini_set('include_path', '/usr/lib/pear');
?>
```

**Exemplo #2 Adicionando ao caminho de inclusão**

Fazendo uso da constante **`PATH_SEPARATOR`**, é
possível estender o caminho de inclusão independentemente do sistema operacional.

Neste exemplo foi adicionado o caminho /usr/lib/pear no final
do `include_path` existente.

```
<?php
$path = '/usr/lib/pear';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
?>
```

### Veja também

- [ini\_set()](function.ini-set.md) - Define o valor de uma opção de configuração
- [get\_include\_path()](function.get-include-path.md) - Obtém a opção de configuração include\_path atual
- [restore\_include\_path()](function.restore-include-path.md) - Restaura o valor da opção de configuração include\_path
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
