# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/igbinary.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração de Igbinary**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [igbinary.compact\_strings](igbinary.configuration.md#ini.igbinary.compact-strings) | 1 | **`INI_ALL`** |  |

**Opções de configuração de sessão que afetam o comportamento do Igbinary**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [session.save\_handler](igbinary.configuration.md#ini.igbinary.save-handler) | "files" | **`INI_ALL`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`igbinary.compact_strings` [bool](language.types.boolean.md)
:   Habilita ou desabilita a compactação de strings duplicadas.
    O padrão é On.

`session.save_handler` [string](language.types.string.md)
:   Igbinary é usado como manipulador de sessão definindo este valor como `igbinary`.

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
