# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rnp.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`RNP_KEYSTORE_GPG`** ([string](language.types.string.md))
:   Formato de armazenamento de chave "GPG".

**`RNP_KEYSTORE_KBX`** ([string](language.types.string.md))
:   Formato de armazenamento de chave "KBX". Somente para chaves públicas.
    Uma caixa de chaves é um formato usado para armazenar chaves públicas junto com metainformação e índices.

**`RNP_KEYSTORE_G10`** ([string](language.types.string.md))
:   Formato de armazenamento de chave "G10". Para chaves privadas.

**`RNP_LOAD_SAVE_PUBLIC_KEYS`** ([integer](language.types.integer.md))
:   Carrega ou salva apenas chaves públicas. Pode ser feito OR com **`RNP_LOAD_SAVE_SECRET_KEYS`**
    para carregar chaves públicas e privadas no contexto FFI ou salvá-las a partir do contexto.

**`RNP_LOAD_SAVE_SECRET_KEYS`** ([integer](language.types.integer.md))
:   Carrega ou salva apenas chaves secretas. Pode ser feito OR com **`RNP_LOAD_SAVE_PUBLIC_KEYS`**
    para carregar chaves públicas e privadas no contexto FFI ou salvá-las a partir do contexto.

**`RNP_LOAD_SAVE_PERMISSIVE`** ([integer](language.types.integer.md))
:   Permite ignorar pacotes de assinatura/chave/subchave incorretos durante a importação de chaves.

**`RNP_LOAD_SAVE_SINGLE`** ([integer](language.types.integer.md))
:   Se definida, apenas a primeira chave será carregada.

**`RNP_LOAD_SAVE_BASE64`** ([integer](language.types.integer.md))
:   Permitir a importação de chaves codificadas em base64 (autocriptografadas).

**`RNP_FEATURE_SYMM_ALG`** ([string](language.types.string.md))
:   Lista os algoritmos de criptografia simétrica disponíveis.

**`RNP_FEATURE_AEAD_ALG`** ([string](language.types.string.md))
:   Lista os algoritmos AEAD disponíveis.

**`RNP_FEATURE_PROT_MODE`** ([string](language.types.string.md))
:   Lista os modos de proteção disponíveis.

**`RNP_FEATURE_PK_ALG`** ([string](language.types.string.md))
:   Lista os algoritmos de chave pública disponíveis.

**`RNP_FEATURE_HASH_ALG`** ([string](language.types.string.md))
:   Lista os algoritmos de hash disponíveis.

**`RNP_FEATURE_COMP_ALG`** ([string](language.types.string.md))
:   Lista os algoritmos de compactação disponíveis.

**`RNP_FEATURE_CURVE`** ([string](language.types.string.md))
:   Lista as curvas elípticas disponíveis.

**`RNP_DUMP_MPI`** ([integer](language.types.integer.md))
:   Despeja valores MPI (número inteiro de multiprecisão).

**`RNP_DUMP_RAW`** ([integer](language.types.integer.md))
:   Despeja também o conteúdo bruto do pacote.

**`RNP_DUMP_GRIP`** ([integer](language.types.integer.md))
:   Despeja impressões digitais de chaves e grips de chaves.

**`RNP_JSON_DUMP_MPI`** ([integer](language.types.integer.md))
:   Despeja valores MPI (número inteiro de multiprecisão) em JSON.

**`RNP_JSON_DUMP_RAW`** ([integer](language.types.integer.md))
:   Despeja também o conteúdo bruto do pacote em JSON.

**`RNP_JSON_DUMP_GRIP`** ([integer](language.types.integer.md))
:   Despeja impressões digitais de chaves e grips de chaves em JSON.

**`RNP_ENCRYPT_NOWRAP`** ([integer](language.types.integer.md))
:   Permite criptografia de mensagem assinada. A mensagem não está encapsulada
    em um pacote de dados literal.

**`RNP_KEY_EXPORT_ARMORED`** ([integer](language.types.integer.md))
:   Habilita a blindagem ASCII dos dados exportados.

**`RNP_KEY_EXPORT_PUBLIC`** ([integer](language.types.integer.md))
:   Exporta chave pública.

**`RNP_KEY_EXPORT_SECRET`** ([integer](language.types.integer.md))
:   Exporta chave secreta.

**`RNP_KEY_EXPORT_SUBKEYS`** ([integer](language.types.integer.md))
:   Se a chave primária estiver sendo exportada, todas as subchaves também serão exportadas.

**`RNP_KEY_EXPORT_BASE64`** ([integer](language.types.integer.md))
:   Exporta a chave de criptografia automática codificada em base64 em vez de binária.

**`RNP_KEY_REMOVE_PUBLIC`** ([integer](language.types.integer.md))
:   Remove a chave pública.

**`RNP_KEY_REMOVE_SECRET`** ([integer](language.types.integer.md))
:   Remove a chave secreta.

**`RNP_KEY_REMOVE_SUBKEYS`** ([integer](language.types.integer.md))
:   Se a chave primária estiver sendo excluída, todas as suas subchaves também serão removidas.

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
