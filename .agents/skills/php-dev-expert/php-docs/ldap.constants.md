# Constantes predefinidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ldap.constants.php

---

# Constantes predefinidas

As constantes abaixo são definidas por esta extensão e
só estarão disponíveis quando a extensão tiver sido compilada no PHP
ou tiver sido carregada dinamicamente em tempo de execução.

**`LDAP_DEREF_NEVER`** ([int](language.types.integer.md))
:   Regra de desreferenciação de apelido - Nunca.

**`LDAP_DEREF_SEARCHING`** ([int](language.types.integer.md))
:   Regra de desreferenciação de apelido - Pesquisando.

**`LDAP_DEREF_FINDING`** ([int](language.types.integer.md))
:   Regra de desreferenciação de apelido - Encontrando.

**`LDAP_DEREF_ALWAYS`** ([int](language.types.integer.md))
:   Regra de desreferenciação de apelido - Sempre.

**`LDAP_OPT_DEREF`** ([int](language.types.integer.md))
:   Especifica regras alternativas para seguir apelidos no servidor.

**`LDAP_OPT_SIZELIMIT`** ([int](language.types.integer.md))
:   Especifica o número máximo de entradas que podem ser
    retornadas em uma operação de pesquisa.

    > **Nota**:
    >
    > O limite de tamanho real para operações é também ligado
    > ao número máximo de entradas de retorno configurado no servidor.
    > A menor destas duas configurações é o limite de tamanho real.

**`LDAP_OPT_TIMELIMIT`** ([int](language.types.integer.md))
:   Especifica o número de segundos a esperar por resultados de pesquisa.

    > **Nota**:
    >
    > O limite de tempo real para operações é também ligado
    > ao tempo máximo de retorno configurado no servidor.
    > A menor destas duas configurações é o limite de tempo real.

**`LDAP_OPT_NETWORK_TIMEOUT`** ([int](language.types.integer.md))
:   Opção de [ldap\_set\_option()](function.ldap-set-option.md) para permitir definir limite de tempo de rede.
    (Disponível a partir do PHP 5.3.0)

**`LDAP_OPT_PROTOCOL_VERSION`** ([int](language.types.integer.md))
:   Especifica o protocolo LDAP a ser usado (V2 ou V3).

**`LDAP_OPT_ERROR_NUMBER`** ([int](language.types.integer.md))
:   Número de erro de sessão mais recente.

**`LDAP_OPT_REFERRALS`** ([int](language.types.integer.md))
:   Especifica se deve seguir automaticamente referências retornadas
    pelo servidor LDAP.

**`LDAP_OPT_RESTART`** ([int](language.types.integer.md))
:   Determina se a conexão deve ou não ser implicitamente reiniciada.

**`LDAP_OPT_HOST_NAME`** ([int](language.types.integer.md))
:   Define/obtém uma lista de servidores separadas por espaço ao tentar uma conexão.

**`LDAP_OPT_ERROR_STRING`** ([int](language.types.integer.md))
:   Sinônimo de **`LDAP_OPT_DIAGNOSTIC_MESSAGE`**.

**`LDAP_OPT_DIAGNOSTIC_MESSAGE`** ([int](language.types.integer.md))
:   Obtém a mensagem de erro mais recente da sessão.

**`LDAP_OPT_MATCHED_DN`** ([int](language.types.integer.md))
:   Define/obtém o DN correspondente associado com a conexão.

**`LDAP_OPT_SERVER_CONTROLS`** ([int](language.types.integer.md))
:   Especifica uma lista padrão de controles de servidor a ser enviada com cada requisição.

**`LDAP_OPT_CLIENT_CONTROLS`** ([int](language.types.integer.md))
:   Especifica um lista padrão de controles de cliente a ser processada com cada requisição.

**`LDAP_OPT_DEBUG_LEVEL`** ([int](language.types.integer.md))
:   Especifica um nível bit-a-bit para rastreamento de depuração.

**`LDAP_OPT_X_KEEPALIVE_IDLE`** ([int](language.types.integer.md))
:   Especifica o número de segundos em que uma conexão deve se manter ociosa antes que o TCP comece a enviar sondagens de manutenção de atividade.

