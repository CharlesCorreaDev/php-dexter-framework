# Retorna um endereço de e-mail formatado corretamente, considerando a caixa de correio, o host e as informações pessoais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-rfc822-write-address.php

---

# imap\_rfc822\_write\_address

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_rfc822\_write\_address — Retorna um endereço de e-mail formatado corretamente, considerando a caixa de correio, o host e as informações pessoais

### Descrição

function **imap\_rfc822\_write\_address**([string](language.types.string.md) `$mailbox`, [string](language.types.string.md) `$hostname`, [string](language.types.string.md) `$personal`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna um endereço de e-mail formatado corretamente, conforme definido na [» RFC2822](https://datatracker.ietf.org/doc/html/rfc2822), com as informações necessárias.

### Parâmetros

`mailbox`
:   O nome da caixa de correio, veja [imap\_open()](function.imap-open.md) para mais
    informações

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

`hostname`
:   A parte do host de e-mail

`personal`
:   O nome do proprietário da conta

### Valor Retornado

Retorna uma string com endereço de e-mail formatado corretamente, conforme definido na [» RFC2822](https://datatracker.ietf.org/doc/html/rfc2822), ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **imap\_rfc822\_write\_address()****

```
<?php
echo imap_rfc822_write_address("hartmut", "example.com", "Hartmut Holzgraefe");
?>
```

O exemplo acima produzirá:

```
Hartmut Holzgraefe <hartmut@example.com>
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
