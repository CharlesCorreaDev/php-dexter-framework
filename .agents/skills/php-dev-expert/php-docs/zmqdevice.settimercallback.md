# Define a função de retorno do temporizador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqdevice.settimercallback.php

---

# ZMQDevice::setTimerCallback

(No version information available, might only be in Git)

ZMQDevice::setTimerCallback — Define a função de retorno do temporizador

### Descrição

public function **ZMQDevice::setTimerCallback**([callable](language.types.callable.md) `$cb_func`, [int](language.types.integer.md) `$timeout`, [mixed](language.types.mixed.md) `$user_data` = ?): [ZMQDevice](class.zmqdevice.md)

Define a função de retorno do temporizador. A função de retorno do temporizados será invocada após a passagem do tempo
limite. A diferença entre as funções de retorno de inatividade e do temporizador é que a função de retorno por inatividade é invocada
apenas quando o dispositivo está ocioso.
A assinatura da função de retorno é cb\_func(mized $user\_data). Adicionada à extensão ZMQ na versão 1.1.0.

### Parâmetros

`cb_func`
:   Função de retorno que será invocada quando o temporizador dispara. Retornar false
    ou um valor que seja interpretado como false nesta função fará com que
    o dispositivo pare.

`timeout`
:   Com que frequência a função deve ser chamada, em milissegundos. A função de retorno do temporizador é chamada
    periodicamente.
    Este limite de tempo garante que haverá no mínimo esta quantidade de milissegundos entre
    as chamadas à função de retorno.

`user_data`
:   Dados adicionais pasados para a função de retorno.

### Valor Retornado

Em caso de sucesso, esse método retorna o objeto atual.

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
