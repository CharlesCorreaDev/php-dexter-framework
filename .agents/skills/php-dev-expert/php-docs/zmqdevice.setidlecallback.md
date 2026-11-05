# Define a função de retorno de inatividade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqdevice.setidlecallback.php

---

# ZMQDevice::setIdleCallback

(No version information available, might only be in Git)

ZMQDevice::setIdleCallback — Define a função de retorno de inatividade

### Descrição

public function **ZMQDevice::setIdleCallback**([callable](language.types.callable.md) `$cb_func`, [int](language.types.integer.md) `$timeout`, [mixed](language.types.mixed.md) `$user_data` = ?): [ZMQDevice](class.zmqdevice.md)

Define a função de retorno de inatividade. Se o tempo limite de inatividade for definido, a função de retorno
será chamada se a consulta interna ficar sem eventos durante o tempo limite. Se a função de retorno
retornar falso ou um valor que seja avaliado para falso, o dispositivo é interrompido.
A assinatura da função de retorno é cb\_func(mixed $user\_data).

### Parâmetros

`cb_func`
:   A função de retorno que será invocada de o dispositivo ficar inativo. Retornando falso
    ou um valor que avalia para falso dessa função causará a
    interrupção do dispositivo.

`timeout`
:   Com que frequência invocar a função de retorno em milissegundos. A função de retorno de inatividade é invocada
    periodicamente quando não há atividade no dispositivo.
    O valor do tempo limite garante que haverá no mínimo essa quantidade de milissegundos entre
    as chamadas à função de retorno.

`user_data`
:   Dados adicionais passados para a função de retorno.

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
