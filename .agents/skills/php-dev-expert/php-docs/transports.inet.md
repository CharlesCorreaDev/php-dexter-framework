# Domínios da Internet: TCP, UDP, SSL, e TLS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/transports.inet.php

---

## Domínios da Internet: TCP, UDP, SSL, e TLS

`ssl://`, `tls://`,
`sslv2://` & `sslv3://`.

> **Nota**:
>
> Os transportes `sslv2://` e `sslv3://`
> são obsoletos e não devem ser usados. Eles estão documentados apenas
> para compatibilidade com versões anteriores.

> **Nota**:
>
> Se nenhum transporte for especificado, `tcp://` será usado.

- `127.0.0.1`
- `fe80::1`
- `www.example.com`
- `tcp://127.0.0.1`
- `tcp://fe80::1`
- `tcp://www.example.com`
- `udp://www.example.com`
- `ssl://www.example.com`
- `tls://www.example.com`

Soquetes nos Domínios da Internet esperam um número de porta além
do endereço desejado. No caso de [fsockopen()](function.fsockopen.md),
esta é especificada no segundo parâmetro e, portanto, não
afeta a formatação da URL. Com
[stream\_socket\_client()](function.stream-socket-client.md) e funções relacionadas
como com as URLs tradicionais, no entanto, o número da porta é especificado
como um sufixo na URL delimitada precedida por dois pontos.

- `tcp://127.0.0.1:80`
- `tcp://[fe80::1]:80`
- `tcp://www.example.com:80`

> **Nota**:
> **Endereços numéricos com número de porta em IPv6**  
>
> No segundo exemplo acima, enquanto os exemplos em IPv4 e
> nome de host permaneceram iguais, exceto pela adição do
> dois pontos e número da porta, o endereço em IPv6 é envolto em
> colchetes: `[fe80::1]`. Isso é para
> distinguir entre os dois pontos de um endereço IPv6
> e como separador de porta no IPv4.

Os transportes `ssl://` e `tls://`
(disponíveis apenas quando o suporte a openssl é compilado no PHP) são extensões
do transporte `tcp://` que incluem encriptação SSL.

`ssl://` tentará negociar uma conexão SSL/TLS segura
dependendo das capacidades e preferências do
host remoto e do cliente. Os protocolos reais que podem ser usados são
determinados pela configuração OpenSSL e pelas opções fornecidas
através da função [stream\_context\_create()](function.stream-context-create.md), tal como
`ssl.crypto_method`.

Os protocolos SSLv2 e SSLv3 são obsoletos e inseguros. O uso deles é
fortemente desencorajado e eles não estão mais habilitados por padrão nas
versões modernas do PHP e do OpenSSL.

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
