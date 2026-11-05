# Usando criptografia para proteger senhas | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/using-encryption-to-protect-passwords

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

# Usando criptografia para proteger senhas

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

Este documento fornece uma visão geral das etapas necessárias para definir o pool de aplicativos e o isolamento do processo de trabalho para servidores IIS 7.0 e superiores. O isolamento do pool de aplicativos envolve a proteção de dados que WAS (o processo do sistema local do IIS) precisa acessar. Um exemplo desses dados são as senhas do pool de aplicativos. O isolamento do processo de trabalho, por outro lado, envolve a proteção de dados que a identidade do pool de aplicações precisa acessar. Um exemplo desses dados é a senha da conta de usuário anônima.

## Pré-requisitos

Para ajudar a simplificar esse processo, são fornecidas duas partes do código de exemplo que:

- Crie um novo provedor de criptografia RSA no machine.config.
- Defina o nome do provedor padrão em machine.config.

A seção de pré-requisito final orienta você na configuração de quatro contas de usuário que serão usadas em tópicos posteriores.

## Criando um novo aplicativo de provedor de criptografia RSA

1. Abra o Bloco de Notas do Windows e crie um arquivo em um diretório de sua escolha nomeada **createProvider.cs** que contém o seguinte código C#:

   ```
   using System;
   using Microsoft.Web.Administration;
   using System.Configuration;

   namespace testingEncryption
   {   
       public class createProvider   
       {
           public static void Main(string[] args)
           {
               String keyContainerName = args[0];
               String description = args[1];
               String providerName = args[2];
               System.Configuration.Configuration machineConfig =
               System.Configuration.ConfigurationManager.OpenMachineConfiguration();
               System.Configuration.ProviderSettings settings =
                   new System.Configuration.ProviderSettings(providerName,
                   "System.Configuration.RsaProtectedConfigurationProvider,
                   System.Configuration,
                   Version=2.0.0.0, Culture=neutral,
                   PublicKeyToken=b03f5f7f11d50a3a");
               settings.Parameters["description"] = description;
               settings.Parameters["keyContainerName"] = keyContainerName;
               settings.Parameters["cspProviderName"] = String.Empty;
               settings.Parameters["useMachineContainer"] = "true";
               settings.Parameters["useOAEP"] = "false";
               settings.Parameters["name"] = providerName;
               ProtectedConfigurationSection pcSection =
                   (System.Configuration.ProtectedConfigurationSection)machineConfig.GetSection ("configProtectedData");
               pcSection.Providers.Add(settings);
               machineConfig.Save();
           }
       }
   }
   ```
2. Em seguida, inicie um prompt de comando com privilégios elevados:

   - Clique no menu **Iniciar** .
   - Clique com o botão direito no **Prompt de Comando.**
   - Selecione **Executar como administrador.**
3. Na janela do prompt de comando, navegue até o local em que você salvou o arquivo **createProvider.cs** e execute o seguinte comando para compilar seu código:  
   `%SystemRoot%\Microsoft.NET\Framework\v2.0.50727\csc.exe /reference:%SystemRoot%\System32\inetsrv\Microsoft.Web.Administration.dll createProvider.cs`

Esta etapa agora está concluída.

### Criando um aplicativo para alterar o provedor padrão

1. Abra o Bloco de Notas do Windows e crie um arquivo em um diretório de sua escolha nomeada **setProvider.cs** que contém o seguinte código C#:

   ```
   using System;
   using Microsoft.Web.Administration;
   using System.Configuration;
   namespace testingEncryption 
   {
       public class setProvider
       {
           public static void Main(string[] args)
           {
               String provider = args[0];  // example: DataProtectionConfigurationProvider
               System.Configuration.Configuration machineConfig =
                   System.Configuration.ConfigurationManager.OpenMachineConfiguration();
               ProtectedConfigurationSection pcSection =
                   (System.Configuration.ProtectedConfigurationSection)machineConfig.GetSection("configProtectedData");
               string oldEncryptionProviderName = pcSection.DefaultProvider;
               Console.WriteLine("The default provider is currently: " + oldEncryptionProviderName);
               Console.WriteLine("Changing the default provider to: " + provider);
               pcSection.DefaultProvider = provider;
               machineConfig.Save();
           }
       }
   }
   ```
