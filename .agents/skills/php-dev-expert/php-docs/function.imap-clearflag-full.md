# Limpa sinalizadores em mensagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-clearflag-full.php

---

# imap\_clearflag\_full

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_clearflag\_full — Limpa sinalizadores em mensagens

### Descrição

function **imap\_clearflag\_full**(  
    [IMAP\Connection](class.imap-connection.md) `$imap`,  
    [string](language.types.string.md) `$sequence`,  
    [string](language.types.string.md) `$flag`,  
    [int](language.types.integer.md) `$options` = 0  
): [true](language.types.singleton.md)

Esta função faz com seja excluído o sinalizador
especificado em `flag` para as
mensagens sequência especificada em `sequence`.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`sequence`
:   Uma sequência de números de mensagens. Pod-se enumerar as mensagens desejadas
    com a sintaxe `X,Y` ou recuperar todas as mensagens
    dentro de um intervalo com a sintaxe `X:Y`.

`flag`
:   Os sinalizadores que você pode desmarcar são "\\Seen" (visto), "\\Answered" (respondido), "\\Flagged" (sinalizado),
    "\\Deleted" (excluído) e "\\Draft" (rascunho), conforme definido pela [» RFC2060](https://datatracker.ietf.org/doc/html/rfc2060).

`options`
:   `options` são uma máscara de bits e pode conter
    a única opção:

    - **`ST_UID`** - O argumento de sequência contém UIDs
      em vez de números de sequência

### Valor Retornado

Sempre retorna **`true`**.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `options` for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |
| 8.0.0 | Um [ValueError](class.valueerror.md) agora é lançado em valores de parâmetro `options` inválidos. Anteriormente, um aviso era emitido e a função retornava **`false`**. |

### Veja também

- [imap\_setflag\_full()](function.imap-setflag-full.md) - Define sinalizadores em mensagens

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
