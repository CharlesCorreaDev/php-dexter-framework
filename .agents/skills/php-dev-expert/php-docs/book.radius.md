# Radius

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.radius.php

---

# Radius

# Introdução

Este pacote é baseado no libradius (Remote Authentication Dial In User
Service) do FreeBSD. Ele permite que clientes realizem autenticação
e contabilidade por meio de solicitações de rede a servidores remotos.

Esta extensão PECL adiciona suporte completo para Autenticação Radius
([» RFC 2865](https://datatracker.ietf.org/doc/html/rfc2865)) e Contabilidade Radius
([» RFC 2866](https://datatracker.ietf.org/doc/html/rfc2866)). Este pacote está disponível
para Unix (testado em FreeBSD e Linux) e para Windows.

> **Nota**:
>
> Uma descrição exata do libradius pode ser encontrada
> [» aqui](https://www.freebsd.org/cgi/man.cgi?query=libradius). Uma descrição detalhada do
> arquivo de configuração pode ser encontrada [» aqui](https://www.freebsd.org/cgi/man.cgi?query=radius.conf).

- [Instalação/Configuração](radius.setup.md)
  - [Instalação](radius.installation.md)
- [Constantes predefinidas](radius.constants.md)
  - [RADIUS Options](radius.constants.options.md)
  - [Tipos de pacotes RADIUS](radius.constants.packets.md)
  - [Tipos de atributos RADIUS](radius.constants.attributes.md)
  - [Tipos de atributos RADIUS específicos do fornecedor](radius.constants.vendor-specific.md)
- [Examples](radius.examples.md)
- [Funções de Radius](ref.radius.md)
  - [radius\_acct\_open](function.radius-acct-open.md) — Cria um identificador Radius para contabilidade
  - [radius\_add\_server](function.radius-add-server.md) — Adiciona um servidor
  - [radius\_auth\_open](function.radius-auth-open.md) — Cria um identificador Radius para autenticação
  - [radius\_close](function.radius-close.md) — Libera todos os recursos
  - [radius\_config](function.radius-config.md) — Faz com que a biblioteca leia o arquivo de configuração fornecido
  - [radius\_create\_request](function.radius-create-request.md) — Cria solicitação de contabilidade ou de autenticação
  - [radius\_cvt\_addr](function.radius-cvt-addr.md) — Converte dados brutos em endereço IP
  - [radius\_cvt\_int](function.radius-cvt-int.md) — Converte dados brutos em número inteiro
  - [radius\_cvt\_string](function.radius-cvt-string.md) — Converte dados brutos em string
  - [radius\_demangle](function.radius-demangle.md) — Descriptografa dados
  - [radius\_demangle\_mppe\_key](function.radius-demangle-mppe-key.md) — Deriva chaves mppe de dados criptografados
  - [radius\_get\_attr](function.radius-get-attr.md) — Extrai um atributo
  - [radius\_get\_tagged\_attr\_data](function.radius-get-tagged-attr-data.md) — Extrai os dados de um atributo marcado
  - [radius\_get\_tagged\_attr\_tag](function.radius-get-tagged-attr-tag.md) — Extrai a marcação de um atributo marcado
  - [radius\_get\_vendor\_attr](function.radius-get-vendor-attr.md) — Extrai um atributo específico de fornecedor
  - [radius\_put\_addr](function.radius-put-addr.md) — Anexa um atributo de endereço IP
  - [radius\_put\_attr](function.radius-put-attr.md) — Anexa um atributo binário
  - [radius\_put\_int](function.radius-put-int.md) — Anexa um atributo de número inteiro
  - [radius\_put\_string](function.radius-put-string.md) — Anexa um atributo de string
  - [radius\_put\_vendor\_addr](function.radius-put-vendor-addr.md) — Anexa um atributo de endereço IP específico de fornecedor
  - [radius\_put\_vendor\_attr](function.radius-put-vendor-attr.md) — Anexa um atributo binário específico de fornecedor
  - [radius\_put\_vendor\_int](function.radius-put-vendor-int.md) — Anexa um atributo de número inteiro específico de fornecedor
  - [radius\_put\_vendor\_string](function.radius-put-vendor-string.md) — Anexa um atributo de string específico de fornecedor
  - [radius\_request\_authenticator](function.radius-request-authenticator.md) — Retorna o autenticador de solicitação
  - [radius\_salt\_encrypt\_attr](function.radius-salt-encrypt-attr.md) — Criptografa um valor com salt
  - [radius\_send\_request](function.radius-send-request.md) — Envia a solicitação e aguarda uma resposta
  - [radius\_server\_secret](function.radius-server-secret.md) — Retorna o segredo compartilhado
  - [radius\_strerror](function.radius-strerror.md) — Retorna uma mensagem de erro

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
