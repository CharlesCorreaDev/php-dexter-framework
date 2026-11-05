# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/misc.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração Miscelâneas**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [ignore\_user\_abort](misc.configuration.md#ini.ignore-user-abort) | "0" | **`INI_ALL`** |  |
| [highlight.string](misc.configuration.md#ini.syntax-highlighting) | "#DD0000" | **`INI_ALL`** |  |
| [highlight.comment](misc.configuration.md#ini.syntax-highlighting) | "#FF8000" | **`INI_ALL`** |  |
| [highlight.keyword](misc.configuration.md#ini.syntax-highlighting) | "#007700" | **`INI_ALL`** |  |
| [highlight.default](misc.configuration.md#ini.syntax-highlighting) | "#0000BB" | **`INI_ALL`** |  |
| [highlight.html](misc.configuration.md#ini.syntax-highlighting) | "#000000" | **`INI_ALL`** |  |
| [browscap](misc.configuration.md#ini.browscap) | NULL | **`INI_SYSTEM`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`ignore_user_abort` [bool](language.types.boolean.md)
:   **`false`** por padrão. Se modificado para **`true`**, os scripts não serão terminados
    depois que um cliente tiver abortado sua conexão.

    Consulte também [ignore\_user\_abort()](function.ignore-user-abort.md).

`highlight.bg` [string](language.types.string.md)

`highlight.comment` [string](language.types.string.md)

`highlight.default` [string](language.types.string.md)

`highlight.html` [string](language.types.string.md)

`highlight.keyword` [string](language.types.string.md)

`highlight.string` [string](language.types.string.md)
:   Cores para o modo de Destaque de Sintaxe. Qualquer argumento que seja aceito em
    <font color="??????"> irá funcionar.

`browscap` [string](language.types.string.md)
:   Nome (ex.: browscap.ini) e localização do arquivo de
    capacidades do navegador. Consulte também [get\_browser()](function.get-browser.md).

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
