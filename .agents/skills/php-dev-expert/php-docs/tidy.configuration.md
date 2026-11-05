# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/tidy.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de Configuração do Tidy**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [tidy.default\_config](tidy.configuration.md#ini.tidy.default-config) | "" | **`INI_SYSTEM`** |  |
| [tidy.clean\_output](tidy.configuration.md#ini.tidy.clean-output) | "0" | **`INI_USER`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`tidy.default_config` [string](language.types.string.md)
:   Caminho padrão para o arquivo de configuração do tidy.

`tidy.clean_output` [bool](language.types.boolean.md)
:   Liga ou desliga a saída reparada pelo Tidy.

    **Aviso**

    A diretiva `tidy.clean_output` não deve ser ativada
    se um conteúdo não-HTML estiver sendo gerado, como por exemplo, imagens dinâmicas.

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
