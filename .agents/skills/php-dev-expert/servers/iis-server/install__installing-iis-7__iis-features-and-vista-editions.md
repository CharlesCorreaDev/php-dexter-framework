# Recursos do IIS 7.0 e Edições do Vista | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/iis-features-and-vista-editions

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

# Recursos do IIS 7.0 e Edições do Vista

Comentários

por Henry Seiler

## Visão geral das diferenças do IIS 7.0 nas Edições Windows Vista e Windows Server 2008

Com o lançamento do Windows Vista e do Windows Server 2008, o IIS 7.0 ficou disponível em todas as principais Edições do Windows pela primeira vez.

No Windows Vista Editions, o IIS 7.0 desempenhará uma função dupla. Primeiro, ele oferece aos desenvolvedores Web a experiência completa da plataforma Web para criar e testar aplicativos Web no Windows, para implantação no Windows Server, assim como o Windows XP. Em segundo lugar, ele habilita a ativação e o gerenciamento de processos e a infraestrutura HTTP necessária para habilitar cenários de consumidor conectados que serão criados usando o WinFX (Windows Communication Foundation).

## Windows Vista Starter e Home Editions

O Windows Vista Starter e o Home Editions são voltados para usuários domésticos e pessoais que não têm a necessidade de executar o desenvolvimento do aplicativo ou da Web. Os recursos do Servidor Web do IIS 7.0 e do SERVIDOR FTP não estão disponíveis nessas edições. No entanto, se você olhar de perto, observará componentes específicos do IIS 7.0 que podem ser instalados nessas Edições. No entanto, observe que a instalação desses componentes não fornecerá um servidor Web compatível com conteúdo estático, ASP Clássico ou ASP.NET.

Os componentes do IIS 7.0 disponíveis nessas Edições servem como infraestrutura de suporte para o WCF (Windows Communication Foundation) da Microsoft. Coletivamente, os componentes do IIS 7.0 que fornecem essa infraestrutura são chamados de WAS (Serviço de Ativação de Processo do Windows). Os usuários que instalam aplicativos baseados em WCF não precisarão instalar explicitamente o WAS, em vez disso, esses componentes serão instalados pelo WCF, conforme necessário.

O limite de execução de solicitação simultânea do IIS 7.0 para o Vista Starter e o Home Editions é três.

Confira o Resumo de Recursos abaixo para obter uma lista detalhada dos recursos do IIS 7.0 disponíveis nessas Edições.

## Windows Vista Home Premium Edition

A função do IIS 7.0 no Windows Vista Home Premium Edition é dar suporte às necessidades dos desenvolvedores web casuais ou entusiastas; a maioria das funcionalidades do Servidor Web do IIS 7.0 necessárias para o desenvolvimento de sites está disponível. Os recursos normalmente não associados ao desenvolvimento da Web hobbyist, como servidor FTP, autenticação e autorização da Web avançada e administração remota, não estão disponíveis no Vista Home Premium Edition.

O limite de execução de solicitação simultânea do IIS 7.0 para o Vista Home Premium Edition é três.

Confira o Resumo de Recursos abaixo para obter uma lista detalhada dos recursos do IIS 7.0 disponíveis nesta Edição.

## Edições Profissionais do Windows Vista

Para as edições profissionais do Windows Vista, a função IIS 7.0 é direcionada diretamente ao desenvolvedor web profissional e oferece tudo o que é necessário para projetar, desenvolver e testar aplicativos web. (As Edições Profissionais incluem Vista Business, Enterprise e Ultimate Editions.) Todos os recursos do IIS 7.0 disponíveis no Windows Server 2008 estão disponíveis nas Edições Profissionais, com exceção da administração remota. As Edições Profissionais impõem um limite de 10 solicitações simultâneas que podem ser processadas.

Confira o Resumo de Recursos abaixo para obter uma lista detalhada dos recursos do IIS 7.0 disponíveis nessas Edições.

## Edições do Windows Server 2008

Com o Windows Server 2008, o IIS 7.0 está pronto para implantação completa de aplicativos Web: todos os recursos, incluindo administração remota, estão disponíveis e, claro, não há nenhuma limitação de execução de solicitação.

Confira o Resumo de Recursos abaixo para obter uma lista detalhada dos recursos do IIS 7 disponíveis nessas Edições.

## Matriz de recursos do IIS 7.0 Vista Edition

