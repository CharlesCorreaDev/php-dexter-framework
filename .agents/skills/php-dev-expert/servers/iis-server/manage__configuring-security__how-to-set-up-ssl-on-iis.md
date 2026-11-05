# Como configurar o SSL no IIS 7 ou posterior | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/how-to-set-up-ssl-on-iis

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

# Como configurar o SSL no IIS 7 ou posterior

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

As etapas para configurar o SSL (Secure Sockets Layer) para um site são as mesmas no IIS 7 e superior e no IIS 6.0 e incluem o seguinte:

- Obtenha um certificado apropriado.
- Crie uma associação HTTPS em um site.
- Teste fazendo uma solicitação para o site.
- Opcionalmente, configure as opções de SSL, ou seja, tornando o SSL um requisito.

Este documento fornece algumas informações básicas sobre SSL e mostra como habilitar o SSL das seguintes maneiras:

- Usando o Gerenciador do IIS.
- Usando a ferramenta de linha de comando AppCmd.exe.
- Programaticamente por meio do Microsoft.Web.Administration.
- Usando scripts WMI.

Este artigo contém as seguintes seções:

- [Configuração do SSL](#SSL)
- [Usando o AppCmd](#AppCmd)
- [Usando o WMI](#WMI)
- [Usando o Gerenciador do IIS](#IISManager)
- [Resumo](#Summary)

## Configuração do SSL

Se você estiver executando seu site em seu próprio servidor ou [na nuvem](https://www.windowsazure.com/documentation/services/web-sites/), usar o SSL para proteger seu site provavelmente é extremamente importante para você, já que muitos sites estão recorrendo a ele para proteger a privacidade do usuário. Se você precisar configurar o SSL em seu servidor, é importante perceber que a implementação do SSL foi alterada do IIS 6.0 para o IIS 7 e superior. No IIS 6.0 no Windows Server 2003, todas as configurações de SSL foram armazenadas na metabase do IIS e a criptografia/descriptografia ocorreu no modo usuário (exigindo muitas transições de modo kernel/usuário). No IIS 7 e posteriores, HTTP.sys lida com criptografia/descriptografia SSL no modo kernel, resultando em até 20% melhor desempenho para conexões seguras no IIS 7 e superior do que o experimentado no IIS 6.0.

O uso de SSL no modo kernel requer o armazenamento de informações de associação SSL em dois locais. Primeiro, a associação é armazenada em %*windir*%\System32\inetsrv\config\applicationHost.config para o seu site. Quando o site é iniciado, o IIS envia a vinculação para HTTP.sys e HTTP.sys começa a escutar solicitações no IP:Porta especificado (isso funciona para todas as vinculações). Em segundo lugar, a configuração SSL associada à associação é armazenada na configuração de HTTP.sys. Use o comando **netsh** em um prompt de comando para exibir a configuração de associação SSL armazenada em HTTP.sys como no exemplo a seguir:

```
netsh http show sslcert
```

Quando um cliente se conecta e inicia uma negociação SSL, HTTP.sys examina sua configuração de SSL para o par IP:Port ao qual o cliente se conectou. A configuração de SSL HTTP.sys deve incluir um hash de certificado e o nome do repositório de certificados antes que a negociação SSL seja bem-sucedida.

**Dica de solução de problemas:** Se você estiver tendo problemas com uma associação SSL, verifique se a associação está configurada no ApplicationHost.confige se o repositório HTTP.sys contém um hash de certificado válido e um nome de repositório para a associação.

### Escolhendo um certificado

Ao escolher um certificado, considere o seguinte: Deseja que os usuários finais possam verificar a identidade do servidor com seu certificado? Se sim, crie uma solicitação de certificado e envie essa solicitação para uma AC (autoridade de certificação) conhecida, como VeriSign ou GeoTrust, ou obtenha um certificado de uma AC online em seu domínio de intranet. Há três coisas que um navegador geralmente verifica em um certificado de servidor:

1. A data e hora atuais estão dentro do intervalo de datas "Válido de" e "Válido até" no certificado.
2. O "Common Name" (CN) do certificado corresponde ao cabeçalho de host na solicitação. Por exemplo, se o cliente estiver fazendo uma solicitação para `https://www.contoso.com/`, o CN deverá ser `www.contoso.com`.
3. Que o emissor do certificado é uma AC conhecida e confiável.

Se uma ou mais dessas verificações falharem, o navegador solicitará ao usuário avisos. Se você tiver um site da Internet ou um site de intranet em que os usuários finais não são pessoas que você conhece pessoalmente, você sempre deve garantir que esses três parâmetros sejam válidos.

Certificados autoassinados são certificados criados em seu computador. Eles são úteis em ambientes em que não é importante que um usuário final confie em seu servidor, como um ambiente de teste.

## Usando o AppCmd

Você não pode solicitar ou criar um certificado usando AppCmd.exe. Você também não pode usar AppCmd.exe para criar uma associação SSL.

### Definir configurações de SSL

Você pode usar AppCmd.exe para configurar um site para aceitar apenas conexões HTTPS do servidor modificando o atributo **sslFlags** na seção Access. Por exemplo, você pode definir essa configuração para o "Site Padrão" no arquivo ApplicationHost.config (por exemplo, commitPath:APPHOST) usando o seguinte comando:

```
%windir%\system32\inetsrv>AppCmd set config "Default Web Site" -commitPath:APPHOST -section:access -sslFlags:Ssl
```

Se tiver êxito, a seguinte mensagem será exibida:

```
Applied configuration changes to section "system.webServer/security/access" for "MACHINE/WEBROOT/APPHOST/Default Web Site" at configuration commit path "MACHINE/WEBROOT/APPHOST"
```

Observação

Para exigir SSL de 128 bits, altere o valor sslFlags para **Ssl128**.

O exemplo a seguir demonstra como exibir as <configurações de acesso/> seção do Site Padrão. O atributo **sslFlags** foi definido com êxito.

```
%windir%\system32\inetsrv>AppCmd list config "Default Web Site" -section:access
```

A execução do comando resulta na seguinte entrada no arquivo ApplicationHost.config:

```
<system.webServer>
  <security>
    <access flags="Script, Read" sslFlags="Ssl" />
  </security>
</system.webServer>
```

## Usando o WMI

Você não pode solicitar ou criar um certificado usando o namespace WMI do WebAdministration.

### Criar uma associação SSL

O script a seguir demonstra como criar uma nova associação SSL e como adicionar a configuração apropriada para HTTP.sys e IIS:

```
Set oIIS = GetObject("winmgmts:root\WebAdministration")
```

```
'''''''''''''''''''''''''''''''''''''''''''''
' CREATE SSL BINDING
'''''''''''''''''''''''''''''''''''''''''''''

oIIS.Get("SSLBinding").Create _ 
   "*", 443, "4dc67e0ca1d9ac7dd4efb3daaeb15d708c9184f8", "MY"
```

```
'''''''''''''''''''''''''''''''''''''''''''''
' ADD SSL BINDING TO SITE
'''''''''''''''''''''''''''''''''''''''''''''

Set oBinding = oIIS.Get("BindingElement").SpawnInstance_
oBinding.BindingInformation = "*:443:"
oBinding.Protocol = "https"

Set oSite = oIIS.Get("Site.Name='Default Web Site'")
arrBindings = oSite.Bindings

ReDim Preserve arrBindings(UBound(arrBindings) + 1)
Set arrBindings(UBound(arrBindings)) = oBinding

oSite.Bindings = arrBindings
Set oPath = oSite.Put_
```

Observação

O hash de certificado e o repositório devem fazer referência a um certificado real e funcional em seu servidor. Se o hash do certificado e/ou o nome do repositório forem falsos, um erro será retornado.

### Definir configurações de SSL

O script a seguir demonstra como definir as configurações de SSL usando o provedor WMI do IIS. Você pode encontrar esse valor no arquivo IIS\_Schema.xml.

```
CONST SSL = 8  
Set oIIS = GetObject("winmgmts:root\WebAdministration")  
Set oSection = oIIS.Get(\_  
 "AccessSection.Path='MACHINE/WEBROOT/APPHOST',Location='Default Web Site'")  
oSection.SslFlags = oSection.SslFlags OR SSL  
oSection.Put\_ <a id="IISManager"></a>
```

## Gerenciador do IIS

### Obter um certificado

Selecione o nó do servidor na visão de árvore e clique duas vezes no recurso **Certificados do Servidor** na visão de lista:  
![Captura de tela do nó do servidor ALEXIS E 3 L H Home com Certificados de Servidor selecionados.](how-to-set-up-ssl-on-iis/_static/image1.jpg)

Clique em **Criar Certificado Autoassinado...** no painel **Ações**.  
![Captura de tela do painel Ações de Certificados do Servidor com Criar Certificado AutoSignado enfatizado.](how-to-set-up-ssl-on-iis/_static/image3.jpg)

Insira um nome amigável para o novo certificado e clique **em OK**.

Agora você tem um certificado autoassinado. O certificado é marcado para uso de "Autenticação de Servidor"; ou seja, ele usa como um certificado do lado do servidor para criptografia HTTP SSL e para autenticar a identidade do servidor.

### Criar uma associação SSL

Selecione um site no modo de exibição de árvore e clique em **Associações...** no painel **Ações** . Isso apresenta o editor de associações que permite que você crie, edite e exclua associações para seu site. Clique em **Adicionar...** para adicionar sua nova associação SSL ao site.

![Captura de tela da caixa de diálogo de Associações de Site com uma das associações de site padrão.](how-to-set-up-ssl-on-iis/_static/image6.jpg)

As configurações padrão de uma nova associação são definidas como HTTP na porta 80. Selecione **https** na lista suspensa **Tipo** . Selecione o certificado autoassinado que você criou na seção anterior na lista suspensa **certificado SSL** e clique em **OK**.

![Captura de tela da caixa de diálogo Vinculação de Site com o Tipo definido como H T T P S e certificado S S L definido como Certificado de Teste.](how-to-set-up-ssl-on-iis/_static/image9.jpg)

Agora você tem uma nova associação SSL em seu site e tudo o que resta é verificar se ela funciona.  
![Captura de tela da caixa de diálogo Vinculação de Site com as vinculações HTTP e HTTPS.](how-to-set-up-ssl-on-iis/_static/image12.jpg)

### Verificar a vinculação SSL

No painel Ações, em Navegar no Site, clique no link associado à associação que você acabou de criar.  
![Captura de tela da seção Navegar Site do painel Ações com Navegar asterisco dois-pontos 443 ou H T T P S enfatizado.](how-to-set-up-ssl-on-iis/_static/image14.jpg)

O Internet Explorer (IE) 7 e posteriores exibirão uma página de erro porque o certificado autoassinado foi emitido pelo computador, não por uma AC (Autoridade de Certificação) confiável. O IE 7 e posterior confiarão no certificado se você adicioná-lo à lista de Autoridades de Certificação Raiz Confiáveis no armazenamento de certificados do computador local, ou na Política de Grupo para o domínio.
Clique **em Continuar para este site (não recomendado)**.  
![Captura de tela do Internet Explorer exibindo um erro de certificado de segurança. Continuar para este site (não recomendado) é enfatizado.](how-to-set-up-ssl-on-iis/_static/image16.jpg)

### Definir configurações de SSL

Defina as configurações de SSL se quiser que seu site exija SSL ou interaja de maneira específica com certificados de cliente. Clique no nó do site na visualização em árvore para voltar à página inicial do site. Clique duas vezes no recurso **Configurações de SSL** no painel central.

![Captura de tela do painel Configurações do S S L que exige S S L e ignora os certificados do cliente.](how-to-set-up-ssl-on-iis/_static/image19.jpg)

## Resumo

Neste passo a passo, usamos com êxito a ferramenta de linha de comando AppCmd.exe, o WMI do provedor de scripts e o Gerenciador do IIS para configurar o SSL no IIS.

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