2. Em seguida, inicie um prompt de comando com privilégios elevados:

   - Clique no menu **Iniciar** .
   - Clique com o botão direito no **Prompt de Comando.**
   - Selecione **Executar como administrador.**
3. Na janela do prompt de comando, navegue até o local em que você salvou o arquivo **setProvider.cs** e execute o seguinte comando para compilar seu código:  
   `%SystemRoot%\Microsoft.NET\Framework\v2.0.50727\csc.exe /reference:%SystemRoot%\System32\inetsrv\Microsoft.Web.Administration.dll setProvider.cs`

Esta etapa agora está concluída.

## Criando contas de usuário

Nesta etapa, criamos quatro novas contas de usuário que serão usadas em todo este documento.

Para começar, abra uma janela do shell de comando em execução sob direitos administrativos usando as seguintes etapas:

1. Clique no menu **Iniciar** .
2. Clique com o botão direito no **Prompt de Comando**.
3. Selecione **Executar como administrador.**
4. Na janela de comando, execute os seguintes comandos:

```
net user /add AppPoolIdentity1 password1
   net user /add AppPoolIdentity2 password2
   net user /add AnonymousAccount1 password3
   net user /add AnonymousAccount2 password
```

Esta etapa agora está concluída.

## Isolamento do pool de aplicativos

O IIS tem um processo chamado WAS que é executado no contexto de LOCALSYSTEM e é o único processo que precisa de acesso às senhas do pool de aplicativos. Nesta tarefa, nós:

- Crie uma nova chave RSA (iisWasKey) à qual apenas o LOCALSYSTEM e os Administradores tenham acesso. Essa chave será usada para criptografar as senhas de cada pool de aplicativos.
- Crie dois pools de aplicativos.
- Configure cada um desses pools de aplicativos para serem executados em identidades diferentes e criptografe suas senhas usando o iisWasKey.
- Restrinja as permissões do sistema de arquivos NTFS nos arquivos de chave para que apenas SYSTEM e Administradores tenham acesso.

### Criar nova chave RSA

1. Clique no menu **Iniciar** .
2. Clique com o botão direito do mouse no **Prompt de Comando.**
3. Selecione **Executar como administrador.**
4. Na janela de comando, navegue até onde você salvou o **createProvider.exe** e execute o seguinte comando:

```
createProvider.exe iisWasKey RsaKeyForWAS Rsa_WAS
```

Verifique se essas alterações ocorreram corretamente. Abra o `%SystemRoot%\Microsoft.NET\Framework\v2.0.50727\config\machine.config` no Bloco de Notas do Windows e verifique se as linhas da seção estão presentes para o novo provedor.

```
<configProtectedData defaultProvider="RsaProtectedConfigurationProvider">
    <providers>
        <add name="RsaProtectedConfigurationProvider" type="System.Configuration.RsaProtectedConfigurationProvider,System.Configuration, Version=2.0.0.0, Culture=neutral, PublicKeyToken=b03f5f7f11d50a3a" description="Uses RsaCryptoServiceProvider to encrypt and decrypt" keyContainerName="NetFrameworkConfigurationKey" cspProviderName="" useMachineContainer="true" useOAEP="false"/>

        <add name="DataProtectionConfigurationProvider" type="System.Configuration.DpapiProtectedConfigurationProvider,System.Configuration, Version=2.0.0.0, Culture=neutral, PublicKeyToken=b03f5f7f11d50a3a" description="Uses CryptProtectData and CryptUnProtectData Windows APIs to encrypt and decrypt" useMachineProtection="true" keyEntropy=""/>

        <add name="Rsa_WAS" type="System.Configuration.RsaProtectedConfigurationProvider,System.Configuration, Version=2.0.0.0, Culture=neutral, PublicKeyToken=b03f5f7f11d50a3a" description="RsaKeyForWAS" keyContainerName="iisWasKey" cspProviderName="" useMachineContainer="true" useOAEP="false" />
    </providers>
</configProtectedData>
```

