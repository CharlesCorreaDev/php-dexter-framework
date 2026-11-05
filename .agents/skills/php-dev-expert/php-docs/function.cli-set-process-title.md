# Define o título do processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cli-set-process-title.php

---

# cli\_set\_process\_title

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

cli\_set\_process\_title — Define o título do processo

### Descrição

function **cli\_set\_process\_title**([string](language.types.string.md) `$title`): [bool](language.types.boolean.md)

Define o título do processo, visível em ferramentas como **top** e
**ps**. Esta função está disponível apenas no
modo [CLI](features.commandline.md).

### Parâmetros

`title`
:   O novo título.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Um **`E_WARNING`** será gerado se o sistema operacional
não for compatível.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | **cli\_set\_process\_title()** agora emite um **`E_WARNING`** ao definir um título muito longo para um processo; anteriormente o título seria truncado. |

### Examples

```
<?php
$title = "Meu Super Script PHP";
$pid = getmypid(); // pode-se usar isto para ver o título do processo no comando "ps"

if (!cli_set_process_title($title)) {
    echo "Não foi possível definir o título do processo para o PID $pid...\n";
    exit(1);
} else {
    echo "O título '$title' para o PID $pid foi definido para o seu processo!\n";
    sleep(5);
}
?>
```

### Veja também

- [cli\_get\_process\_title()](function.cli-get-process-title.md) - Retorna o título do processo atual

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
