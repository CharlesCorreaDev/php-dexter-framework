# Configurando mapeamentos de certificado de cliente um para um | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/configuring-one-to-one-client-certificate-mappings

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

# Configurando mapeamento de certificados de cliente individual

Comentários

por [Robert Lucero](https://github.com/rlucero)

## Tela de fundo

O IIS 6 tinha uma interface de usuário para configurar e mapear certificados um a um para autenticação. Ele permitiu que os usuários selecionassem o certificado do cliente de validação e atribuíssem as credenciais de usuário autorizadas. Não há uma interface do usuário semelhante no IIS 7 e superior. Este guia foi projetado para instruir os usuários a configurar certificados de cliente um a um usando o Editor de Configuração do Administration Pack. Os usuários que não têm esse complemento podem exibir a seção de apêndice para argumentos appCmd e exemplos de código C# para executar este passo a passo.

## Esquema do IIS 7 e Versões Posteriores

Esse é o esquema para o Recurso de Autenticação por Mapeamento de Certificado de Cliente do IIS em versões 7 e posteriores.

```
<sectionSchema name="system.webServer/security/authentication/iisClientCertificateMappingAuthentication">
  <attribute name="enabled" type="bool" defaultValue="false" />
  <attribute name="oneToOneCertificateMappingsEnabled" type="bool" defaultValue="true" />
  <element name="oneToOneMappings">
    <collection addElement="add" clearElement="clear">
      <attribute name="enabled" type="bool" defaultValue="true" />
      <attribute name="userName" type="string" />
      <attribute name="password" type="string" encrypted="true" />
      <attribute name="certificate" type="string" required="true" isUniqueKey="true" />
    </collection>
  </element>
</sectionSchema>
```

## Pré-requisitos

Esses são os pré-requisitos necessários para este passo a passo. Não vou cobrir como criar ou fazer essas coisas.

1. Módulo de mapeamento de certificados de cliente instalado no IIS
2. Um site com uma associação HTTPS, configurada corretamente
3. Um certificado Base-64 (arquivo .cer). [*Observação:* pode ser qualquer certificado válido de 64 bits, mas deve estar no formato de arquivo]
4. Instalado um certificado de cliente em um cliente
5. Instalação do [IIS 7 Administration Pack Technical Preview 2](https://blogs.iis.net/rlucero/archive/2008/05/13/iis7-administration-pack-and-database-manager-technical-preview-2.aspx)

## Etapa 1: Obtendo o blob de certificado

O item de coleção oneToOneMappings tem um atributo chamado certificado. O valor necessário para esse atributo não é o certificado, mas sim o blob do certificado propriamente dito. Aqui está como você pode extraí-lo.

1. Clique com o botão direito do mouse no arquivo .cer.
2. Selecione *Abrir com...* no menu de contexto
3. Selecione o Bloco de Notas na lista de Outros Programas e clique em OK.
   *Observação: o Bloco de Notas pode estar oculto sob uma lista suspensa na visualização de lista do Vista/Windows 2008*
4. Isso é o que deve ser exibido no bloco de notas:

   ```
   -----BEGIN CERTIFICATE----- 
   MIIEfjCCA2agAwIBAgIKFW1IXAAAAAAAAjANBgkqhkiG9w0BAQUFADAbMRkwFwYD 
   VQQDExBJSVNSZW1vdGVNZ3JUZXN0MB4XDTA4MDIxMTIxNTk1NloXDTA5MDIxMTIy 
   MDk1NlowaDELMAkGA1UEBhMCVVMxEzARBgNVBAgTCldhc2hpbmd0b24xEDAOBgNV 
   BAcTB1JlZG1vbmQxDTALBgNVBAoTBE1TRlQxDDAKBgNVBAsTA0lJUzEVMBMGA1UE 
   AxMMUkxVQ0VSTzItSUlTMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC3611j 
   34q2qQgHa7ao11TcQMDYlJMrqET05MWFY1/Vso+leujLoIGTfdHOuz4IBVoeUE+y 
   mlL8r53s2BQeVFROnDtg4Jko1zJsz7AUAnQNBk/GYA1AHYmhY79Z0p1KXW/wSTJB 
   tdUn732GQOqYf4wY8jOD2zUJDUG4HXm6ib8ajwIDAQABo4IB+TCCAfUwDgYDVR0P 
   AQH/BAQDAgTwMBMGA1UdJQQMMAoGCCsGAQUFBwMBMHgGCSqGSIb3DQEJDwRrMGkw 
   DgYIKoZIhvcNAwICAgCAMA4GCCqGSIb3DQMEAgIAgDALBglghkgBZQMEASowCwYJ 
   YIZIAWUDBAEtMAsGCWCGSAFlAwQBAjALBglghkgBZQMEAQUwBwYFKw4DAgcwCgYI 
   KoZIhvcNAwcwHQYDVR0OBBYEFHbHA+HwZcIrslklj1W3O23UFrBgMB8GA1UdIwQY 
   MBaAFMxzlGbmkp2+phhDg7TPfi83d7UVMHMGA1UdHwRsMGowaKBmoGSGL2h0dHA6 
   Ly9paXNzYjMwNS9DZXJ0RW5yb2xsL0lJU1JlbW90ZU1nclRlc3QuY3JshjFmaWxl 
   Oi8vXFxpaXNzYjMwNVxDZXJ0RW5yb2xsXElJU1JlbW90ZU1nclRlc3QuY3JsMIGe 
   BggrBgEFBQcBAQSBkTCBjjBEBggrBgEFBQcwAoY4aHR0cDovL2lpc3NiMzA1L0Nl 
   cnRFbnJvbGwvaWlzc2IzMDVfSUlTUmVtb3RlTWdyVGVzdC5jcnQwRgYIKwYBBQUH 
   MAKGOmZpbGU6Ly9cXGlpc3NiMzA1XENlcnRFbnJvbGxcaWlzc2IzMDVfSUlTUmVt 
   b3RlTWdyVGVzdC5jcnQwDQYJKoZIhvcNAQEFBQADggEBAEsSkcx0re36IL80UphJ 
   w/srR3LBsy8sfwqxBMzMTdF7k6jYtUVpn3D2Dd4JXXVOaEVud9YNn9pr6xJL4t79 
   Zh+hJzIPA5pQLbccx4vjWB4cWEYxzcoKYCuUdZrfPFXO1a5kQAj8IZ0/6bhMceyR 
   Z7dRDoaIuAGQLFAlC/KjIBCemDi54MlWtvATQ8bmiRuEOWeneK2Vd2e0fxyezk05 
   dRqa8DEC74CQN4rQuz395ECm+M/hQnN+dHOygV8n9swd0bdNq8qypwfVUes5HIpj 
   LFmKTuGyFSVj7jv+64oTxvxtYX2QFp9q6Bi+qj0uyrX8Xjxy5rPSVPEfnxPCBg58 
   RCI= 
   -----END CERTIFICATE-----
   ```
5. Remova -----BEGIN CERTIFICATE----- e -----END CERTIFICATE----
6. Formate o blob de certificado para ser uma única linha.
7. Salve esse arquivo como clientCertBlob.txt

## Etapa 2: Habilitando a autenticação de mapeamento de certificado de cliente do IIS e mapeamento de certificado de um para um para um site

As próximas etapas abordarão como habilitar o recurso de autenticação de mapeamento de certificado de cliente, o Mapeamento de Certificado Um para Um e como adicionar uma entrada de mapeamento.

1. Inicie **o Inetmgr**, a interface do usuário do Gerenciador do IIS
2. Selecione o site do SSL que está sendo configurado e abra o **Editor de Configuração**
3. Digite "**system.webServer/security/authentication/iisClientCertificateMappingAuthentication**" no menu suspenso **Seção**.
4. Selecione o campo **habilitado** e altere o valor para **true**
5. Selecione a entrada de grade de propriedade **oneToOneCertificateMappingsEnabled** e altere o valor para **true**
6. Selecione a entrada da grade de propriedades **oneToOneMappings** e clique em **Editar Itens...** no Painel de Tarefas de Ações
7. Clique em **Adicionar** na lista de tarefas **do Editor de Coleção**
8. Copie o blob do certificado de cadeia de caracteres mencionado acima e cole-o no campo **certificate**
9. Defina o **nome de usuário** e **a senha** como os clientes serão autenticados.
10. Definir o campo **habilitado** como **true**
11. Fechar **Editor de Coleção**
12. Clique em **Aplicar** no Painel de Tarefas Ações [*Observação:* Clique em **Geração de Script** antes de clicar em **Aplicar** para obter scripts para este processo]

Após a conclusão, o servidor será configurado para suportar a autenticação de mapeamento de certificado de cliente do IIS com uma única entrada de mapeamento um-para-um de certificado.

## Etapa 3: Habilitar a autenticação de certificado do cliente para um site usando o SSL

Depois que um mapeamento for criado e o recurso tiver sido habilitado, um site deverá ser configurado para usar certificados de cliente.

1. No **Inetmgr,** a interface do Gerenciador do IIS, selecione o site SSL que você deseja para usar certificados de cliente.
2. Selecione o módulo de interface do usuário **do SSL**
3. Em **Certificados do cliente:** selecione a opção **Aceitar**
4. Clique em **Aplicar** no Painel de Tarefas de Ações

Agora, o site está configurado para aceitar e autenticar clientes com base em certificados de cliente.

## Etapa 4: Verificar se tudo funciona

O cliente que está tentando acessar a página da Web SSL precisa do certificado do cliente instalado corretamente. Se um cliente tentar solicitar uma página sem o certificado, um 401 será atendido. Depois que o certificado do cliente estiver instalado corretamente, a página será atendida normalmente.

Jogue com diferentes combinações de regras de autorização para atender às suas necessidades.

## Resumo

Agora você configurou mapeamentos de certificado do cliente do IIS e um único mapeamento de certificado um a um.

## Apêndice

Estes são os Snippets de Código para executar as etapas passo a passo 2 e 3. Tudo isso foi gerado usando a Geração de Script do Editor de Configuração.

**Instruções específicas do AppCmd**

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/authentication/iisClientCertificateMappingAuthentication 
    /enabled:"True" /oneToOneCertificateMappingsEnabled:"True"  /commit:apphost

appcmd.exe set config "Default Web Site" -section:system.webServer/security/authentication/iisClientCertificateMappingAuthentication 
    /+"oneToOneMappings.[userName='testUser',password='securePassWord!1',certificate='CERTIFICATE_BLOB']" /commit:apphost

appcmd.exe set config "Default Web Site" -section:system.webServer/security/access /sslFlags:"Ssl, SslNegotiateCert, Ssl128"  /commit:apphost
```

**Código C#:**

```
using System;
using System.Text;
using Microsoft.Web.Administration;

internal static class Sample {

    private static void Main() {
        
        using(ServerManager serverManager = new ServerManager()) { 
            Configuration config = serverManager.GetApplicationHostConfiguration();
            
            ConfigurationSection iisClientCertificateMappingAuthenticationSection = 
                    config.GetSection("system.webServer/security/authentication/iisClientCertificateMappingAuthentication", "Default Web Site");
            iisClientCertificateMappingAuthenticationSection["enabled"] = true;
            iisClientCertificateMappingAuthenticationSection["oneToOneCertificateMappingsEnabled"] = true;
            
            ConfigurationElementCollection oneToOneMappingsCollection = 
                     iisClientCertificateMappingAuthenticationSection.GetCollection("oneToOneMappings");
            
            ConfigurationElement addElement = oneToOneMappingsCollection.CreateElement("add");
            addElement["userName"] = @"testUser";
            addElement["password"] = @"securePassWord!1";
            addElement["certificate"] = @"CERTIFICATE_BLOB";
            oneToOneMappingsCollection.Add(addElement);
            
            serverManager.CommitChanges();
        }
    }
}

using System;
using System.Text;
using Microsoft.Web.Administration;

internal static class Sample {

    private static void Main() {
        
        using(ServerManager serverManager = new ServerManager()) { 
            Configuration config = serverManager.GetApplicationHostConfiguration();
            
            ConfigurationSection accessSection = config.GetSection("system.webServer/security/access", "Default Web Site");
            accessSection["sslFlags"] = @"Ssl, SslNegotiateCert, Ssl128";
            
            serverManager.CommitChanges();
        }
    }
}
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
  2026-03-28
