# Passo a passo: cache de saída do IIS 7.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-performance-settings/walkthrough-iis-output-caching

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

# Passo a passo: cache de saída do IIS 7.0

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

O conteúdo da Web pode ser dividido em duas categorias: conteúdo estático e conteúdo dinâmico. O conteúdo estático não é alterado de solicitação para solicitação. O conteúdo que é retornado para o navegador da Web é sempre o mesmo. Exemplos de conteúdo estático incluem arquivos HTML, ARQUIVOS JPG ou GIF.

O outro é o conteúdo dinâmico. Essa é a resposta que é gerada para alterações de conteúdo dinâmico a cada solicitação. Exemplos incluem ASP.NET ou conteúdo PHP.

Há um grande intervalo entre essas duas categorias que inclui conteúdo semi-dinâmico. Imagine uma página de ASP.NET dinâmica que executa uma consulta de banco de dados. Não há razão para executar essa consulta em cada solicitação se as tabelas de banco de dados subjacentes forem alteradas com pouca frequência.

O recurso de cache de saída do IIS tem como destino o conteúdo semi-dinâmico. Ele permite armazenar em cache respostas estáticas para solicitações dinâmicas e obter uma escalabilidade tremenda.

## Pré-requisitos

Para este passo a passo, você precisa do IIS 7.0 ou superior no Windows® Vista SP1 ou no Windows Server® 2008 Beta 3 ou posterior. Este passo a passo também usa ASP.NET 2.0 que deve ser instalado como um componente opcional na Instalação do IIS.

## Visão geral do guia passo a passo

No passo a passo a seguir, usamos as interfaces de extensibilidade do IIS para adicionar mensagens de direitos autorais específicas do idioma aos arquivos JPG.

Primeiro, fazemos isso adicionando um manipulador gerenciado. A inserção dinâmica de uma mensagem de direitos autorais em cada arquivo JPG tem um custo, no entanto, porque agora o código gerenciado deve ser executado para cada arquivo JPG.

Em seguida, instalamos o WCAT, uma ferramenta de análise de desempenho do IIS, para medir a taxa de transferência de nosso manipulador de direitos autorais JPG.

Em seguida, adicionamos o cache de saída para recuperar a degradação de desempenho incorrida adicionando nosso manipulador de direitos autorais.

## Parte I – Escrevendo e configurando o manipulador de direitos autorais

1. Crie um diretório chamado "imagens" no `%systemroot%\inetpub\wwwroot` diretório. Execute o seguinte comando em um shell de comando com privilégios elevados:

   ```
   md %systemdrive%\inetpub\wwwroot\pictures
   ```
2. Copie algumas imagens digitais - este passo a passo pressupõe que sejam arquivos JPG - para o novo diretório de imagens.

   Observação

   Devido às configurações de segurança altas do Internet Explorer no Windows Server 2008, você pode obter uma caixa de diálogo de segurança informando que o site está bloqueado. Para baixar o papel de parede do IIS, adicione wallpaper.iis7.org à lista de sites confiáveis.
3. Crie um aplicativo com a ferramenta de linha de comando appcmd.

   ```
   %windir%\system32\inetsrv\appcmd add app -site.name:"Default Web Site" 

       -path:/pictures -physicalPath:%systemdrive%\inetpub\wwwroot\pictures
   ```
4. Crie o diretório App\_Code abaixo do diretório de imagens:

   ```
   md %systemdrive%\inetpub\wwwroot\pictures\App_Code
   ```
