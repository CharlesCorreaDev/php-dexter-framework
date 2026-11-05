# Documentação do Servidor HTTP Apache Versão
2.2 - Servidor HTTP Apache Versão 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/pt-br/

---

[Módulos](mod.md) | [Diretrizes](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do site](sitemap.md)

Servidor HTTP Apache Versão 2.2

![](./images/feather.gif)

[![<-](./images/left.gif "<-")](http://httpd.apache.org/docs-project/)

[Apache](http://www.apache.org/) > [Servidor HTTP](http://httpd.apache.org/) > [Documentação](http://httpd.apache.org/docs/)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/) to go to the current version of this document.

# Documentação do Servidor HTTP Apache Versão 2.2

Esta tradução pode estar desatualizada.
Verifique a versão em Inglês para mudanças recentes.

|  |  |  |
| --- | --- | --- |
| Notas da Versão  - [Novas funcionalidades no Apache 2.1/2.2](new_features_2_2.md) - [Novas funcionalidades no Apache 2.0](new_features_2_0.md) - [Atualizando da versão 1.3 para 2.0](upgrading.md) - [Licença Apache](license.md)  Manual de Referência  - [Compilando e Instalando](install.md) - [Iniciando](invoking.md) - [Parando ou Reiniciando](stopping.md) - [Diretrizes de Configuração para execução](mod__directives.md) - [Referência Rápida de Diretrizes](mod__quickreference.md) - [Módulos](mod.md) - [Módulos Multi-Processamento (MPMs)](mpm.md) - [Filtros](filter.md) - [Manipuladores](handler.md) - [Servidor e Programas Suportados](programs.md) - [Glossário](glossary.md) | Guia do Usuário  - [Direcionamento](bind.md) - [Arquivos de Configuração](configuring.md) - [Seções de Configuração](sections.md) - [Negociação de Conteúdo](content-negotiation.md) - [Objetos Dinâmicos Compartilhados (DSO)](dso.md) - [Variáveis de Ambiente](env.md) - [Arquivos de Registro](logs.md) - [Mapeando URLs para o Sistema de Arquivos](urlmapping.md) - [Ajustes de Performance](misc__perf-tuning.md) - [Dicas de Segurança](misc__security_tips.md) - [Configurações do Servidor](server-wide.md) - [Codificação SSL/TLS](ssl.md) - [Execução Suexec para CGI](suexec.md) - [Guia para Reescrever URL](rewrite.md) - [Hospedeiros Virtuais](vhosts.md) | How-To / Tutoriais  - [Autenticação, Autorização, e Controle de Acesso](howto__auth.md) - [CGI: Conteúdo Dinâmico](howto__cgi.md) - [Arquivos .htaccess](howto__htaccess.md) - [Server Side Includes (SSI)](howto__ssi.md) - [Diretórios Web por usuário (public\_html)](howto__public_html.md)  Notas Específicas sobre Platformas  - [Microsoft Windows](platform__windows.md) - [Novell NetWare](platform__netware.md) - [EBCDIC Port](platform__ebcdic.md)  Outros Tópicos  - [Perguntas Mais Frequentes](faq.md) - [Mapa do Site](sitemap.md) - [Documentação para Desenvolvedores](developer.md) - [Outras Notas](misc.md) |

Línguas Disponíveis: [de](https://httpd.apache.org/docs/2.2/pt-br/de/ "Deutsch") |
[en](https://httpd.apache.org/docs/2.2/pt-br/en/ "English") |
[es](https://httpd.apache.org/docs/2.2/pt-br/es/ "Español") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/ "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/ "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/ "Korean") |
[pt-br](pt-br.md "Português (Brasil)") |
[tr](https://httpd.apache.org/docs/2.2/pt-br/tr/ "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.2/pt-br/zh-cn/ "Simplified Chinese")

Copyright 2018 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretrizes](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do site](sitemap.md)
