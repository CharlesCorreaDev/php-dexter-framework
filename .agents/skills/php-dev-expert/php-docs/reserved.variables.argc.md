# O número de argumentos passados para o script

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.argc.php

---

# $argc

(PHP 4, PHP 5, PHP 7, PHP 8)

$argc — O número de argumentos passados para o script

### Descrição

Contém o número de argumentos passados para o atual script quando executando
através da [linha de comando](features.commandline.md).

> **Nota**:
>
> O nome do arquivo do script é sempre passado como um argumento para o script, portanto
> o valor mínimo de $argc é `1`.

> **Nota**:
>
> Esta variável não está disponível quando [register\_argc\_argv](ini.core.md#ini.register-argc-argv)
> está desabilitada.

### Examples

**Exemplo #1 Exemplo da $argc**

```
<?php
var_dump($argc);
?>
```

Quando executando o exemplo com: php script.php arg1 arg2 arg3

O exemplo acima produzirá
algo semelhante a:

```
int(4)
```

### Notas

> **Nota**:
>
> Isto também está disponível como [$\_SERVER['argc']](reserved.variables.server.md).

### Veja também

- [getopt()](function.getopt.md) - Obtêm opções da linha de comando
- [[$argv](reserved.variables.argv.md)](reserved.variables.argv.md)

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
