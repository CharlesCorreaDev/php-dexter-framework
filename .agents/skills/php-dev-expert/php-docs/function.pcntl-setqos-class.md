# Define a classe QoS do thread atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pcntl-setqos-class.php

---

# pcntl\_setqos\_class

(PHP 8 >= 8.4.0)

pcntl\_setqos\_class — Define a classe QoS do thread atual

### Descrição

function **pcntl\_setqos\_class**([Pcntl\QosClass](enum.pcntl-qosclass.md) `$qos_class` = **`Pcntl\QosClass::Default`**): [void](language.types.void.md)

Define a classe de Qualidade de Serivço (QoS) do thread
atual.

### Parâmetros

`qos_class`
:   A classe de Qualidade de Serviço a ser atribuída ao thread atual. O
    sistema operacional usa isso como uma dica para agendar tempo de CPU, prioridade de E/S
    e uso de energia, com classes mais altas tendo precedência sobre as mais baixas. Consulte
    [Pcntl\QosClass](enum.pcntl-qosclass.md) para os casos disponíveis.

    **`Pcntl\QosClass::UserInteractive`**
    :   Prioridade máxima. Destinado a trabalhos que controlam diretamente uma interface
        de usuário e devem ser concluídos praticamente instantaneamente para evitar atrasos
        percebidos, como processamento de eventos ou desenho.

    **`Pcntl\QosClass::UserInitiated`**
    :   Alta prioridade, logo abaixo de **`UserInteractive`**.
        Destinado a trabalhos que o usuário iniciou explicitamente e está ativamente
        aguardando, com previsão de conclusão em poucos segundos.

    **`Pcntl\QosClass::Default`**
    :   Prioridade padrão, usada quando nenhuma classe mais específica se aplica. Executa
        após o trabalho de maior prioridade, mas antes de **`Utility`**
        e **`Background`**.

    **`Pcntl\QosClass::Utility`**
    :   Prioridade mais baixa, destinada a trabalhos de longa duração dos quais o usuário tem conhecimento,
        mas que não está aguardando ativamente, como downloads, importações ou computação em
        massa. Agendado de forma eficiente em termos de energia.

    **`Pcntl\QosClass::Background`**
    :   Prioridade mais baixa, destinada a tarefas que o usuário desconhece, como
        pré-busca, indexação ou manutenção. Altamente otimizada para eficiência energética
        e pode ser adiada quando o sistema estiver sobrecarregado.

> **Nota**:
>
> Essa função está disponível apenas em plataformas Apple.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança um [Error](class.error.md) se a chamada subjacente a
`pthread_set_qos_class_self_np()` falhar.

### Veja também

- [pcntl\_getqos\_class()](function.pcntl-getqos-class.md) - Obtém a classe QoS do thread atual
- [Pcntl\QosClass](enum.pcntl-qosclass.md)

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
