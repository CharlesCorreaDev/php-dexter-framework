# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ssh2.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`SSH2_FINGERPRINT_MD5`** ([int](language.types.integer.md))
:   Opção para [ssh2\_fingerprint()](function.ssh2-fingerprint.md) solicitando impressão
    digital da chave do host como um hash MD5.

**`SSH2_FINGERPRINT_SHA1`** ([int](language.types.integer.md))
:   Opção para [ssh2\_fingerprint()](function.ssh2-fingerprint.md) solicitando impressão
    digital da chave do host como um hash SHA1.

**`SSH2_FINGERPRINT_HEX`** ([int](language.types.integer.md))
:   Opção para [ssh2\_fingerprint()](function.ssh2-fingerprint.md) solicitando impressão
    digital da chave do host como uma sequência de hexits.

**`SSH2_FINGERPRINT_RAW`** ([int](language.types.integer.md))
:   Opção para [ssh2\_fingerprint()](function.ssh2-fingerprint.md) solicitando impressão
    digital da chave do host como uma sequência bruta de caracteres de 8 bits.

**`SSH2_TERM_UNIT_CHARS`** ([int](language.types.integer.md))
:   Opção para [ssh2\_shell()](function.ssh2-shell.md) especificando que
    `width` e `height`
    são fornecidos como tamanhos de caracteres.

**`SSH2_TERM_UNIT_PIXELS`** ([int](language.types.integer.md))
:   Opção para [ssh2\_shell()](function.ssh2-shell.md) especificando que
    `width` e `height`
    são fornecidos em unidades de pixel.

**`SSH2_DEFAULT_TERM_WIDTH`** ([int](language.types.integer.md))
:   Largura padrão do terminal solicitada por [ssh2\_shell()](function.ssh2-shell.md).

**`SSH2_DEFAULT_TERM_HEIGHT`** ([int](language.types.integer.md))
:   Altura padrão do terminal solicitada por [ssh2\_shell()](function.ssh2-shell.md).

**`SSH2_DEFAULT_TERM_UNIT`** ([int](language.types.integer.md))
:   Unidades de terminal padrão solicitadas por [ssh2\_shell()](function.ssh2-shell.md).

**`SSH2_STREAM_STDIO`** ([int](language.types.integer.md))
:   Opção para [ssh2\_fetch\_stream()](function.ssh2-fetch-stream.md) solicitando subcanal STDIO.

**`SSH2_STREAM_STDERR`** ([int](language.types.integer.md))
:   Opção para [ssh2\_fetch\_stream()](function.ssh2-fetch-stream.md) solicitando subcanal STDERR.

**`SSH2_DEFAULT_TERMINAL`** ([string](language.types.string.md))
:   Tipo de terminal padrão (por exemplo, vt102, ansi, xterm, vanilla) solicitado
    por [ssh2\_shell()](function.ssh2-shell.md).

**`SSH2_POLLIN`** ([int](language.types.integer.md))

**`SSH2_POLLEXT`** ([int](language.types.integer.md))

**`SSH2_POLLOUT`** ([int](language.types.integer.md))

**`SSH2_POLLERR`** ([int](language.types.integer.md))

**`SSH2_POLLHUP`** ([int](language.types.integer.md))

**`SSH2_POLLNVAL`** ([int](language.types.integer.md))

**`SSH2_POLL_SESSION_CLOSED`** ([int](language.types.integer.md))

**`SSH2_POLL_CHANNEL_CLOSED`** ([int](language.types.integer.md))

**`SSH2_POLL_LISTENER_CLOSED`** ([int](language.types.integer.md))

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
