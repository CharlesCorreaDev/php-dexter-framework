# Anexa um atributo binário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-put-attr.php

---

# radius\_put\_attr

(PECL radius >= 1.1.0)

radius\_put\_attr — Anexa um atributo binário

### Descrição

function **radius\_put\_attr**(  
    [resource](language.types.resource.md) `$radius_handle`,  
    [int](language.types.integer.md) `$type`,  
    [string](language.types.string.md) `$value`,  
    [int](language.types.integer.md) `$options` = 0,  
    [int](language.types.integer.md) `$tag` = ?  
): [bool](language.types.boolean.md)

Anexa um atributo binário à solicitação RADIUS atual.

> **Nota**:
>
> Uma requisição deve ser criada por meio de [radius\_create\_request()](function.radius-create-request.md) antes que esta função possa ser chamada.

### Parâmetros

`radius_handle`
:   O resource RADIUS.

`type`
:   O tipo de atributo.

`value`
:   O valor do atributo, que será tratado como uma string binária bruta.

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

### Examples

**Exemplo #1 Exemplo de **radius\_put\_attr()****

```
<?php
mt_srand(time());
$chall = mt_rand();
$chapval = hash('md5', pack('Ca*',1 , 'sepp' . $chall));
$pass = pack('CH*', 1, $chapval);
if (!radius_put_attr($res, RADIUS_CHAP_PASSWORD, $pass)) {
    echo 'RadiusError:' . radius_strerror($res). "\n<br />";
    exit;
}
?>
```

### Veja também

- [radius\_get\_attr()](function.radius-get-attr.md) - Extrai um atributo
- [radius\_get\_vendor\_attr()](function.radius-get-vendor-attr.md) - Extrai um atributo específico de fornecedor
- [radius\_put\_vendor\_attr()](function.radius-put-vendor-attr.md) - Anexa um atributo binário específico de fornecedor

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
