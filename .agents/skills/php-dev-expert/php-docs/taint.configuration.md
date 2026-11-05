# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/taint.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Taint**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [taint.enable](taint.configuration.md#ini.taint.enable) | 0 | **`INI_SYSTEM`** |  |
| [taint.error\_level](taint.configuration.md#ini.taint.error-level) | E\_WARNING | **`INI_ALL`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`taint.enable` [int](language.types.integer.md)
:   Informa se o Taint deve ser habilitado.

`taint.error_level` [int](language.types.integer.md)
:   O tipo de erro que o Taint reportará quando encontrar uma string
    contaminada.

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
