# Extrai um atributo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-get-attr.php

---

# radius\_get\_attr

(PECL radius >= 1.1.0)

radius\_get\_attr — Extrai um atributo

### Descrição

function **radius\_get\_attr**([resource](language.types.resource.md) `$radius_handle`): [mixed](language.types.mixed.md)

Assim como as requisições Radius, cada resposta pode conter zero ou mais atributos.
Após uma resposta ser recebida com sucesso por
[radius\_send\_request()](function.radius-send-request.md), seus atributos podem ser extraídos
um por um usando **radius\_get\_attr()**. Cada vez que
**radius\_get\_attr()** é chamada, ela obtém o próximo atributo
da resposta atual.

### Parâmetros

`radius_handle`
:   O resource RADIUS.

### Valor Retornado

Retorna um array associativo contendo o tipo de atributo e os dados, ou
número de erro <= 0.

### Examples

**Exemplo #1 Exemplo de **radius\_get\_attr()****

```
<?php
while ($resa = radius_get_attr($res)) {

    if (!is_array($resa)) {
        printf("Erro ao obter atributo: %s\n",  radius_strerror($res));
        exit;
    }

    $attr = $resa['attr'];
    $data = $resa['data'];
    printf("Obtido atributo:%d %d Bytes %s\n", $attr, strlen($data), bin2hex($data));
}
?>
```

### Veja também

- [radius\_put\_attr()](function.radius-put-attr.md) - Anexa um atributo binário
- [radius\_get\_vendor\_attr()](function.radius-get-vendor-attr.md) - Extrai um atributo específico de fornecedor
- [radius\_put\_vendor\_attr()](function.radius-put-vendor-attr.md) - Anexa um atributo binário específico de fornecedor
- [radius\_send\_request()](function.radius-send-request.md) - Envia a solicitação e aguarda uma resposta

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
