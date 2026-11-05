# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**FFI Opções de Configuração**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [ffi.enable](ffi.configuration.md#ini.ffi.enable) | "preload" | **`INI_SYSTEM`** |  |
| [ffi.preload](ffi.configuration.md#ini.ffi.preload) | "" | **`INI_SYSTEM`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`ffi.enable` [string](language.types.string.md)
:   Permite habilitar (`"true"`) ou desabilitar
    (`"false"`) o uso da API FFI, ou restringi-la apenas à
    SAPI CLI e arquivos pré-carregados (`"preload"`).

    As restrições da API FFI afetam apenas a classe [FFI](class.ffi.md),
    mas não as funções sobrecarregadas dos objetos [FFI\CData](class.ffi-cdata.md).
    Isto significa que é possível criar alguns objetos [FFI\CData](class.ffi-cdata.md)
    em arquivos pré-carregados e então usá-los diretamente em scripts PHP.

`ffi.preload` [string](language.types.string.md)
:   Permite o pré-carregamento de ligações FFI durante a inicialização, o que não é possível com [FFI::load()](ffi.load.md)
    se [opcache.preload\_user](opcache.configuration.md#ini.opcache.preload-user) estiver definida.
    Esta diretiva aceita uma lista delimitada de nomes de arquivos por **`DIRECTORY_SEPARATOR`**.
    As ligações pré-carregadas podem ser acessadas chamando [FFI::scope()](ffi.scope.md).

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
