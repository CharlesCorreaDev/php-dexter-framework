# Constantes Predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.constants.php

---

## Constantes Predefinidas

### Principais Constantes Predefinidas

Essas constantes são definidas pelo núcleo do PHP. Isso inclui o PHP,
o motor Zend e módulos SAPI.

**`PHP_VERSION`** ([string](language.types.string.md))
:   A versão atual do PHP como uma string no formato
    "maior.menor.lançamento[extra]".

**`PHP_MAJOR_VERSION`** ([int](language.types.integer.md))
:   O número de versão "maior" do PHP como um inteiro (exemplo: int(5)
    para a versão "5.2.7-extra").

**`PHP_MINOR_VERSION`** ([int](language.types.integer.md))
:   O número de versão "menor" do PHP como um inteiro (exemplo: int(2)
    para a versão "5.2.7-extra").

**`PHP_RELEASE_VERSION`** ([int](language.types.integer.md))
:   O número de versão de "lançamento" do PHP como um inteiro (exemplo: int(7)
    para a versão "5.2.7-extra").

**`PHP_VERSION_ID`** ([int](language.types.integer.md))
:   A versão atual do PHP como um inteiro, útil
    para comparações entre versões (exemplo: int(50207) na versão "5.2.7-extra").

**`PHP_EXTRA_VERSION`** ([string](language.types.string.md))
:   A versão "extra" do PHP como uma string (exemplo: '-extra'
    na versão "5.2.7-extra"). Geralmente utilizado por distribuidores
    para indicar uma versão de empacotamento.

**`PHP_BUILD_DATE`** ([string](language.types.string.md))
:   A data e o horário que o PHP foi compilado, no formato `"M d Y H:i:s"`. Disponível a partir do PHP 8.5.0.

**`PHP_BUILD_PROVIDER`** ([string](language.types.string.md))
:   O fornecedor que compilou o PHP. Disponível a partir do PHP 8.5.0.

    > **Nota**:
    >
    > Esta constante pode não estar disponível em todas as compilações do PHP. (ex: não definida ao
    > compilar a partir do código-fonte sem especificar um valor durante a configuração).

**`ZEND_THREAD_SAFE`** ([bool](language.types.boolean.md))
:   Indica se a compilação atual do PHP é segura para "threads".

**`ZEND_DEBUG_BUILD`** ([bool](language.types.boolean.md))
:   Indica se a compilação atual do PHP é uma compilação para depuração.

**`PHP_ZTS`** ([bool](language.types.boolean.md)) Sinônimo de **`ZEND_THREAD_SAFE`**
:   Indica se a compilação atual do PHP é segura para "threads".

**`PHP_DEBUG`** ([bool](language.types.boolean.md)) Sinônimo de **`ZEND_DEBUG_BUILD`**
:   Indica se a compilação atual do PHP é uma compilação para depuração.

**`DEBUG_BACKTRACE_PROVIDE_OBJECT`** ([int](language.types.integer.md))
:   Preenche o índice "object".

**`DEBUG_BACKTRACE_IGNORE_ARGS`** ([int](language.types.integer.md))
:   Não inclui o argumento de funções no stack trace.

**`PHP_MAXPATHLEN`** ([int](language.types.integer.md))
:   O tamanho máximo do nome de um arquivo (incluindo seus diretórios) suportado
    nesta versão do PHP.

**`PHP_OS`** ([string](language.types.string.md))
:   O sistema operacional para o qual o PHP foi compilado.

**`PHP_OS_FAMILY`** ([string](language.types.string.md))
:   A família do sistema operacional para o qual o PHP foi compilado. Qualquer uma entre
    `'Windows'`, `'BSD'`,
    `'Darwin'`, `'Solaris'`,
    `'Linux'` ou `'Unknown'`.
    Disponível a partir do PHP 7.2.0.

**`PHP_SAPI`** ([string](language.types.string.md))
:   O nome da Server API para esta compilação do PHP.
    Veja também [php\_sapi\_name()](function.php-sapi-name.md).

**`PHP_EOL`** ([string](language.types.string.md))
:   O símbolo correto de 'Fim de linha' para esta plataforma.

**`PHP_INT_MAX`** ([int](language.types.integer.md))
:   O maior inteiro suportado nesta compilação do PHP. Geralmente int(2147483647)
    em sistemas de 32 bit e int(9223372036854775807) em sistemas de 64 bits.

**`PHP_INT_MIN`** ([int](language.types.integer.md))
:   O menor inteiro suportado nesta compilação do PHP. Geralmente int(-2147483648) em sistemas 32 bits e
    int(-9223372036854775808) em sistemas 64 bit.
    Normalmente PHP\_INT\_MIN === ~PHP\_INT\_MAX.

**`PHP_INT_SIZE`** ([int](language.types.integer.md))
:   O tamanho de um inteiro em bytes nesta compilação do PHP.

**`PHP_FLOAT_DIG`** ([int](language.types.integer.md))
:   Número de dígitos decimais que podem ser arredondados para um float e recuperados
    sem perda de precisão.
    Disponível a partir do PHP 7.2.0.

**`PHP_FLOAT_EPSILON`** ([float](language.types.float.md))
:   O menor número positivo representável x, tal que `x + 1.0 !=
    1.0`.
    Disponível a partir do PHP 7.2.0.

**`PHP_FLOAT_MIN`** ([float](language.types.float.md))
:   O menor número de ponto flutuante *positivo* representável.
    Se você precisar do menor número de ponto flutuante *negativo*, use `- PHP_FLOAT_MAX`.
    Disponível a partir do PHP 7.2.0.

