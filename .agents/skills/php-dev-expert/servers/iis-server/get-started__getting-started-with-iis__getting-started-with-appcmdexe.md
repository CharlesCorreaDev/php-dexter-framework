# Introdução ao AppCmd.exe | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/getting-started-with-iis/getting-started-with-appcmdexe

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

# Introdução ao AppCmd.exe

Comentários

por [Mike Volodarsky](https://github.com/leanserver)

## Visão geral

AppCmd.exe é a única ferramenta de linha de comando para gerenciar o IIS 7 e superior. Ele expõe todas as principais funcionalidades de gerenciamento de servidor por meio de um conjunto de objetos de gerenciamento intuitivos que podem ser manipulados da linha de comando ou de scripts.

O AppCmd permite controlar facilmente o servidor sem usar uma ferramenta de administração gráfica e automatizar rapidamente as tarefas de gerenciamento de servidor sem escrever código.

Algumas das coisas que você pode fazer com o AppCmd:

- Criar e configurar sites, aplicativos, pools de aplicativos e diretórios virtuais
- Iniciar e interromper sites e reciclar pools de aplicativos
- Listar processos de trabalho em execução e examinar solicitações em execução no momento
- Pesquisar, manipular, exportar e importar configurações do IIS e do ASP.NET

O AppCmd também permite que os administradores do servidor criem tarefas de gerenciamento avançadas simplesmente combinando vários comandos de AppCmd.exe mais simples ou reutilizando a saída da ferramenta dentro de outro programa.

Você também pode encontrar mais tópicos do AppCmd e aprender maneiras poderosas de gerenciar seu servidor por meio da linha de comando no meu blog, em <https://mvolo.com/category/appcmd/>.

## Como usar AppCmd.exe

A linha de comando AppCmd.exe é criada com base em um conjunto de objetos de gerenciamento de servidor de nível superior, como Site e Aplicativo. Esses objetos expõem métodos que podem ser usados para executar várias ações nesses objetos e instâncias de objeto expõem propriedades que podem ser inspecionadas e manipuladas.

Por exemplo, o objeto Site fornece métodos para listar, criar e excluir instâncias de site (estes são métodos padrão que estão presentes em quase todos os objetos), bem como sites de parada e inicialização. Cada instância do site, por sua vez, conterá propriedades, como o nome do site e a ID do site, que podem ser inspecionadas, pesquisadas ou definidas. A saída de cada comando é sempre uma lista de instâncias de objeto.

Observação

AppCmd.exe está localizado no `%systemroot%\system32\inetsrv\` diretório. Como ele não faz parte do PATH automaticamente, você precisa usar o caminho completo para o executável ao executar comandos como em `%systemroot%\system32\inetsrv\AppCmd.exe list sites`. Como alternativa, você pode adicionar manualmente o diretório *inetsrv* ao caminho em seu computador para que você possa acessar AppCmd.exe diretamente de qualquer local.

A ferramenta funciona executando um comando em um dos objetos de gerenciamento com suporte, com parâmetros opcionais usados para personalizar ainda mais o comportamento do comando:

```
APPCMD (command) (object-type) <identifier> < /parameter1:value1 ... >*
```

Onde `<COMMAND>` é um dos comandos suportados por `<OBJECT>`. A maioria dos objetos dá suporte a este conjunto básico de comandos:

- **LISTA** Exiba os objetos no computador. Uma ID< opcional >pode especificar um objeto exclusivo para listar ou um ou mais parâmetros podem ser especificados para corresponder às propriedades do objeto.
- **ADICIONAR** Crie um novo objeto com as propriedades de objeto especificadas a serem definidas durante a criação.
- **EXCLUIR** Exclua o objeto especificado pela <ID>.
- **DEFINIR** Defina parâmetros no objeto especificado pela <ID>.

Um objeto geralmente dá suporte a comandos adicionais, como START e STOP para o objeto Site.

Por exemplo, o conjunto atual de objetos disponíveis por meio do AppCmd é (onde `<OBJECT>` está um dos objetos de gerenciamento com suporte da ferramenta):

| Objeto | Descrição |
| --- | --- |
| Site | Administração de sites virtuais |
| Aplicativo | Administração de aplicativos |
| VDir | Administração de diretórios virtuais |
| Apppool | Administração de conjuntos de aplicações |
| Config | Administração de seções de configuração geral |
| Backup | Gerenciamento de backups de configuração de servidor |
| WP | Administração de processos de trabalho |
| Solicitação | Exibição de solicitações HTTP ativas |
| Módulo | Administração de módulos de servidor |
| Trace | Gerenciamento de logs de rastreamento do servidor |

Onde `<ID>` está o identificador específico do objeto para a instância de objeto que você deseja especificar para o comando. O formato do identificador é específico para cada tipo de objeto. Por exemplo, o objeto Site usa o nome do site, o objeto App usa o caminho do aplicativo e o objeto AppPool usou o nome do pool de aplicativos.

Onde `[ /parameter:value ]*` representa zero ou mais parâmetros para o comando. Cada comando dá suporte a um conjunto diferente de parâmetros, dependendo do objeto. Normalmente, os comandos que pesquisam objetos ou manipulam propriedades de objeto permitirão que qualquer uma das propriedades do objeto seja especificada como um parâmetro.

A própria ferramenta também dá suporte a vários parâmetros que afetam a execução geral do comando e não são específicos para nenhum dos objetos. Elas estão listadas na página de ajuda de nível superior disponível em "AppCmd.exe /?", e incluem parâmetros como **/text**, **/config** e **/xml** para controlar a saída da ferramenta e **/commit** para controlar o local das alterações de configuração.

## Obtendo ajuda

O AppCmd fornece ajuda de autodescrição que pode ser usada como referência para todos os objetos e comandos com suporte. Há três tipos de ajuda disponíveis à medida que você detalha a tarefa que deseja fazer.

### Ajuda Geral

A tela de ajuda geral mostra os objetos compatíveis com a ferramenta, bem como parâmetros de ferramenta geralmente aplicáveis. Para exibir ajuda geral:

```
APPCMD /?
```

As primeiras linhas de saída são:

```
General purpose IIS command line administration tool.
APPCMD (command) (object-type) <identifier> < /parameter1:value1 ... >

Supported object types:
       
  SITE      Administration of virtual sites
  APP       Administration of applications              

...
```

### Ajuda do objeto

A tela de ajuda do objeto mostra os comandos compatíveis com um objeto específico. Para exibir a ajuda do objeto:

```
APPCMD <OBJECT> /?
```

onde `<OBJECT>` está um dos tipos de objeto com suporte. Por exemplo, essa linha de comando exibirá ajuda para o objeto do site:

```
APPCMD site /?
```

### Ajuda de comando

A tela de ajuda de comando descreve a sintaxe de um comando e objeto específicos, incluindo os parâmetros compatíveis e exemplos de tarefas comuns. Para exibir a ajuda do comando:

```
APPCMD <COMMAND> <OBJECT> /?
```

Por exemplo, essa linha de comando exibirá ajuda para o comando LIST do objeto App:

```
APPCMD list app /?
```

## Localizando objetos com o comando LIST

O comando LIST é o comando mais versátil e tem suporte de todos os objetos. A finalidade deste comando é localizar instâncias do objeto com base nos critérios especificados. A saída desse comando é uma lista de instâncias de objeto, que você pode inspecionar exibindo suas propriedades, exportar para recriação futura em outro computador ou usar junto com outro comando para executar ações nelas.

### Listando todos os objetos

A maneira mais simples de usar o comando LIST é sem parâmetros, que simplesmente lista todas as instâncias conhecidas do objeto:

```
APPCMD list <OBJECT>
```

Por exemplo, para listar todos os sites no computador, use esta linha de comando:

```
%systemroot%\system32\inetsrv\APPCMD list sites
```

A saída será semelhante a:

```
SITE "Default Web Site" (id:1,bindings:HTTP/*:80:,state:Started)
SITE "Site1" (id:2,bindings:http/*:81:,state:Started)
SITE "Site2" (id:3,bindings:http/*:82:,state:Stopped)
```

Por padrão, cada objeto é mostrado em uma única linha, especificando seu identificador específico do objeto (como "Site Padrão") e uma ou mais propriedades importantes (como id, associações e estado).

### Listando um objeto específico

O comando LIST pode ser usado para localizar uma instância de um objeto específico nomeado usando uma linha de comando neste formulário:

```
APPCMD list <OBJECT> <ID>
```

Por exemplo, use essa linha de comando para localizar o site com uma ID exclusiva de "Site Padrão":

```
%systemroot%\system32\inetsrv\APPCMD list site "Default Web Site"
```

### Listando objetos que satisfazem uma consulta

Para localizar todas as instâncias de objeto que correspondam a critérios específicos, especifique um ou mais parâmetros que indicam valores de propriedade dos objetos a serem correspondentes. Por exemplo, use esta linha de comando para localizar todos os sites que são interrompidos:

```
%systemroot%\system32\inetsrv\APPCMD list sites /state:Stopped
```

Você pode especificar qualquer número de pares de valor de propriedade e a ferramenta garantirá que os objetos retornados atendam a todos os critérios especificados. Por exemplo, use essa linha de comando para localizar sites que estão parados e configurados para não iniciar automaticamente:

```
%systemroot%\system32\inetsrv\APPCMD list sites /serverAutoStart:false /state:Stopped
```

## Manipulando objetos com ADD, SET e DELETE

Além de LIST, a maioria dos objetos também dá suporte a comandos ADD, SET e DELETE.

### Adicionando novos objetos

O comando ADD cria uma nova instância de um objeto. Por exemplo, essa linha de comando criará um novo Site:

```
%systemroot%\system32\inetsrv\APPCMD add site /name:MyNewSite /bindings:"http/*:81:" /physicalPath:"C:\MyNewSite"
```

Dependendo do objeto, alguns parâmetros serão necessários para definir as propriedades necessárias na nova instância, e outras propriedades podem ser opcionais. Um erro será retornado se um parâmetro necessário não for especificado.

A tela de ajuda de comando indica quais parâmetros são necessários. Por exemplo, use essa linha de comando para ver quais parâmetros são necessários para adicionar um Site:

```
%systemroot%\system32\inetsrv\APPCMD add site /?
```

Leia mais sobre como criar sites, aplicativos, diretórios virtuais e pools de aplicativos com o AppCmd.

### Alterando objetos existentes

O comando SET define uma ou mais propriedades em uma instância de objeto especificada. Esse comando requer que o identificador específico do objeto seja especificado. Por exemplo, para alterar a propriedade de ID do "Site Padrão", use esta linha de comando:

```
%systemroot%\system32\inetsrv\APPCMD set site "Default Web Site" /id:200
```

Use uma forma da sintaxe de ajuda do comando para ver quais propriedades podem ser definidas em um objeto específico. Por exemplo, para ver as propriedades suportadas pelo Site Padrão, use:

```
%systemroot%\system32\inetsrv\APPCMD set site "Default Web Site" /?
```

### Excluindo objetos

O comando DELETE exclui uma instância de um objeto. Assim como SET, esse comando também requer que o identificador específico do objeto seja especificado. Por exemplo, use essa linha de comando para excluir o site chamado "MyNewSite":

```
%systemroot%\system32\inetsrv\APPCMD delete site "MyNewSite"
```

## Gerenciando backups

O AppCmd permite que você crie e restaure backups da configuração global do servidor. Você pode usá-lo para se recuperar de alterações indesejadas na configuração do servidor e retornar ao estado estável do servidor. É uma boa ideia criar um backup antes de alterar a configuração do servidor ou instalar um componente que o altera. Cada backup contém a cópia do arquivo de configuração raiz ApplicationHost.config atual, bem como outro estado relacionado em todo o servidor, incluindo a configuração de FTP e a configuração da Ferramenta de Administração do IIS.

Para criar um backup, use o comando ADD do objeto Backup:

```
%systemroot%\system32\inetsrv\APPCMD add backup
```

```
BACKUP object "20060519T172530" added
```

Isso criou um backup com um nome gerado automaticamente que representa a data e a hora do backup.

Um nome específico para o backup pode ser especificado da seguinte maneira:

```
%systemroot%\system32\inetsrv\APPCMD add backup MyBackup
```

```
BACKUP object "MyBackup" added
```

Você pode exibir uma lista de backups disponíveis usando o comando LIST do objeto Backup:

```
%systemroot%\system32\inetsrv\APPCMD list backups
```

```
BACKUP "20060519T172530"
```

```
BACKUP "MyBackup"
```

Por fim, para restaurar um backup, use o comando RESTORE com o nome do backup:

```
%systemroot%\system32\inetsrv\APPCMD restore backup "MyBackup"
```

```
Restored configuration from backup "MyBackup"
```

Restaurar um backup interrompe o servidor e restaura a configuração global para seu estado no momento em que o backup foi criado.

No Windows Server® 2008 e no Windows Vista SP1, o AppCmd também poderá trabalhar com backups de configuração periódicos feitos pelo serviço de histórico de configuração. Esses backups aparecerão na lista de backups do AppCmd e estarão disponíveis para restaurar da mesma maneira que os backups feitos manualmente por meio da ferramenta.

Para saber mais sobre como gerenciar backups de configuração com o AppCmd, consulte <http://mvolo.com/most-important-appcmd-commands-backing-up-and-restoring-iis7-configuration/>.

## Trabalhando com sites, aplicativos, diretórios virtuais e pools de aplicativos

Criar e gerenciar sites, aplicativos e diretórios virtuais são as tarefas mais comuns que os administradores enfrentam. O IIS 7 e posteriores usam uma hierarquia de contenção mais rigorosa do que as versões anteriores que funciona assim:

1. **Site da Web** Um site da Web recebe solicitações em pontos de extremidade de associação específicos definidos por endereços IP e cabeçalhos de host. Por exemplo, essa URL representa um site associado à porta 81: `http://www.mysite.com:81`.

   Um site da Web contém um ou mais aplicativos.
2. **Aplicativo** Um aplicativo é representado por seu caminho virtual dentro do namespace de URL de um site. Por exemplo, um aplicativo com um caminho virtual de "/app1" pode ser representado por esta URL: `http://www.mysite.com:81/app1`.

   Um aplicativo pertence a um pool de aplicativos.

   Um aplicativo contém um ou mais diretórios virtuais.
3. **Diretório Virtual** Um diretório virtual é representado por seu caminho virtual dentro do namespace de URL de um aplicativo. Por exemplo, um diretório virtual com um caminho virtual de "/vdir1" pode ser representado por esta URL: `http://www.mysite.com:81/app1/vdir1`.

   Um diretório virtual é mapeado para um local físico no disco.

Essa hierarquia contrasta com o IIS 6.0, em que um site pode conter uma combinação de diretórios virtuais e aplicativos, e os aplicativos são apenas diretórios virtuais especialmente marcados.

**Pool de aplicativos** Um pool de aplicativos especifica um grupo de configurações para os processos de trabalho que executam o processamento de solicitação para os aplicativos nesse pool de aplicativos. Os pools de aplicativos não fazem parte da hierarquia site-app-vdir. Cada aplicativo especifica em qual pool de aplicativos ele será executado ou executado no pool de aplicativos padrão. O pool de aplicativos define várias configurações de processo de trabalho, como a versão do CLR carregada por ele, o modo de integração do .NET, a conta na qual o processo de trabalho é executado e as configurações de reciclagem do processo.

Por padrão, o IIS 7 e posteriores são instalados com um site chamado "Site Padrão" que escuta na porta 80 sem restrições de endereço IP nem restrições de cabeçalho de host. Esse site tem um aplicativo raiz e esse aplicativo tem um diretório virtual raiz. Há também um pool de aplicativos chamado "DefaultAppPool" que é usado por todos os novos aplicativos por padrão.

Essa linha de comando listará todos os Sites, incluindo o Site Padrão:

```
%systemroot%\system32\inetsrv\APPCMD list sites
```

```
SITE "Default Web Site" (id:1,bindings:HTTP/*:80:,state:Started)
```

Vamos examinar os aplicativos que pertencem ao Site Padrão especificando a propriedade site.name ao listar Aplicativos:

```
%systemroot%\system32\inetsrv\APPCMD list apps /site.name:"Default Web Site"
```

```
APP "Default Web Site/" (applicationPool:DefaultAppPool)
```

Um comando semelhante irá listar os diretórios virtuais dentro do aplicativo "Default Web Site" especificando a propriedade app.name ao listar Vdirs.

```
%systemroot%\system32\inetsrv\APPCMD list vdirs /app.name:"Default Web Site/"
```

```
VDIR "Default Web Site/" (physicalPath:C:\inetpub\wwwroot)
```

Por fim, vamos examinar os pools de aplicativos:

```
%systemroot%\system32\inetsrv\APPCMD list apppools
```

```
APPPOOL "DefaultAppPool" (MgdVersion:v2.0,MgdMode:Integrated,state:Started)
APPPOOL "Classic .NET AppPool" (MgdVersion:v2.0,MgdMode:ISAPI,state:Started)
```

### Criando sites, aplicativos, diretórios virtuais e pools de aplicativos

Agora, criaremos um novo site chamado "MySite", com a ID do site 2 que escuta na porta 81 para todos os endereços IP e cabeçalhos de host:

```
%systemroot%\system32\inetsrv\APPCMD add site /name:MySite /id:2 /bindings:http/*:81: /physicalPath:C:\inetpub\mysite
```

```
SITE object "MySite" added
APP object "MySite/" added
VDIR object "MySite/" added
```

Os parâmetros de **nome** devem ser especificados para criar um site. O parâmetro de id é opcional e fará com que o AppCmd gere o próximo número de identificação de site disponível para o novo site, se omitido. Também especificamos as **associações** e os parâmetros **physicalPath** , que são explicados abaixo. Você também pode especificar propriedades adicionais para definir seus valores.

A propriedade **bindings** usa o formato de **protocolo/bindingInformation**, em que bindingInformation é específico para o protocolo. Para HTTP, ele está no formato **IP:PORT:HOSTHEADER**. Você pode especificar várias associações usando uma vírgula para separar cada definição.

Também especificamos uma propriedade **physicalPath** para o site. Embora um site da Web em si não tenha um caminho físico, esse formulário curto é usado para criar convenientemente um site com um aplicativo raiz e um diretório virtual raiz mapeado para o caminho físico especificado.

Se você não especificar um caminho físico, o site será criado sem aplicativos; um aplicativo e um diretório virtual precisarão ser criados para ele explicitamente.

Vamos em frente e adicionar outro aplicativo ao site da Web:

```
%systemroot%\system32\inetsrv\APPCMD add app /site.name:MySite /path:/app1 /physicalPath:C:\inetpub\mysite\app1
```

```
APP object "MySite/app1" added
VDIR object "MySite/app1/" added
```

Isso criou um novo aplicativo com o caminho virtual "/app1" pertencente ao site que criamos acima, com um diretório virtual raiz apontando para `C:\inetpub\mysite\app1`. O parâmetro **de caminho** necessário especifica o caminho virtual do novo aplicativo e o parâmetro **site.name** necessário especifica o site ao qual o aplicativo pertencerá. O parâmetro **physicalPath** opcional é um atalho, assim como no caso do Site, que cria um diretório virtual raiz junto com o aplicativo.

Se você não especificar o parâmetro **physicalPath** ou quiser adicionar outro diretório virtual ao aplicativo, use uma linha de comando como esta:

```
%systemroot%\system32\inetsrv\APPCMD add vdir /app.name:"MySite/app1" /path:/vdir1 /physicalPath:C:\inetpub\mysite\app1\vdir1
```

```
VDIR object "MySite/app1/vdir1" added
```

Isso criou um novo diretório virtual com o caminho virtual "/vdir1" pertencente ao aplicativo que criamos acima e apontando para `C:\inetpub\mysite\app1\vdir1`. O parâmetro **de caminho** necessário especifica o caminho virtual do novo diretório virtual e o parâmetro **app.name** necessário especifica o aplicativo ao qual o diretório virtual pertencerá. O parâmetro **physicalPath** especifica o local físico do diretório virtual.

Por fim, vamos criar um novo pool de aplicativos:

```
%systemroot%\system32\inetsrv\APPCMD add apppool /name:MyAppPool
```

```
APPPOOL object "MyAppPool" added
```

Isso criou um novo pool de aplicativos chamado "MyAppPool".

Para saber mais sobre sites, aplicativos e diretórios virtuais no IIS 7 e superior e as opções que você tem para criá-los com o AppCmd, consulte [Criando sites, aplicativos e diretórios virtuais acima do IIS7](https://mvolo.com/creating-iis7-sites-applications-and-virtual-directories/).

### Configurando sites, aplicativos, diretórios virtuais e pools de aplicativos

Anteriormente, adicionamos um novo site, completo com alguns aplicativos e diretórios virtuais. Agora, usaremos o AppCmd para modificar algumas de suas propriedades. Todos os objetos AppCmd dão suporte à mesma sintaxe padrão para definir propriedades:

```
APPCMD SET <OBJECT> <ID> [ /property:value ]*
```

Primeiro, vamos exibir os aplicativos disponíveis no computador:

```
%systemroot%\system32\inetsrv\APPCMD list apps
```

```
APP "Default Web Site/" (applicationPool:DefaultAppPool)
APP "MySite/" (applicationPool:DefaultAppPool)
APP "MySite/app1" (applicationPool:DefaultAppPool)
```

Observe os dois aplicativos que criamos anteriormente no site "MySite". Ambos os aplicativos estão definidos para usar o pool de aplicativos DefaultAppPool. Vamos alterar a propriedade applicationPool do aplicativo raiz "MySite/" para usar o novo pool de aplicativos que criamos anteriormente chamado "MyAppPool":

```
%systemroot%\system32\inetsrv\APPCMD set app "MySite/" /applicationPool:MyAppPool
```

```
APP object "MySite/" changed
```

Isso alterou o valor da propriedade applicationPool do aplicativo "MySite/" para o novo valor, movendo efetivamente o aplicativo para o novo pool de aplicativos.

O motivo pelo qual movemos o aplicativo para o novo pool de aplicativos é para que possamos alterar alguns dos parâmetros de runtime do processo de trabalho no qual esse aplicativo será executado. Para fazer isso, alteraremos algumas das propriedades no pool de aplicativos "MyAppPool". Antes de alterar os valores das propriedades, é geralmente útil primeiro exibir as propriedades disponíveis e seus valores atuais. Podemos fazer isso listando nosso aplicativo na exibição detalhada:

```
%systemroot%\system32\inetsrv\APPCMD list apppool "MyAppPool" /text:*
```

```
APPPOOL
  APPPOOL.NAME: MyAppPool
  managedPipelineMode: Integrated
  managedRuntimeVersion: v2.0
  state: Started
  [add]
    name:"MyAppPool"
    queueLength:"1000"
    autoStart:"true"
    enable32BitAppOnWin64:"false"
    managedRuntimeVersion:"v2.0"
    managedPipelineMode:"Integrated"
    passAnonymousToken:"true"
    [processModel]
      identityType:"NetworkService"
      userName:""
      password:""
```

```
...
      pingingEnabled:"true"
...
```

Observe o número de propriedades no objeto do pool de aplicativos; a saída completa não é mostrada aqui.

Estamos interessados em alterar a propriedade **managedRuntimeVersion** para "v1.1" para executar nossos aplicativos neste pool de aplicativos com ASP.NET v1.1. Aqui está a linha de comando para fazer isso:

```
%systemroot%\system32\inetsrv\APPCMD set apppool "MyAppPool" /managedRuntimeVersion:v1.1
```

```
APPPOOL object "MyAppPool" changed
```

Você pode ver na saída da lista acima que há várias propriedades disponíveis no objeto do pool de aplicativos, e algumas das propriedades estão aninhadas dentro de um sub-elemento de configuração. Por exemplo, as opções de processo são aninhadas abaixo do subconjunto "processModel".

Se você quiser definir uma propriedade aninhada, resolva-a com notação de caminho de elemento como esta:

```
%systemroot%\system32\inetsrv\APPCMD set apppool "MyAppPool" /processModel.pingingEnabled:false
```

## Outros elementos de configuração

Além de manipular propriedades de configuração com os objetos AppCmd de nível superior, você pode definir propriedades de configuração em qualquer seção de configuração, incluindo as associadas aos objetos AppCmd de nível superior. Isso é abordado posteriormente na seção denominada "Trabalhando com configuração".

### Inspecionando o estado do servidor

O AppCmd fornece funcionalidade para inspecionar vários aspectos do estado de runtime do servidor, incluindo:

- estado do site
- estado do pool de aplicativos
- processos de trabalho do servidor ativo
- atualmente executando solicitações

Além disso, alguns objetos fornecem comandos que permitem controlar seu estado de runtime, como o comando STOP do objeto Site e o comando RECYCLE do objeto AppPool.

### Inspecionando o estado do site e do pool de aplicativos

O estado de sites e pools de aplicativos é relatado da propriedade **estado** de cada objeto. Ao listar sites ou pools de aplicativos, o estado é exibido na saída padrão. Por exemplo:

```
%systemroot%\system32\inetsrv\APPCMD list apppools DefaultAppPool
```

```
APPPOOL "DefaultAppPool" (MgdVersion:v2.0,MgdMode:Integrated,state:Started)
```

A propriedade state também pode ser usada para pesquisar sites ou pools de aplicativos que estejam em um estado específico. Por exemplo, para localizar todos os pools de aplicativos iniciados:

```
%systemroot%\system32\inetsrv\APPCMD list apppools /state:started
```

```
APPPOOL "DefaultAppPool" (MgdVersion:v2.0,MgdMode:Integrated,state:Started)
APPPOOL "Classic .NET AppPool" (MgdVersion:v2.0,MgdMode:ISAPI,state:Started)
```

### Inspecionando processos de trabalho em execução

Você pode usar o objeto WP (processo de trabalho) para listar processos de trabalho em execução:

```
%systemroot%\system32\inetsrv\APPCMD list wps
```

```
WP "3577" (apppool:DefaultAppPool)
```

Cada objeto WP tem uma propriedade **apppool.name** , que permite listar todos os processos de trabalho em execução para um pool de aplicativos específico:

```
%systemroot%\system32\inetsrv\APPCMD list wps /apppool.name:DefaultAppPool
```

```
WP "3577" (apppool:DefaultAppPool)
```

### Inspecionando solicitações atualmente em execução

O objeto Request permite inspecionar as solicitações em execução no momento no servidor:

```
%systemroot%\system32\inetsrv\APPCMD list requests
```

```
REQUEST "fb0000008000000e" (url:GET /wait.aspx?time=10000,time:4276 msec,client:localhost)
```

A lista pode ser restrita às solicitações de um site específico, pool de aplicativos, processo de trabalho ou url usando a propriedade apropriada para filtrar os resultados. Eis alguns exemplos:

```
%systemroot%\system32\inetsrv\APPCMD list request /apppool.name:DefaultAppPool

%systemroot%\system32\inetsrv\
APPCMD list requests /wp.name:3567

%systemroot%\system32\inetsrv\APPCMD list requests /site.id:1
```

## Trabalhando com a configuração

O IIS 7 e acima apresentam um sistema de configuração hierárquico baseado em XML semelhante ao sistema de configuração ASP.NET que armazena a configuração do servidor em seções XML esquematizadas. A configuração pode ser localizada no nível do servidor ApplicationHost.config arquivo ou colocada em arquivos de configuração de Web.config distribuídos dentro da hierarquia do aplicativo.

O AppCmd permite a inspeção completa e a edição da hierarquia de configuração da linha de comando por meio de seu objeto Config. Além disso, o AppCmd fornece outras funções úteis, como limpar a configuração, bloqueá-la e desbloqueá-la e pesquisá-la.

### Exibindo a configuração

O AppCmd funciona com a configuração no nível das seções de configuração. Cada seção de configuração normalmente descreve um recurso de servidor e pode conter um ou mais subconjuntos e coleções.

A configuração pode ser definida para um namespace de URL arbitrário, como para um site, aplicativo ou url. As configurações definidas em um nível mais alto são herdadas por todos os níveis inferiores, a menos que sejam substituídas especificamente em níveis inferiores.

Para exibir a configuração efetiva para um nível de URL específico, use o comando LIST do objeto Config da seguinte maneira:

```
%systemroot%\system32\inetsrv\APPCMD list config <URL> /section:SectionName
```

Onde `<URL>` está o caminho de configuração no qual a configuração efetiva deve ser lida, como "Site Padrão/" ou "Site Padrão/app1/hello.html". Se não for especificado, ele usará como padrão o nível do servidor.

Para saber mais sobre a hierarquia de configuração do IIS e como criar caminhos de configuração do IIS para uso com o AppCmd e outras ferramentas, consulte [Anatomia de um IIS7 e caminho de configuração acima](http://mvolo.com/anatomy-of-an-iis7-configuration-path/).

O parâmetro **de seção** especifica a seção de configuração que você deseja ler. Se não for especificado, todas as seções de configuração efetivas no nível da URL serão exibidas. Por exemplo, essa linha de comando exibe toda a configuração efetiva para o aplicativo raiz do Site Padrão:

```
%systemroot%\system32\inetsrv\APPCMD list config "Default Web Site/"
```

Para listar uma seção específica, use uma linha de comando como esta:

```
%systemroot%\system32\inetsrv\APPCMD list config "Default Web Site/" /section:asp
```

```
<system.webServer>
  <asp>
    <session />
    <comPlus />
    <cache />
    <limits />
</asp>
</system.webServer>
```

Por padrão, o AppCmd exibe apenas a configuração definida explicitamente. Se você quiser exibir a configuração efetiva, incluindo valores herdados ou padrão, especifique o parâmetro **/config:**\*:

```
%systemroot%\system32\inetsrv\APPCMD list config "Default Web Site/" /section:asp /config:*
```

Para exibir uma lista de seções de configuração disponíveis, use esta linha de comando:

```
%systemroot%\system32\inetsrv\APPCMD list config /section:?
```

### Editando propriedades de configuração

No AppCmd, cada seção de configuração é exposta como uma instância de um objeto de configuração que expõe propriedades que representam a seção de configuração subjacente. Use o comando SET do objeto Config para alterar essas propriedades. A sintaxe é:

```
APPCMD set config <URL> /section:SectionName [ /property:value ]+
```

`<URL>` é opcional; especifica em qual caminho de configuração a alteração deve ser aplicada. Caso omitido, as alterações serão aplicadas no nível do servidor e herdadas por todas as URLs.

O parâmetro **de seção** é necessário; indica a seção que está sendo editada.

Por exemplo, para definir a propriedade **appAllowClientDebug** da seção **ASP** para a `http://localhost/app1` url:

```
%systemroot%\system32\inetsrv\APPCMD set config "http://localhost/app1" /section:asp /appAllowClientDebug:false
```

```
CONFIG object "asp" changed
```

Para definir as propriedades de configuração aninhadas em sub-elementos da seção de configuração, use esta notação de caminho de elementos:

```
%systemroot%\system32\inetsrv\APPCMD set config "http://localhost/app1" /section:asp /limits.requestQueueMax:4000
```

```
CONFIG object "asp" changed
```

Especifique mais de uma propriedade em uma única linha de comando para fazer várias edições na mesma seção de configuração.

Para exibir todas as propriedades que podem ser definidas em uma seção de configuração específica, use esta linha de comando:

```
%systemroot%\system32\inetsrv\APPCMD set config /section:asp /?
```

Observação

Observe que a seção asp está bloqueada por padrão, portanto, a execução desses comandos retornará um erro de violação de bloqueio. Você pode desbloquear esta seção primeiro, definir a configuração no nível do servidor omitindo-a `<URL>`ou confirmá-la na marca de localização no nível do servidor usando /commit:apphost. Consulte **o local de controle da configuração** mais adiante no artigo.

### Editando coleções de configuração

O AppCmd também fornece suporte para edição de coleções de configuração. Uma coleção de configuração pode conter vários elementos , por exemplo, a seção de configuração **system.webServer/modules** contém uma lista de elementos de configuração de módulo especificando os módulos executados pelo servidor.

Para definir uma propriedade em um elemento de coleção, especifique o elemento de coleção específico a ser editado usando uma expressão de indexador de coleção dentro da notação de caminho do elemento. A expressão do indexador de coleção usa valores de chave para identificar um elemento de coleção específico. O indexador tem o seguinte formato:

```
[key1='value1',key2='value2',...]
```

O número de chaves necessárias para identificar exclusivamente um elemento depende da coleção. A maioria das coleções exige apenas uma chave.

Por exemplo, para definir a propriedade type no elemento de coleção com a propriedade de nome de chave igual a "FormsAuthentication", use esta linha de comando:

```
%systemroot%\system32\inetsrv\APPCMD set config /section:system.webServer/modules /[name='FormsAuthentication'].type:System.Web.Security.FormsAuthenticationModule
```

Para adicionar um novo elemento de coleção, prefixe a notação de caminho do elemento com um sinal de mais, **+**. Dentro da expressão do indexador de coleção, forneça os valores para cada propriedade de chave. Propriedades adicionais não chave também podem ser incluídas na expressão do indexador de coleção. Por exemplo, isso adicionará um novo elemento de coleção de módulos:

```
%systemroot%\system32\inetsrv\APPCMD set config /section:system.webServer/modules /+[name='MyModule',type='MyType']
```

Para excluir um elemento de coleção, prefixe a notação de caminho do elemento com um sinal de subtração: **-**

```
%systemroot%\system32\inetsrv\APPCMD set config /section:system.webServer/modules /-[name='MyModule']
```

### Controlando o local da configuração

O sistema de configuração é hierárquico, permitindo que as configurações sejam gravadas em vários níveis, desde o arquivo de ApplicationHost.config no nível do servidor até arquivos Web.config distribuídos que podem estar presentes nos níveis de site, aplicativo ou diretório virtual.

Quando a configuração é gravada em um determinado nível, ela é herdada por todas as URLs nesse nível e inferior. Por exemplo, a configuração definida no arquivo de configuração Web.config na raiz do site é herdada por todas as URLs do site.

Por padrão, o AppCmd gravará a configuração no nível em que está sendo definida. Por exemplo, se você estiver definindo a configuração para o "Site Padrão/", ela será escrita em um arquivo Web.config na raiz desse site.

No entanto, é possível gravar a configuração em um nível mais alto e aplicá-la apenas a um subconjunto específico de URLs abaixo usando um constructo de *local* . Por exemplo, o aplicativo Web.config pode conter a configuração que é aplicada a apenas um único diretório dentro desse aplicativo. O AppCmd fornece essa funcionalidade por meio de seu parâmetro **de confirmação** .

O parâmetro de confirmação pode ser definido como um dos seguintes:

- (omitido) — padrão; configuração de gravação no nível para o qual ela está definida
- **url** — igual ao padrão; escrever a configuração no nível onde está definida
- **site** — escrever configuração no Web.config na raiz do site da URL para a qual está definida
- **app** — escreva a configuração no Web.config no diretório raiz do aplicativo da URL para a qual está configurado
- **apphost** — escrever configuração no nível do servidor, no arquivo applicationHost.config
- `<PATH>` — gravar configuração no caminho de configuração especificado

Por exemplo, essa linha de comando desativa a navegação de diretório para um aplicativo e grava essa configuração no arquivo Web.config da raiz do site:

```
%systemroot%\system32\inetsrv\APPCMD set config http://localhost/app1/ /section:directoryBrowse /enabled:false /commit:site
```

Para saber mais sobre caminhos de configuração do IIS e controlar o local da configuração, consulte [Anatomia do IIS7 e o caminho de configuração acima](http://mvolo.com/anatomy-of-an-iis7-configuration-path/).

### Configuração de bloqueio e desbloqueio

O sistema de configuração permite que as seções de configuração sejam bloqueadas em um determinado nível, impedindo que suas propriedades sejam substituídas em níveis inferiores. Isso pode ser usado para impedir que os aplicativos alterem as configurações que o administrador do servidor deseja impor.

Por padrão, a maioria das seções de configuração do IIS são bloqueadas no nível do servidor. Para configurar essas seções em níveis mais baixos, elas precisam ser desbloqueadas. O AppCmd fornece o comando UNLOCK para esta finalidade:

```
%systemroot%\system32\inetsrv\APPCMD unlock config /section:asp
```

Use o comando LOCK para bloquear uma seção:

```
%systemroot%\system32\inetsrv\APPCMD lock config /section:asp
```

Observe que, se você bloquear uma seção de configuração, todos os aplicativos que já tiverem configurado essa seção em um nível inferior sofrerão um erro de violação de bloqueio quando tentarem acessar a seção de configuração.

### Pesquisando configuração

O AppCmd pode pesquisar na hierarquia de configuração distribuída todos os locais que definem propriedades de configuração específicas ou valores de propriedade. O recurso de pesquisa de configuração pode ser usado para identificar locais em que um recurso específico está sendo habilitado ou para garantir a conformidade com um requisito de configuração específico.

Para pesquisar no servidor todos os locais que definem a configuração, você pode usar o comando SEARCH sem argumentos:

```
%systemroot%\system32\inetsrv\APPCMD search config
```

Para pesquisar todos os locais em um caminho de configuração específico, como todos os locais de configuração para um determinado site, inclua o caminho na linha de comando:

```
%systemroot%\system32\inetsrv\APPCMD search config "Default Web Site/"
```

Para pesquisar locais que configurem uma seção de configuração específica:

```
%systemroot%\system32\inetsrv\APPCMD search config "Default Web Site/" /section:directoryBrowse
```

Para pesquisar locais que definem uma propriedade específica, inclua o nome da propriedade:

```
%systemroot%\system32\inetsrv\APPCMD search config "Default Web Site/" /section:directoryBrowse /enabled
```

Por fim, para pesquisar locais que definem uma propriedade como um valor específico:

```
%systemroot%\system32\inetsrv\APPCMD search config "Default Web Site/" /section:directoryBrowse /enabled:true
```

## Trabalhando com a saída da ferramenta

Anteriormente, mencionamos que a saída do comando LIST é uma lista de instâncias de objeto. O AppCmd oferece modos de saída diferentes que permitem o controle sobre o nível de detalhes exibido sobre cada objeto.

### Saída Padrão

Vamos usar Sites LIST como um exemplo. Por padrão, o AppCmd usa um formato de saída compacto:

```
%systemroot%\system32\inetsrv\APPCMD list sites
```

```
SITE "Default Web Site" (id:1,bindings:HTTP/*:80:,state:Started)
SITE "Site1" (id:2,bindings:http/*:81:,state:Started)
SITE "Site2" (id:3,bindings:http/*:82:,state:Stopped)
```

Nesse formato de saída, cada instância de objeto está em uma linha, especificando o tipo de objeto (SITE) e o identificador do objeto ("Site Padrão"). Várias propriedades comuns ou importantes geralmente também são apresentadas (id, associações e estado para o objeto Site).

### Saída detalhada

A maioria dos objetos dá suporte a significativamente mais propriedades do que são apresentadas na saída padrão. Para exibir todas as propriedades do objeto, especifique o parâmetro text:\*. As propriedades de cada instância serão exibidas em um formato de árvore hierárquica:

```
APPCMD list site "Default Web Site" /text:*
```

```
SITE
  SITE.NAME: Default Web Site
  SITE.ID: 2
  bindings: http/*:80:
  state: Started
...
```

No exemplo acima, a saída foi abreviada – a saída real inclui muito mais propriedades.

### Saída para uso com outras ferramentas de linha de comando

O AppCmd fornece um modo de saída que exibe apenas uma propriedade específica de cada instância de objeto. Especifique o nome da propriedade a ser exibida com o parâmetro **text:<PROPERTY>** . Por exemplo, esse comando retornará todas as instâncias de diretório virtual disponíveis, exibindo apenas a propriedade **physicalPath** de cada uma:

```
%systemroot%\system32\inetsrv\APPCMD list vdirs /text:physicalPath
```

```
C:\inetpub\wwwroot
C:\inetpub\vdir1
D:\vdir2
```

Você pode, é claro, exibir qualquer uma das propriedades válidas do tipo de objeto que está sendo listado.

Às vezes, é desejável usar a saída do AppCmd com ferramentas de linha de comando e comandos de shell existentes, como o comando FOR e FINDSTR.EXE. Essas ferramentas geralmente funcionam melhor quando cada item de dados de interesse está localizado em uma linha separada.

Por exemplo, imagine uma linha de comando que produz uma listagem de diretório de cada diretório virtual do IIS. A linha de comando precisa adquirir uma lista de caminhos físicos de cada um dos diretórios virtuais de interesse e, em seguida, executar um comando DIR em cada um desses caminhos usando o comando FOR para percorrê-los.

```
FOR /F %f IN ('%systemroot%\system32\inetsrv\APPCMD list vdir /text:physicalPath') DO CALL DIR %f
```

### Saída de configuração

Muitos dos objetos contêm dados de configuração que vêm diretamente das seções de configuração associadas. O objeto Config é o exemplo principal disso e serve como um wrapper direto sobre o sistema de configuração do IIS – cada instância de objeto retornada pelo objeto Config é uma seção de configuração. Outros objetos, como Site, também contêm informações de configuração como parte das propriedades do objeto.

Se você quiser exibir as informações de configuração dos objetos retornados no formato XML bruto do sistema de configuração, poderá usar o parâmetro **de configuração** . Por exemplo, para exibir as informações de configuração XML do objeto do site, use uma linha de comando como esta:

```
%systemroot%\system32\inetsrv\APPCMD list site "Default Web Site" /config
```

```
<site name="Default Web Site" id="1">
  <bindings>
        <binding protocol="HTTP" bindingInformation="*:80:" />
```

```
...
```

### Saída XML

A ferramenta também dá suporte a seu próprio formato de saída XML, que gera conjuntos de resultados XML bem formados para os objetos retornados da execução do comando. Isso permite alguns recursos interessantes que distinguem o AppCmd de qualquer ferramenta de linha de comando anterior fornecida pela equipe do IIS.

- **Criando tarefas de gerenciamento complexas**. A principal finalidade dessa capacidade é habilitar os conjuntos de resultados gerados pelo AppCmd para serem inseridos em outro comando AppCmd. Isso permite executar rapidamente tarefas de gerenciamento complexas sem escrever o código do aplicativo.
- **Executando operações em lote com eficiência**. Executar a ferramenta um grande número de vezes ao executar um grande número de operações (por exemplo, criar 10.000 sites) pode ser lento devido à sobrecarga de criação e inicialização do processo para cada operação. Em vez disso, um único comando de ferramenta pode ser executado por dados de entrada contidos em um conjunto de dados XML, reduzindo drasticamente o tempo de execução do processamento dos dados de entrada.
- **Exportando dados para outras ferramentas**. O formato XML permite que os conjuntos de dados gerados pelo AppCmd sejam usados com outras ferramentas para processar, armazenar ou fornecer relatórios. Por exemplo, os dados do AppCmd podem ser usados com transformações XSLT em relatórios gerais de gerenciamento html, importados para o SQL Server 2005 para análise posterior ou carregados por ADO.NET para processamento programático.

Por exemplo, para gerar a lista de sites no modo XML:

```
%systemroot%\system32\inetsrv\APPCMD list sites /xml
```

Para saber mais sobre o recurso de tubulação e como aproveitá-lo para um gerenciamento de linha de comando avançado, consulte <http://mvolo.com/do-complex-iis-management-tasks-easily-with-appcmd-command-piping/>.

## Resumo

Nesta visão geral, familiarizamos você com todos os diferentes comandos poderosos disponíveis usando o utilitário IIS 7 e superior Command-Line, AppCmd.exe.

Você também pode encontrar mais tópicos do AppCmd e aprender maneiras poderosas de gerenciar seu servidor por meio da linha de comando no meu blog, em <http://mvolo.com/category/appcmd/>.

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
