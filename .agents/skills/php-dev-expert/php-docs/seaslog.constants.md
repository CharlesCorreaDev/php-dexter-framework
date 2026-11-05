# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/seaslog.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`SEASLOG_VERSION`** ([string](language.types.string.md))

**`SEASLOG_AUTHOR`** ([string](language.types.string.md))

**`SEASLOG_ALL`** ([string](language.types.string.md))
:   "ALL"

**`SEASLOG_DEBUG`** ([string](language.types.string.md))
:   "DEBUG" - Informações detalhadas de depuração. Eventos de informações refinadas.

**`SEASLOG_INFO`** ([string](language.types.string.md))
:   "INFO" - Eventos interessantes. Enfatiza o processo de execução da aplicação.

**`SEASLOG_NOTICE`** ([string](language.types.string.md))
:   "NOTICE" - Eventos normais, mas significativos. Informações que são mais importantes que o nível INFO durante a execução.

**`SEASLOG_WARNING`** ([string](language.types.string.md))
:   "WARNING" - Ocorrências excepcionais que não são erros. Informações potencialmente aberrantes que precisam de atenção e precisam ser reparadas.

**`SEASLOG_ERROR`** ([string](language.types.string.md))
:   "ERROR" - Erros de tempo de execução que não exigem ação imediata, mas normalmente deveriam.

**`SEASLOG_CRITICAL`** ([string](language.types.string.md))
:   "CRITICAL" - Condições críticas. Precisam ser reparadas imediatamente e o componente do programa não está disponível.

**`SEASLOG_ALERT`** ([string](language.types.string.md))
:   "ALERT" - Medidas devem ser tomadas imediatamente. Atenção imediata deve ser dada pelo pessoal relevante para reparos de emergência.

**`SEASLOG_EMERGENCY`** ([string](language.types.string.md))
:   "EMERGENCY" - O sistema está inutilizável.

**`SEASLOG_DETAIL_ORDER_ASC`** ([int](language.types.integer.md))
:   1

**`SEASLOG_DETAIL_ORDER_DESC`** ([int](language.types.integer.md))
:   2

**`SEASLOG_APPENDER_FILE`** ([int](language.types.integer.md))
:   1

**`SEASLOG_APPENDER_TCP`** ([int](language.types.integer.md))
:   2

**`SEASLOG_APPENDER_UDP`** ([int](language.types.integer.md))
:   3

**`SEASLOG_CLOSE_LOGGER_STREAM_MOD_ALL`** ([int](language.types.integer.md))
:   1

**`SEASLOG_CLOSE_LOGGER_STREAM_MOD_ASSIGN`** ([int](language.types.integer.md))
:   2

**`SEASLOG_REQUEST_VARIABLE_DOMAIN_PORT`** ([int](language.types.integer.md))
:   1

**`SEASLOG_REQUEST_VARIABLE_REQUEST_URI`** ([int](language.types.integer.md))
:   2

**`SEASLOG_REQUEST_VARIABLE_REQUEST_METHOD`** ([int](language.types.integer.md))
:   3

**`SEASLOG_REQUEST_VARIABLE_CLIENT_IP`** ([int](language.types.integer.md))
:   4

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