**`PHP_FLOAT_MAX`** ([float](language.types.float.md))
:   O maior número de ponto flutuante representável.
    Disponível a partir do PHP 7.2.0.

**`DEFAULT_INCLUDE_PATH`** ([string](language.types.string.md))

**`PEAR_INSTALL_DIR`** ([string](language.types.string.md))

**`PEAR_EXTENSION_DIR`** ([string](language.types.string.md))

**`PHP_EXTENSION_DIR`** ([string](language.types.string.md))
:   O diretório padrão onde localizar extensões carregáveis dinamicamente
    (podendo ser sobrescrito por [extension\_dir](ini.core.md#ini.extension-dir)).
    Tem como o padrão **`PHP_PREFIX`** (ou `PHP_PREFIX . "\\ext"` no Windows).

**`PHP_PREFIX`** ([string](language.types.string.md))
:   O valor **--prefix** foi configurado durante o comando "configure".
    No Windows, este é o valor de **--with-prefix**
    informado no comando "configure".

**`PHP_BINDIR`** ([string](language.types.string.md))
:   O valor **--bindir** foi definido no comando "configure".
    No Windows, é o valor informado em **--with-prefix**
    durante o comando "configure".

**`PHP_SBINDIR`** ([string](language.types.string.md))
:   O valor **--sbindir** foi definido no comando "configure".
    No Windows, é o valor informado em **--with-prefix**
    durante o comando "configure". Disponível a partir do PHP 8.4.0.

**`PHP_BINARY`** ([string](language.types.string.md))
:   Especifica o caminho do binário do PHP utilizado na execução do script.

**`PHP_MANDIR`** ([string](language.types.string.md))
:   Especifica onde as páginas do manual foram instaladas.

    > **Nota**:
    >
    > Esta constante não está presente nas versões Windows do PHP.

**`PHP_LIBDIR`** ([string](language.types.string.md))

**`PHP_DATADIR`** ([string](language.types.string.md))

**`PHP_SYSCONFDIR`** ([string](language.types.string.md))

**`PHP_LOCALSTATEDIR`** ([string](language.types.string.md))

**`PHP_CONFIG_FILE_PATH`** ([string](language.types.string.md))

**`PHP_CONFIG_FILE_SCAN_DIR`** ([string](language.types.string.md))

**`PHP_SHLIB_SUFFIX`** ([string](language.types.string.md))
:   O sufixo de bibliotecas compartilhadas da plataforma na qual o PHP foi compilado. Geralmente "so" (Unix)
    ou "dll" (Windows).

**`PHP_FD_SETSIZE`** ([int](language.types.integer.md))
:   O número máximo de descritores de arquivos para as chamadas de sistema "select". Disponível
    a partir do PHP 7.1.0.

**`E_ERROR`** ([int](language.types.integer.md))

**`E_WARNING`** ([int](language.types.integer.md))

**`E_PARSE`** ([int](language.types.integer.md))

**`E_NOTICE`** ([int](language.types.integer.md))

**`E_CORE_ERROR`** ([int](language.types.integer.md))

**`E_CORE_WARNING`** ([int](language.types.integer.md))

**`E_COMPILE_ERROR`** ([int](language.types.integer.md))

**`E_COMPILE_WARNING`** ([int](language.types.integer.md))

**`E_USER_ERROR`** ([int](language.types.integer.md))

**`E_USER_WARNING`** ([int](language.types.integer.md))

**`E_USER_NOTICE`** ([int](language.types.integer.md))

**`E_RECOVERABLE_ERROR`** ([int](language.types.integer.md))

**`E_DEPRECATED`** ([int](language.types.integer.md))

**`E_USER_DEPRECATED`** ([int](language.types.integer.md))

**`E_ALL`** ([int](language.types.integer.md))

**`E_STRICT`** ([int](language.types.integer.md))
:   [Constantes para relatório de erros](errorfunc.constants.md)

**`__COMPILER_HALT_OFFSET__`** ([int](language.types.integer.md))

**`true`** ([bool](language.types.boolean.md))
:   Veja [Booleanos](language.types.boolean.md).

**`false`** ([bool](language.types.boolean.md))
:   Veja [Booleanos](language.types.boolean.md).

**`null`** ([null](language.types.null.md))
:   Veja [Null](language.types.null.md).

**`PHP_WINDOWS_EVENT_CTRL_C`** ([int](language.types.integer.md))
:   Um evento
    `CTRL
    +C`
    do Windows.
    Disponível a partir do PHP 7.4.0 (somente para o Windows).

**`PHP_WINDOWS_EVENT_CTRL_BREAK`** ([int](language.types.integer.md))
:   Um evento
    `CTRL
    +BREAK`
    do Windows.
    Disponível a partir do PHP 7.4.0 (somente para o Windows).

**`PHP_CLI_PROCESS_TITLE`** ([bool](language.types.boolean.md))
:   Indica se a configuração e obtenção do título do processo está disponível.
    Disponível apenas no CLI SAPI.

**`STDERR`** ([resource](language.types.resource.md))
:   Um fluxo já aberto para `stderr`.
    Disponível apenas no CLI SAPI.

**`STDIN`** ([resource](language.types.resource.md))
:   Um fluxo já aberto para `stdin`.
    Disponível apenas no CLI SAPI.

**`STDOUT`** ([resource](language.types.resource.md))
:   Um fluxo já aberto para `stdout`.
    Disponível apenas no CLI SAPI.

Veja também: [Constantes
Mágicas](language.constants.magic.md).

### Constantes Padrão Predefinidas

Todas as constantes de [extensões do
núcleo](extensions.membership.md#extensions.membership.core) são definidas no PHP por padrão.

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
