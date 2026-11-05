# Indicação de nome do servidor do IIS 8.0 (SNI): escalabilidade do SSL | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-server-name-indication-sni-ssl-scalability

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

# Indicação de nome do servidor do IIS 8.0 (SNI): escalabilidade do SSL

Comentários

por [Shaun Eagan](https://github.com/shauneagan)

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.0 | A Indicação de Nome do Servidor foi introduzida no IIS 8.0. |
| IIS 7.5 | Não havia suporte para a Indicação de Nome do Servidor no IIS 7.5. |
| IIS 7.0 | Não havia suporte para a Indicação de Nome do Servidor no IIS 7.0. |

## Problema

À medida que mais sites de comércio eletrônico entram em linha e mais empresas estão armazenando e compartilhando documentos confidenciais online, a capacidade de hospedar e dimensionar sites seguros é cada vez mais importante. Antes do Windows Server 2012, havia alguns desafios quando se trata de hospedar sites seguros:

- **Escalabilidade SSL**: em um ambiente multilocatário, como uma hospedagem compartilhada, há uma limitação de quantos sites seguros podem ser hospedados no Windows Server, resultando em uma baixa densidade de site.
- **Escassez de IPv4**: como o ponto de extremidade de rede só pode ser identificado com a associação IP:Port, em que os locatários solicitam usar a porta SSL padrão, 443, hospedar um site seguro geralmente significa oferecer um endereço IP dedicado por locatário.

## Solução

No Windows Server 2012, o IIS dá suporte à SNI (Indicação de Nome do Servidor), que é uma extensão TLS para incluir um domínio virtual como parte da negociação SSL. O que isso significa efetivamente é que o nome de domínio virtual ou um nome de host agora pode ser usado para identificar o ponto de extremidade da rede. Além disso, uma loja WebHosting altamente escalonável foi criada para complementar o SNI. O resultado é que a densidade de site seguro é muito maior no Windows Server 2012 e é obtida com apenas um endereço IP.

Observe que, para que esse recurso seja usado, os navegadores cliente precisam dar suporte ao SNI. A maioria dos navegadores modernos dá suporte ao SNI; no entanto, o Internet Explorer (de qualquer versão) no Windows XP não dá suporte ao SNI.

## Instruções passo a passo

#### Pré-requisitos:

- O IIS 8.0 está instalado no Windows Server 2012.

  - O repositório de certificados WebHosting e o SNI fazem parte da instalação padrão do IIS. Não há nenhum recurso específico do IIS que precise ser instalado do Gerenciador de Servidores.
- Certificados de exemplo.
- \windows\system32\drivers\etc\hosts foi modificado para uso em um site de exemplo e um certificado. Por exemplo, se o nome CN do certificado for TAPTesting, o arquivo de hosts deverá conter:

  ```
  127.0.0.1 TAPTesting
  ```

#### Soluções alternativas para bugs conhecidos:

Há casos extremos em que o Gerenciador do IIS pode causar a remoção não intencional de associações SSL quando associações SSL tradicionais (IP:Port) e associações SNI (Hostname:Port) são configuradas no mesmo computador. Para solucionar esse problema e/ou confirmar as associações SSL reais, use a ferramenta de linha de comando:

```
netsh http show sslcert
```

### Importar certificados para o Repositório de Hospedagem da Web:

1. Abra **MMC**.
2. Em **Arquivo**, selecione **Adicionar/Remover Snap-in**:  
   ![Captura de tela que mostra o menu Arquivo em M M C. Adicionar ou Remover Snap-in está realçado.](iis-80-server-name-indication-sni-ssl-scalability/_static/image1.png)
3. Selecione **Certificados**. Clique em **Adicionar**:  
   [![Captura de tela que mostra a caixa de diálogo Adicionar ou Remover snap-ins com Certificados selecionados em Snap-ins Disponíveis.](iis-80-server-name-indication-sni-ssl-scalability/_static/image5.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-server-name-indication-sni-ssl-scalability/_static/image3.png)
4. Selecione **a conta do computador**:  
   ![Captura de tela que mostra o snap-in de Certificados na caixa de diálogo. Conta de computador está selecionada.](iis-80-server-name-indication-sni-ssl-scalability/_static/image7.png)
5. Selecione **o computador local** e clique em **Concluir**:  
   ![Captura de tela que mostra a caixa de diálogo Selecionar Computador. O computador local está selecionado.](iis-80-server-name-indication-sni-ssl-scalability/_static/image9.png)
6. Clique em **OK**:  
   [![Captura de tela que mostra a opção Adicionar ou Remover Snap ins.](iis-80-server-name-indication-sni-ssl-scalability/_static/image13.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-server-name-indication-sni-ssl-scalability/_static/image11.png)
7. No painel de navegação, localize o **repositório de Hospedagem da Web** :  
   ![Captura de tela que mostra a Hospedagem da Web realçada no nó Certificados.](iis-80-server-name-indication-sni-ssl-scalability/_static/image15.png)
     
   O **repositório de Hospedagem** Web funciona como o **repositório Pessoal** , portanto, todas as ferramentas existentes para importar e exportar certificados funcionam da mesma maneira. A principal diferença entre o **repositório de Hospedagem da Web** e o Repositório **Pessoal** é que o **repositório de Hospedagem da Web** foi projetado para dimensionar para um número maior de certificados.
8. Importe seus certificados de exemplo para o **repositório de Hospedagem da Web** .

### Criar um site seguro:

1. Abra o **Gerenciador do IIS**.
2. Selecione **Sites** na janela de navegação à esquerda:  
   ![Captura de tela que mostra o Gerenciador I S. Os sites estão selecionados.](iis-80-server-name-indication-sni-ssl-scalability/_static/image17.png)
3. Clique com o botão direito do mouse **em Sites** e selecione **Adicionar Site**:  
   ![Captura de tela que mostra o menu de contexto para Sites.](iis-80-server-name-indication-sni-ssl-scalability/_static/image19.png)
4. Preencha as informações, pois você criaria qualquer site:

   - **Nome do site**: Teste
   - **Caminho físico**: `c:\inetpub\wwwroot`
   - **Tipo**: https
   - **Nome do host**: TAPTesting

     - Essa é uma novidade no Windows Server 8, pois agora é possível especificar o nome de host para SSL.
     - Para evitar o erro de incompatibilidade do nome do certificado, verifique se o nome do host especificado aqui corresponde ao nome CN do certificado.
     - O valor real dessa configuração varia dependendo do certificado de exemplo que está sendo usado.
   - **Usar Indicação de Nome do Servidor**: Selecionado
   - **Certificado SSL**: Escolha o nome do seu certificado; por exemplo: TAPTesting.

     - Observe que os certificados são apresentados de ambas as lojas de **Pessoal** e **Hospedagem Web**.

     ![Captura de tela que mostra a caixa de diálogo Adicionar Site.](iis-80-server-name-indication-sni-ssl-scalability/_static/image1.jpg)
5. Verifique se o site foi criado:  
   ![Captura de tela que mostra o Teste realçado no nó Sites.](iis-80-server-name-indication-sni-ssl-scalability/_static/image21.png)
6. É isso mesmo. O site seguro foi criado usando SNI. A experiência de gerenciamento é muito semelhante à associação SSL tradicional. As únicas diferenças são:

   - O nome do host pode ser especificado para o site SSL.
   - O certificado é armazenado no repositório de Hospedagem da Web para escalabilidade.

### Testar um site seguro:

Abra um navegador e navegue até `https://TAPTesting/`. Observe que, como parte do pré-requisito, o arquivo de hosts deve ter sido modificado para rotear essa solicitação para localhost:

[![Captura de tela que mostra o Internet Explorer. O I S 8 é escrito em texto grande na página da Web.](iis-80-server-name-indication-sni-ssl-scalability/_static/image25.png)](https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-server-name-indication-sni-ssl-scalability/_static/image23.png)

Além disso, para ver o novo tipo de associação SSL, insira o seguinte em uma janela de linha de comando com privilégios elevados:

```
netsh http show sslcert
```

![Captura de tela que mostra uma janela de comando. O nome do host e a porta estão realçados.](iis-80-server-name-indication-sni-ssl-scalability/_static/image27.png)

Observe que a associação SSL é **hostname:port** com valor **TAPTesting:443**.

### Cenários

Tente implantar os seguintes cenários:

- O SNI foi projetado para oferecer escalabilidade em um ambiente multilocatário. Tente configurar milhares de sites seguros usando o SNI.
- Ao contrário das versões anteriores do Windows Server, os certificados no Windows Server 2012 são carregados na memória sob demanda. Depois de configurar milhares de sites seguros usando o SNI, envie uma solicitação GET para um dos sites seguros e observe o uso da memória. É insignificante. Em versões anteriores do Windows Server, se centenas de sites seguros estiverem configurados, enviar apenas uma solicitação GET faria com que o Windows Server carregasse ***todos os*** certificados, resultando em um alto uso de memória e limitasse ainda mais a escalabilidade.
- Configure o Windows Server 2012 com SNI e sites seguros tradicionais. Eles são projetados para coexistir.

## Resumo

Você explorou com êxito o recurso SNI (Indicação de Nome do Servidor) no Windows Server 2012.

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
