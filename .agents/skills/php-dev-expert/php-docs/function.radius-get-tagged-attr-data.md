# Extrai os dados de um atributo marcado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-get-tagged-attr-data.php

---

# radius\_get\_tagged\_attr\_data

(PECL radius >= 1.3.0)

radius\_get\_tagged\_attr\_data — Extrai os dados de um atributo marcado

### Descrição

function **radius\_get\_tagged\_attr\_data**([string](language.types.string.md) `$data`): [string](language.types.string.md)|[false](language.types.singleton.md)

Se um atributo marcado foi retornado de
[radius\_get\_attr()](function.radius-get-attr.md),
**radius\_get\_tagged\_attr\_data()** retornará os dados
do atributo.

### Parâmetros

`data`
:   O atributo marcado a ser decodificado.

### Valor Retornado

Retorna os dados do atributo marcado ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **radius\_get\_tagged\_attr\_data()****

```
<?php
while ($resa = radius_get_attr($res)) {
    if (!is_array($resa)) {
        printf ("Erro ao obter atributo: %s\n",  radius_strerror($res));
        exit;
    }

    $attr = $resa['attr'];
    $data = $resa['data'];

    $tag = radius_get_tagged_attr_tag($data);
    $value = radius_get_tagged_attr_data($data);

    printf("Obtido atributo marcado com %d e valor %s\n", $tag, $value);
}
?>
```

### Veja também

- [radius\_get\_attr()](function.radius-get-attr.md) - Extrai um atributo
- [radius\_get\_tagged\_attr\_tag()](function.radius-get-tagged-attr-tag.md) - Extrai a marcação de um atributo marcado

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
