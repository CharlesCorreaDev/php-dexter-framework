# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de SQLite3**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [sqlite3.extension\_dir](sqlite3.configuration.md#ini.sqlite3.extension-dir) | "" | **`INI_SYSTEM`** |  |
| [sqlite3.defensive](sqlite3.configuration.md#ini.sqlite3.defensive) | 1 | **`INI_USER`** | Disponível a partir do PHP 7.2.17 e 7.3.4 para libsqlite ≥ 3.26.0. Antes do PHP 8.2.0, essa configuração só podia ser alterada como **`INI_SYSTEM`**. |

Aqui está uma breve explicação das
diretivas de configuração.

`sqlite3.extension_dir` [string](language.types.string.md)
:   Caminho para o diretório onde as extensões carregáveis para o SQLite estão localizadas.

`sqlite3.defensive` [bool](language.types.boolean.md)
:   Quando a flag defensiva está ativada, recursos de linguagem que permitem que SQL ordinário
    corrompa deliberadamente o arquivo de banco de dados são desabilitados. Isso proíbe
    a escrita diretamente no esquema, tabelas sombra (por exemplo, tabelas de dados FTS) ou
    a tabela virtual sqlite\_dbpage.
    Esta configuração do php.ini só é eficaz para libsqlite ≥ 3.26.0.

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
