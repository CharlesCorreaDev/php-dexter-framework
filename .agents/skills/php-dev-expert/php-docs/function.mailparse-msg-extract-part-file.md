# Extrai/decodifica uma seção da mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mailparse-msg-extract-part-file.php

---

# mailparse\_msg\_extract\_part\_file

(PECL mailparse >= 0.9.0)

mailparse\_msg\_extract\_part\_file — Extrai/decodifica uma seção da mensagem

### Descrição

function **mailparse\_msg\_extract\_part\_file**([resource](language.types.resource.md) `$mimemail`, [mixed](language.types.mixed.md) `$filename`, [callable](language.types.callable.md) `$callbackfunc` = ?): [string](language.types.string.md)

Extrai/decodifica uma seção da mensagem do nome de arquivo fornecido.

O conteúdo da seção será decodificado de acordo com sua codificação de transferência -
suportando base64, quoted-printable e texto uuencoded.

### Parâmetros

`mimemail`
:   Um recurso `MIME` válido, criado com
    [mailparse\_msg\_create()](function.mailparse-msg-create.md).

`filename`
:   Pode ser um nome de arquivo ou um recurso de fluxo válido.

`callbackfunc`
:   Se definido, isso deve ser um retorno de chamada válido que receberá a
    seção extraída, ou **`null`** para fazer com que esta função retorne a
    seção extraída.

    Se não especificado, o conteúdo será enviado para "stdout".

### Valor Retornado

Se `callbackfunc` não for **`null`** retorna **`true`** em
caso de sucesso.

Se `callbackfunc` estiver definido para **`null`**, retorna a
seção extraída como uma string.

Retorna **`false`** em caso de erro.

### Veja também

- [mailparse\_msg\_extract\_part()](function.mailparse-msg-extract-part.md) - Extrai/decodifica uma seção da mensagem
- [mailparse\_msg\_extract\_whole\_part\_file()](function.mailparse-msg-extract-whole-part-file.md) - Extrai uma seção da mensagem incluindo cabeçalhos sem decodificar a codificação de transferência

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
