# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/svn.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`SVN_REVISION_HEAD`** ([int](language.types.integer.md))
:   Número mágico (-1) que especifica a revisão HEAD

**Constantes utilizáveis ​​com [svn\_auth\_set\_parameter()](function.svn-auth-set-parameter.md)**

**`SVN_AUTH_PARAM_DEFAULT_USERNAME`** ([string](language.types.string.md))
:   Propriedade para nome de usuário padrão a ser usado ao executar autenticação básica

**`SVN_AUTH_PARAM_DEFAULT_PASSWORD`** ([string](language.types.string.md))
:   Propriedade para senha padrão a ser usada ao executar autenticação básica

**`SVN_AUTH_PARAM_NON_INTERACTIVE`** ([string](language.types.string.md))

**`SVN_AUTH_PARAM_DONT_STORE_PASSWORDS`** ([string](language.types.string.md))

**`SVN_AUTH_PARAM_NO_AUTH_CACHE`** ([string](language.types.string.md))

**`SVN_AUTH_PARAM_SSL_SERVER_FAILURES`** ([string](language.types.string.md))

**`SVN_AUTH_PARAM_SSL_SERVER_CERT_INFO`** ([string](language.types.string.md))

**`SVN_AUTH_PARAM_CONFIG`** ([string](language.types.string.md))

**`SVN_AUTH_PARAM_SERVER_GROUP`** ([string](language.types.string.md))

**`SVN_AUTH_PARAM_CONFIG_DIR`** ([string](language.types.string.md))

**`PHP_SVN_AUTH_PARAM_IGNORE_SSL_VERIFY_ERRORS`** ([string](language.types.string.md))
:   Propriedade personalizada para ignorar erros de verificação de certificado SSL

**Constantes do sistema de arquivos**

**`SVN_FS_CONFIG_FS_TYPE`** ([string](language.types.string.md))
:   Chave de configuração que determina o tipo de sistema de arquivos

**`SVN_FS_TYPE_BDB`** ([string](language.types.string.md))
:   O sistema de arquivos é uma implementação Berkeley-DB

**`SVN_FS_TYPE_FSFS`** ([string](language.types.string.md))
:   O sistema de arquivos é uma implementação nativa do sistema de arquivos

**Constantes de propriedade reservadas**

**`SVN_PROP_REVISION_DATE`** ([string](language.types.string.md))
:   svn:date

**`SVN_PROP_REVISION_ORIG_DATE`** ([string](language.types.string.md))
:   svn:original-date

**`SVN_PROP_REVISION_AUTHOR`** ([string](language.types.string.md))
:   svn:author

**`SVN_PROP_REVISION_LOG`** ([string](language.types.string.md))
:   svn:log

**Constantes de status da cópia de trabalho**

**`SVN_WC_STATUS_NONE`** ([int](language.types.integer.md))
:   O status não existe

**`SVN_WC_STATUS_UNVERSIONED`** ([int](language.types.integer.md))
:   O item não está versionado na cópia de trabalho

**`SVN_WC_STATUS_NORMAL`** ([int](language.types.integer.md))
:   O item existe, nada mais está acontecendo

**`SVN_WC_STATUS_ADDED`** ([int](language.types.integer.md))
:   O item está programado para adição

**`SVN_WC_STATUS_MISSING`** ([int](language.types.integer.md))
:   O item está versionado, mas está ausente na cópia de trabalho

**`SVN_WC_STATUS_DELETED`** ([int](language.types.integer.md))
:   O item está programado para exclusão

**`SVN_WC_STATUS_REPLACED`** ([int](language.types.integer.md))
:   O item foi excluído e adicionado novamente

**`SVN_WC_STATUS_MODIFIED`** ([int](language.types.integer.md))
:   O item (texto ou propriedades) foi modificado

**`SVN_WC_STATUS_MERGED`** ([int](language.types.integer.md))
:   As modificações locais do item foram mescladas com as modificações do repositório

**`SVN_WC_STATUS_CONFLICTED`** ([int](language.types.integer.md))
:   As modificações locais do item entraram em conflito com as modificações do repositório

**`SVN_WC_STATUS_IGNORED`** ([int](language.types.integer.md))
:   O item não está versionado, mas está configurado para ser ignorado

**`SVN_WC_STATUS_OBSTRUCTED`** ([int](language.types.integer.md))
:   O item não versionado está no caminho de um recurso versionado

**`SVN_WC_STATUS_EXTERNAL`** ([int](language.types.integer.md))
:   Caminho não versionado preenchido usando svn:externals

**`SVN_WC_STATUS_INCOMPLETE`** ([int](language.types.integer.md))
:   O diretório não contém uma lista completa de entradas

**Node type constants**

**`SVN_NODE_NONE`** ([int](language.types.integer.md))
:   Ausente

**`SVN_NODE_FILE`** ([int](language.types.integer.md))
:   Arquivo

**`SVN_NODE_DIR`** ([int](language.types.integer.md))
:   Diretório

**`SVN_NODE_UNKNOWN`** ([int](language.types.integer.md))
:   Algo que o Subversion não consegue identificar

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
