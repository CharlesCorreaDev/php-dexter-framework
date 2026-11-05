# Descobrir componentes instalados | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/discover-installed-components

---

Sumário 

Sair do modo Editor

Pergunte e aprenda

Pergunte e aprenda

Modo de leitura

Sumário
[Ler em inglês](#)

Adicionar

Adicionar a Planos

---

Copiar Markdown

Imprimir

---

Observação

O acesso a essa página exige autorização. Você pode tentar [entrar](#) ou alterar diretórios.

O acesso a essa página exige autorização. Você pode tentar alterar os diretórios.

# Descobrir componentes instalados

Comentários

por a equipe do IIS

## Introdução

A arquitetura modular no IIS 7.0 e superior permite limitar a superfície de ataque potencial em sua instalação do IIS ou substituir recursos internos por implementações personalizadas ou de terceiros. Em geral, essa arquitetura oferece a capacidade de controlar como você implanta o IIS em sua rede.

Mas se há uma desvantagem nessa arquitetura modular, é que você não pode mais ter certeza de que todos os componentes do IIS necessários estão disponíveis, apenas porque o IIS foi instalado. Você também pode descobrir que garantir que vários servidores tenham os mesmos componentes do IIS pode ser uma tarefa.

Para contornar esses problemas, estamos publicando uma lista de chaves do Registro que mostram se algum módulo do IIS foi instalado. Use essas chaves do Registro para verificar programaticamente os componentes do IIS. Se um componente tiver sido instalado, a chave do Registro terá um valor DWORD de 00000001. Se um componente nunca tiver sido instalado ou desinstalado, a chave do Registro não existirá. Use a tabela abaixo para corresponder os nomes de componentes do IIS com suas chaves do registro.

## Chaves de Registo

Essas chaves aparecem no hive do registro a seguir:

```
HKEY_LOCAL_MACHINE\Software\Microsoft\InetStp\Components\
```

| Nome de Exibição | Chave do Registo |
| --- | --- |
| Servidor Web | W3SVC |
| Recursos de HTTP comuns |  |
| Conteúdo estático | StaticContent |
| Documento padrão | Documento Padrão |
| Navegação em diretórios | DirectoryBrowse |
| Erros HTTP | HttpErrors |
| Redirecionamento HTTP | HttpRedirect |
| Recursos de desenvolvimento de aplicativos |  |
| ASP.NET | ASPNET |
| Extensibilidade .NET | NetFxExtensibility |
| ASP | ASP |
| CGI | CGI |
| Extensões de ISAPI | ISAPIExtensions |
| Filtros de ISAPI | Isapifilter |
| Instruções do Lado Servidor | Inclusão no Lado do Servidor |
| Saúde e Diagnóstico |  |
| Registro em log HTTP | Registro de HTTP |
| Ferramentas de registro em log | Bibliotecas de Log |
| Monitor de Solicitações | RequestMonitor |
| Rastreamento | HttpTracing |
| Registro Personalizado | Log Personalizado |
| Registo ODBC | Registro ODBC |
| Segurança |  |
| Autenticação Básica | Autenticação básica |
| Autenticação do Windows | WindowsAuthentication |
| Autenticação Resumida | Digestauthentication |
| Autenticação de mapeamento de certificados de cliente | AutenticaçãoPorMapeamentoDeCertificadoDeCliente |
| Autenticação de Mapeamento de Certificados de Cliente IIS | Autenticação de Mapeamento de Certificado do Cliente IIS (IISClientCertificateMappingAuthentication) |
| Autorização de URL | Authorization |
| Filtragem de solicitações | Filtragem de Solicitações |
| Restrições de IP e domínio | IPSecurity |
| Recursos de desempenho |  |
| Compactação de conteúdo estático | HttpCompressionStatic |
| Compactação de Conteúdo Dinâmico | HttpCompressionDynamic |
| Ferramentas de gerenciamento |  |
| Console de gerenciamento do IIS | Managementconsole |
| Scripts e Ferramentas de Gerenciamento do IIS | ManagementScriptingTools |
| Serviço de Gerenciamento | AdminService |
| Compatibilidade de gerenciamento do IIS 6 |  |
| Compatibilidade de Metabase do IIS | Metabase |
| Compatibilidade com WMI do IIS 6 | WMICompatibility |
| Ferramentas de script do IIS 6 | LegacyScripts |
| Console de gerenciamento do IIS 6 | LegacySnapin |
| Serviço de publicação FTP |  |
| Servidor FTP | Servidor FTP |
| Snap-in de Gerenciamento de FTP | LegacySnapin |
| Serviço de Ativação de Processo Windows |  |
| Modelo de processo | Processmodel |
| Ambiente de .NET | NetFxEnvironment |
| APIs de configuração | WASConfigurationAPI |

---

## Comentários

Esta página foi útil?

Sim

Não

Não

Precisa de ajuda com este tópico?

Quer experimentar o Pergunte e aprenda para esclarecer ou guiar você neste tópico?

Pergunte e aprenda

Pergunte e aprenda

 Sugerir uma correção?

---

## Recursos adicionais

---

- Última atualização em 
  2026-03-28