5. Abra o Bloco de Notas e cole o código a seguir nele.

   ```
   using System;
   using System.Web;
   using System.Drawing;
   using System.Drawing.Imaging;
             
   namespace IIS7Demos
   {
       public class imageCopyrightHandler : IHttpHandler
       {
           public void ProcessRequest(HttpContext context)
           {
               string message = "Copyright © IIS 7.0 Team";
               try            {
                   string languageHeader;
            languageHeader = context.Request.Headers["Accept-Language"].Substring(0,2).ToUpper();
                   switch (languageHeader)
                   {
                       case ("DE"):
                           message = "IIS 7.0 Team - Alle Rechte vorbehalten";
                           break;
                       case ("ES"):
                           message = "Marca Registrada IIS 7.0 Team";
                           break;
                       default:
                           break;
                   }
               }
               catch 
              { 
                   // if something fails, e.g. no Language-Accept header, we go with the english message 
              }
               InsertCopyrightMessage (   context, 
                               message, 
                               "yellow"                            
                           );
           }
           void InsertCopyrightMessage(
                               HttpContext context, 
                               string message, 
                               string color
                            )
           {
               try 
               {
                   // get physical path of request 
                   string strPath = context.Request.PhysicalPath;
                   // load as bitmap 
                   Bitmap jpgFile = new Bitmap(strPath);
                   // add copyright message 
                   Graphics g = Graphics.FromImage(jpgFile);
                   Font f = new Font("Arial", 20, GraphicsUnit.Pixel);
                   SolidBrush sb = new SolidBrush(Color.FromName(color));
                   // write copyright message to bitmap 
                   g.DrawString(   message, 
                                   f, 
                                   sb, 
                                   5, 
                                   jpgFile.Height - f.Height - 5
                               );
                   f.Dispose();
                   g.Dispose();

                   // save it to response stream 
                   jpgFile.Save(   context.Response.OutputStream, 
                                   System.Drawing.Imaging.ImageFormat.Jpeg
                               );
                   jpgFile.Dispose();
               }
               catch (Exception e)
               {
                   context.Response.Write(e.Message);
               }
           }
             
           public bool IsReusable
           {
               get { return true; }
           }
       }
   }
   ```

   Salve o arquivo como `%systemdrive%\inetpub\wwwroot\pictures\App\_Code\imageCopyrightHandler.cs`.
6. Crie o manipulador que executa esse código quando um arquivo JPG é solicitado:

   ```
   %windir%\system32\inetsrv\appcmd set config /section:system.webServer/handlers 

       /+[name='imageCopyrightHandler-Integrated',path='*.jpg',

       verb='GET,HEAD',type='IIS7Demos.imageCopyrightHandler',preCondition='integratedMode']
   ```
7. Também devemos habilitar a navegação de diretório porque ainda não há um documento padrão:

   ```
   %windir%\system32\inetsrv\appcmd set config "Default Web Site/pictures" 

       -section:directoryBrowse -enabled:true
   ```
8. Navegue até o aplicativo de imagens digitando na barra de endereços do Internet Explorer: `http://localhost/pictures`. Clique no link para o arquivo JPG na listagem de diretório do IIS. Você deverá ver a imagem JPG com a mensagem de Direitos Autorais inserida.
9. Olhe para o código. Você verá que a mensagem de direitos autorais depende do cabeçalho "Accept-Language" que o navegador envia. Se você tiver uma versão alemã do Microsoft Server 2008 instalada, verá a mensagem de direitos autorais "Equipe do IIS 7.0 – Alle Rechte vorbehalten"; se você tiver uma versão em espanhol, verá "Marca Registrada IIS 7.0 Team". Em todos os outros casos, a mensagem de direitos autorais será "Copyright © Equipe do IIS 7.0". Uma maneira de testar esse código é alterar o cabeçalho "Accept-Language" que o Internet Explorer envia:

   - Abra o "Internet Explorer".
   - Abra o menu "Ferramentas" e clique em "Opções da Internet".
   - Clique no botão "Idiomas".
   - Clique em "Adicionar..." e adicione "es" para espanhol ou "de" para alemão.
   - Mova o novo idioma para a parte superior da lista por meio do botão "Mover para cima".
   - Navegue até `http://localhost/pictures/<your_jpg_file>.jpg`. A mensagem De direitos autorais foi alterada para o idioma configurado.
   - Não se esqueça de voltar para a caixa de diálogo "Idiomas" e redefinir, caso contrário, você poderá se perguntar mais tarde por que você obtém páginas da Web em espanhol ou alemão.

## Parte II – Teste de desempenho da imageCopyrightHandler

Depois que o Gerenciador de Direitos Autorais para JPG funcionar, devemos determinar a velocidade do nosso código. Instale uma Ferramenta de Kit de Recursos do IIS 6.0 para executar testes de desempenho:

1. Baixe as Ferramentas do Kit de Recursos do IIS 6.0 e instale-as. Faça uma instalação personalizada e instale apenas a Ferramenta de Análise de Capacidade da Web (WCAT). O WCAT é o único recurso das Ferramentas de Kit de Recursos do IIS 6.0 que precisamos para fazer nossos testes de desempenho.

   Observação

   Devido às configurações de segurança altas do Internet Explorer no Windows Server 2008, você pode obter uma caixa de diálogo de segurança informando que o site está bloqueado. Para baixar o Kit de Recursos do IIS 6.0, adicione \*.microsoft.com à lista de sites confiáveis.
2. Crie um diretório chamado PERFTEST, por exemplo:

   ```
   md %systemdrive%\perftest
   ```
