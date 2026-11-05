# Otimização ideal de CPU do Pool de Threads do IIS para hardware NUMA | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-10/thread-pool-ideal-cpu-numa-optimization

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

# Otimização ideal de CPU do Pool de Threads do IIS para hardware NUMA

Comentários

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 10.0 | A Otimização ideal de CPU do Pool de Threads do IIS para hardware NUMA foi introduzida no IIS 10.0 |
| IIS 8.5 e anterior | A Otimização Ideal da CPU para Pool de Threads do IIS em hardware NUMA não era suportada antes do IIS 10.0 |

## Configuração ideal da CPU para o hardware NUMA

A partir do Windows Server 2016, o IIS 10.0 dá suporte à atribuição de CPU ideal automática para os threads do pool de threads, a fim de aprimorar o desempenho e a escalabilidade no hardware NUMA. Esse recurso está habilitado por padrão e pode ser configurado por meio da seguinte chave do Registro:

```
HKEY_LOCAL_MACHINE\System\CurrentControlSet\Services\InetInfo\Parameters\ThreadPoolUseIdealCpu
```

Com esse recurso habilitado, o gerenciador de threads do IIS realiza os melhores esforços para distribuir igualmente os threads do pool de threads do IIS em todas as CPUs de todos os nós NUMA de acordo com as cargas atuais. Em geral, é recomendável manter essa otimização habilitada para hardware NUMA.

Observação

A configuração ideal da CPU é diferente das configurações de atribuição de nó NUMA do processo de trabalho (numaNodeAssignment e numaNodeAffinityMode) [introduzidas nas Configurações de CPU para um Pool de Aplicativos](https://www.iis.net/configreference/system.applicationhost/applicationpools/add/cpu). A configuração ideal da CPU afeta a forma como o IIS distribui os threads do pool de threads, enquanto as configurações de atribuição de nó NUMA do processo de trabalho determinam em qual nó NUMA um processo de trabalho é iniciado.

## Resumo

O IIS 10.0 adicionou a otimização ideal do uso de CPU pelo pool de threads para hardware NUMA.

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
