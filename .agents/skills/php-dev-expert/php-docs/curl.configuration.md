# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/curl.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração cURL**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [curl.cainfo](curl.configuration.md#ini.curl.cainfo) | NULL | **`INI_SYSTEM`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`curl.cainfo` [string](language.types.string.md)
:   Um valor padrão para a opção **`CURLOPT_CAINFO`**. Precisa
    ser um caminho absoluto.

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