3. O controlador WCAT requer três arquivos de entrada:

   - Um arquivo de script que informa ao WCAT quais URLs solicitar. Cada URL obtém uma ClassID exclusiva
   - Um arquivo de distribuição que informa ao WCAT como as solicitações devem ser distribuídas entre as URLs especificadas no arquivo de script
   - Um arquivo de configuração que configura os parâmetros de uma execução de desempenho específica, por exemplo, a duração dos testes, quantos clientes HTTP simular etc.

   **O arquivo de script**

   Crie um novo arquivo chamado script.cfg no diretório perftest e cole o seguinte conteúdo nele:

   ```
   NEW TRANSACTION
       classId = 1
       NEW REQUEST HTTP
           Verb = "GET"
           URL = "http://localhost/pictures/<your image name>.JPG"
   NEW TRANSACTION
       classId = 2
       NEW REQUEST HTTP
           Verb = "GET"
           URL = "http://localhost/pictures/<your image name>.JPG"
   ```

   Observação

   Substitua a entrada "<nome da sua imagem>" pelos nomes dos seus arquivos JPG. Se você tiver mais arquivos JPG, poderá adicionar uma nova transação. Certifique-se de conceder a cada transação uma nova ClassID.

   **O arquivo de distribuição**

   O arquivo de distribuição informa ao WCAT como ele deve pesar as solicitações. Com as duas URLs acima, fazemos uma distribuição 50/50 uniforme. Cada ClassID é solicitado 50% das vezes.

   Crie um arquivo chamado `%systemdrive%\perftest\distribution.cfg` no diretório perftest e cole o seguinte conteúdo nele:

   ```
   1 50
   2 50
   ```

   **O arquivo de configuração**

   Aqui estão os parâmetros recomendados para o teste:

   - Duração: 30 segundos
   - Aquecimento: 5 segundos
   - Resfriamento: 5 segundos
   - Clientes Http simulados: 20

   Crie um arquivo chamado config.cfg no diretório perftest e cole o seguinte conteúdo:

   ```
   Warmuptime 5s
   Duration 30s
   CooldownTime 5s
   NumClientMachines 1
   NumClientThreads 20
   ```
4. Inicie o controlador executando os seguintes comandos:

   ```
   Cd \perftest
   "%programfiles%\IIS Resources\WCAT Controller\wcctl" 
       -c config.cfg -s script.cfg -d distribution.cfg -a localhost
   ```

   Assim que todos os clientes estiverem conectados, o teste perf será iniciado.
5. Como temos apenas um cliente, abra outro shell de comando com privilégios elevados e execute o seguinte:

   ```
   "%programfiles%\IIS Resources\WCAT Client\wcclient.exe" localhost
   ```

   Para fazer isso com mais clientes, defina NumClientMachines em config.cfg como um número maior e conecte clientes ao controlador por meio do comando wcclient especificando o nome do computador controlador.

   Exemplo: wcclient MyPerfTestControllerMachine

   Observação

   Se você fizer isso em uma versão de 64 bits do Windows, o WCAT será instalado no diretório "arquivos de programa (x86)" e você deverá usar `%programfiles(x86)%` para iniciar o WCAT.
