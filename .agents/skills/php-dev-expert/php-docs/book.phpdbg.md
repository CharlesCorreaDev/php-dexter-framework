# Depurador PHP Interativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.phpdbg.php

---

# Depurador PHP Interativo

# Introdução

Implementado como um módulo SAPI, o phpdbg pode exercer controle total sobre o ambiente sem afetar
a funcionalidade ou o desempenho do seu código.

O phpdbg visa ser uma plataforma de depuração leve, poderosa e fácil de usar para PHP.
Ele oferece os seguintes recursos:

- Depuração passo a passo
- Pontos de interrupção flexíveis(método de classe, função, arquivo: linha, endereço, opcode)
- Fácil acesso ao PHP com built-in eval()
- API de usuário
- SAPI Agnóstico - Facilmente integrado
- Suporte ao arquivo de configuração do PHP
- JIT super globais
- Suporte readline opcional - operação confortável do terminal
- Operação fácil - Veja ajuda :)

**Opções de linha de comando**

| Opção | Exemplo de Argumento | Descrição |
| --- | --- | --- |
| -c | -c/my/php.ini | Defina o arquivo php.ini para carregar |
| -d | -dmemory\_limit=4G | Definir uma diretiva php.ini |
| -n |  | Desativar php.ini padrão |
| -q |  | Suprimir mensagem de boas-vindas |
| -v |  | Ativar saída do oplog |
| -b |  | Desativar cor |
| -i | -imy.init | Definir arquivo .phpdbginit |
| -I |  | Ignorar .phpdbginit padrão |
| -O | -Omy.oplog | Definir arquivo de saída oplog |
| -r |  | Executar contexto de execução |
| -rr |  | Execute o contexto de execução e saia após a execução (não respeitando os pontos de interrupção) |
| -e |  | Gerar informações estendidas para depurador/criador de perfil |
| -E |  | Habilitar eval passo a passo, cuidado! |
| -s | -s=, -s=foo | Leia o código para executar a partir do stdin com um delimitador opcional |
| -S | -Scli | Substitua o nome SAPI, cuidado! |
|  |  |  |
| -l | -l4000 | Configurar portas de console remoto |
| -a | -a192.168.0.3 | Configurar endereço de ligação do console remoto |
| -x |  | Ativar saída xml (em vez da saída de texto normal) |
| -p | -p, -p=func, -p\* | Opcodes de saída e sair |
| -h |  | Imprima a visão geral da ajuda |
| -V |  | Número da versão impressa |
| -- | -- arg1 arg2 | Use para delimitar argumentos phpdbg e php $argv; acrescente qualquer argumento $argv depois dele |

- [Instalação/Configuração](phpdbg.setup.md)
  - [Configurações de Execução](phpdbg.configuration.md)
- [Constantes predefinidas](phpdbg.constants.md)
- [phpdbg Funções](ref.phpdbg.md)
  - [phpdbg\_break\_file](function.phpdbg-break-file.md) — Insere um ponto de interrupção em uma linha de um arquivo
  - [phpdbg\_break\_function](function.phpdbg-break-function.md) — Insere um ponto de interrupção na entrada de uma função
  - [phpdbg\_break\_method](function.phpdbg-break-method.md) — Insere um ponto de interrupção na entrada de um método
  - [phpdbg\_break\_next](function.phpdbg-break-next.md) — Insere um ponto de interrupção no próximo opcode
  - [phpdbg\_clear](function.phpdbg-clear.md) — Limpa todos os pontos de interrupção
  - [phpdbg\_color](function.phpdbg-color.md) — Define a cor de certos elementos
  - [phpdbg\_end\_oplog](function.phpdbg-end-oplog.md) — Termina um oplog
  - [phpdbg\_exec](function.phpdbg-exec.md) — Tenta definir o contexto de execução
  - [phpdbg\_get\_executable](function.phpdbg-get-executable.md) — Obtém um executável
  - [phpdbg\_prompt](function.phpdbg-prompt.md) — Define o prompt de comando
  - [phpdbg\_start\_oplog](function.phpdbg-start-oplog.md) — Inicia um oplog

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
