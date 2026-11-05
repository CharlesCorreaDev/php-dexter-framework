# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zlib.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

A extensão zlib oferece a opção de comprimir transparentemente
suas páginas em tempo real, se o navegador requisitante suportar isto.
Então existem três opções no [arquivo de configuração](configuration.file.md) php.ini.

**Opções de Configuração da Zlib**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [zlib.output\_compression](zlib.configuration.md#ini.zlib.output-compression) | "0" | **`INI_ALL`** |  |
| [zlib.output\_compression\_level](zlib.configuration.md#ini.zlib.output-compression-level) | "-1" | **`INI_ALL`** |  |
| [zlib.output\_handler](zlib.configuration.md#ini.zlib.output-handler) | "" | **`INI_ALL`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`zlib.output_compression` [bool](language.types.boolean.md)/[int](language.types.integer.md)
:   Indica se as páginas deverm ser comprimidas de modo transparente. Se esta opção for
    mudada para "On" no php.ini ou na configuração do Apache, as páginas serão
    comprimidas se o navegador enviar um cabeçalho "Accept-Encoding: gzip" ou
    "deflate". "Content-Encoding: gzip" (respectivamente
    "deflate") e cabeçalhos "Vary: Accept-Encoding" serão adicionados para
    a saída.
    Em tempo de execução, isso só pode ser definido antes de enviar qualquer saída.

    Esta opção também aceita valores inteiros em vez de valores booleanos
    "On"/"Off", usando isto você pode configurar o tamanho do buffer de saída
    (o padrão é 4KB).

    > **Nota**:
    >
    > [output\_handler](outcontrol.configuration.md#ini.output-handler) deve estar
    > vazio se a diretriz estiver configurada em 'On'! Em vez disso, utilize `zlib.output_handler`.

`zlib.output_compression_level` [int](language.types.integer.md)
:   Nível de compressão utilizado. Especifique um valor
    entre 0 (sem compressão) ou 9 (compressão máxima). O valor padrão
    -1 permite ao servidor escolher que nível utilizar.

`zlib.output_handler` [string](language.types.string.md)
:   Você não pode especificar tratamentos adicionais de saída se zlib.output\_compression
    for ativado. Esta configuração faz o mesmo que a [output\_handler](outcontrol.configuration.md#ini.output-handler) mas em uma ordem diferente.

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
