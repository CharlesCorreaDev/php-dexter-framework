# Configuração compartilhada com o IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/shared-configuration_264

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

# Configuração compartilhada com o IIS 7

Comentários

## Introdução

A Internet muda as maneiras pelas quais as empresas lidam com seus negócios diários e como competem no marketplace. Com o advento de novas tecnologias Web e um aumento no número de clientes acessando recursos disponíveis por meio da Web, há uma necessidade urgente de melhorar a escalabilidade, a disponibilidade, a confiabilidade e a capacidade de gerenciamento de aplicativos. Os aplicativos devem contar com sistemas que ofereçam alta disponibilidade, maior taxa de transferência de solicitações, aumento das transações simultâneas de usuários e melhor retorno sobre o investimento, como uma qualidade de serviço superior em relação a sistemas concorrentes.

Os farms web - clusters de servidores - tornaram-se um padrão para ajudar a fornecer aplicativos altamente escalonáveis, disponíveis e gerenciáveis distribuindo carga. Mais especificamente, esses atributos de aplicativo são os principais motivos por trás dos farms da Web e do balanceamento de carga. Usando um servidor Web, uma organização pode oferecer uma maneira escalável de aumentar a capacidade da base de usuários que acessam o aplicativo e seus recursos simultaneamente.

O cluster do servidor fornece disponibilidade aprimorada, fazendo com que vários servidores distribuam a carga. O cluster também é dimensionado melhor para um número maior de clientes em um determinado momento. Por fim, o cluster fornece uma experiência de gerenciamento aprimorada, gerenciando o provisionamento e a administração da arquitetura de fazenda de servidores Web com facilidade e sem forçar os recursos operacionais.

### Visão geral

Este artigo se concentra no recurso de configuração global centralizado compartilhado. Esse recurso ajuda a dar suporte a farms Web homogêneos em que os servidores compartilham a mesma configuração em um grupo de servidores. Usando um compartilhamento UNC, todas as alterações em um arquivo de configuração mestre central serão propagadas em diferentes servidores sem ferramentas extras ou suporte programático.

A primeira parte deste artigo descreve como usar a interface do usuário de administração do IIS 7 e acima para habilitar e usar a configuração compartilhada. A segunda parte descreve como habilitar e usar a configuração compartilhada da linha de comando.

### Não-Objetivos: O que este artigo não inclui

Vários aspectos contribuem para um ambiente de farm da Web bem-sucedido, incluindo suporte correto, capacidade de gerenciamento, acessibilidade, escalabilidade etc.

A configuração compartilhada concentra-se apenas no aspecto de gerenciamento de configuração de um farm da Web e lida com a configuração entre servidores. Há ferramentas e outros recursos que podem ajudar no gerenciamento de vários servidores, cópia de conteúdo, implantação de módulos, sincronização de binários de aplicativos, configuração de componentes de terceiros etc. Essas ferramentas, recursos e aspectos estão fora do escopo deste artigo.

Este artigo só detalha como manter a configuração usando um arquivo central entre servidores.

Portanto, observe que a configuração compartilhada permite que um servidor acesse um arquivo de configuração em um compartilhamento UNC de back-end como se fosse sua configuração local. Como resultado, quando você atualiza a configuração usando um servidor Web front-end, as atualizações são feitas para todos os outros servidores.

É importante levar em consideração outras situações, como instalar um módulo de terceiros ou adicionar configurações, e incluir propriedades que apenas um servidor pode entender e tem os binários e o esquema disponíveis para funcionar corretamente. Caso contrário, esse tipo de uso pode interromper os outros servidores.

Para evitar esse problema em farms homogêneos, desabilite a configuração compartilhada no cluster, atualize o arquivo applicationHost local para que ele espelha o arquivo remoto, implante e atualize módulos e a configuração em um único servidor e habilite novamente a configuração compartilhada nesse servidor. Em seguida, você pode implantar e atualizar os binários e módulos no restante dos servidores antes de habilitar a configuração compartilhada novamente.

### Ambientes de domínio e não de domínio

