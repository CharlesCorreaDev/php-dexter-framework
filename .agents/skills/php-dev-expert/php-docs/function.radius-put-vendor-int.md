# Anexa um atributo de número inteiro específico de fornecedor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-put-vendor-int.php

---

# radius\_put\_vendor\_int

(PECL radius >= 1.1.0)

radius\_put\_vendor\_int — Anexa um atributo de número inteiro específico de fornecedor

### Descrição

function **radius\_put\_vendor\_int**(  
    [resource](language.types.resource.md) `$radius_handle`,  
    [int](language.types.integer.md) `$vendor`,  
    [int](language.types.integer.md) `$type`,  
    [int](language.types.integer.md) `$value`,  
    [int](language.types.integer.md) `$options` = 0,  
    [int](language.types.integer.md) `$tag` = ?  
): [bool](language.types.boolean.md)

Anexa um atributo de número inteiro específico de fornecedor à solicitação RADIUS atual.

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

`value`
:   O valor do atributo.

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

### Veja também

- [radius\_put\_vendor\_string()](function.radius-put-vendor-string.md) - Anexa um atributo de string específico de fornecedor

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
