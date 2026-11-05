# Tipos de atributos RADIUS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/radius.constants.attributes.php

---

## Tipos de atributos RADIUS

Essas constantes definem tipos de atributos RADIUS que podem ser usados ​​com
[radius\_put\_addr()](function.radius-put-addr.md), [radius\_put\_attr()](function.radius-put-attr.md),
[radius\_put\_int()](function.radius-put-int.md) e
[radius\_put\_string()](function.radius-put-string.md).

**`RADIUS_USER_NAME`** ([int](language.types.integer.md))
:   O atributo "User-Name". O valor do atributo deve ser uma
    [string](language.types.string.md) contendo o nome do usuário que está sendo autenticado,
    e pode ser definido usando [radius\_put\_attr()](function.radius-put-attr.md).

**`RADIUS_USER_PASSWORD`** ([int](language.types.integer.md))
:   O atributo "User-Password". O valor do atributo deve ser uma
    [string](language.types.string.md) contendo a senha do usuário e pode ser definido usando
    [radius\_put\_attr()](function.radius-put-attr.md). Este valor será ofuscado na
    transmissão, conforme descrito na
    [» seção 5.2 da RFC 2865](https://datatracker.ietf.org/doc/html/rfc2865).

**`RADIUS_CHAP_PASSWORD`** ([int](language.types.integer.md))
:   O atributo "Chap-Password". O valor do atributo deve ser uma
    [string](language.types.string.md) com o primeiro byte contendo o identificador CHAP,
    e os 16 bytes subsequentes contendo o hash MD5 do identificador CHAP,
    a senha em texto simples e o valor do desafio CHAP,
    concatenados. Observe que o valor do desafio CHAP também deve ser
    enviado separadamente em um
    atributo
    [**`RADIUS_CHAP_CHALLENGE`**](radius.constants.attributes.md#constant.radius-chap-challenge).

    **Exemplo #1 Usando senhas CHAP**

    ```
    <?php
    // Primeiro, criaremos um identificador de autenticação e uma solicitação.
    $radh = radius_auth_open();
    radius_add_server($radh, $server, $port, $secret, 3, 3);
    radius_create_request($radh, RADIUS_ACCESS_REQUEST);

    // Supondo que $password contém a senha em texto simples, agora:

    // Gere um desafio.
    $challenge = mt_rand();

    // Especifique um identificador CHAP.
    $ident = 1;

    // Adicione o atributo Chap-Password.
    $cp = hash('md5', pack('Ca*', $ident, $password.$challenge), true);
    radius_put_attr($radh, RADIUS_CHAP_PASSWORD, pack('C', $ident).$cp);

    // Adicione o atributo Chap-Challenge.
    radius_put_attr($radh, RADIUS_CHAP_CHALLENGE, $challenge);

    /* A partir daqui, seriam adicionados os atributos restantes e
    * a função radius_send_request() seria chamada. */
    ?>
    ```

**`RADIUS_NAS_IP_ADDRESS`** ([int](language.types.integer.md))
:   O atributo "NAS-IP-Address". O valor do atributo é esperado para o endereço IP
    do cliente RADIUS, codificado como um [int](language.types.integer.md), que
    pode ser definido usando [radius\_put\_addr()](function.radius-put-addr.md).

**`RADIUS_NAS_PORT`** ([int](language.types.integer.md))
:   O atributo "NAS-Port". O valor do atributo deve ser a
    porta física do usuário no cliente RADIUS, codificada como um
    [int](language.types.integer.md), que pode ser definido usando
    [radius\_put\_int()](function.radius-put-int.md).

**`RADIUS_SERVICE_TYPE`** ([int](language.types.integer.md))
:   O atributo "Service-Type". O valor do atributo indica o tipo de serviço
    que o usuário está solicitando e deve ser um
    [int](language.types.integer.md), que pode ser definido usando
    [radius\_put\_int()](function.radius-put-int.md).

    Várias constantes são fornecidas para representar os valores possíveis
    deste atributo. Elas incluem:

    - **`RADIUS_LOGIN`**
    - **`RADIUS_FRAMED`**
    - **`RADIUS_CALLBACK_LOGIN`**
    - **`RADIUS_CALLBACK_FRAMED`**
    - **`RADIUS_OUTBOUND`**
    - **`RADIUS_ADMINISTRATIVE`**
    - **`RADIUS_NAS_PROMPT`**
    - **`RADIUS_AUTHENTICATE_ONLY`**
    - **`RADIUS_CALLBACK_NAS_PROMPT`**

**`RADIUS_FRAMED_PROTOCOL`** ([int](language.types.integer.md))
:   O atributo "Framed-Protocol". O valor do atributo deve ser um
    [int](language.types.integer.md) indicando o enquadramento a ser usado para acesso enquadrado
    e pode ser definido usando [radius\_put\_int()](function.radius-put-int.md). Os
    valores possíveis do atributo incluem estas constantes:

    - **`RADIUS_PPP`**
    - **`RADIUS_SLIP`**
    - **`RADIUS_ARAP`**
    - **`RADIUS_GANDALF`**
    - **`RADIUS_XYLOGICS`**

**`RADIUS_FRAMED_IP_ADDRESS`** ([int](language.types.integer.md))
:   O atributo "Framed-IP-Address". O valor do atributo deve ser
    o endereço de rede do usuário codificado como um [int](language.types.integer.md),
    que pode ser definido usando [radius\_put\_addr()](function.radius-put-addr.md) e
    recuperado usando [radius\_cvt\_addr()](function.radius-cvt-addr.md).

**`RADIUS_FRAMED_IP_NETMASK`** ([int](language.types.integer.md))
:   O atributo "Framed-IP-Netmask". O valor do atributo deve ser
    a máscara de rede da rede do usuário, codificada como um [int](language.types.integer.md),
    que pode ser definida usando [radius\_put\_addr()](function.radius-put-addr.md) e
    recuperada usando [radius\_cvt\_addr()](function.radius-cvt-addr.md).

**`RADIUS_FRAMED_ROUTING`** ([int](language.types.integer.md))
:   O atributo "Framed-Routing". O valor do atributo deve ser um
    [int](language.types.integer.md) indicando o método de roteamento para o usuário, que
    pode ser definido usando [radius\_put\_int()](function.radius-put-int.md).

    Os valores possíveis incluem:

    - `0`: Sem roteamento
    - `1`: Enviar pacotes de roteamento
    - `2`: Escutar pacotes de roteamento
    - `3`: Enviar e escutar

**`RADIUS_FILTER_ID`** ([int](language.types.integer.md))
:   O atributo "Filter-ID". O valor do atributo deve ser uma
    [string](language.types.string.md) de filtros específica da implementação e legível por humanos,
    que pode ser definida usando [radius\_put\_attr()](function.radius-put-attr.md).

**`RADIUS_FRAMED_MTU`** ([int](language.types.integer.md))
:   O atributo "Framed-MTU". O valor do atributo deve ser um
    [int](language.types.integer.md) indicando o MTU a ser configurado para o usuário,
    e pode ser definido usando [radius\_put\_int()](function.radius-put-int.md).

**`RADIUS_FRAMED_COMPRESSION`** ([int](language.types.integer.md))
:   O atributo "Framed-Compression". O valor do atributo deve ser
    um [int](language.types.integer.md) indicando o protocolo de compressão a ser utilizado,
    e pode ser definido usando [radius\_put\_int()](function.radius-put-int.md). Os valores
    possíveis incluem estas constantes:

    - **`RADIUS_COMP_NONE`**: Sem compressão
    - **`RADIUS_COMP_VJ`**: Compressão de cabeçalho TCP/IP VJ
    - **`RADIUS_COMP_IPXHDR`**: Compressão de cabeçalho IPX
    - **`RADIUS_COMP_STAC_LZS`**:
      Compressão Stac-LZS (adicionada no raio PECL 1.3.0b2)

**`RADIUS_LOGIN_IP_HOST`** ([int](language.types.integer.md))
:   O atributo "Login-IP-Host". O valor do atributo é esperado para o endereço IP
    ao qual o usuário se conectará, codificado como um [int](language.types.integer.md),
    que pode ser definido usando [radius\_put\_addr()](function.radius-put-addr.md).

**`RADIUS_LOGIN_SERVICE`** ([int](language.types.integer.md))
:   O atributo "Login-Service". O valor do atributo é um
    [int](language.types.integer.md) que indica o serviço ao qual o usuário se conectará
    no host de login. O valor pode ser convertido para um inteiro PHP via
    [radius\_cvt\_int()](function.radius-cvt-int.md).

**`RADIUS_LOGIN_TCP_PORT`** ([int](language.types.integer.md))
:   O atributo "Login-TCP-Port". O valor do atributo é um
    [int](language.types.integer.md) que indica a porta para conectar o usuário no
    host de login. O valor pode ser convertido para um inteiro PHP via
    [radius\_cvt\_int()](function.radius-cvt-int.md).

**`RADIUS_REPLY_MESSAGE`** ([int](language.types.integer.md))
:   O atributo "Reply-Message". O valor do atributo é uma
    [string](language.types.string.md) contendo texto que pode ser exibido ao usuário em
    resposta a uma solicitação de acesso.

**`RADIUS_CALLBACK_NUMBER`** ([int](language.types.integer.md))
:   O atributo "Callback-Number". O valor do atributo é uma
    [string](language.types.string.md) contendo a string de discagem a ser usada para o retorno de chamada.

**`RADIUS_CALLBACK_ID`** ([int](language.types.integer.md))
:   O atributo "Callback-Id". O valor do atributo é uma [string](language.types.string.md)
    contendo um nome específico da implementação do local a ser chamado.

**`RADIUS_FRAMED_ROUTE`** ([int](language.types.integer.md))
:   O atributo "Framed-Route". O valor do atributo é uma [string](language.types.string.md)
    contendo um conjunto de rotas específicas da implementação a serem configuradas para
    o usuário.

**`RADIUS_FRAMED_IPX_NETWORK`** ([int](language.types.integer.md))
:   O atributo "Framed-IPX-Network". O valor do atributo é um
    [int](language.types.integer.md) contendo a rede IPX a ser configurada para o
    usuário, ou `0xFFFFFFFE` para indicar que o cliente RADIUS
    deve selecionar a rede, e pode ser acessado via
    [radius\_cvt\_int()](function.radius-cvt-int.md).

**`RADIUS_STATE`** ([int](language.types.integer.md))
:   O atributo "State". O valor do atributo é uma [string](language.types.string.md) definida pela
    implementação, incluída em um Desafio de Acesso de um servidor que
    deve ser incluída na Solicitação de Acesso subsequente e pode ser definida usando
    [radius\_put\_attr()](function.radius-put-attr.md).

**`RADIUS_CLASS`** ([int](language.types.integer.md))
:   O atributo "Class". O valor do atributo é uma [string](language.types.string.md) arbitrária
    incluída em uma mensagem Access-Accept que deve
    então ser enviada ao servidor de contabilidade em mensagens Accounting-Request,
    e pode ser definida usando [radius\_put\_attr()](function.radius-put-attr.md).

**`RADIUS_VENDOR_SPECIFIC`** ([int](language.types.integer.md))
:   O atributo "Vendor-Specific". Em geral, os valores do atributo do fornecedor
    devem ser definidos usando [radius\_put\_vendor\_addr()](function.radius-put-vendor-addr.md),
    [radius\_put\_vendor\_attr()](function.radius-put-vendor-attr.md),
    [radius\_put\_vendor\_int()](function.radius-put-vendor-int.md) e
    [radius\_put\_vendor\_string()](function.radius-put-vendor-string.md), em vez de diretamente.

    Esta constante é útil principalmente ao interpretar atributos
    específicos do fornecedor em respostas de um servidor RADIUS; quando um atributo
    específico do fornecedor é recebido, a função [radius\_get\_vendor\_attr()](function.radius-get-vendor-attr.md)
    deve ser usada para acessar o ID do fornecedor, o tipo de atributo e
    o valor do atributo.

**`RADIUS_SESSION_TIMEOUT`** ([int](language.types.integer.md))
:   Tempo limite da sessão

**`RADIUS_IDLE_TIMEOUT`** ([int](language.types.integer.md))
:   Tempo limite de inatividade

**`RADIUS_TERMINATION_ACTION`** ([int](language.types.integer.md))
:   Ação de terminação

**`RADIUS_CALLED_STATION_ID`** ([int](language.types.integer.md))
:   ID da estação chamada

**`RADIUS_CALLING_STATION_ID`** ([int](language.types.integer.md))
:   ID da estação que faz a chamada

**`RADIUS_NAS_IDENTIFIER`** ([int](language.types.integer.md))
:   ID NAS

**`RADIUS_PROXY_STATE`** ([int](language.types.integer.md))
:   Estado do proxy

**`RADIUS_LOGIN_LAT_SERVICE`** ([int](language.types.integer.md))
:   Serviço de Login LAT

**`RADIUS_LOGIN_LAT_NODE`** ([int](language.types.integer.md))
:   Nó de Login LAT

**`RADIUS_LOGIN_LAT_GROUP`** ([int](language.types.integer.md))
:   Grupo de Login LAT

**`RADIUS_FRAMED_APPLETALK_LINK`** ([int](language.types.integer.md))
:   Link de Framed Appletalk

**`RADIUS_FRAMED_APPLETALK_NETWORK`** ([int](language.types.integer.md))
:   Rede de Framed Appletalk

**`RADIUS_FRAMED_APPLETALK_ZONE`** ([int](language.types.integer.md))
:   Zona de Framed Appletalk

**`RADIUS_CHAP_CHALLENGE`** ([int](language.types.integer.md))
:   Desafio

**`RADIUS_NAS_PORT_TYPE`** ([int](language.types.integer.md))
:   Tipo de porta NAS, um dos seguintes:

    - **`RADIUS_ASYNC`**
    - **`RADIUS_SYNC`**
    - **`RADIUS_ISDN_SYNC`**
    - **`RADIUS_ISDN_ASYNC_V120`**
    - **`RADIUS_ISDN_ASYNC_V110`**
    - **`RADIUS_VIRTUAL`**
    - **`RADIUS_PIAFS`**
    - **`RADIUS_HDLC_CLEAR_CHANNEL`**
    - **`RADIUS_X_25`**
    - **`RADIUS_X_75`**
    - **`RADIUS_G_3_FAX`**
    - **`RADIUS_SDSL`**
    - **`RADIUS_ADSL_CAP`**
    - **`RADIUS_ADSL_DMT`**
    - **`RADIUS_IDSL`**
    - **`RADIUS_ETHERNET`**
    - **`RADIUS_XDSL`**
    - **`RADIUS_CABLE`**
    - **`RADIUS_WIRELESS_OTHER`**
    - **`RADIUS_WIRELESS_IEEE_802_11`**

**`RADIUS_PORT_LIMIT`** ([int](language.types.integer.md))
:   Limite de porta

**`RADIUS_LOGIN_LAT_PORT`** ([int](language.types.integer.md))
:   Porta de Login LAT

**`RADIUS_CONNECT_INFO`** ([int](language.types.integer.md))
:   Informação de conexão

**`RADIUS_ACCT_STATUS_TYPE`** ([int](language.types.integer.md))
:   Tipo de status contábil, um dos seguintes:

    - **`RADIUS_START`**
    - **`RADIUS_STOP`**
    - **`RADIUS_ACCOUNTING_ON`**
    - **`RADIUS_ACCOUNTING_OFF`**

**`RADIUS_ACCT_DELAY_TIME`** ([int](language.types.integer.md))
:   Tempo de atraso contábil

**`RADIUS_ACCT_INPUT_OCTETS`** ([int](language.types.integer.md))
:   Bytes de entrada contábil

**`RADIUS_ACCT_OUTPUT_OCTETS`** ([int](language.types.integer.md))
:   Bytes de saída contábil

**`RADIUS_ACCT_SESSION_ID`** ([int](language.types.integer.md))
:   ID da sessão contábil

**`RADIUS_ACCT_AUTHENTIC`** ([int](language.types.integer.md))
:   Tipo de autenticação de contabilidade, uma das constantes:

    - **`RADIUS_AUTH_RADIUS`**
    - **`RADIUS_AUTH_LOCAL`**
    - **`RADIUS_AUTH_REMOTE`**

**`RADIUS_ACCT_SESSION_TIME`** ([int](language.types.integer.md))
:   Tempo de sessão de contabilidade

**`RADIUS_ACCT_INPUT_PACKETS`** ([int](language.types.integer.md))
:   Pacotes de entrada de contabilidade

**`RADIUS_ACCT_OUTPUT_PACKETS`** ([int](language.types.integer.md))
:   Pacotes de saída de contabilidade

**`RADIUS_ACCT_TERMINATE_CAUSE`** ([int](language.types.integer.md))
:   Causa de encerramento da contabilidade, uma das seguintes:

    - **`RADIUS_TERM_USER_REQUEST`**
    - **`RADIUS_TERM_LOST_CARRIER`**
    - **`RADIUS_TERM_LOST_SERVICE`**
    - **`RADIUS_TERM_IDLE_TIMEOUT`**
    - **`RADIUS_TERM_SESSION_TIMEOUT`**
    - **`RADIUS_TERM_ADMIN_RESET`**
    - **`RADIUS_TERM_ADMIN_REBOOT`**
    - **`RADIUS_TERM_PORT_ERROR`**
    - **`RADIUS_TERM_NAS_ERROR`**
    - **`RADIUS_TERM_NAS_REQUEST`**
    - **`RADIUS_TERM_NAS_REBOOT`**
    - **`RADIUS_TERM_PORT_UNNEEDED`**
    - **`RADIUS_TERM_PORT_PREEMPTED`**
    - **`RADIUS_TERM_PORT_SUSPENDED`**
    - **`RADIUS_TERM_SERVICE_UNAVAILABLE`**
    - **`RADIUS_TERM_CALLBACK`**
    - **`RADIUS_TERM_USER_ERROR`**
    - **`RADIUS_TERM_HOST_REQUEST`**

**`RADIUS_ACCT_MULTI_SESSION_ID`** ([int](language.types.integer.md))
:   ID de multissessão de contabilidade

**`RADIUS_ACCT_LINK_COUNT`** ([int](language.types.integer.md))
:   Contagem de conexões de contabilidade

**Constantes de tipo de serviço**

**`RADIUS_LOGIN`**

**`RADIUS_FRAMED`**

**`RADIUS_CALLBACK_LOGIN`**

**`RADIUS_CALLBACK_FRAMED`**

**`RADIUS_OUTBOUND`**

**`RADIUS_ADMINISTRATIVE`**

**`RADIUS_NAS_PROMPT`**

**`RADIUS_AUTHENTICATE_ONLY`**

**`RADIUS_CALLBACK_NAS_PROMPT`**

**Constantes de Framed-Protocol**

**`RADIUS_PPP`**

**`RADIUS_SLIP`**

**`RADIUS_ARAP`**

**`RADIUS_GANDALF`**

**`RADIUS_XYLOGICS`**

**Constantes de Framed-Compression**

**`RADIUS_COMP_NONE`**

**`RADIUS_COMP_VJ`**

**`RADIUS_COMP_IPXHDR`**

**`RADIUS_COMP_STAC_LZS`**

**Constantes de Tipo de Porta NAS**

**`RADIUS_ASYNC`**

**`RADIUS_SYNC`**

**`RADIUS_ISDN_SYNC`**

**`RADIUS_ISDN_ASYNC_V120`**

**`RADIUS_ISDN_ASYNC_V110`**

**`RADIUS_VIRTUAL`**

**`RADIUS_PIAFS`**

**`RADIUS_HDLC_CLEAR_CHANNEL`**

**`RADIUS_X_25`**

**`RADIUS_X_75`**

**`RADIUS_G_3_FAX`**

**`RADIUS_SDSL`**

**`RADIUS_ADSL_CAP`**

**`RADIUS_ADSL_DMT`**

**`RADIUS_IDSL`**

**`RADIUS_ETHERNET`**

**`RADIUS_XDSL`**

**`RADIUS_CABLE`**

**`RADIUS_WIRELESS_OTHER`**

**`RADIUS_WIRELESS_IEEE_802_11`**

**Constantes de Tipo de Status de Contabilidade**

**`RADIUS_START`**

**`RADIUS_STOP`**

**`RADIUS_ACCOUNTING_ON`**

**`RADIUS_ACCOUNTING_OFF`**

**Constantes de Autenticação de Contabilidade**

**`RADIUS_AUTH_RADIUS`**

**`RADIUS_AUTH_LOCAL`**

**`RADIUS_AUTH_REMOTE`**

**Constantes de Causa de Término de Contabilidade**

**`RADIUS_TERM_USER_REQUEST`**

**`RADIUS_TERM_LOST_CARRIER`**

**`RADIUS_TERM_LOST_SERVICE`**

**`RADIUS_TERM_IDLE_TIMEOUT`**

**`RADIUS_TERM_SESSION_TIMEOUT`**

**`RADIUS_TERM_ADMIN_RESET`**

**`RADIUS_TERM_ADMIN_REBOOT`**

**`RADIUS_TERM_PORT_ERROR`**

**`RADIUS_TERM_NAS_ERROR`**

**`RADIUS_TERM_NAS_REQUEST`**

**`RADIUS_TERM_NAS_REBOOT`**

**`RADIUS_TERM_PORT_UNNEEDED`**

**`RADIUS_TERM_PORT_PREEMPTED`**

**`RADIUS_TERM_PORT_SUSPENDED`**

**`RADIUS_TERM_SERVICE_UNAVAILABLE`**

**`RADIUS_TERM_CALLBACK`**

**`RADIUS_TERM_USER_ERROR`**

**`RADIUS_TERM_HOST_REQUEST`**

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