**`LDAP_OPT_X_KEEPALIVE_PROBES`** ([int](language.types.integer.md))
:   Especifica o número máximo de sondagens de manutenção de atividade que o TCP deve enviar antes de derrubar a conexão.

**`LDAP_OPT_X_KEEPALIVE_INTERVAL`** ([int](language.types.integer.md))
:   Especifica o intervalo em segundos entre sondagens de manutenção de atividade individuais.

**`LDAP_OPT_X_TLS_CACERTDIR`** ([int](language.types.integer.md))
:   Especifica o caminho do diretório contendo os certificados CA.

**`LDAP_OPT_X_TLS_CACERTFILE`** ([int](language.types.integer.md))
:   Especifica o caminho completo do arquivo de certificado CA.

**`LDAP_OPT_X_TLS_CERTFILE`** ([int](language.types.integer.md))
:   Especifica o caminho completo do arquivo de certificado.

**`LDAP_OPT_X_TLS_CIPHER_SUITE`** ([int](language.types.integer.md))
:   Especifica o conjunto de cifras permitidas.

**`LDAP_OPT_X_TLS_CRLCHECK`** ([int](language.types.integer.md))
:   Especifica a estratégia de avaliação CRL. Deve ser uma das constantes: **`LDAP_OPT_X_TLS_CRL_NONE`**, **`LDAP_OPT_X_TLS_CRL_PEER`**, **`LDAP_OPT_X_TLS_CRL_ALL`**.

    > **Nota**:
    >
    > Esta opção é válida somente para OpenSSL.

**`LDAP_OPT_X_TLS_CRLFILE`** ([int](language.types.integer.md))
:   Especifica o caminho completo do arquivo CRL.

    > **Nota**:
    >
    > Esta opção é válida somente para GnuTLS.

**`LDAP_OPT_X_TLS_DHFILE`** ([int](language.types.integer.md))
:   Especifica o caminho completo do arquivo contendo os parâmetros para troca de chaves efêmera Diffie-Hellman.

    > **Nota**:
    >
    > Esta opção é ignorada pelo GnuTLS e pelo Mozilla NSS.

**`LDAP_OPT_X_TLS_KEYFILE`** ([int](language.types.integer.md))
:   Especifica o caminho completo do arquivo de chave de certificado.

**`LDAP_OPT_X_TLS_PROTOCOL_MIN`** ([int](language.types.integer.md))
:   Especifica a versão mínima de protocolo. Pode ser uma das constantes: **`LDAP_OPT_X_TLS_PROTOCOL_SSL2`**,**`LDAP_OPT_X_TLS_PROTOCOL_SSL3`**, **`LDAP_OPT_X_TLS_PROTOCOL_TLS1_0`**, **`LDAP_OPT_X_TLS_PROTOCOL_TLS1_1`**, **`LDAP_OPT_X_TLS_PROTOCOL_TLS1_2`** ou **`LDAP_OPT_X_TLS_PROTOCOL_TLS1_3`**.

**`LDAP_OPT_X_TLS_PROTOCOL_MAX`** ([int](language.types.integer.md))
:   Especifica a versão máxima de protocolo. Pode ser uma das constantes: **`LDAP_OPT_X_TLS_PROTOCOL_SSL2`**, **`LDAP_OPT_X_TLS_PROTOCOL_SSL3`**, **`LDAP_OPT_X_TLS_PROTOCOL_TLS1_0`**, **`LDAP_OPT_X_TLS_PROTOCOL_TLS1_1`**, **`LDAP_OPT_X_TLS_PROTOCOL_TLS1_2`** ou **`LDAP_OPT_X_TLS_PROTOCOL_TLS1_3`**.
    Disponível a partir do PHP 8.4.0.

**`LDAP_OPT_X_TLS_RANDOM_FILE`** ([int](language.types.integer.md))
:   Define/obtém o arquivo aleatório quando um dos padrões do sistema não estiver disponível.

