# Define o diretório base dos modelos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-interface.setscriptpath.php

---

# Yaf\_View\_Interface::setScriptPath

(Yaf >=1.0.0)

Yaf\_View\_Interface::setScriptPath — Define o diretório base dos modelos

### Descrição

abstract public function **Yaf\_View\_Interface::setScriptPath**([string](language.types.string.md) `$template_dir`): [void](language.types.void.md)

Define o diretório base dos modelos, normalmente chamado por
[Yaf\_Dispatcher](class.yaf-dispatcher.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`template_dir`
:   Um caminho absoluto par ao diretório de modelos. Por padrão,
    [Yaf\_Dispatcher](class.yaf-dispatcher.md) usa
    [application.directory](yaf.appconfig.md#configuration.yaf.directory) . "/views" como este parâmetro.

### Valor Retornado

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
