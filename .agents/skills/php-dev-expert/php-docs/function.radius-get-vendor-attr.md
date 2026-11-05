# Extrai um atributo específico de fornecedor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-get-vendor-attr.php

---

# radius\_get\_vendor\_attr

(PECL radius >= 1.1.0)

radius\_get\_vendor\_attr — Extrai um atributo específico de fornecedor

### Descrição

function **radius\_get\_vendor\_attr**([string](language.types.string.md) `$data`): [array](language.types.array.md)|[false](language.types.singleton.md)

Se [radius\_get\_attr()](function.radius-get-attr.md) retornar
**`RADIUS_VENDOR_SPECIFIC`**,
**radius\_get\_vendor\_attr()** pode ser chamado para determinar o
fornecedor.

### Parâmetros

`data`
:   Dados de entrada

### Valor Retornado

Retorna um array associativo contendo o tipo de atributo, o fornecedor e os
dados, ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **radius\_get\_vendor\_attr()****

```
<?php
while ($resa = radius_get_attr($res)) {

    if (!is_array($resa)) {
        printf ("Erro ao obter atributo: %s\n",  radius_strerror($res));
        exit;
    }

    $attr = $resa['attr'];
    $data = $resa['data'];
    printf("Obtido atributo:%d %d Bytes %s\n", $attr, strlen($data), bin2hex($data));
    if ($attr == RADIUS_VENDOR_SPECIFIC) {

        $resv = radius_get_vendor_attr($data);
        if (is_array($resv)) {
            $vendor = $resv['vendor'];
            $attrv = $resv['attr'];
            $datav = $resv['data'];
            printf("Obtido atributo de fornecedor:%d %d Bytes %s\n", $attrv, strlen($datav), bin2hex($datav));
        }

    }
}
?>
```

### Veja também

- [radius\_get\_attr()](function.radius-get-attr.md) - Extrai um atributo
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