**`LDAP_OPT_X_TLS_REQUIRE_CERT`** ([int](language.types.integer.md))
:   Especifica a estratégia de verificação de certificado. Deve ser uma das constantes: **`LDAP_OPT_X_TLS_NEVER`**, **`LDAP_OPT_X_TLS_HARD`**, **`LDAP_OPT_X_TLS_DEMAND`**,
    **`LDAP_OPT_X_TLS_ALLOW`**, **`LDAP_OPT_X_TLS_TRY`**.
    (Disponível a partir do PHP 7.0.0)

**`GSLC_SSL_NO_AUTH`** ([int](language.types.integer.md))
:   Modo de autenticação SSL - Nenhuma autenticação requerida. (Somente para LDAP Oracle)

**`GSLC_SSL_ONEWAY_AUTH`** ([int](language.types.integer.md))
:   Modo de autenticação SSL - Somente autenticação de servidor requerida. (Somente para LDAP Oracle)

**`GSLC_SSL_TWOWAY_AUTH`** ([int](language.types.integer.md))
:   Modo de autenticação SSL - Autenticação de servidor e cliente requeridas. (Somente para LDAP Oracle)

**`LDAP_EXOP_START_TLS`** ([string](language.types.string.md))
:   Constante de operação estendida - Iniciar TLS [» RFC 4511](https://datatracker.ietf.org/doc/html/rfc4511)).

**`LDAP_EXOP_MODIFY_PASSWD`** ([string](language.types.string.md))
:   Constante de operação estendida - Modify password ([» RFC 3062](https://datatracker.ietf.org/doc/html/rfc3062)).

**`LDAP_EXOP_REFRESH`** ([string](language.types.string.md))
:   Constante de operação estendida - Atualizar ([» RFC 2589](https://datatracker.ietf.org/doc/html/rfc2589)).

**`LDAP_EXOP_WHO_AM_I`** ([string](language.types.string.md))
:   Constante de operação estendida - WHOAMI ([» RFC 4532](https://datatracker.ietf.org/doc/html/rfc4532)).

**`LDAP_EXOP_TURN`** ([string](language.types.string.md))
:   Constante de operação estendida - Turn ([» RFC 4531](https://datatracker.ietf.org/doc/html/rfc4531)).

**`LDAP_CONTROL_MANAGEDSAIT`** ([string](language.types.string.md))
:   Constante de Controle - Gerencia IT DSA ([» RFC 3296](https://datatracker.ietf.org/doc/html/rfc3296)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_PROXY_AUTHZ`** ([string](language.types.string.md))
:   Constante de Controle - Autorização com Proxy ([» RFC 4370](https://datatracker.ietf.org/doc/html/rfc4730)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_SUBENTRIES`** ([string](language.types.string.md))
:   Constante de Controle - Sub-entradas ([» RFC 3672](https://datatracker.ietf.org/doc/html/rfc3672)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_VALUESRETURNFILTER`** ([string](language.types.string.md))
:   Constante de Controle - Filtrar valores de retorno ([» RFC 3876](https://datatracker.ietf.org/doc/html/rfc3876)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_ASSERT`** ([string](language.types.string.md))
:   Constante de Controle - Asserção ([» RFC 4528](https://datatracker.ietf.org/doc/html/rfc4528)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_PRE_READ`** ([string](language.types.string.md))
:   Constante de Controle - Pré-leitura ([» RFC 4527](https://datatracker.ietf.org/doc/html/rfc4527)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_POST_READ`** ([string](language.types.string.md))
:   Constante de Controle - Pós-leitura ([» RFC 4527](https://datatracker.ietf.org/doc/html/rfc4527)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_SORTREQUEST`** ([string](language.types.string.md))
:   Constante de Controle - Ordenar requisição ([» RFC 2891](https://datatracker.ietf.org/doc/html/rfc2891)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_SORTRESPONSE`** ([string](language.types.string.md))
:   Constante de Controle - Ordenar resposta ([» RFC 2891](https://datatracker.ietf.org/doc/html/rfc2891)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_PAGEDRESULTS`** ([string](language.types.string.md))
:   Constante de Controle - Resultados paginados ([» RFC 2696](https://datatracker.ietf.org/doc/html/rfc2696)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_AUTHZID_REQUEST`** ([string](language.types.string.md))
:   Constante de Controle - Requisição de Identidade de Autorização ([» RFC 3829](https://datatracker.ietf.org/doc/html/rfc3829)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_AUTHZID_RESPONSE`** ([string](language.types.string.md))
:   Constante de Controle - Reposta de Identidade de Autorização ([» RFC 3829](https://datatracker.ietf.org/doc/html/rfc3829)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_SYNC`** ([string](language.types.string.md))
:   Constante de Controle - Operação de Sincronização de Conteúdo ([» RFC 4533](https://datatracker.ietf.org/doc/html/rfc4533)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_SYNC_STATE`** ([string](language.types.string.md))
:   Constante de Controle - Estato de Operação de Sincronização de Conteúdo ([» RFC 4533](https://datatracker.ietf.org/doc/html/rfc4533)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_SYNC_DONE`** ([string](language.types.string.md))
:   Constante de Controle - Operação de Sincronização de Conteúdo Concluída ([» RFC 4533](https://datatracker.ietf.org/doc/html/rfc4533)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_DONTUSECOPY`** ([string](language.types.string.md))
:   Constante de Controle - Não Usar Cópia ([» RFC 6171](https://datatracker.ietf.org/doc/html/rfc6171)).
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_PASSWORDPOLICYREQUEST`** ([string](language.types.string.md))
:   Constante de Controle - Requisição de Política de Senha.
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_PASSWORDPOLICYRESPONSE`** ([string](language.types.string.md))
:   Constante de Controle - Resposta de Política de Senha.
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_X_INCREMENTAL_VALUES`** ([string](language.types.string.md))
:   Constante de Controle - Valores Incrementais de Diretório Ativo.
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_X_DOMAIN_SCOPE`** ([string](language.types.string.md))
:   Constante de Controle - Escopo de Domínio de Diretório Ativo.
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_X_PERMISSIVE_MODIFY`** ([string](language.types.string.md))
:   Constante de Controle - Modificação Permissiva de Diretório Ativo.
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_X_SEARCH_OPTIONS`** ([string](language.types.string.md))
:   Constante de Controle - Opções de Pesquisa de Diretório Ativo.
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_X_TREE_DELETE`** ([string](language.types.string.md))
:   Constante de Controle - Remoção de Árvore de Diretório Ativo.
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_X_EXTENDED_DN`** ([string](language.types.string.md))
:   Constante de Controle - DN Estendido de Diretório Ativo.
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_VLVREQUEST`** ([string](language.types.string.md))
:   Constante de Controle - Requisição de Visualização de Lista Virtual.
    Disponível a partir do PHP 7.3.0.

**`LDAP_CONTROL_VLVRESPONSE`** ([string](language.types.string.md))
:   Constante de Controle - Resposta de Visualização de Lista Virtual.
    Disponível a partir do PHP 7.3.0.

**`LDAP_ESCAPE_DN`** ([int](language.types.integer.md))
:   Escapa uma string para uso em um DN LDAP.

**`LDAP_ESCAPE_FILTER`** ([int](language.types.integer.md))
:   Escapa uma string para uso em um filtro LDAP.

**`LDAP_MODIFY_BATCH_ATTRIB`** ([string](language.types.string.md))
:   A chave do array de modificações contendo os atributos:
    `attrib`.

**`LDAP_MODIFY_BATCH_MODTYPE`** ([string](language.types.string.md))
:   A chave do array de modificações contendo o tipo de modificação:
    `modtype`.

**`LDAP_MODIFY_BATCH_VALUES`** ([string](language.types.string.md))
:   A chave do array de modificações contendo os valores:
    `values`.

**`LDAP_MODIFY_BATCH_ADD`** ([int](language.types.integer.md))
:   Adiciona valores a um atributo da entrada LDAP.

**`LDAP_MODIFY_BATCH_REMOVE`** ([int](language.types.integer.md))
:   Remove valores de um atributo de uma entrada LDAP.

**`LDAP_MODIFY_BATCH_REMOVE_ALL`** ([int](language.types.integer.md))
:   Remove todos os valores de um atributo de uma entrada LDAP.

**`LDAP_MODIFY_BATCH_REPLACE`** ([int](language.types.integer.md))
:   substitui todos os valores atuais de um atributo de uma entrada LDAP com os valores especificados.

**`LDAP_OPT_TIMEOUT`** ([int](language.types.integer.md))
:   Especifica um tempo limite (em segundos) após o qual as chamadas a APIs síncronas LDAP
    serão abortadas se nenhuma resposta for recebida.
    Também controla o tempo limite ao comunicar com o KDC em caso de ligação SASL.

**`LDAP_OPT_X_SASL_AUTHCID`** ([int](language.types.integer.md))
:   Retorna a identidade de autenticação SASL.

**`LDAP_OPT_X_SASL_AUTHZID`** ([int](language.types.integer.md))
:   Retorna a identidade de autorização SASL.

**`LDAP_OPT_X_SASL_MECH`** ([int](language.types.integer.md))
:   Retorna o mecanismo SASL.

**`LDAP_OPT_X_SASL_NOCANON`** ([int](language.types.integer.md))
:   Define/obtém a opção `NOCANON`.
    Quando indefinida, o nome do servidor é canonizado.

**`LDAP_OPT_X_SASL_REALM`** ([int](language.types.integer.md))
:   Retorna o domínio SASL.

**`LDAP_OPT_X_SASL_USERNAME`** ([int](language.types.integer.md))
:   Retorna o nome de usuário SASL.

**`LDAP_OPT_X_TLS_ALLOW`** ([int](language.types.integer.md))
:   Permite que o certificado do servidor seja opcional.
    Se nenhum certificado for fornecido, a sessão continuará normalmente.
    Se um certificado inválido for fornecido,
    ele será ignorado e a sessão continuará normalmente.

**`LDAP_OPT_X_TLS_DEMAND`** ([int](language.types.integer.md))
:   Demanda um certificado do servidor.
    Se nenhum certificado for fornecido, ou se o certificado for inválido,
    a sessão é encerrada imediatamente.

**`LDAP_OPT_X_TLS_HARD`** ([int](language.types.integer.md))
:   Sinônimo de **`LDAP_OPT_X_TLS_DEMAND`**.

**`LDAP_OPT_X_TLS_NEVER`** ([int](language.types.integer.md))
:   O certificado do servidor não é requerido ou não é verificado.

**`LDAP_OPT_X_TLS_TRY`** ([int](language.types.integer.md))
:   O certificado do servidor é tentativamente requerido.
    Se nenhum certificado for fornecido, a sessão continuará normalmente.
    Se o certificado fornecido for inválido, a sessão é encerrada imediatamente.

**`LDAP_OPT_X_TLS_CRL_ALL`** ([int](language.types.integer.md))
:   Pesquisa no CRL uma cadeia completa de certificados.

**`LDAP_OPT_X_TLS_CRL_NONE`** ([int](language.types.integer.md))
:   Nenhuma verificação de CRL é realizada.

**`LDAP_OPT_X_TLS_CRL_PEER`** ([int](language.types.integer.md))
:   Verifica o CRL do certificado do servidor.

**`LDAP_OPT_X_TLS_PACKAGE`** ([int](language.types.integer.md))
:   Retorna o nome da implementação TLS subjacente.

**`LDAP_OPT_X_TLS_PROTOCOL_SSL2`** ([int](language.types.integer.md))
:   O protocolo SSL 2.0.

**`LDAP_OPT_X_TLS_PROTOCOL_SSL3`** ([int](language.types.integer.md))
:   O protocolo SSL 3.0.

**`LDAP_OPT_X_TLS_PROTOCOL_TLS1_0`** ([int](language.types.integer.md))
:   O protocolo TLS 1.0.

**`LDAP_OPT_X_TLS_PROTOCOL_TLS1_1`** ([int](language.types.integer.md))
:   O protocolo TLS 1.1.

**`LDAP_OPT_X_TLS_PROTOCOL_TLS1_2`** ([int](language.types.integer.md))
:   O protocolo TLS 1.2.

**`LDAP_OPT_X_TLS_PROTOCOL_TLS1_3`** ([int](language.types.integer.md))
:   O protocolo TLS 1.3.
    Disponível a partir do PHP 8.4.0.

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
