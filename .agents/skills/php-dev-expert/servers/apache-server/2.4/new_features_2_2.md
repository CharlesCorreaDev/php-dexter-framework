# Visão geral das novas funcionalidades no Servidor HTTP Apache 2.2 - Servidor HTTP Apache Versão 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/new_features_2_2.html

---

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Servidor HTTP Apache Versão 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [Servidor HTTP](https://httpd.apache.org/) > [Documentação](https://httpd.apache.org/docs/) > [Versão 2.4](index.md)

# Visão geral das novas funcionalidades no Servidor HTTP Apache 2.2

Este documento descreve algumas das principais mudanças entre as
versões 2.0 e 2.2 do servidor HTTP Apache. Para obter informações sobre os novos
recursos desde a versão 1.3, consulte o documento [Novos
recursos da versão 2.0](new_features_2_0.md).

- ![](./images/down.gif) [Melhorias do Núcleo](#core)
- ![](./images/down.gif) [Melhorias nos Módulos](#module)
- ![](./images/down.gif) [Melhorias na Aplicação](#programs)
- ![](./images/down.gif) [Alterações para Desenvolvedor de Módulos](#developer)

[![top](./images/up.gif)](#page-header)

## Melhorias do Núcleo [¶](#core "Link permanente")

Authn/Authz
:   Os módulos de autenticação e autorização incluídos foram
    refatorados. O novo módulo mod\_authn\_alias (já removido das versões 2.3/2.4)
    pode simplificar bastante certas configurações de autenticação.
    Consulte [alterações nos nomes dos módulos](#module) e
    as [alterações para desenvolvedores](#developer) para obter mais
    informações sobre como essas alterações afetam usuários e
    desenvolvedores de módulos.

Cache
:   `mod_cache`, `mod_cache_disk` e
    mod\_mem\_cache (já removido das versões 2.3/2.4) tiveram muitas mudanças e
    agora são considerados de qualidade de produção. `htcacheclean`
    foi introduzido para limpar as configurações de
    `mod_cache_disk`.

Configuração
:   O layout de configuração padrão foi simplificado e
    modularizado. Trechos de configuração que podem ser usados ​​para
    habilitar recursos comumente utilizados agora estão incluídos no Apache e
    podem ser facilmente adicionados à configuração principal do servidor.

Parada graciosa
:   Os MPMs `prefork`, `worker` e
    `event` agora permitem que o `httpd`
    seja desligado graciosamente através do sinal
    [`graceful-stop`](stopping.md#gracefulstop).
    A diretiva `GracefulShutdownTimeout`
    foi adicionada para especificar um tempo limite ótimo, após o qual
    `httpd` terminará independentemente do status
    de quaisquer requisições sendo servidas.

Proxy
:   O novo módulo `mod_proxy_balancer` fornece
    serviços de balanceamento de carga para `mod_proxy`.
    O novo módulo `mod_proxy_ajp` adiciona suporte para o
    `Protocolo Apache JServ versão 1.3` usado pelo
    [Apache Tomcat](http://tomcat.apache.org/).

Biblioteca de Expressões Regulares Atualizada
:   A versão 5.0 da
    [Biblioteca de Expressões Regulares Compatíveis
    com Perl](http://www.pcre.org/) (PCRE) agora está incluída. O `httpd` pode ser
    configurado para usar uma instalação do PCRE no sistema, passando a opção
    `--with-pcre` para o comando de configuração.

Filtragem Inteligente
:   `mod_filter` introduz configuração dinâmica
    à cadeia de filtros de saída. Ele permite que filtros sejam inseridos condicionalmente,
    com base em qualquer cabeçalho "Request" ou "Response" ou variável de ambiente,
    e dispensa as dependências mais problemáticas e
    os problemas de ordenação na arquitetura 2.0.

Suporte a Arquivos Grandes
:   `httpd` agora é construído com suporte a arquivos maiores
    que 2GB em sistemas Unix modernos de 32 bits. Também foi adicionado suporte
    para lidar com corpos de requisição com mais de 2GB.

MPM de Eventos
:   O módulo MPM `event` usa um thread separado para lidar com
    solicitações "Keep Alive" e aceitar conexões. As solicitações "Keep Alive"
    tradicionalmente exigiam que o httpd dedicasse um trabalhador para processá-las.
    Esse trabalhador dedicado não podia ser usado novamente até que o tempo limite do "Keep Alive"
    fosse atingido.

Suporte a Banco de Dados SQL
:   `mod_dbd`, em conjunto com o framework `apr_dbd`,
    traz suporte direto a SQL para os módulos que precisam.
    Suporte grupos de conexões em MPMs com threads.

[![top](./images/up.gif)](#page-header)

## Melhorias nos Módulos [¶](#module "Link permanente")

Authn/Authz
:   Módulos no diretório "aaa" foram renomeados e oferecem
    um suporte melhor para autenticação "digest". Por exemplo,
    `mod_auth` agora está dividido em
    `mod_auth_basic` e
    `mod_authn_file`; `mod_auth_dbm` agora é
    chamado de `mod_authn_dbm`; `mod_access` foi
    renomeado para `mod_authz_host`. Também existe um novo
    módulo mod\_authn\_alias (já removido da versão 2.3/2.4) para simplificar
    certas configurações de autenticação.

`mod_authnz_ldap`
:   Este módulo é uma adaptação do módulo
    `mod_auth_ldap` da versão para o framework `Authn/Authz`
    da versão 2.2. Os novos recursos incluem o uso de valores de atributos LDAP e
    filtros de pesquisa complexos na
    diretiva `Require`.

`mod_authz_owner`
:   Um novo módulo que autoriza o acesso a arquivos com base
    no proprietário do arquivo no sistema de arquivos.

`mod_version`
:   Um novo módulo que permite habilitar blocos de configuração com base no
    número da versão do servidor em execução.

`mod_info`
:   Adicionado um novo argumento `?config` que mostrará
    as diretivas de configuração analisadas pelo Apache, incluindo
    o nome do arquivo e o número da linha. O módulo também
    mostra a ordem de todos os ganchos de requisição e informações adicionais
    de construção, similar a `httpd -V`.

`mod_ssl`
:   Adicionado suporte à
    [RFC 2817](https://www.rfc-editor.org/rfc/rfc2817), que
    permite que conexões sejam atualizadas de texto puro para criptografia TLS.

`mod_imagemap`
:   `mod_imap` foi renomeado para
    `mod_imagemap` para evitar confusão pelo usuário.

[![top](./images/up.gif)](#page-header)

## Melhorias na Aplicação [¶](#programs "Link permanente")

`httpd`
:   Uma nova opção de linha de comando `-M` foi adicionada. Ela
    lista todos os módulos carregados com base na configuração atual.
    Diferentemente da opção `-l`, esta lista
    inclui DSOs carregados via `mod_so`.

`httxt2dbm`
:   Um novo programa usado para gerar arquivos dbm a partir de entrada de texto,
    para uso em `RewriteMap`
    com o tipo de mapa `dbm`.

[![top](./images/up.gif)](#page-header)

## Alterações para Desenvolvedor de Módulos [¶](#developer "Link permanente")

API [APR](glossary.md#apr "ver glossário") 1.0
:   Apache 2.2 usa a API APR 1.0. Todas as funções e símbolos
    descontinuados foram removidas do `APR` e do
    `APR-Util`. Para detalhes, consulte o
    [Website do APR](http://apr.apache.org/).

Authn/Authz
:   Os módulos de autenticação e autorização foram
    renomeados da seguinte forma:

    - `mod_auth_*` -> Módulos que implementam um mecanismo
      de autenticação HTTP
    - `mod_authn_*` -> Módulos que fornecem um provedor
      de autenticação de backend
    - `mod_authz_*` -> Módulos que implementam
      autorização (ou acesso)
    - `mod_authnz_*` -> Módulos que implementam tanto
      autenticação quanto autorização

    Existe um novo esquema de provedor de backend de
    autenticação que facilita bastante a construção de
    novos backends de autenticação.

Registro de Erros de Conexão
:   Uma nova função, `ap_log_cerror`, foi adicionada para registrar
    erros que ocorrem com a conexão do cliente. Quando registrada,
    a mensagem inclui o endereço IP do cliente.

Gancho de Configuração de Teste Adicionado
:   Um novo gancho, `test_config`, foi adicionado para auxiliar
    módulos que desejam executar código especial somente quando o usuário passar
    `-t` para `httpd`.

Definindo o Tamanho da Pilha de MPMs com Threads
:   Uma nova diretiva, `ThreadStackSize` foi adicionada para
    definir o tamanho da pilha em todos os MPMs com threads. Isso é necessário
    para alguns módulos de terceiros em plataformas com tamanho de pilha de
    threads padrão pequeno.

MAnipulação de protocolo para filtros de saída
:   No passado, cada filtro era responsável por garantir
    a geração de cabeçalhos de resposta corretos que os afetasse.
    Os filtros agora podem delegar o gerenciamento de protocolos comuns para
    `mod_filter`, usando as chamadas
    `ap_register_output_filter_protocol` ou
    `ap_filter_protocol`.

Gancho de monitoramento adicionado
:   O gancho de monitoramento permite que os módulos executem tarefas regulares/agendadas
    no processo pai (raiz).

Alterações na API de expressões regulares
:   O cabeçalho `pcreposix.h` não está mais disponível;
    ele foi substituído pelo novo cabeçalho `ap_regex.h`.
    A implementação POSIX.2 `regex.h` exposta pelo antigo
    cabeçalho agora está disponível no namespace `ap_`
    a partir de `ap_regex.h`. Chamadas para `regcomp`,
    `regexec` e assim por diante podem ser substituídas por chamadas para
    `ap_regcomp`, `ap_regexec`.

Framework DBD (API de banco de dados SQL)
:   Com o Apache 1.x e 2.0, os módulos que exigiam um backend SQL
    tinham que assumir a responsabilidade de gerenciá-lo por conta própria. Além de
    reinventar a roda, isso pode ser muito ineficiente, por
    exemplo, quando vários módulos mantêm suas próprias conexões.

    O Apache 2.1 e versões posteriores fornecem a API `ap_dbd` para
    gerenciar conexões de banco de dados (incluindo estratégias otimizadas
    para MPMs com e sem threads), enquanto o APR 1.2 e versões posteriores fornecem
    a API `apr_dbd` para interagir com o banco de dados.

    Novos módulos DEVEM agora usar essas APIs para todas as operações de banco de dados SQL.
    Os aplicativos existentes DEVEM ser atualizados para usá-las
    sempre que possível, seja de forma transparente ou como uma opção recomendada
    aos seus usuários.

Línguas Disponíveis: [en](https://httpd.apache.org/docs/2.4/pt-br/en/new_features_2_2.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/new_features_2_2.html "Français") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/new_features_2_2.html "Korean") |
[pt-br](pt-br__new_features_2_2.md "Português (Brasil)") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/new_features_2_2.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
