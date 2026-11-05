# Como usar a delegação de configuração no IIS 7.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/how-to-use-configuration-delegation-in-iis

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

# Como usar a delegação de configuração no IIS 7.0

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Resumo

Este artigo explica como habilitar a configuração delegada no servidor. Ele discute como implantar as configurações para o servidor e para seus aplicativos, juntamente com as páginas de conteúdo e o código do aplicativo.

Depois que o administrador do computador definir o aplicativo ou o diretório virtual para seu uso no arquivo `%windir%\system32\inetsrv\config\applicationHost.config`de configuração mestre e permitir que seções específicas sejam delegadas, você poderá controlar as configurações no nível do aplicativo: fazendo configurações no arquivo web.config do aplicativo, você substitui os padrões globais. Isso é possível se você tiver acesso ao diretório do aplicativo, mesmo que não seja um administrador local no computador.

Depois de ler este documento, você saberá como definir aplicativos e diretórios virtuais no nível global, desbloquear seções de configuração para delegação e substituir as configurações de aplicativos individuais em um nível inferior da hierarquia de configuração.

## Introdução

O IIS permite que os administradores de computador delegam a tarefa de definir e alterar a configuração para proprietários de sites e aplicativos. Para fazer isso, use arquivos web.config nos diretórios de conteúdo. Esses arquivos especificam seções de configuração que entrarão em vigor em seu nível na hierarquia e para baixo. O administrador do computador deve desbloquear explicitamente seções no nível global para habilitar essa delegação. Por padrão, a maioria das seções do IIS é bloqueada para delegação e todas as seções do .NET Framework (incluindo ASP.NET) não são bloqueadas no nível global.

Este documento explica como definir novos aplicativos e diretórios virtuais no nível global (somente os administradores de máquina podem executar essa tarefa; ela nunca pode ser delegada).

Em seguida, este documento explica como realizar a implantação por xcopy do web.config junto com o conteúdo do aplicativo para sobrescrever algumas configurações em um nível específico. Ele também explica os principais conceitos do sistema de configuração e, portanto, explica como realizar essas tarefas usando a edição direta de arquivos de configuração, sem usar a interface do usuário ou outras abstrações na parte superior do sistema de configuração.

## Pré-requisitos

- Verifique se o IIS 7.0 ou superior está instalado no computador. Vá para o `http://localhost/` IE e veja se a página padrão "Em Construção" é aberta. Se o IIS não estiver instalado, consulte o How-To de Instalação para obter instruções de instalação.
- Verifique se você tem privilégios administrativos no computador. Por padrão, você não os terá se estiver conectado como um usuário diferente da conta de Administrador interna, mesmo que esse usuário tenha sido adicionado ao grupo de Administradores local no computador. Esse é um novo recurso de segurança no Windows Server® 2008, chamado LUA, que está além do escopo do IIS. Faça logon como a conta de Administrador interna ou invoque explicitamente aplicativos como administrador interno, conforme necessário, usando a ferramenta de cmd-line "runas":

Por exemplo, para iniciar notepad.exe, execute este comando: "runas /user:administrator notepad.exe". Você será solicitado a solicitar a senha da conta administrador. É útil ter um prompt de comando com privilégios elevados, executando "runas /user:administrator cmd.exe". Cada aplicativo executado a partir dessa janela de comando também é elevado e você não precisa usar a sintaxe "runas" nessa janela de comando.

- Verifique se o arquivo de configuração mestre está com backup. Basta copiar applicationHost.config para um arquivo diferente, para que você possa restaurá-lo mais tarde. Você encontrará applicationHost.config no diretório inetsrv\, que, por sua vez, está no diretório do sistema.

Observação

Você deve ser um administrador para fazer isso – consulte o tópico acima.

- Antes de começar, verifique se você está em um "estado limpo". Para fazer isso, reverta as alterações que você pode ter feito no arquivo applicationHost.config em exercícios anteriores. (Se você estiver usando uma imagem VPC, a maneira mais fácil de fazer isso é reiniciar a imagem sem salvar seu estado).
- É recomendável desativar mensagens de erro HTTP amigáveis no IE (**Opções**>**de**>) para uma solução de problemas mais rápida.

