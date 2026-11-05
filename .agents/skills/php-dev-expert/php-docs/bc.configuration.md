# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/bc.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração da BC Math**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [bcmath.scale](bc.configuration.md#ini.bcmath.scale) | "0" | **`INI_ALL`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`bcmath.scale` [int](language.types.integer.md)
:   Número de casas decimais para todas as funções BC Math.
    Veja também [bcscale()](function.bcscale.md).

    > **Nota**:
    >
    > [BcMath\Number](class.bcmath-number.md) não é afetada por esta configuração.

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
