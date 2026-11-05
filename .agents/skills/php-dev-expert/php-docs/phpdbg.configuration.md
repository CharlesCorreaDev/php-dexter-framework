# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/phpdbg.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de phpdbg**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [phpdbg.eol](phpdbg.configuration.md#ini.phpdbg.eol) | 2 | **`INI_ALL`** | Removida a partir do PHP 8.1.0 |
| [phpdbg.path](phpdbg.configuration.md#ini.phpdbg.path) |  | 6 | Removida a partir do PHP 8.1.0 |

Aqui está uma breve explicação das
diretivas de configuração.

`phpdbg.eol` [mixed](language.types.mixed.md)
:   O tipo de fim de linha usado para a saída. Para configurar o valor, um dos
    apelidos de string precisa ser usado.

    | Valor [int](language.types.integer.md) | Apelido [string](language.types.string.md) |
    | --- | --- |
    | `0` | `CRLF`, `crlf`, `DOS`, `dos` |
    | `1` | `LF`, `lf`, `UNIX`, `unix` |
    | `2` | `CR`, `cr`, `MAC`, `mac` |

`phpdbg.path` [string](language.types.string.md)

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