## Etapa 1: Definir um novo aplicativo

1. Usando um editor de texto, como o Bloco de Notas, abra o arquivo ApplicationHost.config no seguinte local:

   ```
   %windir%\system32\inetsrv\config\applicationHost.config
   ```
2. Navegue até a `<sites>` seção, que é semelhante à seguinte:

   ```
   <sites>
       <siteDefaults>
           <logFile directory="C:\WINDOWS\System32\LogFiles" />
       </siteDefaults>
        <applicationDefaults applicationPool="DefaultAppPool"/>
        <site name="Default Web Site" id="1">
           <bindings>
             <binding protocol="http" bindingInformation="*:80:" />
           </bindings>
                   <application path="/">
             <virtualDirectory path="/" physicalPath="C:\inetpub\wwwroot" />
           </application>
            <logFile directory="C:\WINDOWS\System32\LogFiles" />
       </site>
   </sites>
   ```
3. Verifique se o servidor Web está em execução e se você pode acessar o site padrão. Para fazer isso, inicie o navegador e solicite `http://localhost/`
4. A solicitação deve retornar uma página da Web. Caso contrário, inicie o servidor IIS digitando "**net start w3svc**" na caixa de comando ou solucione problemas usando o visualizador do Log de Eventos do Windows.
5. No navegador, solicite `http://localhost/`

   Essa solicitação não retorna uma página (você vê uma página de erro), porque o caminho virtual ainda não está definido na configuração. Este é o próximo procedimento.
6. No arquivo ApplicationHost.config, adicione um `<application>` elemento com o caminho "**/app**" que inclui um elemento de nível `<virtualDirectory>` superior. O diretório virtual de nível superior é um com o caminho "**/**". Para o caminho físico do diretório virtual, especifique `C:\tmp`(ou algo semelhante com o qual você trabalhará posteriormente).

   Quando você terminar, as seções `<sites>` serão semelhantes às seguintes:

   ```
   <sites>
       <siteDefaults>
           <logFile directory="C:\WINDOWS\System32\LogFiles" />
       </siteDefaults>
        <applicationDefaults applicationPool="DefaultAppPool"/>
        <site name="Default Web Site" id="1">
          <bindings>
            <binding protocol="http" bindingInformation="*:80:" />
          </bindings>
                  <application path="/">
            <virtualDirectory path="/" physicalPath="C:\inetpub\wwwroot" />
          </application>
          <application path="/app" >
           <virtualDirectory path="/" physicalPath="C:\tmp" />
         </application>
           <logFile directory="C:\WINDOWS\System32\LogFiles" />
       </site>
   </sites>
   ```

   Você acabou de definir um novo aplicativo no arquivo de configuração.
7. No navegador, solicite `http://localhost/`

   O servidor Web retorna uma página de erro, dizendo que a navegação de diretório não está habilitada. Isso acontece porque você ainda não tem conteúdo em `c:\tmp`, portanto, o servidor está tratando a solicitação como uma solicitação para navegar no diretório. Copie iisstart.htm do `\inetpub\wwwroot` diretório `c:\tmp` e atualize o navegador. Agora você vê a página Em Construção.

## Etapa 2: Desbloquear seções de Configuração

1. Usando um editor de texto, como o Bloco de Notas, abra applicationHost.config e localize o grupo de <seções de autenticação> .
2. Mova as seções <anonymousAuthentication> e `<windowsAuthentication>` do seu local atual no arquivo para uma nova etiqueta de localização na parte inferior do arquivo que tenha overrideMode="Allow" nele, da seguinte maneira:

   ```
   <configuration>
     <system.webServer>
       <security>
         <authentication>
          <!-- cut the anonymousAuthentication and windowsAuthentication -->
          <!-- XML elements from this area in the file, and paste below  -->
         </authentication>
       </security>
     </system.webServer>
      <location overrideMode="Allow">
       <system.webServer>
         <security>
           <authentication>
             <!-- paste the 2 sections from above here -->
           </authentication>
         </security>
       </system.webServer>
     </location>
   </configuration>
   ```

   Essas seções agora podem ser sobrescritas pelos níveis hierarquicamente inferiores do namespace, pois estão em um tag de localização que especifica overrideMode="Allow". Todos os arquivos de web.config de nível inferior agora podem substituir essas configurações.

