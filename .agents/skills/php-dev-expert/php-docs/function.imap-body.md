# Lê o corpo da mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-body.php

---

# imap\_body

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_body — Lê o corpo da mensagem

### Descrição

function **imap\_body**([IMAP\Connection](class.imap-connection.md) `$imap`, [int](language.types.integer.md) `$message_num`, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

**imap\_body()** retorna o corpo da mensagem,
de número `message_num`, na caixa de correio
atual.

**imap\_body()** retornará apenas uma cópia literal do
corpo da mensagem. Para extrair um único componente de uma mensagem multipartes codificada
em MIME, é necessário usar [imap\_fetchstructure()](function.imap-fetchstructure.md) para
analisar sua estrutura e [imap\_fetchbody()](function.imap-fetchbody.md) para
extrair uma cópia de um único componente do corpo.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_num`
:   O número da mensagem

`flags`
:   Os sinalizadores opcionais em `flags` são uma máscara de bits
    com uma ou mais das seguintes constantes:

    - **`FT_UID`** - O número da mensagem em `message_num` é um UID
    - **`FT_PEEK`** - Não define o sinalizador \Seen se ainda não estiver definido
    - **`FT_INTERNAL`** - A string de retorno está em formato interno, não será
      canonizada para CRLF.

### Valor Retornado

Retorna o corpo da mensagem especificada, como uma string, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

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
