# Limpa o cache IMAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-gc.php

---

# imap\_gc

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

imap\_gc — Limpa o cache IMAP

### Descrição

function **imap\_gc**([IMAP\Connection](class.imap-connection.md) `$imap`, [int](language.types.integer.md) `$flags`): [true](language.types.singleton.md)

Limpa o cache de entradas de um tipo específico.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`flags`
:   Especifica o cache a ser purgado. Pode ser uma ou mais
    das seguintes constantes combinadas:
    **`IMAP_GC_ELT`** (elementos de cache de mensagens),
    **`IMAP_GC_ENV`** (envelope e corpos),
    **`IMAP_GC_TEXTS`** (textos).

### Valor Retornado

Sempre retorna **`true`**.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `flags`
for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |
| 8.0.0 | Um [ValueError](class.valueerror.md) agora é lançado em valores de parâmetro `flags` inválidos. Anteriormente, um aviso era emitido e a função retornava **`false`**. |

### Examples

**Exemplo #1 Exemplo de **imap\_gc()****

```
<?php

$mbox = imap_open("{imap.example.org:143}", "username", "password");

imap_gc($mbox, IMAP_GC_ELT);

?>
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
