# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ssh2.requirements.php

---

## Dependências

As bibliotecas
[» OpenSSL](https://www.openssl.org/) e
[» libssh2](https://libssh2.org/)
são necessárias. Certifique-se de que as bibliotecas de desenvolvimento estejam instaladas,
onde um nome de pacote típico pode ser `openssl-dev`.

A versão 1.2 ou mais recente da biblioteca libssh2 é necessária, embora
seja possível que versões mais recentes do pecl/ssh2 possam exigir versões
mais recentes (consulte as notas de versão).

A função [ssh2\_auth\_agent()](function.ssh2-auth-agent.md) só estará disponível
com libssh >= 1.2.3.

O suporte para [stream\_set\_timeout()](function.stream-set-timeout.md) para canalizar fluxos
estará disponível somente com libssh >= 1.2.9.

O Libssh2 vem em duas opções: gcrypt ou openssl. Algumas distribuições Linux
compilam o libssh2 com a biblioteca gcrypt, algumas usam openssl.
O Libssh2 tem alguns problemas quando compilado com gcrypt, use openssl.

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
