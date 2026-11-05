# A Enumeração Pcntl\QosClass

> **Fonte / Source:** https://www.php.net/manual/pt_BR/enum.pcntl-qosclass.php

---

# A Enumeração Pcntl\QosClass

(PHP 8 >= 8.4.0)

## Introdução

A enumeração **Pcntl\QosClass** é usada para especificar a prioridade de processo
de usuário com [pcntl\_setqos\_class()](function.pcntl-setqos-class.md).

## Resumo da enumeração

namespace **Pcntl**;

enum ****QosClass****  
{

case UserInteractive
; //
Executa o processo como o nível de prioridade mais alto.

case UserInitiated
; //
Executa o processo em nível de alta prioridade, mas abaixo dos UserInteractive.

case Default
; //
Executa o processo depois de todos os processos de alta prioridade, mas antes dos de baixa prioridade.

case Utility
; //(descrição de Pcntl\QosClass::Utility pendente)

case Background
; //
Executa o processo depois que todos os processos de alta prioridade tenham terminado.

}

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
