# Registro em log avançado para o IIS 8.5 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-85/enhanced-logging-for-iis85

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

# Registro em log avançado para o IIS 8.5

Comentários

por [Gary Ericson](https://github.com/garyericson)

> No IIS 8.5, o administrador tem a opção de registrar campos personalizados adicionais de cabeçalhos de solicitação ou resposta ou de variáveis de servidor.

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.5 e posterior | O registro em log aprimorado foi introduzido no IIS 8.5. |
| IIS 8.0 e anterior | Não há suporte para log aprimorado antes do IIS 8.5. |

## Problema

O IIS (Serviços de Informações da Internet) no Windows Server 2012 fornece recursos de log limitados para um conjunto fixo de campos padrão, sem opções de extensibilidade ou personalização para registro em log. Os administradores que precisam registrar campos além desse conjunto padrão devem criar um módulo de log personalizado.

## Solução

No IIS 8.5 e posterior, o administrador tem a opção de registrar campos personalizados adicionais de cabeçalhos de solicitação ou resposta ou de variáveis de servidor.

## Instruções passo a passo

### Configurar logs aprimorados para o IIS 8.5 e posterior

1. Abra o **Gerenciador do IIS**.
2. Selecione o site ou o servidor no painel **Conexões** e clique duas vezes em **Log**. É importante observar que o registro de logs aprimorado está disponível apenas para registro de logs ao nível do site – se você selecionar o servidor no painel **Conexões**, a seção **Campos Personalizados** da caixa de diálogo **Campos de Log do W3C** será desabilitada.
3. No campo **Formatar** , em **Arquivo de Log**, selecione **W3C** e clique em **Selecionar Campos...**.  
   ![Selecionar campos](enhanced-logging-for-iis85/_static/image1.jpg)
4. Na caixa de diálogo **Campos de Log do W3C**, clique em **Adicionar Campo...**. Observe que o registro em log aprimorado está disponível apenas para registro em log no nível do site – se você selecionou o servidor no painel Conexões, então **Adicionar Campo...** será **desabilitado**.  
   ![Adicionar campos personalizados](enhanced-logging-for-iis85/_static/image2.jpg)
5. Na caixa de diálogo **Adicionar Campo Personalizado** , insira um **Nome de Campo** para identificar o campo personalizado no arquivo de log. Observe que o nome do campo não pode conter espaços.
6. Selecione o **Tipo de Origem**. Você pode selecionar **Cabeçalho de Solicitação**, **Cabeçalho de Resposta** ou **Variável de Servidor** (observe que o registro em log aprimorado não pode registrar uma variável de servidor com um nome que contenha caracteres de minúsculas – para incluir uma variável de servidor no log de eventos apenas verifique se seu nome consiste em todos os caracteres de maiúsculas).
7. Selecione **Origem**, que é o nome do cabeçalho HTTP ou variável de servidor (dependendo do **Tipo de Origem** selecionado) que contém um valor que você deseja registrar em log. Você também pode inserir sua própria cadeia de caracteres de origem personalizada. Por exemplo, para gravar o cabeçalho HTTP personalizado "X-FORWARDED-FOR", insira essa cadeia de caracteres na **Origem**.  
   ![Inserir origem personalizada](enhanced-logging-for-iis85/_static/image3.jpg)
8. Clique em **OK.**
9. Clique em **Adicionar Campo...** para cada campo personalizado adicional que você deseja adicionar. Você também pode clicar em **Remover Campo** para remover um campo personalizado adicionado ou clicar em **Editar Campo...** para editá-lo.
10. Clique em **OK.**
11. Clique em **Aplicar** no painel **Ações** para aplicar a nova configuração.

Depois que os campos personalizados tiverem sido configurados, o IIS criará novos arquivos de log de texto com "\_x" acrescentado ao nome do arquivo para indicar que o arquivo contém campos personalizados.

Observe que o tamanho total dos dados coletados de todos os campos personalizados não pode exceder 65.536 bytes. Se o total exceder 65.536 bytes, o IIS truncará os dados.

## Resumo

Neste guia, você configurou o IIS para adicionar campos personalizados aos logs do IIS.

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
