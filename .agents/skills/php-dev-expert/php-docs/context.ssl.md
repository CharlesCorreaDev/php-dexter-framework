# Lista de opções de contexto de SSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/context.ssl.php

---

# Opções de contexto de SSL

Opções de contexto de SSL — Lista de opções de contexto de SSL

### Descrição

Opções de contexto dos transportadores `ssl://` e
`tls://`.

### Opções

`peer_name` [string](language.types.string.md)
:   Nome do peer a ser utilizado. Se este valor não for definido, o nome será adivinhado
    com base no nome do servidor utilizado na abertura do fluxo.

`verify_peer` [bool](language.types.boolean.md)
:   Exige a verificação do certificado SSL utilizado.

    **`true`** como padrão.

`verify_peer_name` [bool](language.types.boolean.md)
:   Exige a verificação do nome do peer.

    **`true`** como padrão.

`allow_self_signed` [bool](language.types.boolean.md)
:   Permite certificados auto assinados. Precisa do parâmetro
    [`verify_peer`](context.ssl.md#context.ssl.verify-peer).

    **`false`** como padrão.

`cafile` [string](language.types.string.md)
:   Localização do arquivo de Autoridade Certificadora no sistema de arquivos
    que deve ser usado pela opção de contexto `verify_peer`
    para autenticar a identidade do peer remoto.

`capath` [string](language.types.string.md)
:   Se a opção `cafile` não for especificada, ou o certificado
    não for encontrado, o diretório apontado pela opção `capath`
    será utilizado na busca de um certificado adequado. A opção `capath`
    deve ser um diretório de certificado com hash correto.

`local_cert` [string](language.types.string.md)
:   Caminho para o certificado local no sistema de arquivos. Deve ser um
    arquivo PEM codificado que contém seu certificado e chave privada.
    Pode opcionalmente conter a cadeia de certificados dos emitentes.
    A chave privada também pode estar em um arquivo separado especificado
    pela opção `local_pk`.

`local_pk` [string](language.types.string.md)
:   Caminho para a chave privada local no sistema de arquivos, em caso de se usar
    arquivos separados para o certificado (`local_cert`) e para a chave privada.

`passphrase` [string](language.types.string.md)
:   Senha usada para codificar o arquivo
    `local_cert`

`verify_depth` [int](language.types.integer.md)
:   Abortará se a cadeia de certificados for muito profunda.

    Não verificar por padrão.

`ciphers` [string](language.types.string.md)
:   Define a lista de cifras disponíveis. O formato desta string é descrito
    em [» ciphers(1)](https://docs.openssl.org/master/man1/openssl-ciphers/).

    `DEFAULT` como padrão.

`capture_peer_cert` [bool](language.types.boolean.md)
:   Se definida como **`true`**, a opção de contexto `peer_certificate`
    será criada contendo o certificado peer.

`capture_peer_cert_chain` [bool](language.types.boolean.md)
:   Se definida como **`true`**, a opção de contexto `peer_certificate_chain`
    será criada contendo a cadeia de certificados.

`SNI_enabled` [bool](language.types.boolean.md)
:   Se definida como **`true`**, o indicador do nome do servidor será habilitado. Habilitar a SNI
    permite múltiplos certificados no mesmo endereço IP.

`disable_compression` [bool](language.types.boolean.md)
:   Se definida, desabilita a compressão TLS. Pode ajudar a mitigar o vetor de
    ataque CRIME.

`peer_fingerprint` [string](language.types.string.md) | [array](language.types.array.md)
:   Abortará quando o certificado resumido remoto não corresponder a um hash
    especificado.

    Quando uma [string](language.types.string.md) for utilizada, o tamanho determinará qual algoritmo de hash será
    aplicado, "md5" (32) ou "sha1" (40).

    Quando um [array](language.types.array.md) for utilizado, as chaves indicarão o nome do hash
    e os valores correspondentes ao resumo esperado.

`security_level` [int](language.types.integer.md)
:   Define o nível de segurança. Se não especificado, o padrão da biblioteca é usado.
    Os níveis de segurança são descritos em
    [» SSL\_CTX\_get\_security\_level(3)](https://docs.openssl.org/master/man3/SSL_CTX_set_security_level/).

    Disponível a partir do PHP 7.2.0 e OpenSSL 1.1.0.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | Adicionado o parâmetro `security_level`. Requer OpenSSL >= 1.1.0. |

### Notas

> **Nota**:
>
> Por `ssl://` ser um transporte básico para os empacotadores
> [`https://`](wrappers.http.md) e
> [`ftps://`](wrappers.ftp.md),
> quaisquer opções de contexto aplicáveis a `ssl://`, também se aplicam a
> `https://` e `ftps://`.

> **Nota**:
>
> Para SNI (Server Name Indication - Indicador de Nome de Servidor) estar disponível, o PHP deve ser compilado
> com o OpenSSL 0.9.8j ou superior. Utilize a constante
> **`OPENSSL_TLSEXT_SERVER_NAME`** para determinar o suporte ao
> SNI.

### Veja também

- [Opções de contexto de Socket](context.socket.md)

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