6. Aqui estão os resultados da primeira execução:

   ```
   ########################################################################
   WCAT Performance Statistics_________________________________
   Server                      :      localhost      ()
   #Transactions               :              3      (HTTP/1.1)
   Total Async Sockets         :             20      (5 WCAT Pool Threads)
   Total Elapsed Time          :             30 Secs (0 Hrs,0 Mins,30 Secs)
   Current Connections         :             20
   Total Connection Attempts   :            436      (   14/Sec)
   Total Connect Errors        :              0      (    0/Sec)
   Total Success Connections   :            436      (   14/Sec)
   Total Consec. Connect Errors:              0      (    0/Sec)
   Total Bytes                 :       32301100      ( 1051 KB/Sec)
   Total Bytes Written         :          32264      (    1 KB/Sec)
   Total Bytes Read            :       32268836      ( 1050 KB/Sec)
   Total Requests              :            436      (   14/Sec)
   Total Responses             :            436      (   14/Sec)
   Total Socket Reads          :           6976      (  232/Sec)
   Total Socket Writes         :            436      (   14/Sec)
   Total Parse Errors          :              0      (    0/Sec)
   Total Socket Errors         :              0      (    0/Sec)
   Total I/O Errors            :              0      (    0/Sec)
   Total Internal Errors       :              0      (    0/Sec)
   Total Time Outs             :              0      (    0/Sec)
   Total 200 OK                :            436      (   14/Sec)
   Total 30X Redirect          :              0      (    0/Sec)
   Total 304 Not Modified      :              0      (    0/Sec)
   Total 404 Not Found         :              0      (    0/Sec)
   Total 500 Server Error      :              0      (    0/Sec)
   Total Bad Status            :              0      (    0/Sec)
   Min. Connect Time           :              0 MS
   Avg. Connect Time           :              0 MS
   Max. Connect Time           :             16 MS
   Min. Resp Time (1st Byte)   :           1281 MS
   Avg. Resp Time (1st Byte)   :           1371 MS
   Max. Resp Time (1st Byte)   :           1578 MS
   Min. Response Time (Last)   :           1281 MS
   Avg. Response Time (Last)   :           1373 MS
   Max. Response Time (Last)   :           1578 MS
   Current Outstanding Connects:              0      (   20 Max)
   Current Waitable Connects   :              0      (   20 Max)
   Total Asynchronous Connects :            531      (    1/Sec)
   Total Discarded Connects    :              0      (    0/Sec)
   ########################################################################
   ```

   O número importante a ser olhado são as solicitações por segundo. Nesse caso, obtemos 14 solicitações por segundo.

   Uma palavra de cuidado - quanto maior os arquivos JPG, menos solicitações você verá. É provável que seu computador esteja associado à rede: o IIS não será capaz de lidar com mais solicitações porque a rede está saturada com os dados que você está enviando. Você verá os melhores resultados com arquivos JPG no intervalo de 200 a 300 KB.

## Adicionando cache de saída

O código para inserir dinamicamente a mensagem de direitos autorais é bastante lento. Catorze solicitações por segundo não são rápidas para um servidor Web. O IIS tem um desempenho muito melhor. Tudo o que você deve fazer é criar uma política de cache que coloque URLs com a extensão JPG no cache do modo kernel. Veja como adicionar a política de cache:

### Adicionando uma política de cache por meio da Ferramenta de Gerenciamento do IIS

1. Navegue até "Ferramentas Administrativas" e selecione "Gerenciador de Serviços de Informações da Internet (IIS)".
2. Use o modo de exibição de árvore no lado esquerdo para navegar até o aplicativo "imagens".
3. Selecione o item de menu "Regras de Cache de Saída".
4. Clique em "Adicionar..." no menu "Ações".
5. Adicione JPG como a "Extensão de arquivo" ao cache.
6. Selecione "Intervalos de tempo" na seção "Monitorar arquivos armazenados em cache" e insira 00:00:10 como o intervalo de tempo.
7. Marque a caixa de seleção "Cabeçalhos" e insira "Accept-Language".

Observação

A interface de usuário do cache de saída não está disponível em versões anteriores ao Windows Vista Service Pack 1.

### Adicionando uma política de cache por meio da linha de comando

Para fazer o mesmo procedimento com a ferramenta appcmd, insira o seguinte comando:

```
%windir%\system32\inetsrv\appcmd set config "Default Web Site/pictures" 
    -section:caching /+profiles.[extension='.jpg',duration='00:00:10',
    policy='CacheForTimePeriod',varyByHeaders='Accept-Language']
```

Repita a execução de desempenho para ver o que e como as configurações mudam.

1. Inicie o controlador executando os seguintes comandos:

   ```
   Cd \perftest
   "%programfiles%\IIS Resources\WCAT Controller\wcctl" 
       -c config.cfg -s script.cfg -d distribution.cfg -a localhost
   ```
2. Inicie o cliente com:

   ```
   "%programfiles%\IIS Resources\WCAT Client\wcclient.exe" localhost
   ```

   Observação

   Se você fizer isso em uma versão de 64 bits do Windows, o WCAT será instalado no diretório `program files (x86)` e você deverá usar `%programfiles(x86)%` para iniciar o WCAT.

### Saída de exemplo

