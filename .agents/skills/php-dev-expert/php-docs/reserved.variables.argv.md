# Array de argumentos passados para o script

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.argv.php

---

# $argv

(PHP 4, PHP 5, PHP 7, PHP 8)

$argv — Array de argumentos passados para o script

### Descrição

Contém um [array](language.types.array.md) de todos argumentos passados para o script quando executando
através da [linha de comando](features.commandline.md).

> **Nota**:
>
> O primeiro argumento é sempre o nome do arquivo do script atual, portanto
> $argv[0] é o nome do script.

> **Nota**:
>
> Esta variável não está disponível quando [register\_argc\_argv](ini.core.md#ini.register-argc-argv)
> está desabilitada.

**Aviso**

Para testar se um script está sendo executado a partir da linha de
comando, [php\_sapi\_name()](function.php-sapi-name.md) deve ser usada
em vez de verificar se $argv ou
[$\_SERVER['argv']](reserved.variables.server.md) estão definidas.

### Examples

**Exemplo #1 Exemplo de $argv**

```
<?php
var_dump($argv);
?>
```

Quando executando o exemplo com: php script.php arg1 arg2 arg3

O exemplo acima produzirá
algo semelhante a:

```
array(4) {
  [0]=>
  string(10) "script.php"
  [1]=>
  string(4) "arg1"
  [2]=>
  string(4) "arg2"
  [3]=>
  string(4) "arg3"
}
```

### Notas

> **Nota**:
>
> Isto também está disponível como [$\_SERVER['argv']](reserved.variables.server.md).

### Veja também

- [getopt()](function.getopt.md) - Obtêm opções da linha de comando
- [[$argc](reserved.variables.argc.md)](reserved.variables.argc.md)

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
