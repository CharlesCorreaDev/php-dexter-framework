# Visão Geral das novas funcionalidades do Servidor HTTP Apache 2.0 - Servidor HTTP Apache Versão 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/new_features_2_0.html

---

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Servidor HTTP Apache Versão 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [Servidor HTTP](https://httpd.apache.org/) > [Documentação](https://httpd.apache.org/docs/) > [Versão 2.4](index.md)

# Visão Geral das novas funcionalidades do Servidor HTTP Apache 2.0

Esse documento descreve algumas das mudanças principais entre as
versões 1.3 e 2.0 do Servidor HTTP Apache.

- ![](./images/down.gif) [Principais Melhorias](#core)
- ![](./images/down.gif) [Melhorias nos Módulos](#module)

### Veja também

- [Atualizando da versão 1.3 para a 2.0](upgrading.md)

[![top](./images/up.gif)](#page-header)

## Principais Melhorias [¶](#core "Link permanente")

Threads Unix
:   Em sistemas Unix com suporte a threads POSIX, o Apache httpd agora
    pode funcionar em um modo híbrido multiprocessos e multithreads. Isto melhora
    a escalabilidade para muitos mas não para todas as configurações.

Novo Sistema de Compilação
:   O sistema de compilação foi reescrito do zero para utilizar o
    `autoconf` e o `libtool`, tornando o
    sistema de configuração do Apache httpd mais similar a
    de outros pacotes.

Suporte Multi-protocolo
:   O Servidor HTTP Apache possui agora infraestrutura para
    suportar múltiplos protocolos. O módulo `mod_echo` é
    exemplo ilustrativo de sua utilização.

Suporte aperfeiçoado para plataformas não-Unix
:   O Servidor HTTP Apache 2.0 é mais rápido e mas estável em plataformas
    não-Unix como BeOS, OS/2 e Windows. Com a
    introdução de [módulos de multi-processamento](mpm.md) específicos por plataforma (MPMs) e o
    Apache Portable Runtime (APR), essas plataformas agora estão
    implementadas em suas API nativas, evitando as camadas de emulação POSIX que muitas vezes se
    defeituosas e com baixo desempenho.

Nova API httpd Apache
:   A API para módulos mudou significativamente na versão 2.0.
    Muitos dos problemas de ordenação/prioridade de módulos da versão
    1.3 foram resolvidos. A 2.0 faz muito disso automaticamente e a ordenação de módulos
    agora é feita através de ganchos para permitir mais flexibilidade. Além disso, novas chamadas
    foram adicionadas para fornecer capacidades adicionais de módulos
    sem a necessidade de se aplicar patches ao núcleo do Servidor HTTP Apache.

Suporte IPv6
:   Em sistemas onde o IPv6 é suportado pela biblioteca subjacente
    do Apache Portable Runtime, o httpd Apache monitora sockets
    IPv6 por padrão. Adicionalmente, as diretivas `Listen`, `NameVirtualHost` e `VirtualHost` suportam strings de
    endereço numérico IPv6 (ex.: "`Listen
    [2001:db8::1]:8080`").

Filtros
:   Os módulos do Apache agora podem ser escritos como filtros que atuam
    no fluxo de conteúdo à medida que este é entregue ou recebido do
    do servidor. Isto permite, por exemplo, que a saída de scripts CGI seja
    analisada para encontrar diretivas "Server Side Include" usando o
    filtro `INCLUDES` de `mod_include`. O
    módulo `mod_ext_filter` permite que programas externos
    atuem como filtros do mesmo modo que aplicações CGI podem atuar como
    manipuladores.

Respostas de Erro Multi-linguais
:   Mensagens de respostas de erro para o navegador agora são fornecidas em
    diversas línguas, usando documentos SSI. Podem ser personalizadas
    pelo administrador para atingir uma aparência consistente.

Configuração Simplificada
:   Muitas diretivas confusas foram simplificadas. Entre elas,
    `Port` e `BindAddress` não existem
    mais; apenas a diretiva `Listen`
    é usada para vinculação de endereço IP; a diretiva `ServerName` especifica o
    nome do servidor e o número da porta apenas para redirecionamento e reconhecimento
    de hosts virtuais.

Suporte Nativo ao Unicode do Windows NT
:   O Apache httpd 2.0 para Windows NT agora usa UTF-8 para codificação
    de todos os nomes de arquivos que são traduzidos diretamente para o sistemas de Arquivos
    Unicode subjacente, fornecendo suporte multi-lingual para todas
    as versões Windows da família NT, incluindo Windows 2000 e Windows XP.
    *Este suporte não se estende ao Windows 95, 98 ou ME, que
    continuam usando o código de página local da máquina para
    acesso ao sistema de arquivos.*

Biblioteca de Expressões Regulares Atualizada
:   O Apache httpd 2.0 inclui a [Biblioteca
    de Expressões Regulares Compatível com Perl](http://www.pcre.org/) (PCRE). Todas as
    análises de expressões regulares agoram usam a sintaxe mais poderosa
    do Perl 5.

[![top](./images/up.gif)](#page-header)

## Melhorias nos Módulos [¶](#module "Link permanente")

`mod_ssl`
:   Novo módulo no Apache httpd 2.0. Este módulo é uma interface
    para os protocolos de codificação SSL/TLS fornecidos pelo
    OpenSSL.

`mod_dav`
:   Novo módulo no Apache httpd 2.0. Este módulo implementa as
    especificações de Autoria e Versionamento Distribuídas (DAV) para
    para publicação e manutenção de conteúdo web.

`mod_deflate`
:   Novo módulo no Apache httpd 2.0. Este módulo permite suporte
    a navegadores que solicitam que o conteúdo seja comprimido antes da entrega,
    economizando tráfego de rede.

`mod_auth_ldap`
:   Novo módulo no Apache httpd 2.0.41. Este módulo permite que
    um banco de dados LDAP seja usados para armazenar credenciais para Autenticação
    Básica Básica HTTP. Um módulo que o acompanha, `mod_ldap`,
    fornece o gerenciamento de grupos de conexões e armazenamento de resultados em cache.

`mod_auth_digest`
:   Inclui suporte adicional para armazenamento de sessões em cache
    através de processos que usam memória compartilhada.

`mod_charset_lite`
:   Novo módulo no Apache httpd 2.0. Este módulo experimental permite
    tradução ou recodificação de conjuntos de caracteres.

`mod_file_cache`
:   Novo módulo no Apache httpd 2.0. Esse módulo inclui a
    funcionalidade do `mod_mmap_static` do Servidor HTTP
    Apache versão 1.3 e disponibiliza outras habilidades de armazenamento em cache.

`mod_headers`
:   Este módulo é muito mais flexível no Apache httpd 2.0. Ele pode agora
    modificar cabeçalhos de requisição usados pelo `mod_proxy` e
    pode ajustar cabeçalhos de resposta sob certas condições.

`mod_proxy`
:   O módulo de proxy foi totalmente reescrito para tomar
    vantagem da nova infraestrutura de filtros e para implementar um
    proxy mais confiável e compatível com o padrão HTTP/1.1. Além disso, novas
    seções de configuração `<Proxy>`
    fornecem controles mais legíveis (e internamente
    mais rápidos) de sites com proxies; configurações
    sobrecarregadas `<Directory "proxy:...">` não são suportadas.
    O módulo agora é dividido módulos de suporte a protocolos específicos
    incluindo `proxy_connect`, `proxy_ftp` e
    `proxy_http`.

`mod_negotiation`
:   A nova diretiva `ForceLanguagePriority` pode ser usada para assegurar que
    o cliente receba um único documento em todos os casos, em vez de
    respostas como "NOT ACCEPTABLE" ou "MULTIPLE CHOICES". Adicionalmente, os algoritmos
    de negociação e visualizações múltiplas foram organizados para
    fornecer resultados mais consistentes e foi disponibilizado uma nova forma de
    mapa de tipo que pode incluir conteúdo de documentos.

`mod_autoindex`
:   As listagens de diretórios autoindexadas agora podem ser configuradas
    para usar tabelas HTML para formatações mais limpas e permitir controles
    mais finos de ordenação, incluindo ordenação por versão e filtragem da listagem de
    diretórios através de caracteres-coringa.

`mod_include`
:   Novas diretivas permitem que as tags padrões de início e fim para elementos
    SSI possam ser alteradas e permitem que a configuração de formato de erro e horário
    ocorra no arquivo de configuração principal em vez de ocorrerem
    no documento SSI. Resultados de análises de expressões regulares e agrupamento
    (agora baseadas na sintaxe de expressões regulares do Perl) podem ser obtidas
    usando as variáveis do módulo `mod_include`: `$0`
    .. `$9`.

`mod_auth_dbm`
:   Agora suporta múltiplos tipos de banco de dados similares ao DBM usando a
    diretiva `AuthDBMType`.

Línguas Disponíveis: [de](https://httpd.apache.org/docs/2.4/pt-br/de/new_features_2_0.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/new_features_2_0.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/new_features_2_0.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/new_features_2_0.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/new_features_2_0.html "Korean") |
[pt-br](pt-br__new_features_2_0.md "Português (Brasil)") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/new_features_2_0.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