| Nomes de exibição/hierarquia | | | | | | Nomes de atualização de pacote | | | | | Servidor | Pro | Premium | Basic &Starter |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| **Serviços de Informações da Internet** | | | | | | IIS-WebServerRole | | | | | Disponível | Disponível | Disponível | Disponível |
|  | **World Wide Web Services** | | | | | IIS-WebServer | | | | | Default | Default | Default | Default |
|  |  | **Recursos http comuns** | | | | IIS-CommonHttpFeatures | | | | | Default | Default | Default | Default |
|  |  |  | **Conteúdo estático** | | | IIS-ConteúdoEstático | | | | | Default | Default | Default | N/A |
|  |  |  | **Documento Padrão** | | | IIS-DefaultDocument | | | | | Default | Default | Default | N/A |
|  |  |  | **Navegação no Diretório** | | | IIS-DirectoryBrowsing | | | | | Default | Default | Default | N/A |
|  |  |  | **Erros HTTP** | | | IIS-HttpErrors | | | | | Default | Default | Default | Default |
|  |  |  | **Redirecionamento HTTP** | | | IIS-HttpRedirect | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  | **Recursos de desenvolvimento de aplicativos** | | | | IIS-DesenvolvimentoDeAplicações | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  |  | **ASP.NET** | | | IIS-ASPNET | | | | | Disponível | Disponível | Disponível | N/A |
|  |  |  | **Extensibilidade do .NET** | | | IIS-NetFxExtensibility | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  |  | **ASP** | | | IIS-ASP | | | | | Disponível | Disponível | Disponível | N/A |
|  |  |  | **CGI** | | | IIS-CGI | | | | | Disponível | Disponível | Disponível | N/A |
|  |  |  | **Extensões ISAPI** | | | IIS-ISAPIExtensions | | | | | Disponível | Disponível | Disponível | N/A |
|  |  |  | **Filtros ISAPI** | | | IIS-ISAPIFilter | | | | | Disponível | Disponível | Disponível | N/A |
|  |  |  | **Inclusões do lado do servidor** | | | IIS-ServerSideInclude | | | | | Disponível | Disponível | Disponível | N/A |
|  |  | **Manutenção e diagnóstico** | | | | IIS-HealthAndDiagnostics | | | | | Default | Default | Default | Default |
|  |  |  | **Registro de HTTP** | | | IIS-HTTPLogging | | | | | Default | Default | Default | Default |
|  |  |  | **Ferramentas de registro em log** | | | IIS-Bibliotecas de Registro | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  |  | **Monitor de Solicitações** | | | IIS-Monitor de Solicitações | | | | | Default | Default | Default | Default |
|  |  |  | **Rastreamento** | | | IIS-HttpTracing | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  |  | **Registro em log personalizado** | | | IIS-CustomLogging | | | | | Disponível | Disponível | Disponível | N/A |
|  |  |  | **Registro de ODBC** | | | IIS-ODBCLogging | | | | | Disponível | Disponível | N/A | N/A |
|  |  | **Security** | | | | IIS-Security | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  |  | **Autenticação básica** | | | IIS-BasicAuthentication | | | | | Disponível | Disponível | Disponível | N/A |
|  |  |  | **Autenticação do Windows** | | | IIS-WindowsAuthentication | | | | | Disponível | Disponível | N/A | N/A |
|  |  |  | **Autenticação Digest** | | | IIS-DigestAuthentication | | | | | Disponível | Disponível | N/A | N/A |
|  |  |  | **Autenticação de Mapeamento de Certificado de Cliente** | | | IIS-ClientCertificateMappingAuthentication | | | | | Disponível | Disponível | N/A | N/A |
|  |  |  | **Autenticação de Mapeamento de Certificado de Cliente IIS** | | | IIS-IISCertificateMappingAuthentication | | | | | Disponível | Disponível | N/A | N/A |
|  |  |  | **Autorização de URL** | | | IIS-URLAuthorization | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  |  | **Filtragem de Solicitações** | | | IIS-RequestFiltering | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  |  | **Segurança de IP** | | | IIS-IPSecurity | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  | **Recursos de desempenho** | | | | Desempenho do IIS | | | | | Default | Default | Default | Disponível |
|  |  |  | **Compressão de Conteúdo Estático** | | | IIS-HttpCompressionStatic | | | | | Default | Default | Default | N/A |
|  |  |  | **HTTP Compressão Dinâmica** | | | IIS-HttpCompressionDynamic | | | | | Disponível | Disponível | Disponível | Disponível |
|  | **Ferramentas de Gerenciamento da Web** | | | | | IIS-WebServerManagementTools | | | | | Default | Default | Default | Default |
|  |  | | **console de gerenciamento do IIS** | | | IIS-ManagementConsole | | | | | Default | Default | Default | N/A |
|  |  | | **Scripts e Ferramentas de Gerenciamento do IIS** | | | IIS-ManagementScriptingTools | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  | | **Serviço de Gerenciamento do IIS** | | | IIS-ManagementService | | | | | Disponível | Disponível | Disponível | N/A |
|  |  | | **Compatibilidade de gerenciamento do IIS 6** | | | IIS-IIS6ManagementCompatibility | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  | |  | | **Compatibilidade do IIS Metabase e IIS 6** | IIS-Metabase | | | | | Disponível | Disponível | Disponível | Disponível |
|  |  | |  | | **Compatibilidade de WMI do IIS 6** | IIS-WMICompatibility | | | | | Disponível | Disponível | Disponível | N/A |
|  |  | |  | | **Ferramentas de script do IIS 6** | IIS-LegacyScripts | | | | | Disponível | Disponível | Disponível | N/A |
|  |  | |  | | **Console de gerenciamento do IIS 6** | IIS-LegacySnapIn | | | | | Disponível | Disponível | Disponível | N/A |
|  | **Serviço de Publicação FTP** | | | | | IIS-FTPPublishingService | | | | | Disponível | Disponível | N/A | N/A |
|  |  | | | | **Servidor FTP** | IIS-FTPServer | | | | | Disponível | Disponível | N/A | N/A |
|  |  | | | | **Console de Gerenciamento de FTP** | IIS-FTPManagement | | | | | Disponível | Disponível | N/A | N/A |
| **Serviço de Ativação do Windows** | | | | | | WAS-WindowsActivationService | | | | | Disponível | Disponível | Disponível | Disponível |
|  | | | | **Modelo de processo** | | WAS-ProcessModel | | | | | Default | Default | Default | Default |
|  | | | | **Ambiente do .NET** | | WAS-NetFxEnvironment | | | | | Disponível | Disponível | Disponível | Disponível |
|  | | | | **APIs de configuração** | | WAS-ConfigurationAPI | | | | | Disponível | Disponível | Disponível | Disponível |
| **Limite de execução de solicitação** | | | | | |  | | | | | Unlimited | 10 | 3 | 3 |

## Resumo

Neste artigo, examinamos as diferenças no IIS 7.0 nas Edições Windows Vista e Server 2008.

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
  2026-03-27