Alguns administradores implantam clusters de servidor Web em um ambiente de domínio, enquanto outros implantam em um grupo de trabalho (não domínio). Este artigo aborda os dois cenários e aponta as diferenças e as limitações. É recomendável que você configure o IIS em um cluster em um domínio, com a ajuda e a segurança que o Active Directory fornece usando um controlador de domínio.

## Pré-requisitos

Você deve concluir as seguintes etapas na ordem:

1. Instale o IIS em seu servidor, que será chamado de Servidor Web ao longo deste artigo.
2. Verifique o acesso a um segundo servidor, que será chamado de Servidor de Arquivos ao longo deste artigo. O Servidor de Arquivos abrigará o compartilhamento para configuração e conteúdo básico, que pode ser acessado usando UNC.
3. Cada etapa deste artigo pressupõe que a etapa anterior foi concluída. Execute todas as etapas em ordem.
4. Para algumas etapas, há uma etapa equivalente que pode ser feita usando a interface do usuário. Execute apenas um tipo de etapa, a menos que especificado o contrário.

## Configuração centralizada

A interface do usuário de administração do IIS inclui suporte para configurar o redirecionamento de configuração e exportar arquivos de configuração e chaves de criptografia necessárias para um caminho especificado.

### Para exportar arquivos e configurar o redirecionamento das configurações usando a interface do usuário

