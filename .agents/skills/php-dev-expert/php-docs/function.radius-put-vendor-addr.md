# Anexa um atributo de endereço IP específico de fornecedor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-put-vendor-addr.php

---

# radius\_put\_vendor\_addr

(PECL radius >= 1.1.0)

radius\_put\_vendor\_addr — Anexa um atributo de endereço IP específico de fornecedor

### Descrição

function **radius\_put\_vendor\_addr**(  
    [resource](language.types.resource.md) `$radius_handle`,  
    [int](language.types.integer.md) `$vendor`,  
    [int](language.types.integer.md) `$type`,  
    [string](language.types.string.md) `$addr`  
): [bool](language.types.boolean.md)

Anexa um atributo específico de fornecedor de endereço IP à
solicitação RADIUS atual.

> **Nota**:
>
> Uma requisição deve ser criada por meio de [radius\_create\_request()](function.radius-create-request.md) antes que esta função possa ser chamada.

### Parâmetros

`radius_handle`
:   O resource RADIUS.

`vendor`
:   O ID do fornecedor.

`type`
:   O tipo de atributo.

`addr`
:   Um endereço IPv4 em formato de string, como `10.0.0.1`.

`options`
:   Uma máscara de bits das opções de atributo. As opções disponíveis incluem [**`RADIUS_OPTION_TAGGED`**](radius.constants.options.md#constant.radius-option-tagged) e [**`RADIUS_OPTION_SALT`**](radius.constants.options.md#constant.radius-option-salt).

`tag`
:   A tag de atributo. Este parâmetro é ignorado, a menos que a opção [**`RADIUS_OPTION_TAGGED`**](radius.constants.options.md#constant.radius-option-tagged) esteja definida.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL radius 1.3.0 | Os parâmetros `options` e `tag` foram adicionados. |

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
