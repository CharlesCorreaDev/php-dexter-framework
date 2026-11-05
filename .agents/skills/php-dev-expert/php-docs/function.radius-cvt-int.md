# Converte dados brutos em número inteiro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-cvt-int.php

---

# radius\_cvt\_int

(PECL radius >= 1.1.0)

radius\_cvt\_int — Converte dados brutos em número inteiro

### Descrição

function **radius\_cvt\_int**([string](language.types.string.md) `$data`): [int](language.types.integer.md)

Converte dados brutos em um número inteiro.

### Parâmetros

`data`
:   Dados de entrada

### Valor Retornado

Retorna o inteiro, recuperado dos dados.

### Examples

**Exemplo #1 Exemplo de **radius\_cvt\_int()****

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

    case RADIUS_FRAMED_MTU:
        $mtu = radius_cvt_int($data);
        echo "MTU: $mtu<br>\n";
        break;
    }
}
?>
```

### Veja também

- [radius\_cvt\_addr()](function.radius-cvt-addr.md) - Converte dados brutos em endereço IP
- [radius\_cvt\_string()](function.radius-cvt-string.md) - Converte dados brutos em string

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