```
########################################################################
WCAT Performance Statistics_________________________________
Server                      :      localhost      ()
#Transactions               :              3      (HTTP/1.1)
Total Async Sockets         :             20      (5 WCAT Pool Threads)
Total Elapsed Time          :             30 Secs (0 Hrs,0 Mins,30 Secs)
Current Connections         :             19
Total Connection Attempts   :          13020      (  434/Sec)
Total Connect Errors        :              0      (    0/Sec)
Total Success Connections   :          13019      (  433/Sec)
Total Consec. Connect Errors:              0      (    0/Sec)
Total Bytes                 :      958045737      (31186 KB/Sec)
Total Bytes Written         :         963406      (   31 KB/Sec)
Total Bytes Read            :      957082331      (31155 KB/Sec)
Total Requests              :          13019      (  433/Sec)
Total Responses             :          13019      (  433/Sec)
Total Socket Reads          :         258283      ( 8609/Sec)
Total Socket Writes         :          13019      (  433/Sec)
Total Parse Errors          :              0      (    0/Sec)
Total Socket Errors         :              0      (    0/Sec)
Total I/O Errors            :              0      (    0/Sec)
Total Internal Errors       :              0      (    0/Sec)
Total Time Outs             :              0      (    0/Sec)
Total 200 OK                :          13019      (  433/Sec)
Total 30X Redirect          :              0      (    0/Sec)
Total 304 Not Modified      :              0      (    0/Sec)
Total 404 Not Found         :              0      (    0/Sec)
Total 500 Server Error      :              0      (    0/Sec)
Total Bad Status            :              0      (    0/Sec)
Min. Connect Time           :              0 MS
Avg. Connect Time           :              0 MS
Max. Connect Time           :             63 MS
Min. Resp Time (1st Byte)   :              0 MS
Avg. Resp Time (1st Byte)   :             33 MS
Max. Resp Time (1st Byte)   :            125 MS
Min. Response Time (Last)   :              0 MS
Avg. Response Time (Last)   :             45 MS
Max. Response Time (Last)   :            141 MS
Current Outstanding Connects:              0      (   20 Max)
Current Waitable Connects   :              0      (   20 Max)
Total Asynchronous Connects :          14093      (  147/Sec)
Total Discarded Connects    :              0      (    0/Sec)
########################################################################
```

## Tópicos avançados de cache de saída

### Contadores de desempenho

Para verificar o desempenho no cache de saída, examine os contadores de cache de saída no "Monitor de Confiabilidade e Desempenho". Há muitos contadores interessantes. Aqui está um exemplo de como usar o "Monitor de Confiabilidade e Desempenho" junto com o cache de saída.

1. No Windows Server 2008, inicie PERFMON por meio do menu Iniciar. Vá para "Ferramentas Administrativas" e clique em "Confiabilidade e Monitor de Desempenho". No Vista, você encontra "Ferramentas Administrativas" no Painel de Controle.
2. Selecione "Monitor de Desempenho" no modo de exibição de árvore à direita e clique no grande sinal "+" na barra de ferramentas.
3. Navegue até o contador "Cache do Serviço Web" e clique nele para abrir.
4. Adicione o contador "Total de URIs Armazenados em Cache".
5. Execute novamente o teste WCAT.

Você verá que o número de URIs armazenados em cache aumenta dependendo de quantos itens você solicitar durante o teste de desempenho.

### Regras de cache do modo kernel do IIS

O cache de saída do IIS dá suporte a duas políticas de cache. A política de cache de saída regular utiliza um cache que reside em um processo de trabalho do IIS. A outra política de cache é uma política de cache no modo kernel, caso em que o cache reside em HTTP.SYS, um driver no modo kernel.

Armazenar o conteúdo em cache no modo kernel permite que seu site seja mais rápido. Modifique a configuração do aplicativo de imagens para usar o cache do modo kernel. Veja a aparência da configuração atual (`%systemdrive%\inetpub\wwwroot\pictures\web.config`):

```
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
  <system.webServer>
    <directoryBrowse enabled="true" />
        <caching>
            <profiles>
                <add extension=".jpg" policy="CacheForTimePeriod" 
                duration="00:00:10" varyByHeaders="Accept-Language" />
            </profiles>
        </caching>                  
  </system.webServer>
</configuration>
```

Agora, altere-o para usar o cache no modo kernel:

1. Abra `%systemdrive%\inetpub\wwwroot\pictures\web.config`.
2. Altere a configuração.

   ```
   <caching>
       <profiles>
           <add extension=".jpg" policy="CacheForTimePeriod" 
                   duration="00:00:10" varyByHeaders="Accept-Language" />
       </profiles>
   </caching>
   ```

   para o seguinte:

   ```
   <caching>
       <profiles>
               <add extension=".jpg" kernelCachePolicy="CacheForTimePeriod" 
           duration="00:00:10" />
           </profiles>
   </caching>
   ```

Você verá que não usamos mais o atributo varyByHeaders. Isso ocorre porque o kernelModeCache não dá suporte a alguns dos recursos aos quais o cache de saída do modo de usuário dá suporte.