1. Abra o Gerenciador do IIS.
2. No modo de exibição de árvore, selecione a conexão do servidor para a qual você deseja configurar o redirecionamento de configuração.
3. Clique duas vezes em **Configuração Compartilhada**.  
   [![Captura de tela do I S Manager com o ícone de Configuração Compartilhada selecionado.](shared-configuration_264/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/shared-configuration_264/_static/image1.jpg)
4. No painel **Ações** , clique em **Exportar Configuração...** para exportar os arquivos de configuração necessários do servidor local para outro local (por exemplo, um compartilhamento UNC).  
   [![Captura de tela do painel Ações na Configuração Compartilhada com o item ](shared-configuration_264/_static/image4.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/shared-configuration_264/_static/image3.jpg)
5. Na caixa de diálogo **Exportar Configuração** , insira o caminho para o qual você deseja exportar os arquivos. Insira uma senha para proteger as chaves de criptografia que também são exportadas. Clique **em OK** para exportar os arquivos de configuração e as chaves de criptografia protegidas por senha.  
   [![Captura de tela da caixa de diálogo Exportar Configuração com campos para a senha local de configuração e chaves de criptografia exibidas.](shared-configuration_264/_static/image6.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/shared-configuration_264/_static/image5.jpg)
6. Marque a caixa **de seleção Habilitar configuração compartilhada** para habilitar o redirecionamento de configuração.  
   [![Captura de tela da caixa de diálogo Configuração Compartilhada com Habilitar Configuração Compartilhada realçada.](shared-configuration_264/_static/image8.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/shared-configuration_264/_static/image7.jpg)
7. Especifique o caminho onde as chaves de configuração e criptografia estão localizadas e especifique as credenciais a serem usadas para acessar esse caminho. Clique **em Conectar como...** e insira as credenciais.  
   [![Captura de tela da caixa de diálogo Configuração Compartilhada com credenciais inseridas para nome de usuário e senha.](shared-configuration_264/_static/image10.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/shared-configuration_264/_static/image9.jpg)
8. Clique em **Aplicar** para salvar as configurações. Na caixa de diálogo **Configuração Compartilhada** , insira a senha especificada para proteger as chaves de criptografia.  
   [![Captura de tela da caixa de diálogo Configuração Compartilhada exibindo o campo para inserir a senha da chave de criptografia.](shared-configuration_264/_static/image12.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/shared-configuration_264/_static/image11.jpg)
9. Clique **em OK** para concluir a configuração de redirecionamento.

As etapas acima descrevem como exportar a configuração e ativar a configuração centralizada. No entanto, você só precisa exportar a configuração uma vez. Execute as etapas de 6 a 9 em cada servidor subsequente que usará a configuração centralizada.

### Anotações sobre como usar a interface do usuário

Ao configurar o redirecionamento de configuração, espera-se que os arquivos exportados tenham sido exportados usando a interface do usuário. Isso ocorre porque a interface do usuário exporta e importa itens como as chaves de criptografia protegidas por senha usando seu próprio formato personalizado.

Por exemplo, se você copiou manualmente os arquivos administration.config e applicationHost.config para um compartilhamento e, em seguida, exportou manualmente as chaves de criptografia, não poderá usar a interface do usuário para configurar o redirecionamento de configuração para apontar para esses arquivos. Isso ocorre porque as chaves de criptografia exportadas não estariam no formato exigido pela interface do usuário.

## Prompt de comando

Ao longo do restante deste artigo, você deve usar um prompt de comando para executar determinados comandos. É recomendável que você use um prompt de comando com direitos de usuário elevados, pois determinados comandos não funcionarão se você executar um prompt de comando normal.

### Para abrir um prompt de comando com direitos de usuário elevados

1. Clique em **Iniciar**.
2. Clique em **Todos os Programas**.
3. Clique **em Acessórios**.
4. Clique com o botão direito **do mouse no Prompt de Comando** e selecione **Executar como administrador**.
5. Siga as instruções em qualquer caixa de diálogo que aparecer.

## Fazendo backup do arquivo de applicationHost.config atual

Ao tentar novos recursos ou alterar várias configurações, é uma boa prática fazer backup do arquivo de applicationHost.config atual.

### Para fazer backup do arquivo applicationHost.config

1. Abra um prompt de comando.
2. Navegue até o diretório do IIS, que está localizado `%WINDIR%\System32\InetSrv` por padrão. Os arquivos de configuração são armazenados no diretório InetSrv\Config. Use a ferramenta AppCmd para criar um objeto de backup e fazer backup do arquivo applicationHost.config executando o seguinte comando:

   ```
   cd /d %windir%\system32\inetsrv
   appcmd add backup centralConfigBackup
   ```

   Observação

   A ferramenta AppCmd reside no diretório InetSrv. Você deve acessar a ferramenta desse diretório, a menos que o caminho da ferramenta seja adicionado às variáveis de ambiente do sistema.
3. Verifique se o objeto de backup, que inclui o arquivo applicationHost.config e o arquivo de metabase herdado para SMTP e outras configurações de servidor não Web, está presente executando o seguinte comando:

   ```
   appcmd list backup
   ```

### Para substituir o arquivo de configuração atual pelo arquivo de backup

1. Abra um prompt de comando.
2. Navegue até o diretório do IIS, que está localizado no diretório InetSrv por padrão. Restaure o objeto de arquivo de backup AppCmd executando o seguinte comando:

   ```
   cd /d %windir%\system32\inetsrv\
   appcmd restore backup centralConfigBackup
   ```

## Criando um usuário para acessar o compartilhamento UNC para configuração

Em um ambiente de domínio, um administrador deve fornecer ou criar uma conta no domínio para usar com o Active Directory. Essa conta deve ser configurada com os direitos de usuário corretos para acessar o compartilhamento UNC.

Em um ambiente que não seja de domínio, um administrador deve criar em ambos os servidores um usuário local com direitos de usuário para acessar o conteúdo. O nome de usuário e a senha devem ser os mesmos em todos os servidores para funcionar nessa configuração. As etapas a seguir ajudam na criação de um usuário para acessar o compartilhamento onde está a configuração compartilhada.

### Para criar um usuário que possa ler a área de compartilhamento onde reside a configuração compartilhada (fora do domínio)

1. Abra um prompt de comando.
2. No Servidor Web (servidor front-end em que o IIS está instalado), crie um usuário chamado ConfigUser1 com a senha ConfigPass1 executando o seguinte comando:

   ```
   net user ConfigUser1 ConfigPass1 /add
   ```
3. No Servidor de Arquivos (servidor de back-end em que a configuração central residirá), crie um usuário chamado ConfigUser1 com a senha ConfigPass1 executando o seguinte comando:

```
net user ConfigUser1 ConfigPass1 /add
```

## Criando os compartilhamentos UNC para Configuração e Conteúdo Centrais

O compartilhamento UNC para configuração hospeda o arquivo applicationHost.config para todos os servidores que desejam coletar dados de configuração desse local centralizado.

### Para criar o compartilhamento UNC

1. No Servidor de Arquivos, abra um prompt de comando.
2. Navegue até a raiz da unidade. Execute o seguinte comando para criar um diretório para configuração e compartilhar este diretório, garantindo aos usuários os direitos de usuário para ler e gravar no diretório:

   ```
   md %SystemDrive%\centralconfig
   net share centralconfig$=%SystemDrive%\centralconfig /grant:Users,Change
   ```

   Observação

   Esse comando concede automaticamente direitos de usuários para o grupo de usuários neste compartilhamento. O usuário criado para o cenário que não é de domínio recebe direitos de alteração automaticamente, o que pode ser ainda mais restrito, se necessário. Para o cenário de domínio, o usuário deve ter os direitos de usuário definidos explicitamente para acessar o compartilhamento ou ser adicionado ao grupo de usuários no sistema.
3. Cenário de não domínio: para aumentar a segurança do compartilhamento, você pode substituir os usuários, alterar parte da opção /grant pelo ConfigUser1, alterar parâmetros. Somente o usuário especificado terá acesso ao compartilhamento.
4. Cenário de domínio: para aumentar a segurança do compartilhamento, você pode substituir os usuários, alterar parte da opção /grant pelo domínio\usuário, alterar parâmetros. Somente o usuário especificado terá acesso remoto ao compartilhamento.

   Observação

   Os direitos de usuário em um compartilhamento são uma união entre os direitos de usuário do sistema de arquivos remoto e local. Você deve definir os direitos de usuário apropriados para o diretório de uma conta de domínio para poder ler o compartilhamento de configuração com êxito.

## Atribuição de direitos de usuário às contas dos compartilhamentos UNC que hospedam a configuração centralizada e o conteúdo.

Você deve garantir que a conta usada para acessar a configuração tenha os direitos de usuário apropriados. Essa conta é usada pelo IIS para acessar o compartilhamento UNC da mesma maneira que acessa o conteúdo quando um diretório virtual é mapeado para um compartilhamento UNC. Os direitos de usuário de leitura dessa conta são úteis somente ao acessar o compartilhamento. Depois desse ponto, sempre que o IIS lê o arquivo de configuração, ele volta para a identidade que o chamador tem: a API, a ferramenta de administração que está sendo usada ou o usuário que está conectado nesse momento.

Observação

A conta ConfigUser1 - ou a conta de domínio equivalente usada para ler a configuração - não é a mesma que a conta usada para gravar a configuração. Não é necessário que estas contas tenham direitos de gravação de usuário no arquivo de configuração ou no compartilhamento.

### Para atribuir direitos de usuário às contas do compartilhamento UNC (domínio)

1. Se a conta de domínio fizer parte do grupo de usuários local e os usuários receberem acesso quando o compartilhamento foi criado, você poderá ignorar as próximas etapas para a configuração do domínio. No entanto, se a conta de domínio para acessar o compartilhamento de arquivos local não fizer parte de nenhum grupo de usuários local, você deverá executar o comando para conceder direitos de usuário.
2. No Servidor de Arquivos, abra um prompt de comando.
3. Forneça direitos de usuário à conta de domínio para ler o diretório em que a configuração é armazenada executando o seguinte comando:

```
icacls %SystemDrive%\centralconfig\ /grant domain\user:R
```

### Para adicionar o usuário UNC (tanto de fora quanto de dentro do domínio)

Para cenários de domínio e não domínio, o nome de usuário deve incluir a configuração de tarefas em lote de logon. Essa não é uma configuração padrão no Windows Servers® 2008; você deve adicioná-lo manualmente ao servidor Web.

1. Clique em **Iniciar**. Clique **em Ferramentas Administrativas** e selecione **Política de Segurança Local**.
2. Em **Políticas Locais**, selecione **Atribuições de Direitos do Usuário**.
3. Clique duas vezes **em Fazer logon como um trabalho em lote** e adicione o usuário UNC que você criou.

## Redirecionando a configuração

### Introdução

Agora que você concluiu as etapas anteriores, o servidor Web está funcional e o servidor Web front-end deve estar servindo o Site Padrão usando o endereço de loopback localhost.

Agora você pode mover a configuração para um local central. Isso permite que você declare um arquivo como o arquivo mestre e salve-o em um compartilhamento UNC para a configuração de vários servidores. Alterar esse arquivo uma vez provisionará e atualizará todas as configurações de servidor de uma só vez.

### Para armazenar a configuração em um compartilhamento UNC

1. Copie os arquivos **applicationHost.config** e **administration.config** do `%windir%\system32\inetsrv\config` diretório no servidor Web front-end para compartilhar no servidor de arquivos de back-end. Se a conta de usuário atualmente conectada tiver permissão de gravação no compartilhamento de back-end, é possível colocar o arquivo no diretório. Caso contrário, você deve autenticar a conta de usuário no back-end para concluir esta etapa.
2. Acesse o arquivo XML redirection.config existente no diretório de configuração do servidor front-end:

   - Use o Windows Explorer para navegar até `%windir%\system32\inetsrv\config`.
   - Abra o arquivo redirection.config. Esse arquivo e seu conteúdo são criados quando o servidor Web é configurado. Ferramentas e APIs podem acessar esse arquivo para determinar se esse recurso está habilitado ou não.
3. Abra o arquivo redirection.config. Defina a configuração a seguir com o nome de servidor, o nome de usuário e a senha corretos para seu ambiente.

   ```
   <configuration> 
       <configSections> 
           <section name="configurationRedirection" /> 
       </configSections> 
       <!--password is ConfigPass1 or domainPassword-->
       <configurationRedirection enabled="true" path="\\machinename\centralconfig$\" userName="ConfigUser1 or domain\user" password="" /> 
   </configuration>
   ```
4. Salve seu arquivo de redirection.config. Você pode acessar os sites novamente, mas a configuração agora está armazenada em um compartilhamento UNC.

## Testar a configuração

Com a configuração sendo referenciada do back-end, há dois cenários principais para os quais esse recurso foi projetado. Você pode atualizar a configuração nos servidores Web front-end de duas maneiras:

1. Você pode editar o arquivo applicationHost.config diretamente no compartilhamento de arquivos. Depois que isso for feito, as notificações de alteração ocorrerão e os servidores Web receberão as alterações no arquivo.
2. Você pode adicionar um segundo arquivo applicationHost.config no compartilhamento de arquivos de back-end e alterar o arquivo redirection.config do servidor Web para apontar para a nova versão do arquivo. Isso é útil para fins de reversão ou implantações em etapas.

## Resumo

Este artigo introduziu o novo recurso de configuração centralizada. Esse recurso permite que os administradores que têm clusters homogêneos em um ambiente de farm da Web configurem e implantem uma configuração para todos os servidores de maneira direta.

Depois que o recurso é configurado, se uma alteração é feita no arquivo no compartilhamento UNC ou um servidor é redirecionado para outro local, as alterações são coletadas imediatamente pelo servidor Web. Somente as alterações globais que afetam vários sites e aplicativos farão com que eles reciclem, mas se forem feitas alterações em um escopo localizado, o restante dos sites e aplicativos não será reiniciado.

## Apêndice 1: Acessando o arquivo Redirection.config programmaticamente para ler os valores

Esta etapa fornece uma amostra de como acessar o arquivo redirection.config programaticamente aproveitando a nova API COM AHADMIN. Use a API COM do AHADMIN para implementar essa API a partir de código nativo ou de script e código gerenciado.

### Para ler os valores programaticamente

1. Crie um arquivo de texto e salve-o com a extensão .js. O script a seguir fornece um exemplo de como ler o atributo habilitado, o nome do servidor, o nome de usuário e a senha para seu ambiente:

   ```
   try
   {
     var config = WScript.CreateObject( "Microsoft.ApplicationHost.AdminManager" );
     var section = config.GetAdminSection( "configurationRedirection", "MACHINE/REDIRECTION" );

     WScript.Echo( "Current redirection:" );
     WScript.Echo( "enabled = " + section.Properties.Item( "enabled" ).Value );
     WScript.Echo( "path = " + section.Properties.Item( "path" ).Value );
     WScript.Echo( "user = " + section.Properties.Item( "userName" ).Value );
     WScript.Echo( "pass = " + section.Properties.Item( "password" ).Value );
   }
   catch(e)
   {
     WScript.Echo(e.number);
     WScript.Echo(e.description);
   }
   ```
2. Salve seu arquivo de redirection.js. Agora você pode executar esse arquivo em um prompt de comando devido ao WSH (Host de Script do Windows).

## Apêndice 2: Acessando o arquivo redirection.config programaticamente para gravar os valores

Esta etapa fornece uma amostra de como acessar o arquivo redirection.config programaticamente aproveitando a nova API COM AHADMIN. Use esta API a partir de código nativo ou de script e código gerenciado a partir de seu objeto COM.

### Para gravar os valores programaticamente

1. Crie um arquivo de texto e salve-o com a extensão .js. O script a seguir fornece um exemplo de como gravar o atributo habilitado, o nome do servidor, o nome de usuário e a senha para seu ambiente:

   ```
   try
   {
       var config = WScript.CreateObject( "Microsoft.ApplicationHost.WritableAdminManager" );
     config.CommitPath = "MACHINE/REDIRECTION";
       var section = config.GetAdminSection( "configurationRedirection","MACHINE/REDIRECTION" );
     section.Properties.Item( "enabled" ).Value = true;
     section.Properties.Item( "path" ).Value = "\\\\somemachine\\sharefile://folder/";
     section.Properties.Item( "userName" ).Value = "testuser";
     section.Properties.Item( "password" ).Value = "testuser";
     config.CommitChanges();
   }
   catch(e)
   {
     WScript.Echo(e.number);
     WScript.Echo(e.description);
   }
   ```
2. Salve seu arquivo de redirection.js.
3. Agora você pode executar esse arquivo em um prompt de comando devido ao WSH (Host de Script do Windows).

## Apêndice 3: Lidar com propriedades criptografadas específicas do computador

Por padrão, o IIS inclui dois provedores principais para proteger propriedades. Esses provedores estão localizados na seção de configuração configProtectedData do <arquivo applicationHost.config e são definidos no >elemento providers<.>

O AesProvider é específico para lidar com a criptografia e a descriptografia de propriedades que estão na seção system.webServer.

O IISWASOnlyRsaProvider é específico para lidar com criptografia e descriptografia para propriedades que estão na seção system.applicationHost.

Essas chaves estão nos contêineres de chaves iisConfigurationKey e iisWasKey e são específicas do computador. Em um cenário de farm da Web, se a criptografia for necessária, uma chave de um computador - geralmente aquela que criou o arquivo applicationHost.config - será exportada e trazida para os outros computadores para que as propriedades seguras possam ser descriptografadas e usadas pelo servidor Web.

### Steps

1. Abra um prompt de comando. Navegue até o diretório framework, que está localizado `%windir%\Microsoft.NET\Framework\v2.0.50727\` por padrão.

   Observação

   Para referência, as chaves de computador do sistema estão localizadas em **%ALLUSERSPROFILE%\Microsoft\Crypto\RSA\MachineKeys\**
2. Use a ferramenta aspnet\_regiis para exportar a chave. O comando para transferir a chave de configuração é indicado abaixo. O comutador px identifica que você deseja exportar um par de chaves RSA. A opção pri identifica que você também deseja incluir a chave privada e pública.

   Essa identificação de comutador é necessária para fazer criptografia e descriptografia; caso contrário, você só pode criptografar dados com a chave exportada. O parâmetro após o **-px** é o nome do contêiner de chave a ser exportado. Nesse caso, é o contêiner de chave "iisConfigurationKey". O outro contêiner de chave que o IIS usa é o contêiner de chaves "iisWasKey".

   ```
   aspnet_regiis -px "iisConfigurationKey" "D:\iisConfigurationKey.xml" -pri
   ```
3. Depois que a exportação for concluída com êxito, copie o arquivo XML para o outro computador no cluster para se preparar para importá-lo para lá.
4. Navegue até o diretório do Framework e use a ferramenta aspnet\_regiis para importar a chave do arquivo XML. O comando para finalizar a transferência para a chave é indicado abaixo.

   O parâmetro após o **-pi** é o nome do contêiner de chave a ser importado. Nesse caso, é o contêiner de chaves "iisConfigurationKey". O outro contêiner de chave que o IIS usa é o contêiner de chaves "iisWasKey".

   ```
   aspnet_regiis -pi "iisConfigurationKey" "D:\iisConfigurationKey.xml"
   ```

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
