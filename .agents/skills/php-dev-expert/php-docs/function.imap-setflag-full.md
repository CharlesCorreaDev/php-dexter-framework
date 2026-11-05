# Define sinalizadores em mensagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-setflag-full.php

---

# imap\_setflag\_full

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_setflag\_full — Define sinalizadores em mensagens

### Descrição

function **imap\_setflag\_full**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [string](language.types.string.md) `$sequence`,  
    [string](language.types.string.md) `$flag`,  
    [int](language.types.integer.md) `$options` = 0  
): [true](language.types.singleton.md)

Faz com que um armazenamento adicione o sinalizador `flag` especificado ao
conjunto de sinalizadores para as mensagens na
sequência informada em `sequence`.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`sequence`
:   Uma sequência de números de mensagens. Pode-se enumerar mensagens desejadas
    com a sintaxe `X,Y` ou recuperar todas as mensagens
    dentro de um intervalo com a sintaxe `X:Y`

`flag`
:   Os sinalizadores que podem ser definir são `\Seen`,
    `\Answered`, `\Flagged`,
    `\Deleted` e `\Draft` conforme
    definido pela [» RFC2060](https://datatracker.ietf.org/doc/html/rfc2060).

`options`
:   Uma máscara de bits que pode conter a única opção:

    - **`ST_UID`** - O argumento de sequência contém UIDs
      em vez de números de sequência

### Valor Retornado

Sempre retorna **`true`**.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `options`
for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |
| 8.0.0 | Um [ValueError](class.valueerror.md) agora é lançado em valores de parâmetro `options` inválidos. Anteriormente, um aviso era emitido e a função retornava **`false`**. |

### Examples

**Exemplo #1 Exemplo de **imap\_setflag\_full()****

```
<?php
$mbox = imap_open("{imap.example.org:143}", "username", "password")
     or die("Não foi possível conectar: " . imap_last_error());

$status = imap_setflag_full($mbox, "2,5", "\\Seen \\Flagged");

echo gettype($status) . "\n";
echo $status . "\n";

imap_close($mbox);
?>
```

### Veja também

- [imap\_clearflag\_full()](function.imap-clearflag-full.md) - Limpa sinalizadores em mensagens

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