### Limitações do Cache de Saída do Modo Kernel

Há duas diferenças significativas entre o modo de usuário e o cache de saída do modo kernel.

- O cache de saída do modo Kernel não dá suporte a módulos e recursos que devem ser executados no modo de usuário, como autenticação ou autorização. Exemplo: se esquemas de autenticação como a autenticação básica ou Windows estiverem habilitados, a política de cache não funcionará. O conteúdo é servido, mas não armazenado em cache. Consulte "Solucionar problemas de cache" sobre como descobrir se o conteúdo é armazenado em cache. Mais detalhes sobre por que as respostas podem não ser armazenadas em cache no modo kernel [podem ser encontrados neste artigo da Base de Conhecimento](https://support.microsoft.com/kb/817445).
- O Cache de Saída do Modo Kernel dá suporte ao atributo varyByHeaders, mas não varyByQuerystring.

### Solucionar problemas de cache

O FREB (Buffer de Eventos de Solicitação Mal-Sucedida) é a melhor maneira de descobrir se sua solicitação é armazenada em cache. FREB informa por que algo não é armazenado em cache. Aqui está um exemplo de um log FREB. Nesse caso, o evento HTTPSYS\_CACHEABLE informa que a solicitação não é armazenada em cache porque o cache no modo kernel não está habilitado.

Para obter informações mais detalhadas sobre como trabalhar com FREB, consulte [Solução de problemas de solicitações com falha usando o rastreamento no IIS 7](troubleshoot__using-failed-request-tracing__troubleshooting-failed-requests-using-tracing-in-iis.md).

Use o seguinte comando para descobrir qual conteúdo é armazenado em cache no modo kernel:

```
netsh http show cachestate
```

### Complexidades do Caching

Mesmo se você habilitar o cache de saída, o IIS não armazenará uma solicitação em cache imediatamente. Ele deve ser solicitado algumas vezes antes que o IIS considere uma solicitação "digna de cache". O valor do cache pode ser configurado por meio da seção ServerRuntime descrita neste [artigo do MSDN](https://msdn.microsoft.com/library/ms690574).

As duas propriedades que determinam o merecimento de cache são frequentHitTimePeriod e frequentHitThreshold. Uma solicitação só será armazenada em cache se mais do que `<frequentHitThreshold>` solicitações para uma URL armazenável em cache chegarem dentro do <frequentHitTimePeriod>.

A configuração padrão para frequentHitTimePeriod é de 10 segundos.

A configuração padrão para frequentHitThreshold é 2.

### Armazenando em cache suas páginas mais populares

No exemplo acima, colocamos todos os arquivos com a extensão JPG no cache de saída. Isso nem sempre funciona porque, às vezes, você deseja ser mais seletivo e colocar apenas um documento específico no cache de saída. Veja como fazer isso com sua página solicitada com mais frequência, seu documento padrão:

1. Crie um arquivo chamado default.aspx no `%systemdrive%\inetpub\wwwroot\pictures` diretório e adicione o seguinte código:

   ```
   <%=DateTime.Now%>
   ```
2. Navegue até "Ferramentas Administrativas" e selecione "Gerenciador de Serviços de Informações da Internet (IIS)".
3. Use o modo de exibição de árvore no lado esquerdo para navegar até o aplicativo "imagens".
4. Clique em "Exibição de Conteúdo" na parte inferior da página.
5. Selecione seu documento padrão, por exemplo, default.aspx página.
6. Clique em "Alternar para o modo de exibição de recursos" no menu "Ações" à direita. Todas as configurações configuradas agora serão aplicadas somente ao documento padrão.
7. Abra a configuração "Regras de Cache de Saída".
8. Adicione ".aspx" como uma extensão de arquivo.
9. Selecione "cache no modo kernel" e, em seguida, podemos selecionar "Intervalos de tempo" e habilitar "Monitorar arquivos armazenados em cache" e inserir 00:00:30 como o intervalo de tempo.
10. Navegue até `http://localhost/pictures` com o "Internet Explorer". Atualizando constantemente a página (pressione Ctrl+F5 para garantir que ela não venha do cache do Navegador), você verá que o tempo não será alterado por 30 segundos.

## Resumo

Usar o recurso de Cache de Saída do IIS para conteúdo semi-dinâmico pode melhorar seu site. Você observa uma melhoria notável na performance e na capacidade de transferência. Uma alteração de configuração simples é suficiente para aproveitar esse recurso.

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
