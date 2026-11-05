# Suporte ao certificado SSL centralizado do IIS 8.0: escalabilidade e capacidade de gerenciamento do SSL | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability

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

# Suporte ao certificado SSL centralizado do IIS 8.0: escalabilidade e capacidade de gerenciamento do SSL

Comentários

por [Shaun Eagan](https://github.com/shauneagan)

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.0 | O suporte centralizado ao certificado SSL foi introduzido no IIS 8.0. |
| IIS 7.5 | Não há suporte para o suporte centralizado ao certificado SSL no IIS 7.5. |
| IIS 7.0 | Não havia suporte para suporte ao certificado SSL centralizado no IIS 7.0. |

## Problema

À medida que mais sites de comércio eletrônico entram em linha e mais empresas estão armazenando e compartilhando documentos confidenciais online, a capacidade de hospedar e dimensionar sites seguros é cada vez mais importante. Além disso, com a hospedagem na nuvem e a escalabilidade elástica, a capacidade do servidor deve ser adicionada e removida dinamicamente. Antes do Windows Server 2012, há alguns desafios quando se trata de hospedar sites seguros:

- **Escalabilidade SSL**: em um ambiente multilocatário, como uma hospedagem compartilhada, há uma limitação de quantos sites seguros podem ser hospedados no Windows Server, resultando em uma baixa densidade de site.
- **Gerenciamento de SSL**: os certificados são armazenados localmente para cada Windows Server. Portanto, eles precisam ser gerenciados individualmente em cada Windows Server. Uma tarefa simples, como renovar um certificado, deve ser repetida em cada servidor. Além disso, adicionar um novo Windows Server pode levar horas, se houver milhares de certificados que devem ser importados.

## Solução

No Windows Server 2012, o recurso de suporte ao certificado SSL centralizado permite que os administradores do servidor armazenem e acessem os certificados centralmente em um compartilhamento de arquivos. Semelhante ao recurso de Configuração Compartilhada introduzido no Windows Server 2008, os Windows Servers em um farm de servidores podem ser configurados para carregar os certificados do compartilhamento de arquivos sob demanda.

Com esse recurso, a experiência de gerenciamento de associações SSL é muito simplificada. Quando se trata de SSL, o nome DNS e o nome CN do certificado devem corresponder. Um contrato semelhante pode também ser estendido para os nomes de arquivo dos certificados. Por exemplo, `www.contoso.com` usaria o certificado com um nome `www.contoso.com.pfx`de arquivo. Esse contrato permite que o IIS 8.0 tenha apenas uma associação SSL, independentemente do número de sites seguros que estão usando esse recurso. O certificado correspondente é inferido pelo valor de SNI ou nome do host do site solicitado e pela correspondência dele com o nome do arquivo do certificado.

## Instruções passo a passo

### Pré-requisitos

- O IIS 8.0 está instalado no Windows Server 2012 com o recurso Certificado SSL Centralizado. Esse recurso é um componente opcional do IIS e não está instalado como parte da instalação padrão.

  - Para instalar esse recurso, no **Gerenciador do Servidor**, selecione **o Suporte ao Certificado SSL Centralizado** no nó **de segurança** :

    ![Captura de tela da árvore de navegação do Gerenciador de Servidores. A opção Suporte a Certificados SSL Centralizados no nó Segurança está selecionada e realçada.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image1.png)
- Certificados de exemplo com senha NULL. (Ou você pode ter certificados de exemplo com uma senha global.)

  - Os certificados devem ter a convenção de nomenclatura de CN\_name.pfx (ou seja, `www.contoso.com.pfx`).
  - Se o certificado for um certificado curinga, use "\_" como o caractere curinga. (ou seja, `_.contoso.com.pfx`).
  - Se o certificado tiver vários nomes CN, eles deverão ser nomeados como arquivos individuais. (ou seja, `www.contoso1.com.pfx`, `www.contoso2.com.pfx`etc.)
- Dois compartilhamentos de arquivo: um para configuração compartilhada e outro para certificados SSL centralizados.

  - O servidor IIS está usando a configuração compartilhada.
  - Os certificados de exemplo foram copiados para o compartilhamento de arquivos para certificados SSL centralizados.
- \windows\system32\drivers\etc\hosts foi modificado para uso em um site de exemplo e um certificado. Por exemplo, se o nome CN do certificado for centralCert0, o arquivo de hosts deverá conter:

  **127.0.0.1 centralCert0**

#### Soluções alternativas para bugs conhecidos

Não há bugs conhecidos para esse recurso no momento.

### Configurar o recurso de suporte ao certificado SSL centralizado

1. Abra o **Gerenciador do IIS**.
2. Selecione o nó do servidor na janela de navegação à esquerda:  
   ![Captura de tela da caixa de diálogo do I I S Manager. O nó do servidor na janela de navegação é exibido. A opção W I N dash M M V três um A K seis oito H G está realçada.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image3.png)
3. Em **Gerenciamento**, clique duas vezes em **Certificados Centralizados**:  
   ![Captura de tela dos ícones de Gerenciamento. O ícone Certificados Centralizados está realçado.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image5.png)
4. No painel **Ações**, selecione **Editar Configurações de Função**:  
   ![Captura de tela do painel de ações. O botão Editar Configurações de Funcionalidade está realçado.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image7.png)
5. Digite as seguintes informações:

   - **Habilitar Certificados Centralizados**: Selecionado
   - **Caminho físico**: Por exemplo:`\\ccdemo\centralcert`

     - Esse é o caminho UNC para o compartilhamento de arquivos em que os certificados estão localizados.
   - **Nome de usuário**: especifique uma conta de usuário que tenha acesso de leitura ao compartilhamento de arquivos.
   - **Senha/confirmação de senha**.
   - **Senha da chave privada do certificado**:

     - Isso é opcional. Se os certificados não tiverem senha, deixe isso vazio.
     - Se os certificados tiverem uma senha global, insira essa senha aqui.

       ![Captura de tela da caixa de diálogo Editar Configurações de Certificados Centralizados. Habilitar Certificados Centralizados está selecionado.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image1.jpg)
6. Agora, o recurso de suporte ao certificado SSL centralizado está pronto para ser usado. Observe que o Gerenciador do IIS lê os certificados e preenche as informações mais relevantes sobre os certificados. Essas informações são armazenadas em cache para melhorar o desempenho.
7. Um recurso de capacidade de gerenciamento que é notável é a capacidade de agrupar os certificados por suas datas de validade:  
   [![Captura de tela da caixa de diálogo Certificados Centralizados. Na lista suspensa 'Agrupar por', a Data de Expiração é realçada.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image11.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image9.png)
8. Veja como é fácil ver os certificados que:

   - Expirado
   - Expira amanhã
   - Expirar esta semana
   - Expirar na próxima semana
   - Expirar no próximo mês
   - Mais tarde

     ![Captura de tela da caixa de diálogo Certificados Centralizados. Na coluna Nome do Arquivo, Expirado, Amanhã, Esta Semana, Próxima Semana estão todos realçados.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image13.png)

### Criar um site seguro

1. Abra o **Gerenciador do IIS**.
2. Selecione **Sites** na janela de navegação à esquerda:  
   ![Captura de tela da árvore de navegação I S Manager. A opção Sites está realçada.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image15.png)
3. Selecione **Adicionar Site**:  
   ![Captura de tela da árvore de navegação I S Manager. A opção Sites está selecionada e Adicionar Site está realçada.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image17.png)
4. Preencha as informações, pois você criaria qualquer site:

   - **Nome do site**: centralCert0
   - **Caminho físico**: `c:\inetpub\wwwroot`
   - **Tipo**: https
   - **Nome do host**: centralcert0

     - Isso é novo para o Windows Server 2012, em que o nome de host pode ser especificado para SSL.
     - O valor real dessa configuração varia dependendo do certificado de exemplo que está sendo usado.
   - **Exigir indicação de nome do servidor**: não selecionado

     - Você também pode optar por selecionar Exigir Indicação de Nome do Servidor, se desejar. O Repositório de Certificados Centralizado não exige que você use o SNI, mas funciona corretamente ao usar o SNI.
     - Observe que, na versão de Visualização do Desenvolvedor, o Repositório de Certificados Centralizado também exigiu o uso do SNI. Essa restrição foi removida a partir da versão Beta.
   - **Usar o Repositório de Certificados Centralizado**: Selecionado

     - Observe que não é necessário selecionar um certificado correspondente específico a ser usado.
     - Por meio do uso do contrato de nomenclatura, o certificado correspondente é selecionado automaticamente. Neste exemplo, o IIS tenta ler centralcert0.pfx do compartilhamento de arquivo de certificado SSL central.

     ![Captura de tela da caixa de diálogo Adicionar Site. O Repositório de Certificados Centralizado está selecionado. Na caixa Nome do site aparece o texto central Cert zero.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image3.jpg)
5. Verifique se o site foi criado:  
   ![Captura de tela da árvore de navegação do IIS Manager. Em Sites, o Cert zero central está destacado.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image19.png)
6. É isso mesmo. O site seguro foi criado usando o Suporte ao Certificado SSL Centralizado. A experiência de gerenciamento é muito semelhante à configuração compartilhada e à associação SSL tradicional. As diferenças são:

   - Os certificados são armazenados centralmente em um compartilhamento de arquivos.
   - O nome do host pode ser especificado para o site SSL.
   - A associação SSL não é gerenciada explicitamente de 1 para 1.

### Testar um site seguro

Abra um navegador e navegue até `https://centralcert0/`. Observe que, como parte do pré-requisito, o arquivo de hosts deve ser modificado para rotear essa solicitação para localhost:

[![Captura de tela da página da Web do Central Cert Zero. IIS 8 é exibido na página da Web.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image23.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image21.png)

Além disso, para ver o novo tipo de associação SSL, insira o seguinte em uma janela de linha de comando com privilégios elevados:

```
netsh http show sslcert
```

![Captura de tela de uma janela de linha de comando. A janela mostra o novo tipo de associação S S L. A associação S S L é a porta de dois-pontos do nome do host.](iis-80-centralized-ssl-certificate-support-ssl-scalability-and-manageability/_static/image25.png)

Observe que a associação SSL é **hostname:port** com valor **\*:443**. Além disso, nenhum **certificado****hash** está associado a essa vinculação porque o certificado correspondente é carregado sob demanda com base no contrato de nome de arquivo do certificado.

### Cenários

Tente implantar os seguintes cenários:

- O suporte centralizado para certificados SSL é projetado para escalabilidade em um ambiente multilocatário. Tente configurar milhares de sites seguros usando esse recurso.
- Com milhares de certificados, execute o comando a seguir em uma janela de linha de comando com privilégios elevados. Observe que, independentemente do número de sites seguros, há simplesmente apenas uma associação:

  `netsh http show sslcert`
- Tente adicionar um novo servidor neste farm de servidores. Usando a configuração compartilhada e o recurso de suporte centralizado ao certificado SSL, este agora é um processo de três etapas:

  1. Configure o novo servidor para usar a configuração compartilhada.
  2. Configure o novo servidor para usar o suporte centralizado ao certificado SSL.
  3. Crie a associação SSL. Em uma janela de linha de comando com privilégios elevados, digite:

     ```
     add sslcert hostnameport=*:443 appid={00112233-4455-6677-8899-AABBCCDDEFF}
     ```
- Ao contrário das versões anteriores do Windows Server, os certificados no Windows Server 2012 são carregados na memória sob demanda. Depois de configurar milhares de sites seguros usando o recurso de Suporte ao Certificado SSL Centralizado, envie uma solicitação GET para um dos sites seguros e observe o uso da memória. É insignificante. Nas versões anteriores do Windows Server, se centenas de sites seguros tiverem sido configurados, enviar apenas uma solicitação GET fará com que o Windows Server carregue ***todos os*** certificados, resultando em um alto uso de memória e limita ainda mais a escalabilidade.
- Crie sites seguros com suporte para certificados SSL SNI, tradicionais e centralizados. Eles são projetados para coexistir.

## Resumo

Você explorou com êxito o recurso Certificado SSL Centralizado no Windows Server 2012.

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
