# Descrição das novas funcionalidades do Apache 2.0 - Servidor HTTP Apache Versão 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/pt-br/new_features_2_0.html

---

[Módulos](mod.md) | [Diretrizes](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do site](sitemap.md)

Servidor HTTP Apache Versão 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [Servidor HTTP](http://httpd.apache.org/) > [Documentação](http://httpd.apache.org/docs/) > [Versão 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/new_features_2_0.html) to go to the current version of this document.

# Descrição das novas funcionalidades do Apache 2.0

Esta tradução pode estar desatualizada.
Verifique a versão em Inglês para mudanças recentes.

Esse documento descreve algumas das mudanças principais
entre as versões 1.3 e 2.0 do Servidor HTTP Apache.

- ![](./images/down.gif) [Principais Melhorias](#core)
- ![](./images/down.gif) [Melhorias nos Módulos](#module)

### Veja também

- [Atualizando da versão 1.3 para 2.0](upgrading.md)

- [Comentários](#comments_section)

[![top](./images/up.gif)](#page-header)

## Principais Melhorias

Threading Unix
:   Em sistemas Unix com suporte a threads POSIX, o Apache pode
    funcionar em modo híbrido multiprocesso e multithread. Não funciona
    em todas configurações, mas melhora a escalabilidade em muitas.

Novo Sistema de Compilação
:   O sistema de compilação foi reescrito do zero para utilizar o
    `autoconf` e o `libtool`, tornando a
    configuração do sistema Apache mais similar a de outros
    pacotes.

Suporte Multi-protocolo
:   O Apache possui agora uma infraestrutura feita para suportar
    múltiplos protocolos. O módulo `mod_echo` é um
    exemplo ilustrativo de sua utilização.

Suporte Aperfeiçoado para Plataformas Não-Unix
:   O Apache 2.0 está mais rápido e mais estável em plataformas
    Não-Unix como BeOS, OS/2 e Windows. Com a introdução de módulos
    [multi-processamento](mpm.md) (MPMs) específicos e a
    Apache Portable Runtime (APR), essas plataformas estão implementando
    as suas APIs nativas, evitando as camadas de emulação POSIX que se
    mostravam lentas e defeituosas.

Nova API Apache
:   A API para módulos mudou significativamente na versão 2.0.
    Muitos dos problemas de ordenamento/prioridade da versão
    1.3 foram resolvidos. A versão 2.0 faz o ordenamento automático
    "per-hook" para permitir mais flexibilidade. Novas chamadas foram
    adicionadas para fornecer capacidades adicionais sem a necessidade
    de se aplicar nenhum patch ao servidor Apache principal.

Suporte IPv6
:   Em sistemas onde o IPv6 é suportado pela biblioteca de base
    Apache Portable Runtime, o Apache monitora por padrão
    as interfaces IPv6. Em adição as diretrizes `Listen`, `NameVirtualHost` e `VirtualHost`, suportam correntes (strings) de
    endereços numéricos do tipo IPv6. (ex. "`Listen
    [2001:db8::1]:8080`").

Filtrando
:   Os módulos do Apache agora são feito filtros que
    agem na corrente do conteúdo na medida que este é entregue, tanto
    na entrada quando na saída de dados do servidor. É possível então,
    por exemplo, que o retorno de dados de scripts CGI sejam analisados
    pelas diretrizes do "Server Side Include" usando o filtro `INCLUDES` do `mod_include`. O módulo `mod_ext_filter`, permite que programas externos trabalhem
    como filtros do mesmo modo que aplicações CGI funcionam como
    manipuladores.

Respostas de Erro Multi-linguais
:   Mensagens de erro para o navegador agora são fornecidas em
    diversas línguas, usando documentos SSI. Podem ser personalizadas
    pelo administrador que desejar definir seus próprios
    padrões.

Configuração Simplificada
:   Muitas diretrizes confusas foram simplificadas. Entre elas,
    `Port` e `BindAddress` não existem
    mais; apenas a diretriz `Listen`
    é usada para direcionar endereços IP; a diretriz `ServerName` especifica o nome do servidor
    e o número da porta apenas para redirecionamento e reconhecimento
    de hospedeiros virtuais.

Suporte Nativo ao Unicode do Windows NT
:   O Apache 2.0 para Windows NT agora usa utf-8 para codificação
    de todos os nomes de arquivos. A tradução para o sistema
    base Unicode, torna possível o suporte multi-lingual para todas
    as instalações da família NT, incluindo o Windows 2000 e Windows XP.
    *Esse suporte não se estende ao Windows 95, 98 ou ME, que
    continuam usando o código de páginas da máquina local para o
    acesso ao sistema de arquivos.*

Biblioteca de Expressões Regulares Atualizada
:   O Apache 2.0 inclui a [Biblioteca
    de Expressões Regulares Compatíveis Perl](http://www.pcre.org/) (PCRE). Todas as
    avaliações de expressões regulares usam a mais poderosa sintaxe
    do Perl 5.

[![top](./images/up.gif)](#page-header)

## Melhorias nos Módulos

`mod_ssl`
:   Novo módulo no Apache 2.0. Esse módulo é uma interface
    para os protocolos de codificação SSL/TLS fornecidos pela
    OpenSSL.

`mod_dav`
:   Novo módulo no Apache 2.0. Este módulo implementa as
    especificações de Autoria Distribuída e Versões (Distributed
    Authoring and Versioning - DAV) para HTTP, para a publicação
    e a manutenção de conteúdo da web.

`mod_deflate`
:   Novo módulo no Apache 2.0. Esse módulo permite o suporte
    a navegadores que solicitam que o conteúdo seja comprimido antes
    da entrega, economizando banda da rede.

`mod_auth_ldap`
:   Novo módulo no Apache 2.0.41. Este módulo permite que
    bancos de dados LDAP sejam usados para armazenar credenciais
    para Autenticação Básica HTTP. Um módulo que o acompanha `mod_ldap`, fornece a conciliação de conexões e armazenamento
    de resultados.

`mod_auth_digest`
:   Inclui suporte adicional para armazenamento de sessões
    através de processos que usam memória compartilhada.

`mod_charset_lite`
:   Novo módulo no Apache 2.0. Este modo experimental permite a
    tradução de tabelas de caracteres ou re-codificação.

`mod_file_cache`
:   Novo módulo no Apache 2.0. Esse módulo inclui a funcionalidade
    do `mod_mmap_static` do Apache 1.3, além de disponibilizar
    outras possibilidades de armazenamento.

`mod_headers`
:   Este módulo está muito mais flexível no Apache 2.0. Pode
    modificar pedidos de cabeçalhos usados pelo `mod_proxy`, e incondicionalmente pode ajustar cabeçalhos de respostas.

`mod_proxy`
:   O módulo proxy foi totalmente reescrito para levar vantagem
    da nova infraestrutura de filtro e implementar um proxy mais fiel e
    de acordo com o padrão HTTP/1.1. Além disso, uma nova seção
    de configuração `<Proxy>` fornece controles mais legíveis (e internamente
    mais rápidos) para sites com proxies; configurações
    sobrecarregadas `<Directory "proxy:...">`, não
    são suportadas. O módulo agora é dividido em suporte
    de protocolos específicos incluindo `proxy_connect`,
    `proxy_ftp` e `proxy_http`.

`mod_negotiation`
:   A nova diretriz `ForceLanguagePriority` pode ser usada para assegurar que
    o cliente receba um único documento em todos os casos, ao invés de
    respostas "NOT ACCEPTABLE" ou "MULTIPLE CHOICES". Novos algoritmos
    de negociação e visões múltiplas (MultiViews) foram organizados para
    obter resultados mais consistentes e uma nova forma de tipo de mapa
    (map type) que podem incluir o conteúdo de documentos é fornecido.

`mod_autoindex`
:   As listagens de diretórios automáticas podem ser
    configuradas para usar tabelas HTML para formatações mais limpas
    e permitir controles mais acurados de classificação, incluindo
    ordenação por versão e filtro da lista de
    diretórios através de caracteres-coringa.

`mod_include`
:   Novas diretrizes permitem que as tags padrões *start* e
    *end* para elementos SSI, possam ser alteradas e permitir que
    as configurações de formatos de erro e hora sejam incluídos no
    arquivo de configuração principal, ao invés de serem adicionadas
    ao documento SSI. Resultados de análises de expressões regulares
    e agrupamento (baseadas na sintaxe de expressões regulares do Perl)
    podem ser obtidas usando as variáveis do módulo `mod_include`, de `$0` a `$9`.

`mod_auth_dbm`
:   Agora suporta múltiplos tipos de banco de dados similares ao DBM,
    usando a diretriz [`AuthDBMType`](https://httpd.apache.org/docs/2.2/2.0/mod/mod_auth_dbm.html#AuthDBMType)
    .

Línguas Disponíveis: [de](https://httpd.apache.org/docs/2.2/pt-br/de/new_features_2_0.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/new_features_2_0.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/new_features_2_0.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/new_features_2_0.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/new_features_2_0.html "Korean") |
[pt-br](pt-br__new_features_2_0.md "Português (Brasil)") |
[ru](https://httpd.apache.org/docs/2.2/pt-br/ru/new_features_2_0.html "Russian") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/new_features_2_0.html "Türkçe")

[![top](./images/up.gif)](#page-header)

## Comentários

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretrizes](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do site](sitemap.md)
