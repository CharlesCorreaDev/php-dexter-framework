# Mudanças do OpenSSL no PHP 5.6.x

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration56.openssl.php

---

## Mudanças do OpenSSL no PHP 5.6.x

### Empacotadores de fluxo agora verificam nomes e certificados de servidor por padrão ao usar SSL/TLS

Todos os fluxos criptografados de cliente agora permitem a verificação de mesmo nível por padrão. Por
padrão, será usada a coleção de CAs padrão do OpenSSL para verificar o certificado
de mesmo nível. Na maioria dos casos, nenhuma alteração precisará ser feita para se comunicar
com servidores com certificados SSL válidos, pois as distribuições geralmente
configuram o OpenSSL com coleções de CAs bem conhecidos.

A coleção de CAs padrão pode ser substituída globalmente definindo
a configuração openssl.cafile ou openssl.capath, ou
por requisição usando as opções de contexto
[`cafile`](context.ssl.md#context.ssl.cafile) ou
[`capath`](context.ssl.md#context.ssl.capath).

Embora em geral não seja recomendado, é possível desabilitar a verificação
de certificado de mesmo nível para uma requisição definindo a opção de contexto
[`verify_peer`](context.ssl.md#context.ssl.verify-peer)
para **`false`** e é possível desabilitar a verificação de nome de mesmo nível definindo a opção de contexto
[`verify_peer_name`](context.ssl.md#context.ssl.verify-peer-name)
para **`false`**.

### Impressões digitais de certificado

Foi adicionado suporte para extrari e verificar impressões digitais de
certificado. [openssl\_x509\_fingerprint()](function.openssl-x509-fingerprint.md) foi adicionada para
extrair uma impressão digital de um certificado X.509 certificate, e duas
opções de [contexto de fluxo SSL](context.ssl.md) foram
adicionadas: `capture_peer_cert` para capturar o certificado X.509
do servidor, e `peer_fingerprint` para certificar que o
certificado do servidor deve corresponder à impressão digital informada.

### Cifras padrões atualizadas

As cifras padrões usadas pelo PHP foram atualizadas para uma lista mais segura
com base nas
[» Recomendações de crifra Mozilla](https://wiki.mozilla.org/Security/Server_Side_TLS#Recommended_Ciphersuite),
com duas novas exclusões: cifras anônimas Diffie-Hellman, e RC4.

Esta lista pode ser acessada através da nova constante
**`OPENSSL_DEFAULT_STREAM_CIPHERS`**, e pode ser
substituída (como em versões anteriores do PHP) configurando-se as opções
de contexto
[`ciphers`](context.ssl.md#context.ssl.ciphers).

### Compressão desabilitada por padrão

Compressão SSL/TLS foi desabilitada por padrão para mitigar o ataque
CRIME. O PHP 5.4.13 adicionou uma opção de contexto
[`disable_compression`](context.ssl.md#context.ssl.disable-compression)
para permitir que a compressão seja desabilitada: ela agora está definida para
**`true`** (isto é, compressão desabilitada) por padrão.

### Permite que servidores definam sua própria ordem de cifras de preferência

A opção de contexto SSL `honor_cipher_order` foi adicionada
para permitir que servidores de fluxo criptografado mitiguem vulnerabilidades BEAST
definindo as cifras do servidor e não as do cliente.

### Acesso ao protocolo e à cifra negociados

O protocolo e a cifra que foram negociados para um fluxo criptografado
agora podem ser acessados por [stream\_get\_meta\_data()](function.stream-get-meta-data.md) ou
[stream\_context\_get\_options()](function.stream-context-get-options.md) quando a opção de contexto SSL
`capture_session_meta` for definida para
**`true`**.

```
<?php
$ctx = stream_context_create(['ssl' => [
    'capture_session_meta' => TRUE
]]);

$html = file_get_contents('https://google.com/', FALSE, $ctx);
$meta = stream_context_get_options($ctx)['ssl']['session_meta'];
var_dump($meta);
?>
```

O exemplo acima produzirá:

```
array(4) {
  ["protocol"]=>
  string(5) "TLSv1"
  ["cipher_name"]=>
  string(20) "ECDHE-RSA-AES128-SHA"
  ["cipher_bits"]=>
  int(128)
  ["cipher_version"]=>
  string(11) "TLSv1/SSLv3"
}
```

### Novas opções para sigilo de encaminhamento perfeito em servidores de fluxo criptografados

Os fluxos criptografados de clientes já suportam sigilo de encaminhamento perfeito,
pois geralmente são controlados pelo servidor. Fluxos criptografados de servidor no PHP usando
certificados capazes de sigilo de encaminhamento perfeito não precisam tomar nenhuma ação
adicional para habilitar o SEP; entretanto um número de opções de contexto SSL
foi adicionado para permitir maior controle sobre o SEP e lidar com
problemas de compatibilidade que possam aparecer.

`ecdh_curve`
:   Esta opção permite a seleção de uma curva específica para uso com cifras
    ECDH. Se não especificada, `prime256v1` será usada.

`dh_param`
:   Um caminho para um arquivo contendo parâmetros para a troca de chaves Diffie-Hellman,
    como as criadas pelo comando:

    ```
    openssl dhparam -out /caminho/para/meus/certificados/dh-2048.pem 2048
    ```

`single_dh_use`
:   Se definida para **`true`**, um novo par de chaves será criado usando parâmetros
    Diffie-Hellman, desta forma melhorando o sigilo de encaminhamento.

`single_ecdh_use`
:   Se definida para **`true`**, um novo par de chaves será sempre gerado quando conjuntos
    de cifras ECDH forem negociadas. Isto melhora o sigilo de encaminhamento.

### Seleção de versão SSL/TLS

Agora é possível selecionar versões específicas de SSL e TLS através da
opçõa de contexto `crypto_method` ou pela especificação de
um transporte específico ao criar um empacotador de fluxo (por exemplo, chamando-se
[stream\_socket\_client()](function.stream-socket-client.md) ou
[stream\_socket\_server()](function.stream-socket-server.md)).

A opção de contexto `crypto_method` aceita uma máscara de bits
enumerando os protocolos permitidos, da mesma forma que a opção
`crypto_type` da função
[stream\_socket\_enable\_crypto()](function.stream-socket-enable-crypto.md).

**Versões de protocolo selecionadas e opções correspondentes**

| Protocolo(s) | Opção do Cliente | Opção do Servidor | Transporte |
| --- | --- | --- | --- |
| Qualquer versão TLS ou SSL | **`STREAM_CRYPTO_METHOD_ANY_CLIENT`** | **`STREAM_CRYPTO_METHOD_ANY_SERVER`** | `ssl://` |
| Qualquer versão TLS | **`STREAM_CRYPTO_METHOD_TLS_CLIENT`** | **`STREAM_CRYPTO_METHOD_TLS_SERVER`** | `tls://` |
| TLS 1.0 | **`STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT`** | **`STREAM_CRYPTO_METHOD_TLSv1_0_SERVER`** | `tlsv1.0://` |
| TLS 1.1 | **`STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT`** | **`STREAM_CRYPTO_METHOD_TLSv1_1_SERVER`** | `tlsv1.1://` |
| TLS 1.2 | **`STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT`** | **`STREAM_CRYPTO_METHOD_TLSv1_2_SERVER`** | `tlsv1.2://` |
| SSL 3 | **`STREAM_CRYPTO_METHOD_SSLv3_CLIENT`** | **`STREAM_CRYPTO_METHOD_SSLv3_SERVER`** | `sslv3://` |

```
<?php

// Requisitando TLS 1.0 ou melhor ao usar file_get_contents():
$ctx = stream_context_create([
    'ssl' => [
        'crypto_method' => STREAM_CRYPTO_METHOD_TLS_CLIENT,
    ],
]);
$html = file_get_contents('https://google.com/', false, $ctx);

// Requisitando TLS 1.1 ou 1.2:
$ctx = stream_context_create([
    'ssl' => [
        'crypto_method' => STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT |
                           STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT,
    ],
]);
$html = file_get_contents('https://google.com/', false, $ctx);

// Conectando com uso de transporte de fluxo tlsv1.2://.
$sock = stream_socket_client('tlsv1.2://google.com:443/');

?>
```

### Adicionada a função [openssl\_get\_cert\_locations()](function.openssl-get-cert-locations.md)

A função [openssl\_get\_cert\_locations()](function.openssl-get-cert-locations.md) foi
adicionada: ela retorna as localizações padrões onde o PHP irá pesquisar
por pacotes de certificados CA.

```
<?php
var_dump(openssl_get_cert_locations());
?>
```

O exemplo acima produzirá:

```
array(8) {
  ["default_cert_file"]=>
  string(21) "/etc/pki/tls/cert.pem"
  ["default_cert_file_env"]=>
  string(13) "SSL_CERT_FILE"
  ["default_cert_dir"]=>
  string(18) "/etc/pki/tls/certs"
  ["default_cert_dir_env"]=>
  string(12) "SSL_CERT_DIR"
  ["default_private_dir"]=>
  string(20) "/etc/pki/tls/private"
  ["default_default_cert_area"]=>
  string(12) "/etc/pki/tls"
  ["ini_cafile"]=>
  string(0) ""
  ["ini_capath"]=>
  string(0) ""
}
```

### Suporte a SPKI

Foi adicionado suporte para geração, extração e verificação de chaves públicas assinadas
e desafios (SPKAC em inglês). [openssl\_spki\_new()](function.openssl-spki-new.md),
[openssl\_spki\_verify()](function.openssl-spki-verify.md),
[openssl\_spki\_export\_challenge()](function.openssl-spki-export-challenge.md) e
[openssl\_spki\_export()](function.openssl-spki-export.md) foram adicionadas para criar, verificar,
exportar chaves públicas PEM e desafio associado a partir de um
SPKAC gerado por um elemento `KeyGen` de HTML5.

`openssl_spki_new`
:   Gera uma novo SPKAC usando chave privada, string de desafio e
    algoritmo de hash.

    ```
    <?php
    $pkey = openssl_pkey_new();
    openssl_pkey_export($pkey, 'secret passphrase');

    $spkac = openssl_spki_new($pkey, 'challenge string');
    ?>
    ```

    O exemplo acima produzirá:

    ```
    SPKAC=MIIBXjCByDCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEA3L0IfUijj7+A8CPC8EmhcdNoe5fUAog7OrBdhn7EkxFButUp40P7+LiYiygYG1TmoI/a5EgsLU3s9twEz3hmgY9mYIqb/rb+SF8qlD/K6KVyUORC7Wlz1Df4L8O3DuRGzx6/+3jIW6cPBpfgH1sVuYS1vDBsP/gMMIxwTsKJ4P0CAwEAARYkYjViMzYxMTktNjY5YS00ZDljLWEyYzctMGZjNGFhMjVlMmE2MA0GCSqGSIb3DQEBAwUAA4GBAF7hu0ifzmjonhAak2FhhBRsKFDzXdKIkrWxVNe8e0bZzMrWOxFM/rqBgeH3/gtOUDRS5Fnzyq425UsTYbjfiKzxGeCYCQJb1KJ2V5Ij/mIJHZr53WYEXHQTNMGR8RPm7IxwVXVSHIgAfXsXZ9IXNbFbcaLRiSTr9/N4U+MXUWL7
    ```

`openssl_spki_verify`
:   Verifica o SPKAC informado.

    ```
    <?php
    $pkey = openssl_pkey_new();
    openssl_pkey_export($pkey, 'secret passphrase');

    $spkac = openssl_spki_new($pkey, 'challenge string');
    var_dump(openssl_spki_verify($spkac));
    ?>
    ```

`openssl_spki_export_challenge`
:   Exporta o desafio associado a partir do SPKAC fornecido.

    ```
    <?php
    $pkey = openssl_pkey_new();
    openssl_pkey_export($pkey, 'secret passphrase');

    $spkac = openssl_spki_new($pkey, 'challenge string');
    $challenge = openssl_spki_export_challenge($spkac);
    echo $challenge;
    ?>
    ```

    O exemplo acima produzirá:

    ```
    challenge string
    ```

`openssl_spki_export`
:   Exporta chave pública RSA em formato PEM, a partir do SPKAC.

    ```
    <?php
    $pkey = openssl_pkey_new();
    openssl_pkey_export($pkey, 'secret passphrase');

    $spkac = openssl_spki_new($pkey, 'challenge string');
    echo openssl_spki_export($spkac);
    ?>
    ```

    O exemplo acima produzirá:

    ```
    -----BEGIN PUBLIC KEY-----
    MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDcvQh9SKOPv4DwI8LwSaFx02h7
    l9QCiDs6sF2GfsSTEUG61SnjQ/v4uJiLKBgbVOagj9rkSCwtTez23ATPeGaBj2Zg
    ipv+tv5IXyqUP8ropXJQ5ELtbXPUN/gvw7cO5EbPHr/7eMhbpw8Gl+AfWxW5hLW8
    MGw/+AwwjHBOwong/QIDAQAB
    -----END PUBLIC KEY-----
    ```

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
