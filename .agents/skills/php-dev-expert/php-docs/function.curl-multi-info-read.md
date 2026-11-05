# Obtém informação sobre as transferências atuais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-multi-info-read.php

---

# curl\_multi\_info\_read

(PHP 5, PHP 7, PHP 8)

curl\_multi\_info\_read — Obtém informação sobre as transferências atuais

### Descrição

function **curl\_multi\_info\_read**([CurlMultiHandle](class.curlmultihandle.md) `$multi_handle`, [int](language.types.integer.md) `&$queued_messages` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Interroga o multi-identificador se existem mensagens ou informações das transferências individuais.
Mensagens podem incluir informações como um código de erro da transferência ou apenas o fato
de uma transferência ter sido concluída.

Chamadas repetidas a esta função irão retornar um novo resultado a cada vez, até que um valor **`false`** seja retornado
como um sinal de que não há mais o que receber no momento. O inteiro apontado pelo parâmetro
`queued_messages` conterá o número de mensagens remanescentes depois que esta
função foi chamada.

**Aviso**

Os dados apontados pelo recurso retornado não irão sobreviver à chamada a
[curl\_multi\_remove\_handle()](function.curl-multi-remove-handle.md).

### Parâmetros

`multi_handle`
:   Um manipulador cURL múltiplo retornado por
    [curl\_multi\_init()](function.curl-multi-init.md).

`queued_messages`
:   Número de mensagens que ainda estão na fila

### Valor Retornado

Em caso de sucesso, retorna um array associativo para a mensagem, **`false`** em caso de falha.

**Conteúdo do array retornado**

| Chave: | Valor: |
| --- | --- |
| `msg` | A constante **`CURLMSG_DONE`**. Outros valores de retorno autalmente não estão disponíveis. |
| `result` | Uma das constantes **`CURLE_*`**. Se tudo estiver correto, a constante **`CURLE_OK`** será o resultado. |
| `handle` | Identificador cURL. |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `multi_handle` agora espera uma instância de [CurlMultiHandle](class.curlmultihandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [curl\_multi\_init()](function.curl-multi-init.md) - Retorna um multi-identificador cURL

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
