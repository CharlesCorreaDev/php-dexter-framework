# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iconv.constants.php

---

# Constantes predefinidas

É possível identificar em
tempo de execução qual implementação do `iconv` é adotada por esta extensão.

**Constantes de implementação `iconv`**

| Nome | Tipo | Descrição |
| --- | --- | --- |
| **`ICONV_IMPL`** ([string](language.types.string.md)) | [string](language.types.string.md) | O nome da implementação |
| **`ICONV_VERSION`** ([string](language.types.string.md)) | [string](language.types.string.md) | A versão de implementação |

> **Nota**:
>
> Escrever scripts dependentes de implementação com essas constantes é fortemente
> desencorajado.

As seguintes constantes são
também disponível:

**Other `iconv` constants**

| Nome | Tipo | Descrição |
| --- | --- | --- |
| **`ICONV_MIME_DECODE_STRICT`** ([int](language.types.integer.md)) | [int](language.types.integer.md) | Uma máscara de bits usada para [iconv\_mime\_decode()](function.iconv-mime-decode.md) |
| **`ICONV_MIME_DECODE_CONTINUE_ON_ERROR`** ([int](language.types.integer.md)) | [int](language.types.integer.md) | Uma máscara de bits usada para [iconv\_mime\_decode()](function.iconv-mime-decode.md) |

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
