# Descrição das novas funcionalidades do Apache 2.2 - Servidor HTTP Apache Versão 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/pt-br/new_features_2_2.html

---

[Módulos](mod.md) | [Diretrizes](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do site](sitemap.md)

Servidor HTTP Apache Versão 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](index.md)

[Apache](http://www.apache.org/) > [Servidor HTTP](http://httpd.apache.org/) > [Documentação](http://httpd.apache.org/docs/) > [Versão 2.2](index.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/new_features_2_2.html) to go to the current version of this document.

# Descrição das novas funcionalidades do Apache 2.2

Esta tradução pode estar desatualizada.
Verifique a versão em Inglês para mudanças recentes.

Esse documento descreve algumas das principais mudanças
entre as versões 2.0 e 2.2 do Servidor HTTP Apache.
Para a lista de mudanças desde a versão 1.3, veja a página
de documentação [novas funcionalidades
do Apache 2.0](new_features_2_0.md).

- ![](./images/down.gif) [Principais Melhorias](#core)
- ![](./images/down.gif) [Melhorias nos Módulos](#module)
- ![](./images/down.gif) [Mudanças ao Desenvolvedor de Módulos](#developer)

- [Comentários](#comments_section)

[![top](./images/up.gif)](#page-header)

## Principais Melhorias

Authn/Authz
:   ...

Caching
:   ...

Proxying
:   O novo módulo `mod_proxy_balancer` fornece
    serviços de carregamento de balenceamento para `mod_proxy`. O novo módulo `mod_proxy_ajp` oferece suporte para o `Protocolo Apache JServ
    versão 1.3`, usado pelo [Apache Tomcat](http://jakarta.apache.org/tomcat/).

Filtragem Inteligente (Smart Filtering)
:   O `mod_filter` introduz configuração dinâmica para
    o filtro de saída de dados. Permitindo que os filtros sejam
    condicionalmente inseridos, baseando-se nos cabeçalhos *Request* ou *Response* ou em variáveis do
    ambiente, ele acaba com os problemas de dependências e pedidos
    da arquitetura 2.0.

[![top](./images/up.gif)](#page-header)

## Melhorias nos Módulos

`mod_authnz_ldap`
:   Este módulo é uma migração do `mod_auth_ldap`,
    da versão 2.0 para a estrutura 2.2 de `Authn/Authz`.
    As novas funcionalidades incluem o uso de atributos LDAP e
    filtros de procura complexos na diretriz `Require`.

`mod_info`
:   Adicionado um novo argumento `?config` que
    mostra a configuração das diretrizes analisadas pelo
    Apache, incluindo o nome do arquivo e o número da linha.
    Esse módulo também mostra a ordem de todos os ganchos de
    pedidos (request hooks) e informações adicionais sobre
    a compilação, similar ao comando `httpd -V`.

[![top](./images/up.gif)](#page-header)

## Mudanças ao Desenvolvedor de Módulos

API do APR 1.0
:   O Apache 2.2 utiliza a API do APR 1.0. Todas as funções e
    símbolos antigos foram removidos do `APR` e
    `APR-Util`. Para mais detalhes, visite o
    [Website do APR](http://apr.apache.org/).

Registros de Erros de Conexão (logs)
:   Uma nova função `ap_log_cerror`, foi adicionada
    para registrar erros que ocorrem na conexão do cliente.
    Quando documentado no diário de log, a mensagem inclui o
    endereço IP do cliente.

Adicionado Gancho de Teste de Configuração
:   Um novo gancho (hook), `test_config` foi
    adicionado para auxiliar módulos que querem executar
    códigos especiais apenas quando o usuário passa o
    parâmetro `-t` para o httpd.

Ajustar o Stacksize dos "Threaded MPM's"
:   Uma nova diretriz chamada `ThreadStackSize`,
    foi adicionada para ajustar o tamanho das stacks em todos
    os threadeds MPMs. Essa é uma prática necessário para alguns
    módulos de terceiros em plataformas com tamanhos de stacks
    pequenos por padrão.

Negociação de Protocolo para filtros de saída
:   No passado, todo filtro era responsável por garantir
    a geração de cabeçalhos de resposta correto que os afetava.
    Os filtros agora podem delegar o gerenciamento de protocolos
    comuns para `mod_filter`, usando chamadas
    de `ap_register_output_filter_protocol` ou
    `ap_filter_protocol`.

Línguas Disponíveis: [en](https://httpd.apache.org/docs/2.2/pt-br/en/new_features_2_2.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/new_features_2_2.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/new_features_2_2.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/new_features_2_2.html "Korean") |
[pt-br](pt-br__new_features_2_2.md "Português (Brasil)") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/new_features_2_2.html "Türkçe")

[![top](./images/up.gif)](#page-header)

## Comentários

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretrizes](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do site](sitemap.md)
