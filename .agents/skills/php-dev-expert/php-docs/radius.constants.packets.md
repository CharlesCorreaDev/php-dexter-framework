# Tipos de pacotes RADIUS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/radius.constants.packets.php

---

## Tipos de pacotes RADIUS

Pacotes RADIUS, sejam solicitações ou respostas, sempre incluem um tipo. Essas
constantes são fornecidas para facilitar a especificação de tipos ao usar
[radius\_create\_request()](function.radius-create-request.md) e ao comparar o resultado de
[radius\_send\_request()](function.radius-send-request.md).

**`RADIUS_ACCESS_REQUEST`** ([int](language.types.integer.md))
:   Uma solicitação de acesso, usada para autenticar um usuário em um servidor RADIUS.
    Os pacotes de solicitação de acesso devem incluir um atributo
    [**`RADIUS_NAS_IP_ADDRESS`**](radius.constants.attributes.md#constant.radius-nas-ip-address)
    ou
    [**`RADIUS_NAS_IDENTIFIER`**](radius.constants.attributes.md#constant.radius-nas-identifier),
    e também devem incluir um atributo
    [**`RADIUS_USER_PASSWORD`**](radius.constants.attributes.md#constant.radius-user-password),
    [**`RADIUS_CHAP_PASSWORD`**](radius.constants.attributes.md#constant.radius-chap-password)
    ou
    [**`RADIUS_STATE`**](radius.constants.attributes.md#constant.radius-state)
    e devem incluir um
    atributo
    [**`RADIUS_USER_NAME`**](radius.constants.attributes.md#constant.radius-user-name).

**`RADIUS_ACCESS_ACCEPT`** ([int](language.types.integer.md))
:   Uma resposta de Aceitação de Acesso a uma Solicitação de Acesso, indicando que o
    servidor RADIUS autenticou o usuário com sucesso.

**`RADIUS_ACCESS_REJECT`** ([int](language.types.integer.md))
:   Uma resposta de rejeição de acesso a uma solicitação de acesso indicando que o
    servidor RADIUS não conseguiu autenticar o usuário.

**`RADIUS_ACCESS_CHALLENGE`** ([int](language.types.integer.md))
:   Uma resposta de Desafio de Acesso a uma Solicitação de Acesso, indicando que o
    servidor RADIUS requer mais informações em outra Solicitação de Acesso
    antes de autenticar o usuário.

**`RADIUS_ACCOUNTING_REQUEST`** ([int](language.types.integer.md))
:   Uma solicitação de contabilidade, usada para transmitir informações contábeis de um
    serviço ao servidor RADIUS.

**`RADIUS_ACCOUNTING_RESPONSE`** ([int](language.types.integer.md))
:   Uma resposta de Contabilidade a uma Solicitação de Contabilidade.

**`RADIUS_COA_REQUEST`** ([int](language.types.integer.md))
:   Uma Solicitação CoA, enviada do servidor RADIUS para indicar que as
    autorizações na sessão do usuário foram alteradas. Uma resposta deve ser
    enviada na forma de um CoA-ACK ou um CoA-NAK.

    Esta constante está disponível no PECL radius 1.3.0 e posteriores.

**`RADIUS_COA_ACK`** ([int](language.types.integer.md))
:   Um CoA-ACK, enviado ao servidor RADIUS para indicar que as autorizações
    do usuário foram atualizadas.

    Esta constante está disponível no PECL radius 1.3.0 e posteriores.

**`RADIUS_COA_NAK`** ([int](language.types.integer.md))
:   Um CoA-NAK, enviado ao servidor RADIUS para indicar que as autorizações
    do usuário não puderam ser atualizadas.

    Esta constante está disponível no PECL radius 1.3.0 e posteriores.

**`RADIUS_DISCONNECT_REQUEST`** ([int](language.types.integer.md))
:   Uma solicitação de desconexão, enviada do servidor RADIUS para indicar que a
    sessão do usuário deve ser encerrada.

    Esta constante está disponível no PECL radius 1.3.0 e posteriores.

**`RADIUS_DISCONNECT_ACK`** ([int](language.types.integer.md))
:   Um reconhecimento de desconexão, enviado ao servidor RADIUS para indicar que a sessão do
    usuário foi encerrada.

    Esta constante está disponível no PECL radius 1.3.0 e posteriores.

**`RADIUS_DISCONNECT_NAK`** ([int](language.types.integer.md))
:   Um não reconhecimento de desconexão, enviado ao servidor RADIUS para indicar que a sessão do usuário
    não pôde ser encerrada.

    Esta constante está disponível no PECL radius 1.3.0 e posteriores.

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