### Criptografar as senhas do pool de aplicativos

Por padrão, sempre que uma propriedade é criptografada, o IIS usa o defaultProvider para criptografia definida em machine.config. O valor padrão para isso é RsaProtectedConfigurationProvider.

Nesta etapa, usamos o aplicativo setProvider.exe criado anteriormente para alterar o provedor para iisWasKey e, em seguida, usar o Gerenciador do IIS para alterar as senhas:

1. Clique no menu **Iniciar** .
2. Clique com o botão direito do mouse no **Prompt de Comando.**
3. Selecione **Executar como administrador.**
4. Na janela de comando, navegue até onde você salvou o **setProvider.exe** e execute o seguinte comando:

```
setProvider.exe Rsa_WAS
```

O provedor padrão Rsa\_WAS foi alterado com êxito.

### Criar novos pools de aplicativos

Nesta etapa, criamos dois novos pools de aplicativos que isolamos um do outro. Para fazer isso, inicie o Gerenciador do IIS:

1. Clique **em Iniciar** e digite '**INetMgr.exe**' e pressione **Enter** (se solicitado, selecione **Continuar** a elevar suas permissões).
2. Clique no **+** botão ao lado do nome do computador na seção **Conexões** .
3. Clique em **Pools de Aplicativos**.
4. Selecione a tarefa à direita intitulada **Adicionar Pool de Aplicativos**.
5. Insira o nome '**AppPool1**' e pressione **OK** conforme mostrado:

   [![Captura de tela da caixa de diálogo Adicionar Pool de Aplicativos com foco na opção O K.](using-encryption-to-protect-passwords/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/manage/configuring-security/using-encryption-to-protect-passwords/_static/image1.jpg)
6. Repita as etapas anteriores, mas desta vez use o nome **AppPool2**.
7. Agora você verá a seguinte tela no IIS:  
   [![Captura de tela da tela Pools de Aplicativos mostrando uma lista de pools de aplicativos no servidor.](using-encryption-to-protect-passwords/_static/image4.jpg)](https://learn.microsoft.com/pt-br/iis/manage/configuring-security/using-encryption-to-protect-passwords/_static/image3.jpg)
8. Observe como a identidade de **AppPool1** e **AppPool2** é **NetworkService**. Alteraremos isso para que sejam as contas que criamos anteriormente clicando com o botão direito do mouse em **AppPool1** e selecionando **Configurações Avançadas**
9. Sob o título **Modelo de Processo**:

   - Clique no botão à direita das palavras **Identidade**.
   - Na janela **Identidade do Pool de Aplicativos**, selecione o botão de opção "**Conta personalizada**" e clique no botão "Definir...".
   - Insira o nome de usuário e a senha a seguir na caixa de diálogo **Definir Credenciais** .

     nome de usuário: **AppPoolIdentity1**  
     senha: **password1**

     [![Captura de tela da caixa de diálogo Definir Credenciais, mostrando os campos Nome de Usuário, Senha e Confirmar senha.](using-encryption-to-protect-passwords/_static/image6.jpg)](https://learn.microsoft.com/pt-br/iis/manage/configuring-security/using-encryption-to-protect-passwords/_static/image5.jpg)
10. Agora, o valor **de identidade** deve aparecer conforme mostrado abaixo:

    [![Captura de tela da caixa de diálogo Configurações Avançadas com o valor de identidade sendo realçado na seção Modelo de Processo.](using-encryption-to-protect-passwords/_static/image8.jpg)](https://learn.microsoft.com/pt-br/iis/manage/configuring-security/using-encryption-to-protect-passwords/_static/image7.jpg)
11. Clique em **OK**  para salvar suas alterações.
12. Repita a etapa anterior para **AppPool2** e usuário o nome de usuário "**AppPoolIdentity2**" e a senha "**password2**".
13. Você verá o seguinte exibido no Gerenciador do IIS (principalmente as identidades dos pools de aplicativos foram alteradas):

    [![Captura de tela dos Pools de Aplicativos mostrando as identidades alteradas para os pools de aplicativos.](using-encryption-to-protect-passwords/_static/image10.jpg)](https://learn.microsoft.com/pt-br/iis/manage/configuring-security/using-encryption-to-protect-passwords/_static/image9.jpg)
14. Verifique as alterações usando o Bloco de Notas do Windows e abrindo o `%SystemRoot%\System32\Inetsrv\applicationHost.config` arquivo. Navegue até a seção **applicationPools** e você verá que criptografamos as senhas do pool de aplicativos usando a chave Rsa\_WAS conforme o esperado:

    ```
    password="[enc:Rsa_WAS:jAAAAAECAAADZgAAAKQAAAUkBfhWFbUHIt/qtlo+P7CiZC10r9H0DGBvAl
                 U2mhiOxMoHXX6Dz0S8TQjKx2YTKvuE8y+SBUWrEs3JYzXKOkY45Q9z6E/3BFvru5oR9uzbjInASKF/83N
                 N1tIEsoorQWmUOjnL4XM9RNzpqkY6TgyC3CyPUGN9fR7li5+AUupHHfgVPMzcLHfCsoq+ri+X6IbEnJdu
                  cUEAYBn1P9F/Zxk=:enc]" />
                  password="[enc:Rsa_WAS:jAAAAAECAAADZgAAAKQAAEbQEa/sAmyLbryAR0hD3voip2+0RfzM44sXPekp
                  I2H7HYLzta55NfLcG8vSPHhasahKVgO4wcIcT03CLSn+5koWvAaIRdeClhXWK/X8ZQPFooOpyhOqT0TEP5v
                  jB+DXAKgq0RC6ufHFtrHMy0U69ew7/49YXEcrkF+o8OJZ1K+EkgA3J2ikHKxW0pFBU0tFvLCjt2/UXypfNI
                  0hYPe2syk=:enc]" />
    ```

### Bloquear os provedores de criptografia

Por padrão, o IIS\_IUSRS recebe acesso de leitura às chaves quando elas são criadas. No entanto, você pode usar a ferramenta ASPNET\_REGIIS para remover esse acesso. Para fazer isso, execute os seguintes comandos no prompt de comando com privilégios elevados:

```
cd /d %systemroot%
cd Microsoft.NET\Framework\v2.0.50727
aspnet_regiis.exe -pr iisWasKey IIS_IUSRS
```

Isso removeu IIS\_IUSRS (o grupo de identidades do pool de aplicativos) de poder ler a **iisWasKey**, que se destina apenas ao acesso de Administradores e LOCALSYSTEM.

## Isolamento do processo de trabalho

Este tópico informa como configurar o isolamento do processo de trabalho criando dois novos sites que fazem parte de pools de aplicativos diferentes e têm diferentes identidades de autenticação anônima. Em seguida, criamos um novo provedor RSA para cada pool de aplicativos para criptografar as senhas anônimas.

### Criar novos sites

Nesta seção, criamos dois novos sites e adicionamos cada site a um pool de aplicativos que criamos anteriormente. Para começar, abra um shell de comando em execução sob direitos administrativos usando as seguintes etapas:

1. Clique no menu **Iniciar** .
2. Clique com o botão direito no **Prompt de Comando.**
3. Selecione **Executar como administrador.**
4. Na janela de comando, navegue até o diretório **wwwroot** usando o seguinte comando:

   ```
   cd /d %SystemDrive%\inetpub\wwwroot
   ```
5. Crie um novo diretório chamado "**um**" e um diretório "**dois**" usando os seguintes comandos:

   ```
   mkdir one
   ```

   ```
   mkdir two
   ```
6. Crie um arquivo  **deDefault.htm** básico nos diretórios "**um**" e "**dois**" que contêm o seguinte código HTML:

   ```
   <html><body>Hello from site X</body></html>
   ```

   Observação

   Substitua 'X' por 'um' ou 'dois' dependendo do local do diretório do arquivo.

Agora, use o gerenciador do IIS para criar dois sites:

1. Clique **em Iniciar**, digite **INetMgr.exe** e pressione **Enter** (se solicitado, selecione **Continuar** a elevar suas permissões).
2. Clique no **+** botão ao lado do nome do computador na seção **Conexões** .
3. Clique com o botão direito do mouse em **Site** no modo de exibição de árvore em **Conexões** e selecione **Adicionar Site**.
4. Use as seguintes informações para criar seu site:

   ***Nome do Site: Um  
   Pool de aplicativos: AppPool1  
   Caminho Físico: {local do diretório inetpub}\wwwroot\one  
   Porta: 81***

   Isso deve ser semelhante ao seguinte quando concluído:

   ![Captura de tela da caixa de diálogo Adicionar Site com o campo Nome do Site que está sendo preenchido pela entrada Um.](using-encryption-to-protect-passwords/_static/image11.jpg)
5. Clique em **OK** para salvar as alterações.
6. Repita as duas etapas anteriores, mas desta vez use as seguintes informações para o segundo site:

   ***Nome do Site: Two  
   Pool de aplicativos: AppPool2  
   Caminho Físico: {localização do diretório inetpub}\wwwroot\two  
   Porta: 82***

Agora você criou dois novos sites **chamados Um** e **Dois** e os adicionou aos pools de aplicativos **AppPool1** e **AppPool2** .

As URLs para testar seus sites são:

- `http://localhost:81` para o site **One**
- `http://localhost:82` para o site **Two**

### Criar novos provedores para cada pool de aplicativos

Nesta seção, criamos um novo provedor RSA para cada um dos pools de aplicativos:

1. Clique no **menu Iniciar.**
2. Clique com o botão direito no **Prompt de Comando.**
3. Selecione **Executar como administrador.**
4. Na janela de comandos, navegue até onde você salvou o **createProvider.exe** e execute o seguinte comando:

   ```
   createProvider.exe App1Key RsaKeyForAppPool1 Rsa_app1
   createProvider.exe App2Key RsaKeyForAppPool2 Rsa_app2
   ```

### Definir a conta anônima para o Site Um

Na janela do prompt de comando com privilégios elevados, execute o seguinte comando:

```
setProvider.exe Rsa_app1
```

1. Retorne ao **Gerenciador do IIS** e clique duas vezes no site **Um**.
2. Clique duas vezes no item **Autenticação** sob o cabeçalho **Nome do Recurso**.
3. Selecione **Autenticação Anônima** e clique em **Editar** no título **Tarefas** no lado direito, que abre a caixa de diálogo **Editar Credenciais de Autenticação Anônima** .
4. Clique na opção **Usuário Específico** e, em seguida, clique no botão **Definir** .
5. Insira o nome de usuário **AnonymousAccount1** e a **senha3** e selecione **OK.**
6. Isso abre a seguinte caixa de diálogo:

   [![Captura de tela da caixa de diálogo Editar Credenciais de Autenticação Anônima.](using-encryption-to-protect-passwords/_static/image14.jpg)](https://learn.microsoft.com/pt-br/iis/manage/configuring-security/using-encryption-to-protect-passwords/_static/image13.jpg)
7. Pressione **OK** para salvar suas alterações.

### Definir a conta anônima para o Site Dois

Na janela do prompt de comando com privilégios elevados, execute o seguinte comando:

```
setProvider.exe Rsa_app2
```

1. Retorne ao **Gerenciador do IIS** e clique duas vezes no site **Dois**.
2. Clique duas vezes no item **Autenticação** sob o cabeçalho **Nome do Recurso**.
3. Selecione **Autenticação Anônima** e clique em **Editar** no título **Tarefas** no lado direito, que abre a caixa de diálogo **Editar****Credenciais Anônimas** .
4. Clique na opção **Usuário Específico** e clique em **Definir**.
5. Insira o nome de usuário **AnonymousAccount2** e senha **4** e selecione **OK**.
6. Clique em **OK**  para salvar suas alterações.

### Redefinir o provedor de criptografia para o padrão

- Retorne à janela do prompt de comando com privilégios elevados e execute o seguinte comando:

```
setProvider.exe RsaProtectedConfigurationProvider
```

Observação

Essa alteração garante que todas as propriedades futuras criptografadas usem o provedor de criptografia padrão.

### Verificar as alterações

Verifique se o que queríamos aconteceu. Usando o Bloco de Notas do Windows, abra o `%SystemRoot%\System32\Inetsrv\applicationHost.config` arquivo:

- Observe que a senha do **AppPool1** e **do AppPool2** ainda está protegida com a chave **Rsa\_Was** .
- Observe que a senha para **AnonymousAccount1** também está protegida com a chave **Rsa\_app1** :

  ```
  password="[enc:Rsa_app1:jAAAAAECAAADZgAAAKQAAKoz4LV7HyPQuyNzXh8gspB0rPG7j3Ijvn3d+jY3/f
      gma8ZxA7AHLUxjis9b0+Qu8XkLvsGn/A+F+m1O68gY1LkWzAcSW9ks81FuiBVhpZx73FzEo6aOz2QqBduJ7Xhu
      x923KMBqmwkIVJ0mVAdzwFIm6LWymwRXxNxDE4eosKsw6QP6Rd6duC8gckaLxrTndclErQYgGdMt3W6ofxzRMlc=:enc]" />
  ```
- Por fim, observe que a senha **AnonymousAccount2** também está protegida com a chave **Rsa\_app2** :

  ```
  password="[enc:Rsa_app2:jAAAAAECAAADZgAAAKQAAKmHMhCTICEUhGncSGCxQc6ll/QGXo0asEIzOf3rIjl
   sBDGRYhlDQWlf2QbFcIsBGYt8dHo9hzAQN/f03BPSlaFynevpSx4xJOg2/B8ATgPmCg4vgxpY5huZbGxongs55c
     Rr20WFXsxzlUuw1xoUZI8c1+7gQPOtF0Rwh1g8NBmb5ML/R3jAIFcMtVhaj0OOIfAP7JCjdInwztBqK0XO7FM=:enc]" />
  ```

### Bloquear os provedores de criptografia

Proteja as permissões de arquivo para nossas chaves, conforme feito anteriormente acima. Execute os seguintes comandos no prompt de comando com privilégios elevados:

```
cd /d %systemroot%
cd Microsoft.NET\Framework\v2.0.50727
aspnet_regiis.exe -pr App1Key IIS_IUSRS
aspnet_regiis.exe -pa App1Key   AppPoolIdentity1
aspnet_regiis.exe -pr App2Key IIS_IUSRS
aspnet_regiis.exe -pa App2Key   AppPoolIdentity2
```

Esses comandos removeram a capacidade de IIS\_IUSRS ler as chaves e adicionaram apenas a identidade do pool de aplicativos que precisa de permissão de acesso às chaves.

### Testando seus sites

Agora, teste seus sites:

- `http://localhost:81`
- `http://localhost:82`

Tudo deve continuar funcionando como antes.

## Resumo

Em resumo, executamos as seguintes tarefas para proteger as configurações do pool de aplicativos:

- Criar dois pools de aplicativos
- Criou duas contas de usuário local e as configurou como as identidades do pool de aplicativos
- Criamos uma chave de criptografia de administração e a usamos para proteger todas as senhas de identidades do pool de aplicativos
- Usamos o ASPNET\_REGIIS para remover o grupo IIS\_IUSRS (identidades do pool de aplicativos) do acesso à chave.

Essas tarefas garantiram efetivamente que somente as contas Administradores e SYSTEM possam ler as senhas dos grupos de aplicativos. Portanto, se os aplicativos dentro de um pool de aplicativos tentassem recuperar as senhas para o pool de aplicativos (ou qualquer) deles, a tentativa falharia.

Para isolar as configurações do processo de trabalho, nós:

- Criou uma nova conta de identidade anônima
- Criamos um novo provedor para o pool de aplicativos
- Criptografamos a senha de autenticação anônima com a chave do pool de aplicativos
- Removemos o acesso ao provedor de autenticação anônimo para IIS\_IUSRS e concedemos acesso apenas à identidade do pool de aplicativos

Isso garantiu efetivamente que a identidade do pool de aplicativos pode descriptografar a senha anônima à qual pertence e mais ninguém.

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
  2025-04-10
