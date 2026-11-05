# Operações do usuário para Zend

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.uopz.php

---

# Operações do usuário para Zend

# Introdução

A extensão uopz - Operações do Usuário para Zend -
expõe a funcionalidade do mecanismo Zend normalmente
usada em tempo de compilação e execução para
permitir a modificação das estruturas internas que representam o código PHP,
e para que o código do usuário interaja com a Máquina Virtual.

A uopz apoia as seguintes atividades:

- Sobrecarga de alguns opcodes, incluindo ZEND\_EXIT e ZEND\_NEW
- Funções e métodos de backup e restauração
- Renomeação de funções e métodos
- Cópia de funções e métodos
- Exclusão de funções e métodos
- Redefinição de constantes globais e de classe
- Exclusão de constantes globais e de classe
- Composição e modificação de classes em tempo de execução

> **Nota**:
>
> Todas as atividades suportadas são compatíveis com opcache.

**Cuidado**

PECL uopz 6.1.1 não é compatível com Xdebug >= 2.9.4.
Versões posteriores do uopz não são compatíveis com Xdebug < 2.9.4.

- [Instalação/Configuração](uopz.setup.md)
  - [Dependências](uopz.requirements.md)
  - [Instalação](uopz.installation.md)
  - [Configurações de Execução](uopz.configuration.md)
- [Constantes predefinidas](uopz.constants.md)
- [Funções de Uopz](ref.uopz.md)
  - [uopz\_add\_function](function.uopz-add-function.md) — Adiciona função ou método inexistente
  - [uopz\_allow\_exit](function.uopz-allow-exit.md) — Permite o controle sobre o código de operação de saída desabilitado
  - [uopz\_backup](function.uopz-backup.md) — Faz backup de uma função
  - [uopz\_compose](function.uopz-compose.md) — Compõe uma classe
  - [uopz\_copy](function.uopz-copy.md) — Copia uma função
  - [uopz\_del\_function](function.uopz-del-function.md) — Exclui função ou método adicionado anteriormente
  - [uopz\_delete](function.uopz-delete.md) — Exclui uma função
  - [uopz\_extend](function.uopz-extend.md) — Estende uma classe em tempo de execução
  - [uopz\_flags](function.uopz-flags.md) — Obtém ou define sinalizadores em função ou classe
  - [uopz\_function](function.uopz-function.md) — Cria uma função em tempo de execução
  - [uopz\_get\_exit\_status](function.uopz-get-exit-status.md) — Recupera o último status de saída definido
  - [uopz\_get\_hook](function.uopz-get-hook.md) — Obtém o gancho previamente definido na função ou método
  - [uopz\_get\_mock](function.uopz-get-mock.md) — Obtém o mock atual para uma classe
  - [uopz\_get\_property](function.uopz-get-property.md) — Obtém o valor da propriedade de classe ou instância
  - [uopz\_get\_return](function.uopz-get-return.md) — Obtém um valor de retorno definido anteriormente para uma função
  - [uopz\_get\_static](function.uopz-get-static.md) — Obtém as variáveis ​​estáticas do escopo da função ou método
  - [uopz\_implement](function.uopz-implement.md) — Implementa uma interface em tempo de execução
  - [uopz\_overload](function.uopz-overload.md) — Sobrecarrega um opcode da máquina virtual
  - [uopz\_redefine](function.uopz-redefine.md) — Redefine uma constante
  - [uopz\_rename](function.uopz-rename.md) — Renomeia uma função em tempo de execução
  - [uopz\_restore](function.uopz-restore.md) — Restaura uma função a partir de um backup
  - [uopz\_set\_hook](function.uopz-set-hook.md) — Define o gancho a ser executado ao entrar em uma função ou método
  - [uopz\_set\_mock](function.uopz-set-mock.md) — Usa mock em vez de classe para novos objetos
  - [uopz\_set\_property](function.uopz-set-property.md) — Define o valor da classe existente ou propriedade de instância
  - [uopz\_set\_return](function.uopz-set-return.md) — Fornece um valor de retorno para uma função existente
  - [uopz\_set\_static](function.uopz-set-static.md) — Define as variáveis ​​estáticas no escopo da função ou método
  - [uopz\_undefine](function.uopz-undefine.md) — Indefine uma constante
  - [uopz\_unset\_hook](function.uopz-unset-hook.md) — Remove o gancho definido anteriormente na função ou método
  - [uopz\_unset\_mock](function.uopz-unset-mock.md) — Remove a definição de um mock previamente definido
  - [uopz\_unset\_return](function.uopz-unset-return.md) — Desfaz um valor de retorno previamente definido para uma função

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
