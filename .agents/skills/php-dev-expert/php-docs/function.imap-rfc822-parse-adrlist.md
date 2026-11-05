# Analisa uma string de endereços

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-rfc822-parse-adrlist.php

---

# imap\_rfc822\_parse\_adrlist

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_rfc822\_parse\_adrlist — Analisa uma string de endereços

### Descrição

function **imap\_rfc822\_parse\_adrlist**([string](language.types.string.md) `$string`, [string](language.types.string.md) `$default_hostname`): [array](language.types.array.md)

Analisa a string de endereços conforme definido na [» RFC2822](https://datatracker.ietf.org/doc/html/rfc2822) e para cada endereço.

### Parâmetros

`string`
:   Uma string contendo endereços

`default_hostname`
:   O nome do host padrão

### Valor Retornado

Retorna um array de objetos. As propriedades dos objetos são:

- mailbox - o nome da caixa de correio (nome de usuário)
- host - o nome do host
- personal - o nome pessoal
- adl - rota de origem do domínio

### Examples

**Exemplo #1 Exemplo de **imap\_rfc822\_parse\_adrlist()****

```
<?php

$address_string = "Joe Doe <doe@example.com>, postmaster@example.com, root";
$address_array  = imap_rfc822_parse_adrlist($address_string, "example.com");
if (!is_array($address_array) || count($address_array) < 1) {
    die("algo está errado\n");
}

foreach ($address_array as $id => $val) {
    echo "# $id\n";
    echo "  mailbox : " . $val->mailbox . "\n";
    echo "  host    : " . $val->host . "\n";
    echo "  personal: " . $val->personal . "\n";
    echo "  adl     : " . $val->adl . "\n";
}
?>
```

O exemplo acima produzirá:

```
# 0
  mailbox : doe
  host    : example.com
  personal: Joe Doe
  adl     :
# 1
  mailbox : postmaster
  host    : example.com
  personal:
  adl     :
# 2
  mailbox : root
  host    : example.com
  personal:
  adl     :
```

### Veja também

- [imap\_rfc822\_parse\_headers()](function.imap-rfc822-parse-headers.md) - Analisa cabeçalhos de e-mail de uma string

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
