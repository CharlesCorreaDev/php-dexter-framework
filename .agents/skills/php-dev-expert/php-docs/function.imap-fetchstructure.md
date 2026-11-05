# Lê a estrutura de uma mensagem específica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-fetchstructure.php

---

# imap\_fetchstructure

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_fetchstructure — Lê a estrutura de uma mensagem específica

### Descrição

function **imap\_fetchstructure**([IMAP\Connection](class.imap-connection.md) `$imap`, [int](language.types.integer.md) `$message_num`, [int](language.types.integer.md) `$flags` = 0): [stdClass](class.stdclass.md)|[false](language.types.singleton.md)

Busca todas as informações estruturadas para uma determinada mensagem.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`message_num`
:   O número da mensagem

`flags`
:   Este parâmetro opcional tem apenas uma única opção,
    **`FT_UID`**, que diz à função para tratar o argumento
    `message_num` como um
    `UID`.

### Valor Retornado

Retorna um objeto com propriedades listadas na tabela abaixo, ou **`false`** em caso de falha.

**Objeto retornado para **imap\_fetchstructure()****

|  |  |
| --- | --- |
| type | Tipo de corpo primário |
| encoding | Codificação de transferência de corpo |
| ifsubtype | **`true`** se houver uma string de subtipo |
| subtype | Subtipo MIME |
| ifdescription | **`true`** se houver uma string de descrição |
| description | String de descrição do conteúdo |
| ifid | **`true`** se houver uma string de identificação |
| id | String de identificação |
| lines | Número de linhas |
| bytes | Número de bytes |
| ifdisposition | **`true`** se houver uma string de disposição |
| disposition | String de disposição |
| ifdparameters | **`true`** se o array dparameters existir |
| dparameters | Um array de objetos onde cada objeto tem uma propriedade `"attribute"` e uma propriedade `"value"` correspondente aos parâmetros no cabeçalho MIME `Content-disposition`. |
| ifparameters | **`true`** se o array de parâmetros existir |
| parameters | Um array de objetos onde cada objeto tem uma propriedade `"attribute"` e uma propriedade `"value"`. |
| parts | Um array de objetos idênticos em estrutura ao objeto de nível superior, cada um dos quais corresponde a uma parte do corpo MIME. |

**Tipo de corpo primário (o valor pode variar com a biblioteca usada, o uso de constantes é recomendado)**

| Valor | Tipo | Constante |
| --- | --- | --- |
| 0 | texto | TYPETEXT |
| 1 | multipartes | TYPEMULTIPART |
| 2 | mensagem | TYPEMESSAGE |
| 3 | aplicação | TYPEAPPLICATION |
| 4 | áudio | TYPEAUDIO |
| 5 | imagem | TYPEIMAGE |
| 6 | vídeo | TYPEVIDEO |
| 7 | modelo | TYPEMODEL |
| 8 | outro | TYPEOTHER |

**Codificações de transferência (o valor pode variar com a biblioteca usada, o uso de constantes é recomendado)**

| Valor | Tipo | Constante |
| --- | --- | --- |
| 0 | 7 bits | ENC7BIT |
| 1 | 8 bits | ENC8BIT |
| 2 | Binária | ENCBINARY |
| 3 | Base64 | ENCBASE64 |
| 4 | Escapada-Imprimível | ENCQUOTEDPRINTABLE |
| 5 | Outra | ENCOTHER |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

### Veja também

- [imap\_fetchbody()](function.imap-fetchbody.md) - Busca uma seção específica do corpo da mensagem
- [imap\_bodystruct()](function.imap-bodystruct.md) - Lê a estrutura de uma seção específica do corpo de uma mensagem específica

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
