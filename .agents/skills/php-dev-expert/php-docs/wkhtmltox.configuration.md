# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wkhtmltox.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**wkhtmltox Opções de Configuração**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [wkhtmltox.graphics](wkhtmltox.configuration.md#ini.wkhtmltox.graphics) | Off | **`INI_SYSTEM`**|**`INI_PERDIR`** | >= 0.3.2 |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`wkhtmltox.graphics` [bool](language.types.boolean.md)
:   Permite que libwkhtmltox use gráficos.

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
