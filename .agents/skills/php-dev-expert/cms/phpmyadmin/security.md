# Política de segurança — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/security.html

---

# Política de segurança[¶](#security-policy "Link permanente para este título")

A equipe de desenvolvedores do phpMyAdmin está tendo muito esforço em tornar o phpMyAdmin o mais seguro possível. Mas, ainda assim, uma aplicação web como o phpMyAdmin pode ser vulnerável a uma série de ataques e novas formas de abuso ainda estão sendo exploradas.

For every reported vulnerability we issue a phpMyAdmin Security Announcement
(PMASA) and it get’s assigned a CVE ID as well. We might group similar
vulnerabilities to one PMASA (eg. multiple XSS vulnerabilities can be announced
under one PMASA).

Se você acha que encontrou uma vulnerabilidade, consulte [Relatando problemas de segurança](#reporting-security).

## Vulnerabilidades típicas[¶](#typical-vulnerabilities "Link permanente para este título")

In this section, we will describe typical vulnerabilities, which can appear in
our code base. This list is by no means complete, it is intended to show
typical attack surface.

### Cross-site scripting (XSS)[¶](#cross-site-scripting-xss "Link permanente para este título")

Quando o phpMyAdmin mostra dados do usuário, por exemplo algo dentro do banco de dados de um usuário, todos os caracteres especiais html devem ser escapados. Quando este escape falta em algum lugar, um usuário mal-intencionado pode preencher um banco de dados com conteúdo especialmente criado para enganar outro usuário desse banco de dados, levando-o a executar algo. Isso poderia, por exemplo, ser um código JavaScript que faria um número qualquer de coisas desagradáveis.

O phpMyAdmin tenta escapar todos os dados de usuário antes de serem processados em html para o navegador.

Ver também

[Cross-site scripting no Wikipédia](https://pt.wikipedia.org/wiki/Cross-site_scripting)

### Cross-site request forgery (CSRF)[¶](#cross-site-request-forgery-csrf "Link permanente para este título")

Um invasor poderia enganar um usuário do phpMyAdmin, fazendo-o clicar em um link para provocar alguma ação no phpMyAdmin. Este link poderia ser enviado por e-mail ou algum site aleatório. Se for bem sucedido, o invasor poderia realizar alguma ação com os privilégios dos usuários.

Para mitigar isso, o phpMyAdmin exige que um token seja enviado em solicitações sensíveis. A idéia é que um invasor não possui o token atualmente válido para incluir no link apresentado.

O token é gerado novamente para cada login, portanto, geralmente é válido apenas por tempo limitado, o que torna mais difícil para o invasor obter um token válido.

Ver também

[Cross-site request forgery no Wikipédia](https://pt.wikipedia.org/wiki/Cross-site_request_forgery)

### Injeção SQL[¶](#sql-injection "Link permanente para este título")

Como todo o propósito do phpMyAdmin é realizar consultas sql, esta não é a nossa preocupação principal. A injeção de SQL é sensível para nós, no entanto, quando se trata da conexão de controle do mysql. Esta conexão de controle pode ter privilégios adicionais que o usuário conectado não possui. Por exemplo, acesso ao [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables).

User data that is included in (administrative) queries should always be run
through DatabaseInterface::quoteString().

Ver também

[Injeção de SQL no Wikipédia](https://pt.wikipedia.org/wiki/Inje%C3%A7%C3%A3o_de_SQL)

### Ataque de força bruta[¶](#brute-force-attack "Link permanente para este título")

O phpMyAdmin por si só não limita as tentativas de autenticação de nenhuma forma. Isso é causado pela necessidade de se trabalhar em um ambiente sem estado, onde não há como proteger contra tais tipos de coisas.

Para mitigar isso, você pode usar Captcha ou utilizar ferramentas externas, como o fail2ban, isso é descrito com mais detalhes em [Protegendo sua instalação do phpMyAdmin](setup.md#securing).

Ver também

[Ataque de força bruta no Wikipédia](https://pt.wikipedia.org/wiki/Ataque_de_for%C3%A7a_bruta)

## Relatando problemas de segurança[¶](#reporting-security-issues "Link permanente para este título")

Se você encontrar um problema de segurança no código de programação do phpMyAdmin, entre em contato com a [equipe de segurança do phpMyAdmin](mailto:security%40phpmyadmin.net) antes de publicá-lo. Desta forma, podemos preparar uma correção e liberá-la junto com seu anúncio. Você também receberá o crédito em nosso anúncio de segurança. Você pode, opcionalmente, criptografar seu relatório com a chave PGP ID `DA68AB39218AB947` com a seguinte impressão digital:

```
pub   4096R/DA68AB39218AB947 2016-08-02
      Key fingerprint = 5BAD 38CF B980 50B9 4BD7  FB5B DA68 AB39 218A B947
uid                          phpMyAdmin Security Team <security@phpmyadmin.net>
sub   4096R/5E4176FB497A31F7 2016-08-02
```

A chave pode ser obtida do servidor de chaves ou está disponível no [chaveiro phpMyAdmin](https://files.phpmyadmin.net/phpmyadmin.keyring) disponível no nosso servidor de download ou usando [Keybase](https://keybase.io/phpmyadmin_sec).

Se você tiver sugestões sobre como melhorar o phpMyAdmin para torná-lo mais seguro, informe no nosso [rastreador de problemas](https://github.com/phpmyadmin/phpmyadmin/issues). As sugestões de melhoria existentes podem ser encontradas com o [rótulo hardening](https://github.com/phpmyadmin/phpmyadmin/labels/hardening).
