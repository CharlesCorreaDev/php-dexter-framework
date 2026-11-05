# Visão geral das novas funcionalidades do Servidor HTTP Apache 2.4 - Servidor HTTP Apache Versão 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/new_features_2_4.html

---

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Servidor HTTP Apache Versão 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [Servidor HTTP](https://httpd.apache.org/) > [Documentação](https://httpd.apache.org/docs/) > [Versão 2.4](index.md)

# Visão geral das novas funcionalidades do Servidor HTTP Apache 2.4

Este documento descreve algumas das principais mudanças entre as
versões 2.2 e 2.4 do servidor HTTP Apache. Para obter informações sobre os novos recursos
desde a versão 2.0, consulte o documento [Novos recursos
da versão 2.2](new_features_2_2.md).

- ![](./images/down.gif) [Melhorias no Núcleo](#core)
- ![](./images/down.gif) [Novos Módulos](#newmods)
- ![](./images/down.gif) [Melhorias em Módulos](#module)
- ![](./images/down.gif) [Melhorias em Programas](#programs)
- ![](./images/down.gif) [Documentação](#documentation)
- ![](./images/down.gif) [Mudanças no Desenvolvedor de Módulos](#developer)

[![top](./images/up.gif)](#page-header)

## Melhorias no Núcleo [¶](#core "Link permanente")

MPMs carregáveis no momento da execução
:   Múltiplos MPMs agora podem ser [compilados
    como módulos carregáveis](mpm.md#dynamic) no momento da compilação.
    O MPM escolhido pode ser configurado no momento da execução através da
    diretiva `LoadModule`.

MPM de Eventos
:   O [MPM de Eventos](mod__event.md) não é mais experimental
    e agora é totalmente suportado.

Suporte assíncrono
:   Melhoria no suporte para leitura/escrita assíncronas para suportar MPMs e
    plataformas.

Configuração de LogLevel por módulo e por diretório
:   A diretiva `LogLevel` agora pode ser
    configurada por módulo e por diretório. Os novos modos `trace1`
    a `trace8` foram adicionados acima do nível
    `debug`.

Seções de configuração por requisição
:   Seções `<If>`,
    `<ElseIf>`
    e `<Else>`
    podem ser usadas para definir a configuração baseada em critérios
    por requisição.

Analisador de expressão de propósito geral
:   Um novo analisador de expressão permite especificar
    [condições complexas](expr.md) usando uma sintaxe comum
    em diretivas como
    `SetEnvIfExpr`,
    `RewriteCond`,
    `Header`,
    `<If>`
    e outras.

KeepAliveTimeout em milissegundos
:   Agora é possível especificar `KeepAliveTimeout` em milissegundos.

Diretiva NameVirtualHost
:   Não é mais necessária e tornou-se obsoleta.

Configuração de Override
:   A nova diretiva `AllowOverrideList`
    permite controle mais fino de quais diretivas são
    permitidas em arquivos `.htaccess`.

Variáveis do arquivo de configuração
:   Agora é possível definir variáveis na configuração através da diretiva
    `Define`, permitindo uma representação
    mais clara se o mesmo valor for usado em vários lugares na configuração.

Uso reduzido de memória
:   Mesmo com várias novas funcionalidades, a versão 2.4.x tende a
    usar menos memória que a 2.2.x.

[![top](./images/up.gif)](#page-header)

## Novos Módulos [¶](#newmods "Link permanente")

`mod_proxy_fcgi`
:   Backend do protocolo FastCGI para `mod_proxy`.

`mod_proxy_scgi`
:   Backend do protocolo SCGI para `mod_proxy`.

`mod_proxy_express`
:   Fornece proxies reversos em massa configurados dinamicamente para
    `mod_proxy`.

`mod_remoteip`
:   Substitui o endereço IP remoto e o nome do host do cliente aparentes para a requisição,
    com a lista de endereços IP apresentada por um proxy ou um balanceador de carga por meio
    dos cabeçalhos da requisição.

`mod_heartmonitor`, `mod_lbmethod_heartbeat`
:   Permite que o módulo `mod_proxy_balancer` baseie suas decisões
    de balanceamento de carga no número de conexões ativas nos servidores de backend.

`mod_proxy_html`
:   Anteriormente um módulo de terceiros, este suporta a correção de links
    HTML em uma situação de proxy reverso, onde o backend gera URLs que não
    são válidos para os clientes do proxy.

`mod_sed`
:   Uma substituição avançada de `mod_substitute`, permite
    editar o corpo da resposta com todo o poder do sed.

`mod_auth_form`
:   Permite a autenticação baseada em formulário.

`mod_session`
:   Permite o uso do estado da sessão para clientes, usando cookies ou
    armazenamento em banco de dados.

`mod_allowmethods`
:   Novo módulo para restringir certos métodos HTTP sem interferir na
    autenticação ou autorização.

`mod_lua`
:   Incorpora a linguagem [Lua](http://www.lua.org/) no httpd,
    para configuração e funções de lógica de pequenos negócios (experimental).

`mod_log_debug`
:   Permite a adição de registros de depuração personalizáveis ​​em
    diferentes fases do processamento da requisição.

`mod_buffer`
:   Fornece recursos para o armazenamento em buffer das pilhas de filtros de entrada e saída.

`mod_data`
:   Converte o corpo da resposta em um URL de dados RFC2397.

`mod_ratelimit`
:   Oferece limitação de largura de banda para clientes.

`mod_request`
:   Fornece filtros para manipular e disponibilizar corpos de requisição HTTP.

`mod_reflector`
:   Fornece a reflexão do corpo de uma solicitação como resposta por meio da pilha de filtros de saída.

`mod_slotmem_shm`
:   Fornece um provedor de memória compartilhada baseado em slots.

`mod_xml2enc`
:   Anteriormente um módulo de terceiros, suporta a internacionalização
    em módulos de filtro baseados em libxml2 (com reconhecimento de marcação).

`mod_macro` (disponível desde a versão 2.4.5)
:   Fornece macros dentro dos arquivos de configuração.

`mod_proxy_wstunnel` (disponível desde a versão 2.4.5)
:   Suporta túneis web-socket.

`mod_authnz_fcgi` (disponível desde a versão 2.4.10)
:   Permite que aplicativos autorizadores FastCGI autentiquem e/ou
    autorizem clientes.

`mod_http2` (disponível desde a versão 2.4.17)
:   Suporte para a camada de transporte HTTP/2.

`mod_proxy_http2` (disponível desde a versão 2.4.19)
:   Backend do protocolo HTTP/2 para `mod_proxy`

`mod_proxy_hcheck` (disponível desde a versão 2.4.21)
:   Suporta verificações de integridade dinâmicas e independentes para servidores backend proxy remotos.

`mod_brotli` (disponível desde a versão 2.4.26)
:   Suporta o algoritmo de compressão Brotli.

`mod_md` (disponível desde a versão 2.4.30)
:   Suporta o protocolo ACME para automatizar o fornecimento de certificados.

`mod_proxy_uwsgi` (disponível desde a versão 2.4.30)
:   Módulo de gateway UWSGI para `mod_proxy`.

`mod_socache_redis` (disponível desde a versão 2.4.39)
:   Suporta provedor de cache de objetos compartilhados baseado em [Redis](http://redis.io/).

`mod_systemd` (disponível desde a versão 2.4.42)
:   Integração com systemd. Permite que o httpd seja usado em um serviço com o
    `Type=notify` do systemd.

[![top](./images/up.gif)](#page-header)

## Melhorias em Módulos [¶](#module "Link permanente")

`mod_ssl`
:   O módulo `mod_ssl` agora pode ser configurado para usar um
    servidor OCSP para verificar o status de validação de um certificado de cliente.
    O servidor de resposta padrão é configurável, assim como
    a decisão de priorizar o servidor de resposta designado no
    próprio certificado do cliente.
:   `mod_ssl` agora também suporta grampeamento OCSP, onde o
    servidor obtém proativamente uma verificação OCSP de seu certificado e
    a transmite ao cliente durante a comunicação inicial.
:   `mod_ssl` agora pode ser configurado para compartilhar dados de sessão SSL
    entre servidores através do memcached
:   Agora, além de RSA e DSA, também são suportadas chaves EC.
:   Suporte para TLS-SRP (disponível na versão 2.4.4 e posteriores).

`mod_proxy`
:   A diretiva `ProxyPass`
    agora é configurada de forma mais otimizada dentro de um bloco
    `Location` ou
    `LocationMatch`
    e oferece uma vantagem de desempenho significativa em relação à sintaxe tradicional de dois parâmetros
    quando presente em grande número.
:   O endereço de origem usado para solicitações de proxy agora é configurável.
:   Suporte para sockets de domínio Unix para o backend (disponível na versão 2.4.7
    e posteriores).

`mod_proxy_balancer`
:   Mais alterações de configuração em tempo de execução para BalancerMembers via balancer-manager.
:   BalancerMembers adicionais podem ser adicionados em tempo de execução através do balancer-manager.
:   Configuração em tempo de execução de um subconjunto de parâmetros do Balanceador.
:   Os membros do BalancerMembers podem ser configurados como 'Drain' para que respondam apenas a sessões
    persistentes existentes, permitindo que sejam desconectados corretamente.
:   As configurações do balanceador podem persistir após reinicializações.

`mod_cache`
:   O filtro CACHE do módulo `mod_cache` pode ser inserido opcionalmente
    em um determinado ponto da cadeia de filtros para fornecer um controle preciso sobre o cache.
:   O módulo `mod_cache` agora pode armazenar em cache as solicitações HEAD.
:   Sempre que possível, as diretivas `mod_cache` agora podem ser definidas
    por diretório, em vez de por servidor.
:   O URL base dos URLs em cache pode ser personalizado, de forma que um grupo de
    caches possa compartilhar o mesmo prefixo de URL de endpoint.
:   O módulo `mod_cache` agora é capaz de fornecer dados em cache desatualizados
    quando um backend estiver indisponível (erro 5xx).
:   `mod_cache` agora pode inserir HIT/MISS/REVALIDATE em
    um cabeçalho X-Cache.

`mod_include`
:   Suporte para o atributo 'onerror' dentro de um elemento 'include',
    permitindo que um documento de erro seja exibido em caso de erro, em vez da
    string de erro padrão.

`mod_cgi`, `mod_include`, `mod_isapi`, ...
:   A tradução de cabeçalhos para variáveis ​​de ambiente é mais rigorosa do que
    antes para mitigar possíveis ataques de "cross-site scripting" via injeção de cabeçalho.
    Nomes de cabeçalho contendo caracteres inválidos (incluindo sublinhados)
    não são mais convertidos em variáveis ​​de ambiente. A seção [Variáveis ​​de Ambiente
    no Apache](env.md) contém algumas dicas sobre como contornar problemas com clientes legados
    que exigem esses cabeçalhos. (Isso afeta todos os módulos que
    usam essas variáveis ​​de ambiente.)

Contêineres de Lógica de Autorização do `mod_authz_core`
:   Agora é possível especificar lógica de autorização avançada usando a
    diretiva `Require`
    e as diretivas de contêiner relacionadas, como
    `<RequireAll>`.

`mod_rewrite`
:   `mod_rewrite` adiciona as opções `[QSD]`
    (Query String Discard) e `[END]` para a diretiva
    `RewriteRule` para
    simplificar cenários comuns de reescrita.
:   Adiciona a possibilidade de usar expressões booleanas complexas em `RewriteCond`.
:   Permite o uso de consultas SQL como funções `RewriteMap`.

`mod_ldap`, `mod_authnz_ldap`
:   `mod_authnz_ldap` adiciona suporte para grupos aninhados.
:   `mod_ldap` adiciona as diretivas
    `LDAPConnectionPoolTTL`,
    `LDAPTimeout` e
    outras melhorias no gerenciamento de limites de tempo.
    Isso é especialmente útil para configurações onde um
    firewall com estados descarta conexões ociosas com o servidor LDAP.
:   `mod_ldap` adiciona a diretiva
    `LDAPLibraryDebug` para registrar
    informações de depuração fornecidas pelo kit de ferramentas LDAP utilizado.

`mod_info`
:   `mod_info` agora pode despejar a configuração pré-analisada
    para stdout durante a inicialização do servidor.

`mod_auth_basic`
:   Novo mecanismo genérico para falsificar autenticação básica (disponível em
    2.4.5 e versões posteriores).

[![top](./images/up.gif)](#page-header)

## Melhorias em Programas [¶](#programs "Link permanente")

`fcgistarter`
:   Novo utilitário inicializador de daemon FastCGI

`htcacheclean`
:   Agora é possível listar os URLs armazenados em cache, com metadados opcionais
    incluídos.
:   Permite excluir explicitamente, do cache, URLs individuais
    armazenadas.
:   Os tamanhos dos arquivos agora podem ser arredondados para o tamanho de bloco fornecido, fazendo com que
    os limites de tamanho correspondam mais de perto ao tamanho real no disco.
:   O tamanho do cache agora pode ser limitado pelo número de inodes, em vez de,
    ou além de, ser limitado pelo tamanho dos arquivos no
    disco.

`rotatelogs`
:   Agora é possível criar uma atalho para o arquivo de registro atual.
:   Agora é possível invocar um script pós-rotação personalizado.

`htpasswd`, `htdbm`
:   Suporte para o algoritmo bcrypt (disponível na versão 2.4.4 e posteriores).

[![top](./images/up.gif)](#page-header)

## Documentação [¶](#documentation "Link permanente")

mod\_rewrite
:   A documentação do `mod_rewrite` foi
    reorganizada e quase completamente reescrita, com foco em
    exemplos e uso comum, além de mostrar quando outras
    soluções são mais apropriadas. O [Guia de
    Reescrita](rewrite.md) agora é uma seção de nível superior com muito mais
    detalhes e melhor organização.

mod\_ssl
:   A documentação do `mod_ssl` foi bastante
    aprimorada, com mais exemplos para iniciantes,
    além do foco anterior em detalhes técnicos.

Guia de Cache
:   O [Guia de Cache](caching.md) foi reescrito
    para distinguir adequadamente entre os recursos de cache HTTP/1.1 da RFC2616
    fornecidos pelo `mod_cache` e o cache genérico
    de chave/valor fornecido pela interface [socache](socache.md)
    bem como para abranger o cache especializado fornecido por
    mecanismos como o `mod_file_cache`.

[![top](./images/up.gif)](#page-header)

## Mudanças no Desenvolvedor de Módulos [¶](#developer "Link permanente")

Adicionado o Gancho de Verificação de Configuração
:   Um novo gancho, `check_config`, foi adicionado e é executado
    entre os ganchos `pre_config` e `open_logs`.
    Ele também é executado antes do gancho `test_config`
    quando a opção `-t` é passada para o
    `httpd`. O gancho `check_config`
    permite que módulos revisem os valores de diretivas de configuração
    interdependentes e os ajustem enquanto as mensagens ainda possam ser registradas
    no console. Dessa forma, o usuário pode ser alertado sobre problemas de configuração incorreta
    antes que a função principal do gancho `open_logs` redirecione
    a saída do console para o log de erros.

Adicionado o Analisador de Expressões
:   Agora temos um analisador de expressões de propósito geral, cuja API é
    exposta em ap\_expr.h. Este é adaptado do
    analisador de expressões implementado anteriormente em
    `mod_ssl`.

Contêineres de Lógica de Autorização
:   Os módulos de autorização agora se registram como um provedor, por meio de
    ap\_register\_auth\_provider(), para oferecer suporte à lógica de autorização avançada,
    como `<RequireAll>`.

Interface de Cache de Objetos Pequenos
:   O cabeçalho ap\_socache.h expõe uma interface baseada em provedor
    para armazenamento em cache de pequenos objetos de dados, baseada na implementação anterior
    do cache de sessão do `mod_ssl`.
    Provedores que utilizam um buffer cíclico de memória compartilhada, arquivos dbm baseados
    em disco e um cache distribuído memcache são atualmente
    suportados.

Adicionado o Gancho de Status de Cache
:   O módulo `mod_cache` agora inclui um novo
    gancho `cache_status`, que é chamado quando a decisão de cache
    se torna conhecida. Uma implementação padrão fornecida
    adiciona à resposta um cabeçalho opcional `X-Cache` e
    `X-Cache-Detail`.

A documentação do desenvolvedor contém uma
[lista detalhada de alterações na API](developer__new_api_2_4.md).

Línguas Disponíveis: [en](https://httpd.apache.org/docs/2.4/pt-br/en/new_features_2_4.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/new_features_2_4.html "Français") |
[pt-br](pt-br__new_features_2_4.md "Português (Brasil)") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/new_features_2_4.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
