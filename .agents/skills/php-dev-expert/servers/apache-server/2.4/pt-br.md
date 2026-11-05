# Documentação do Servidor HTTP Apache Versão
2.4 - Servidor HTTP Apache Versão 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/pt-br/

---

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Servidor HTTP Apache Versão 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](http://httpd.apache.org/docs-project/)

[Apache](https://www.apache.org/) > [Servidor HTTP](https://httpd.apache.org/) > [Documentação](https://httpd.apache.org/docs/)

# Documentação do Servidor HTTP Apache Versão 2.4

|  |  |  |
| --- | --- | --- |
| Notas da Versão  - [Novas funcionalidades no Apache 2.3/2.4](new_features_2_4.md) - [Novas funcionalidades no Apache 2.1/2.2](new_features_2_2.md) - [Novas funcionalidades no Apache 2.0](new_features_2_0.md) - [Atualizando da versão 2.2 para 2.4](upgrading.md) - [Licença Apache](license.md)  Manual de Referência  - [Compilando e Instalando](install.md) - [Executando](invoking.md) - [Parando ou Reiniciando](stopping.md) - [Diretivas de Configuração para Execução](mod__quickreference.md) - [Módulos](mod.md) - [Módulos Multi-Processos (MPMs)](mpm.md) - [Filtros](filter.md) - [Manipuladores](handler.md) - [Interpretador de Expressão](expr.md) - [Índice de Classe de Substituição para .htaccess](mod__overrides.md) - [Servidor e Programas de Suporte](programs.md) - [Glossário](glossary.md) | Guia do Usuário  - [Introdução](getting-started.md) - [Vinculando a Endereços e Portas](bind.md) - [Arquivos de Configuração](configuring.md) - [Seções de Configuração](sections.md) - [Cache de Conteúdo](caching.md) - [Negociação de Conteúdo](content-negotiation.md) - [Objetos Dinâmicos Compartilhados (DSO)](dso.md) - [Variáveis de Ambiente](env.md) - [Arquivos de Registro](logs.md) - [Mapeando URLs para o Sistema de Arquivos](urlmapping.md) - [Ajustes de Desempenho](misc__perf-tuning.md) - [Dicas de Segurança](misc__security_tips.md) - [Configurações Globais do Servidor](server-wide.md) - [Criptografia SSL/TLS](ssl.md) - [Execução Suexec para CGI](suexec.md) - [Re-escrita de URL com mod\_rewrite](rewrite.md) - [Hosts Virtuais](vhosts.md) | Como Fazer / Tutoriais  - [Autenticação e Autorização](howto__auth.md) - [Controle de Acesso](howto__access.md) - [CGI: Conteúdo Dinâmico](howto__cgi.md) - [Arquivos .htaccess](howto__htaccess.md) - [Server Side Includes (SSI)](howto__ssi.md) - [Diretórios Web para Usuários Individuais (public\_html)](howto__public_html.md) - [Guia de Configuração de Proxy Reverso](howto__reverse_proxy.md) - [Guia do HTTP/2](howto__http2.md)  Observações para Plataformas Específicas  - [Microsoft Windows](platform__windows.md) - [Sistemas Baseados em RPM (Redhat / CentOS / Fedora)](platform__rpm.md) - [Novell NetWare](platform__netware.md) - [EBCDIC Port](platform__ebcdic.md)  Outros Tópicos  - [Perguntas Mais Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) - [Mapa do Site](sitemap.md) - [Documentação para Desenvolvedores](developer.md) - [Ajudando com a Documentação](http://httpd.apache.org/docs-project/) - [Outras Observações](misc.md) - [Wiki](https://cwiki.apache.org/confluence/display/httpd/) |

Línguas Disponíveis: [da](https://httpd.apache.org/docs/2.4/pt-br/da/ "Dansk") |
[de](https://httpd.apache.org/docs/2.4/pt-br/de/ "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/ "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/ "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/ "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/ "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/ "Korean") |
[pt-br](pt-br.md "Português (Brasil)") |
[ru](https://httpd.apache.org/docs/2.4/pt-br/ru/ "Russian") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/ "Türkçe") |
[zh-cn](https://httpd.apache.org/docs/2.4/pt-br/zh-cn/ "Simplified Chinese")

Copyright 2026 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
