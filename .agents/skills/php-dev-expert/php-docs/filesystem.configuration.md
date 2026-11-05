# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filesystem.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração do Sistema de Arquivos e de Fluxos**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | "1" | **`INI_SYSTEM`** |  |
| [allow\_url\_include](filesystem.configuration.md#ini.allow-url-include) | "0" | **`INI_SYSTEM`** | Descontinuada a partir do PHP 7.4.0. |
| [user\_agent](filesystem.configuration.md#ini.user-agent) | NULL | **`INI_ALL`** |  |
| [default\_socket\_timeout](filesystem.configuration.md#ini.default-socket-timeout) | "60" | **`INI_ALL`** |  |
| [from](filesystem.configuration.md#ini.from) | "" | **`INI_ALL`** |  |
| [auto\_detect\_line\_endings](filesystem.configuration.md#ini.auto-detect-line-endings) | "0" | **`INI_ALL`** | Descontinuada a partir do PHP 8.1.0. |
| [sys\_temp\_dir](filesystem.configuration.md#ini.sys-temp-dir) | "" | **`INI_SYSTEM`** |  |

Aqui está uma breve explicação das
diretivas de configuração.

`allow_url_fopen` [bool](language.types.boolean.md)
:   Esta opção habilita os empacotadores fopen sensíveis a URL que permitem
    acessar objetos URL como se fossem arquivos. Empacotadores padrão são fornecidos para
    o acesso a [arquivos remotos](features.remote-files.md)
    usando o protocolo ftp ou http, e algumas extensões como
    [zlib](ref.zlib.md) podem registrar empacotadores
    adicionais.

`allow_url_include` [bool](language.types.boolean.md)
:   Esta opção permite o uso de empacotadores fopen sensíveis a URL com as
    seguintes funções: [include](function.include.md), [include\_once](function.include-once.md),
    [require](function.require.md) e [require\_once](function.require-once.md).

    > **Nota**:
    >
    > Esta configuração requer que a opção allow\_url\_fopen esteja habilitada.

`user_agent` [string](language.types.string.md)
:   Define o agente do usuário que o PHP irá enviar.

`default_socket_timeout` [int](language.types.integer.md)
:   Limite padrão de tempo (em segundos) para fluxos baseados em soquete.
    Especificar um valor negativo significa um limite de tempo infinito.

`from` [string](language.types.string.md)
:   O endereço de e-mail que será usado em conexões FTP não autenticadas e
    como o valor do cabeçalho From em conexões HTTP, ao usar os empacotadores
    ftp e http, respectivamente.

`auto_detect_line_endings` [bool](language.types.boolean.md)
:   Quando habilitada, o PHP examinará os dados lidos por
    [fgets()](function.fgets.md) e [file()](function.file.md) para verificar se
    está usando a convenção de fim de linha do Unix, MS-DOS ou Macintosh.

    Isso permite que o PHP interopere com sistemas Macintosh,
    mas o padrão é Off (desligado), pois há uma penalidade de desempenho muito pequena
    ao detectar as convenções de fim de linha para a primeira linha, e também
    porque as pessoas que usam retornos de carro como separadores de itens nos
    sistemas Unix podem experimentar problemas de incompatibilidade com versões anteriores.

`sys_temp_dir` [string](language.types.string.md)

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
