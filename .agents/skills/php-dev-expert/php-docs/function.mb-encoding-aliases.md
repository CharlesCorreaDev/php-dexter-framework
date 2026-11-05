# Obtém aliases de um tipo de codificação conhecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-encoding-aliases.php

---

# mb\_encoding\_aliases

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

mb\_encoding\_aliases — Obtém aliases de um tipo de codificação conhecido

### Descrição

function **mb\_encoding\_aliases**([string](language.types.string.md) `$encoding`): [array](language.types.array.md)

Retorna um array de aliases para um tipo de `encoding` conhecido.

### Parâmetros

`encoding`
:   O tipo de codificação a ser verificado, para aliases.

### Valor Retornado

Retorna um array indexada numericamente de aliases de codificação.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se
`encoding` for desconhecido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se o `encoding` for desconhecido, agora é lançado um [ValueError](class.valueerror.md); anteriormente, um **`E_WARNING`** era emitido, e a função retornava **`false`**. |

### Examples

**Exemplo #1 Exemplo de **mb\_encoding\_aliases()****

```
<?php
$encoding        = 'ASCII';
$known_encodings = mb_list_encodings();

if (in_array($encoding, $known_encodings)) {

    $aliases = mb_encoding_aliases($encoding);
    print_r($aliases);

} else {

    echo "Unknown ($encoding) encoding.\n";

}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => ANSI_X3.4-1968
    [1] => iso-ir-6
    [2] => ANSI_X3.4-1986
    [3] => ISO_646.irv:1991
    [4] => US-ASCII
    [5] => ISO646-US
    [6] => us
    [7] => IBM367
    [8] => cp367
    [9] => csASCII
)
```

### Veja também

- [mb\_list\_encodings()](function.mb-list-encodings.md) - Retorna um array de todas as codificações suportadas

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
