# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/trader.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Trader**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [trader.real\_precision](trader.configuration.md#ini.trader.real-precision) | 3 | **`INI_ALL`** | Desde o trader 0.2.1 |
| [trader.real\_round\_mode](trader.configuration.md#ini.trader.real-round-mode) | HALF\_DOWN | **`INI_ALL`** | Desde o trader 0.3.0 |

Aqui está uma breve explicação das
diretivas de configuração.

`trader.real_precision` [int](language.types.integer.md)
:   Todos os valores nos arrays retornados serão arredondados para essa precisão.
    No entanto, os cálculos dentro do TA-Lib ocorrem com valores não arredondados.

`trader.real_round_mode` [string](language.types.string.md)
:   Controla a política de arredondamento real do trader. Os valores válidos são `HALF_UP`,
    `HALF_DOWN`, `HALF_EVEN` e `HALF_ODD`. O comportamento é idêntico ao da função [round()](function.round.md) usada com o argumento mode.

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
