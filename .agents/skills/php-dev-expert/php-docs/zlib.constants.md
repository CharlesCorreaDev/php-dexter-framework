# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zlib.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`FORCE_GZIP`** ([int](language.types.integer.md))

**`FORCE_DEFLATE`** ([int](language.types.integer.md))

**`ZLIB_ENCODING_RAW`** ([int](language.types.integer.md))
:   Algotítmo DEFLATE conforme RFC 1951.

**`ZLIB_ENCODING_DEFLATE`** ([int](language.types.integer.md))
:   Algorítimo ZLIB conforme RFC 1950.

**`ZLIB_ENCODING_GZIP`** ([int](language.types.integer.md))
:   Algorítimo GZIP conforme RFC 1952.

**`ZLIB_FILTERED`** ([int](language.types.integer.md))

**`ZLIB_HUFFMAN_ONLY`** ([int](language.types.integer.md))

**`ZLIB_FIXED`** ([int](language.types.integer.md))

**`ZLIB_RLE`** ([int](language.types.integer.md))

**`ZLIB_DEFAULT_STRATEGY`** ([int](language.types.integer.md))

**`ZLIB_BLOCK`** ([int](language.types.integer.md))

**`ZLIB_NO_FLUSH`** ([int](language.types.integer.md))

**`ZLIB_PARTIAL_FLUSH`** ([int](language.types.integer.md))

**`ZLIB_SYNC_FLUSH`** ([int](language.types.integer.md))

**`ZLIB_FULL_FLUSH`** ([int](language.types.integer.md))

**`ZLIB_FINISH`** ([int](language.types.integer.md))

**`ZLIB_VERSION`** ([string](language.types.string.md))
:   Versão da `zlib` como uma [string](language.types.string.md).

**`ZLIB_VERNUM`** ([int](language.types.integer.md))
:   Versão da `zlib` como um [int](language.types.integer.md).

**`ZLIB_OK`** ([int](language.types.integer.md))
:   Sem error ou informações de status.

**`ZLIB_STREAM_END`** ([int](language.types.integer.md))
:   Fluxo concluído com sucesso.

**`ZLIB_NEED_DICT`** ([int](language.types.integer.md))
:   É necessário dicionário preset.

**`ZLIB_ERRNO`** ([int](language.types.integer.md))
:   Erro de operação em arquivo.

**`ZLIB_STREAM_ERROR`** ([int](language.types.integer.md))
:   O estado do fluxo está inconsistente ou o parâmetro é inválido.

**`ZLIB_DATA_ERROR`** ([int](language.types.integer.md))
:   Dados de entrada corrompidos.

**`ZLIB_MEM_ERROR`** ([int](language.types.integer.md))
:   Memória insuficiente.

**`ZLIB_BUF_ERROR`** ([int](language.types.integer.md))
:   Progresso não é possível por espaço insuficiente no buffer ou final inesperao do fluxo de entrada.

**`ZLIB_VERSION_ERROR`** ([int](language.types.integer.md))
:   Versão da biblioteca `zlib` é incompatível com a versão esperada pelo chamador.

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
