# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/readline.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Readline**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [cli.pager](readline.configuration.md#ini.cli.pager) | "" | **`INI_ALL`** |  |
| [cli.prompt](readline.configuration.md#ini.cli.prompt) | "\\b \\> " | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`cli.pager` [string](language.types.string.md)
:   Ferramenta externa para mostrar a saída da
    [linha de comando](features.commandline.md).

`cli.prompt` [string](language.types.string.md)
:   Prompt da [linha de comando](features.commandline.md).

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
