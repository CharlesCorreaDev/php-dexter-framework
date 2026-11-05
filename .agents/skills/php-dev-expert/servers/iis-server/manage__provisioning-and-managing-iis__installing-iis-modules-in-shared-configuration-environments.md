# Instalando módulos do IIS em ambientes de configuração compartilhada | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/installing-iis-modules-in-shared-configuration-environments

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

# Instalando módulos do IIS em ambientes de configuração compartilhada

Comentários

por [Walter Oliver](https://github.com/walterov)

## Visão geral

Este artigo descreve as etapas para instalar um Módulo IIS em computadores que fazem parte do ambiente de Configuração Compartilhada. O processo a seguir pressupõe que n servidores usem uma configuração compartilhada comum. Como a Configuração Compartilhada exige que todos os servidores Web estejam executando os módulos de configuração exatos do IIS, é importante manter esse requisito durante todo o processo de atualização. Este artigo descreve o processo de instalação em detalhes.

### Pré-requisitos:

- O seguinte é necessário para executar esta operação:
- Familiaridade com a Configuração Compartilhada, confira: [https://www.iis.net/learn/manage/managing-your-configuration-settings/shared-configuration\_264#08](manage__managing-your-configuration-settings__shared-configuration_264.md#08)
- Familiaridade com o Balanceamento de Carga e a solução de Provisionamento/Gerenciamento de Site usada em seu ambiente
- Um compartilhamento de arquivos está disponível para ser usado como novo local de configuração compartilhada.

## Etapa 1 – Desativar qualquer automação de gerenciamento e provisionamento de site

Se você estiver usando um sistema automatizado para provisionamento e/ou gerenciamento de sites, precisará desativá-lo. O motivo é que as alterações nos arquivos de configuração compartilhada devem ser interrompidas durante o processo de instalação do módulo. Consulte o sistema de provisionamento de site para realizar esta etapa.

## Etapa 2 – Remover o servidor 1 da solução de balanceamento de carga

As etapas para realizar essa etapa variaram dependendo de qual tecnologia você está usando para Balanceamento de Carga.  
Para Balanceamento de Carga de Rede, examine a documentação em: <https://technet.microsoft.com/library/cc732855(WS.10).aspx>  
Para roteamento de solicitação de aplicativo, consulte: [https://www.iis.net/learn/extensions/planning-for-arr/using-the-application-request-routing-module](extensions__planning-for-arr__using-the-application-request-routing-module.md)  
Para qualquer outra solução (incluindo hardware), consulte a documentação fornecida pelo fabricante.

## Etapa 3 – Remover o servidor 1 da configuração compartilhada e fazer backup da configuração localmente.

Isso é feito por meio da interface do usuário do Gerenciador do IIS e do prompt de linha de comando. Consulte o artigo [https://www.iis.net/learn/manage/managing-your-configuration-settings/shared-configuration\_264#08](manage__managing-your-configuration-settings__shared-configuration_264.md#08) para obter detalhes.

## Etapa 4 – Instalar o módulo IIS no servidor 1

Instale módulos do IIS manualmente.

## Etapa 5 – Exportar a configuração do servidor 1 para um novo local de configuração compartilhada

Depois que o servidor 1 tiver todos os novos módulos instalados, exporte sua configuração para um novo local de configuração compartilhada. Todos os servidores subsequentes apontarão para esse novo local à medida que forem atualizados.

## Etapa 6 – Habilitar Configuração Compartilhada no servidor 1

Agora que a configuração do servidor foi exportada para um novo local, o servidor pode apontar para essa configuração.

## Etapa 7 – Adicionar o servidor 1 à solução de Balanceamento de Carga de Rede

O servidor recém-atualizado agora pode ingressar no conjunto de servidores com balanceamento de carga.

## Etapa 8 – Aplicar alterações a cada servidor subsequente da seguinte maneira:

1. Repita as Etapas 2, 3, 4, 6 (ignorar a etapa 5).
2. Aponte o servidor para o novo local de Configuração Compartilhada criado na etapa 5.
3. Repita a Etapa 7.

## Etapa 9 – Restaurar o sistema de automação de gerenciamento e provisionamento de site

Depois que todos os servidores estiverem apontando para a nova configuração compartilhada criada na etapa 5, você poderá restaurar as operações normais do sistema de provisionamento e gerenciamento.

## Etapa 10 – (Opcional) Limpar o local de configuração compartilhado antigo

Talvez você queira ter a localização do arquivo pronta para quando um novo módulo for instalado. Talvez você queira fazer backup e excluir o conteúdo atual.

## Conclusion

Este artigo aborda as etapas necessárias para instalar um novo módulo em um conjunto de servidores Web usando a configuração compartilhada.

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
