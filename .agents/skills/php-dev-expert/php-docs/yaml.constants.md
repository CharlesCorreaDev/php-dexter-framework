# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaml.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**Estilos de entidade escalar usados pelos métodos
de retorno [yaml\_parse()](function.yaml-parse.md).**

**`YAML_ANY_SCALAR_STYLE`** ([int](language.types.integer.md))

**`YAML_PLAIN_SCALAR_STYLE`** ([int](language.types.integer.md))

**`YAML_SINGLE_QUOTED_SCALAR_STYLE`** ([int](language.types.integer.md))

**`YAML_DOUBLE_QUOTED_SCALAR_STYLE`** ([int](language.types.integer.md))

**`YAML_LITERAL_SCALAR_STYLE`** ([int](language.types.integer.md))

**`YAML_FOLDED_SCALAR_STYLE`** ([int](language.types.integer.md))

**Etiquetas comuns usadas pelos métodos de retorno
[yaml\_parse()](function.yaml-parse.md).**

**`YAML_NULL_TAG`** ([string](language.types.string.md))
:   "tag:yaml.org,2002:null"

**`YAML_BOOL_TAG`** ([string](language.types.string.md))
:   "tag:yaml.org,2002:bool"

**`YAML_STR_TAG`** ([string](language.types.string.md))
:   "tag:yaml.org,2002:str"

**`YAML_INT_TAG`** ([string](language.types.string.md))
:   "tag:yaml.org,2002:int"

**`YAML_FLOAT_TAG`** ([string](language.types.string.md))
:   "tag:yaml.org,2002:float"

**`YAML_TIMESTAMP_TAG`** ([string](language.types.string.md))
:   "tag:yaml.org,2002:timestamp"

**`YAML_SEQ_TAG`** ([string](language.types.string.md))
:   "tag:yaml.org,2002:seq"

**`YAML_MAP_TAG`** ([string](language.types.string.md))
:   "tag:yaml.org,2002:map"

**`YAML_PHP_TAG`** ([string](language.types.string.md))
:   "!php/object"

**Tipos de codificação para [yaml\_emit()](function.yaml-emit.md)**

**`YAML_ANY_ENCODING`** ([int](language.types.integer.md))
:   Permite que o emissor escolha uma codificação.

**`YAML_UTF8_ENCODING`** ([int](language.types.integer.md))
:   Codifica como UTF8.

**`YAML_UTF16LE_ENCODING`** ([int](language.types.integer.md))
:   Codifica como UTF16LE.

**`YAML_UTF16BE_ENCODING`** ([int](language.types.integer.md))
:   Codifica como UTF16BE.

**Tipos de quebra de linha para [yaml\_emit()](function.yaml-emit.md)**

**`YAML_ANY_BREAK`** ([int](language.types.integer.md))
:   Permite que o emissor escolha o caractere de quebra de linha.

**`YAML_CR_BREAK`** ([int](language.types.integer.md))
:   Usa `\r` como caractere de quebra de linha (estilo Mac).

**`YAML_LN_BREAK`** ([int](language.types.integer.md))
:   Usa `\n` como caractere de quebra de linha (estilo Unix).

**`YAML_CRLN_BREAK`** ([int](language.types.integer.md))
:   Usa `\r\n` como caractere de quebra de linha (estilo Windows).

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
