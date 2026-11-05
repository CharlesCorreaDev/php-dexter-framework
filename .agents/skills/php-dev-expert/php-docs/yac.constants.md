# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yac.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`YAC_VERSION`** ([string](language.types.string.md))

**`YAC_MAX_KEY_LEN`** ([int](language.types.integer.md))
:   O comprimento máximo de uma chave, 48 bytes.

**`YAC_MAX_VALUE_RAW_LEN`** ([int](language.types.integer.md))

**`YAC_MAX_RAW_COMPRESSED_LEN`** ([int](language.types.integer.md))

**`YAC_SERIALIZER_PHP`** ([int](language.types.integer.md))
:   Usa o serializador do PHP "serialize".

**`YAC_SERIALIZER_JSON`** ([int](language.types.integer.md))
:   Usa JSON como serializador (requer --enable-json)

**`YAC_SERIALIZER_IGBINARY`** ([int](language.types.integer.md))
:   Usa "igbinary" como serializador (requer --enable-igbinary)

**`YAC_SERIALIZER_MSGPACK`** ([int](language.types.integer.md))
:   Usa msgpack como serializador (requer --enable-msgpack)

**`YAC_SERIALIZER`** ([string](language.types.string.md))
:   Que serializador o Yac usa.

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
