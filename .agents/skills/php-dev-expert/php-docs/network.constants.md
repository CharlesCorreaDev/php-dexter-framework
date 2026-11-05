# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/network.constants.php

---

# Constantes predefinidas

As constantes abaixo estão sempre disponíveis como parte do núcleo do PHP.

**Opções em `flags` disponíveis para
[openlog()](function.openlog.md)**

**`LOG_CONS`** ([int](language.types.integer.md))
:   Se houver um erro ao enviar dados para o registrador do sistema,
    grava diretamente no console do sistema.

**`LOG_NDELAY`** ([int](language.types.integer.md))
:   Abre a conexão com o registrador imediatamente.

**`LOG_ODELAY`** ([int](language.types.integer.md))
:   Atrasa a abertura da conexão até que a primeira mensagem seja registrada.
    Este é o comportamento padrão.

**`LOG_NOWAIT`** ([int](language.types.integer.md))

**`LOG_PERROR`** ([int](language.types.integer.md))
:   Além disso, registra mensagens em **`STDERR`**.

**`LOG_PID`** ([int](language.types.integer.md))
:   Inclui o PID com cada mensagem de log.

**Opções de `facility` para
[openlog()](function.openlog.md)**

**`LOG_AUTH`** ([int](language.types.integer.md))
:   Para mensagens de segurança/autorização.

    > **Nota**:
    >
    > Use **`LOG_AUTHPRIV`** quando disponível.

**`LOG_AUTHPRIV`** ([int](language.types.integer.md))
:   Para mensagens privadas de segurança/autorização.

**`LOG_CRON`** ([int](language.types.integer.md))
:   Para mensagens do daemon de relógio.
    Por exemplo **cron** ou **at**.

**`LOG_DAEMON`** ([int](language.types.integer.md))
:   Para mensagens do daemon do sistema.

**`LOG_KERN`** ([int](language.types.integer.md))
:   Para mensagens do kernel.

**`LOG_LOCAL0`** ([int](language.types.integer.md))
:   Reservado para uso local.

    **Aviso**

    Não disponível no Windows.

**`LOG_LOCAL1`** ([int](language.types.integer.md))
:   Reservado para uso local.

    **Aviso**

    Não disponível no Windows.

**`LOG_LOCAL2`** ([int](language.types.integer.md))
:   Reservado para uso local.

    **Aviso**

    Não disponível no Windows.

**`LOG_LOCAL3`** ([int](language.types.integer.md))
:   Reservado para uso local.

    **Aviso**

    Não disponível no Windows.

**`LOG_LOCAL4`** ([int](language.types.integer.md))
:   Reservado para uso local.

    **Aviso**

    Não disponível no Windows.

**`LOG_LOCAL5`** ([int](language.types.integer.md))
:   Reservado para uso local.

    **Aviso**

    Não disponível no Windows.

**`LOG_LOCAL6`** ([int](language.types.integer.md))
:   Reservado para uso local.

    **Aviso**

    Não disponível no Windows.

**`LOG_LOCAL7`** ([int](language.types.integer.md))
:   Reservado para uso local.

    **Aviso**

    Não disponível no Windows.

**`LOG_LPR`** ([int](language.types.integer.md))
:   Para mensagens do subsistema de impressora de linha.

**`LOG_MAIL`** ([int](language.types.integer.md))
:   Para mensagens do subsistema de correio.

**`LOG_NEWS`** ([int](language.types.integer.md))
:   Para mensagens do subsistema de notícias da USENET.

**`LOG_SYSLOG`** ([int](language.types.integer.md))
:   Para mensagens geradas internamente por **syslogd**.

**`LOG_USER`** ([int](language.types.integer.md))
:   Para mensagens genéricas no nível do usuário.

**`LOG_UUCP`** ([int](language.types.integer.md))
:   Para mensagens do subsistema UUCP.

**Opções de `priority` para
[syslog()](function.syslog.md)**

As constantes de prioridade são listadas desde urgentes até mensagens de depuração.

**`LOG_EMERG`** ([int](language.types.integer.md))
:   Emergência, o sistema está inutilizável.
    Isso corresponde a uma condição de pânico.
    Geralmente transmitida para todos os processos.

**`LOG_ALERT`** ([int](language.types.integer.md))
:   Alerta, é necessária ação imediata.
    Por exemplo, um banco de dados do sistema corrompido.

**`LOG_CRIT`** ([int](language.types.integer.md))
:   Crítico, é necessária ação.
    Por exemplo, erros de dispositivo rígido.

**`LOG_ERR`** ([int](language.types.integer.md))
:   Mensagens de erros.

**`LOG_WARNING`** ([int](language.types.integer.md))
:   Mensagens de alerta.

**`LOG_NOTICE`** ([int](language.types.integer.md))
:   Mensagens de aviso correspondem a condições que não são condições de erro,
    mas que podem exigir tratamento especial.

**`LOG_INFO`** ([int](language.types.integer.md))
:   Mensagens informativas.

**`LOG_DEBUG`** ([int](language.types.integer.md))
:   Mensagens de depuração que contêm informações normalmente úteis apenas
    ao depurar um programa.

**Opções de `type` para
[dns\_get\_record()](function.dns-get-record.md)**

**`DNS_ANY`** ([int](language.types.integer.md))
:   Qualquer registro de recurso.
    Na maioria dos sistemas isso retorna todos os registros de recursos,
    porém devido a excentricidades no desempenho do
    `libresolv` entre plataformas isso não é garantido.

    O **`DNS_ALL`** mais lento coletará todos os registros de forma mais confiável.

**`DNS_ALL`** ([int](language.types.integer.md))
:   Consulta iterativamente o servidor de nomes para cada tipo de registro disponível.

**`DNS_A`** ([int](language.types.integer.md))
:   Recurso de endereço IPv4.

**`DNS_AAAA`** ([int](language.types.integer.md))
:   Recurso de endereço IPv6.

**`DNS_A6`** ([int](language.types.integer.md))
:   Definido como parte do IPv6 inicial, mas rebaixado para histórico pela
    [» RFC 6563](https://datatracker.ietf.org/doc/html/rfc6563).

**`DNS_CAA`** ([int](language.types.integer.md))
:   Recurso de autorização da autoridade de certificação.
    Disponível a partir do PHP 7.0.16 e 7.1.2.

    **Aviso**

    Não disponível no Windows.

**`DNS_CNAME`** ([int](language.types.integer.md))
:   Recurso de Alias (Canonical Name).

**`DNS_HINFO`** ([int](language.types.integer.md))
:   Recurso de informações do host.
    Para obter mais explicações e significados desses valores, visite a página da IANA em
    [» Nomes de sistemas operacionais](https://www.iana.org/assignments/operating-system-names).

**`DNS_MX`** ([int](language.types.integer.md))
:   Recurso de troca de correio.

**`DNS_NAPTR`** ([int](language.types.integer.md))
:   Ponteiro de autoridade de nomes.

**`DNS_NS`** ([int](language.types.integer.md))
:   Recurso de servidor de nomes autoritativo.

**`DNS_PTR`** ([int](language.types.integer.md))
:   Recurso de ponteiro.

**`DNS_SOA`** ([int](language.types.integer.md))
:   Início do recurso de autoridade.

**`DNS_SRV`** ([int](language.types.integer.md))
:   Localizador de serviço.

**`DNS_TXT`** ([int](language.types.integer.md))
:   Recurso de texto.

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