## Etapa 3: Sobrescrever Configurações no Nível do Aplicativo

1. Usando um editor de texto, como o Bloco de Notas, crie um novo arquivo de texto na pasta do aplicativo (por exemplo `c:\tmp`) chamada **web.config**.
2. No arquivo web.config, crie um `<configuration>` elemento e um `<system.webServer>` elemento como seu filho. Dentro do `<system.webServer>` elemento, crie um `<security>` elemento que contenha um `<authentication>` elemento.
3. Insira as configurações para desabilitar a autenticação do Windows e os esquemas de autenticação anônima, que são ativados por padrão no nível global.

   Quando você terminar, o arquivo web.config será semelhante ao seguinte:

   ```
   <configuration>
     <system.webServer>
       <security>
         <authentication>
           <windowsAuthentication enabled="false" />
           <anonymousAuthentication enabled="false" />
         </authentication>
       </security>
     </system.webServer>
   </configuration>
   ```
4. Em um navegador, solicite `http://localhost/app`.

   Observação

   Você não está autorizado a ver a página, pois desabilitou todos os métodos de autenticação para essa página em seu arquivo web.config.
5. No navegador, solicite `http://localhost/` e confirme se você pode acessar a página. A configuração no arquivo web.config se aplica somente no nível do aplicativo.
6. No arquivo web.config, habilite a autenticação básica adicionando um `<basicAuthentication>` elemento com seu atributo **habilitado** definido como true.

   Quando você terminar, o arquivo web.config será semelhante ao seguinte:

   ```
   <configuration>
     <system.webServer>
       <security>
         <authentication>
           <windowsAuthentication enabled="false" />
           <anonymousAuthentication enabled="false" />
          <basicAuthentication enabled="true" />
         </authentication>
       </security>
     </system.webServer>
   </configuration>
   ```
7. Solicite `http://localhost/app` novamente. Você vê uma página de erro dizendo que alguma configuração está bloqueada no nível global e os arquivos web.config estão tentando substituí-la, portanto, é um erro de configuração. Para resolver isso, permita que a <seção basicAuthentication> no nível global (applicationHost.config) seja substituída, como você fez para as duas outras seções. Em seguida, atualize o navegador.

   Agora você será solicitado a fornecer um nome de usuário e uma senha, o que indica que a autenticação básica está ocorrendo.
8. Insira o nome de usuário e a senha do usuário conectado e observe que a página é exibida.

   Se você solicitar `http://localhost/`, não será solicitado que você insira o nome de usuário e a senha, pois as alterações na configuração feitas se aplicam somente no nível do aplicativo.

   Observação

   O servidor e o navegador armazenam em cache o token de usuário. Se você quiser começar do zero e não vir mais o prompt de nome de usuário, feche o navegador e interrompa o processo de trabalho do IIS (ou execute "net stop /y http" na linha de comando do Windows e, em seguida, "net start w3svc", para reiniciar o IIS).

## Resumo

Este documento explica como definir aplicativos e diretórios virtuais no arquivo de configuração mestre, applicationHost.config. Ele também aborda como implantar arquivos de configuração específicos do aplicativo que contêm configurações de servidor na `<system.webServer>` seção. Você pode adicionar configurações ao arquivo web.config no `<system.web>` grupo de seções, como configurações de ASP.NET.

Uma boa prática é definir ACLs (listas de controle de acesso) no arquivo web.config ou em todo o diretório do aplicativo para que os usuários não administrativos não possam acessar o arquivo.

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
