# Converte dados brutos em string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-cvt-string.php

---

# radius\_cvt\_string

(PECL radius >= 1.1.0)

radius\_cvt\_string — Converte dados brutos em string

### Descrição

function **radius\_cvt\_string**([string](language.types.string.md) `$data`): [string](language.types.string.md)

Converte dados brutos em string.

### Parâmetros

`data`
:   Dados de entrada

### Valor Retornado

Retorna a string recuperada dos dados.

### Examples

**Exemplo #1 Exemplo de **radius\_cvt\_string()****

```
<?php
while ($resa = radius_get_attr($res)) {

    if (!is_array($resa)) {
        printf ("Erro ao obter atributo: %s\n",  radius_strerror($res));
        exit;
    }

    $attr = $resa['attr'];
    $data = $resa['data'];

    switch ($attr) {

    case RADIUS_FILTER_ID:
        $id = radius_cvt_string($data);
        echo "ID do filtro: $id<br>\n";
        break;
    }
}
?>
```

### Veja também

- [radius\_cvt\_addr()](function.radius-cvt-addr.md) - Converte dados brutos em endereço IP
- [radius\_cvt\_int()](function.radius-cvt-int.md) - Converte dados brutos em número inteiro

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
