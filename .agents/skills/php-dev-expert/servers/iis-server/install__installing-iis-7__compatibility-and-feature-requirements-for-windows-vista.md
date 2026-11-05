# Compatibilidade e requisitos de recursos para o Windows Vista | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/install/installing-iis-7/compatibility-and-feature-requirements-for-windows-vista

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

# Compatibilidade e requisitos de recursos para o Windows Vista

Comentários

por [Tobin Titus](https://github.com/tobint)

## Introdução

Os Serviços de Informações da Internet 7.0 (IIS 7.0) e acima são a plataforma de servidor Web para o sistema operacional Windows Vista™. O IIS 7.0 e superior apresenta muitas alterações em relação às versões anteriores do IIS. Essas alterações podem afetar a maneira como os usuários interagem com o IIS porque as inovações (algumas causando alterações significativas) podem não ser óbvias para o usuário ou porque o IIS 7.0 e superior eliminaram recursos que os usuários de versões anteriores podem esperar encontrar.

## Alterações interruptivas no IIS 7.0 e superior

Esta seção descreve as alterações significativas conhecidas no IIS 7.0 e posteriores.

### Migrando aplicativos ou ferramentas que exigem a metabase

As versões anteriores do IIS usavam a metabase para configurar servidores Web e sites, enquanto o IIS 7.0 e superior usam um arquivo de configuração XML para definir essas configurações. Embora a metabase não seja mais usada para configurar o IIS 7.0 e superior, um recurso de compatibilidade de metabase está disponível para tornar o IIS 7.0 e superior compatível com APIs que dependem da metabase. Esse recurso dá suporte à interface ABO (Admin Base Objects) (também conhecida como IMSAdminBase), ADSI (Interfaces de Serviço do Active Directory) e aos provedores WMI criados com base no ABO no IIS 6.0.

Por padrão, o IIS 7.0 e superior não instala o recurso de compatibilidade de metabase.

### Considerações sobre compatibilidade de metabase

Você deve estar ciente dos seguintes problemas relacionados à metabase:

- O IIS 7.0 e posteriores usam um novo esquema de configuração para armazenar e salvar as configurações.
- A metabase não faz parte desse novo esquema de configuração.
- O recurso de compatibilidade de metabase fornece acesso básico ao novo repositório de configuração por meio das APIs e ferramentas de metabase existentes, incluindo ADSI e WMI.
- Não há suporte para alguns recursos de versões anteriores do IIS.

Para obter mais informações, consulte Limitações de Compatibilidade em IIS.NET.

## Problemas de instalação do IIS 7.0 e acima

A instalação padrão do IIS 7.0 e superior foi alterada significativamente. As instalações automatizadas também foram alteradas.

### Instalação padrão do Windows Vista

O IIS não está instalado no Windows Vista por padrão. A instalação padrão do IIS 7.0 e superior fornece um servidor Web de volume mínimo que dá suporte à autenticação anônima e serve arquivos estáticos. Recursos e funcionalidades adicionais, como aqueles que adicionam suporte ao desenvolvimento da Web, por exemplo, podem ser explicitamente selecionados durante a instalação.

Para obter mais informações sobre como instalar o IIS no Windows Vista, consulte [Instalar o IIS 7.0 e superior no Windows Vista](install__installing-iis-7__installing-iis-on-windows-vista-and-windows-7.md) em IIS.NET. Para obter uma lista completa de recursos para cada adição do Windows Vista, consulte o artigo [sobre recursos do IIS 7.0 e Acima e Edições vista](install__installing-iis-7__iis-features-and-vista-editions.md) em IIS.net.

### Instalação automatizada do IIS

Para obter mais informações sobre a instalação automatizada, consulte [Usando a Instalação Sem Intervenção para Instalar o IIS 7.0 e Superior](install__installing-iis-7__using-unattended-setup-to-install-iis.md) em IIS.NET e o [Guia do Usuário do WAIK (Kit de Instalação Automatizada do Windows) para Windows Vista](https://go.microsoft.com/fwlink/?LinkId=63893) no site da Microsoft.

### Alterando o local da raiz do site durante a instalação

A configuração do IIS 7.0 e superior não redireciona a pasta \inetpub, que sempre estará instalada em %SysDrive%\inetpub. Depois de instalar o IIS, é claro, você pode mover \inetpub e alterar o site padrão para apontar para esse novo local.

## Migrando aplicativos ASP.NET para o IIS 7.0 e superior

O IIS 7.0 e superior integra o modelo de extensibilidade ASP.NET runtime com o servidor Web principal. Essa integração permite que os desenvolvedores estendam o servidor IIS usando a potência do ASP.NET 2.0 e do .NET Framework, em vez de usar as APIs do IIS C++ menos robustas. Os aplicativos ASP.NET existentes também se beneficiam imediatamente de uma integração mais rigorosa, sendo capazes de usar recursos de ASP.NET existentes, como Autenticação de Formulários, Funções e Cache de Saída para todos os tipos de conteúdo.

Para obter mais informações sobre a integração ASP.NET no IIS e sobre a migração de aplicativos existentes, consulte ASP.NET Integração com o IIS 7.0 e Superior no IIS.NET. Para obter mais informações sobre alterações de compatibilidade associadas ao ASP.NET, consulte [Atualizando aplicativos ASP.NET para o IIS 7: configuração dos aplicativos após a atualização e diferenças entre o modo integrado do IIS 7.0 e o modo ISAPI](application-frameworks__building-and-running-aspnet-applications__upgrading-aspnet-11-to-iis-on-windows-vista-and-windows-server-2008.md) no site ASP.NET.

## Usando o Snap-in do MMC do IIS 6.0 com o IIS 7.0 e Superior

O snap-in do IIS 6.0 MMC, Gerenciador do IIS 6.0, está disponível no Windows Vista. Use o Gerenciador do IIS 6.0 para gerenciamento remoto de servidores Web do IIS 6.0 ou sites de um servidor Web IIS 7.0 e superior. Você não pode usar o Gerenciador do IIS 6.0 ou o IIS 7.0 e superior para administração remota do IIS 7.0 e de sites ou servidores Web acima.

Você deve usar o Gerenciador do IIS 6.0 para gerenciar sites FTP em servidores remotos do IIS 6.0 e no Windows Vista. O snap-in do IIS 7.0 e acima do MMC não inclui um recurso de gerenciamento de FTP.

## Snap-ins MMC existentes para IIS 6.0

Os snap-ins do MMC existentes não funcionam com o IIS 7.0 e o Gerenciador de Servidores acima. Por exemplo, no IIS 7.0 e superior, você não pode usar a extensão de snap-in ASP.NET introduzida no IIS 6.0. Felizmente, a ferramenta de administração do IIS 7.0 e superior permite que você defina a maioria das configurações de ASP.NET por meio da interface do usuário.

Para obter mais informações sobre como você pode estender a interface do usuário do IIS 7.0 e superior, consulte [Criando um módulo de interface do usuário simples](https://go.microsoft.com/fwlink/?LinkId=78491) e [Exemplo de Extensibilidade de Ponta a Ponta no IIS 7.0 e Superior](https://go.microsoft.com/fwlink/?LinkId=78492) em IIS.NET.

## Falhas de banco de dados do ASP e do Microsoft Access

Os aplicativos que usam o ASP e um banco de dados do Microsoft Access falharão quando você atualizar para o Windows Vista. Você verá a seguinte mensagem de erro:

**Erro '80004005' do Mecanismo de Banco de Dados do Microsoft JET**  
**Erro não especificado**

Essa falha geralmente é um problema de permissão causado quando a identidade do processo não pode acessar o diretório temporário. No IIS 6.0, todos os processos de trabalho usaram `C:\Windows\Temp` como diretório temporário, independentemente das configurações da identidade do processo. Na verdade, como nenhum dos processos de trabalho no IIS 6.0 usou seus perfis de usuário, o Windows permitiu que todos os usuários acessassem esse diretório.

Essa configuração forçou o comportamento padrão a ser tal que todos os pools de aplicativos compartilhem o mesmo diretório temporário. O IIS 7.0 e superior oferece uma solução melhor para esse possível problema de segurança carregando o perfil do usuário para todos os pools de aplicativos. Também por padrão, o diretório temporário atualmente em uso não é gravável por ninguém além da identidade do processo, que é NetworkService.

Para resolver esse problema, altere a DACL (lista de controle de acesso discricionário) no diretório temporário NetworkService para permitir o acesso dos usuários. Essa alteração oferece o benefício de carregar um perfil de usuário enquanto você separa diretórios temporários por pool de aplicativos.

```
icacls %systemroot%\serviceprofiles\networkservice\AppData\Local\Temp /grant Users:(CI)(S,WD,AD,X)

icacls %systemroot%\serviceprofiles\networkservice\AppData\Local\Temp /grant "CREATOR OWNER":(OI)(CI)(IO)(F)
```

Esses comandos permitem que cada usuário crie arquivos e diretórios (WD = Gravar no Diretório, AD = Adicionar Diretório, X = Executar, S = Sincronizar). O usuário que cria esses arquivos e diretórios é o "CREATOR OWNER".

A ACE (entrada de controle de acesso) "CREATOR OWNER" permite a esse usuário todos os níveis de permissões com esse arquivo. Outros usuários não podem acessar esses arquivos ou diretórios porque eles não são o "PROPRIETÁRIO DO CRIADOR".

Uma solução alternativa adicional para esse problema de segurança é desabilitar a configuração loadUserProfile em uma base de pool por aplicativo. Como loadUserProfile é uma propriedade booliana em uma seção do AppPool, você pode facilmente definir essa configuração (para defaultAppPool) usando o seguinte comando:

```
%systemroot%\system32\inetsrv\appcmd set config -section:applicationPools /[name='DefaultAppPool'].processModel.loadUserProfile:false
```

## Autorização de URL

O IIS e ASP.NET usaram vários esquemas para autorização usando URLs. Uma dessas implementações é descontinuada e há diferenças importantes entre as duas implementações restantes.

A autorização de URL do IIS 6.0 foi implementada como uma extensão ISAPI. O IIS 7.0 e superior não dá suporte a essa implementação. Leia mais sobre a [Autorização de URL do IIS 6.0](get-started__whats-new-in-iis-7__changes-in-security-between-iis-60-and-iis-7-and-above.md#ssl) no site do Microsoft TechNet.

Por padrão, ASP.NET usa uma implementação da Autorização de URL que se aplica somente ao conteúdo gerenciado. Ao remover a pré-condição managedHandler do módulo de urlauthorização, você pode fazer com que ele se aplique a todo o conteúdo, mas pode haver uma penalidade de desempenho. Leia mais sobre [ASP.NET autorização de URL](https://learn.microsoft.com/pt-br/previous-versions/aspnet/wce3kxhd(v=vs.100)) no site do MSDN.

Por padrão, o IIS 7.0 e superior usa uma implementação de Autorização de URL que se aplica a todo o conteúdo. Essa é a implementação recomendada de Autorização de URL no IIS 7.0 e superior. Leia mais sobre [como configurar regras de Autorização de URL do IIS](https://go.microsoft.com/fwlink/?LinkId=78496) no site do Microsoft TechNet.

## Extensões do servidor FrontPage sem suporte

No momento, não há suporte para FPSE (Extensões do FrontPage Server) no Windows Vista. Se você usar FPSE para carregar arquivos em um servidor Web, considere usar FTP com o IIS 7.0 ou superior.

Se você atualizar do Microsoft Windows XP® para o Windows Vista e já tiver o FPSE instalado, o IIS 7.0 e superior desabilita o W3SVC (World Wide Web Publishing Service). Para obter mais informações, consulte [Como atualizar o Microsoft Windows XP para o Windows Vista](manage__configuring-security__using-encryption-to-protect-passwords.md) mais adiante neste documento.

## WebDAV sem suporte

No momento, não há suporte para WebDAV (Criação Distribuída da Web e Controle de Versão) no Windows Vista. Se você usar o WebDAV para carregar arquivos em um servidor Web, considere usar FTP com o IIS 7.0 ou superior.

## NNTP sem suporte

Não há suporte para NNTP no Windows Vista.

## Não há assistente para manipular listas de confiança de certificado

Você não pode usar a interface do usuário do IIS 7.0 e superior para criar uma CTL (Lista de Confiança de Certificado). Siga estas etapas para criar uma CTL com o IIS 7.0 ou superior.

1. Use MakeCTL.exe para criar a CTL. Para obter mais informações sobre MakeCTL.exe, consulte a página [MakeCTL](https://msdn.microsoft.com/library/aa386969.aspx) no site do MSDN.

   A ferramenta MakeCTL.exe faz parte do [SDK do .NET Framework versão 1.1](https://go.microsoft.com/fwlink/?LinkId=50870). Depois de instalar o SDK, MakeCTL.exe será exibido no seguinte local:

   ```
   \Program Files\Microsoft.NET\SDK\v1.1\Bin
   ```
2. Depois de criar a CTL, você deve executar AdsUtil.vbs para atribuir o identificador CTL ao nome usado em MakeCTL.exe.

   ```
   adsutil.vbs set w3svc/1/SslCtlIdentifier <Name of CTL>
   ```

   em que *<o nome da CTL>* é o nome amigável para a CTL usada em MakeCTL.exe.
3. Execute adsUtil.vbs para definir o SslCtlStoreName.

   ```
   adsutil.vbs set w3svc/1/SslCtlStoreName CA
   ```
4. Depois de executar o AdsUtil.vbs, interrompa os serviços Web usando o seguinte comando:

   ```
   net stop HTTP /y
   ```
5. Reinicie o serviço WS3SVC usando o seguinte comando:

   ```
   net start W3SVC
   ```

## Autenticação Digest não suportada com controladores de domínio do Windows 2000 Server

Use a autenticação Digest somente se o controlador de domínio do Windows for o Microsoft Windows Server® 2003 ou o sistema operacional Microsoft Windows Server® 2008.

O IIS 6.0 introduziu a autenticação Advanced Digest, que não funciona com um controlador de domínio do servidor Microsoft Windows® 2000. Agora, essa é a única implementação da autenticação Digest disponível no IIS 7.0 e superior.

O IIS 5.x exigia um componente chamado sub-autenticação (iissuba.dll) para sua implementação da autenticação Digest. Nas versões anteriores do IIS, a sub-autenticação habilitava o IIS para gerenciar senhas, o que representava um risco à segurança. Por esse motivo, não há suporte para sub-autenticação no IIS 7.0 ou superior.

## Convlog.exe sem suporte

Essa ferramenta foi descontinuada. Considere a criação de um script logParser simples que converte arquivos de log no formato de arquivo de log NCSA. Para obter mais informações, consulte [Converter arquivos de log W3C em formato NCSA](https://go.microsoft.com/fwlink/?LinkId=78516).

## Não há mais suporte para a interface do usuário de classificação de conteúdo

O sistema de classificação de conteúdo permite que os administradores de servidores classifiquem o conteúdo com base na quantidade de violência, sexo, nudez e linguagem suja encontrada no conteúdo de um site. Essa classificação inseriu um cabeçalho de resposta na resposta HTTP, indicando o nível desses tipos de conteúdo. Embora a interface do usuário de classificação de conteúdo não esteja mais disponível, você pode inserir esses cabeçalhos de resposta manualmente usando o recurso Cabeçalhos de Resposta HTTP.

Embora não haja nenhuma interface do usuário do IIS 7.0 e superior para cabeçalhos de resposta HTTP, você ainda pode usar esse recurso editando diretamente o arquivo de configuração XML, usando WMI ou Appcmd.exe. Para obter mais informações sobre cabeçalhos de resposta HTTP, consulte [IIS 7.0 Beta: Configurando cabeçalhos de resposta HTTP no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=78497) no site do Microsoft TechCenter.

## Extensão da Ferramenta de Administração de Cluster do IIS

O suporte para clustering do IIS 4.0 e do IIS 5.x usando a Extensão da Ferramenta de Administração de Cluster do IIS (iisclex4.dll) é descontinuado. Você não poderá administrar o IIS 4.0 e o IIS 5.x usando a Ferramenta de Administração de Cluster. O IIS 7.0 e superior continua a enviar dois scripts (Clusweb.vbs e Clusftp.vbs) que podem ser conectados à Ferramenta de Administração de Cluster para monitorar alterações nos serviços FTP e W3SVC. Considere usar o Microsoft Windows Server 2003 para gerenciar clusters.

## Comando CMD do SSINC EXEC

Os comandos EXEC CMD do SSINC permitem executar um caminho de linha de comando arbitrário a partir de uma página da Web. No IIS 6.0, você precisava editar o registro para habilitar esse recurso. No entanto, no IIS 7.0 e acima, a chave do Registro que habilitou esse recurso foi removida. Use ASP.NET, ASP ou CGI para executar caminhos de linha de comando de uma página da Web.

## Credenciais de rede do Passport não têm mais suporte

As credenciais da Passport Network são um serviço de autenticação baseado em cookies. O suporte para credenciais do Passport Network não está mais integrado ao IIS. Para obter mais informações, consulte a documentação da Passport Network localizada em `http://www.passport.com`. Para acessar a documentação, você deve se registrar e obter credenciais da Passport Network.

## Não há suporte para o Conector de Dados da Internet (HTTPODBC.DLL)

O Conector de Dados da Internet é uma extensão de servidor Web que permite aos aplicativos consultar bancos de dados ODBC (Open Database Connectivity). Use ASP.NET ou ASP para consultar bancos de dados ODBC.

## Recriação da conta do Metabase

No passado, o IIS recriava contas para usuários anônimos (IUSR\_*computername*) e processos de trabalho (IWAM\_*computername*), se elas não existiam durante a inicialização do serviço IISAdmin. Isso apresenta um possível problema de segurança. O IIS 7.0 e superior usa contas que não podem ser excluídas, portanto, não há motivo para continuar o suporte à recriação da conta.

## IISRESET

O IISrestart não dá mais suporte a reinicializações de computador.

## IIS\*. Ferramentas de linha de comando do VBS

No IIS 6.0, essas ferramentas apareceram no systemroot\system32. No IIS 7.0 e superior, no entanto, as seguintes ferramentas agora estão obsoletas:

- Iisapp.vbs
- Iiscnfg.vbs
- Iisftp.vbs
- Iisftpdr.vbs
- Iisback.vbs
- Iisrepl.vbs
- Iisvdir.vbs
- Iisweb.vbs

Appcmd.exe é a principal ferramenta de linha de comando do IIS 7.0 e superior. Para obter mais informações sobre Appcmd.exe, consulte [Visão geral da Administração de Linha de Comando – Appcmd.exe](https://go.microsoft.com/fwlink/?LinkId=78510) no IIS.NET.

## Pausar Sites da Web

O IIS 5.x permitiu que os usuários pausassem um site. Um novo recurso no Windows Vista permite que os usuários pausem ou interrompam um site da mesma maneira, para que a função de pausa não seja mais incluída no IIS 7.0 ou superior.

## Extensão de Compartilhamento da Web

A Extensão de Compartilhamento da Web permitiu que os clientes criassem diretórios virtuais do Windows Explorer no IIS 6.0. Esse recurso foi preterido.

## Mapas de Imagens do lado do servidor

Mapas de imagem do lado do servidor dão suporte ao mapeamento de imagens para navegadores cliente anteriores ao Internet Explorer 3. Não há mais suporte para imagens do lado do servidor.

## Rotador de Conteúdo ASP e Nextlink

Esses recursos foram preteridos e não estão mais disponíveis.

## Recursos configuráveis somente usando arquivos de configuração XML

A maioria dos problemas listados abaixo envolve recursos que não possuem interface do usuário do IIS 7.0 ou superior. Mesmo que não haja nenhuma interface do usuário do IIS 7.0 ou superior para um recurso específico, você ainda poderá configurá-lo; normalmente, isso é feito editando manualmente os arquivos de configuração XML.

| Recurso novo ou atualizado | Nova maneira de trabalhar com esse recurso |
| --- | --- |
| Mapeamento de certificado do cliente | Embora esse recurso não esteja na interface do usuário do IIS 7.0 ou superior, você ainda pode usar esse recurso editando diretamente o arquivo de configuração XML, usando WMI ou Appcmd.exe. Para obter mais informações sobre o Mapeamento de Certificados do Cliente, consulte [o IIS 7.0 Beta: Configurar autenticação de mapeamento de certificado do cliente](https://go.microsoft.com/fwlink/?LinkId=78498) no site do Microsoft TechCenter. |
| FTP | Embora não haja nenhuma interface do usuário do IIS 7.0 ou superior para FTP, você pode usar o MMC do IIS 6.0 para gerenciar o FTP no Windows Vista. Para obter mais informações sobre FTP, consulte [o IIS 7.0 Beta: configurar o FTP no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=78499) no site do Microsoft TechCenter. |
| Restrições de IP e domínio | Embora esse recurso não esteja na interface do usuário do IIS 7.0 ou superior, você ainda pode usar esse recurso editando diretamente o arquivo de configuração XML, usando WMI ou Appcmd.exe. Para obter mais informações sobre o IP e restrições de domínio, consulte [o IIS 7.0 Beta: configurando o acesso ao conteúdo com base no endereço IP e no nome de domínio](https://go.microsoft.com/fwlink/?LinkId=78571) no site do Microsoft TechCenter. |
| URLScan | Em vez de URLScan, considere usar a Filtragem de Solicitações para bloquear expressões. Embora não haja nenhuma interface do usuário do IIS 7.0 ou superior para URLScan, você ainda pode usar esse recurso editando diretamente o arquivo de configuração XML ou usando Appcmd.exe. Para obter mais informações sobre a Filtragem de Solicitações, consulte [o IIS 7.0 Beta: Filtrar solicitações HTTP no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=78501) no site do Microsoft TechCenter. Embora a Filtragem de Solicitações deprecie o URLScan e não o torne obsoleto, o instalador da versão 2.5 do URLScan não funciona no Windows Vista. Para contornar esse problema, copie Urlscan.dll e Urlscan.ini para o servidor Web que está executando o IIS 7.0 ou superior e configure Urlscan.dll como um filtro ISAPI global no IIS. |
| Registro | Embora não haja uma interface de usuário do IIS 7.0 ou superior para configurar logs, você ainda pode utilizar o recurso de configuração de logs editando diretamente o arquivo de configuração XML, usando WMI ou Appcmd.exe. Para obter mais informações sobre como configurar o registro em log, consulte [o IIS 7.0 Beta: Configurando o registro em log no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=78502) no site do Microsoft TechCenter. |
| Compactação HTTP | Embora esse recurso não esteja na interface do usuário do IIS 7.0 ou superior, você ainda pode usar esse recurso editando diretamente o arquivo de configuração XML, usando WMI ou Appcmd.exe. Para obter mais informações sobre como configurar a compactação HTTP, consulte [IIS 7.0 Beta: Configurando a compactação HTTP no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=78503) no site do Microsoft TechCenter. |
| Redirection | Embora não haja nenhuma interface do usuário do IIS 7.0 ou superior para configurar o redirecionamento, você ainda pode usar esse recurso editando diretamente o arquivo de configuração XML usando WMI ou Appcmd.exe. Para obter mais informações sobre como configurar o redirecionamento, consulte [o IIS 7.0 Beta: Configurando o redirecionamento no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=78504) no site do Microsoft TechCenter. |
| Rodapés de documento | Embora não haja nenhuma interface do usuário do IIS 7.0 ou superior para criar rodapés de documento, você ainda pode usar esse recurso editando diretamente o arquivo de configuração XML, usando WMI ou Appcmd.exe para alterar determinados atributos para o elemento staticContent. Para obter mais informações sobre como criar rodapés de documento, consulte [IIS 7.0 Beta: Configurando tipos MIME no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=78364) no site do Microsoft TechCenter. |
| Cabeçalhos de resposta HTTP | Embora esse recurso não esteja na interface do usuário do IIS 7.0 ou superior, você ainda pode usar esse recurso editando diretamente o arquivo de configuração XML, usando WMI ou Appcmd.exe. Para obter mais informações sobre cabeçalhos de resposta HTTP, consulte [IIS 7.0 Beta: Configurando cabeçalhos de resposta HTTP no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=78497) no site do Microsoft TechCenter. |
| Ordenando filtros ISAPI | Há uma interface do usuário do IIS 7.0 e superior para adicionar e remover filtros ISAPI, mas você não pode usá-la para solicitar filtros ISAPI. Você pode solicitar filtros ISAPI editando diretamente o arquivo de configuração XML. Para obter mais informações sobre como configurar filtros ISAPI, consulte [IIS 7.0 Beta: Configurando filtros ISAPI no IIS 7.0](https://go.microsoft.com/fwlink/?LinkId=78505) no site do Microsoft TechCenter. |

## Atualizando o Microsoft Windows XP para o Windows Vista

Ao atualizar do Microsoft Windows XP para o Windows Vista ou de um SKU do Windows Vista para outra SKU, é possível que os dados da instalação anterior do IIS possam ser perdidos ou copiados incorretamente. Se isso acontecer, nenhuma mensagem de erro será exibida, mas determinados recursos do IIS poderão não funcionar corretamente. Por esse motivo, recomendamos fazer backup das configurações do IIS antes de atualizar seu sistema operacional.

Depois que a atualização for concluída, investigue os arquivos de log para determinar se houve erros durante a instalação. Você pode encontrar os logs aqui:

```
%systemroot%\iis7.log
```

```
%systemroot%\iis7_gather.log
```

### IIS 7.0 e serviços Web acima desabilitados na atualização

Há dois problemas que podem causar a configuração do IIS 7.0 e superior para desabilitar o W3SVC (World Wide Web Publishing Service) ou o MSFTPSVC (Serviço de Publicação FTP).

### Extensões do servidor de primeira página instaladas

Se você atualizar do Microsoft Windows XP para o Windows Vista com FPSE (Extensões de Servidor de Primeira Página) instalada, a configuração do IIS 7.0 e superior desabilita o W3SVC. Isso impede o acesso não intencional a arquivos em que o FrontPage armazena metadados para seu site. O IIS 7.0 e superior não remove arquivos ou pastas do site durante uma atualização. Você deve remover ou proteger manualmente esses arquivos antes de habilitar o serviço Web.

Para obter mais informações sobre como realizar essa tarefa, consulte [O IIS 7.0 e posterior está desabilitado na atualização quando as Extensões do Servidor FrontPage foram instaladas](publish__frontpage-server-extensions__upgrade-issues-with-frontpage-server-extensions.md) no IIS.NET.

### Ferramenta de Bloqueio do IIS 7.0 e versões posteriores nunca instalada

Se você estiver atualizando do Microsoft Windows XP para o Windows Vista sem ter instalado nenhuma versão da Ferramenta de Bloqueio do IIS, a instalação do IIS desabilita w3SVC e MSFTPSVC. Isso impede a execução intencional de um servidor Web que usa configurações que não são seguras. Durante uma atualização, o IIS 7.0 e superior mantém todas as configurações e configurações anteriores do IIS. Isso pode resultar em um servidor Web menos seguro do que um servidor Web que usa as configurações padrão do Windows Vista.

Antes de habilitar esses serviços, inspecione as configurações padrão do servidor para possíveis problemas de segurança. Em particular, preste atenção a quaisquer extensões ISAPI que você possa ter migrado, mas não precise mais.

## Para habilitar W3SVC ou MSFTPSVC

Depois de lidar com os problemas mencionados acima, você deve habilitar todos os serviços do IIS 7.0 e superior que foram desabilitados na atualização.

Para habilitar os serviços, siga estas etapas:

1. No menu **Iniciar** , clique em **Painel de Controle**.
2. No **Painel de Controle**, clique em **Ferramentas Administrativas** e em **Serviços**.
3. No MMC de Serviços, clique com o botão direito do mouse no serviço e selecione **Iniciar**.

### Console de Gerenciamento do IIS 6.0 não instalado

Se você atualizar do Microsoft Windows XP para o Windows Vista e tiver o console de Gerenciamento do IIS 6.0 instalado anteriormente, mas o W3SVC não tiver sido detectado durante a instalação, o IIS 7.0 e a instalação acima não instalarão nenhum console de gerenciamento do IIS.

Presumivelmente, você estava usando este computador para gerenciar remotamente um servidor Web IIS 6.0. Para instalar o console de Gerenciamento do IIS 6.0, use o Painel de Controle no Windows Vista para ativar o **Console de Gerenciamento do IIS 6.0**.

### Servidor FTP removido

Se você atualizar do Microsoft Windows XP para o Windows Vista e tiver o FTP instalado anteriormente, mas o W3SVC não tiver sido detectado durante a instalação, o IIS 7.0 e a instalação acima não instalarão o FTP. O servidor FTP anterior não está instalado. Sua configuração de FTP é perdida.

Se você quiser usar esse computador como um servidor FTP, deverá reinstalar o serviço FTP. Para instalar o servidor FTP, use o Painel de Controle no Windows Vista para ativar o **Serviço de Publicação FTP**.

## Migração de isolamento de aplicativo

A instalação do IIS migra automaticamente aplicativos IIS 5.x para execução no Modo de Isolamento do Processo de Trabalho, que usa configurações mais conservadoras do que as versões anteriores do IIS. Após a migração, há algum potencial para problemas com o acesso. Para resolver esses problemas, atribua à identidade do processo mais privilégios NTFS do que antes, para objetos como arquivos ou diretórios.

A identidade do processo usada depende do nível de isolamento usado anteriormente no IIS5.x.

- **Configuração de Proteção de Aplicativo Low do IIS 5.x**: seu aplicativo migrado aparecerá em um pool de aplicativos chamado AppPool\_Low utilizando a identidade de processo do Network Service. Anteriormente, esse aplicativo era executado como LocalSystem, uma identidade de processo com privilégios muito mais altos.
- **Configuração de Proteção de Aplicativo IIS5.x como Médio:** seu aplicativo migrado seria exibido em um pool de aplicativos chamado AppPool\_Medium usando a identidade de processo da conta armazenada no WAMUserName para o primeiro aplicativo migrado que executou com a configuração de Médio. Por padrão, a identidade do processo foi definida como o IWAM\_*computername*, mas os usuários podem alterar essa conta. Portanto, se a conta foi alterada, o pool de aplicativos usou qualquer conta que estava sendo usada.
- **Configuração de Proteção de Aplicativo IIS5.x de Alta**: seu aplicativo migrado aparecerá em um pool de aplicativos chamado AppPool\_*applicationName*, em que *applicationName* é o valor para AppFriendlyName do seu aplicativo. A identidade do processo usada para esse pool de aplicativos é a conta específica armazenada no WAMUserName para o primeiro aplicativo migrado executado com a configuração de Elevado. Por padrão, a identidade do processo foi definida como o IWAM\_*computername*, mas os usuários podem alterar essa conta. Portanto, se a conta foi alterada, o pool de aplicativos usou qualquer conta que estava sendo usada. Aplicativos migrados com uma configuração em Alta são migrados para seus próprios pools de aplicativos.

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
