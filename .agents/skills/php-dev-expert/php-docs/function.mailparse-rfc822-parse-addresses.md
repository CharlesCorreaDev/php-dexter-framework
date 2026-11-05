# Faz o parse de endereços compatíveis com o RFC 822

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mailparse-rfc822-parse-addresses.php

---

# mailparse\_rfc822\_parse\_addresses

(PECL mailparse >= 0.9.0)

mailparse\_rfc822\_parse\_addresses — Faz o parse de endereços compatíveis com o RFC 822

### Descrição

function **mailparse\_rfc822\_parse\_addresses**([string](language.types.string.md) `$addresses`): [array](language.types.array.md)

Faz o parse de uma lista de destinatários compatível com o [» RFC 822](https://datatracker.ietf.org/doc/html/rfc822),
como encontrado no cabeçalho `To:`.

### Parâmetros

`addresses`
:   Uma string contendo endereços, como em:
    `Wez Furlong <wez@example.com>, doe@example.com`

    > **Nota**:
    >
    > Esta string não deve incluir o nome do cabeçalho.

### Valor Retornado

Retorna um array de arrays associativos com as seguintes chaves para cada
destinatário:

|  |  |
| --- | --- |
| `display` | O nome do destinatário, para fins de exibição. Se esta parte não estiver definida para um destinatário, esta chave terá o mesmo valor de `address`. |
| `address` | The email address |
| `is_group` | **`true`** se o destinatário for um grupo de notícias, **`false`** caso contrário. |

### Examples

**Exemplo #1 Exemplo de **mailparse\_rfc822\_parse\_addresses()****

```
<?php

$to = 'Wez Furlong <wez@example.com>, doe@example.com';
var_dump(mailparse_rfc822_parse_addresses($to));

?>
```

O exemplo acima produzirá:

```
array(2) {
  [0]=>
  array(3) {
    ["display"]=>
    string(11) "Wez Furlong"
    ["address"]=>
    string(15) "wez@example.com"
    ["is_group"]=>
    bool(false)
  }
  [1]=>
  array(3) {
    ["display"]=>
    string(15) "doe@example.com"
    ["address"]=>
    string(15) "doe@example.com"
    ["is_group"]=>
    bool(false)
  }
}
```

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
